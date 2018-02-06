<?php

?>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">

    body{
      background:url(Images/2.jpg);
      background-size: cover;
      font-family: Times New Roman;
    }

    form {
        border: 3px solid #f1f1f1;
        width: 500px;
        height: 400px;
        margin-left: 400px;
        margin-top: 90px;
        border-radius: 3px;
        background-color: white;
        opacity: 1;
    }

    form p{
        text-shadow: black 2px 3px 4px;
        color: black;
        font-size: 30px;
        text-align: center;
    }

    input[type=text], input[type=password] {
        margin: 8px;
        width: 300px;
        display: block;
        border: none;
        padding: 10px;
        margin-left: 55px;
        border-bottom: solid 1px;
        border-radius: 3px;
    }

    label{
        margin-left: 55px;
        font-size: 20px;
    }

    input[type=submit] {
        font-size: 20px;
        background-color: #4CAF50;
        color: white;
        padding: 8px 20px;
        margin: 8px;
        border: none;
        width: 120px;
        margin-left: 150px;
        margin-top: 15px;
        border-radius: 5px;
    }

    input[type=submit]:hover {
        opacity: 0.9;

    }

    .div_formlogin {
        padding: 40px;
        margin-top: 20px;
    }

</style>
</head>

<body>
    <form action="logincontroller.php" method="post">
        <p>Login Form</p>
        <div class="div_formlogin">
            <label><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required="">

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required="">

            <input type="submit" name="submit" value="Login">
        </div>

    </form>
    
</body>
</html>

