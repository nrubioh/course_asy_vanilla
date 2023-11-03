<?php

echo ("<pre>");
    echo "<b>GET STUFF</b>".'</br>';
    var_dump($_GET);
    echo "<b>POST STUFF</b>".'</br>';
    var_dump($_POST);
    echo "<b>POST USER</b>".'</br>';
    var_dump($_POST['user']);
    echo "<b>FILES STUFF</b>".'</br>';
    var_dump($_FILES);
echo ("</pre>");    