<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zalego";


$conn = mysqli_connect($server,$username,$password,$database);

if(isset($_POST['submitbutton']))
{

    $fullname = $_POST['fullname'];
    $phonemuber = $_POST['phonemuber'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $course = $_POST['course'];

    $insertdata = mysqli_query($conn, "INSERT INTO 
    enrollment(fullname,phonemuber,email,gender,course)
    VALUES('$fullname','$phonemuber','$email','$gender','$course')");
    if($insertdata)
    {
        echo "Data Submitted Successfully";
    }
    else
    {
        
        echo "Error Occured".mysqli_error($conn);
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
     <div class="container">

     <main class= "bp-5 mb-2  bg-secondary text-black">
        <h2 >JULY SOFTWARE ENGINEERING BOOTCAMP</h2>

        <span><i class="fa fa-calendar-check-o fa-3x"></i></span>
        <span>2oth July 2022</span>
        
        <br>

       <span> <i class="fa fa-map-marker fa-3x"> </i></span>
        <span>Zalego Academy <br>
            Devan Plaza</span>
            
            
       
     </main>
     
     </div>
     
     <h6>
        <p class="text-centre">
        Looking for a place to kick start your career in Technology? <br>
        Whether you're a local,new in town or just crusing through we've got <br>
        loads of great tips and events for you.
        </p>
    </h6>
    
     <div class="container shadow p-3 mb-5 bg-body rounded">
        <form action="enroll.php" method="POST">
        <h2 class="text-centre text-primary">Sign up today?</h2>
        <div class="row">
                    <div class="mb-3 col-lg-6">
                        <label for="fullname" class="form-label">Full Name</label>
                        <input type="text"  name = "fullname"class="form-control" placeholder="Enter Your Full Name">
                    </div>
                    <div class="mb-3 col-lg-6">
                       <label for="phonemuber" class="form-label">Phone Number</label>
                       <input type="text" name="phonemuber" class="form-control" placeholder="enter phonenumber">
                   </div>
                </div>

                <div class="row">
                <div class="mb-3 col-lg-6">
                       <label for="email" class="form-label">Email</label>
                       <input type="email" name="email"  class="form-control" placeholder="Enter Your Email">
                   </div>
                    <div class="mb-3 col-lg-6">
                        <label for="gender" name="gender" class="form-label">What's your gender?</label>
                        <select class="form-select" name="gender">
                        <option selected>--select your gender--</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="nonbinary">Non-binary</option>
                        </select>
                        
                       
                    </div>

                </div>

        
        <br>
        <div class="row">

        <h6>
            <p class="text-centre">
                In order to complete your registration to the bootcamp, you are required to select one course you will be undertaking.
                Please NOTE that this will be your learning track during the 2-weeks immersion
            </p>
        </h6>
        </div>
        <br>
        <div class="row">
            <div class="mb-3 col-lg-6">
                        <label for="course" name="course" class="form-label">What's your Preference?</label>
                        <select  class="form-select" name="course" >
                        <option selected>--select your course--</option>    
                            <option value="webdesign">Web design</option>
                            <option value="cybersecurity">Cyber Security</option>
                            <option value="datascience">Data science</option>
                        </select>
                        
                        
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
 </form>
 <hr>

 <div class="row">
        <p>
            Subscribe to get new information,latest news about Zalego Academy.
        </p>
     </div>
     
    
    <div class="row col-6">
        <button type="submit"  name = "submit" class="btn btn-primary">Subscribe</button>
        <input type="email"  name = "email"class="form-control" placeholder="Your email address">
    </div>
    
    

<div>
    
    <hr>
    <footer>
        &copy; Company 2022 
    </footer>
   </div>
<hr>







     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
     <script src="bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
