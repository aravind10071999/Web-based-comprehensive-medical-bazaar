<?php include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Add Comment</h2>
            <div class="sidebar_section_content">
                <form action="" method="post" enctype="multipart/form-data">
				<br/>
				Comment <br/>
				<textarea rows="10" cols="37" name="feedback" id="input_field" required ></textarea><br/><br/>

				
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
$feedback=$_POST['feedback'];
$uname=$_SESSION['usname'];


mysql_query("insert into feedback(feedback,uname)values('$feedback','$uname')")or die(mysql_error());
echo "<script type='text/javascript'>alert('Comment added');</script>";
}
?>
<?php include "footer.php"; ?> 