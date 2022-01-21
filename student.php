<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>DashbordAdmin</title>
        <!-- Favicon-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/Dashbord.css">
        <link rel="stylesheet" href="css/student.css">
    </head>

    <?php 

      $students = array (
        array('<img src="pexels-photo-2379004 1.png" alt="">',"username","user@gmail.com","293848459","82838484845859900", "@08-Dec,2022"),
        array('<img src="pexels-photo-2379004 1.png" alt="">',"username","user@gmail.com","293848459","82838484845859900", "@08-Dec,2022"),
        array('<img src="pexels-photo-2379004 1.png" alt="">',"username","user@gmail.com","293848459","82838484845859900", "@08-Dec,2022"),
        array('<img src="pexels-photo-2379004 1.png" alt="">',"username","user@gmail.com","293848459","82838484845859900", "@08-Dec,2022"),
        array('<img src="pexels-photo-2379004 1.png" alt="">',"username","user@gmail.com","293848459","82838484845859900", "@08-Dec,2022"),
        array('<img src="pexels-photo-2379004 1.png" alt="">',"username","user@gmail.com","293848459","82838484845859900", "@08-Dec,2022"),
      );

    ?>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <?php  include "inc/sidebars.php" ;    ?>




            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <?php  include "inc/nav.php" ;    ?>

                
                <!-- Page content-->
                <div class="container-fluid">
                    
                    <div class="container">
                      
        <div class="row p-3 pt-4 overflow-auto">

          <table class="table table-borderless spacing-table ">
              <thead>
                <tr>
                  <th scope="col"></th>
                  <th scope="col" class="text-capitalize">name</th>
                  <th scope="col" class="text-capitalize">email</th>
                  <th scope="col" class="text-capitalize">phone</th>
                  <th scope="col" class="text-capitalize">enroll number</th>
                  <th scope="col" class="text-capitalize">date of admission</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody>

              <?php 

                  for($row = 0 ; $row < count($students) ; $row++ ){

                    echo "<tr>";
                      for($col = 0 ; $col < 6  ; $col++ ){
                        echo "<th>".$students[$row][$col]."</th>";
                      }
                      echo '<td><a href=""><i class="bi bi-pencil fs-5 text-info"></i></a> <a href="" class="m-3"><i class="bi bi-trash fs-5 text-info"></i></a></td>';
                    echo "</tr>";
                  }

                ?>

              </tbody>
            </table>

      </div>

                    </div>


                </div>
           </div>
       </div>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
