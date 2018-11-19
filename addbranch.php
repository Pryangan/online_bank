<?php
include("dbconnection.php");
?>
<script type="text/javascript">
function valid()
{
	if(document.form1.ifsccode.value=="")
	{
		alert("Invalid ifsccode");
		return false;
	}
	if(document.form1.branchname.value=="")
	{
		alert("Invalid branchname");
		return false;
	}
	
     if(document.form1.city.value=="")
	  {
		alert("Invalid city");
		return false;
	  }
	  if(document.form1.branchaddress.value=="")
	{
		alert("Invalid branchaddress");
		return false;
	}
	if(document.form1.country.value=="")
	{
		alert("Invalid country");
		return false;
	}
	if(document.form1.state.value=="")
	{
		alert("Invalid state");
		return false;
	}
}

  function isNumberKey(evt)
      {

         var charCode = (evt.which) ? evt.which : event.keyCode
		//alert(charCode);
         if (charCode > 65 && charCode < 91 )
      	 {              
		 return true;
	 }
	 else if (charCode > 96 && charCode < 122 )
      	 {
		 return true;
	 }
	 else
	 {
                             alert("should be alphabet");
	  	return false;
	 }
     }
</script>
<?php
$m=date("Y-m-d");
if(isset($_POST["addbranch"]))
{
$sql="INSERT INTO branch (ifsccode, branchname,city,branchaddress,	state,country)
VALUES
('$_POST[ifsccode]','$_POST[branchname]','$_POST[city]','$_POST[branchaddress]','$_POST[state]','$_POST[country]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
 ?><script type="text/javascript">alert(<?php echo "1 record added";?>);</script><?php
}
?>
<body bgcolor="#FFFFCC">       
    <label for="ifsccode"></label>
         <form onsubmit="return valid()" id="form1" name="form1" method="post" action="">
      <table width="739" border="0">
        <tr>
          <th height="36" scope="row">IFSC CODE </th>
          <td><input type="text" name="ifsccode" id="ifsccode" /></td>
        </tr>
        <tr>
          <th height="38" scope="row">BRANCH NAME</th>
          <td><input type="text" name="branchname" id="branchname"   onKeyPress="return isNumberKey(event)"/></td>
        </tr>
        <tr>
          <th height="32" scope="row"><label for="city">CITY</label>          </th>
          <td><input type="text" name="city" id="city"   onKeyPress="return isNumberKey(event)"/></td>
        </tr>
        <tr>
          <th height="97" scope="row"><label for="branchaddress2">BRANCH ADDRESS</label>          </th>
          <td><textarea name="branchaddress" id="branchaddress" cols="45" rows="5"></textarea></td>
        </tr>
        <tr>
          <th height="39" scope="row"><label for="country2">COUNTRY</label>          </th>
          <td><select name="country" id="country">
            <option value="PAKISTAN">PAKISTAN</option>
            <option value="ENGLAND">ENGLAND</option>
            <option value="India">India</option>
          </select></td>
        </tr>
        <tr>
          <th height="37" scope="row"><label for="state2">STATE</label>          </th>
          <td><select name="state" id="state">
            <option value="DELHI">DELHI</option>
            <option value="KOLKATA">KOLKATA</option>
            <option value="FARIDABAD">FARIDABAD</option>
            <option value="Karnataka">Karnataka</option>
            <option value="MAHARASTRA">MAHARASTRA</option>
            <option value="TAMILNAD">TAMILNAD</option>
            <option value="Karnataka">Karnataka</option>
          </select></td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <th scope="row">&nbsp;</th>
          <td><input type="submit" name="addbranch" id="addbranch" value="ADD BRANCH" /></td>
        </tr>
      </table>

    </form>
  
</body>
            
            