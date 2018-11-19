<?php
session_start();
if(!isset($_SESSION['customerid']))
{
	header("Location: login.php");
}

include("header.php");
include ("menu.php");
include("dbconnection.php");

$acc= mysql_query("select * from accounts where accno='$_POST[accno]'");
while($rows = mysql_fetch_array($acc))
{
	$Accountnumber = $rows["accno"];
	$Accountbalance= $rows["accountbalance"];
}
$result = mysql_query("select * from accounts WHERE customerid='".$_SESSION['customerid']."'");

?>


<?php
if(isset($_POST['submit']))
{
?>
  <table bgcolor="#FFFFCC" width="100%"><tr><td width="70%">  	<h2>Mini statements</h2>

        	<form id="form1" name="form1" method="post" action="">
        	  <table width="561" border="1">
        	    <tr>
        	      <th colspan="2" scope="col">Balance Details <?php echo $_SESSION['customername']; ?>
                  [Details on <?php echo date("d-m-Y");?>]</th>
       	        </tr>
        	    <tr>
        	      <td width="275"><strong>Account number</strong></td>
        	      <td width="270"><?php echo $Accountnumber;?>&nbsp;</td>
      	      </tr>
        	    <tr>
        	      <td><strong>Account Balance</strong></td>
        	      <td><?php echo $Accountbalance; ?>&nbsp;</td>
      	      </tr>
              
      	    </table>
        	  <br />
        	  <table width="558" border="1">
  <tr>
    <th colspan="5" scope="col">Transaction made</th>
    </tr>
  <tr bgcolor="#CCCCCC">
    <td><strong>SI NO</strong></td>
    <td><strong>Date</strong></td>
    <td><strong>particulars</strong></td>
    <td><strong>withdrawals</strong></td>
    <td><strong>Deposits</strong></td>
  </tr>
   <?php
			  while($arrvar = mysql_fetch_array($result))
			  {
        	   echo " <tr>
        	      <td>$arrvar[trans_id]</td>
        	      <td>$arrvar[trans_datetime]</td>
				   <td>$arrvar[particulars]</td>
        	      <td>$arrvar[amount]</td>
				  <td>$arrvar[amount]</td>
      	      </tr>";
			  }
			  ?>
</table>


       	  </form>
   <?php
}
else
{
	?>
           
           	<form id="form1" name="form1" method="POST" action="">
        	  <table width="100%" height="127" border="0">
        	    <tr>
        	      <td width="339" height="41"> <strong>Select an Account Number</strong></td>
        	      <td width="165" rowspan="2">
                  <div id="templatemo_sidebar">
            
       <?php
	   include("myaccountssidebar.php");
	   ?>
                

                
                <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
            
            </div>
                  </td>
      	        </tr>
        	    <tr>
        	      <td valign="top">Account number  <label for="ac_no"></label>
        	        <select name="accno" id="accno">
        	            <?php
        	           while($arrvar = mysql_fetch_array($result))
					  	{
        		        echo "<option value='$arrvar[accno]'>$arrvar[accno]</option>";
               			}
					   ?>
                  </select>
       	          <input type="submit" name="submit" id="submit" value="Select account number" /></td>
       	        </tr>
      	    </table>
       	  </form>
           <?php
}
?>
     		 <p>&nbsp;</p>
     <p>&nbsp;</p>
 </td><td width="30%">       
        <div class="cleaner_h30"></div>
  <div class="cleaner_h60"></div>
</div><!-- end of content -->
            
            
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    </td></tr></table>
    <?php
	include("footer.php");
	?>