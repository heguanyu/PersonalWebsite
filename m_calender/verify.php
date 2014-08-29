<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Guanyu He | Student @ UPenn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<link href="../navStyle.css" rel="stylesheet" type="text/css">
<link href="mainStyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="main.js"></script>
<script type="text/javascript" src="../js/jquery.scrollTo.js"></script>
</head>

<body>

<?php


	$con=mysqli_connect("mysql6.myregisteredsite.com","362498_Guest","Guest#123","362498_alldata");
	$type=0;	//1 for redirect
	if (mysqli_connect_errno($con))
	{
		print '<script type="text/javascript">'; 
		print 'alert("Connect Error, Please try later!")'; 
		print '</script>';   
	}
	else
	{
		if($_GET['resend']==1)
		{
			$uid = $_GET['uid'];
			$result =mysqli_query($con,"SELECT username, activationStr FROM Persons where PersonID='".$uid."'");
			if(mysqli_num_rows($result)==0)
			{
			    $type=3;
			}
			else
			{
	
				$row=mysqli_fetch_array($result);
						
				$target=$row['username'];
				$key=$row['activationStr'];
								
				$subject = 'Confirmation from M_Calender';

			$message="Welcome! \r\nThank you for creating an account.\r\nPlease confirm your account by copy and pasting the link below into your browsers address bar.\r\nhttp://guanyuhe.com/m_calender/verify.php?uid=".$uid."&key=".$key."\r\nThanks!";
			
			$headers = 'From: postmaster@guanyuhe.com' . "\r\n" .
				'Reply-To: donot-reply@guanyuhe.com' . "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				
				mail($target, $subject, $message, $headers);	
				$type=4;	

			}
		}
		else
		{
			$to = $_GET['uid'];
			$key=$_GET['key'];
			$result =mysqli_query($con,"SELECT activationStr FROM Persons where PersonID='".$to."'");
			$exists=mysqli_num_rows($result);
			if($exists==0)
			{
				$type=3;
			}
			else
			{
				$row=mysqli_fetch_array($result);
				if($row['activationStr']==$key)
				{
					mysqli_query($con,"update Persons set verified=true where PersonID='".$to."'");
					$type=1;
				}
				else
				{
					$type=2;
				}
			}
		}
	}
	mysqli_close($con);
?>


<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="..\index.php">Home</a></li>
          <li><a href="..\Rendering and Modeling.php">Rendering and Modeling</a></li>
          <li><a href="..\game.php">Game Design & Development</a></li>
		  <li><a href="..\animation.php">Animation & Effects</a></li>
          <li><a href="..\tools.php">Tools</a></li>
          <li><a href="..\contact.php">Contact Me</a></li>
          <li title="In Construction" class="active"><a href="..\m_calender\login.php">m_calender</a></li>		  

        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
           <h1><a href="index.php"><span>M_Calender</span></a> <small>Verification</small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content"> 
  <div class="content_resize">

	  <div class="mainDiv" style="font-size:24px; line-height:30px; padding-top:10px;">
		<?php
		if($type==1)
		{
		  print '<h4 style="color:#FF0000;">Verification Successful!<br/><br/></h4>';
		  print '<h4 style="color:#FF0000;">Will be redirect to Login page in 5 seconds...</h4>';
		  header("refresh:5;url=login.php");
		}
		else if ($type==2)
		{
			print '<h4 style="color:#FF0000;">Activation Key invalid, please use the link in your email or <a href="?resend=1&uid='.$to.'">Resend Activation Email</a></h4>';
			
		}
		else if ($type==3)
		{
			print '<h4 style="color:#FF0000;">User Name do not exists! You can Sign Up for free!<br/><br/></h4>';
			 print '<h4 style="color:#FF0000;">Will be redirect to Login page in 5 seconds...</h4>';
		     header("refresh:5;url=login.php");
		}
		else if ($type==4)
		{
			print '<h4 style="color:#FF0000;">Confirmation email is sent, please check your mailbox..<br/><br/></h4>';
			 print '<h4 style="color:#FF0000;">Will be redirect to Login page in 5 seconds...</h4>';
		     header("refresh:5;url=login.php");
		}
		?>	

	  </div>
  </div>
  </div>
  <div class="clr"></div>
    <div class="footer">
      <p class="lf">&copy;2013 Guanyu He</p>
	  <a href="https://www.facebook.com/profile.php?id=1807034237" target="_blank"><img src="../images/footers/fb.jpg" width="20px" height="20px"/></a>
	  <a href="http://www.linkedin.com/profile/view?id=85032118" target="_blank"><img src="../images/footers/linkedin.jpg" width="20px" height="20px"/></a>
	  <a href="https://twitter.com/Guanyu_He" target="_blank"><img src="../images/footers/twitter.jpg" width="20px" height="20px"/></a>
      <div class="clr"></div>
    </div>
	
</div>

</body>
</html>
