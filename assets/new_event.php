<!-- Creates a new event and stores in the database-->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Create a new event</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
     body {
        padding-top: 20px;
        padding-bottom: 40px;
      }
	.container-narrow {
        margin: 0 auto;
        max-width: 700px;
		
      }
	  .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<script>
	function validate()
	{
	
	var count=0;
	var exp1=/^[a-zA-Z]*$/ //for text city 
	var exp2=/^[0-9]*$/ //for number
	var exp3=/^(\w|\.)*@[a-z]*\.[a-z]*$/ // for email
	var exp4=/^(\w|\.)*@[a-z]*\.[a-z]*\.[a-z]*$/ // for email like .co.in
	
	var name=document.register.name.value;
	
	//var bannertxt=document.register.bannertxt.value;

	//var abouttxt=document.register.abouttxt.value;
	var emailid=document.register.email.value;
	//var address=document.register.address.value;	
	var noofseats=document.register.noofseats.value;
	var date=document.register.closing_dates.value;;
	
	if(name==null || name=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Name";
		return false;
	}
	/*else if(bannertxt==null || bannertxt=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Banner Text";
		return false;
	}
	else if(abouttxt==null || abouttxt=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Description";
		return false;
	}*/
	else if(emailid==null || emailid=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Email id";
		return false;
	}
	/*else if(address==null || address=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Address";
		return false;
	}*/
	else if(noofseats==null || noofseats=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Number of seats";
		return false;
	}
	else if(date==null || date=="")
	{
		document.getElementById('contact_error').innerHTML="Please Enter Closing Date";
		return false;
	}
	else
	{
		
		if(exp1.test(name))
		{
			count++;
			
		}
		else
		{
			document.getElementById('contact_error').innerHTML="Please Enter Valid Name";
			return false;
		}
		
		/*if(exp1.test(bannertxt))
		{
			count++;
			
		}
		else
		{
			document.getElementById('contact_error').innerHTML="Please Enter Valid Banner Text";
			return false;
		}
		if(exp1.test(abouttxt))
		{
			count++;
			
		}
		else
		{
			document.getElementById('contact_error').innerHTML="Please Enter Valid About Text";
			return false;
		}*/
		if(exp3.test(document.register.email.value))
			{
				count++;
				
			}
			else
			{
				if(exp4.test(document.register.email.value))
				{
					count++;
					
				}
				else
				{
					document.getElementById('contact_error').innerHTML="Please Enter Valid Email Id";
					return false;
				}
			}
		
		if(exp2.test(noofseats))
		{
			count++;
			
		}
		else
		{
			document.getElementById('contact_error').innerHTML="Please Enter Valid number of seats";
			return false;
		}
		
		
	}
	
		if(count==3)
		return true;	
		else
		return false;
	
	}

  </script>
  
  
  
 
  
 
  </head>

  <body>
<!-- Top banner -->
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Project name</a>
          <div class="nav-collapse collapse">
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">Nav header</li>
                  <li><a href="#">Separated link</a></li>
                  <li><a href="#">One more separated link</a></li>
                </ul>
              </li>
            </ul>
            <form class="navbar-form pull-right">
			<ul class="nav">
              <li class="active"><a href="#">Register</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
            
             </form>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
<!-- Form Display -->
    <div class="container-narrow">
	<br>
	<br>
	<div class="span-3 offset2">
	<h2 class="form-signin-heading">New Event</h2>
	</div>
	<br>
	<div class="row-fluid offset1">
		<br><br><br>
		<form name="register" method="post" action="new_event_db.php" onsubmit="return validate()">
			<div class="span4">
      				<input type="text" placeholder="Name of the event*" name="name">
	  			<textarea rows="3" placeholder="Banner text*" name="bannertxt"></textarea> 
	 			<textarea rows="3" placeholder="About text*" name="abttxt"></textarea> 
	  		</div>
	  		<div class="span4">
	  			<input type="text" placeholder="contact email" name="email">
	 			<textarea rows="3" placeholder="Contact info" name="address"></textarea> 
	  			<input type="text" placeholder="Number of seats" name="noofseats">
	  			<input type="text" placeholder="Closing date" name="closing_dates"></div>
	  		</div>
			<br><br>
			 <!--keep this code before the send button-->
  			<div id="contact_error" style="color:red;"></div><br>
	  		<br><br>
	  		<div class="span3 offset3">
	   			<input type="submit" class="btn btn-large btn-primary" value="submit" ></input>
	  		</div>
	  	</form>
       </div> <!-- /container -->

   </body>
</html>
