<?php 
include_once('db.php'); 
include_once('header.php'); 

if(!isset($_GET['id']))
{
	$qr_conct='';
}
else
{
	$qr_conct=' and prnt_id='.$_GET['id'];				
}

?>

        <div id="main"><!-- Defining submain content section -->
            <section id="content"><!-- Defining the content section #2 -->
                <div id="left">
                    <h3>Lastest Books</h3>
                    <ul>
					<?php			
						$result_prodet=mysql_query("select * FROM `products` WHERE status='1' ".$qr_conct);

						while($rowpro=mysql_fetch_array($result_prodet)) 
						{	?>
					
                        <li>
                            <div class="img"><a href="book.php?id=<?=$rowpro['id'];?>"><img alt="" src="images/<?=$rowpro['thumb'];?>"></a></div>
                            <div class="info">
                                <a class="title" href="book.php?id=<?=$rowpro['id'];?>"><?=$rowpro['file_name'];?></a>
                                <p><?=$rowpro['des'];?></p>
                                <div class="price">
                                    <span class="st">Our price:</span><strong>$<?=$rowpro['price'];?></strong>
                                </div>
                                <div class="actions">
                                    <a href="book.php?id=<?=$rowpro['id'];?>">Details</a>
                                    <a href="#" id='a<?=$rowpro['id'];?>' onclick="return cart_update('add','<?=$rowpro['id'];?>',this.id);"><?php echo pro_status($rowpro['id']); ?></a>
                                </div>
                            </div>
                        </li>
					<?php 	} 	?>
                        
                    </ul>
                </div>
			<?php include_once('sidebar_topsell.php'); ?>
            </section>
        </div>

<?php include_once('footer.php'); ?>