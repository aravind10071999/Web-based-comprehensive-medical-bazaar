<?php include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Product</h2>
            <div class="sidebar_section_content">
                <form action="" method="post" enctype="multipart/form-data">
				<br/>
				Product name<br/>
                <input type="text" value="" name="pname" size="50" id="input_field" title="" required /><br/><br/>
				
				Product Description<br/>
				 <input type="text" value="" name="pdescp" size="50" id="input_field" title="" required /><br/><br/>
				 
				 Product Category<br/>
				 <select name="cat" id="input_field" required>
				 <option value="Fruits">Fruits</option>
				 <option value="Vegetables">Vegetables</option>
				 <option value="Herbs">Herbs</option>
				 </select>
				 <br/><br/>

				Price<br/>
				 <input type="text" value="" name="price" size="50" id="input_field" title="" required /><br/><br/>

				Quantity<br/>
				 <input type="text" value="" name="qty" size="50" id="input_field" title="" required /><br/><br/>

				Product image<br/>
				 <input type="file" value="" name="pimg" size="50" id="input_field" title="" required /><br/><br/>

				
                <input type="submit" name="add" value="Add" alt="login" id="submit_btn" title="Login" />
				
                </form>
                <div class="cleaner"></div>
			        
        </div> 
        
        <div class="cleaner_h40"></div>
        
    

    </div> <!-- end of content -->

    
     <!-- end of sidebar -->
    
  	<div class="cleaner"></div>    

</div> 

<div id="templatemo_content_wrapper_bottom"></div> <!-- end of content_wrapper -->


 <?php
if(isset($_POST['add']))
{
$pimage=$_FILES['pimg']['name'];
$pname=mysql_real_escape_string($_POST['pname']);
$cat=$_POST['cat'];
$pdescp=mysql_real_escape_string($_POST['pdescp']);
$price=$_POST['price'];
$qty=$_POST['qty'];
mysql_query("insert into product(pname,pdescp,cat,price,qty,pimage)values('$pname','$pdescp','$cat','$price','$qty','$pimage')")or die(mysql_error());
move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
echo "<script type='text/javascript'>alert('Product added Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
}

?>
<?php include "footer.php"; ?> 