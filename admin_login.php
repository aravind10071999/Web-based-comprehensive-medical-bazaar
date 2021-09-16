<?php include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Admin Signin</h2>
            <div class="sidebar_section_content">
                <form action="" method="post">
				Username<br/>
                <input type="text" value="" name="aname" size="50" id="input_field" title="Username" /><br/><br/>

				Password<br/>
                <input type="password" value="" name="apass" size="50" id="input_field" title="Password" /><br/><br/>

				
                <input type="submit" name="login" value="Signin" alt="login" id="submit_btn" title="Signin" />
				
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
$uname=$_POST['aname'];
$upass=$_POST['apass'];

$q=mysql_query("select * from admin where aname='$uname' and apass='$upass'")or die(mysql_error());
$c=mysql_num_rows($q);
if($c>0)
{
while($r=mysql_fetch_array($q))
{
$_SESSION['aid']=$uid=$r['aid'];
echo "<script type='text/javascript'>alert('Logged in successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=add_product.php"/>';
}
}
else
{
echo "<script type='text/javascript'>alert('You are not authorised user');</script>";
}
}
?>
<?php include "footer.php"; ?> 