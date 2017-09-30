<?php include_once('db.php'); 

$checkoutdone=0;

if(isset($_POST['submit']))
{
		$total=$_POST['total'];
		date_default_timezone_set('America/New_York');
		$dt=date('m/d/Y h:i A', time());//todays date
		$email=$_SESSION['loginuser'];
		$totalpro=$_SESSION['cart_num'];
		
		$sql="update customers set order_date='$dt',total_amout='$total',products='$_SESSION[cart_num]' where email='$_SESSION[loginuser]'";
		@mysql_query($sql);
		
		session_unset("cart_array");
		session_unset("cart_num");
		
		$_SESSION['cart_num']=0;
		$_SESSION['cart_array']=[]; 
		$_SESSION['login']='yes';
		$_SESSION['loginuser']=$email;		
		
		$checkoutdone=1;
}


 include_once('header.php'); 
?>
<style> td { 
    padding: 10px !important;
	font-size: 14px;
	border: 1px solid #D1D1D1 !important;
} </style>
        <div id="main"><!-- Defining submain content section -->
            <section id="content"><!-- Defining the content section #2 -->
                <div id="left">
                    <h3>Checkout</h3>
					<div class='mrg checkout'>
					
					<?php 
					
					if(!isset($_SESSION['login']))
					{ ?><center>
					<a href='register.php?forward=checkout' class='link'>Register</a><br> 
					
					OR<br> 
					<a href='login.php?forward=checkout'  class='link'>Login</a><br> 
					
					First to Procced Checkout Process
					</center>
					<?php
					}
					else if($checkoutdone==1)
					{
					?>
					<center style='font-size:20px;'>
					<img src='images/green.jpg'><br><br><br>
					Your Order is Confirmed ! <br><br>
					Of <?=$totalpro;?> Products <br><br><br><br>
					Will Deliver to you shortly.
					
					</center>
					
					<?php }
					else if($_SESSION['cart_num']==0)
					{ ?><center>
					Cart is Emptry. Add some products.<br>
					<a href='index.php' class='link'>Homepage</a> 

					</center>
					<?php
					}
					else
					{ 
					?>
						
                            <div class="info">
							<h1>Products in Cart</h1><br>
							<table border='1'>
							
							<?php 
							$array = implode("','",$_SESSION['cart_array']);
							$query=mysql_query("SELECT * FROM products WHERE id IN ('".$array."')");
							$ptotal=0;
							while($Row=mysql_fetch_array($query))
							{
							$ptotal=$ptotal+intval($Row['price']);
							?>
							<tr>
								<td style="width: 91px;" align="center"><img src='images/<?=$Row['thumb'];?>' style="width: 50px; height: 50px;"></td>
								<td style="width: 91px;" align="left"><?=$Row['file_name'];?></td>
								<td style="width: 91px;" align="left">$<?=$Row['price'];?></td>
								<td style="width: 91px;" align="left">QTY: <input type='text' value='1' size='3'></td>
								<td style="width: 91px;" align="left"><a href="checkout.php" id='a<?=$Row['id'];?>' onclick="return cart_update_checkout('remove','<?=$Row['id'];?>',this.id);">Remove</a></td>

							</tr>
							
							<?php
							} ?> <!--
							<tr>
							<td align="center"><strong>Total: </strong></td>
							<td  align="left" colspan=4><strong>$<?=$ptotal;?>.00</strong></td>
							</tr> -->
							</table>
							</div><br>
							<form action="checkout.php" method='POST'>
							<br><h1>Shipping</h1><br>
							<select required>
  							<option value="standard">Standard ($9.95)</option>
  							<option value="visa">Express ($15.95)</option>
  							<option value="amex">Two-Day ($20.95)</option>
  							<option value="disc">Next-Day Air ($25.95)</option>
							</select> <br>
							<br><br>
                  
						    
							<input type='hidden' value='<?=$ptotal;?>' name='total'>
							<div style="float: left; margin-right: 65px;margin-bottom: 50px;">
							<h1>Billing Information</h1><br>
							
							Full Name:<br> <input  type="text" name="name" ><br>
							Email:<br> <input  type="text" name="email" ><br>
							Address Line 1:<br> <input type="text" name="add1" ><br>
							Address Line 2:<br> <input type="text" name="add2" ><br>
							City:<br> <input required type="text" name="city" ><br>
							State/Region/Province:<br> <input type="text" name="state" maxlength= "2" size ="2"><br>
							Zip Code:<br> <input  type="text" name="zip" maxlength= "5" size ="5"><br>
							Country:<br> <input  type="text" name="country" maxlength= "2" size ="2"><br>
							</div>
							<div>
							<h1>Shipping Address</h1><br>
							<input type="checkbox" name="ship"> Shipping Address Is Same As Billing<br><br>
							Full Name:<br> <input  type="text" name="name" ><br>
							Email:<br> <input  type="text" name="email" ><br>
							Address Line 1:<br> <input type="text" name="add1" ><br>
							Address Line 2:<br> <input type="text" name="add2" ><br>
							City:<br> <input required type="text" name="city" ><br>
							State/Region/Province:<br> <input type="text" name="state" maxlength= "2" size ="2"><br>
							Zip Code:<br> <input  type="text" name="zip" maxlength= "5" size ="5"><br>
							Country:<br> <input  type="text" name="country" maxlength= "2" size ="2"><br>
							</div>
							<br><br>
							<br><br>
							
						
							<h1>Payment Information</h1><br>
							Credit Card Type: <br><select required>
  							<option value="mc">MasterCard</option>
  							<option value="visa">VISA</option>
  							<option value="amex">AMEX</option>
  							<option value="disc">Discover</option>
							</select> <br>
							Card Number:<br> <input required type="text" name="ccnum" maxlength= "16" size ="20"><br>
							Expiration Date (Month # & Year):<br> <input required type="text" name="zip" maxlength= "2" size ="2" placeholder = "xx">
							<input required type="text" name="year" maxlength= "4" size ="5"placeholder = "xxxx" ><br>
							Security Code: <br> <input required type="text" name="cccode" maxlength= "4" size ="5"><br>
							<br><br>
							<input type="submit" name='submit' value="Checkout">
							</form>
					<?php 
					}
					?>	
							
                            
                        
                </div>
                </div>
                <?php include_once('sidebar_topsell.php'); ?>
            </section>
        </div>


<?php include_once('footer.php'); ?>