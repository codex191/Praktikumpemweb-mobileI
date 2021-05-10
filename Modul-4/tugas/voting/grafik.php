<?php
include 'function.php';
$a = data("SELECT COUNT(pemilih.`capres`) as a FROM pemilih WHERE pemilih.`capres`='a'");
$b = data("SELECT COUNT(pemilih.`capres`) as b FROM pemilih WHERE pemilih.`capres`='b'");
$c = data("SELECT COUNT(pemilih.`capres`) as c FROM pemilih WHERE pemilih.`capres`='c'");

$data1;
$data2;
$data3;

foreach ($a as $x) {
    $data1 = $x["a"]; 
}

foreach ($b as $y) {
    $data2 = $y["b"];
}

foreach ($c as $z) {
    $data3 = $z["c"];
}

?>

<canvas id="myChart">

</canvas>

<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['a','b','c'],
            datasets: [{
                label: 'jumlah',
                data: [<?php echo json_encode($data1)?>,<?php echo json_encode($data2)?>,<?php echo json_encode($data3)?>],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>