
<?php include "functions.php";?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>

		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

if (isset($_POST['submit'])) {
    echo "submited";

}

/*  Step1: Make a form that submits one value to POST super global

 */

?>
<form action="" method="post">
<input type="text" placeholder="Username" id="name">
<input type="password" name="" id="password" placeholder="password">
<br>
<input type="submit" id="submit" name="submit" value="Submit">
</form>

</article><!--MAIN CONTENT-->
<?php include "includes/footer.php";?>