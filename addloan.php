<?php

include("dbconnection.php");
?> 

<?php
$m=date("Y-m-d");
if(isset($_POST["add"]))
{
$sql="INSERT INTO loantype (loantype,prefix,maximumamt,minimumamt,interest,status)
VALUES
('$_POST[acctype]','$_POST[prefix]','$_POST[maxamt]','$_POST[minamt]','$_POST[interest]','$_POST[accstatus]')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
$sql2 = mysql_query("select * from loantype");
?>

<body bgcolor="#FFFFCC">
         <p>
    <label for="ifsccode"></label>
    <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
      <p>
        <label for="loantype">LOAN TYPE</label>
        <select name="acctype" id="acctype">
    <option value="">Select</option>
      <option value="Personal Loan">Personal Loan</option>
      <option value="Home Loan">Home Loan</option>
       <option value="Vehicle Loan">Vehicle Loan</option>
       <option value="Loan Against Property">Loan Against Property</option>
       <option value="Business Loan">Business Loan</option>
       <option value="Education Loan">Education Loan</option>
    </select>
      </p>
      <p>
        <label for="prefix">PREFIX</label>
        <input type="text" name="prefix" id="prefix" />
      </p>
      <p>MAXIMUM AMOUNT 
        <label for="maxamt"></label>
        <input type="text" name="maxamt" id="maxamt" />
      </p>
      <p>MINIMUM AMOUNT
        <label for="minamt"></label>
        <input type="text" name="minamt" id="minamt" />
      </p>
      <p>INTEREST 
        <label for="interest"></label>
        <input type="text" name="interest" id="interest" />
      </p>
      <p>ACCOUNT STATUS 
    <label for="textfield"></label>
    <select name="accstatus" id="accstatus">
    <option value="">Select</option>
      <option value="active">active</option>
      <option value="inactive">inactive</option>
    </select>
  </p>
      <p>
        <input type="submit" name="add" id="add" value="ADD" />
      </p>
    </form>
    <table width="758" border="1">
      <tr>
        <th width="120" scope="col">LOAN  TYPE</th>
        <th width="101" scope="col">PREFIX</th>
        <th width="188" scope="col">MAXIMUM AMOUNT</th>
        <th width="162" scope="col">MINIMUM AMOUNT</th>
        <th width="79" scope="col">INTEREST</th>
        <th width="68" scope="col">STATUS</th>
      </tr>
      <?php
       while($arrayvar = mysql_fetch_array($sql2))
	  {
     echo " <tr>
        <td>&nbsp;$arrayvar[loantype]</td>
        <td>&nbsp;$arrayvar[prefix]</td>
        <td>&nbsp;$arrayvar[maximumamt]</td>
        <td>&nbsp;$arrayvar[minimumamt]</td>
        <td>&nbsp;$arrayvar[interest]</td>
        <td>&nbsp;$arrayvar[status]</td>
      </tr>
	  ";
	  }	
      ?>
     
    </table>
   </body> 