<?php
require_once './../layout/start.php';
require_once './../../model/functions.php';
$taikhoan = select_all('taikhoan');
?>
<div style="text-align:center;">
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<h1 class="display-4">THỐNG KÊ SẢN PHẨM</h1>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>

<script>
var xValues = ["dd", "HOODIE", "JACKET", "PANTS",];
var yValues = [25, 30, 35, 10];
var barColors = [
  "#b91d47",
  "#00aba9",
  "#2b5797",
  "#e8c3b9",
 
];

new Chart("myChart", {
  type: "pie",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    title: {
      display: true,
      text: "THỐNG KÊ SẢN PHẨM"
    }
  }
});
</script>
            </div>
        </div>
    </div>
   


<?php
require_once './../layout/end.php';
?>