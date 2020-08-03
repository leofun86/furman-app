<?php
echo '
  <script>
    window.onload = function () {

    //Better to construct options first and then pass it as a parameter
    var options = {
    //backgroundColor: "#888",
    theme: "light2",
    title: {
      text: "Rendimiento mensual de '.$menuMes.'"
    },
    animationEnabled: true,
    exportEnabled: false,
    data: [
    {
      type: "area", //change it to line, area, column, pie, etc

      dataPoints: [';
        for ($i=1; $i <= $cant; $i++) {
          $msqlContar = mysqli_query($conexion, "SELECT count(*) AS total FROM $menuMes WHERE fecha='2019-".$numMes."-".$i."'");
          if ($contador = mysqli_fetch_assoc($msqlContar)) {
              echo '{ x: '.$i.', y: '.$contador["total"].' },';
          } else {
            echo '{ x: '.$i.', y: 0 },';
          }
        }
      echo']
    }
    ]
    };
    $("#chartContainer").CanvasJSChart(options);
    }
  </script>
';
$registros = mysqli_query($conexion, "SELECT count(*) FROM $menuMes WHERE fecha='2019-".$menuMes."-01'");
$contador = mysqli_fetch_assoc($registros);
 ?>
