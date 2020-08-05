
<?php
require('helper.php');
require('connection.php');

sec('index.php');

 ?>
<!DOCTYPE html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
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
  </head>
  <body>
    <nav
      class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-3 pt-md-4"
    >
      <div class="container">
        <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
      </div>
    </nav>

    <!--Grid Start For Rules-->
    <div class="container " style="padding-top:150px;width: 900px;">
      <div
        class="row align-items-start "
        style=" height:60px;border:1px #333 solid"
      >
        <div class="col text-center mt-3">
          <b>Rules</b>
        </div>
      </div>
      <!--Actual Rules-->
      <div
        class="row align-items-start "
        style="height:250px;border:1px #333 solid"
      >
        <div class="col mt-3">
          <div class="row">
            <ul>
              <li class="mt-1">
                There are total 15 questions and all are compulsory.
              </li>
              <li class="mt-1">
                There is a time limit of 15 minutes after which the test will
                end .
              </li>
              <li class="mt-1">Passing marks are 5.</li>
              <li class="mt-1">
                Any type of electronics are not allowed else it will be
                considered cheating.
              </li>
              <li class="mt-1">
                After completing test please check the results and if any query
                ask the superintendent .
              </li>
              <li class="mt-1">
                For any doubt regarding the test contact the superintendent .
              </li>
              <li class="mt-1">
                Doubt for any question in test please use the option of mark for
                review.
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!--Start Button-->
    <a
      class="btn btn-lg btn-primary   fab  mr-2 mt-5"
      style="margin-left: 46.5%;"
      href="<?php

      if ($_SESSION['sem']==1) {
        echo "ques/exam.php";
      }
      else if($_SESSION['sem']==2) {
        echo "ques/exam1.php";
      }
      else {
        echo "ques/exam2.php";
      }




       ?>"
      >Start Test</a
    >

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
