<?php 
      	$username = $_POST['usernamereg'];
      	$password = $_POST['passreg'];
      	$email = $_POST['emailreg'];
      	$projn = $_POST['pjtnamereg'];
      	$phno = $_POST['phnoreg'];
      	$colg = $_POST['clgnamereg'];

        // if (isset($username) && isset($password) && isset($email) && isset($projn) && isset($phno) && isset($colg)){
          
          $user = 'root';
          $pwd = '';
          $host = '127.0.0.1';
          $db_name = 'nlc';
          $conn = new mysqli($host, $user, $pwd, $db_name);

          $newpass = md5($password);
          $sql = "INSERT INTO userreg (username, password, email, projn, phno, colg) values ('$username', '$newpass', '$email', '$projn', '$phno', '$colg')";
          $result = $conn->query($sql);
          header("Location: /nlc");

        // }
     ?>
