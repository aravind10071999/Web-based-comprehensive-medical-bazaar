<?php 
error_reporting(0);
include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Comment</h2>
        <?php
			  if($_SESSION['uid']!='')
			  {
			  ?>
			  <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px">
			  <tr><td width="10%">User</td><td width="39%">Comment</td><td width="40%">Reply</td></tr>
			  
               <?php
			   $con=mysql_query("select * from feedback")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $uname=$row['uname'];
			   $fid=$row['fid'];			   
			   $feedback=$row['feedback'];
			   $reply=$row['reply'];
			   echo "<tr><td>$uname</td><td>$feedback</td><td>$reply</td></tr>";
			   }
			   ?>
			   </table>
			  <?php
			  }
			  else if($_SESSION['aid']!='')

			  {
			  ?>
			  <form action="" method="post" id="contacts-form" >
			  <table align="left" cellpadding="20" cellspacing="0" border="1" width="100%" style="margin-bottom:30px">
			  <tr><td width="1%">Select</td><td width="5%">User</td><td width="50%">Comment</td><td width="44%">Reply</td></tr>
			  
               <?php
			   $con=mysql_query("select * from feedback")or die(mysql_error());
			   while($row=mysql_fetch_array($con))
			   {
			   $uname=$row['uname'];
			   $fid=$row['fid'];			   
			   $feedback=$row['feedback'];
			   $reply=$row['reply'];
			   echo "<tr><td><input type='radio' name='fid' value='$fid'></td><td>$uname</td><td>$feedback</td><td>$reply</td></tr>";
			   }
			   ?>
			   </table>
			   Reply: <input type="text" name="reply" />
				
				<input type="submit" name="submit"  value="Reply">
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


<?php
if(isset($_POST['submit']))
{
$reply=$_POST['reply'];
$fid=$_POST['fid'];
mysql_query("update feedback set reply='$reply' where fid='$fid'");
echo '<script type="text/javascript">alert("Reply added successfully")</script>';
}
?>

<?php include "footer.php"; ?> 