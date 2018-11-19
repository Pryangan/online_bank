<?php
session_start();
include("header.php");
include("menu_home.php");
include("dbconnection.php");
if(isset($_SESSION['customerid']))
{
	header("Location: accountalerts.php");
}
if(isset($_SESSION["adminid"]))
{
	header("Location: admindashboard.php");
}


?>
<?php
if(isset($_POST["loginadmin"]))
{
		//coding for login the employee account
	$result = mysql_query("SELECT * FROM employees
	WHERE loginid='$_POST[adminlogin]' AND password='$_POST[adminpass]'");


	if(mysql_num_rows($result) == 1)
	{
		$_SESSION["adminid"] =$_POST["adminlogin"];
		header("Location: admindashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}
}
?>

<link rel="stylesheet" href="/online_bank/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/online_bank/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/online_bank/js/jquery-ui-1.10.4.custom.js"></script>
	
    
    <script type="text/javascript">
	$(document).ready(function() {
		$( "#click1" ).click(function( event ) {  
			$( "#form1" ).dialog( "open" );
			event.preventDefault();
		}); 
		$('#form1').dialog({      
			show:"bounce",
			hide:"fold",
			width:440,
			autoOpen: false,
			open: function() {
        	// On open, hide the original submit button
       		 $( this ).find( "[type=submit]" ).hide();
    			},
			buttons: [				
				{
					text: "Login",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "form1"
				},
				{
					text: "Cancel",
					type:"reset",
					form:"form1",
					click: function() {
						$( this ).dialog( "close" );
					}
				}
			]
			
		});
		 $('#click1').tooltip({		
			show:'slideDown',
			hide:'explode'	 
		 });
	});
	</script>
    
    <style type="text/css">
	font: 62.5% "Trebuchet MS", sans-serif;
		margin: 50px;
	}
	.demoHeaders {
		margin-top: 2em;
	}
	#click1 {
		padding: .4em 1em .4em 20px;
		text-decoration: none;
		position:relative;
	}
	#click1 span.ui-icon {
		margin: 0 5px 0 0;
		position: absolute;
		left: .2em;
		top: 50%;
		margin-top: -8px;
	}
	#icons {
		margin: 0;
		padding: 0;
	}
	#icons li {
		margin: 2px;
		position:relative;
		padding: 4px 0;
		cursor: pointer;
		float: left;
		list-style: none;
	}
	#icons span.ui-icon {
		float: left;
		margin: 0 4px;
	}
	.fakewindowcontain .ui-widget-overlay {
		position: absolute;
	}#one{
		width:400px;
	}
	#menu{
		background-color:rgb(255,100,100);;
		width:100%;
		height:40px;
	}
	.ui-tooltip{
		background:#B8F1A9;
		color:#FFF;
	}
	</style>	

    
                                    <h2>please note</h2>
                                    <p>You should know how to operate net transaction and if you are not familiar you may refrain from doing so. You may seek banks guidance in this regard. Bank is not responsible for online transactions going wrong</p>
                                    
                               
     <p class="welcome_text">&quot;<strong>Login page:<br />
       Please enter user id and password to login</strong>&quot;</p>
    
<div>

  <center>
  <form id="form2" name="form1" method="post" action="">
    <p>
      <strong>
      <label for="login" class="leftal">USER ID </label>
      </strong>
      <input name="login" type="text" id="login" size="40"  class="rightal"/>
    </p>
    <p>&nbsp; </p>
    <p class="cleaner_h50" id="password">
      <label for="password"  class="leftal"><strong>PASSWORD</strong></label>
      <input name="password" type="password" id="password" class="rightal" size="40" />
    </p>
    <p class="cleaner_h50">
      <input type="submit" name="btnlogin" id="btnlogin" value="Login" />
    </p>
  </form>
  <p><a href="#" title="For admin login" id="click1" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin">
      </span>Admin Login</a></p>
      <form id="form1" name="form1" method="post" action="" title="Admin Login">
   
      <table><tr><td>Loginid</td><td>
      <input name="adminlogin" type="text" id="adminlogin" required="required"/></td></tr>
    <tr><td>password</td><td>
      <input name="adminpass" type="password" id="adminpass" required="required"/></td></tr>
  
     <input  name="loginadmin" type="submit"  id="loginemp" />
    </table>
  </form>
  
  <?php
  if(isset($_POST['btnlogin']))
  {
  $result = mysql_query("SELECT * FROM customers  WHERE loginid='$_POST[login]' AND accpassword='$_POST[password]'");

if(mysql_num_rows($result) == 1)
	{
		while($recarr = mysql_fetch_array($result))
		{
			
		$_SESSION['customerid'] = 	$recarr['customerid'];
		$_SESSION['ifsccode'] = 	$recarr['ifsccode'];
		$_SESSION['customername'] = 	$recarr['firstname']. " ". $recarr['lastname'];
		$_SESSION['loginid'] = 	$recarr['loginid'];
		$_SESSION['accstatus'] = 	$recarr['accstatus'];
		$_SESSION['accopendate'] = 	$recarr['accopendate'];
		$_SESSION['lastlogin'] = 	$recarr['lastlogin'];		
		}
		$_SESSION['loginid'] =$_POST['login'];
		header("Location: accountalerts.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
		echo "<script type='text/javascript'>alert('$logininfo');</script>";
	}	
  }
  ?>
  </center>
    <?php
	include("footer.php");
	?>