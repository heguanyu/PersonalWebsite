<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Guanyu He | Student @ UPenn</title>
<?php
    require_once COMMONPATH.'common.php';
    require_once DOCROOT.'/../package/include.php';
    Inclusion::includeCss('/common/assets/json/common.json');
    Inclusion::includeCss('/www/assets/json/page.json');
    Inclusion::includeJs('/common/assets/json/common.json');
    Inclusion::includeJs('/www/assets/json/page.json');

?>
</head>
<body>
    <script type="text/javascript">
        CORE.Events.ready(
            function() {
                console.debug('hi');
                var contents = CORE.Dom.create({});
                contents.appendChild(CORE.Dom.create({cls: 'hello',cn: 'hello'}));
                var page = new CORE.Page(
                    {
                        container: document.body,
                        contents: contents,
                        currentPage: 'profile'
                    }
                );
            }
        );
    </script>
</body>
</html>
<?php
   return;
?>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="Rendering and Modeling.php">Rendering and Modeling</a></li>
          <li><a href="game.php">Game Design & Development</a></li>
		  <li><a href="animation.php">Animation & Effects</a></li>
          <li><a href="tools.php">Tools</a></li>
          <li><a href="contact.php">Contact Me</a></li>
          <li title="WebGL Ocean"><a href="../oceanshader/water.html">WebGL Ocean(featured)</a></li>		  
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
        <h1><a href="index.php"><span>Guanyu He</span></a> <small>University of Pennsylvania</small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="content">
    <div class="content_resize">
     <div class="fbg">

	    <div class="col c4">
        <h2><span>WELCOME</span></h2>
        <p style="font-size:15px ">
			Greetings! Welcome to my Home!<br/><br/>
			I had just graduted from University of Pennsylvania, major in <a href="http://cg.cis.upenn.edu/" target="_blank">Computer Graphics and Game Technology</a> program in Computer and Information Science department. <br/><br/>
			I mainly focused on <i><b>game development</b></i> and <i><b>3D graphics</b></i>, with proficiency in <b><i>C++( and OpenGL), Javascript(and WebGL)</i></b>. I'm also passionate with <i><b>building tools</b></i>,<i><b>website development(full stack)</b></i> for all sorts of industry, including consulting, finance, chemistry, etc.<br/><br/>
		
		Please take a surf at this site, especially <b><i><a href="oceanshader/water.html">WebGL Ocean</a></i></b>, <b><i><a href="game.php">DeadEnd promotion video</a></i></b>, <b><i><a href="#resume" style="font-size:15px">Resume and Demo Reel</a></i></b>, and feel free to contact me if needed!
		  
		</p>
      </div>
	  <div class="col c4">
	  <div class="col c1"style="width:550px; left:-20%">
	    <div class="slideshow" id="ss1" >
			<div ><img src="images/slideshow1/1.jpg"></div>
			<div ><img src="images/slideshow1/2.jpg"></div>
			<div ><img src="images/slideshow1/8.bmp"></div>
			<div><img src="images/slideshow1/4.jpg"></div>
			<div><img src="images/slideshow1/5.jpg"></div>
			<div><img src="images/slideshow1/6.jpg"></div>
			<div><img src="images/slideshow1/7.jpg"></div>
			<div><img src="images/slideshow1/8.jpg"></div>
     	</div>
		</div>
		<div class="col c1" style="width:200px; left:0%">
	    <div class="slideshow" id="ss2" style="float:left">
			<div ><img src="images/slideshow2/1.jpg"></div>
			<div ><img src="images/slideshow2/2.jpg"></div>
			<div ><img src="images/slideshow2/3.png"></div>
			<div><img src="images/slideshow2/4.jpg"></div>
	    </div>
		</div>
		
		<div class="clr"></div>
		<div class="col c1" style="width:800px; left:0%">
		<h2>It is much better than Demo Reel!<br/></h2>
		<video width="1024" height="768" controls>
		  <source src="video/self_ads.mp4" type="video/mp4">
			Your browser does not support the video tag.
		</video>
		</div>
	    </div>
		
		 <div class="col c4" id="resume">
	  
        <h2><span>Resume and Demo Reel</span></h2>
		<h3 style="font-size:18px; color:#000000"><span>I have strong background in CS fundamental, while my minor interest focus on computer graphics field.</span></h3>
     	<!--<div class="col c1"><h3><span>For CS fundamental Recruiters</span></h3><a href="resume/resume_cs.pdf" target="_blank">Click here</a></div>-->
		<div class="col c1"><h3><span>For My Graphic background</span></h3><a href="resume/resume_graphic.pdf" target="_blank">Click Here</a></div>
		<div class="col c1"><h3><span>For my latest Demo Reel</span></h3><a href="http://youtu.be/qTQri-9J9PY" target="_blank">Click Here</a></div>
	  </div>
	    	  	  
      <div class="col c4">
	  
        <h2><span>My Works</span></h2>
		<div class="col c1"><h3><span>Rendering & Modeling</span></h3><a href="Rendering and Modeling.php">
		<img src="images/glassboard.jpg"  width="200" height="150" alt="" /></a></div>
		<div class="col c1"><h3><span>Animation & Effects</span></h3><a href="animation.php">
		<img src="images/beatit.jpg" width="200" height="150" alt="" /></a></div>
		<div class="col c1"><h3><span>Game Design & Develop</span></h3><a href="game.php">
		<img src="images/DeadEnd.jpg" width="200" height="150" alt="" /></a></div>
		<div class="col c1"><h3><span>Tools and Others</span></h3><a href="tools.php">
		<img src="images/calender.jpg" width="200" height="150" alt="" /></a></div>
	  </div>
	  

		<div class="clr"></div>
      
      <div class="clr"></div>
    </div>

   <div class="clr"></div>
   </div>
 </div>
  
  
  
  <div class="footer">

      <p class="lf">&copy;2013 Guanyu He</p>
	  <a href="https://www.facebook.com/profile.php?id=1807034237" target="_blank"><img src="images/footers/fb.jpg" width="20px" height="20px"/></a>
	  <a href="http://www.linkedin.com/profile/view?id=85032118" target="_blank"><img src="images/footers/linkedin.jpg" width="20px" height="20px"/></a>
	  <a href="https://twitter.com/Guanyu_He" target="_blank"><img src="images/footers/twitter.jpg" width="20px" height="20px"/></a>
      <div class="clr"></div>

  </div>
  
</div>
</body>
</html>
