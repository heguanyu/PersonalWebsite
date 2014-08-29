<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Guanyu He | Student @ UPenn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="navStyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script> 	
<script type="text/javascript" src="js/snake.js"></script>

</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="Rendering and Modeling.php">Rendering and Modeling</a></li>
          <li class="active"><a href="game.php">Game Design & Development</a></li>
		  <li><a href="animation.php">Animation & Effects</a></li>
          <li><a href="tools.php">Tools</a></li>
          <li><a href="contact.php">Contact Me</a></li>
         <li title="WebGL Ocean"><a href="../oceanshader/water.html">WebGL Ocean(featured)</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
           <h1><a href="index.php"><span>Guanyu He</span></a> <small>Game Design and Development</small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  
  <div class="content">
  <div class="content_resize">
  <div class="fbg">
  <div class="col c4"> 
  
  	<div class="col c2">
		  <h3 style="color:#000000; font-size:20px"><span>Dead End(Featured Work)</span></h3>
		  
			<object width="425" height="350">
			  <param name="movie" value="https://youtube.googleapis.com/v/taSFhW1-WEg" />
			  <param name="wmode" value="transparent" />
			  <embed src="https://youtube.googleapis.com/v/taSFhW1-WEg"
					 type="application/x-shockwave-flash"
					 wmode="transparent" width="425" height="350" />
			</object>

		  </h3>
	</div>
  	<div class="col c2">
		  <h3><span>Programmer Battle</span></h3>

		  <a href="#float0" onclick="return false;" >

		  	<img src="images/programmerbattle/4.png"  height="350px" width="425px" alt="" class="floatTriggerButton"/>
			</a>
	</div>
	<div class="clr"></div>
	
	<div class="col c2">
		  <h3><span>Hide And Seek</span></h3>
		  
			<object width="425" height="350">
			  <param name="movie" value="https://youtube.googleapis.com/v/r1JOZ4cdmqc" />
			  <param name="wmode" value="transparent" />
			  <embed src="https://youtube.googleapis.com/v/r1JOZ4cdmqc"
					 type="application/x-shockwave-flash"
					 wmode="transparent" width="425" height="350" />
			</object>

		  </h3>
		</div>

	<div class="col c2">
		  <h3><span>Asteroid_Simple</span></h3>
		  
			<object width="425" height="350">
			  <param name="movie" value="https://youtube.googleapis.com/v/zxQx4NJ6mao" />
			  <param name="wmode" value="transparent" />
			  <embed src="https://youtube.googleapis.com/v/zxQx4NJ6mao"
					 type="application/x-shockwave-flash"
					 wmode="transparent" width="425" height="350" />
			</object>

		  </h3>
	</div>
    <div class="clr"></div>
	<div class="col c2" >
	  <h3><span><a href="#float1" class="floatTriggerButton">Snake</a></span></h3>
	  <div style="border:solid 1px #000000">
		<h6 style="font-size:14px; text-align:left; font-style:normal; color:#000000" >
			This is a traditional Snake game from Nokia. I implement it only using<b><i> HTML Canvas</i></b> technique, scripted it with javascript within around 100 lines of code.(no jquery)<br/><br/>
			The game rule is easy: The length of snake will increase after eating food(shown as circle) and new food will be spawned on the map. There is no wall on the margin, which means that you can go through the boundary and appear on the other side. No score system is included, but the longer you when die, the better you are at this game.<br/><br/>
			Controlling: Use WSAD to controll the snake.<br/><br/>
			Start game: Click on the "Snake"
		</h6>
		</div>

	</div>	

  </div>
  </div>


  </div>
  </div>
  <div class="clr"></div>
  <div class="footer">

      <p class="lf">&copy;2013 Guanyu He</p>
	  <a href="https://www.facebook.com/profile.php?id=1807034237" target="_blank"><img src="images/footers/fb.jpg" width="20px" height="20px"/></a>
	  <a href="http://www.linkedin.com/profile/view?id=85032118" target="_blank"><img src="images/footers/linkedin.jpg" width="20px" height="20px"/></a>
	  <a href="https://twitter.com/Guanyu_He" target="_blank"><img src="images/footers/twitter.jpg" width="20px" height="20px"/></a>
      <div class="clr"></div>

  </div>

  
</div></div>

  <div class="floatArea" id="float1" style="width:503px;height:530px;">
    <div class="floatAreaContent" >
		<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav" style="font-size:14px; color:#FFFFFF">
		Simple Snake Game: Use WSAD to control the snake!
		<button>X</button>
		</ul>
		</div>
		<canvas id="myCanvas" width="500" height="500" style="border:1px solid #000000;">
		</canvas>
  </div></div>
  
  <div id="float0" class="floatArea">
<div id="floatcontent0" class="floatAreaContent"> 
	<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav">
		  <li id="pb1"><a href="#tab1" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/programmerbattle/4.png" style="width:50px; height:50px"/></a></li>
		  <li id="pb2"><a href="#tab2" rel="slideBoard" onclick="return false;" >
			<img src="images/programmerbattle/3.png" style="width:50px; height:50px"/></a></li>
		  <li id="pb3"><a href="#tab3" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/programmerbattle/2.png" style="width:50px; height:50px"/></a></li>
		  <li id="pb4"><a href="#tab4" rel="slideBoard" onclick="return false;" >
			<img src="images/programmerbattle/1.png" style="width:50px; height:50px"/></a></li>

		  <li id="Introduction"><a href="#tab5" rel="slideBoard" onclick="return false;">Introduction</a></li>

		  <button>X</button>
		</ul>
	</div>
	<div id="content1" class="slide_content"  style="width:99%">
	  <div id="mask1" class="slide_mask" style="height:500px">
	  <div id="panel1" class="slide_panel">
		  <div id="tab1" style="height:510px">
			  <img src="images/programmerbattle/4.png"/ >
		  </div>
		  <div id="tab2" >
		    <img src="images/programmerbattle/3.png"/ >
		  </div>
		  <div id="tab3" >
			  <img src="images/programmerbattle/2.png" />
		  </div>
		  <div id="tab4" >
			  <img src="images/programmerbattle/1.png" /> 
		  </div>
  		  
		  <div id="tab5" style="font-size:16px; color:#000000">
		  	  The project is Maya Authroing Tool project. Our tool can help artist with rendering simple Maya Scene using fast-path-tracing method which is around 20 times faster than regular monte-carlo algoritm.<br/><br/>
			  We start our work based on <i>Reconstruct the Indirect Light Field for Global Illumination, Lehtinen et al., Siggraph 2012</i>. The core idea of this method is to reuse the information which is acquired from low-sample-rate path tracing. As we know, the material of most stuff in the real-world are diffuse material, and for the others are generally glass. For a point on diffuse surface, it will collect all the rays from everywhere and evenly emit it to all directions. Therefore, we will have the information of each point even if we only trace one ray that shoot on it. By introducing such idea, we can acquire the information of every primary hit point from camera with low-sample rate and low-iteration times, and reconstruct the indirect light field based on these information.<br/><br/>
			  The authoring tool can collect parts of information from the scene, including the geometry ,transform, material of each object and camera, light information. Then it will render the scene using fast-path-tracing method and then show the result in rendering window in Maya. <br/><br/>
			  
		  </div>
		  
		  
	  </div>
	</div>
	</div>
</div>
</div>


</body>
</html>
