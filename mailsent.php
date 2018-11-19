<?php
session_start();
include("header.php");
include("menu.php");
include("dbconnection.php");
if(isset($_GET["mailid"]))
{
	mysql_query("DELETE FROM mail where mailid='$_GET[mailid]'");
	$recres = "Mail deleted Successfully...";
}
$result = mysql_query("SELECT * FROM mail where senderid='".$_SESSION['customerid']."'");
$sendernm = mysql_query("select * from customers where customerid = '".$_SESSION['customerid']."'");
$nm = mysql_fetch_assoc($sendernm);
?>
   <table bgcolor="#FFFFCC" width="100%"><tr><td width="70%"> 
    <div id="templatemo_main">
  <div align="center"><span class="main_top"></span> 
    
  </div>
  <div align="center"></div>
  <div id="templatemo_content">
     		 <h2 align="center">Sent Mails</h2>
            <?php echo $recres; ?>
         <table width="600" border="1" bgcolor="#FFCCFF">
    
<?php
		 echo " <tr>";
                echo " <th scope='col' width='45' >Delete</th>";
                echo " <th scope='col'>SENDER</th>";
                echo " <th scope='col'>SUBJECT</th>";
                echo " <th scope='col'>TIME</th>";
                echo " </tr>";
         		while($row = mysql_fetch_array($result))
  				{
    			echo " <tr>";
                echo " <th scope='col'><a href='mailinbox.php?mailid=$row[mailid]'>Delete</a></th>";
                echo " <th scope='col'>".$nm['firstname']." ".$nm['lastname']."</th>";
                echo " <th scope='col'>$row[subject]</th>";
                echo " <th scope='col'>$row[mdatetime]</th>";
                echo " </tr>";
  				}
?>           
      </table>
       	  </form>
        <?php

?>
<div class="cleaner_h50"></div>
        </div><!-- end of content -->
            </td><td width="30%">
            <div id="templatemo_sidebar">
            
              <?php
			include("custsidebar.php");
			mails();
                ?>
                
              <div class="cleaner_h40"></div>
                
                <h2>&nbsp;</h2>
</div>
                
		<div class="cleaner"></div>
     </div>     <!-- end of main -->
    <div id="templatemo_main_bottom"></div><!-- end of main -->
    
  <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    </td></tr></table>
       <?php
	include("footer.php");
	?>







