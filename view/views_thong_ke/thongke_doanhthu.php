<?php
include_once "header.php";
include_once "../../controller/connection.php";

function handleFormSubmission($connection)
{
    $startDate = isset($_POST['start_date']) ? $_POST['start_date'] : '0001-01-01';
    $endDate = isset($_POST['end_date']) ? $_POST['end_date'] : '9999-12-31';

    $sql = "SELECT
    CONCAT(YEAR(c.time_start), '-', LPAD(MONTH(c.time_start), 2, '0')) AS month_year_group,
    CASE
        WHEN MONTH(c.time_start) = 1 THEN 'Tháng 1'
        WHEN MONTH(c.time_start) = 2 THEN 'Tháng 2'
        WHEN MONTH(c.time_start) = 3 THEN 'Tháng 3'
        WHEN MONTH(c.time_start) = 4 THEN 'Tháng 4'
        WHEN MONTH(c.time_start) = 5 THEN 'Tháng 5'
        WHEN MONTH(c.time_start) = 6 THEN 'Tháng 6'
        WHEN MONTH(c.time_start) = 7 THEN 'Tháng 7'
        WHEN MONTH(c.time_start) = 8 THEN 'Tháng 8'
        WHEN MONTH(c.time_start) = 9 THEN 'Tháng 9'
        WHEN MONTH(c.time_start) = 10 THEN 'Tháng 10'
        WHEN MONTH(c.time_start) = 11 THEN 'Tháng 11'
        WHEN MONTH(c.time_start) = 12 THEN 'Tháng 12'
    END AS month_group,
    SUM(c.total_money - n.tong_tien) AS total_amount
FROM card c
INNER JOIN tbl_nuoc_va_thuc_pham n ON YEAR(c.time_start) = YEAR(n.ngay_nhap) AND MONTH(c.time_start) = MONTH(n.ngay_nhap) 
WHERE c.time_start >= '$startDate' AND c.time_end <= '$endDate'
GROUP BY month_year_group, month_group";


$query = mysqli_query($connection, $sql);

$data = [];
$ageCategories = [];

while ($row = mysqli_fetch_assoc($query)) {
    $ageGroup = $row['month_group'];
    $totalAmount = (float) $row['total_amount'];
    $data[] = $totalAmount;
    $ageCategories[] = $ageGroup;
}

return [
        'data' => $data,
        'ageCategories' => $ageCategories
        ];
}

// Handle form submission if it exists
if (isset($_POST['submit'])) {
$chartData = handleFormSubmission($mysqli);
} else {
// Fetch default data
$chartData = handleFormSubmission($mysqli);
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    
        <style>
            .tkdt_hien_thi {
                background: #7cc6f924;
                margin-top: 50px;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                height: 67vh;
            }

            .tkdt_hien_thi #chart {
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
        <a href="thongke_doanhthu.php" class="fix tab-button active">Doanh thu</a>
        <a href="tk_lop.php" class="tab-button">Lớp và gói tập</a>
        <a href="tk_nuoc.php" class="tab-button">Nước và thực phẩm</a>
        <a href="tk_do_tuoi.php" class="tab-button ">Độ tuổi hội viên</a>
    </div> 

    <div class="tk_date" >
        <form method="post" action="" style="font-size: 20px;" >
                Từ ngày: <input type="date" name="start_date" style="font-size: 15px; border: none; border-radius: 5px; padding: 6px 6px 6px; cursor: pointer; background: #9cc7f1">
                Đến ngày: <input type="date" name="end_date" style="font-size: 15px; border: none; border-radius: 5px; padding: 6px 6px 6px; cursor: pointer; background: #9cc7f1">
                <input type="submit" name="submit" value="Hiển thị" style="font-size: 17px; border: none; border-radius: 5px; background-color: #57a3ee; padding: 6px 19px 6px; cursor: pointer;" >
        </form>
    </div> 

    <div class="tkdt_hien_thi">
        <div id="chart"></div>
    </div>

    <script>
        var chartData = <?php echo json_encode($chartData); ?>;
        var options = {
            series: [{
                name: 'Doanh thu',
                data: chartData.data
            }],
            chart: {
                type: 'line',
                height: '90%',
                width: '90%',
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    dataLabels: {
                        position: 'top',
                    },
                    colors: {
                        ranges: [
                            { from: 0, to: 499999, color: '#4472C8' },
                            { from: 500000, to: 999999, color: '#4472C8' },
                            { from: 1000000, to: 1999999, color: '#4472C8' },
                            { from: 2000000, to: 4999999, color: '#4472C8' },
                            { from: 5000000, to: 9999999, color: '#4472C8' },
                            { from: 10000000, to: Infinity, color: '#4472C8' }
                        ]
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
            },
            xaxis: {
                categories: chartData.ageCategories,
                title: {
                    text: 'Tháng',
                    offsetX: 10,
                    offsetY: 0,
                    style: {
                        fontSize: '14px',
                        fontWeight: 'bold'
                    }
                },
                labels: {
                    style: {
                        fontSize: '14px'
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
</body>
</html>
