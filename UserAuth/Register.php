<html>
    <head>
        <title>
            Register
        </title>
    </head>
    <body>
        <?php
            require 'Connection.php';

            if($_SERVER["REQUEST_METHOD"]=="POST"){
                $username = $_POST["user"];
                $email = $_POST["email"];
                $password = $_POST["pass"];
                $cpassword = $_POST["cpass"];

                if($password == $cpassword){
                    $finalPass = password_hash($password,PASSWORD_BCRYPT);
                }else{
                    echo "Please Check the Passwords";
                }

                $sql = "insert into users(username,email,password) values('$username','$email','$finalPass')";
                if($conn->query($sql)){
                    echo "Registration Success";
                }else{
                    echo $conn->error;
                }

                $conn->close();
            }

        ?>
        <h1>SignUp Page!</h1>
        <br>
        <br>
        <form action="Register.php" method="post">
            Username:<br>
            <input type="text" name="user"/><br>
            Email:<br>
            <input type="email" name="email"><br/>
            Password:<br>
            <input type="password" name="pass"/><br>
            Confirm Password:<br>
            <input type="password" name="cpass"/><br><br>
            <input type="submit" value="Register"/><br>
        </form>
        <p>Already Having an Account?<a href="Login.php"> Login Here</a></p>
    </body>
</html>