<?php
session_start();
include("header.php");
include("menu.php");
include("dbconnection.php");
$dts = date("Y-m-d h:i:s");
mysql_query("UPDATE customers SET lastlogin='$dts' WHERE customerid='$_SESSION[customerid]'");
$sqlq = mysql_query("select * from transaction where paymentstat='Pending'");
$mailreq = mysql_query("select * from mail");
?>
<table width="100%" bgcolor="#FFFFCC"><tr><td width="70%">
     		 <h2>Alerts and messages</h2>
     		<table width="1334" ><tr><td width="1061"> <table width="548" border="0">
     		   <tr>
     		     <th colspan="2" scope="col">Alerts</th>
   		       </tr>
     		   <tr>
     		     <td width="293">Customer Name</td>
     		     <td width="245"><?php echo $_SESSION['customername']; ?></td>
   		     </tr>
     		   <tr>
     		     <td>Branch code</td>
     		     <td>&nbsp;<?php echo $_SESSION['ifsccode'];?></td>
   		     </tr>
     		   <tr>
     		     <td>User logged on</td>
     		     <td><?php echo $_SESSION['lastlogin']; ?> </td>
   		     </tr>
     		   <tr>
     		     <td>Pending payments</td>
     		     <td><?php echo mysql_num_rows($sqlq); ?></td>
   		     </tr>
     		   <tr>
     		     <td>Unread mails</td>
     		     <td><?php echo mysql_num_rows($mailreq); ?></td>
   		     </tr>
   		   </table></td>
     		
            </td><td width="30%">
            
            <?php
	   include("myaccountssidebar.php");
	   ?>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
             <p>&nbsp;</p>
           	
    </td></tr></table>
    <?php
	include("footer.php");
	?>