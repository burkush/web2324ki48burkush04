<?php

  session_start();
  
  $_SESSION["loggedin"] = true;
  $_SESSION["id"] = $id;
  $_SESSION["username"] = $username;                            
  
  header("Location: ../profile");

?>