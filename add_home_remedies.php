<?php include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Add Home remedies</h2>
            <div class="sidebar_section_content">
                <form action="" method="post" enctype="multipart/form-data">
				<br/>
				Home remedies for <br/>
                <input type="text" value="" name="hremfor" size="50" id="input_field" title="" required /><br/><br/>
				
				
				Suggestion<br/>
				<textarea rows="10" cols="37" id="input_field"  name="sug1" required ></textarea>
				<br/><br/>
				
				
				Image<br/>
				 <input type="file" value="" name="pimg" size="50" id="input_field" title="" required /><br/><br/>
					
				<!--Suggestion1<br/>
				<textarea rows="10" cols="37" id="input_field"  name="sug1" required ></textarea>
				<br/><br/>

				Suggestion2<br/>
				 <textarea rows="10" cols="37" id="input_field"  name="sug2" required ></textarea>
				<br/><br/>

				Suggestion3<br/>
				 <textarea rows="10" cols="37" id="input_field"  name="sug3" required ></textarea>
				<br/><br/>-->


				
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
$hremfor=mysql_real_escape_string($_POST['hremfor']);
$sug1=mysql_real_escape_string($_POST['sug1']);
$sug2=mysql_real_escape_string($_POST['sug2']);
$sug3=mysql_real_escape_string($_POST['sug3']);

move_uploaded_file($_FILES['pimg']['tmp_name'],"upload/$pimage");
mysql_query("insert into homeremedies(hremfor,sug1,sug2,sug3,pimage)values('$hremfor','$sug1','$sug2','$sug3','$pimage')")or die(mysql_error());

echo "<script type='text/javascript'>alert('Home remedies added Successfull');</script>";
echo '<meta http-equiv="refresh" content="0;url=view_home_remedies.php">';
}

?>
<?php include "footer.php"; ?> 