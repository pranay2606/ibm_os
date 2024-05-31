<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
        <?php
            require 'Connection.php';
            session_start();

            if($_SERVER['REQUEST_METHOD']=="POST"){
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $sql = "select * from users where username='$user'";

                $result = $conn->query($sql);
                if($result->num_rows>0){
                    $user = $result->fetch_assoc();
                   
                    if(password_verify($pass,$user['password'])){
                        $_SESSION['suser'] = $user['username'];
                        header("Location: Home.php");
                    }else{
                        echo "Invalid Password";
                    }
                }else{
                    echo "User Not Found";
                    header("Location: Login.php");
                }
            }

        ?>
        <h1>Login Here!</h1>
        <br>
        <br>
        <form action="Login.php" method="post">
            Username:<br>
            <input type="text" name="user"/><br>
            Password:<br>
            <input type="password" name="pass"/><br><br>
            <input type="submit" value="Login"/><br>
        </form>
        <p>Don't Have an Account <a href="Register.php">Register Here!</a></p>
    </body>
</html>