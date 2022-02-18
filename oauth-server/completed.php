<?php
	// Verify user credentials and create an access token
	$user = $_POST['username'];
	$token = "xyz123";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Authentication completed</title>
</head>
<body>
	<script>
		window.opener.postMessage({"user": "<?php echo $user; ?>", "token": "<?php echo $token ?>"});
	</script>
</body>
</html>