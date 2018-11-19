<?php include('header.php');
		include('menu_home.php');
?>	

<link rel="stylesheet" href="/online_bank/css/jquery-ui-1.10.4.custom.css" type="text/css" />
<script type="text/javascript" src="/online_bank/js/jquery-1.10.2.js"></script>
<script type="text/javascript" src="/online_bank/js/jquery-ui-1.10.4.custom.js"></script>
	
    
    <script type="text/javascript">
	$(document).ready(function() {
		$( "#click1" ).click(function( event ) {  
			$( "#contact" ).dialog( "open" );
			event.preventDefault();
		}); 
		$('#contact').dialog({      
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
					text: "Add",
            click: $.noop,
			type: "reset",
            type: "submit",
			form: "contact"
				},
				{
					text: "Cancel",
					type:"reset",
					form:"contact",
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
<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFCC">
  <tr>
    <td width="59%" rowspan="2"><p>For any issues/clarifications only you may please contact:</p>
      <ul>
        <li>Pryangan &amp; Team</li>
        <li>Helpdesk :8586036520, 9883405964, 27566501, 27566067</li>
        <li>(Monday to Friday : 9.00am to 7.00 pm, Saturday :10.00 am to 6.00 pm)</li>
        <li>Fax : 022 - 27563478</li>
         <li>Email :pryangan.chowdhury@gmail.com</li>
      </ul>
      <p><a href="#" title="Quick Contact" id="click1" class="ui-state-default ui-corner-all"><span class="ui-icon ui-icon-newwin">
      </span>Quick Contact</a></p>
   </td>
    <td width="41%" align="right"><img src="/online_bank/images/download.jpg" width="400" height="145" /></td>
  </tr>
  <tr>
   
    <td align="right"><img src="/online_bank/images/Axis-Bank-Internet-Banking1.jpg" width="400" height="127" /></td>
  </tr>
</table>

<form method="post" name="contact" title="Quick Contact Form" action="#" id="contact"> 
                     	<table align="center">
                            <tr><td>Name:</td> <td><input name="author" type="text" class="input_field" id="author" maxlength="60" /></td></tr> 
                                         
                             <tr><td>Email:</td> <td><input name="email" type="text" class="input_field" id="email" maxlength="60" /> </td></tr>
                                                    
                           <tr><td> Subject:</td> <td><input name="subject" type="text" class="input_field" id="subject" maxlength="60" /> </td></tr>
                          <tr><td> Message:</td> <td><textarea id="text" name="text" rows="0" cols="0" class="required" style="decoration:none"></textarea> </td></tr>
                                                
                        	<input type="submit" class="submit_btn float_l" name="submit" id="submit" value="Send" /> 
                        	
                           </table>          
                    </form>

<?php
include('footer.php');
?>