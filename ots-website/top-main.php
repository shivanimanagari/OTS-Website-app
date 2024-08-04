<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "OTS";
$conn = mysqli_connect($servername,$username,$password,$dbname);
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Name=$_REQUEST['Name'];
    $EmailId=$_REQUEST['EmailId'];
    $PhoneNumber=$_REQUEST['PhoneNumber'];
    $Query=$_REQUEST['Query'];
    
    $sql = "INSERT INTO Queries (Name,EmailId,PhoneNumber,Query)  VALUES ('$Name', 
            '$EmailId','$PhoneNumber','$Query')";
    if (mysqli_query($conn,$sql)){
    }
    else
        echo "error";
}
$conn->close();
?>

<header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center align-items-center">
        <div class="col-xl-11 d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="index.php"><img width="160px" height="140px" src="images/logo.png"></a> 
</h1>    
          <nav id="navbar" class="navbar">
            <ul>
              <li><a class="nav-link scrollto active" href="index.php">Home</a></li>
              <li><a class="nav-link scrollto" href="about.php">About</a></li>
              <li><a class="nav-link scrollto" href="courses.php">Courses</a></li>
              <li><a class="nav-link scrollto " href="events.php">Events</a></li>
              <li><a class="nav-link scrollto" target="_blank" href="ecommerce/index.php">ECommerce</a></li>
                 <li><a class="nav-link scrollto" href="user-login.php">Login/Register</a></li>
              <li class="dropdown"><a href="more.php"><span>More</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="more.php#faq">FAQ's</a></li>
                  <li><a href="more.php#t&d">Terms &amp; conditions</a></li>
                  <li><a href="more.php#support">Support us</a></li>
                </ul>
              </li>
            </ul> 
            <i class="bi bi-list mobile-nav-toggle"></i>
          </nav><!-- .navbar -->
        </div>
      </div>

    </div>
  </header><!-- End Header -->