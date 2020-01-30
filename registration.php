<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="js/bootstrap.js">
    <link rel="stylesheet" href="style.css">
    <title> Bootstrap registration form </title>
</head>
<body>
    <?php
     $username = "";
     $email = "";
     $phone = "";
     $password = "";
     $cp = "";
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">

            </div>
            <div class="col-md-6">
                <h1 class="text-center">REGISTER</h1>
                <form  action="testdb.php" method="post">
                <!-- making a row in col-md-6 for label and texbox -->
                <label class="label col-md-3 control-label" style="margin-left: 50px;">Username:</label>
                <div class="col-md-9">
                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?php echo $username;?>">
                </div>
                <!-- close -->
                <!-- making a row in col-md-6 for label and texbox -->
                <label class="label col-md-3 control-label" style="margin-left: 45px;">Email id:</label>
                <div class="col-md-9">
                    <input type="email" class="form-control" name="email" placeholder="Email id" value="<?php echo $email;?>">
                </div>
                <!-- close -->
                <!-- making a row in col-md-6 for label and texbox -->
                <label class="label col-md-3 control-label" style="margin-left: 60px;">Phone Number:</label>
                <div class="col-md-9">
                    <input type="number" class="form-control" name="phone" placeholder="Phone Number" value="<?php echo $phone;?>">
                </div>
                <!-- close -->
                <!-- making a row in col-md-6 for label and texbox -->
                <label class="label col-md-3 control-label" style="margin-left: 45px;">Password:</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $password;?>">
                    <small>Password must be atleast 6 characters. </small>
                </div>
                <!-- close -->
                <!-- making a row in col-md-6 for label and texbox -->
                <label class="label col-md-3 control-label" style="margin-left: 60px;">Confirm Password:</label>
                <div class="col-md-9">
                    <input type="password" class="form-control" name="confirm" placeholder="Confirm Password" value="<?php echo $cp;?>">
                </div>
                <!-- close -->
                <input type="submit" name="insert" value="Submit" style="margin: 50px 0px 10px 170px; width: 180px; font-size: 19px; border-radius: 1000px; background-color: green; color: white;">
                                
            </form>
            </div>
            
        </div>
    </div>
</body>

</html>