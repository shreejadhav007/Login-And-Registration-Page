<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300, 400, 500" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="mm">
<?php 
session_start();
$databaseHost = 'localhost';
    $databaseName = 'donat'; 
    $databaseUsername = 'root';  
    $databasePassword = '';  
    $con = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

if($_SERVER['REQUEST_METHOD'] == "POST")
{
    //SOMETHING IS POSTED
    $user_name = $_POST['Amail'];
    $password = $_POST['Apass'];
  
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
    {
      $query = "select * from admin where username = '$user_name' limit 1";
      $result = mysqli_query($con,$query);
     if($result)
     {
       if ($result && mysqli_num_rows($result) > 0)
     {
   $user_data = mysqli_fetch_assoc($result);
         if ($user_data['password'] === $password)
          {
          //   echo'<div class="alert w-100 aa alert-success" role="alert">
          //   <strong>Sucess</strong>
          //   You have successfully logged in 
          // </div>';
          header("Location: index.html");
          }
          else{ 
          echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Warning!</strong>  please enter some valid information.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
            }
          }
        else{
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong>  please enter some valid information.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
          
          }
        }    
        else
        {
              echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Warning!</strong>  please enter some valid information.
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';  
        }
}

}
 ?>
 </div>


    <section class="user">
        <div class="user_options-container">
          <div class="user_options-text">
            <div class="user_options-unregistered">
              <h2 class="user_unregistered-title">Admin Login</h2>
              <p class="user_unregistered-text">Login As ADMIN</p>
              <button class="user_unregistered-signup" id="signup-button">lOGIN HERE</button>
            </div>
      
            <div class="user_options-registered">
              <h2 class="user_registered-title">Login As Donar</h2>
              <button class="user_registered-login" id="login-button">Donar Login</button>
              <button class="user_registered-login" id="login-button"><a href="sign.php">Registered For New Donar</a> </button>
            </div>
          </div>
          
          <div class="user_options-forms" id="user_options-forms">
            <div class="user_forms-login">
              <h2 class="forms_title">Donar Login</h2>
              <form class="forms_form" action="donar.php" method="post">
                <fieldset class="forms_fieldset">
                  <div class="forms_field">
                    <input type="text" placeholder="Confedential Code" name="code" class="forms_field-input" required autofocus />
                  </div>
                  <div class="forms_field">
                    <input type="text" placeholder="Email" name="Dmail" class="forms_field-input" required autofocus />
                  </div>
                  <div class="forms_field">
                    <input type="password" placeholder="Password" name="Dpass" class="forms_field-input" required />
                  </div>
                </fieldset>
                <div class="forms_buttons">
                  <button type="button" class="forms_buttons-forgot">Forgot password?</button>
                  <input type="submit" value="Login" class="forms_buttons-action">
                </div>
              </form>
            </div>
            <div class="user_forms-signup" id="admin">
              <h2 class="forms_title">Welcome Admin </h2>
              <form class="forms_form" action="main.php" method="post">
                <fieldset class="forms_fieldset">
                  
                  <div class="forms_field">
                    <input type="text" placeholder="Email" name="Amail" class="forms_field-input" required />
                  </div>
                  <div class="forms_field">
                    <input type="password" placeholder="Password" name="Apass" class="forms_field-input" required />
                  </div>
                </fieldset>
                <div class="forms_buttons">
                  <input type="submit" value="Login" class="forms_buttons-action">
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>


</body>
<script src="new.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>