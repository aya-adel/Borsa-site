<?php

  include("fusioncharts.php");
     $hostdb = "localhost";  // MySQl host
   $userdb = "root";  // MySQL username
   $passdb = "hggih;fv";  // MySQL password
   $namedb = "borsa";  // MySQL database name

   $dbhandle = new mysqli($hostdb, $userdb, $passdb, $namedb);

   if ($dbhandle->connect_error) {
    exit("There was an error with your connection: ".$dbhandle->connect_error);
   }

?>

<html>
   <head>
    <title>Column 2D Chart </title>
    <link  rel="stylesheet" type="text/css" href="phpwrapper/assets/css/style.css" />

      <script src="phpwrapper/js/fusioncharts.js"></script>
   </head>
   <body>
    <?php

      $strQuery = "SELECT Name, price FROM Share ";

      $result = $dbhandle->query($strQuery) or exit("Error code ({$dbhandle->errno}): {$dbhandle->error}");
      if ($result) {
          $arrData = array(
                "chart" => array(
                    "caption" => "Shares Price Chart",
                    "paletteColors" => "#0075c2",
                    "bgColor" => "#ffffff",
                    "borderAlpha"=> "20",
                    "canvasBorderAlpha"=> "0",
                    "usePlotGradientColor"=> "0",
                    "plotBorderAlpha"=> "10",
                    "showXAxisLine"=> "1",
                    "xAxisLineColor" => "#999999",
                    "showValues"=> "0",
                    "divlineColor" => "#999999",
                    "divLineIsDashed" => "1",
                    "showAlternateHGridColor" => "0"
                )
            );

          $arrData["data"] = array();

  // Push the data into the array

          while($row = mysqli_fetch_array($result)) {
            array_push($arrData["data"], array(
                "label" => $row["Name"],
                "value" => $row["price"],
                "link" => "ShareChart.php"
                )
            );
          }

          $jsonEncodedData = json_encode($arrData);

          $columnChart = new FusionCharts("column2D", "myFirstChart" , 600, 300, "chart-1", "json", $jsonEncodedData);

          // Render the chart
          $columnChart->render();

          // Close the database connection
          $dbhandle->close();

      }

    ?>
    <div id="chart-1"><!-- Fusion Charts will render here--></div>
   </body>
</html>