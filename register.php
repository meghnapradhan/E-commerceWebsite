
<?php

$server='localhost';
$username='root';
$password='';
$database='shop';

$conn= mysqli_connect($server,$username,$password,$database);

if($conn->connect_error){
    die("Connection failed:".$conn->connect_error);

}
echo"";
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
   
    $password=$_POST['password'];

    $sql="INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
    
    if(mysqli_query($conn,$sql)){
        echo "Records inserted successfully";
    }else{
        echo "ERROR: Could not able to executec $sql. " .mysqli_error($conn);
    }


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width", initial-scale=1.0">
    <title>Ecommerce Webpage|Login</title>
    
    

    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Allison&family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="nav nav-top">
        <div class="logo">
            <a href="index.html"><img src="images/logo.jpg" width="120"
             height="120"></a>
        </div>
        <div class="nav-side">
            <a href="about.html">About Us</a>
            <a href="contact.html">Contact</a>
            <a href="service.html">Services</a>
            <a href="login.php">Login/Register</a>

        </div>
    </nav>
    <div class="login-page">
        <h2 id="register">Register</h2>
        <div class="login-form">
            
            <form method="POST">
                <input type="text" placeholder="Name" name="name" required><br>
                <input type="email" placeholder="email id" name="email" required><br>
                <input type="password" placeholder="password" name="password" required><br>
                <input type="password" placeholder="confirm password" required><br>
                <button type="submit" name="submit">Register</button>
                <p >Already Registered?<a href="login.php">Login</a></p>
            </form>
            </div>
            

        </div>
    </div>


    <div class="feed">
        <h2>Write a Review</h2>
        <div class="feed_form">
            <form name="submit-review" method="POST">
                <input type="text"  name="Name" placeholder="Name" required><br>
                
                <input type="email"  name="Email ID" placeholder="Email ID" required><br>
                
                <input type="number"  name="Number" placeholder="Contact No." required><br>
                
                <textarea rows="5" cols="20" name="Review" placeholder="Write your review" required></textarea><br>
                <button type="submit" name="resubmit">Submit</button>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js">
    </script>
    
     
    <footer>
        
        <div class="footer1">
        <div class="pages">
            <h3>Pages</h3>
            <a href="about.html">About Us</a>|
            <a href="service.html">Services</a>|
            <a href="login.php">Login</a>|
            <a href="register.php">Sign up</a>
        </div>
        <div class="doc">
            <h3>Documents</h3>
            <a href="">Privacy Policy</a>|
            <a href="">Terms and Uses</a>|
            <a href="">Refund Policy</a>|
        </div>
        <div class="social">
            <h3>Follow Us</h3>
            <a href="#" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
            <a href="#" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a>
        </div>
        <div class="contact">
            <h3>Contact Us</h3>
            <a href="https://api.WhatsApp.com/send/phone: +919924788492" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
            <a href="tel: +919924788492"><i class="fa fa-phone" aria-hidden="true"></i></a>
            <a href="mailto: support@1stop.ai"><i class="fa fa-envelope" aria-hidden="true"></i></a>
        </div>
    </div>
        <p>Copyright &copy; 2022 cake shop. All rights reserved</p>
    </footer>
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

</body>
</html>