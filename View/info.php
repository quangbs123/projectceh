<!DOCTYPE html>
<html>
  <head>
    <style type="text/css">

    *{
      padding: 0px;
      margin: 0px
    }

    body{
      background:url(Images/4.png) no-repeat;
      background-size: cover;
      overflow: hidden;
      font-family: Times New Roman;
    }

    .div_menu{
      background: #3fa46a;
      text-align: center;
      border-radius: 5px;
      opacity: 0.8;
    }

    .div_menu ul {
      width: 1200px;
      height: 50px;
      text-align: center;
    }

    .div_menu li{
      display: inline-block;
      width: 120px;
      height: 60px;
      margin-top: 15px;
      margin-left: 50px;
      font-size: 20px;

    }

    .div_menu li a{
      text-decoration: none;
      color: #FFFFFF;
      font-size: 20px;
    }

    .div_menu li a:hover{
      border-right: 3px dotted #ffffff;
      color: #666
    }

    form {
      border: 2px solid #f1f1f1;
      width: 500px;
      height: 400px;
      margin: 65px 390px;
      border-radius: 3px;
      background-color: white;
    }

    input[type=text]{
      margin: 8px;
      width: 300px;
      border: none;
      padding: 10px;
      margin-left: 55px;
      border-bottom: solid 1px;
      border-radius: 3px;
      display: block;
      font-size: 14px;
    }

    label{
      margin-left: 55px;
      font-size: 20px;
      display: block;
      text-shadow: #330066 1px 1px 2px;
    }

    .div_forminfo{
      margin-top: 50px;
      margin-left: 45px;
      line-height: 20px;
    }

    h1{
      text-shadow: black 3px 5px 5px;
      color: #FFFFFF;
      margin-top: 10px;
      height: 5px;
      text-align: center;
      font-size: 48px;
    }

  </style>
</head>

<body>
  <div class="div_menu">
    <ul>
     <li><a href="mainpage.php">Home</a></li>
     <li><a href="info.php">Infomation</a></li>
     <li><a href="account.php">Account</a></li>
     <li><a href="view.php">View</a></li>
     <li><a href="login.php">Login</a></li>
   </ul>
 </div>

 <h1>Infomation: Abc</h1>

 <form>
   <div class="div_forminfo">
     <label><b>ID</b></label>
     <input type="text" name="id" readonly="">

     <label><b>Full Name</b></label>
     <input type="text" name="fullname" readonly="">

     <label><b>Date Of Birth</b></label>
     <input type="text" name="dob" readonly="">

     <label><b>Address</b></label>
     <input type="text" name="address" readonly="">
   </div>
 </form>
</body>
</html>