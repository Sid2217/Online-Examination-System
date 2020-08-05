
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

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
   var tm = 60 * 100;
 }

   // var fiveMinutes = 60 * 5;
 display = document.querySelector('#time');
 startTimer(5, display);
};
</script>
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
            display:flex;
            text-align: center;
            align-items: center;
            object-fit: cover;
            min-width: 100%;
            min-height: 100%;
            }
    </style>
  </head>
  <body class="example" style="overflow-y: hidden;" id="blue" >
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-3">
      <div class="container">
        <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a href="admin.html" class="nav-link"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!--End Nav-->

  <div class="row" style="margin-left:40%;">
          <div  class="card card-signin  col-lg-12 mx-auto" style="width:25%;">
            <div class="card-body ">
              <h5
                class="card-title mb-3 text-center font-weight-bold text-dark"
              >
                Forget Password
              </h5>
              <hr class="my-4" />
              <form class="form-signin"name="myf" role="form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
              <?php
                            require ('helper.php');
                            require ('connection.php');

                            $user=$_SESSION['user'];
                            $conn=getConnection();

                            $stmt = $conn->query("SELECT sq from student where s_id='$user'");
                            $t=$stmt->fetch();
                            // and somewhere later:
                            echo "<b>".$t['sq'];
                            closeConnection();
                            ?>
              <div class="form-label-group input-group">
              <input type="text"
                    id="frgt"
                    name="ans"
                    class="form-control rounded-pill mt-3 "
                    style="border-radius: 50px;"
                    required
                    autofocus
                    name="ans"
                    value="">
                    <label for="frgt" ></label>
          </div>
              <input class="btn btn-primary" type="submit" name="" value="submit" style="width:150px">
            </form>
            <?php
            if (isset($_POST['ans'])) {
              $ans=$_POST['ans'];
              //echo "$ans";
              $conn=getConnection();

              $stmt = $conn->prepare("SELECT * from student where s_id='$user' && sa='$ans'");
              $stmt->execute();
                if ($stmt->rowCount()==0) {
                  echo "<h5 class='h5 mt-4'>Invalid</h5>";
                  //redirectTo('forgetpass.php');
                }
                else {
                  $stmt = $conn->query("SELECT password from student where s_id='$user'");
                  $t=$stmt->fetch();
                  // and somewhere later:
                  echo "<h5 class='h5'>Your password is ".$t['password']."</h5>";
                  echo "<a href='index.php'>click here to go to login</a>";
                  closeConnection();
                }
            }

            ?>
    </div>
    </div>
    </div>
  </body>
</html>
