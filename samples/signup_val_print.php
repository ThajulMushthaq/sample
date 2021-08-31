<?php
    // define variables and set to empty values
    $fname = $lname = $mail = $address = $gender = "";
    $fnameErr=$lnameErr=$mailErr=$genderErr="";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        print_r ($_POST);
        if(empty($_POST["fname"])){
            $fnameErr="Firstname is required";
            echo $fnameErr;
        }else{
            $fname=test_input($_POST["fname"]);
        }
        if(empty($_POST["lname"])){
            $lnameErr="Lastname is required";
        }else{
            $lname=test_input($_POST["lname"]);
        }
        if(empty($_POST["mail"])){
            $mailErr="E-mail is required";
        }else{
            $mail=test_input($_POST["mail"]);
        }
        if(empty($_POST["address"])){
            $address="";
        }else{
            $address=test_input($_POST["address"]);
        }
        if(empty($_POST["gender"])){
            $genderErr="You must select one";
        }else{
            $gender=test_input($_POST["gender"]);
        }
        
    }
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    echo "<center><h2> Details Display </h2><center>";
    echo $fname;
    echo "<br>";
    echo $lname;  
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $address;
    echo "<br>";
    echo $gender;
    echo "<br>";

    ?>