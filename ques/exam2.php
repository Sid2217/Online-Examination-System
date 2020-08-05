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
         <div class="p-3 bg-light border-bottom " style="width:155%"><b>Question 1 : Classification is ?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:140%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question1" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.A subdivision of a set of examples into a number of classes </label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question1" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.A measure of the accuracy, of the classification of a concept that is given by a certain theory</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question1" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.The task of assigning a classification to a set of examples</label> <br /></li>

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
         <div class="p-3 bg-light border-bottom " style="color:dark;width:143%"><b>Question 2 Data selection is</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:135%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question2" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.The actual discovery phase of a knowledge discovery process</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question2" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.The stage of selecting the right data for a KDD process</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question2" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. A subject-oriented integrated time variant non-volatile collection of data in support of management</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question2" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. None of these</label> </li>
                  </div>
               </div>
            </div>
      </div>

<div class="container-fluid w-screen mt-5 " style="display:flex;">

<!--Option B is Correct-->
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:132%"><b>Question 3 :A definition or a concept is------------- if it classifies any examples as coming within the concept</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:120%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question3" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.complete</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question3" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.consistent</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question3" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.constant</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question3" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.none of these.</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option A is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:143.5%"><b>Question 4 :Data mining is ?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:135%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question4" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.	The actual discovery phase of a knowledge discovery process</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question4" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. The stage of selecting the right data for a KDD process</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question4" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.A subject-oriented integrated time variant non-volatile collection of data in support of management</label> <br /></li>

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
         <div class="p-3 bg-light border-bottom" style="color:dark;width:174.5%"><b>Question 5 :The problem of finding hidden structure in unlabeled data is called ?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:160%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question5" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.supervised learning</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question5" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. unsupervised learning</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question5" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. renforcement learning</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question5" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. none of these</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option A is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:127%"><b>Question 6 In the example of predicting number of babies based on storks’ population size, number of babies is?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:118%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question6" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.outcome</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question6" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.feature.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question6" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.attribute</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question6" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.observation</label> </li>
                  </div>
               </div>
            </div>
      </div>


<!--Option D is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:218.5%"><b>Question 7 :Data independence means?.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:200%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question7" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.Data is defined separately and not included in programs</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question7" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.Programs are not dependent on the physical attributes of data</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question7" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. Programs are not dependent on the logical attributes of data</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question7" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.Both (B) and (C)</label> </li>
                  </div>
               </div>
            </div>
      </div>


<!--Option A is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:114%"><b>Question 8 : is a subject-oriented, integrated, time-variant, nonvolatile collection of data in supportof management decisions.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:105%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question8" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.Data wearhousing.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question8" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. data mining</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question8" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.web mining.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question8" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.text mining</label> </li>
                  </div>
               </div>
            </div>
      </div>


                  <!--Option d is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:375%"><b>Question 9 The data warehouse is ?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:348%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question9" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. read only</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question9" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. write only</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question9" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. read and write</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question9" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. None of the above.</label> </li>
                  </div>
               </div>
            </div>
      </div>


            <!--Option D is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:173%;"><b>Question 10 :The time horizon in Data warehouse is usually __________.?
int (*p)[5];</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:160%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question10" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. 1-2 years.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question10" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.  2-3 years..</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question10" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.  3-4 years.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question10" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. 4-5 years.</label> </li>
                  </div>
               </div>
            </div>
      </div>


            <!--Option D is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:188%;"><b>Question 11 :__________describes the data contained in the data warehouse?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:175%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question11" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. Information data</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question11" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.Operational data</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question11" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.Meta data</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question11" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.Relational data</label> </li>
                  </div>
                  </div>
            </div>
      </div>


<!--Option A is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:218%;"><b>Question 12 :Data Visualization in mining cannot be done using</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:200%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question12" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.photos </label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question12" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.Graphs</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question12" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.Charts</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question12" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.information graphs</label> </li>
                  </div>
               </div>
            </div>
      </div>

                  <!--Option D is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:189.5%;"><b>Question 13 :Which of the following is not a data pre-processing methods</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;;width:175%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question13" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.Data Visualization</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question13" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.Data interpritetion.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question13" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. Pattern mining.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question13" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.None of the above.</label> </li>
                  </div>
               </div>
            </div>
      </div>


     <!--Option B is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:163%;"><b>Question 14:Noise is</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:150%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question14" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.A component of a network</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question14" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.In the context of KDD and data mining, this refers to random errors in a database table.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question14" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.One of the defining aspects of a data warehouse</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question14" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.None of these</label> </li>
                  </div>
               </div>
            </div>
      </div>


               <!--Option c is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;margin-bottom:5%">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;;width:163%;"><b>Question 15 :Node is?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;;width:150%;">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question15" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.A component of a network</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question15" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.In the context of KDD and data mining, this refers to random errors in a database table.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question15" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.One of the defining aspects of a data warehouse</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question15" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.None of these</label> </li>
                  </div>
                  <button
                  class = "btn btn-primary"
                  type=submit
                  style="width:150px;margin-left:70%;"
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
