<?php
/*
if (isset($_POST['submit'])){
	echo htmlspecialchars( $_POST['email']);
	echo htmlspecialchars( $_POST['password']);
	echo htmlspecialchars( $_POST['Cpassword']);
	echo htmlspecialchars( $_POST['name']);
}*/

if (empty($_POST['Email'])){
	echo 'Email required <br />';
}
 ?>



 <!DOCTYPE html>
 <html>

 <?php include ('template/header.php') ?>
 <section class="container grey-text" >
 	<h4 class="center"> Create Account </h4>
 	 <form class = "white" action="add.php" method="GET">
 	 	<h6<label> Full Name </label>
 	 	<input type="text" name="name"> </h5>
 	 	<h6<label> Email </label>
 	 	<input type="text" name="email"></h5>
 	 	<h6<label class="mdl-textfield__label" for="sample3">Password</label>
 	 	<input type="password" value="" name="password"> </h5>
 	 	<h6<label class="mdl-textfield__label" for="sample3">Confirm Password</label>
 	 	<input type="password" value="" name="Cpassword"> </h5>
 	 	<div class = "center">
 	 		<input type="Submit" name="submit" value="submit" class = "btn brand z-depth-0">
 	 		<!-- <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored mdl-js-ripple-effect" onclick='login()' name="login">SIGN UP</button> -->

 	 	</div>
 	 </form>
 </section>
 <?php include ('template/footer.php') ?>
 

 </html>