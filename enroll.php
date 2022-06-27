<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submit']))
{

    $fullname = $_POST['fullname'];
    $phone = $_POST['phonenumber'];
    $email = $_POST['email'];
    $gender = $_POSt['gender'];
    $course = $_POSt['course'];

    $insertdata = mysqli_query($conn, "INSERT INTO 
    enrollment(fullname,phonenumber,email,gender,course)
    VALUES('$fullname','$phone','$email','$gender','$course')");
    if($insertdata)
    {
        echo "Data Submitted Successfully";
    }
    else
    {
        
        echo "Error Occured";
    }
}

?>
























!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
         <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
         <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
         <link rel="stylesheet" href="style.css">
         </head>
    <body>
        <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Zalego academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <div class="navbar-nav">
                        <a href="#" class="nav-link">Home</a>
                        <a href="#" class="nav-link ">About Us</a>
                        <a href="#" class="nav-link active">Register Now</a>
                    </div>
                </div>
            </div>
     </nav>

     <main class= "bp-5 mb-2 bg-secondary text-black">
        <h2 >JULY SOFTWARE ENGINEERING BOOTCAMP</h2>
       <span> <i class="fa-solid fa-location-dot"> </i>
        </span>
        <span>Zalego Academy.Devan Plaza</span>
        <span><i class="fa-solid fa-calendar-days"></i></span>
        <span>2oth July 2022</span>
     </main>
     <h6>
        <p>
        Looking for a place to kick start your career in Technology?
        Whether you're a local,new in town or just crusing through we've got 
        loads of great tips and events for you.
        </p></h6>
     <h2>Sign up today?</h2>
     <div class="container">
        <form>
        <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="Fullname" class="form-label">Full Name</label>
                        <input type="text"  name = "fullname"class="form-control" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                       <label for="phonenumber" class="form-label">Phone Number</label>
                       <input type="text" name="phonenumber" class="form-control" placeholder="+2547....">
                   </div>
                </div>
                <div class="row">
                <div class="mb-3 col-lg-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email"  class="form-control" placeholder="Enter Your Email">
                   </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" name="gender" class="form-label">What's your gender?</label>
                        
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            --select your gender--
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Male</a></li>
                                <li><a class="dropdown-item" href="#">Female</a></li>
                                <li><a class="dropdown-item" href="#">Non-binary</a></li>
                            </ul>
                            </div>
                    </div>

                </div>

        </form>
        <br>
        <div class="row">

        <h6>
            <p>
                In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking.
                Please NOTE that this will be your learning track during the 2-weeks immersion
            </p>
        </h6>
        </div>
        <br>
        <div class="row">
        <div class="mb-3 col-lg-6">
                        <label for="course"name="course" class="form-label">What's your Preference?</label>
                        
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            --select your course--
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item" href="#">Cyber security</a></li>
                                <li><a class="dropdown-item" href="#">Web design</a></li>
                                <li><a class="dropdown-item" href="#">Data science</a></li>
                            </ul>
                            </div>
                    </div>
</div>



<h6>
<p>You agree by providing your information you understand all our data privacy and protection policy 
    outlined in our Terms $ conditions and the Privacy Policy statments.
</p>
</h6>

<div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
  <label class="form-check-label" for="flexCheckChecked">
    Agree to terms and conditions
  </label>
</div>
<button type="submit"  name = "submitbutton" class="btn btn-primary">submit application</button>




 </div>
 <hr>

 <div class="row">
        <p>
            Subscribe to get new information,latest news about Zalego Academy.
        </p>
     </div>
     <form action="enroll.php" method = "POST">
    
    <div class="row col-6">
        <button type="submit"  name = "submit" class="btn btn-primary">Subscribe</button>
        <input type="email"  name = "email"class="form-control" placeholder="Your email address">
    </div>
    
    </form>

<div>
    
    <hr>
    <footer>
        &copy; Company 2022 
    </footer>
   </div>
<hr>







     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
