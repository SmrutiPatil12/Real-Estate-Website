<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="ss.css">
</head>

<body>
    <section>
        <div class="main">
            <div class="signup">
                <h2>Sign Up</h2>
                <div class="form">
                    <form action="connection.php" method="post">
                        <div class="inputbox">
                            <input type="text" name="name">
                            <i>Name</i>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="email">
                            <i>Email</i>
                        </div>
                        <div class="inputbox">
                            <input type="text" name="number">
                            <i>Number</i>
                        </div>
                        <div class="inputbox">
                            <input type="password" name="password">
                            <i>Password</i>
                        </div>
                        <!-- <div class="inputbox">
                            <input type="password" name="cpassword">
                            <i>Confirm Password</i>
                        </div> -->
                        <input class="btn1" type="submit" value="Sign Up">
                    </form>
                    <div class="link">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <a href="index.html">Already have an account</a>
                </div>
            </div>
        </div>
    </section>
</body>

</html>