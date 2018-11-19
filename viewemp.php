<?php

include("dbconnection.php");
$emparray = mysql_query("select * from employees");
?>
<body bgcolor="#FFFFCC">	
    <table width="901" border="1" style="background-color:#FCC">
    	<tr>
      <th colspan="6" scope="col"><a href="addemployee.php">ADD EMPLOYEE</a></th>
    </tr>
      <tr>
        <th width="105" scope="col">EMPLOYEE ID</th>
        <th width="93" scope="col">EMP NAME</th>
        <th width="101" scope="col">LOGIN ID</th>
        <th width="144" scope="col">EMAIL ID</th>
        <th width="188" scope="col">CONTACT NO</th>
        <th width="132" scope="col">CREATE DATE</th>
        <th width="332" scope="col">LAST LOGIN</th>
      </tr>
      <?php	
 while($employee = mysql_fetch_array($emparray))
	  {
echo "
      <tr>
        <td>&nbsp;$employee[empid]</td>
        <td>&nbsp;$employee[employee_name]</td>
        <td>&nbsp;$employee[loginid]</td>
        <td>&nbsp;$employee[emailid]</td>
        <td>&nbsp;$employee[contactno]</td>
        <td>&nbsp;$employee[createdat]</td>
        <td>&nbsp;$employee[last_login]</td>
      </tr>";
	  }
	  ?>
    </table> 