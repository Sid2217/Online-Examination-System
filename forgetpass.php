
<?php session_start(); ?>
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

  #frgt {
  background: url(key.jpg)
    center center no-repeat;
  background-size: cover;
  height: 100%;
  width: 60%;
  text-align: center;
  display: flex;
  align-items: center;
  object-fit: cover;
  min-height: 100%;
}
   </style>
  </head>

  <body class="example" style="overflow-y: hidden;">
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

    <div  id = "frgt" style="float:left" class="split left">
    </div>
        <div class="split right" style="background-color:rgb(209, 237, 232);  height:100%">
          <div class="row">
          <div class="card card-signin  col-lg-7 mx-auto" style="width:25%;margin-top:35%;">
            <div class="card-body ">
              <h5
                class="card-title mb-3 text-center font-weight-bold text-dark"
              >
                Forgot Password
              </h5>
              <hr class="my-4" />
              <form class="form-signin " role="form" action="for.php" method="POST">
                <div class="form-label-group input-group mt-5">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-white rounded-right ml-auto "
                      style=" -webkit-border-radius: 10px; border-radius: 40px; behavior:url('border-radius.htc');"
                    >
                      <i class="fas fa-user "></i>
                    </span>
                  </div>
                  <input
                    type="email"
                    id="inputEmail"
                    name="user"
                    class="form-control  border-right-0 rounded-left"
                    style="border-radius: 40px;"                 
                    required
                    autofocus
                  />
                  <label for="inputEmail" style="margin-left:28%">Email address</label>
                </div>
                <div class="custom-control custom-checkbox mb-3">
                  <input
                    type="checkbox"
                    class="custom-control-input"
                    id="customCheck1"
                  />
                </div>
                <button
                  class="btn btn-lg btn-warning btn-block text-uppercase "
                  type="submit"
                >
                  check
                </button>
                <hr class="my-4" />
                <a
                  class="btn btn-lg btn-google btn-block text-uppercase fab  mr-2"
                  href="index.php"
                  >login</a
                >

              </form>
              <?php if (isset($_SESSION['message'])) {
                echo "<div class='alert alert-danger'>".$_SESSION['message']."</div>.";
               } ?>
            </div>
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
