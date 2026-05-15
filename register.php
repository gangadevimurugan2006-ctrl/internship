<!DOCTYPE html>
<html>
    <head>
        <title>Registration form</title>
    </head>
    <body>
        <form method="post">
            Name:
            <input type="text" name="name"><br><br>
            Email:
            <input type="text" name="name"><br><br>
            password:
            <input type="password" name="name"><br><br>
            <input type="submit" name="submit" value="Register">
        </form>
        <?php
        if(isset($_POST['submit']))
        {
            $name=$_POST['name'];
            $email=$_POST['email'];
            echo"Registration Successful<br>";
            echo"Name:$name<br>";
            echo"Email:$email";
        }
        ?>
    </body>
    </html>
        