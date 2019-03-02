<?php
	include ('layout_manager.php');
	include ('content_function.php');
?>
<html>
<head><title>Geeks Diva Prototype</title></head>
<link href="/forum-tutorial/styles/main.css" type="text/css" rel="stylesheet" />
<body>
	<div class="pane">
		<div class="header"><h1><a href="/forum-tutorial">Secret BestFriend</a></h1></div>
		<div class="loginpane">
			<?php
				session_start();
				if (isset($_SESSION['username'])) {
					logout();
				} else {
					if (isset($_GET['status'])) {
						if ($_GET['status'] == 'reg_success') {
							echo "<h1 style='color: green;'>new user registered successfully!</h1>";
						} else if ($_GET['status'] == 'login_fail') {
							echo "<h1 style='color: red;'>invalid username and/or password!</h1>";
						}
					}
					loginform();
				}
			?>
		</div>
		<div class="forumdesc">
			<p>Welcome!!This is the place where you can find all your answers</p>
			<p>Here are some videos which are useful for building your confidence</p>
			<object width="100" height="100" data="https://www.youtube.com/v/9Ds_N1cPaeY" type="application/x-shockwave-flash"><param name="src" value="https://www.youtube.com/v/9Ds_N1cPaeY" /></object>
			<object width="100" height="100" data="https://www.youtube.com/v/uDhw_aGrKi8" type="application/x-shockwave-flash"><param name="src" value="https://www.youtube.com/v/uDhw_aGrKi8" /></object>
		</div>
		
<script src="https://widget.flowxo.com/embed.js" data-fxo-widget="eyJ0aGVtZSI6IiMzMjNhNDYiLCJ3ZWIiOnsiYm90SWQiOiI1YzdhYjFlYzFkMjU3MDAwNjI4YzVmMmEiLCJ0aGVtZSI6IiMzMjNhNDYiLCJsYWJlbCI6IkRpeWEifSwid2VsY29tZVRleHQiOiJoZWxsb29vIn0=" async defer></script>
		<div class="content">
			<?php dispcategories(); ?>
		</div>
	</div>
</body>
</html>