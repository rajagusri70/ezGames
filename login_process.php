<?php
include('conn.php');

// == fungsi login ==
if(isset($_POST['login'])){
  $username = $_POST['id'];
  $password = $_POST['oauth_uid'];

  $query = mysqli_query($db,"SELECT * FROM users WHERE id='$username' AND oauth_uid='$password'");
  $row = mysqli_fetch_array($query);

  session_start();
  $_SESSION['id'] = $username;
  $_SESSION['oauth_uid'] = $password;

  if ($username == $row['id'] && $password == $row['oauth_uid']){
    echo '
    <script language="javascript">
    document.location ="index.php";
    </script>
    ';

  }else{
    session_destroy();
    echo '
    <script language="javascript">
    alert("Failed to login!");
    document.location ="index.php";
    </script>
    ';
  }

}
 ?>
