<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
  <style>
.jih{
  opacity=0.4;
}
.jih:hover{
  opacity=1.0;
}


    </style>

    <title>INDIA Small Finance Bank</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid" id="catterpil">
      <!-- Introduction section -->
            <div class="row intro py-1 jih"style="background-image: url('./img/main.png');background-repeat: no-repeat;
  background-size: 100% 100%; ">
              <div class="col-sm-12 col-md col-lg">
                <div class="heading text-center my-5">
                  <h3 style="color=#09f3cc";>Welcome to</h3>
                  <h1 style="color=#0e6eeb";>INDIA Small Finance Bank</h1>
                  <a href="createuser.php"><button>Let's Get Started</button></a>
                </div>
              </div>
              <!-- <div class="col-sm-12 col-md img text-center">
                <img src="img/bank.png" class="img-fluid pt-2">
              </div> -->
            </div>
            <br>
            <br>
            <br>


      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/user2.png" class="img-fluid">
                    <br>
                    <a href="createuser.php"><button>Create a User</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/paisa.jfif" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button>Send Money</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/lifa.jfif" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button>View Your History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy Apr'21. Made by <b>Akshansh Gupta</b><br>Intern <br><strong>The Sparks Foundation </strong></p>
      </footer>
      <!-- Using JQuery-->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>