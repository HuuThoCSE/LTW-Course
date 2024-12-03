<?php

if(isset($_POST['GETsubmit'])){
    echo "Welcome ".$_POST['name']."<br>
    Your email is: ".$_POST['email'];
}

if(isset($_POST['POSTsubmit'])){
    echo "Welcome ".$_POST['name']."<br>
    Your email is: ".$_POST['email'];
}
?>