<html>
    <head>
        <title>Home Page</title>
    </head>
    <body>
        <?php
            session_start();
            if(!isset($_SESSION['suser'])){
                header("Location: Login.php");
                exit();
            }
           
        ?>
        
        <h1>Welcome to Home Page</h1>
        <h1>Welcome <?php echo $_SESSION['suser']?></h1>

        <a href="Logout.php">Logout</a>
    </body>
</html>