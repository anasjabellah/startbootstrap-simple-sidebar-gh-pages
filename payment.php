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
    <body>

    <?php 

      $payments = array (
        array("karthi","first","00012223","10,000","30,000", "5-jan,2022",'<i class="bi bi-eye fs-4 text-info eye-btn"></i>'),
        array("amin","first","00012223","200,000","14,000", "5-jan,2022",'<i class="bi bi-eye fs-4 text-info eye-btn"></i>'),
        array("ahmad","first","00012223","400,000","50,000", "5-jan,2022",'<i class="bi bi-eye fs-4 text-info eye-btn"></i>'),
        array("salim","first","00012223","500,000","16,000", "5-jan,2022",'<i class="bi bi-eye fs-4 text-info eye-btn"></i>'),
        array("asma","first","00012223","600,000", "18,000","5-jan,2022",'<i class="bi bi-eye fs-4 text-info eye-btn"></i>'),
      );

    ?>

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
                      <div class="row  p-3 pt-4 d-flex justify-content-between">
                        <div class="col-5"><h1 class="fw-bold fs-2">Payment Details</h1></div>
                        <div class="col-1"><img src="Vector.png" alt=""></div>
                    </div>
            
                    <div class="row p-3 pt-4 overflow-auto">
                        <table class="table table-striped border-top ">
                            <thead>
                              <tr>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                                <th scope="col">Handle</th>
                                <th scope="col"></th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php   
                              
                              for ($row = 0; $row < count($payments); $row++) {
                                echo "<tr>";
                                for ($col = 0; $col < 7 ; $col++) {
                                  echo "<th>".$payments[$row][$col]."</th>";
                                }
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
