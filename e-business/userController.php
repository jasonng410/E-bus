<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
if($_POST["action"]=="login"){
   $newURL="index";
   header("Location: $newURL.php?msg=error");
}

?>

