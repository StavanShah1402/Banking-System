<!DOCTYPE html>
<html lang="en" dir="ltr">
  
    <meta charset="utf-8">
    <title>Basic banking system</title>

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <script src="https://kit.fontawesome.com/06f98189ab.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php
      include "navbar.php";
    ?>
    <div class="container-fluid">
      <div class="row mainpage" style="background-color:#301922;">	
        <div class="col-lg-8 col-md-8 col-sm-12">
          <div class="heading text-center my-5 pt-3">
            <div class="abc"
            <h1></h1>
           ;<h1 style="color:blanchedalmond;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>WELCOME TO HORICON BANK</u></b></h1>
            </div>
            <br><br><br>
            <hr>
            <h1></h1>
          </div>
        </div>
        
      </div>
    </div>


    <div class="container-fluid">
      <div class="row activity text-center">
        <div class="col-lg-4 col-md-4 col-sm-12 py-4 options">
          <i class="fas fa-users fa-9x py-3" style="color: black;"></i>
          <br>
          <a href="createuser.php">
            <button class="btn btn-lg btn-primary" style="background-color:#000000;" >Create User</button>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 py-4 options">
          <img src="image/moneytransfer.png" style="width: 180px; height: 176px;" alt="" style="color: black;">
          <br>
          <a href="transfermoney.php">
            <button class="btn btn-lg btn-primary" style="background-color:#000000;" >Transfer Money</button>
          </a>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-12 py-4 options">
          <i class="fas fa-history fa-9x py-3" style="color: black;"></i>
          <br>
          <a href="transactionhistory.php">
            <button class="btn btn-lg btn-primary" style="background-color:#000000;" >Transaction History</button>
          </a>
        </div>

      </div>
    </div>


    <?php
      include "footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
