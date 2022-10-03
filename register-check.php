<?php
require 'includes/database.php';

if(isset($_POST['submit'])){   
    if(
        !empty($_POST['name'])
        && !empty($_POST['surname'])
        && !empty($_POST['phone'])
        && !empty($_POST['email'])
        && !empty($_POST['password'])
        && !empty($_POST['password2'])
    ){
        if($_POST['password'] == $_POST['password2']){
        
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $sql = "INSERT INTO user (firstname, lastname, phonenumber, email, password, role)
                    VALUES ('$name', '$surname','$phone', '$email','$password', 'gebruiker')";
            
            mysqli_query($conn, $sql);
            echo "Inserted successfully";
            mysqli_close($conn); // Sluit de database verbinding
            header("location: index.php.php");
        }
        else{
            echo '<script type="text/javascript">';
            echo ' alert("password is not the same")';  //now showing an alert box.
            echo '</script>';
        }
    }
    else{
        echo '<script type="text/javascript">';
        echo ' alert("Fill in all boxes please")';  //now showing an alert box.
        echo '</script>';
    }


}

?>