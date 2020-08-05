








<?php


require('connection.php');
$conn=getConnection();

$stmt = $conn->query("SELECT COUNT(r_id) FROM result");

$stmt1 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='failed' and S_code=(SELECT S_code FROM subject WHERE subject_title='python')");
$stmt2 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='passed' and S_code=(SELECT S_code FROM subject WHERE subject_title='python')");


$stmt3 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='failed' and S_code=(SELECT S_code FROM subject WHERE subject_title='C')");
$stmt4 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='passed' and S_code=(SELECT S_code FROM subject WHERE subject_title='C')");


$stmt5 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='failed' and S_code=(SELECT S_code FROM subject WHERE subject_title='data mining')");
$stmt6 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='passed' and S_code=(SELECT S_code FROM subject WHERE subject_title='data mining')");


$stmt7 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='failed'");
$stmt8 = $conn->query("SELECT COUNT(r_id) FROM result WHERE status='passed'");
$t=$stmt->fetch();

$t1=$stmt1->fetch();
$t2=$stmt2->fetch();

$t3=$stmt3->fetch();
$t4=$stmt4->fetch();

$t5=$stmt5->fetch();
$t6=$stmt6->fetch();

$t7=$stmt7->fetch();
$t8=$stmt8->fetch();

//echo $t['COUNT(r_id)'];


$dataPoints = array(
  //array("label"=>"Passed", "y"=>($t1['COUNT(r_id)']/$t['COUNT(r_id)'])*100),
  //array("label"=>"Failed", "y"=>($t2['COUNT(r_id)']/$t['COUNT(r_id)'])*100),


  array("label"=>"Failed", "y"=>(floor($t1['COUNT(r_id)']))),
  array("label"=>"Passed", "y"=>(floor($t2['COUNT(r_id)']))),

);
$dataPoints1= array(
  //array("label"=>"Passed", "y"=>($t1['COUNT(r_id)']/$t['COUNT(r_id)'])*100),
  //array("label"=>"Failed", "y"=>($t2['COUNT(r_id)']/$t['COUNT(r_id)'])*100),


  array("label"=>"Failed", "y"=>(floor($t3['COUNT(r_id)']))),
  array("label"=>"Passed", "y"=>(floor($t4['COUNT(r_id)']))),

);
$dataPoints2 = array(
  //array("label"=>"Passed", "y"=>($t1['COUNT(r_id)']/$t['COUNT(r_id)'])*100),
  //array("label"=>"Failed", "y"=>($t2['COUNT(r_id)']/$t['COUNT(r_id)'])*100),


  array("label"=>"Failed", "y"=>(floor($t5['COUNT(r_id)']))),
  array("label"=>"Passed", "y"=>(floor($t6['COUNT(r_id)']))),

);
$dataPoints4 = array(
  //array("label"=>"Passed", "y"=>($t1['COUNT(r_id)']/$t['COUNT(r_id)'])*100),
  //array("label"=>"Failed", "y"=>($t2['COUNT(r_id)']/$t['COUNT(r_id)'])*100),


  array("label"=>"Failed", "y"=>(floor($t7['COUNT(r_id)']))),
  array("label"=>"Passed", "y"=>(floor($t8['COUNT(r_id)']))),

);


?>

<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {
var chart = new CanvasJS.Chart("chartContainer1", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Python"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer2", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "C"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer3", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "Data mining"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();

var chart = new CanvasJS.Chart("chartContainer4", {
	theme: "light2",
	animationEnabled: true,
	title: {
		text: "All Students"
	},
	data: [{
		type: "pie",
		indexLabel: "{y}",
		yValueFormatString: "#,##0.00\"%\"",
		indexLabelPlacement: "inside",
		indexLabelFontColor: "#36454F",
		indexLabelFontSize: 18,
		indexLabelFontWeight: "bolder",
		showInLegend: true,
		legendText: "{label}",
		dataPoints: <?php echo json_encode($dataPoints4, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
}
</script>
</head>
<body>
<div id="chartContainer1" style="width: 30%; height: 300px;display: inline-block;margin-left:25%;margin-top:8%"></div>&nbsp &nbsp &nbsp &nbsp
<div id="chartContainer2" style="width: 30%; height: 300px;display: inline-block;"></div><br/>
<div id="chartContainer3" style="width: 30%; height: 300px;display: inline-block;margin-left:25%"></div>&nbsp &nbsp &nbsp &nbsp
<div id="chartContainer4" style="width: 30%; height: 300px;display: inline-block;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>
