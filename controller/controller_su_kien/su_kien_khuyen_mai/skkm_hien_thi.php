<?php 
include "sk_pages.php";
$sql = "SELECT * FROM tbl_nhan_vien";
$query = mysqli_query($mysqli,$sql);
$query1 = mysqli_query($mysqli,$sql);
?>

<head>
    <meta charset="UTF-8">
    <script src="../../assets/js/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="../../assets/fullcalendar/lib/main.css">
    <script src="../../assets/fullcalendar/lib/main.js"></script>
    <script src="../../assets/fullcalendar/lib/locales-all.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            locale: 'vi',
            initialView: 'dayGridMonth',
            height: 500,
            events: '../../../controller/controller_su_kien/su_kien_khuyen_mai/sk_xu_ly.php',

            selectable: true,
            select: async function(start, end, allDay) {
                <?php
                        if ($_SESSION['login'] && $_SESSION['chuc_vu'] == "Quản lý" || $_SESSION['chuc_vu'] =="Nhân viên")
                            {
                    ?>
                const {
                    value: formValues
                } = await Swal.fire({
                    title: 'Thêm sự kiện',
                    confirmButtonText: 'Lưu',
                    cancelButtonText: 'Đóng',
                    showCloseButton: true,
                    showCancelButton: true,
                    html: '<input id="swalEvtTitle" class="swal2-input" placeholder="Tên sự kiện">' +
                        '<input id="swalEvtDesc" class="swal2-input" placeholder="Nội dung sự kiện">' +
                        '<select class="swal2-input input_nguoi_tao" id="swalEvtURL" required>' +
                        '<option value="">-- Người tạo --</option>' +
                        '<?php while ($row = mysqli_fetch_array($query)) { ?>' +
                        '<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>' +
                        '<?php } ?>' +
                        '</select>',
                    focusConfirm: false,
                    preConfirm: () => {
                        return [
                            document.getElementById('swalEvtTitle').value,
                            document.getElementById('swalEvtDesc').value,
                            document.getElementById('swalEvtURL').value
                        ]
                    }
                });
                <?php
                        }
                    ?>
                if (formValues) {
                    // Add event
                    fetch("../../../controller/controller_su_kien/su_kien_khuyen_mai/sk_them_sua_xoa.php", {
                            method: "POST",
                            headers: {
                                "Content-Type": "application/json"
                            },
                            body: JSON.stringify({
                                request_type: 'addEvent',
                                start: start.startStr,
                                end: start.endStr,
                                event_data: formValues
                            }),
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.status == 1) {
                                Swal.fire('Thêm sự kiện thành công!', '', 'success');
                            } else {
                                Swal.fire(data.error, '', 'error');
                            }

                            // Refetch events from all sources and rerender
                            calendar.refetchEvents();
                        })
                        .catch(console.error);
                }
            },

            eventClick: function(info) {
                <?php
                    if ($_SESSION['login'] && $_SESSION['chuc_vu'] == "Quản lý")
                        {
                ?>
                info.jsEvent.preventDefault();
                // change the border color
                info.el.style.borderColor = 'red';
                Swal.fire({
                    title: info.event.title,
                    html: '<p>' + info.event.extendedProps.noi_dung +
                        '</p><br> <p>Người tạo : ' + info.event.extendedProps.nguoi_tao +
                        '</p>',
                    showCloseButton: true,
                    showCancelButton: true,
                    showDenyButton: true,
                    cancelButtonText: 'Đóng',
                    confirmButtonText: 'Xóa',
                    denyButtonText: 'Sửa',
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Delete event
                        fetch("../../../controller/controller_su_kien/su_kien_khuyen_mai/sk_them_sua_xoa.php", {
                                method: "POST",
                                headers: {
                                    "Content-Type": "application/json"
                                },
                                body: JSON.stringify({
                                    request_type: 'deleteEvent',
                                    event_id: info.event.id
                                }),
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.status == 1) {
                                    Swal.fire('Xóa sự kiện thành công!', '',
                                        'success');
                                } else {
                                    Swal.fire(data.error, '', 'error');
                                }

                                // Refetch events from all sources and rerender
                                calendar.refetchEvents();
                            })
                            .catch(console.error);
                    } else if (result.isDenied) {
                        // Edit and update event
                        Swal.fire({
                            title: 'Sửa sự kiện',
                            html: '<input id="swalEvtTitle_edit" class="swal2-input" placeholder="Enter title" value="' +
                                info.event.title + '">' +
                                '<textarea id="swalEvtDesc_edit" class="swal2-input" placeholder="Enter description">' +
                                info.event.extendedProps.noi_dung +
                                '</textarea>' +
                                '<select id="swalEvtURL_edit" class="swal2-input input_nguoi_tao"  required>' +
                                '<option value="">-- Người tạo --</option>' +
                                '<?php while ($row = mysqli_fetch_array($query1)) { ?>' +
                                '<option value="<?php echo $row["name"]; ?>"><?php echo $row["name"]; ?></option>' +
                                '<?php } ?>' +
                                '</select>',
                            focusConfirm: false,
                            confirmButtonText: 'Submit',
                            preConfirm: () => {
                                return [
                                    document.getElementById(
                                        'swalEvtTitle_edit').value,
                                    document.getElementById(
                                        'swalEvtDesc_edit').value,
                                    document.getElementById(
                                        'swalEvtURL_edit').value
                                ]
                            }
                        }).then((result) => {
                            if (result.value) {
                                // Edit event
                                fetch("../../../controller/controller_su_kien/su_kien_khuyen_mai/sk_them_sua_xoa.php", {
                                        method: "POST",
                                        headers: {
                                            "Content-Type": "application/json"
                                        },
                                        body: JSON.stringify({
                                            request_type: 'editEvent',
                                            start: info.event.startStr,
                                            end: info.event.endStr,
                                            event_id: info.event.id,
                                            event_data: result.value
                                        })
                                    })
                                    .then(response => response.json())
                                    .then(data => {
                                        if (data.status == 1) {
                                            Swal.fire(
                                                'Cập nhật sự kiện thành công!',
                                                '', 'success');
                                        } else {
                                            Swal.fire(data.error, '', 'lỗi');
                                        }

                                        // Refetch events from all sources and rerender
                                        calendar.refetchEvents();
                                    })
                                    .catch(console.error);
                            }
                        });
                    } else {
                        Swal.close();
                    }
                });
                <?php
                }
                    else if ( $_SESSION['login'] && $_SESSION['chuc_vu'] == "Hội viên")
                    {
                        ?>
                info.jsEvent.preventDefault();
                Swal.fire({
                    title: info.event.title,
                    html: '<p>' + info.event.extendedProps.noi_dung +
                        '</p><br> <p>Người tạo : ' + info.event.extendedProps.nguoi_tao +
                        '</p>',
                })
                <?php
                    }
                ?>
            }
        });

        calendar.render();
    });
    </script>
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div id="calendar"></div>
        </div>
        <?php 
    // Start the session
        if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý" || $_SESSION['chuc_vu']=="Nhân viên")
    {
        ?>
        <div class="wrapper-2">
            <div class="sk__search-input">
                <i class="fa-sharp fa-solid fa-magnifying-glass sk__search-input--icon"></i>
                <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <input class='sk__input-search' type="text" name="sk__input-search" placeholder="Tìm Kiếm">
                </form>
            </div>
            <div class="sk__table">
                <table class="sk__table-view">
                    <tr class="sk__table-view--title">
                        <th>ID</th>
                        <th>NGƯỜI TẠO</th>
                        <th>NGÀY</th>
                    </tr>
                    <?php
                    // Duyệt qua các phẩn từ trong bảng
                    while($row = mysqli_fetch_array($query2))
                    {
                    ?>
                    <tr class="sk__table-view--data">
                        <td><?php echo $row["id"]?></td>
                        <td><?php echo $row["nguoi_tao"]?></td>
                        <td><?php echo $row["start"]?></td>
                        <?php
                    }
                    ?>
                </table>
                <form class="sk__pagination" method="GET" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                    <center>
                        <?php echo $listPages; ?>
                    </center>
                </form>
            </div>
        </div>
        <?php 
    }
?>
</body>