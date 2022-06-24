<?php
$server = "localhost";
$username = "root"; //root by default in the server
$password = ""; 
$database = "zalego";

        //inbuild function
$conn = mysqli_connect($server,$username,$password,$database);
if(isset($_POST['submitbutton'])){

    $email = $_POST['email'];
    $insertdata = mysqli_query($conn, "INSERT INTO 
   subscribers(email) VALUES('$email')");
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


<!DOCTYPE html>
<html lang="en">
    <head>
     <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
         <link rel="stylesheet" href="bootstrap-5.2.0-beta1-dist/css/bootstrap.min.css">
    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        <!-- <nav class="navbar navbar-expand-lg bg-light fixed-top shadow">
            <div class="container-fluid">
                <a href="#" class="navbar-brand">Zalego academy</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-expanded="false" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <div class="navbar-nav">
                        <a href="#" class="nav-link">Home</a>
                        <a href="#" class="nav-link active">About Us</a>
                        <a href="#" class="nav-link">Contact Us</a>
                    </div>
                </div>
            </div>
     </nav> -->
     <main class="p-5 mb-2 bg-secondary text-black">
        <h1>About Us</h1>
        <p>This is a template for a single marketing or informational website.It includes a large callouts called a jumbotron and three supporting pieces of content.Use it as a starting point to create something more unique.</p>
     </main>

     <br>
     
     <div class="container">
        <div class="row">
           <div class="col-lg-4">
              <h1>
                  Our Program
              </h1>
              <p>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda obcaecati, ullam deleniti dolor, voluptatibus dolorum voluptas mollitia laborum temporibus similique aut, sapiente quibusdam quasi minima! Accusantium quos eius aut temporibus!
              </p>
            </div>
            <div class="col-lg-6">
                    <img src="images/w.jpg" alt="keyboard" height="200px" width="400px">
            </div>
        </div>
        <br>
        <div class="row">

            <div class="col-lg-4">
                   <h1>
                       The Programs
                   </h1>
                   <div class="card" style="width:18rem">
                    <h6>Skil Discovery</h6>
                   <p>
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda obcaecati, ullam deleniti dolor, voluptatibus dolorum voluptas mollitia laborum temporibus similique aut, sapiente quibusdam quasi minima! Accusantium quos eius aut temporibus!
                   </p>
                   <button class="btn btn-primary">View Details</button>
                   </div>
                </div>
                <div class="col-lg-4">
                <div class="card" style="width:18rem">
                    <h6>UpSkilling Program</h6>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda obcaecati, ullam deleniti dolor, voluptatibus dolorum voluptas mollitia laborum temporibus similique aut, sapiente quibusdam quasi minima! Accusantium quos eius aut temporibus!
                    </p>
                    <button class="btn btn-primary">View Details</button>
                </div>
                 </div>
                 <div class="col-lg-4">
                 <div class="card" style="width:18rem">
                    <h6>Path Finding Program</h6>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Assumenda obcaecati, ullam deleniti dolor, voluptatibus dolorum voluptas mollitia laborum temporibus similique aut, sapiente quibusdam quasi minima! Accusantium quos eius aut temporibus!
                    </p>
                    <button class="btn btn-primary">View Details</button>
                 </div>
                </div>
     </div>
     </div>

     <br>

     <div class="row">
        <p>
            Subscribe to get new information,latest news about Zalego Academy.
        </p>
     </div>
     <form action="aboutus.php" method = "POST">
    
    <div class="row col-6">
        <button type="submit"  name = "submitbutton" class="btn btn-primary">Subscribe</button>
        <input type="email"  name = "email"class="form-control" placeholder="Enter Your Email">
    </div>
    
    </form>

  
<div>
    
    <hr>
    <footer>
        &copy; Company 2022 
    </footer>
   </div>


     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

        <!-- <script src="bootstrap-5.2.0-beta1-dist (1)/bootstrap-5.2.0-beta1-dist/js/bootstrap.bundle.min.js"></script> -->
        <script src="bootstrap-5.2.0-beta1-dist (1)/bootstrap-5.2.0-beta1-dist/js/bootstrap.min.js"></script>
     
   </body>
</html>    
