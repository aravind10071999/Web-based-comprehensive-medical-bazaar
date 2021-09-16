<?php 
error_reporting(0);
include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Order</h2>
            <div class="sidebar_section_content">
        <?php
		if(isset($_SESSION['aid']))
		{
		?>
		      
			  <form action="" method="post" id="contacts-form" >
		<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center; width:100%;">
          <tr><td>Order date</td><td>Product name</td><td>Price</td><td>Qty sold</td><td>Total Amount</td><td>Status</td></tr>
          <?php
		 		  
		$t=mysql_query("select * from orders");
		while($w=mysql_fetch_array($t))
		{
$pid=$w['pid'];
$cqty=$w['qty'];
$odate=$w['odate'];
$status=$w['status'];
$oid=$w['oid'];
if($status=='0')
{
$status='Pending';
}
else
{
$status='Delivered';
}

$u=mysql_query("select * from product where pid=$pid");
		while($y=mysql_fetch_array($u))
		{

$pname=$y['pname'];
$pimage=$y['pimage'];
$price=$y['price'];


		?>

          <?php
		  $tot=($cqty*$price);
echo "<tr><td><input type='radio' name='oid' value='$oid'>$odate</td><td>$pname</td><td>$price</td><td>$cqty</td><td>$tot</td><td>$status</td></tr>";
		  ?>
          
                <?php
				}
				}
				?>
                </table>
				<br><br>
				Status: <input type="radio" name="status" value="0" /> Pending
				<input type="radio" name="status" value="1" /> Delivered
				<br><br>
				
				<input type="submit" name="submit"  value="Update">
				 </form>
				
		<?php
		}
		if(isset($_SESSION['uid']))
		{
		?>
				
				<table align="center" cellpadding="20" cellspacing="0" border="1" style="text-align:center; width:100%;">
          <tr><td>Order date</td><td>Product name</td><td>Price</td><td>Qty sold</td><td>Total Amount</td><td>Status</td></tr>
          <?php
		  $uid=$_SESSION['uid'];
		  
		$t=mysql_query("select * from orders where uid='$uid'");
		while($w=mysql_fetch_array($t))
		{
$pid=$w['pid'];
$cqty=$w['qty'];
$odate=$w['odate'];
$status=$w['status'];
if($status=='0')
{
$status='Pending';
}
else
{
$status='Delivered';
}
$u=mysql_query("select * from product where pid=$pid");
		while($y=mysql_fetch_array($u))
		{

$pname=$y['pname'];
$pimage=$y['pimage'];
$price=$y['price'];

		?>

          <?php
		  $tot=($cqty*$price);
echo "<tr><td>$odate</td><td>$pname</td><td>$price</td><td>$cqty</td><td>$tot</td><td>$status</td></tr>";
		  ?>
          
                <?php
				}
				}
				?>
                </table>			
<?php
}
if(isset($_POST['submit']))
{
$status=$_POST['status'];
$oid=$_POST['oid'];
mysql_query("update orders set status='$status' where oid='$oid'");
echo '<script type="text/javascript">alert("Order Status updated successfully")</script>';
echo '<meta http-equiv="refresh" content="0;url=view_order.php">';
}
?>
                <div class="cleaner"></div>
			        
        </div> 
        
        <div class="cleaner_h40"></div>
        
    

    </div> <!-- end of content -->

    
     <!-- end of sidebar -->
    
  	<div class="cleaner"></div>    

</div> 

<div id="templatemo_content_wrapper_bottom"></div> <!-- end of content_wrapper -->


 <?php include "footer.php"; ?> 