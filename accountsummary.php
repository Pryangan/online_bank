<?php
session_start();
include("header.php");
include ("menu.php");
include("dbconnection.php");
$results = mysql_query("SELECT * FROM accounts WHERE  customerid='$_SESSION[customerid]'");
?>
<table bgcolor="#FFFFCC" width="100%"><tr><td 70%>
<div id="templatemo_main"><span class="main_top"></span> 
     	
<div id="templatemo_content">
	  <h2 align="center">ACCOUNTS SUMMARY</h2>
     		<table width="1337"><tr><td width="871"> <table width="616" border="1">
     		   <tr>
     		     <th scope="col">ACCOUNT TYPE</th>
     		     <th scope="col">NAME</th>
     		     <th scope="col">ACCOUNT NUMBER</th>
     		     <th scope="col">BRANCH</th>
     		     <th scope="col">CURRENCY</th>
     		     <th scope="col">A/C BALANCE</th>
   		     </tr> 
             <?php
			 while($arrow = mysql_fetch_array($results))
			{
				echo "<tr><td>$arrow[accounttype]</td>
     		     <td>$_SESSION[customername]</td>
     		     <td>$arrow[accno]</td>
     		     <td>$_SESSION[ifsccode]</td>
     		     <td>INR</td>
     		     <td>$arrow[accountbalance]</td></tr>";
			}
		   ?>
     		 </table> 
        </td><td width="30%">
        
            
           
              <?php
	   include("myaccountssidebar.php");
	   ?>
         </td></tr></table>
    <?php
	include("footer.php");
	?>