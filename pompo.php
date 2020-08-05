  <?php
require('connection.php');
require('helper.php');
sec('index.php');
#session_start();
$score=0;
$conn=getConnection();
$ex="";

$sem=$_SESSION['sem'];
if ($sem==1) {
  $ex='cexam';
}elseif ($sem==2) {
  $ex='pexam';
}
else {
  $ex='dmexam';
}

foreach ($_POST as $key =>$value)
{

   $stmt = $conn->prepare("SELECT * from $ex where qid='$key' &&
ans='$value' ");
 $stmt->execute();
 if ($stmt->rowCount()==0) { }
 else {
$score+=1;
  }
}
$status="";
if ($score<=6) {
  $status='failed';
}
else {
  $status='passed';
}

 $dataPoints = array( array("y" => 15,"label" => "Total score" ),
array("y" => $score,"label" => "Your score" ) ); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
    <style>
      .example {
        background-color: #eee;
        overflow-y: scroll;
        /* Add the ability to scroll */
      }

      /* Hide scrollbar for Chrome, Safari and Opera */
      .example::-webkit-scrollbar {
        display: none;
      }

      /* Hide scrollbar for IE and Edge */
      .example {
        -ms-overflow-style: none;
         }
         #blue {
            background: url(http://getwallpapers.com/wallpaper/full/0/2/d/140358.jpg) center center no-repeat;
            background-size: cover;
            height: 100%;
            width: 100%;
            text-align: center;
            align-items: center;
            object-fit: cover;
            min-width: 100%;
            min-height: 100%;
            }

    </style>
    <script>
      window.onload = function() {
      var chart = new CanvasJS.Chart("chartContainer", {
      	animationEnabled: true,
      	theme: "light2",
      	title:{
      		text: "Marks scored"
      	},
      	axisY: {
      		title: "Score",

      	},
      	data: [{
      		type: "column",
      		showInLegend: true,
      		legendMarkerColor: "grey",
      		//yValueFormatString: "$#,##0K",
      		indexLabel: "{y}",
      		indexLabelPlacement: "inside",
      		indexLabelFontWeight: "bolder",
      		indexLabelFontColor: "white",
      		dataPoints: <?php echo json_encode($dataPoints);?>
      	}]
      });
      chart.render();
      }
    </script>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  </head>
  <body class="example" style="overflow-y: hidden;" id="blue" >
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-3">
      <div class="container">
        <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
        <form class="form-inline ml-auto" action="logoutstudent.php">
                    <button class="btn btn-primary">Logout</button>
        </form>
      </div>
    </nav>
    <!--End Nav-->

          <div class="row">
          <div class="card card-signin  col-lg-6 mx-auto" style="margin-top:8%;">
            <div class="card-body ">
              <h5
                class="card-title mb-3 text-center text-dark"
              >
                <?php
                echo "<span class='font-weight-bold'>Student Email : </span>".$_SESSION['_login'];
                $tt=$_SESSION['_login'];
                echo "<br><span class='font-weight-bold'>Score is: </span>".$score;
                echo "<br><span class='font-weight-bold'>Right ans :</span>".$score;
                echo "<br><span class='font-weight-bold'>Wrong ans :</span>".(15-$score);
                echo "<br><span class='font-weight-bold'>Result  : </span>".($status);
                $sem=$_SESSION['sem'];
                $stmt = $conn->query("SELECT S_code from subject where Semister='$sem' ");
                $t=$stmt->fetch();
                $sem=$t['S_code'];

                $qw=rand(10,100); $sql ="INSERT INTO result (r_id,s_id,score,S_code,status)
                VALUES('$qw','$tt','$score','$sem','$status')";
                $conn->exec($sql);
                closeConnection(); ?>
               </h5>
              <hr class="my-4" />
              <div
              id="chartContainer"
              style="height: 370px; max-width: 500px; margin-left: 20%;"
            ></div>
            </div>
          </div>
        </div>


    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://kit.fontawesome.com/74622583e2.js"
      crossorigin="anonymous"
    ></script>
  </body>
</html>




<!--
              <div
              id="chartContainer"
              style="height: 370px; max-width: 500px; margin-left: 60%;"
            ></div>-->
