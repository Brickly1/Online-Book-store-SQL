<?php include_once('db.php');  

if(!isset($_REQUEST['forward']))
{
	$forward='index.php';
}
else
{
	$forward='checkout.php';				
}

if(isset($_POST['submit']))
{
		$name=$_POST['name'];
		$email=$_POST['email'];		
		date_default_timezone_set('America/New_York');
		$dt=date('m/d/Y h:i A', time());//todays date
		$password=md5($_POST['password']);
		
		$sql="insert into customers(fullname,email,password,status)values('$name','$email','$password','1')";
		@mysql_query($sql);
		
		$_SESSION['login']='yes';
		$_SESSION['loginuser']=$email;
		
		header('Location: '.$forward);
}

include_once('header.php');  
?>

        <div id="main"><!-- Defining submain content section -->
            <section id="content"><!-- Defining the content section #2 -->
                <div id="left">
                    <h3>Register</h3>
					<div class='mrg checkout'>
										
					
						    <form action="#" method='post'>
							<br>
							Full Name:<br> <input type="text" name="name" required><br>
							Email:<br> <input type="email" name="email" required><br>
							Password:<br> <input type="password" name="password" required ><br>
							Confirm Password:<br> <input type="password" name="cpassword" required><br>
							<input type='hidden' value='<?php echo $forward; ?>' name='forward'>
							<br><br>

							<input type="submit" name='submit' value="Register">
							</form>

                            
                        
                </div>
                </div>
                <?php include_once('sidebar_topsell.php'); ?>
            </section>
        </div>


<?php include_once('footer.php'); ?>