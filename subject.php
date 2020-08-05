

<?php

session_start();
require('helper.php');
sec('index.php');

 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width, initial-scale=1">

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
    #frgt {
  background: url("https://images.wallpaperscraft.com/image/book_reading_inspiration_113238_1920x1080.jpg")
    center center no-repeat;
  background-size: cover;
  height: 100%;
  width: 100%;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  text-align: center;
  align-items: center;
  object-fit: cover;
  min-width: 100%;
  min-height: 100%;
  background-repeat: repeat-x;'>
}

   </style>

  </head>
  <body  id="frgt">
  <!-- Nav Bar -->
  <nav
      class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-4 pt-md-4"
    >
      <div class="container">
        <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse" id="navbarCollapse">
       <div class="input-group-prepend" >
           <span class="input-group-text  ml-auto bg-light">
               <i class="fas fa-user  fa-2" ></i>
          </span>
          <ul class="navbar-nav mx-auto ">
            <li class="nav-item active ml-3 mt-1">
              <h5 class="h5 mx-auto mr-2  font-weight-bold text-light " >Hello,<?php  echo $_SESSION['_login'];?> </h>
            </li>
          </ul>
      </div>
      </div>
    </nav>
    <!--End Nav-->
    <button
      class="navbar-toggler ml-auto"
      type="button"
      data-toggle="collapse"
      data-target="#navbar2"
    >
      <span class="navbar-toggler-icon"></span>
    </button>


    <nav
      class="navbar navbar-expand-md special-card1 navbar-dark  py-0 " style="height:75px"
      id="navbar2"
    >
      <div class="navbar-collapse collapse  pt-md-4 " style = "margin-bottom:15px">
        <div class="fontsize">
          <a class="navbar-brand ml-3 mr-5 " href="#">Exam</a>
        </div>
        <ul class="navbar-nav">
          <li class="nav-item active fontsize"
           <?php if(@$_GET['q']==1) ?>>
          <a class="nav-link ml-5 mr-5" href="subject.php?q=1">
          <i class="fas fa-home"></i>&nbsp;Home
          <span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item active fontsize">
          <?php if(@$_GET['q']==2) ?>
          <a class="nav-link ml-5 mr-5" href="subject.php?q=2">
          <i class="fas fa-history"></i>&nbsp;History</a>
          </li>




          <li class="nav-item active fontsize">
          <?php if(@$_GET['q']==3) ?>
          <a class="nav-link ml-5 mr-5" href="logoutstudent.php">
          <i class="fas fa-sign-out-alt"></i>&nbsp;Signout</a>
          </li>
        </ul>
      </div>
  </nav>


<!--Home Start-->

      <?php
        if(@$_GET['q']==1)
        {
          require('connection.php');
          $conn=getConnection();
          $user=$_SESSION['_login'];
          $stmt = $conn->prepare("SELECT * from result where s_id='$user'");
          $stmt->execute();
          if ($stmt->rowCount()!=0) {
              echo "<script>alert('Already given the exam')</script>";
          }
          else {
            $stmt = $conn->query("SELECT Semister from student where s_id='$user' ");
            $t=$stmt->fetch();
            $_SESSION['sem']=$sem=$t['Semister'];

            $stmt = $conn->query("SELECT subject_title from subject where semister='$sem' ");
            $t=$stmt->fetch();
          ;
            echo
            ' <div class="panel mt-5 ">
            <table class="table table-striped  mt-5 table-bordered text-center table-hover table-active " >
              <thead class="thead-light">
                <tr class="mt-5 style="font-size:14px">
                  <th>S.N</th>
                  <th>Subject Name</th>
                  <th >Total Questions</th>
                  <th>Marks</th>
                  <th>Time Limit</th>
                  <th class="">Start Test</th>
                </tr>
              </thead>
              <tbody class="text-center  justify-content px-0">
                <tr class="bg-light">
                  <th scope="row">1</th>
                  <td>
                    '.
                      $t["subject_title"].'
                  </td>
                  <td>15</td>
                  <td>15</td>
                  <td>15</td>
                  <td><b><a href="rules.php" class="btn btn-primary"><span><i class="fas fa-external-link-alt"></i></span>&nbsp;<span><b>Start</b></span></a></td>
                </tr>
              </tbody>

            </table>
          </div>';

          }


        }
      ?>
<!--History Start-->
<?php


        if(@$_GET['q']==2)
        {
          require('connection.php');
          $conn=getConnection();
          $user=$_SESSION['_login'];
          $stmt = $conn->prepare("SELECT * from result where s_id='$user'");
          $stmt->execute();
          if ($stmt->rowCount()==0) {
              echo "<script>alert('havent given any exam yet')</script>";
          }
          else {

            $stmt = $conn->query("SELECT s_id,subject_title,score from result natural join subject where s_id='$user' ");

            while ($t=$stmt->fetch()) {

              echo
              ' <div class="panel mt-5  ">
              <table class="table table-striped  mt-5 table-bordered text-center table-hover table-active bg-white" >
                <thead class="thead-dark  ">
                  <tr class="mt-5 style="font-size:14px">
                    <th>S.N</th>
                    <th>Subject Name</th>

                    <th>score</th>
                  </tr>
                </thead>
                <tbody class="text-center  justify-content px-0">
                  <tr >
                    <th scope="row">  '.$user.'</th>
                    <td>
                    '.$t['subject_title'].'
                    </td>

                    <td>  '.$t['score'].'</td>
                  </tr>
                </tbody>
              </table>
            </div>';


            }



          }


        }
      ?>

<!--Analysis Start-->

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
