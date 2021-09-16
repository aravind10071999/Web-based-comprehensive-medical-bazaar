<?php 
error_reporting(0);
include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>BMI Report</h2>
            <div class="sidebar_section_content">
			
        <?php
		if(isset($_SESSION['aid']))
		{
		?>
		<form name="" action="" method="post">
				
User : <br>
<select name="user" required id="input_field">
<option value="">Select User</option>
<?php
$n=mysql_query("select * from user");
while($j=mysql_fetch_array($n))
{
$user=$j['usname'];
echo "<option value='$user'>$user</option>";
}
?>
</select>				<br/><br/>
				
Start Date : <br>
				<input type="text" name="adate" value="<?php echo date("Y-m-d"); ?>" id="input_field" /><br/><br/>

				EndDate : <br>
				<input type="text" name="edate" value="<?php echo date("Y-m-d"); ?>"  id="input_field"/><br/><br/>
				<br>
				
				<span class='submit'><input type="submit" name="search" value="Search" id="submit_btn" /></span><br/><br/>
				</form>
		      
		<table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table" width="100%">
          <tr><td>Name</td><td>Height</td><td>Weight</td><td>BMI</td><td>Blood pressure</td><td>Sugar</td><td>Date</td></tr>
          <?php
		  if(isset($_POST['search']))
		 {
		 $adate=$_POST['adate'];
		 $edate=$_POST['edate'];
		 $user=$_POST['user'];


		$u=mysql_query("select * from bmi where bdate between '$adate' and '$edate' and user='$user'")or die(mysql_error());

		 }
		 else
		 {
		$u=mysql_query("select * from bmi");
		 }
		 
		
		while($y=mysql_fetch_array($u))
		{

$height=$y['height'];
$weight=$y['weight'];
$pressure=$y['pressure'];
$sugar=$y['sugar'];
$bdate=$y['bdate'];
$bmi=$y['bmi'];
$user=$y['user'];

		
echo "<tr><td>$user</td><td>$height</td><td>$weight</td><td>$bmi</td><td>$pressure</td><td>$sugar</td><td>$bdate</td></tr>";
				}
				
				?>
                </table>
				
				 <?php
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

<script type="text/javascript">
function frm_submit()
{
var r = confirm("Do you really want to do place order?!");
if (r == true) {
    document.getElementById("myForm").submit();
} else {
    return false;
}
}
</script>
 <?php
if($_POST['pid']!='')
{
$pid=$_POST['pid'];
$nqty=$_POST['nqty'];
$oqty=$_POST['nqty'];
$uid=$_SESSION['uid'];
$date=date("Y-m-d H:i:s");

if($nqty=='0')
{
echo "<script type='text/javascript'>alert('Quantity should be greater than zero');</script>";
}

$q=mysql_query("SELECT * FROM `product` WHERE pid='$pid'")or die(mysql_error());
$j=mysql_fetch_array($q);
$old_sold=$j['qty'];

if($oqty>$old_sold)
{
echo "<script type='text/javascript'>alert('Product stock not avaiable');</script>";
}
else
{
$q=mysql_query("SELECT * FROM `product` WHERE pid='$pid'")or die(mysql_error());
while($r=mysql_fetch_array($q))
{
$old_sold=$r['qty'];
$qty=$old_sold-$nqty;
mysql_query("update product set qty='$qty' where pid='$pid'");
}
mysql_query("insert into `orders`(pid,qty,uid,odate,status)values('$pid','$oqty','$uid','$date','1')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Your order have been placed');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
}


}
if($_GET['pid']!='')
{
$pid=$_GET['pid'];
mysql_query("delete from product where pid='$pid'");
echo "<script type='text/javascript'>alert('Product deleted successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
}
?>


<?php include "footer.php"; ?> 