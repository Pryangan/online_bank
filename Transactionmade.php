<?php
session_start();
include("header.php");
include("menu.php");
include("dbconnection.php");
?>
    
    <table bgcolor="#FFFFCC" width="100%"><tr><td width="70%">
     <div id="templatemo_main"><span class="main_top"></span> 
     	
        <div id="templatemo_content">
                
        	<h2> Transactions made</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <table width="697" height="61" border="1">
        	    <tr>
        	      <td height="26" colspan="9"><strong><a href="transferfunds.php">&lt;&lt; Back</a></strong></td>
       	        </tr>
        	    <tr>
        	      <td width="32" height="27"><strong>Transaction No.</strong></td>
                  <td width="62"><strong>Transaction date</strong></td>
                  <td width="62"><strong>Particulars</strong></td>
        	      <td width="51"><strong>Amount</strong></td>
        	     
            	  <td width="67"><strong>Status</strong></td>
                   <td width="67"><strong>More</strong></td>
      	      </tr>
<?php
$rectrans=mysql_query("select * from transactions where payment_status='$_GET[pst]' ORDER BY  approve_datetime DESC");
while($recs = mysql_fetch_array($rectrans))
{	

$datetime = $recs[approve_datetime]; 
$dt = strtotime($datetime); //make timestamp with datetime string 
$transdt =  date("d-m-Y", $dt); //echo the year of the datestamp just created  

$particulars=$recs[particulars]; 
$prt=substr($particulars, 0, 15); 


$newDate = date("d-m-Y", strtotime($originalDate));	
		echo "<tr>
        	      <td>$recs[trans_id]</td>
        	      <td>$transdt</td>
        	      <td>
				  $prt...
				  </td>
        	      <td>$recs[amount]</td>
		
        	      <td>$recs[payment_status]</td>
				  		  <td><a href='Transactiondetails2.php?trid=$recs[trans_id]'>More</a></td>
      	      </tr>";


}
?>
      	    </table>
        	  <p>&nbsp;

<input type="button" value="Print Transaction detail" onClick="window.print()">
</p>
        	  <p>&nbsp;</p>
<p>&nbsp;</p>
        	  <p>&nbsp;</p>
       	  </form>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            </td><td width="30%">
            <div id="templatemo_sidebar">
            <?php
if($_GET[view]!="regpayee")
{
	?>
                <?php
				include("custsidebar.php");
				transferfunds();
				?>
<?php
}
?>
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    </td></tr></table>
    <?php
include("footer.php");
?>