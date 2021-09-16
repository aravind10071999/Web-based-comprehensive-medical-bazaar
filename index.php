<?php include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Sign in</h2>
            <div class="sidebar_section_content">
                <form action="" method="post">
				Username<br/>
                <input type="text" value="" name="uname" size="50" id="input_field" title="Username" required /><br/><br/>

				Password<br/>
                <input type="password" value="" name="upass" size="50" id="input_field" title="Password" required /><br/><br/>
				
                <input type="submit" name="login" value="Signin" alt="login" id="submit_btn" title="Login" />
				
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
if(isset($_POST['login']))
{
$uname=$_POST['uname'];
$upass=$_POST['upass'];


if(($uname=='admin')&&($upass=='admin'))
{
$_SESSION['aid']='1';
echo "<script type='text/javascript'>alert('Admin Logged in successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=add_product.php"/>';
}

else
{
$q=mysql_query("select * from user where usname='$uname' and uspass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);

if($n>0)
{
$_SESSION['uid']=$_POST['uname'];
$_SESSION['usname']=$_POST['uname'];
echo "<script type='text/javascript'>alert('User Login Successful');</script>";
//echo '<meta http-equiv="refresh" content="0;url=view_product.php">';
echo '<meta http-equiv="refresh" content="0;url=bmi.php">';
}
else
{
$q=mysql_query("select * from user where usname='$uname'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n==0)
{
echo "<script type='text/javascript'>alert('User name is wrong');</script>";
}
else
{
$q=mysql_query("select * from user where uspass='$upass'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n==0)
{
echo "<script type='text/javascript'>alert('Password is wrong');</script>";
}
}

}
}
}
?>
<?php include "footer.php"; ?> 