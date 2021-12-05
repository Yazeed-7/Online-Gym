<?php
session_start();
if(isset($_SESSION['email'])){
    session_unset();
    session_destroy();
  header("Location:Login.php?Signout=see you next time:)");
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

