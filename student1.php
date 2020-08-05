<?php

//session_start();
require('helper.php');

sec('admin.php');

 ?>
<!DOCTYPE html>
<html lang="en">
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

      /* Hide scrollbar for IE and Edge */
      .example {
         -ms-overflow-style: none;
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
  <body id="frgt" >
      <!-- Nav Bar -->
      <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top py-3 ">
      <div class="container">
        <a class="navbar-brand mx-auto">Fergusson College Exam Portal</a>
      </div>
    </nav>
    <!--End Nav-->
    
      <div class="container" style="margin-left:12%;">
            <div class="card mx-auto" style="margin-top:20%">
            <div class="card-body ">
              <h5
                class="card-title mb-3 text-center font-weight-bold text-dark"
              >
                Student Details
              </h5>
              <hr class="my-4" />
              </h5>
              <div class="table-responsive">
                <table  class="table table-light">
                  <thead class="thead-dark">
                    <tr>
                      <th>S.N</th>
                      <th>Name</th>
                      <th>Semister</th>
                      <th>Subject</th>
                      <th>Score</th>
                      <th>Status</th>
                      <th>Delete</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    require('connection.php');
                    $conn=getConnection();
                    $x=1;
                    $stmt = $conn->query("SELECT * from student natural join result");


                    while ($t=$stmt->fetch()) {
                      $sc=$t['S_code'];
                      $stmt1 = $conn->query("SELECT Subject_title from subject where S_code='$sc'");
                      $tt=$stmt1->fetch();
                      ?>

                    <tr>
                      <td><?php echo $x; ?></td>
                      <td><?php echo $t["s_name"].' '.$t["l_name"]; ?></td>
                      <td><?php echo $t['Semister']; ?></td>
                      <td><?php echo $tt['Subject_title']; ?></td>
                      <td><?php echo $t['score']; ?></td>
                      <td><?php echo $t['status']; ?></td>
                      <td><a class = "btn btn-danger"href="del.php?id=<?php echo $t['s_id'];?>"> delete</a></td>
                      <td><a  class = "btn btn-info" href="update.php?id=<?php echo $t['s_id']; ?>"> update</a></td>


                    </tr>
                    <?php

                    $x+=1;
                  }
                    ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
      </div>

      <script>
// Get the modal
var modal = document.getElementById('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

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
