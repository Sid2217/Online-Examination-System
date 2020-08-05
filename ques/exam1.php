<?php
require('../helper.php');
#session_start();
#sec('../exam.php');

  ?>

<!DOCTYPE html>
<html>

<head>
   <title>C Programming Language Output this code Quizzes 1</title>
   <!-- Required meta tags -->
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
   <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

   <link rel="stylesheet" type="text/css" href="style.css" />
   <style>

   #frgt {
     background: url("http://getwallpapers.com/wallpaper/full/4/b/2/140386.jpg ")
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

<body  style="padding-top: 70px;"id="frgt">
   <!--Nav Bar-->
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark  py-3 pt-md-4 fixed-top">
         <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
         <i class="far fa-clock fa-inverse fa-lg"></i>
         <span id="time" class="timer ml-2 mr-5" style="color:white;"></span>
   </nav>
<!--
   <section class="py-4 mb-1 bg-light " style="margin-top:70px;">
      <div class="container navbar sticky-top">
         <div class="col-md-6 ml-auto">
         <i class="fas fa-clock"></i>
         <span id="time" class="timer"></span>
         </div>
      </div>
   </section>
   -->
   <!--Timer Code-->

   <script>

   function startTimer(duration, display) {
var timer = duration, minutes, seconds;
setInterval(function () {
    minutes = parseInt(timer / 60, 10)
    seconds = parseInt(timer % 60, 10);

    minutes = minutes < 10 ? "0" + minutes : minutes;
    seconds = seconds < 10 ? "0" + seconds : seconds;

    display.textContent = minutes + " " + ": " + " " + seconds;

    if (--timer < 0) {
      clearInterval(timer);
      document.getElementById("myf").submit();
    }
  console.log(parseInt(seconds))
  window.localStorage.setItem("seconds",seconds)
  window.localStorage.setItem("minutes",minutes)
}, 1000);
}

window.onload = function () {
  sec  = parseInt(window.localStorage.getItem("seconds"))
  min = parseInt(window.localStorage.getItem("minutes"))

  if(parseInt(min*sec)){
    var tm = (parseInt(min*60)+sec);
  }else{
    var tm = 60 * 5;
  }

    // var fiveMinutes = 60 * 5;
  display = document.querySelector('#time');
  startTimer(tm, display);
};
</script>
<div class="container-fluid w-screen mt-5 " style="display:flex;">
<div class="d-flex row-hl border border-info rounded "style="background-color: white;width:350px;height:30%; position: fixed;">
<div class="d-flex flex-column">
<div class="p-3 bg-light border-bottom " style="width:160%">
   <div class=" item-hl navbar-brand  " style= "margin-left:50px;" ><b>Details  </b>
</div>
</div>
<div>
<h5 class="h5 mt-4 ml-2">Student Name : <?php
require('../connection.php');
$conn=getConnection();
$user=$_SESSION['_login'];
$stmt = $conn->query("SELECT s_name,Semister from student where s_id='$user' ");
$t=$stmt->fetch();
// and somewhere later:
echo $t['s_name'];
  ?>
</h5>
<br>
<h5 class="h5">Semester : <?php
echo $t['Semister'];
closeConnection();
$conn=0;

?>




  </h5>
</div>
</div>
   </div>

<!--Option A is correct-->
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
        <form  class="" id="myf"name="myf" method="POST" action="../pompo.php">
         <div class="p-3 bg-light border-bottom " style="width:121%"><b>Question 1 :Given a function that does not return any value, What value is thrown by default when executed in shell. ?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:113%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question1" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.Int</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question1" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.Bool</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question1" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.void</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question1" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.None of these</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option B is correct -->
<div class="container-fluid w-screen mt-5  " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom " style="color:dark;width:236%"><b>Question 2:Which of the following will run without errors?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:215%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question2" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.round(45.8)</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question2" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.round(6352.898,2,5)</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question2" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. round()</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question2" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.round(7463.123,2,1)</label> </li>
                  </div>
               </div>
            </div>
      </div>

<div class="container-fluid w-screen mt-5 " style="display:flex;">

<!--Option B is Correct-->
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:234%"><b>Question 3:Which of the following results in a SyntaxError?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:220%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question3" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. ‘”Once upon a time…”, she said.’</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question3" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.“He said, ‘Yes!'”</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question3" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.‘3\’</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question3" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.”’That’s okay”’.</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option A is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:285%"><b>Question 4 : What is the return value of trunc()?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:265%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question4" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.int</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question4" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.bool</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question4" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.float</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question4" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.None of these</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option B is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:204%"><b>Question 5 : What arithmetic operators cannot be used with strings?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:190%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question5" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.+</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question5" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.-</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question5" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. *</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question5" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. all of these</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option A is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:255%"><b>Question 6:Which of the following is a Python tuple??</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:240%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question6" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.[1, 2, 3]</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question6" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.(1, 2, 3).</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question6" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.{1, 2, 3}</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question6" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.{}</label> </li>
                  </div>
               </div>
            </div>
      </div>


<!--Option D is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:181%"><b>Question 7 :Which of the following functions is a built-in function in python?.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:170%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question7" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.seed()</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question7" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.round()</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question7" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. factorial()</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question7" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.print()</label> </li>
                  </div>
               </div>
            </div>
      </div>


<!--Option A is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:264%"><b>Question 8 :  The function pow(x,y,z) is evaluated as:</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:245%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question8" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. (x**y)**z.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question8" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. (x**y) / z</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question8" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.(x**y) % z</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question8" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. (x**y)*z</label> </li>
                  </div>
               </div>
            </div>
      </div>


                  <!--Option d is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:345%"><b>Question 9:min(max(False,-3,-4), 2,7) ?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:320%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question9" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.2</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question9" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. false</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question9" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. -3</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question9" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>-4.</label> </li>
                  </div>
               </div>
            </div>
      </div>


            <!--Option D is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:527%;"><b>Question 10 :all(3,0,4.2)</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:490%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question10" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.TRUE</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question10" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.FALSE</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question10" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.ERROR.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question10" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.0.</label> </li>
                  </div>
               </div>
            </div>
      </div>


            <!--Option D is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:180%;"><b>Question 11 : Which of the following is true about top-down design process??</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:175%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question11" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. The details of a program design are addressed before the overall design</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question11" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.Only the details of the program are addressed</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question11" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.The overall design of the program is addressed before the details</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question11" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.Only the design of the program is addressed</label> </li>
                  </div>
                  </div>
            </div>
      </div>


<!--Option A is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:216%;"><b>Question 12 :from math import factorial print(math.factorial(5))</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:200%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question12" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.120 </label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question12" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.nothing printed</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question12" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. Error, method factorial doesn’t exist in math module</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question12" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.Error, the statement should be: print(factorial(5))</label> </li>
                  </div>
               </div>
            </div>
      </div>

                  <!--Option D is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:162%;"><b>Question 13 :_____ represents an entity in the real world with its identity and behaviour.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;;width:155%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question13" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.A method</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question13" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.a Object</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question13" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. A class</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question13" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.An operator</label> </li>
                  </div>
               </div>
            </div>
      </div>


     <!--Option B is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:240%;"><b>Question 14:Output of the following code complex(1+2j)</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:230%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question14" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.Error</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question14" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.1</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question14" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.2j</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question14" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.1+2j</label> </li>
                  </div>
               </div>
            </div>
      </div>


               <!--Option c is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;margin-bottom:5%">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;;width:136%;"><b>Question 15 :Which of the following functions does not necessarily accept only iterables as arguments??</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;;width:125%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question15" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.enumerate()</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question15" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.chr()</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question15" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.all()</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question15" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.max()</label> </li>
                  </div>
                  <button
                  class = "btn btn-primary"
                  type=submit
                  style="width:150px;margin-left:60%;"
                  >Submit</button>
                </form>
               </div>
            </div>
      </div>


   <!--Footer Start--><!--
   <footer class="page-footer font-small pt-4 mt-5">
      <div class="footer-copyright text-center py-3">
         <a href="about.html">About us</a>
      </div>
   </footer>
            -->

   <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"></script>
   <script src="https://kit.fontawesome.com/74622583e2.js" crossorigin="anonymous"></script>
</body>

</html>
