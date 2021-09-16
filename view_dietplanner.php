<?php 
error_reporting(0);
include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Diet planner</h2>
            <div class="sidebar_section_content">
                 <?php
			  if($_SESSION['uid']!='')
			  {
			  ?>
				
          <?php
		 
		$u=mysql_query("select * from dietplanner");
		while($y=mysql_fetch_array($u))
		{

		$dietfor=$y['dietfor'];
$sug2=$y['sug2'];
$sug3=$y['sug3'];
$sug1=$y['sug1'];
$did=$y['did'];
$pimage=$y['pimage'];

echo '<button class="accordion">Dietplanner for :';
echo "$dietfor";
echo '</button>';
echo "<div class='panel'>
<br><img src='upload/$pimage'/>
<br><br>
<ul style='color:red'>	
<li>
$sug1</li><li>$sug2</li><li>$sug3</li>
</ul>
</div>";


/*echo "<span style='color:green; font-size:20px; font-weight:bold'>Dietplanner for : $dietfor</span> <br>
<ul style='color:red'>	
<li>
$sug1</li><li>$sug2</li><li>$sug3</li>
</ul>";*/
				}
				?>
                
				 <?php
			  }
			  else if($_SESSION['aid']!='')

			  {
			  ?>  
			
          <?php
		 
		$u=mysql_query("select * from dietplanner");
		while($y=mysql_fetch_array($u))
		{

		$dietfor=$y['dietfor'];
$sug2=$y['sug2'];
$sug3=$y['sug3'];
$sug1=$y['sug1'];
$did=$y['did'];
$pimage=$y['pimage'];

echo '<button class="accordion">Dietplanner for :';
echo "$dietfor";
echo '</button>';
echo "<div class='panel'>
<ul style='color:red'>	
<br><img src='upload/$pimage'/>
<br><br>
$sug1
</ul>
</div>";
				}
				?>
                
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
if($_GET['hid']!='')
{
$hid=$_GET['hid'];
mysql_query("delete from dietplanner where did='$did'");
echo "<script type='text/javascript'>alert('Dietplanner deleted successfully');</script>";
}
?>
<?php include "footer.php"; ?> 