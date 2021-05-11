<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title>My Chart.js Chart</title>
</head>
<body>
  <div class="container">
    <canvas id="myChart"></canvas>
  </div>

  
</body>
    <?php
    $dates=[];
    $values=[];
$file = fopen('out.csv', 'r');
while (($line = fgetcsv($file)) !== FALSE) {
  //$line is an array of the csv elements
    array_push($dates,$line[0]);
    array_push($values,$line[1]);
 // print_r($line);
}
fclose($file);
    ?>
    <script>
        
      function convertDate(inputFormat) {
  function pad(s) { return (s < 10) ? '0' + s : s; }
  var d = new Date(inputFormat)
  return [pad(d.getDate()), pad(d.getMonth()+1), d.getFullYear()].join('/')
}
   var ctx = document.getElementById('myChart');
      var a=[];
            a=<?php echo json_encode($dates);?>;

      for (i = 0; i < a.length; i++) {
          a[i]=convertDate(new Date(a[i]));
      }
      var b=[];
      b=<?php echo json_encode($values);?>;
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        
        labels: a,
        datasets: [{
            label: 'Bitcoin Proce',
            data: b,
            backgroundColor: 'rgba(255, 206, 86, 0.6)',
          borderWidth:2,
          borderColor:'#777',
          hoverBorderWidth:3,
          hoverBorderColor:'#000',
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: false
                }
            }]
        }
    }
});
  </script>
    
</html>
