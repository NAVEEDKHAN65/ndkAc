<!DOCTYPE>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Insert form</title>
<link type="text/css" media="all" rel="stylesheet" href="">
</head>

<body>
<div class="display">
<form action="insert.php" method="post" name="insertform">

  <label for="name" id="preinput"> USER NAME : </label>
  <input type="text" name="username" required placeholder="Enter your name" id="inputid"/>


  <label  for="email" id="preinput"> EMAIL ID : </label>
  <input type="email" name="usermail" required placeholder="Enter your Email" id="inputid" />

  <label for="mobile" id="preinput"> MOBILE NUMBER : </label>
  <input type="text" name="usermobile" required placeholder="Enter your mobile number" id="inputid" />

<p>
  <input type="submit" name="send" value="Submit" id="inputid"  />
</p>
</form>
</div>
<?php include('view.php'); ?>
</body>
</html>