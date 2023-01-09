 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Document</title>
 </head>
 <body>
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
    $username = $_POST['Dmail'];
    $code = $_POST['code'];
    $passwo = $_POST['Dpass'];

    if(!empty($username) && !empty($passwo) && !is_numeric($username))
    {
        $query = "select * from donar where usern = '$username' limit 1";
         $result = mysqli_query($con,$query);
        if($result)
        {
        	if ($result && mysqli_num_rows($result) > 0)
		    {
			$user_data = mysqli_fetch_assoc($result);
            if ($user_data['pass'] === $passwo &&  $user_data['code'] === $code)
             {
            // echo'<div class="alert w-100 alert-success" id="ala" role="alert">
            // Thank You, Now you are Logged in </div>';
            header("Location: index.html");

            }
		    else{
                // header("Location: ");
                echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Warning!</strong>  please enter some valid information.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>';
              
            // header("Location: index.html");
            // 
            }

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
            else{
                echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Warning!</strong>  please enter full details.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
      
            }
}

 ?>
    
 </body>
 </html>