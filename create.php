<!DOCTYPE html>
<?php session_start(); ?>
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
        <button
          class="navbar-toggler"
          data-toggle="collapse"
          data-target="#navbarCollapse"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
    <!--End Nav-->

    <section id="create">
      <div class="container register">
        <div class="row">
          <div class="col-md-3 register-left">
            <h3>Welcome</h3>
            <?php if (isset($_SESSION['e1'])) {

              echo '<script> alert("Already taken the id"); </script>';
            } ?>
            <a
              class="btnRegister btn-lg mt-5"
              style="border-radius : 12px;margin-right : 60px"
              href="index.php"
              >Login</a
            >
          </div>
          <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab"></ul>
            <div class="tab-content">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <h3 class="register-heading">Student Registration</h3>
                <div class="row register-form">
                  <div class="col-md-6">
                    <div class="form-group">
                      <form class="" action="register.php" method="POST">


                      <input
                        type="text"
                        class="form-control"
                        name="first"
                        placeholder="First Name *"
                        value=""
                        required
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="text"
                        name="last"
                        class="form-control"
                        placeholder="Last Name *"
                        value=""
                        required
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Password *"
                        value=""
                        required
                      />
                    </div>
                    <div class="form-group">
                      <input
                        type="password"
                        class="form-control"
                        placeholder="Confirm Password *"
                        value=""
                        required
                      />
                    </div>
                    <div class="form-group">
                      <div class="maxl">
                        <label class="radio inline">
                          <input
                            type="radio"
                            name="gender"
                            value="male"
                            checked
                          />
                          <span> Male </span>
                        </label>
                        <label class="radio inline">
                          <input type="radio" name="gender" value="female" />
                          <span>Female </span>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input
                        type="email"
                        name="user"
                        class="form-control"
                        placeholder="Your Email *"
                        value=""
                        required
                      />
                    </div>
                    <div class="form-group ">
                      <select class="form-control" name="semister">
                        <option class="hidden" selected disabled required
                          >semister</option
                        >
                        <option value=1>I</option>
                        <option value=2>II</option>
                        <option value=3>III</option>
                      </select>
                    </div>
                    <div class="form-group ">
                      <select class="form-control" name="sq">
                        <option class="hidden" selected disabled required
                          >Please select your Security Question</option
                        >
                        <option value="What is your Birthdate?">What is your Birthdate?</option>
                        <option value="What is Your Phone Number?">What is Your Phone Number?</option>
                        <option value="What is your Pet Name?">What is your Pet Name?</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Enter Your Answer *"
                        value=""
                        name="sa"
                        required
                      />
                    </div>
                    <input
                      type="submit"
                      class="btnRegister"
                      value="Register"
                    />
  
                            </form>
                          </div>
                  </div>
                </div>
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
  </body>
</html>
