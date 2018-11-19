<?php

include("dbconnection.php");
$brancharray = mysql_query("select * from branch");
?>
<body bgcolor="#FFFFCC">
  <table width="883" border="1" style="background-color:#FCC">
    
    <tr>
      <th width="113" scope="col">IFSC CODE</th>
      <th width="133" scope="col">BRANCH CODE</th>
      <th width="87" scope="col">CITY</th>
      <th width="162" scope="col">BRANCH ADDRESS</th>
      <th width="114" scope="col">STATE</th>
      <th width="160" scope="col">COUNTRY</th>
    </tr>
      <?php	
 while($branch = mysql_fetch_array($brancharray))
	  {
echo " <tr>
      <td>&nbsp;$branch[ifsccode]</td>
      <td>&nbsp;$branch[branchname]</td>
      <td>&nbsp;$branch[city]</td>
      <td>&nbsp;$branch[branchaddress]</td>
      <td>&nbsp;$branch[state]</td>
      <td>&nbsp;$branch[country]</td>
    </tr>";
	  }
	  ?>
  </table></body>