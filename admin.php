<?php

session_start();

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
    <!-- Nav Bar -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-3 ">
      <div class="container">
        <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
      </div>
    </nav>
    <!--End Nav-->

    <section id="admin">
      <?php if (isset($_SESSION['message'])) {
        echo '<script> alert("Wrong email id or password"); </script>';


       } ?>

      <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto mt-5">
            <div class="card card-signin my-5 special-card1">
              <div class="card-body">
                <h5 class="card-title text-center font-weight-bold text-light">
                  Admin Login
                </h5>
                <hr class="my-4" />
                <form class="form-signin" method="POST" action="login.php">
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
                      id="inputEmail"
                      name="user"
                      type="email"
                      class="form-control  border-right-0 rounded-left"
                      style="border-radius: 40px;"
                      placeholder="Email address"
                      required
                      autofocus
                    />
                    <label for="inputEmail">Email address</label>
                  </div>

                  <div class="form-label-group input-group">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-white rounded-right ml-auto "
                        style=" -webkit-border-radius: 10px; border-radius: 40px; behavior:url('border-radius.htc');"
                      >
                        <i class="fas fa-unlock "></i>
                      </span>
                    </div>
                    <input
                      type="password"
                      id="pass"
                      name='password'
                      class="form-control  border-right-0 rounded-left"
                      style="border-radius: 40px;"
                      placeholder="Email address"
                      required
                      autofocus
                    />
                    <label for="pass">Password</label>
                  </div>
                  <div class="custom-control custom-checkbox mb-3">
                    <input
                      type="checkbox"
                      class="custom-control-input"
                      id="customCheck1"
                    />

                  </div>
                  <button
                    class="btn btn-lg btn-primary btn-block text-uppercase mt-1"
                    type="submit"
                  >
                    Sign in
                  </button>
                  <hr class="my-4" />
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>



    </section>
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
