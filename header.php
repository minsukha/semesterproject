<html>
    <title>Main Street Market</title>
    <head>
        <script type="text/javascript" src="jQuery-1.4.1-min.js"></script>
        <link rel="stylesheet" href="./CSS/style.css">
    </head>
<?php
    echo <<<_END
    <h2>
    <br>
    <img src="Images/logo.png" width="500" height="100" alt="msm logo" id="logo"/>
    <center>
    <br>
    <a href="index.php">Home</a>
    <a href="menu.php">Menu</a>
    <a href="checkout.php">Checkout</a>
    <a href="cart.php">Cart</a>
    <a href="about.php">About</a>

_END;
    if(!isset($_SESSION['loggedin']))
        echo <<<_END
        <a href="formLogin.php">Login</a>
        <a href="formAccountCreation.php">Sign up</a>
_END;
    else
        echo <<<_END
        <a href="logout.php">Logout</a>
        <a href="accountSummary.php">Account Summary</a>
_END;
    if(isset($_SESSION['admin']))
        echo <<<_END
        <a href="stock.php">Stock</a>
    </center>
_END;
    echo "</h2><br><br>";

function generateTable($arr, $colName)
{
    //could have two generate table functions, one for scrolling and another for a grid
}

function loginSignup(){
    echo<<<_END
    <form class="box1" name="login">
        Email: <input type="text" name="email"/><br>
        Password: <input type="password" name="psw"/><br>
        <input type="button" onclick="parent.location='login.php" value="Login"/>
        <input type="reset" value="Cancel"/>
    </form>
    <form class="box2" name="signup">
        First Name: <input type="text" name="firstName"/><br>
        Last Name: <input type="text" name="lastName"/><br>
        Email: <input type="text" name="email"/><br>
        Address: <input type="text" name="address"/><br>
        Password: <input type="password" name="password"/><br>
        <input type="button" onclick="parent.location='signup.php" value="Login"/>
        <input type="reset" value="Cancel"/>
     </form>
_END;
}



?>
