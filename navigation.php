<?php include "db_connection.php" ?>

<?php session_start(); ?>
<!-- navigation -->
<div class="wrapper">
<nav class="navbar navbar-inverse navbar-light" style="background-color:  #49494A;">
  <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Doctor Information System</a>
                </div>

                <div class="collapse navbar-collapse" id="myNavbar">
                          <ul class="nav navbar-nav">
                            <li class=""><a href="index.php">Home</a></li>


                            <!-- <li class="dropdown">
                              <a clas
                              s="dropdown-toggle" data-toggle="dropdown" href="#">Specialists<span class="caret"></span></a>
                              <ul class="dropdown-menu">
                                <li><a href="#">Cardiology</a></li>
                                <li><a href="#">Dermatology</a></li>
                                <li><a href="#">Endocrinology</a></li>
                                <li><a href="#">ENT</a></li>
                                <li><a href="#">General Physician</a></li>
                                <li><a href="#">Urology</a></li>
                                <li><a href="#">Psychiatry</a></li>
                                <li><a href="#">Pediatrics</a></li>
                                <li><a href="#">Oncology</a></li>

                              </ul>
                            </li> -->
                          
<!--                             <li>
                            <a>
                              <form action="speciality_list.php" method="post">
                            <select name="doc_specialty" >
                              <option value="" style="">Specialists</option>
                              <option value="cardiology">Cardiology</option>
                              <option value="dermatology">Dermatology</option>
                              <option value="endocrinology">Endocrinology</option>
                              <option value="ent">ENT</option>
                              <option value="general_physician">General Physician</option>
                              <option value="urology">Urology</option>
                              <option value="psychiatry">Psychiatry</option>
                              <option value="pediatrics">Pediatrics</option>
                              <option value="oncology">Oncology</option>
                            </select>
                            </form>
                          </a>
                        </li>
                         -->

                            <li><a href="doc_list.php">Doctors</a></li>
                            <li><a href="hospital_list.php">Hospitals</a></li>
                      

                          </ul>

                            <?php 


                            if (isset($_SESSION['email'])) {

                              $img= $_SESSION['image'];

                                        echo "


                                          <ul class='nav navbar-nav navbar-right'>

                                            <div class='collapse navbar-collapse sticky-top'>
                                                      <ul class='nav navbar-nav navbar-right'>

                                                        <li><a style='color:red;'>{$_SESSION['name']}</a></li>



                                                  <li><a><img class='img-responsive' src='$img' height='30px' width='30px'></a></li>


                                                  <li><a href='logout.php' ><span class=''></span> Log Out</a></li>

                                                </ul>
                                            </div>

                                          </ul>

                                        ";

                                      }

                                      else if (isset($_SESSION['admin'])) {

                                        // $img= $_SESSION['image'];


                                        echo "


                                          <ul class='nav navbar-nav navbar-right'>

                                            <div class='collapse navbar-collapse sticky-top'>
                                                      <ul class='nav navbar-nav navbar-right'>



                                                  <li><a><img class='img-responsive' src='images/admin.png' height='30px' width='30px'></a></li>

                                                  <li><a href='admin/admin_index.php' ><span class=''></span> Admin</a></li>

                                                  <li><a href='logout.php' ><span class=''></span> Log Out</a></li>

                                                </ul>
                                            </div>

                                          </ul>

                                        ";






                                       
                                      }

                                else
                                  {
                                    echo "
                                      <ul class='nav navbar-nav navbar-right'>

                                          <div class='collapse navbar-collapse sticky-top'>
                                                    <ul class='nav navbar-nav navbar-right'>

                                                      <li class='dropdown'>
                                                        <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Sign-Up<span class='caret'></span></a>
                                                        <ul class='dropdown-menu'>
                                                          <li><a href='signup.php'>User Sign-Up</a></li>
                                                          <li><a href='doctor_signup.php'>Doctor Sign-Up</a></li>
                                                        </ul>
                                                       </li>


                                                <li><a href='login.php' ><span class='glyphicon glyphicon-log-in'></span> Login</a></li>

                                              </ul>
                                          </div>

                                        </ul>



                                    ";
                                  }








                             ?>
                          <!-- 
                          <ul class='nav navbar-nav navbar-right'>

                            <div class='collapse navbar-collapse sticky-top'>
                                      <ul class='nav navbar-nav navbar-right'>

                                        <li class='dropdown'>
                                          <a class='dropdown-toggle' data-toggle='dropdown' href='#'>Sign-Up<span class='caret'></span></a>
                                          <ul class='dropdown-menu'>
                                            <li><a href='signup.php'>User Sign-Up</a></li>
                                            <li><a href='doctor_signup.php'>Doctor Sign-Up</a></li>
                                          </ul>
                                         </li>


                                  <li><a href='login.php' ><span class='glyphicon glyphicon-log-in'></span> Login</a></li>

                                  <li><a href='admin/admin_index.php' ><span class=''></span> Admin</a></li>

                                </ul>
                            </div>

                          </ul> -->


                  </div>

    </div>




  </nav>
</div>


<style type="text/css">
  .navbar{
    /*overflow: hidden;*/

    
  }
  option{
    color:lightblue ;
    background-color:#333333;
  }
  option:hover{
    background-color: green;
    color: red;
  }

</style>