<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up here</title>
  <link rel="stylesheet" href="sign.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>


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
    $user_name = $_POST['email'];
    $code = $_POST['code'];
    $password = $_POST['password'];

    if(!empty($user_name) && !empty($password) && !is_numeric($user_name) )
    {
        $query = "select * from donar where usern = '$user_name' limit 1";
         $result = mysqli_query($con,$query);
        if($result)
            {
        	if ($result && mysqli_num_rows($result) > 0)
		 {
			$user_data = mysqli_fetch_assoc($result);
            if ($user_data['usern'] === $user_name )
             {
            // echo "this username or email is already taken.";
            echo'<div class="alert w-100 aa alert-danger" role="alert">
              Warning this email or username is already taken, please choose other one
          </div>';
            }
		}
        else{
            $query = "insert into donar (code,usern,pass) values ('$code','$user_name','$password')";
    
            mysqli_query($con, $query);
            
            echo'<div class="alert w-100 alert-success " id="ss" role="alert">
              Success, Account created successfully.<a href="main.php" class="alert-link">Click here to login</a>
            </div>';
            // header("Location: login1.php");
    
        }
        }
       
}
else{
  echo'<div class="alert w-100 alert-info ">
  <strong>Warning</strong>please enter some valid information
</div>';
}

}
 ?>
<script type="text/javascript">
function yash(length) {
    const characters ='ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    let result = ' ';
    const charactersLength = characters.length;
    for ( let i = 0; i < 5; i++ ) {
        result += characters.charAt(Math.floor(Math.random() * charactersLength));
      };

      document.getElementById('code').value= result ; 
      document.getElementById('ss').innerHTML = result;
      

}


</script>
</div>

<div id="bg"></div>
<div>
<form name="sign" action="sign.php" method="post" >
  <div class="form-field" id="code1">
    <input type="password" name="code" id="code" />
  </div>
  <div class="form-field">
    <input type="email" name="email" placeholder="Email " required/>
  </div>
  
  <div class="form-field">
    <input type="password" name="password" placeholder="Password" required/>
  </div>
  
  <div class="form-field">
    <button class="btn w-50 px-4 mr-2" type="submit">Create Account</button>
  <button class="btn w-70 px-1 mr-5" onclick="yash(5)">Create Confidential code</button>

</div>

</form>
</div>
  
</body>
</html>
