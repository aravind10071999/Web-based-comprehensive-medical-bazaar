<?php 
error_reporting(0);
include "header.php"; ?>

<div id="templatemo_content_wrapper">
	<div id="templatemo_content">
        	<h2>Home remedies</h2>
            <div class="sidebar_section_content">
                 <?php
			  if($_SESSION['uid']!='')
			  {
			  ?>

          <?php
		 
		$u=mysql_query("select * from homeremedies");
		$i=1;
		while($y=mysql_fetch_array($u))
		{

		$hremfor=$y['hremfor'];
$sug2=$y['sug2'];
$sug3=$y['sug3'];
$sug1=$y['sug1'];
$hid=$y['hid'];
$pimage=$y['pimage'];


  
  
echo '<button class="accordion">Home remedies for :';
echo "$hremfor";
echo '</button>';
echo "<div class='panel'>
<br><img src='upload/$pimage'/>
<br><br>
<ul style='color:red'>	
$sug1
</ul>
</div>";

/*echo "<span style='color:green; font-size:20px; font-weight:bold'>Home remedies for : $hremfor</span> <br>
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
		 
		$u=mysql_query("select * from homeremedies");
		while($y=mysql_fetch_array($u))
		{

		$hremfor=$y['hremfor'];
$sug2=$y['sug2'];
$sug3=$y['sug3'];
$sug1=$y['sug1'];
$hid=$y['hid'];
$pimage=$y['pimage'];

echo '<button class="accordion">Home remedies for :';
echo "$hremfor";
echo '</button>';
echo "<div class='panel'>
<br><img src='upload/$pimage'/>
<br><br>
<ul style='color:red'>	
$sug1
</ul>
</div>";
				}
				?>
                </table>
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
mysql_query("delete from homeremedies where hid='$hid'");
echo "<script type='text/javascript'>alert('Home remedies deleted successfully');</script>";
}
?>
<?php include "footer.php"; ?> 