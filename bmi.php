<?php include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>BMI calculator</h2>
            <div class="sidebar_section_content">
                <form action="" method="post" enctype="multipart/form-data">
			Height in centimeters<br/>
                <input type="text" value="" name="height" size="50" id="input_field" title="Height" required /><br/><br/>
				
				Weight in kilograms<br/>
                <input type="text" value="" name="weight" size="50" id="input_field" title="Weight" required /><br/><br/>
				
				Blood pressure<br/>
                <input type="text" value="" name="pressure" size="50" id="input_field" title="Blood pressure" required /><br/><br/>
				
				Sugar<br/>
                <input type="text" value="" name="sugar" size="50" id="input_field" title="Sugar" required /><br/><br/>
				
				
				Date<br/>
                <input type="text" value="<?php echo date('Y-m-d'); ?>" name="bdate" size="50" id="input_field" title="" required /><br/><br/>

				

				
                <input type="submit" name="add" value="Calculate" alt="login" id="submit_btn" title="" />
				
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
$height=$_POST['height']*0.01;
$weight=$_POST['weight'];
$pressure=$_POST['pressure'];
$sugar=$_POST['sugar'];
$bdate=$_POST['bdate'];

$bmi=$weight / ($height * $height);
$user=$_SESSION['usname'];
mysql_query("insert into bmi(weight,height,pressure,sugar,bdate,bmi,user)values('$weight','$height','$pressure','$sugar','$bdate','$bmi','$user')");

if($bmi<=18.4)
 {
 echo "<script type='text/javascript'>alert('Body mass index is $bmi, you are Under weight, Dry Dates And Milk Are Good For Gaining Weight');</script>";
 }
else if(($bmi>18.5)&&($bmi<=24.9))
{
 echo "<script type='text/javascript'>alert('Body mass index is $bmi, you are in Healthy weight');</script>";
}
else if(($bmi>25)&&($bmi<=29.9))
{
 echo "<script type='text/javascript'>alert('Body mass index is $bmi, you are Overweight, Take hot water and lemon during night');</script>";
}
else if(($bmi>30)&&($bmi<39.9))
{
 echo "<script type='text/javascript'>alert('Body mass index is $bmi, you are obese,Take liquid food instead of fatty foods, Drink more water');</script>";
}


if($sugar<=120)
 {
 echo "<script type='text/javascript'>alert('You have Normal Sugar Level);</script>";
 }
else if(($sugar>120)&&($sugar<=199))
{
 echo "<script type='text/javascript'>alert('You have Prediabetes, Increase Your Fiber Intake');</script>";
}
else if(($sugar>200))
{
 echo "<script type='text/javascript'>alert('You have High diabetes, Drink Water and Stay Hydrated, Choose Foods With a Low Glycemic Index');</script>";
}


if($pressure<=90)
 {
 echo "<script type='text/javascript'>alert('You have Low Blood Pressure, Eat more salt, Dring more water');</script>";
 }
else if(($pressure>90)&&($pressure<=120))
{
 echo "<script type='text/javascript'>alert('You have Ideal Blood Pressure');</script>";
}
else if(($bmi>120)&&($bmi<=140))
{
 echo "<script type='text/javascript'>alert('You have Pre High Blood Pressure, Eat dark chocolate');</script>";
}
else if(($bmi>140)&&($bmi<190))
{
 echo "<script type='text/javascript'>alert('You have High Blood Pressure, Reduce your sodium intake, Eat more potassium-rich foods');</script>";
}

}
?>
<?php include "footer.php"; ?> 