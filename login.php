<!DOCTYPE html>
<html>
    <head>
        <title>login form</title>
    </head>
    <body>
        <form method="post">
            Username:
            <input type="text"name="username"><br><br>
            Password:
            <input type="password"name="password"><br><br>
            <input type="submit"name="login"value="login">
        </form>
        <?php
        if(isset($_POST['login']))
        {
            $username=$_POST['username'];
            $password=$_POST['password'];
            if($username=="admin"&& $passsword=="1234")
            {
                echo"login successful";
            }
            else
            {
                echo"Invalid username or password";
            }
        }
        ?>
    </body>
    </html>

            
            
        