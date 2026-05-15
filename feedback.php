<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            Name:
            <input type="text"name="name"><br><br>
            Feedback:
            <textarea name="Feedback"></textarea><br><br>
            <input type="submit"name="Send"value="submit">
        </form>
        <?php
        if(isset($_POST['Send']))
        {
            echo"THANK YOU FOR YOUR FEEDBACK";
        }
        ?>
        </body>
        </html>