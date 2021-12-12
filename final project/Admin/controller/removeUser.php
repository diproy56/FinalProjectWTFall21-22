<?php 

require '../model/model.php';

if (deleteUser($_GET['user_name']))
{
        header('Location: ../User information.php');
}


 ?>