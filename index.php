
<?php

session_start();


if(empty($_SESSION['random']))
{
	$random = rand(1,100);
	$_SESSION['random'] = $random;
}
if(empty($_SESSION['guess']))
{
	$value = "Submit";
	$class = "hint";
}
?>

<html>
<head>
	<title>The Great Number Game</title>
</head>
<body>

	<center>
		<h1>Welcome to the Great Number Game!</h1>
			<br>
			<h2>I am thinking of a number between 1 and 100</h2>
			<h3>Take a guess!</h3>

	<?php if(!empty($_SESSION['message'])){ ?>
		<div class="<?=$class?>">
			<h1><?=$_SESSION['message']?></h1>
		</div>
	<?php }?>

		<form action='process.php' method='post'>
			Guess <input type= 'text' name='number'/><br/>
			<input type='submit' value="<?=$value?>">	
		</form>
	</center>
</body>
</html>
</html>