<?php
session_start();

?>
<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">

<a href = "9.php?source=2323&char=2dwdw"> Click Here </a>


	<?php

if(isset($_GET['source'])) {
	print_r($_GET);

}




// set a cookie exppire one week
$cookieName = "mycookie";
$cookieValue = "Datatab";
$cookieExpire = time() + (60*60*24*7);
setcookie($cookieName,$cookieValue,$cookieExpire);



// Set a session with value
$_SESSION['mysession'] = "First session";

//get session
echo $_SESSION['mysession'];
//print all sessions
print_r($_SESSION);
/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

	?>




</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>