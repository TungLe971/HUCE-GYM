<?php 
include_once "../../../controller/connection.php";
$sql = "SELECT * FROM tbl_lop";
$query = mysqli_query($mysqli,$sql);
$sql1 = "SELECT * FROM tbl_nhan_vien";
$query1 = mysqli_query($mysqli,$sql1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../assets/css/lich_di_lam.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/fullcalendar/lib/main.min.css">
    <script src="../../assets/js/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/fullcalendar/lib/main.min.js"></script>
</head>

<body class="bg-light">
    <div class="container py-5" id="page-container">
        <div class="row">
            <div class="col-md-9">
                <div id="calendar"></div>
            </div>
            <?php
                    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý" )
                {
                    ?>
            <div class="col-md-3">
                <div class="cardt rounded-0 shadow">
                    <div class="card-header bg-gradient bg-primary text-light">
                        <h5 class="card-title">Thêm lịch học</h5>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <form action="../../../controller/controller_nhan_vien/lich_di_lam/lich_lam_save.php"
                                method="post" id="schedule-form">
                                <input type="hidden" name="id" value="">
                                <div class="form-group mb-2">
                                    <label for="lop" class="control-label">Lớp</label>
                                    <select class="form-control form-control-sm rounded-0" name="lop" id="lop" required>
                                        <option value="">-- Lớp dạy --</option>
                                        <?php
                                    // Duyệt qua các phần tử trong bảng
                                    while ($row = mysqli_fetch_array($query)) {
                                            echo "<option value='" . $row["ten_lop"] . "'>" . $row["ten_lop"] . "</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="nhan_vien" class="control-label">Nhân viên</label>
                                    <select class="form-control form-control-sm rounded-0" name="nhan_vien"
                                        id="nhan_vien" required>
                                        <option value="">-- Nhân viên --</option>
                                        <?php
                                    // Duyệt qua các phần tử trong bảng
                                    while ($row = mysqli_fetch_array($query1)) {
                                            echo "<option value='" . $row["name"] . "'>" . $row["name"] . "</option>";
                                        }
                                    ?>
                                    </select>
                                </div>
                                <div class="form-group mb-2">
                                    <label for="ngay_hoc" class="control-label">Ngày Học</label>
                                    <input type="datetime-local" class="form-control form-control-sm rounded-0"
                                        name="ngay_hoc" id="ngay_hoc" required>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <button class="btn btn-primary btn-sm rounded-0" type="submit" form="schedule-form"><i
                                    class="fa fa-save"></i> Lưu</button>
                            <button class="btn btn-default border btn-sm rounded-0" type="reset" form="schedule-form"><i
                                    class="fa fa-reset"></i> Hủy</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            }
                else{}
                ?>
        </div>
    </div>

    <!-- Event Details Modal -->
    <div class="modal fade" tabindex="-1" data-bs-backdrop="static" id="event-details-modal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content rounded-0">
                <div class="modal-header rounded-0">
                    <h5 class="modal-title">Thông tin lớp</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body rounded-0">
                    <div class="container-fluid">
                        <dl>
                            <dt class="text-muted">Lớp</dt>
                            <dd id="lop" class="fw-bold fs-4"></dd>
                            <dt class="text-muted">Nhân viên</dt>
                            <dd id="nhan_vien" class=""></dd>
                            <dt class="text-muted">Ngày học</dt>
                            <dd id="ngay_hoc" class=""></dd>
                        </dl>
                    </div>
                </div>
                <?php
                    if($_SESSION['login'] && $_SESSION['chuc_vu']=="Quản lý" )
                {
                    ?>
                <div class="modal-footer rounded-0">
                    <div class="text-end">
                        <button type="button" class="btn btn-primary btn-sm rounded-0" id="edit" data-id="">Sửa</button>
                        <button type="button" class="btn btn-danger btn-sm rounded-0" id="delete"
                            data-id="">Xóa</button>
                        <button type="button" class="btn btn-secondary btn-sm rounded-0"
                            data-bs-dismiss="modal">Đóng</button>
                    </div>
                </div>
                <?php 
                    }
                else{}
                ?>
            </div>
        </div>
    </div>
    <!-- Event Details Modal -->

    <?php 
$schedules = $mysqli->query("SELECT * FROM `lich_di_lam`");
$sched_res = [];
foreach($schedules->fetch_all(MYSQLI_ASSOC) as $row){
    $row['sdate'] = date("F d, Y h:i A",strtotime($row['ngay_hoc']));
    $sched_res[$row['id']] = $row;
}
?>
    <?php 
if(isset($mysqli)) $mysqli->close();
?>
</body>
<script>
var scheds = $.parseJSON('<?= json_encode($sched_res) ?>')
</script>