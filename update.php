

<!DOCTYPE html>
<html>
<head>



<style>
        #frgt {
            background: url("http://getwallpapers.com/wallpaper/full/4/b/2/140386.jpg")
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

          .example {
         background-color: #eee;
         overflow-y: scroll;
         /* Add the ability to scroll */
      }

      /* Hide scrollbar for Chrome, Safari and Opera */
      .example::-webkit-scrollbar {
         display: none;
      }
</style>

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
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.0.13/css/all.css"
      integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>
<body id="frgt"  class="example" style="overflow-y: hidden;">


<div class="card card-signin mx-auto  " style="width:25%;margin-top:15%;"> 
  <div class="card-body">
  <h5
                class="card-title mb-3 text-center font-weight-bold text-dark"
              >
               Update Details
              </h5>
              <hr class="my-4" />
  <form class ="form-signin"action="update.php?id=<?php echo$_GET['id']; ?>" method="post">
  <div class="form-label-group input-group mt-3">
    <input type="text" 
          id="fname"
           name="fname"
           placeholder="Name to be updated"
           class="form-control"
           style="border-radius: 40px;"                 
           required
        
           >
    <label for="fname">Name </label>

    </div>
    <div class="form-label-group input-group">
    <input type="text" 
    name="score"
     placeholder="Score  to be updated"
     id="lname"
           class="form-control"
           style="border-radius: 40px;"                 
           required
     >
     <label for="lname">Score </label>
     </div>
    <input class="btn btn-primary"type="submit" value="submit" name="submit">
    
  </form>
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








<?php




require('helper.php');
require('connection.php');
$conn=getConnection();


  if (isset($_POST['submit']) ) {
    $sid= $_GET['id'];


    if (isset($_POST['fname']) && !(empty($_POST['fname']))) {
      $fnm=$_POST['fname'];

      $sql = "UPDATE student SET s_name='$fnm' WHERE s_id='$sid'";

      $stmt=$conn->prepare($sql);
       $stmt->execute();
    }
    if (isset($_POST['score']) && !(empty($_POST['score']))) {
      $score=$_POST['score'];
      $sql="";
      if ($score>15) {
        echo "<script>alert('Score cannot be greater than 15')</script>";
      }
      else {


      if ($score<=6) {
      $sql = "UPDATE result SET score='$score',status='failed'  WHERE s_id='$sid'";
      }
      else {
        $sql = "UPDATE result SET score='$score',status='passed'  WHERE s_id='$sid'";
      }


      $stmt=$conn->prepare($sql);
       $stmt->execute();
     }
    }
    redirectTo('aindex.php?q=1');



  }




 ?>
