<?php include "config.php"; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>WEB BASED COMPREHENSIVE MEDICAL BAZAAR AND DIET PLANNER</title>
<meta name="keywords" content="Greeny Template, free website templates, CSS, HTML" />
<meta name="description" content="Greeny Template - Download free website templates from templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
  
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>


</head>
<body>
<div id="templatemo_header_wrapper">
	<div id="templatemo_header">
<h1>WEB BASED COMPREHENSIVE MEDICAL BAZAAR AND DIET PLANNER</h1>
         <div id="templatemo_menu">
            <ul>
 <?php
if(isset($_SESSION['aid']))
{
?>	
<li><a href="bmireport.php">BMI Report</a></li>
<li><a href="add_home_remedies.php">Remedies</a></li>
<li><a href="view_home_remedies.php">View remedies</a></li>
<li><a href="add_dietplanner.php">Add Dietplanner</a></li>
<li><a href="view_feedback.php">View comment</a></li>
<li><a href="add_product.php">Add Product</a></li>
<li><a href="view_product.php">View product</a></li>
<li><a href="search_product.php">Search product</a></li>
<li><a href="view_order.php">View Order</a></li>
<li><a href="logout.php">Signout</a></li>

<?php
}
else if(isset($_SESSION['uid']))
{
?>
<li><a href="bmi.php">BMI</a></li>
<li><a href="view_home_remedies.php">View remedies</a></li>
<li><a href="view_dietplanner.php">Dietplanner</a></li>
<li><a href="view_product.php">View product</a></li>
<li><a href="search_product.php">Search product</a></li>
<li><a href="view_order.php">View Order</a></li>
<li><a href="add_feedback.php">Add comment</a></li>
<li><a href="view_feedback.php">View comment</a></li>
<li><a href="logout.php">Signout</a></li>
<?php
}
else
{
?>
          <li><a href="user_register.php"><span>Register</span></a></li>
          <li><a href="index.php"><span>Signin</span></a></li>
<?php
}
?>
			
                
            </ul>    	
        </div> <!-- end of templatemo_menu -->
        
    	<div class="cleaner"></div>
    </div> <!-- end of templatemo_header -->
</div> 
<!-- end of templatemo_header_wrapper -->