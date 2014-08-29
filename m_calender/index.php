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


$uid=$_COOKIE["UserID"];
if(!($uid!=null && $uid>0))
{
header("refresh:0;url=login.php");
}
$errtype=4;

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
           <h1><a href="index.php"><span>M_Calender</span></a> <small>In Construction</small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content"> 
  <div class="content_resize">
	  <div class="sideDiv"> 
		<table style="width:100%;padding:0;-webkit-user-select:none; color:#FFFFFF">
		  <tbody>
		  <?php 
		  	$date=time();
			$day=date('d',$date);
			$month=date('m',$date);
			$year=date('y',$date);	
			$monthoffset=$_GET['moffset'];if($monthoffset==null)$monthoffset=0;
			$yearoffset=$_GET['yoffset'];if($yearoffset==null)$yearoffset=0;
			$month=$month+$monthoffset;
			if($month<=0)
			{
			  $month=$month+12;
			  $monthoffset=$monthoffset+12;
			  $yearoffset=$yearoffset-1;
			}
			if($month>12)
			{
			  $month=$month-12;
			  $monthoffset=$monthoffset-12;
			  $yearoffset=$yearoffset+1;
			}
			
			$year=$year+$yearoffset;
			
			$first=mktime(0,0,0,$month,1,$year);
		    $monthname=date('F',$first);
			$dayofweek=date('N',$first);
			$dayoflastmonth=cal_days_in_month(0,$month-1,$year);
			$dayofthismonth=cal_days_in_month(0,$month,$year);
			?>
			
		<?php
			 print '<tr>';
			 print '<td colspan="1"><a href="?moffset='.($monthoffset-1).'&yoffset='.$yearoffset.'" style="color:#ffffff" >&lt;</a></td>'; 
			 print '<td colspan="5">'.$monthname.' '.$year.'</td>';
			 print '<td colspan="1"><a href="?moffset='.($monthoffset+1).'&yoffset='.$yearoffset.'" style="color:#ffffff" >&gt;</a></td>'; 
			 print '</tr>';
		  ?>
			
			<tr>
				<td colspan="1"> Sun </td>
				<td colspan="1"> Mon </td>
				<td colspan="1"> Tue </td>
				<td colspan="1"> Wed </td>
				<td colspan="1"> Thu </td>
				<td colspan="1"> Fri </td>
				<td colspan="1"> Sat </td>
			</tr>
			<?php
			
			$now=1-$dayofweek;
			if($now==-6) $now=1;
			for($row=0;$row<5;$row++)
			{
				print '<tr>';
				for($col=0;$col<7;$col++)
				{
					$x=$now;
					$thismonth=true;
					if($x<=0)
					{
					  $x+=$dayoflastmonth;
					  $thismonth=false;
					}
					else if ($x>$dayofthismonth)
					{
					  $x-=$dayofthismonth;
					  $thismonth=false;
					}
					if($thismonth)	print '<td colspan="1" style="color:#FFFFFF"> '.$x.' </td>';
					else print '<td colspan="1" style="color:#000000"> '.$x.' </td>';
					$now++;
				}
				print '</tr>';
			}
			?>
		  </tbody>
		</table>

		 
		<?php
		//$errtype=$_GET["loginerr"];
		if($errtype==1)
		{
		  print '<h4 style="color:#FF0000;">Invalid Password or Username, please try again!</h4>';
		}
		else if($errtype==2)
		{
		  print '<h4 style="color:#FF0000;">User not verified, please verify using link in your mailbox or <a href="verify.php?resend=1&uid='.$uid.'">Resend Email</a></h4>';
		}
		else if($errtype==3)
		{
		  print '<h4 style="color:#FF0000;">Username does not exist, use the button below to Sign Up now!</h4>';
		}
		else if($errtype==4)		
		{
			print '<h4 style="color:#FF0000;">UserID='.$uid.'</h4>';
		}
		?>			  

	  </div>
	  <div class="mainDiv">
		Welcome to M_Calender!<br/><br/>
		This is a calender that can help you recording your schedules and remind you via email. The entire tool and source codes are authorized by Guanyu He. All rights reserved.<br/><br/>
		<img src="#"/>screenshots
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
