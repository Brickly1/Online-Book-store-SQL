<?php include_once('db.php');  include_once('header.php'); ?>
<script>
function myFunction() {
    document.getElementById("demo").innerHTML = "<center>Message Sent ! Will get back to you shortly.</center>";
	return false;
}
</script>
        <div id="main"><!-- Defining submain content section -->
            <section id="content"><!-- Defining the content section #2 -->
                <div id="left">
                    <h3>Contact Us</h3>
                    <form action="demo_form.asp">
                    <p class='about' id='demo'>
                           
						    
							If you have any questions, please fill out this form below and we will respond as soon as possible
							<br><br><b>Contact Customer Care</b><br>
							1 (888) 888-8020<br>
							7 days a week: 12pm - 7pm EST<br>
							support@ebook.com<br><br>
							<br><br>
							YOUR FULL NAME*:<br> <input required type="text" name="FirstName"><br>
							SUBJECT*: <br><input required type="text" name="Subject" ><br>
							EMAIL ADDRESS*:<br> <input required type="text" name="LastName" ><br>
							ORDER NUMBER (IF APPLICABLE):<br> <input type="text" name="OrderNum" ><br>
							COMMENT*: <br><textarea required name='comment' id='comment' cols = 50></textarea><br>
							
							<br><br>
							<input type="submit"   onclick="myFunction()" value="Submit">
							
							<!-- </div> -->
                    </p>
					</form>
                        
                </div>
              <?php include_once('sidebar_topsell.php'); ?>
            </section>
        </div>

<?php include_once('footer.php'); ?>