<!DOCTYPE html>
<html>
  <style>
    body {
      background-image: url('caprojbg.jpg');
      background-repeat: no-repeat;
      background-size: 100% 600px;
      background-position: 50% 1px;
    }
    </style>
<body>

<div style="background-color:rgba(0, 0, 0, 0.4);
width: fit-content;
height: fit-content;
position: absolute;
top: 0;
left: 0;
right: 0;
bottom: 0;
margin: auto;
padding: 20px;
padding-top: 0px;
border: 1px solid grey; border-radius: 5px">
<h2>Log In</h2>
<form action="verify" method="POST">@csrf
  <label>E-Mail ID:</label><br><input style="width: 350px; border: 1px solid grey; border-radius: 5px" name="email" type="email" required placeholder="eg: jhon1@gmail.com">
  <br><br>
  <label>Password:</label><br><input  style="width: 350px; border: 1px solid grey; border-radius: 5px" name="password" type="password" required>
  <br><br>
  @if($use==1)
  <p style="color:red">*Incorrect email or password.<br> Please try again or create a new account.</p>
  @endif
  <div  style="width:fit-content;
  position: relative;
  margin:0 auto;">
  <input style="border: 1px solid grey; border-radius: 5px" type="submit" value="Submit">
  </div>
</form>
<br>
<form action="sign_up" method="GET">
  <div  style="width:fit-content;
  position: relative;
  margin:0 auto;">
  <input style="border: 1px solid grey; border-radius: 5px" type="submit" value="Create account">
  </div>
</form>
</div>
</body>
</html>
