<?php 
error_reporting(0);
include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Product</h2>
            <div class="sidebar_section_content">
			
        <?php
		if(isset($_SESSION['aid']))
		{
		?>
		      
		<table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table" width="100%">
          <tr><td>Category</td><td>Product name</td><td>Product Description</td><td>Product image</td><td>Price</td><td>Action</td></tr>
          <?php
		$u=mysql_query("select * from product");
		while($y=mysql_fetch_array($u))
		{

		$pimage=$y['pimage'];
$pname=$y['pname'];
$pdescp=$y['pdescp'];
$price=$y['price'];
$pid=$y['pid'];
$qty=$y['qty'];
$cat=$y['cat'];

		
echo "<tr><td>$cat</td><td>$pname</td><td>$pdescp</td><td><img src='upload/$pimage' width='100px'/></td><td>$price</td><td><a href='view_product.php?pid=$pid'>Delete</a></td></tr>";
				}
				?>
                </table>
				
				 <?php
		}
		if(isset($_SESSION['uid']))
		{
		?>
				
				
				<form name="" action="" method="post"  id="myForm">
                <table align="left" cellpadding="20" cellspacing="0" border="1"  class="cart_table" width="100%">
          <tr><td>Select</td><td>Category</td><td>Product name</td><td>Product Description</td><td>Product image</td><td>Price</td><td>Quantity</td></tr>
          <?php
		 if(isset($_POST['search']))
		 {
		 $pname=$_POST['pnm'];
		 $u=mysql_query("select * from product where pname='$pname'");
		 }
		else
		{
		$u=mysql_query("select * from product");
		}
		while($y=mysql_fetch_array($u))
		{
		$pimage=$y['pimage'];
$pname=$y['pname'];
$pdescp=$y['pdescp'];
$price=$y['price'];
$pid=$y['pid'];
$sqty=$y['qty'];
$cat=$y['cat'];

		
echo "<tr><td><input type='radio' name='pid' value='$pid' /></td><td>$cat</td><td>$pname</td><td>$pdescp</td><td><img src='upload/$pimage' width='100px'/></td><td>$price</td><td>$sqty</td></tr>";
				}
				?>
                </table>
				<p>&nbsp;&nbsp;</p>
Order Quantity : <input type='number' name='nqty' value='' min="1" pattern="^[1-9]" pattern="\d*" oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" />				
				<p>&nbsp;&nbsp;</p>
<input type="button" name="order" value="Order" alt="login" id="submit_btn" title="Login" onclick="frm_submit()" />
</form>			
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