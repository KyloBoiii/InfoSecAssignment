<?php
  session_start();
  include("includes/dbh.inc.php");
  include("functions/function.php");
?>

 <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
          <link rel="icon" href="images/mochilogo.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Sign Up</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
  <link href="https://fonts.googleapis.com/css?family=Paytone+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style2.css">
    </head>

  <main>    
    <body bgcolor="black">
    <div>
    <h1 class="signuptitle">Signup</h1>
      <div class="page-content">
        <div class="form-v10-content" >
            <form method="post" enctype="multipart/form-data" class="form-detail" action="" style="margin-block-end: 0;">
                <div class="form-left">
                    <h2 class="headername">General Infomation</h2>
                      <div class="form-row">
                        <input type="text" name="Cust_Name" placeholder="Name" value="<?php if(isset($_POST['Cust_Name'])) echo $_POST['Cust_Name']; ?>" required>
                      </div>
                    <div class="form-row">
                      <input type="email" name="Cust_Email" placeholder="Email Address" value="<?php if(isset($_POST['Cust_Email'])) echo $_POST['Cust_Email']; ?>" required>
                    </div>
                    <div class="form-row">
                        <input type="password" name="Cust_Pass" placeholder="Password" required>
                    </div>
                    <div class="form-row">
                        <input type="password" name="Confirm_Pass" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                      <div class="form-row form-row-1">
                        <input type="text" name="Cust_Gen" placeholder="Gender" value="<?php if(isset($_POST['Cust_Gen'])) echo $_POST['Cust_Gen']; ?>" required>
                      </div>
                    <a></div>
                    <div class="picposition">
                    <a href='index.php'><img class="signuppic" src="images/mochilogo.png" alt="Mochi Logo"></a>
                    </div>
                    </a>
                </div>
                <div class="form-right">
                  <h2 class="headername">Additional Information</h2>
                    <div class="form-row">
                        <input type="text" name="Cust_Contact" placeholder="Contact Number" value="<?php if(isset($_POST['Cust_Contact'])) echo $_POST['Cust_Contact']; ?>" required>
                    </div>
                    <div class="form-row">
                      <input type="text" name="Cust_Address" placeholder="House No./Street" value="<?php if(isset($_POST['Cust_Address'])) echo $_POST['Cust_Address']; ?>" required>
                    </div>
                    <div class="form-row smallerbox2">
                      <input type="text" name="Cust_City" placeholder="City" value="<?php if(isset($_POST['Cust_City'])) echo $_POST['Cust_City']; ?>" required>
                    </div>
                    <div class="form-row smallerbox">
                      <input type="text" name="Cust_Zip"  placeholder="Zip Code" value="<?php if(isset($_POST['Cust_Zip'])) echo $_POST['Cust_Zip']; ?>" required>
                    </div>
                    <div class="form-row-last">
                      <input type="submit" name="submit" class="register" value="Sign Up">
                    </div>
                </div>
            </form>
        </div>
      </div>
    </div>
  </main>
</body>

<?php

    if (isset($_POST['submit'])) {

        $user_name = $_POST['Cust_Name'];
        $user_email = $_POST['Cust_Email'];
        $user_pass = md5($_POST['Cust_Pass']);
        $conf_pass = md5($_POST['Confirm_Pass']);
        $user_gender = $_POST['Cust_Gen'];
        $user_contact = $_POST['Cust_Contact'];
        $user_address = $_POST['Cust_Address'];
        $user_city = $_POST['Cust_City'];
        $user_zip = $_POST['Cust_Zip'];
        $user_ip = getRealIpUser();
        $select_email = "select * from customer where Cust_Email='$user_email'";
        $run_email= mysqli_query($con,$select_email);
        $check_email = mysqli_num_rows($run_email);

        if($check_email>0){
          echo "<script>alert('That Email Address is already registered')</script>";
          return;
        }if($conf_pass!=$user_pass){
          echo "<script>alert('Passwords do not match!')</script>";
          return;
        }
        else{
        $insert_user = "insert into customer (Cust_Name,Cust_Email,Cust_Pass,Cust_Gen,Cust_Contact,Cust_Address,Cust_City,Cust_Zip,Cust_Ip) values ('$user_name','$user_email','$user_pass','$user_gender','$user_contact','$user_address','$user_city','$user_zip','$user_ip')";

        $run_user = mysqli_query($con, $insert_user);

        session_destroy();
      }
    }

?>
</html>
