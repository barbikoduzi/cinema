<?php
    include_once("connect.php");
    session_start();
    $result=mysqli_query($db,"SELECT * FROM data");
    echo "jj";
    if(isset($_POST['bli']))
    {
        echo "aa";
        $username=$_POST['username'];
        $email=$_POST['email'];
        $title=$_POST['titulli'];
        $bileta=$_POST['bileta'];
        $orari=$_POST['orari'];

        $result=mysqli_query($db,"INSERT INTO `data`(`ID_Data`, `Username`, `Email`, `Filmi`, `Nr_Bileta`, `Ora`) VALUES 
            ('','$username','$email','$title','$bileta','$orari')");

        //$subject = "Prenotimi per Kinemane";
        //$txt = "Falemnderit per prenotimin, shikim te kendshem dhe ju presim serish.";
        //$headers = "From: cinematron@cinematron.com" . "\r\n" . "CC: ".somebodyelse@example.com.""; 
        //mail($email,$subject,$txt,$headers);//procedura e dergimit te email, po mua sme funksionon :P
        header ("Location: index.php");
    }
?>