<?php include "header.php"; ?>


<div id="templatemo_content_wrapper">

	<div id="templatemo_content">
    
        
        	<h2>Register</h2>
            
            <div class="sidebar_section_content">
                <form action="" method="post">
				
				Name<br/>
                <input type="text" value="" name="fname" size="50" id="input_field" title="Username" required /><br/><br/>

				Email<br/>
                <input type="email" value="" name="uemail" size="50" id="input_field"  class="email" title="Email" required /><br/><br/>


				Phone<br/>
                <input type="text" value="" name="uphone" size="50" id="input_field" title="Phone" pattern="[1-9]{1}[0-9]{9}"  oninput="this.value=this.value.replace(/[^0-9]/g,'');" onkeyup="this.value=this.value.replace(/[^0-9]/g,'');"  required /><br/><br/>

				
				Username<br/>
                <input type="text" value="" name="uname" size="50" id="input_field" title="Username"  required /><br/><br/>

				Password<br/>
                <!--<input type="password" value="" name="upass" size="50" id="input_field" title="Password" required pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" id="password" />-->
<input type="password" value="" name="upass" size="50" title="Password" required  id="password"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" />
				<br/><br/>
				
				Confirm Password<br/>
                <input type="password" value="" name="cpass" size="50" title="Password" required id="confirm_password" oninput="check(this)"  pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" /><br/><br/>

				
                <input type="submit" name="register" value="Register" alt="login" id="submit_btn" title="Register" />
				
                </form>
                <div class="cleaner"></div>
			        
        </div> 
        
        <div class="cleaner_h40"></div>
        
    

    </div> <!-- end of content -->

    
     <!-- end of sidebar -->
    
  	<div class="cleaner"></div>    

</div> 

<div id="templatemo_content_wrapper_bottom"></div> <!-- end of content_wrapper -->
<script type="text/javascript">
function check(input) {
        if (input.value != document.getElementById('password').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>

<?php
if(isset($_POST['register']))
{
$fname=$_POST['fname'];
$uname=$_POST['uname'];
$upass=$_POST['upass'];
$uphone=$_POST['uphone'];
$uemail=$_POST['uemail'];


$q=mysql_query("select * from user where usname='$uname' and uspass='$upass' and uphone='$uphone'")or die(mysql_error());
$n=mysql_num_rows($q);
if($n>0)
{
echo "<script type='text/javascript'>alert('User already registered');</script>";
echo '<meta http-equiv="refresh" content="0;url=index.php">';
}
else
{
mysql_query("insert into user(usname,uspass,uphone,uemail,fname)values('$uname','$upass','$uphone','$uemail','$fname')")or die(mysql_error());
echo "<script type='text/javascript'>alert('User registered successfully');</script>";
echo '<meta http-equiv="refresh" content="0;url=index.php">';

}

}
?>


<?php include "footer.php"; ?> 