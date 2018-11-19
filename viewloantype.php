<?php
include("dbconnection.php");
$loantypearray = mysql_query("select * from loantype");
?>		

  <body bgcolor="#FFFFCC">
    <p><strong><a href="addloan.php">Add new loan type</a></strong></p>
    <table width="798" height="37" border="1" style="background-color:#FCC">
      <tr>
        <th width="112" scope="col">LOAN TYPE</th>
        <th width="82" scope="col">PREFIX</th>
        <th width="186" scope="col">MAXIMUM AMT</th>
        <th width="161" scope="col">MINIMUM AMT</th>
        <th width="98" scope="col">INTEREST</th>
        <th width="119" scope="col"><p>STATUS</p></th>
      </tr>
      <?php	
 while($loantypes = mysql_fetch_array($loantypearray))
	  {
echo "
      <tr>
        <td>&nbsp;$loantypes[loantype]</td>
        <td>&nbsp;$loantypes[prefix]</td>
        <td>&nbsp;$loantypes[maximumamt]</td>
        <td>&nbsp;$loantypes[minimumamt]</td>
        <td>&nbsp;$loantypes[interest]</td>
        <td>&nbsp;$loantypes[status]</td>
        
      </tr>";
	  }
	  ?>
    </table>
