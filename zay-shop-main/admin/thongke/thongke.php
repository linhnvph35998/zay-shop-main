<body>
    <div class="wrapper">
        <div class="admin">
            <h1>Thống kê</h1>
        </div>
        <div class="table">
            <table border="1">
                <tr>
                    <td style="width: 100px">Id danh mục</td>
                    <td style="width: 300px">Tên danh mục</td>
                    <td style="width: 200px">Số lượng</td>
                    <td style="width: 200px">Giá cao nhất</td>
                    <td style="width: 200px">Giá thấp nhất</td>
                    <td style="width: 200px">Giá trung bình</td>
                </tr>
                <?php foreach ($listthongke as $thongke) {
                extract($thongke);
                echo '<tr>
                <td>'.$madm.'</td>
                <td>'.$tendm.'</td>
                <td>'.$countsp.'</td>
                <td>'.$minprice.'đ</td>
                <td>'.$maxprice.'đ</td>
                <td>'.$avgprice.'đ</td>
                </tr>';
           } ?>
            </table>
        </div>
        <div class="chart">

            <div class="inner-chart">

                <div class="chart-view">
                    <h1>Biểu đồ</h1>
                    <div id="donutchart"></div>
                </div>

                <!-- <div class="chart-view">
                    <h1>Biểu đồ</h1>
                    <div id="piechart"></div>
                </div> -->
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    google.charts.load("current", {
        packages: ["corechart"],
    });

    // function PieChart() {
    //     // Set Data
    //     const data = google.visualization.arrayToDataTable([
    //         ['Danh mục', 'Số lượng sản phẩm'],
    //         <?php 
    //     $tongdm = count($listthongke);
    //     $i = 1;
    //     foreach($listthongke as $thongke) {
    //         extract($thongke);
    //         if($i == $tongdm) {
    //             $dauphay = "";
    //         } else {
    //             $dauphay = ",";
    //         }
    //         echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
    //         $i += 1;
    //     } ?>
    //     ]);

    //     // Set Options
    //     const options = {
    //         title: "Quản lý sản phẩm",
    //         'width': 1000,
    //         'height': 500
    //     };

    //     // Draw
    //     const chart = new google.visualization.PieChart(
    //         document.getElementById("piechart")
    //     );
    //     chart.draw(data, options);
    // }


    // google.charts.setOnLoadCallback(PieChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Danh mục', 'Số lượng sản phẩm'],
            <?php 
        $tongdm = count($listthongke);
        $i = 1;
        foreach($listthongke as $thongke) {
            extract($thongke);
            if($i == $tongdm) {
                $dauphay = "";
            } else {
                $dauphay = ",";
            }
            echo "['".$thongke['tendm']."', ".$thongke['countsp']."]".$dauphay;
            $i += 1;
        } ?>
        ]);

        var options = {
            title: "Quản lý danh mục",
            pieHole: 0.4,
            'width': 1000,
            'height': 500
        };

        var chart = new google.visualization.PieChart(
            document.getElementById("donutchart")
        );
        chart.draw(data, options);
    }
    google.charts.setOnLoadCallback(drawChart);
    </script>
</body>