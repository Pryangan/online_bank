<?php
session_start();
include("header.php");
/*if(!($_SESSION["adminid"]))
{
		header("Location: emplogin.php");
}*/
?>          <table bgcolor="#FF6666" width="100%"><tr><td align="right"><p><a href="/online_bank/logout.php" title="For Logout here" id="click1" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin">
      </span>Logout</a></p></td></tr></table>         
          <iframe src="/online_bank/list.php" scrolling="no" width="20%" height="250" name="f1">pran</iframe>
	  <iframe src="/online_bank/admininfo.php" scrolling="yes" width="79%" height="250" name="f2">pran1</iframe> 
                
		
    <?php
	include("footer.php");
	?>