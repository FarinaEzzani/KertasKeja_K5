<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>
<body>

<center><h1>SELAMAT DATANG</h1>

<img src="wc.png" alt="" width="400" height="100">

  <div data-role="main" class="ui-content">
    <a href="#myPopup" data-rel="popup" class="ui-btn ui-btn-inline ui-corner-all ui-icon-check ui-btn-icon-left">SIGN UP</a>
 
  
    <div data-role="popup" id="myPopup" class="ui-content" style="min-width:250px;">
      <form method="post" action="pros_insert11.php">
	  
	
        <div>
          <h3>Login information.</h3>
          <label for="username" class="ui-hidden-accessible">Username:</label>
          <input type="text" name="username" id="username" placeholder="Username">
          <label for="password" class="ui-hidden-accessible">Password:</label>
          <input type="password" name="password" id="password" placeholder="Password">
          <input type="submit" data-inline="true" value="Log in">
		     </div>
      </form>
    </div>
      </form>
    </div>

<center><a href="about.php">ABOUT US</a></center>
  <br>
  
  
  <div data-role="footer">
    <h1>@SMART CALC💜</h1>
  </div>
</div> 

</body>
</html>
