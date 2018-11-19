<?php
session_start();
include("header.php");
include("menu.php");
include("dbconnection.php");
$result = mysql_query("select * from customers WHERE customerid='$_SESSION[customerid]'");
$rowrec = mysql_fetch_array($result);
?>
    
    
     <table width="1349" bgcolor="#FFFFCC"><tr><td width="70%">
                
        	<h2>Customer profile</h2>


        	<form id="form1" name="form1" method="post" action="">
        	  <table width="523" border="1" bgcolor="#FFCCFF">
        	    <tr>
        	      <th width="199" scope="row">Customer ID</th>
        	      <td width="308">&nbsp;<?php echo $rowrec['customerid']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">IFSC Code</th>
        	      <td>&nbsp;<?php echo $rowrec['ifsccode']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">First name</th>
        	      <td>&nbsp;<?php echo $rowrec['firstname']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Last name</th>
        	      <td>&nbsp;<?php echo $rowrec['lastname']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Login ID</th>
        	      <td>&nbsp;<?php echo $rowrec['loginid']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Account status</th>
        	      <td>&nbsp;<?php echo $rowrec['accstatus']; ?></td>
      	 </tr>
          	    <tr>
        	      <th scope="row">City</th>
        	      <td>&nbsp;<?php echo $rowrec['city']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">State</th>
        	      <td>&nbsp;<?php echo $rowrec['state']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Country</th>
        	      <td>&nbsp;<?php echo $rowrec['country']; ?></td>
      	      </tr>
        	    
        	    <tr>
        	      <th scope="row">Account Open Date</th>
        	      <td>&nbsp;<?php echo $rowrec['accopendate']; ?></td>
      	      </tr>
        	    <tr>
        	      <th scope="row">Last Login</th>
        	      <td>&nbsp;<?php echo $rowrec['lastlogin']; ?></td>
      	      </tr>
      	    </table>
        	
   	      </form>
          
    
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            </td><td width="30%">
            <div id="templatemo_sidebar">
            
              <?php
			include("custsidebar.php");
            personalise();
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