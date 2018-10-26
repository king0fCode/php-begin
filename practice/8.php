<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->



	<article class="main-content col-xs-8">


	<?php

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

	*/

	function makeHashPassword($pWord) {

			$hashFormat = "$2y$10$";
			$salt = "lazydogjumpoverthegreenfense";
			$hashSalt = $hashFormat . $salt;

			$pWord = crypt($pWord, $hashSalt);

			return $pWord;
	}


			$pWord = "mypassword";
			$pWord = makeHashPassword($pWord);
			echo $pWord;


	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>