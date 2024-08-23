<?php
include_once "header.php";

// Database connection
include_once "../../controller/connection.php";

// Function to handle form submission
function handleFormSubmission($connection)
{
    $startDate = isset($_POST['start_date']) ? $_POST['start_date'] : '0001-01-01';
    $endDate = isset($_POST['end_date']) ? $_POST['end_date'] : '9999-12-31';

    // Truy vấn CSDL để lấy tổng total_money của mỗi package trong khoảng thời gian
    $sqlPackages = "SELECT packages, SUM(total_money) AS total FROM card WHERE time_start >= '$startDate' AND time_end <= '$endDate' GROUP BY packages";
    $resultPackages = mysqli_query($connection, $sqlPackages);

    // Khởi tạo mảng dữ liệu cho biểu đồ theo packages và total_money
    $dataPackages = array();
    $dataTotalMoney = array();
    while ($row = mysqli_fetch_assoc($resultPackages)) {
        $packages = $row['packages'];
        $totalMoney = $row['total'];
        $dataPackages[] = $packages;
        $dataTotalMoney[] = $totalMoney;
    }

    // Truy vấn CSDL để lấy tổng total_money của mỗi types_room trong khoảng thời gian
    $sqlTypesRoom = "SELECT types_room, SUM(total_money) AS total FROM card WHERE time_start >= '$startDate' AND time_end <= '$endDate' GROUP BY types_room";
    $resultTypesRoom = mysqli_query($connection, $sqlTypesRoom);

    // Khởi tạo mảng dữ liệu cho biểu đồ theo types_room và total_money
    $dataTypesRoom = array();
    $dataTotal = array();
    while ($row = mysqli_fetch_assoc($resultTypesRoom)) {
        $typesRoom = $row['types_room'];
        $total = $row['total'];
        $dataTypesRoom[] = $typesRoom;
        $dataTotal[] = $total;
    }

    return [
        'dataPackages' => $dataPackages,
        'dataTotalMoney' => $dataTotalMoney,
        'dataTypesRoom' => $dataTypesRoom,
        'dataTotal' => $dataTotal
    ];
}

// Handle form submission if it exists
if (isset($_POST['submit'])) {
    $chartData = handleFormSubmission($mysqli);
} else {
    // Fetch default data
    $chartData = handleFormSubmission($mysqli);
}

// Close database connection
$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 100%;
            height: auto;
        }
        .tk_lop_hien_thi {
            background: #7cc6f924;
            margin-top: 100px;
            display: flex;
            justify-content: space-between;
        }

        .tk_types_room {
            text-align: left;
        }

        .tk_packages {
            text-align: right;
        }

        .tk_date {
            margin-top: 10px;
            position: fixed;
            top: 200px;
            right: 20px;
            display: flex;
            align-items: center;
        }

        .tab-bar {
                position: relative;
                top: 20px;
                bottom: 20px;
            }

            .tab-bar a {
                text-align: center;
                display: inline-block;
                width: 16%;
                padding: 12px;
                border: none;
                background-color: #d3cff1;
                cursor: pointer;
                border-top-left-radius: 30px;
                border-top-right-radius: 30px;
                color: white;
                text-decoration: none;
            }

            .tab-bar a.active {
                background-color: #5ca1ec;
            }  
              
    </style>
</head>
<body>
    <div class="tab-bar" style="top: 20px; bottom:20px;">
        <a href="thongke_doanhthu.php" class="fix tab-button">Doanh thu</a>
        <a href="tk_lop.php" class="tab-button active">Lớp và gói tập</a>
        <a href="tk_nuoc.php" class="tab-button">Nước và thực phẩm</a>
        <a href="tk_do_tuoi.php" class="tab-button">Độ tuổi hội viên</a>
    </div> 

    <div class="tk_date" >
        <form method="post" action="" style="font-size: 20px" >
                Từ ngày: <input type="date" name="start_date" style="font-size: 15px; border: none; border-radius: 5px; padding: 6px 6px 6px; cursor: pointer; background: #9cc7f1">
                Đến ngày: <input type="date" name="end_date" style="font-size: 15px; border: none; border-radius: 5px; padding: 6px 6px 6px; cursor: pointer; background: #9cc7f1">
                <input type="submit" name="submit" value="Hiển thị" style="font-size: 17px; border: none; border-radius: 5px; background-color: #57a3ee; padding: 6px 19px 6px; cursor: pointer;" >
        </form>
    </div>

    <div class="tk_lop_hien_thi">
        <div style="width: 500px; height: 400px; margin: 0 auto;">
            <canvas id="tk_types_room"></canvas>
        </div> 

        <div style="width: 500px; height: 400px; margin: 0 auto;">
            <canvas id="tk_packages"></canvas>
        </div>
    </div>

    <script>
        // Dữ liệu biểu đồ theo types_room và total
        var dataTypesRoom = <?php echo json_encode($chartData['dataTypesRoom']); ?>;
        var dataTotal = <?php echo json_encode($chartData['dataTotal']); ?>;

        // Vẽ biểu đồ ngũ giác cho types_room và total
        var tk_types_room_hien_thi = document.getElementById('tk_types_room').getContext('2d');
        new Chart(tk_types_room_hien_thi, {
            type: 'radar',
            data: {
                labels: dataTypesRoom,
                datasets: [{
                    backgroundColor: 'rgba(192, 75, 75, 0.5)',
                    borderColor: 'rgba(192, 75, 75, 1)',
                    borderWidth: 1,
                    data: dataTotal
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scale: {
                    ticks: {
                        beginAtZero: true,
                        display: false,
                        fontSize: 20
                    },
                    gridLines: {
                        display: false
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Hình thức tập',
                        fontSize: 20, 
                        fontColor: '#000' 
                    }
                }
            }
        });

        // Dữ liệu biểu đồ theo packages và total_money
        var dataPackages = <?php echo json_encode($chartData['dataPackages']); ?>;
        var dataTotalMoney = <?php echo json_encode($chartData['dataTotalMoney']); ?>;

        // Vẽ biểu đồ ngũ giác cho packages và total_money
        var tk_packages_hien_thi = document.getElementById('tk_packages').getContext('2d');
        new Chart(tk_packages_hien_thi, {
            type: 'radar',
            data: {
                labels: dataPackages,
                datasets: [{
                    backgroundColor: 'rgba(75, 192, 192, 0.5)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    data: dataTotalMoney
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scale: {
                    ticks: {
                        beginAtZero: true,
                        display: false,
                        fontSize: 20
                    },
                    gridLines: {
                        display: false
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    title: {
                        display: true,
                        text: 'Gói tập',
                        fontSize: 20, 
                        fontColor: '#000' 
                    }    
                }
            }
        });
    </script>
</body>
</html>
