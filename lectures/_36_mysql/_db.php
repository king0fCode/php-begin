<?php
error_reporting(0);

$con = mysqli_connect('localhost', 'root', '', 'cat-4');
?>
<div class="form-control">

<pre>
<?php echo ($con ? "we are connected" : "db connection error"); ?>
</pre>
</div>