<?php include_once('db.php');  include_once('header.php');

if(!isset($_GET['id']))
{
	header ('Location: index.php');
}
else
{
	$result_prodet=mysql_query("select * FROM `products` WHERE status='1' and id='$_GET[id]'");
	$rowpro=mysql_fetch_array($result_prodet);					
}
	
?>


        <div id="main"><!-- Defining submain content section -->
            <section id="content"><!-- Defining the content section #2 -->
                <div id="left">
				
                            <div class="bookposter"><a href="book1.html"><img alt="" src="images/<?=$rowpro['thumb'];?>"></a></div>
                            <div class="bookinfo">
                                <a class="title2" href="book1.html"><?=$rowpro['file_name'];?></a>
                                
                                <div class="price">
                                    <span class="st">Our price:</span><strong><?=$rowpro['price'];?>
                                </div>
                                <div class="actions">
                                    <br>
									<a href="#" id='a<?=$rowpro['id'];?>' onclick="return cart_update('add','<?=$rowpro['id'];?>',this.id);"><?php echo pro_status($rowpro['id']); ?></a>
									<br><br>
									<p style='text-align: justify;'><?=$rowpro['des'];?></p>
				</strong>
                </div>
				</div>
				</div>
				<?php include_once('sidebar_topsell.php'); ?>
				</section>
				</div>
				
<?php include_once('footer.php'); ?>