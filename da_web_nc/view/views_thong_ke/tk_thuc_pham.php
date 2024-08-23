<?php
include_once "header.php";
include_once "../../controller/connection.php";

function handleFormSubmission($connection)
{
    $startDate = isset($_POST['start_date']) ? $_POST['start_date'] : '0001-01-01';
    $endDate = isset($_POST['end_date']) ? $_POST['end_date'] : '9999-12-31';

    $sql = "SELECT name, SUM(tong_tien) AS total_amount FROM tbl_nuoc_va_thuc_pham WHERE loai_tp = 'Thực phẩm' AND ngay_nhap BETWEEN '$startDate' AND '$endDate' GROUP BY name";
    $query = mysqli_query($connection, $sql);

    $data = [];
    $categories = ['Thực phẩm'];

    while ($row = mysqli_fetch_assoc($query)) {
        $name = $row['name'];
        $totalAmount = (float) $row['total_amount'];
        $data[] = [
            'name' => $name,
            'data' => [$totalAmount],
            'color' => '#4472C8'
        ];
    }

    return [
        'data' => $data,
        'categories' => $categories
    ];
}

if (isset($_POST['submit'])) {
    $chartData = handleFormSubmission($mysqli);
} else {
    $chartData = handleFormSubmission($mysqli);
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        .tktp_hien_thi {
            background: #7cc6f924;
            display: flex;
            justify-content: center;
            text-align: center;
            align-items: center;
            height: 60vh;
            margin: 0 auto;
        }

        .tktp_hien_thi #chart {
            width: 80%;
        }

        .tk_date {
            position: fixed;
            top: 210px;
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
    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts@3.26.0/dist/apexcharts.min.js"></script>
</head>
<body>
    <div class="tab-bar" style="top: 20px; bottom:20px;">
        <a href="thongke_doanhthu.php" class="fix tab-button">Doanh thu</a>
        <a href="tk_lop.php" class="tab-button">Lớp và gói tập</a>
        <a href="tk_nuoc.php" class="tab-button active">Nước và thực phẩm</a>
        <a href="tk_do_tuoi.php" class="tab-button">Độ tuổi hội viên</a>
    </div> 

    <div class="tk_nuoc_va_thuc_pham_hien_thi">
        <div class='tktp' name='tktp'style=" margin-top:30px; margin-left: 10px"  >
            <button onclick="window.location.href='tk_nuoc.php'" style="font-size: 20px; border: 2px solid #3a72ff; border-radius: 50px; color: #2c4dfc; padding: 11px 14px 11px; cursor: pointer;">Nước</button>
            <button onclick="window.location.href='tk_thuc_pham.php'" style="font-size: 20px; border: 2px solid #3a72ff; border-radius: 50px; color: #2c4dfc; padding: 11px 14px 11px; cursor: pointer; background: #8cbadb;">Thực phẩm</button>
        </div>   
        
        <div class="tk_date">
            <form method="post" action="" style="font-size: 20px;" >
                Từ ngày: <input type="date" name="start_date" style="font-size: 15px; border: none; border-radius: 5px; padding: 6px 6px 6px; cursor: pointer; background: #9cc7f1">
                Đến ngày: <input type="date" name="end_date" style="font-size: 15px; border: none; border-radius: 5px; padding: 6px 6px 6px; cursor: pointer; background: #9cc7f1">
                <input type="submit" name="submit" value="Hiển thị" style="font-size: 17px; border: none; border-radius: 5px; background-color: #57a3ee; padding: 6px 19px 6px; cursor: pointer;" >
            </form>
        </div>
    </div>


    <div class="tktp_hien_thi">
        <div id="chart"></div>
    </div>

    <script>
        var chartData = <?php echo json_encode($chartData); ?>;

        var options = {
            series: chartData.data,
            chart: {
                type: 'bar',
                height: '100%'
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    dataLabels: {
                        position: 'top'
                    }
                }
            },
            dataLabels: {
                enabled: true,
                formatter: function (val) {
                    if (val >= 1000000) {
                        return (val / 1000000).toFixed(1) + 'tr';
                    } else if (val >= 1000) {
                        return (val / 1000).toFixed(1) + 'k';
                    } else {
                        return val;
                    }
                },
                offsetY: -20,
                style: {
                    fontSize: '14px',
                    colors: ["#304758"]
                }
            },
            xaxis: {
                categories: chartData.categories
            },
            yaxis: {
                title: {
                    text: 'Doanh thu',
                    offsetX: 0,
                    offsetY: -10,
                    style: {
                        fontSize: '14px',
                        fontWeight: 'bold',
                        fontFamily: 'Arial',
                        color: '#333'
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>
</html>
