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
		$nm=$_POST['email'];		
		$pass=md5($_POST['password']);
		
		$query="select * from customers";	
		$result=mysql_query($query);	
		$flg=0;		

		while($row=mysql_fetch_array($result))	
		{		
		
			if($row[2]==$nm && $row[3]==$pass)		
			{			
			$_SESSION['login']='yes';
			$_SESSION['loginuser']=$nm;		
			$flg=1;		
			}	
		}		
		header("Location: ".$forward);	

}

include_once('header.php');  
?>

        <div id="main"><!-- Defining submain content section -->
            <section id="content"><!-- Defining the content section #2 -->
                <div id="left">
                    <h3>Login</h3>
					<div class='mrg checkout'>
										
					
						    <form action="#" method='post'>
							<br>
							Email:<br> <input type="email" name="email" required><br>
							Password:<br> <input type="password" name="password" required ><br>
							<input type='hidden' value='<?php echo $forward; ?>' name='forward'>
							<br><br>

							<input type="submit" name='submit' value="Login">
							</form>

                            
                        
                </div>
                </div>
                <?php include_once('sidebar_topsell.php'); ?>
            </section>
        </div>


<?php include_once('footer.php'); ?>