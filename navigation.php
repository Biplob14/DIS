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
        <li class="active"><a href="index.php">Home</a></li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Specialists<span class="caret"></span></a>
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
        </li>


        <li><a href="doc_list.php">Doctors</a></li>
        <li><a href="hospital_list.php">Hospitals</a></li>

      </ul>



      <ul class="nav navbar-nav navbar-right">
        <div class="collapse navbar-collapse sticky-top">
      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">Sign-Up<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="signup.php">User Sign-Up</a></li>
            <li><a href="doctor_signup.php">Doctor Sign-Up</a></li>
          </ul>
        </li>


        <li><a href="login.php" ><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="admin/admin_index.php" ><span class=""></span> Admin</a></li>

      </ul>
    </div>
  </div>
      </ul>
    </div>
  </div>
</nav>
</div>

<style type="text/css">
  .navbar{
    /*overflow: hidden;*/
    
  }
</style>