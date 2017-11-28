<?php
// session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['oauth_uid'])) { //melakukan pengecekkan SESSION username & password
  echo '
  <script language="javascript">
  alert("Login First");
  document.location ="index.php#login-pop";
  </script>
  ';
}
?>
