<?php include 'includes/config.php';?>
<?php include 'includes/header.php';?>  
	<h1>Login</h1>
	<p><em>Pay calculator for agency billable hours</em></p>

<?php
if(isset($_POST['name'])){
$current_contractor = '';
 foreach($contractors as $contractor){
     $name = strtolower($_POST['name']);
     $contractor_name = strtolower($contractor->Name);
     if($name==$contractor_name && $_POST['password']==$contractor->Password)
     {
         $current_contractor = $contractor->Name;
         break;
     }
 }    

 if($current_contractor != '')
 {
     echo '<h3>Welcome, ' . $current_contractor . '</h3>
     <p><a href="hours.php">Enter Billable Hours</a></p>';
 }else{
     echo '<h3>Login and/or password is incorrect</h3>
     <p><a href="">Login Again</a></p>';
 }
    
    
    
}else{
   echo '
   <div class="row">
	<div class="col-sm-6">
	<form role="form" action="" method="post">
		<div class="form-group">
			<label for="nm">Name</label>
			<input type="text" class="form-control" id="nm" name="name" autofocus required>
		</div>
		<div class="form-group">
			<label for="pw">Password</label>
			<input type="password" class="form-control" id="pw" name="password" required>
		</div>
		<div class="form-group">
			<button type="submit" value="Login" class="btn btn-primary">Login</button>
		</div>
	</form>
	</div>
    <div class="col-sm-6"></div>
</div><!-- / row --> 
   '; 
}

?>

    <!-- footer starts here -->    
<?php include 'includes/footer.php';?>
