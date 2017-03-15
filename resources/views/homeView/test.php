<?php
session_start();
if(isset($_SESSION['user'])){
    $log=1;
    echo $_SESSION['user'];
}
echo session(['user']);
?>