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

<body style="padding-top: 70px;"id="frgt">
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
  startTimer(30, display);
};
</script>
<div class="container-fluid w-screen mt-5 " style="display:flex;">
<div class="d-flex row-hl border border-info rounded "style="background-color: white;width:350px;height:30%; position: fixed;">
<div class="d-flex flex-column">
<div class="p-3 bg-light border-bottom " style="width:148%">
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
         <div class="p-3 bg-light border-bottom " style="width:183%"><b>Question 1 :In the context of C data types, which of the followings is correct?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:170.4%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question1" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. “unsigned long long int” is a valid data type</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question1" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.“long long double” is a valid data type.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question1" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. “unsigned long double” is a valid data type</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question1" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.A), B) and C) all are valid data types</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option C is correct -->
<div class="container-fluid w-screen mt-5  " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom " style="color:dark;width:121%"><b>Question 2 :Suppose a C program has floating constant 1.414, what's the best way to convert this as "float" data type?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:118%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question2" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.(float)1.414</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question2" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. float(1.414)</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question2" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. 1.414f or 1.414F</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question2" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. 1.414 itself of "float" data type i.e. nothing else required</label> </li>
                  </div>
               </div>
            </div>
      </div>

<div class="container-fluid w-screen mt-5 " style="display:flex;">

<!--Option C is Correct-->
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:106.5%"><b>Question 3 :In the context of modulo operation (i.e. remainder on division) for floating point (say 2.1 and 1.1), pick the best statement.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question3" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.For floating point, modulo operation isn't defined and that's why modulo can't be found.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question3" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. (2.1 % 1.1) is the result of modulo operation.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question3" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.fmod(2.1,1.1) is the result of module operation.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question3" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. ((int)2.1) % ((int)1.1) is the result of modulo operation.</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option A is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:154%"><b>Question 4 :Which of the following functions from “stdio.h” can be used in place of printf()?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:140%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question4" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.	fprintf() with FILE stream as stdout</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question4" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. fputs() with FILE stream as stdout.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question4" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.fwrite() with FILE stream as stdout.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question4" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.In “stdio.h”, there’s no other equivalent function of printf().</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option B is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:102%"><b>Question 5 :As per C language standard, which of the followings is/are not keyword(s)? Pick the best statement. auto make main sizeof elseif.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question5" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.make main elseif</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question5" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. make main</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question5" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. learningFast</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question5" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. sizeof elseif make</label> </li>
                  </div>
               </div>
            </div>
      </div>

<!--Option B is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:157.5%"><b>Question 6 :Which of the following statement is correct for switch controlling expression?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:140%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question6" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. Only int can be used in “switch” control expression.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question6" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. 	Both int and char can be used in “switch” control expression.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question6" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. All types i.e. int, char and float can be used in “switch” control expression.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question6" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. “switch” control expression can be empty as well.</label> </li>
                  </div>
               </div>
            </div>
      </div>


<!--Option D is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:117%"><b>Question 7 :In the context of "break" and "continue" statements in C, pick the best statement.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:108%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question7" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. In the context of "break" and "continue" statements in C, pick the best statement.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question7" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. “continue” can be used in “for”, “while” and “do-while” loop body</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question7" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. “break” and “continue” can be used in “for”, “while”, “do-while” loop body and “switch” body.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question7" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. “break” and “continue” can be used in “for”, “while” and “do-while” loop body. But only “break” can be used in “switch” body.</label> </li>
                  </div>
               </div>
            </div>
      </div>


<!--Option C is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark"><b>Question 8 :Which of the following statement is not correct statement?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question8" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.“switch” body may not have any “case” label at all and it would still compile.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question8" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. “switch” body may not have the “default” label and it would still compile.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question8" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3.“switch” body may contain more than one “case” labels where the label value of these “case” is same and it would still compile. If “switch” controlling expression results in this “case” label value, the “case” which is placed first would be executed.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question8" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.“switch” body may not have any “break” statement and it would still compile.</label> </li>
                  </div>
               </div>
            </div>
      </div>


                  <!--Option d is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:165%"><b>Question 9 :Which of the following is correct with respect to “Jump Statements” in C?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:154%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question9" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. goto</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question9" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. continue</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question9" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. return</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question9" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. All of the above.</label> </li>
                  </div>
               </div>
            </div>
      </div>


            <!--Option D is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:151.5%"><b>Question 10 :What’s the meaning of following declaration in C language?
int (*p)[5];</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:140%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question10" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. It will result in compile error because there shouldn't be any parenthesis i.e. “int *p[5]” is valid.</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question10" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. p is a pointer to 5 integers.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question10" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. p is an array of 5 pointers to integers</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question10" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.p is a pointer to an array of 5 integers</label> </li>
                  </div>
               </div>
            </div>
      </div>


            <!--Option D is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:138.5%"><b>Question 11 :“typedef” in C basically works as an alias. Which of the following is correct for “typedef”?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:130%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question11" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1.typedef can be used to alias compound data types such as struct and union</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question11" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. typedef can be used to alias a function pointer.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question11" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. typedef can be used to alias an array</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question11" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.All of the above</label> </li>
                  </div>
                  </div>
            </div>
      </div>


<!--Option B is correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:118.5%"><b>Question 12 :Which of the followings is correct for a function definition along with storage-class specifier in C language?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3;width:115%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question12" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. int fun(static int arg)</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question12" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. int fun(register int arg)</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question12" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. int fun(extern int arg)</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question12" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4.All of the above are correct.</label> </li>
                  </div>
               </div>
            </div>
      </div>

                  <!--Option D is Correct-->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:140%"><b>Question 13 :Pick the correct statement for const and volatile.</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:130%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question13" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. const is the opposite of volatile and vice versa</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question13" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2.const and volatile can’t be used for enum.</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question13" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. const and volatile can’t be used for typedef.</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question13" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. const and volatile are independent i.e. it’s possible that a variable is defined as both const and volatile.</label> </li>
                  </div>
               </div>
            </div>
      </div>


     <!--Option C is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:148%"><b>Question 14 The number of tokens in the following C statement.
         printf("i = %d, &i = %x", i, &i);
         </b>
         </div>
                  <div class=" mt-4"style="margin-left:3%;width:135%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question14" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. 3</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question14" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. 26</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question14" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. 10</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question14" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. 21</label> </li>
                  </div>
               </div>
            </div>
      </div>


               <!--Option c is correct -->
<div class="container-fluid w-screen mt-5 " style="display:flex;margin-bottom:5%">
   <!--Questions-->
   <div class="d-flex row-hl border border-secondary rounded"style="background-color: white;width:80%;height:40%;margin-left:25%">
      <div class="d-flex flex-column">
         <div class="p-3 bg-light border-bottom" style="color:dark;width:106%"><b>Question 15 :Consider the following program fragment i=6720; j=4; while (i%j)==0 { i=i/j; j=j+1; } On termination j will have the value?</b>
         </div>
                  <div class=" mt-4"style="margin-left:3%">
                              <ul class="list-group list-group-flush">
                              <li class="list-group-item"> <input type="radio" name="question15" value="f1" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f1') echo 'checked="checked"'; ?>  />
                                 <label>1. 4</label><br /></li>

                                 <li class="list-group-item">   <input type="radio" name="question15" value="f2" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f2') echo 'checked="checked"' ; ?>/>
                                 <label>2. 8</label><br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question15" value="f3" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f3') echo 'checked="checked"' ; ?>/>
                                 <label>3. 9</label> <br /></li>

                                 <li class="list-group-item"> <input type="radio" name="question15" value = "f4" <?php if(isset($_POST['question1']) && $_POST['question1'] == 'f4') echo 'checked="checked"' ; ?> />
                                 <label>4. 6720</label> </li>
                  </div>
                  <button
                  class = "btn btn-primary"
                  type=submit
                  style="width:150px;margin-left:40%;"
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
