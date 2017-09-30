                <div id="right">
                    <h3>Top sells</h3>
                    <ul>
					<?php			
						$result_sidedet=mysql_query("select * FROM `products` WHERE status='1' order by rand()");

						while($rowside=mysql_fetch_array($result_sidedet)) 
						{	?>
                        <li>
                            <div class="img"><a href="book.php?id=<?=$rowside['id'];?>"><img alt="" src="images/<?=$rowside['thumb'];?>"></a></div>
                            <div class="info">
                                <a class="title" href="book.php?id=<?=$rowside['id'];?>"><?=$rowside['file_name'];?></a>
                                <div class="price">
                                    <span class="usual"><?=$rowside['old_price'];?> </span>&nbsp;
                                    <span class="special">$<?=$rowside['price'];?></span>
                                </div>
                            </div>
                        </li>
					<?php 	} 	?>
                        
                    </ul>
                </div>