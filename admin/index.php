<!DOCTYPE html>
<html>
<head>
  <title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/admin/cover.css">
</head>
<body>

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Admin</h3>
            </div>
          </div>

          <div class="inner cover">
            <div class="row">
              <div class="col-xs-6 col-sm-4"></div> 
              <div class="col-xs-6 col-sm-4">  
                <form method="post" role="form">
                  <div class="form-group">
                    <label for="username">Username : </label>
                    <input class="form-control" type="text" name="username" required/>
                  </div>
                  <div class="form-group">
                    <label for="password">Password : </label>
                    <input class="form-control" type="password" name="password" required/>
                  </div>
                  <button type="submit" class="btn btn-primary">Login</button>
                  <a class="btn btn-danger" href="/">Get me out!</a>
                </form><br>
            </div>
            <div class="col-xs-6 col-sm-4"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <?php 
      $username = $_POST['username'];
      $password = $_POST['password'];

        if (isset($username) && isset($password)){
          
          $user = 'root';
          $pwd = 'computer';
          $host = '127.0.0.1';
          $db_name = 'nlc';
          $conn = new mysqli($host, $user, $pwd, $db_name);

          $sql = "SELECT * from admin";
          $result = $conn->query($sql);

          if( $result->num_rows > 0) {
             while($row = $result->fetch_assoc()) {
                if ( $row['username'] == $username){
                  // echo "Username matched\n";
                  if ( $row['password'] == md5($password) ){
                    // echo "Valid Login";
                    session_start();
                    $_SESSION['usr'] = $username;
                    $_SESSION['secret'] = 'cookie';
                    echo "<button href=\"./admin.php\" class=\"container-fluid btn btn-primary\">Proceed</button>";
                    header("Location: ./admin.php");
                    break;
                  }
                  else {
                    echo "Invalid Login";
                  }
                }
            }
          }

        }
     ?>
  </body>
  </html>