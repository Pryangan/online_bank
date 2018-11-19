<?php
include("dbconnection.php");
?>
<script type="text/javascript">
function valid()
{
	if(document.form1.acctype.value=="")
	{
		alert("INVALID ACCOUNT TYPE");
		return false;
	}
	if(document.form1.prefix.value=="")
	{
		alert("INVALID PREFIX");
		return false;
	}
	if(document.form1.minbalance.value=="")
	{
		alert("INVALID MINIMUMBALANCE");
		return false;
	}
	if(document.form1.interest.value=="")
	{
		alert("INVALID INTERST");
		return false;
	}
}
</script>
<?php
$m=date("Y-m-d");
if(isset($_POST["add"]))
{
$sql="INSERT INTO accountmaster (accounttype,prefix,minbalance,interest)
VALUES
('$_POST[acctype]','$_POST[prefix]','$_POST[minbalance]','$_POST[interest]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "1 record added";
}
$sql1 = mysql_query("select * from accountmaster");
?>
<body bgcolor="#FFFFCC">
    <label for="ifsccode"></label>
    <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
      <table width="507" height="179" border="0">
        <tr>
          <th scope="row">ACCOUNT TYPE</th>
          <td> <select name="acctype" id="acctype">
    <option value="">Select</option>
      <option value="Current Account">Current Account</option>
      <option value="Saving Bank Account">Saving Bank Account</option>
       <option value="Recurring Deposit Account">Recurring Deposit Account</option>
       <option value="Fixed Deposit Account">Fixed Deposit Account</option>
    </select></td>
        </tr>
        <tr>
          <th scope="row">PREFIX</th>
          <td><input type="text" name="prefix" id="prefix" /></td>
        </tr>
        <tr>
          <th scope="row">MINIMUM BALANCE</th>
          <td><input type="text" name="minbalance" id="minbalance" /></td>
        </tr>
        <tr>
          <th scope="row">INTEREST</th>
          <td><input type="text" name="interest" id="interest" /></td>
        </tr>
        <tr>
          <th colspan="2" scope="row"><input type="submit" name="add" id="add" value="ADD" />
            <input type="submit" name="update" id="update" value="UPDATE" /></th>
        </tr>
      </table>
      <p>&nbsp;</p>
    </form>
    <table width="500" border="1" style="background-color:#FCC">
      <tr>
        <th scope="col">ACCOUNT TYPE</th>
        <th scope="col">PREFIX</th>
        <th scope="col">MINIMUM BALANCE</th>
        <th scope="col">INTEREST</th>
      </tr>			
     <?php
      while($arrayvar = mysql_fetch_array($sql1))
	  {
echo "	  <tr>
        <td>&nbsp; $arrayvar[accounttype] </td>
        <td>&nbsp; $arrayvar[prefix]</td>
        <td>&nbsp; $arrayvar[minbalance] </td>
        <td>&nbsp; $arrayvar[interest]</td>
      </tr>";
	  }
	  ?>
    </table>
 </body>

