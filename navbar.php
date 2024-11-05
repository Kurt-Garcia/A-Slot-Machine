<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">





    <!-- BOOTSTRAP LINKS-->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
    <script src="bootstrap/jquery.min.js"></script>
    <script src="bootstrap/popper.min.js"></script>
    <script src="bootstrap/bootstrap.min.js"></script>
    <link  rel="stylesheet" href="bootstrap/jquery-ui.css" />
    <script src="bootstrap/jquery-ui.js"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/linearicons/style.css">


</head>
<body>

  <!-- Start your project here-->
<!--Navbar -->

 

<nav class="navbar navbar-expand-sm navbar-expand-sm bg-blue navbar-dark fixed-top" style=" padding:1px; background-color:#003366">  
  <a class="navbar-brand" style="color: #FFFAF0; font-family: 'Calibri'; font-size: 30px; font-weight:bold;  margin-left: 18px;  margin-bottom: 5px "> GAISANO CAPITAL OZAMIS E-RAFFLE </a>
 <!--  <a class="navbar-brand" style="color: #FFFAF0; font-family: 'Calibri'; font-size: 25px;  margin-left: 2px; margin-bottom: 1px">TNA Monthly Report</a> -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav ml-auto">
      
    </ul>
   <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">        
      <ul class="navbar-nav ml-auto">  

      <!--   <li class="nav-item active">
            <a class="nav-link" href="tna.php" style="font-family: 'Calibri'; font-size: 17px; padding:1px 20px">Report</a>
        </li>-->

        <li class="nav-item active">
            <a class="nav-link" href="data_input.php" style="font-family: 'Calibri'; font-size: 17px; padding:1px 20px">Input</a>
        </li> 

        <li class="nav-item active">
            <a class="nav-link" href="viewall.php" style="font-family: 'Calibri'; font-size: 17px; padding:1px 20px">Tickets</a>
        </li> 

        <li class="nav-item active">
            <a class="nav-link" href="id.php" style="font-family: 'Calibri'; font-size: 17px; padding:1px 20px">Inv No</a>
        </li> 


        <li class="nav-item active">
            <a class="nav-link" href="logout.php" style="font-family: 'Calibri'; font-size: 17px; padding:1px 20px">Logout</a>
        </li> 

         <li class="nav-item dropdown active">
         <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Calibri'; font-size: 17px; padding: 1px 10px ">Powerd by kikoisay </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" align="right">
                <a class="dropdown-item" >This Software is Developed </a>
                <a class="dropdown-item" >by SoftDev Team v1</a>
        
        </div>
        </li>

      </ul>
  </div>
</nav>


<div class="container">
  <div class="row">
    <!-- <div class="col-md-1"></div> -->
    <div class="col-md-8"><br><br><br><br>

    </div>
  </div>
  
</div>
<!--/.Navbar -->
  <!-- Start your project here-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
    // SideNav Button Initialization
//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
  </script>
</body>

</html>
