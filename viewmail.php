<?php
include("dbconnection.php");
$mailarray = mysql_query("select * from mail");
?>		
<body bgcolor="#FFFFCC">   <table width="901" border="1" style="background-color:#FCC">
      <tr>
        <th width="105" scope="col">MAIL ID</th>
        <th width="93" scope="col">SUBJECT</th>
        <th width="101" scope="col">MESSAGE</th>
        <th width="144" scope="col">MESSAGE DATE TIME</th>
        <th width="188" scope="col">SENDER ID</th>
        <th width="132" scope="col"><p>RECEIVER ID</p></th>
      </tr>
      <?php	
 while($mail = mysql_fetch_array($mailarray))
	  {
echo "
      <tr>
        <td>&nbsp;$mail[mailid]</td>
        <td>&nbsp;$mail[subject]</td>
        <td>&nbsp;$mail[message]</td>
        <td>&nbsp;$mail[mdatetime]</td>
        <td>&nbsp;$mail[senderid]</td>
        <td>&nbsp;$mail[reciverid]</td>
        
      </tr>";
	  }
	  ?>
    </table>
</body>