<?php
include_once 'header.php';
include_once 'functions.php';
$link= databaseCon();
$sql="select * from orders";
$result= executeQuery($link,$sql);
if(isset($_POST["id"]))
{
    $id=$_POST["id"];
    $status=$_POST["status"];
     $sql = "UPDATE orders SET status='$status' where id=$id;";
$link= databaseCon();
$result= executeQuery($link,$sql);
$sql="select * from orders";
$result= executeQuery($link,$sql);
}
?>
<div id="main">
<div class="wrapper">
<aside id="left-sidebar-nav">
        <ul id="slide-out" class="side-nav fixed leftside-navigation">
            <li class="user-details cyan darken-2">
            <div class="row">
                <div class="col col s4 m4 l4">
                    <img src="images/avatar.jpg" alt="" class="circle responsive-img valign profile-image">
                </div>
				 <div class="col col s8 m8 l8">
                   <form class="form-inline my-2 my-md-0" action="logout.php" method="post">
                   <input type="hidden" name="action" value="logout">
      <button type="submit" class="btn btn-primary btn-sm" >logout</button>
               </form>
                </div>
                <div class="col col s8 m8 l8">
                    <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown"><?php echo $user_name;?> <i class="mdi-navigation-arrow-drop-down right"></i></a>
                    <p class="user-roal"></p>
                </div>
            </div>
            </li>
<!--            <li class="bold active"><a href="index.php" class="waves-effect waves-cyan"><i class="mdi-editor-border-color"></i> Food Menu</a>
            </li>-->
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-invitation"></i> Orders</a>
                            <div class="collapsible-body">
                                <ul>
								<li><a href="all-orders.php">All Orders</a>
                                </li>
								
<!--//                                                                        $link= databaseCon();
//									$sql = mysqli_query($link, "SELECT * FROM orders;");
//									while($row = mysqli_fetch_array($sql)){
//                                                                        echo '<li><a href="all-orders.php?status='.$row['status'].'">'.$row['status'].'</a>-->
                                    
									
									
                                </ul>
                            </div>
                        </li>
                    </ul>
                </li>
                 
								
									
									
                                </ul>
                            
                     
               
        </aside>
<div id="work-collections" class="seaction">
			
                <div>
                    
                    <h4 class="header">List</h4>
                    <ul id="issues-collection" class="collection">
					<?php while($row= mysqli_fetch_assoc($result)) {$status=$row["status"]?>
						<li class="collection-item avatar">
                              <i class="mdi-content-content-paste red circle"></i>
                              <span class="collection-header">Order No.<?=$row['id']?></span>
                              <p><strong>Date:</strong> <?=$row['date']?></p>
                              <p><strong>Payment Type:</strong></p>							  
                              <p><strong>Status:</strong><?=$status?> </p>
							
                              <a href="#" class="secondary-content"><i class="mdi-action-grade"></i></a>
                           <?php if($status != 'Delivered'){ ?>
                              <form action="pizzahut_admin.php" method="post">
                                                                                <input type="hidden" value="<?=$row["id"]?>" name="id">
										<input type="hidden" value="Delivered" name="status">
                                                                                
										<input type="hidden" value="'.$row['payment_type'].'" name="payment_type">
                                                                               
                                                                                    	
										<button class="btn waves-effect waves-light right submit" type="submit" name="action">Delivered
                                                                                <i class="mdi-content-clear right"></i> 
										</button>
                                                                  
										</form>
                              <?php }?>
                              </li>
                             
						<li class="collection-item">
                            <div class="row">
<!--							<p><strong>Name: </strong></p>
							<p><strong>Address: </strong></p>
							<p><strong>Contact: </strong></p>	
							<p><strong>Email: </strong></p>		
							<p><strong>Note: </strong></p>								-->
                            </li>							
							
						
							<li class="collection-item">
                            <div class="row">
                            <div class="col s7">
                           <p class="collections-title"><strong></strong></p>
                            </div>
                            <div class="col s2">
                            <span></span>
                            </div>
                            <div class="col s3">
                            <span></span>
                            </div>
                            </div>
                            </li>
						
								<li class="collection-item">
                                        <div class="row">
                                            <div class="col s7">
                                                <p class="collections-title"> Total</p>
                                            </div>
                                            <div class="col s2">
											<span> </span>
                                            </div>
                                            <div class="col s3">
                                                <span><strong>Rs.<?=$total=$total ?? '0'?></strong></span>
                                            </div>										
							
						
										</form>
								
								</div></li>
					
					<?php }?>
					</ul>






</div>
</div>
</div>
</div>

