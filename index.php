<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>MD5 Converter</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<style type="text/css" media="screen">
		.container{

			margin: 20px;			
			width: 80%;
			
		}
	</style>
</head>
<body class="container col-lg-3">
	<h1>This app converts strings to equivalent md5 encyption codes.</h1>
	<form method="POST" action="" class="row">
<div class="form-group">
	<div class="input-group">
		<span class="input-group-addon">RAW PASSWORD</span>
		<input type="text" name="rawcode" class="form-control" autocomplete="off" required>
	<br>
   </div>
	<button align="center" class="btn btn-danger" type="submit" name="convert" value="convert">convert</button>
</div>
</form>
<?php if (isset($_POST['convert'])) {
	$rawcode=$_POST['rawcode'];
	$result=md5($rawcode);

	echo "<pre>";
	echo "Your md5 equivalent is :";
	echo $result;
	echo "</pre>";
	echo "<br>";
} ?>
<div class="detailed col-lg-3">
<h4>What is md5:</h4>
<p><em>Md5 is a password encryption algorithm.</em>The MD5 algorithm is a widely used hash function producing a 128-bit hash value. Although MD5 was initially designed to be used as a cryptographic hash function, it has been found to suffer from extensive vulnerabilities. It can still be used as a checksum to verify data integrity, but only against unintentional corruption.</p>
</div>

  </body>

</html>