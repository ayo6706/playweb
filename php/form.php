<?php

        include 'db.php';
        //   echo "Connected successfully";
       
    

        $name = $_POST['name'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $form = $_POST['form'];
        


    $sql= mysql_query("INSERT  INTO contact_form  (name, email, contact, form) VALUES('$name','$email','$contact','$form')");
        if($sql)
            header("location: ../index.php");
        else
            $msg='error:'.mysql_error();
        
    $conn->close();
header("location: ../index.php");