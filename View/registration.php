<!DOCTYPE html>
<html>
<style type="text/css">

    body {
        font-family: Times New Roman;
        overflow: hidden;
        background-color: #003399;
    }

    input[type=text], input[type=password] {
        border: none;
        background: #f1f1f1;
        margin: 8px;
        width: 300px;
        display: block;
        padding: 8px;
        margin-left: 55px;
        border-bottom: solid 1px;
        border-radius: 3px;
    }

    hr {
        border: 1px solid #f1f1f1;
        margin-bottom: 20px;
        margin-top: 20px;
    }

    button {
        color: white;
        padding: 14px 20px;
        border: none;
        opacity: 0.9;
        margin-top: 10px;
    }

    button:hover {
        opacity:1;
    }

    .reset_btn {
        background-color: #f44336;
        width: 300px;
        margin-left: 150px;
    }

    .signup_btn {
        width: 300px;
        background-color: #4CAF50;
        margin-left: 260px;  
    }

    .div_form {
        padding: 12px;
    }

    form{
        border:1px solid #ccc;
        background-color: #003366;
    }

    label{
        margin-left: 55px;
        font-size: 18px;
        color: white;
    }

    label:hover{
        color: white;
        text-shadow: black 5px 5px 5px;
    }

    .div_regis{
        margin-left: 420px;
    }   

    h1.h1_signup{
        text-align:center;
        color: white;
        font-size: 48px;
        text-shadow: black 3px 4px 7px;
    }

</style>
<body>
    <form>
        <div class="div_form">
            <h1 class="h1_signup">Sign Up</h1>
            <hr>

            <div class="div_regis">

                <label><b>User Name</b></label>
                <input type="text" placeholder="Enter User Name" name="username">

                <label><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password">

                <label><b>Full Name</b></label>
                <input type="text" placeholder="Enter a Full Name" name="fullname">

                <label><b>Date Of Birth</b></label>
                <input type="text" placeholder="Enter a Date Of Birth" name="dob">

                <label><b>Address</b></label>
                <input type="text" placeholder="Enter a Address" name="address">
            </div>

            <div class="div_btn">
                <button type="button" class="signup_btn">Sign up</button>
                <button type="submit" class="reset_btn">Reset</button>
            </div>
        </div>
    </form>
</body>
</html>
