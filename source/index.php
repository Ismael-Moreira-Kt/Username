<!DOCTYPE html>
<html>
    <head>
        <title>Username Getter</title>

        <meta http-equiv="X-UA-Compatible" content="IE=7">
        <meta name="description" content="Username Getter in PHP">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="keywords" content="PHP, HTML, CSS">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="./assets/styles/style.css">
        <link rel="shortcut icon" href="./assets/images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <h1 class="hero">
            <?php echo "The user's name is " . $_POST['name']?>
        </h1>

        <div class="container">
            <div class="holder">

                <form action="index.php" method="POST">
                    <div class="wrapper">
                        <input type="text" placeholder="Enter Username" name="name">
                    </div>

                    <div class="wrapper">
                        <input type="submit" value="Submit" name="submit">
                    </div>
                </form>

            </div>
        </div>

        <h4 class="footer">Made with <span>PHP</span></h4>
    </body>
</html>