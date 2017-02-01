<?php 
	session_start();
  $username = mysql_real_escape_string($_POST['username']);
  $password = $_POST['password'];
  $password = md5($password);


  if(isset($username) && isset($password) && !empty($username) && !empty($password))
{
  $user = 'root';
  $pwd = '';
  $host = '127.0.0.1';
  $db_name = 'nlc';
  $conn = new mysqli($host, $user, $pwd, $db_name);

  $sql = "SELECT username from userreg WHERE username = '$username' AND password = '$password'";
  
  $result = $conn->query($sql);
  $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
        $_SESSION["username"] = $username;
         header("location: login.php");
      }else {

         header("location: index.php");
      }
}

?>