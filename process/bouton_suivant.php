<?php

session_start();


// var_dump($_POST);
// var_dump($_SESSION);

if(isset($_POST['scorequestion'])
&& isset($_POST['questionNb'])
) {
    // var_dump('hello');
    // var_dump((int)$_POST['scorequestion']);

    $_SESSION['score'] = $_SESSION['score'] +(int)$_POST['scorequestion'];
}
// var_dump($_SESSION);

header("Location: ../page3.php");     
?>