<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Guanyu He | Student @ UPenn</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="navStyle.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/jquery.scrollTo.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="Rendering and Modeling.php">Rendering and Modeling</a></li>
          <li><a href="game.php">Game Design & Development</a></li>
		  <li><a href="animation.php">Animation & Effects</a></li>
          <li><a href="tools.php">Tools</a></li>
          <li><a href="contact.php">Contact Me</a></li>
          <li title="WebGL Ocean"><a href="../oceanshader/water.html">WebGL Ocean(featured)</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="logo">
           <h1><a href="index.php"><span>Guanyu He</span></a> <small>Rendering and Modeling</small></h1>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  
  <div class="content">
  <div class="content_resize">
  <div class="fbg">

  <div class="col c4"> 
  		<div class="col c2">
		  <h3 style="color:#000000; font-size:20px"><span>GPU(Cuda) Ray Tracing(Featured Work)</span></h3>
		  <a href="#float4" onclick="return false;"><img src="images/gpuraytracing/glassboard.jpg"  width="425" height="313" alt="" class="floatTriggerButton"/></a></h3>
		</div>
				
		<div class="col c2">
		        
		

		  <h3><span>Fast Path Tracer</span></h3>

		  <a href="#float0" onclick="return false;" >

		  	<img src="images/fastpathtracer/title.jpg"  width="450px" height="325px" alt="" class="floatTriggerButton"/>
			</a>


		</div>  

		
		<div class="col c2">
		  <h3><span>CPU Ray Tracing</span></h3><a href="#float1" onclick="return false;"><img src="images/raytracer/raytrace_gl.jpg"  width="450" height="325px" alt="" class="floatTriggerButton"/></a></h3>
		</div>
		
		<div class="col c2">
		  <h3><span>Character Modeling</span></h3><a href="#float2" onclick="return false;"><img src="images/charactermodeling/4.jpeg"  width="450" height="325px" alt="" class="floatTriggerButton"/></a></h3>
		</div>
		
		<div class="col c2">
		  <h3><span>Scene Modeling</span></h3><a href="#float3" onclick="return false;"><img src="images/scenemodeling/title.jpeg"  width="450" height="325px" alt="" class="floatTriggerButton"/></a></h3>
		</div>
  </div>

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


<div id="float0" class="floatArea">
<div id="floatcontent0" class="floatAreaContent"> 
	<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav">
		  <li id="raytrace_pic1"><a href="#tab8" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/fastpathtracer/4.bmp" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_pic2"><a href="#tab9" rel="slideBoard" onclick="return false;" >
			<img src="images/fastpathtracer/5.bmp" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_pic1"><a href="#tab10" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/fastpathtracer/6.bmp" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_pic2"><a href="#tab11" rel="slideBoard" onclick="return false;" >
			<img src="images/fastpathtracer/1.jpg" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_pic1"><a href="#tab12" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/fastpathtracer/2.jpg" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_pic2"><a href="#tab13" rel="slideBoard" onclick="return false;" >
			<img src="images/fastpathtracer/3.jpg" style="width:50px; height:50px"/></a></li>	
		  <li id="raytrace_intro"><a href="#tab14" rel="slideBoard" onclick="return false;">Introduction</a></li>
		  <li id="demo"><a href="#tab15" rel="slideBoard" onclick="return false;">Demo</a></li>
		  <button>X</button>
		</ul>
	</div>
	<div id="content1" class="slide_content"  style="width:99%">
	  <div id="mask1" class="slide_mask" style="height:600px">
	  <div id="panel1" class="slide_panel">
		  <div id="tab8" >
		  	 <h3>This is the low-sample-rate image, on which we reconstruction based. Takes 19secs</h3>
			  <img src="images/fastpathtracer/4.bmp" style="width:800px; height:600px"></img>   
		  </div>
		  <div id="tab9" >
			  <h3>This is the reconstruction result. The reconstruction process takes 328secs</h3>
			  <img src="images/fastpathtracer/5.bmp" style="width:800px; height:600px"></img>   
		  </div>
		  <div id="tab10" >
			  <h3>This is a high-sample-rate image. Takes 8839 secs. The acceleration rate is 25 times.</h3>
			  <img src="images/fastpathtracer/6.bmp" style="width:800px; height:600px"></img>   
		  </div>
		  <div id="tab11" >
			  <img src="images/fastpathtracer/1.jpg" style="width:800px; height:600px"></img>   
		  </div>
		  <div id="tab12" >
			  <img src="images/fastpathtracer/2.jpg" style="width:800px; height:600px"></img>   
		  </div>
		  <div id="tab13" >
			  <img src="images/fastpathtracer/3.jpg" style="width:800px; height:600px"></img>   
		  </div>	  		  
		  <div id="tab14" style="font-size:16px; color:#000000">
		  	  The project is Maya Authroing Tool project. Our tool can help artist with rendering simple Maya Scene using fast-path-tracing method which is around 20 times faster than regular monte-carlo algoritm.<br/><br/>
			  We start our work based on <i>Reconstruct the Indirect Light Field for Global Illumination, Lehtinen et al., Siggraph 2012</i>. The core idea of this method is to reuse the information which is acquired from low-sample-rate path tracing. As we know, the material of most stuff in the real-world are diffuse material, and for the others are generally glass. For a point on diffuse surface, it will collect all the rays from everywhere and evenly emit it to all directions. Therefore, we will have the information of each point even if we only trace one ray that shoot on it. By introducing such idea, we can acquire the information of every primary hit point from camera with low-sample rate and low-iteration times, and reconstruct the indirect light field based on these information.<br/><br/>
			  The authoring tool can collect parts of information from the scene, including the geometry ,transform, material of each object and camera, light information. Then it will render the scene using fast-path-tracing method and then show the result in rendering window in Maya. <br/><br/>
			  
		  </div>
		  
		  <div id="tab15" >
			  <h3><span>Authoring Tool Project Demo for CIS 660</span></h3>
			  
				<object width="425" height="350">
				  <param name="movie" value="https://youtube.googleapis.com/v/LZ2uFxPtKgg" />
				  <param name="wmode" value="transparent" />
				  <embed src="https://youtube.googleapis.com/v/LZ2uFxPtKgg"
						 type="application/x-shockwave-flash"
						 wmode="transparent" width="425" height="350" />
				</object>
	
			  </h3>
		  </div>	
		  
	  </div>
	</div>
	</div>
</div>
</div>


<div id="float1" class="floatArea">
<div id="floatcontent1" class="floatAreaContent"> 
	<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav">
		  <li id="raytrace_pic1"><a href="#tab1" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/raytracer/result0.bmp" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_pic2"><a href="#tab2" rel="slideBoard" onclick="return false;" >
			<img src="images/raytracer/result1.bmp" style="width:50px; height:50px"/></a></li>
		  <li id="raytrace_intro"><a href="#tab3" rel="slideBoard" onclick="return false;">Introduction</a></li>
		  <button>X</button>
		</ul>
	</div>
	<div id="content1" class="slide_content"  style="width:99%">
	  <div id="mask1" class="slide_mask" style="height:500px">
	  <div id="panel1" class="slide_panel">
		  <div id="tab1" style="height:510px;">
			  <img src="images/raytracer/result0.bmp" style="height:500px; width:auto"></img>   
		  </div>
		  <div id="tab2">
			  <img src="images/raytracer/result1.bmp" style="height:500px; width:auto"></img>  
		  </div>
		  <div id="tab3" style="font-size:16px; color:#000000">
			This is one of the project for the course CIS560. I implemented a ray-tracer from zero, using C++ and OpenGL as the building tools.<br/><br/>
			The raytracer support ray-sphere,ray-cube and ray-plane intersection detections, with support arbitrary transform matrix on it. BVH tree is also introduced in the program to accelerate the rendering process. Simple texture map is added to several meshes in the scene to make scene looks better. There's also a transparent glass ball in the middle of the scene to show the refraction effect. <br/><br/>
			Soft shadow and Anti-Alias feature were also added in this ray-tracer.<br/><br/>
			For the future work, I will try to introduce CUDA or other GPU accelerate tech to speed up the rendering process.
		  </div>
		  
	  </div>
	</div>
	</div>
</div>
</div>



<div id="float2" class="floatArea">
<div id="floatcontent2" class="floatAreaContent"> 
	<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav">
		  <li id="firecat_pic1"><a href="#tab4" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/charactermodeling/1.jpeg" style="width:50px; height:50px"/></a></li>
		  <li id="firecat_pic2"><a href="#tab5" rel="slideBoard" onclick="return false;" >
			<img src="images/charactermodeling/2.jpeg" style="width:50px; height:50px"/></a></li>
     	  <li id="firecat_pic3"><a href="#tab6" rel="slideBoard" onclick="return false;" >
			<img src="images/charactermodeling/3.jpeg" style="width:50px; height:50px"/></a></li>
		  <li id="firecat_intro"><a href="#tab7" rel="slideBoard" onclick="return false;">Introduction</a></li>
		  <button>X</button>
		</ul>
	</div>
	<div id="content2" class="slide_content"  style="width:99%">
	  <div id="mask2" class="slide_mask" style="height:500px">
	  <div id="panel2" class="slide_panel">
		  <div id="tab4" style="height:510px;">
			  <img src="images/charactermodeling/1.jpeg" style="height:500px; width:auto"></img>   
		  </div>
		  <div id="tab5">
			  <img src="images/charactermodeling/2.jpeg" style="height:500px; width:auto"></img>  
		  </div>
		  <div id="tab6">
			  <img src="images/charactermodeling/3.jpeg" style="height:500px; width:auto"></img>  
		  </div>
		  
		  <div id="tab7" style="font-size:16px; color:#000000">
			This is my first modeling work, for the course FNAR643. I made a firecat, which is a featured character in World of Warcraft Fireland raid. I used Maya to create the geometry, and photoshop for texture map editing work.<br/><br/>
			If I were grade this art work, it is pretty poor as an art work. However, I would still grade A+ for it, only because it is my first attemption on Maya modeling. Actually I do get A+ from this course.
			<br/><br/>
			I used a lot of screen shot from the game to be the texture of the firecat. But it was tricky to apply it on the UV map of the geometry, so a bunch of photoshop work were added as a consequence. Also, I added fire effect from Maya plugin to make it a real "Fire"cat.
		  </div>
		  
	  </div>
	</div>
	</div>
</div>
</div>

<div id="float3" class="floatArea" >
<div id="floatcontent2" class="floatAreaContent"> 
	<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav">
		  <li id="firecat_pic1"><a href="#tab16" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/scenemodeling/1.jpeg" style="width:50px; height:50px"/></a></li>
		  <li id="firecat_pic2"><a href="#tab17" rel="slideBoard" onclick="return false;" >
			<img src="images/scenemodeling/2.jpeg" style="width:50px; height:50px"/></a></li>
     	  <li id="firecat_pic3"><a href="#tab18" rel="slideBoard" onclick="return false;" >
			<img src="images/scenemodeling/3.jpeg" style="width:50px; height:50px"/></a></li>
		  <li id="firecat_intro"><a href="#tab19" rel="slideBoard" onclick="return false;">Introduction</a></li>
		  <button>X</button>
		</ul>
	</div>
	<div id="content2" class="slide_content"  style="width:99%">
	  <div id="mask2" class="slide_mask" style="height:500px">
	  <div id="panel2" class="slide_panel">
		  <div id="tab16" style="height:510px;">
			  <img src="images/scenemodeling/1.jpeg" style="height:500px; width:auto"></img>   
		  </div>
		  <div id="tab17">
			  <img src="images/scenemodeling/2.jpeg" style="height:500px; width:auto"></img>  
		  </div>
		  <div id="tab18">
			  <img src="images/scenemodeling/3.jpeg" style="height:500px; width:auto" ></img>  
		  </div>
		  
		  <div id="tab19" style="font-size:16px; color:#000000">
			This is my second modeling work, for the course FNAR643. I had made a firecat, so I decided to model its palace, the Sulfuron Keep in Fireland raid, World of Warcraft. Again, Maya and photoshop helped me a lot in this project.<br/><br/>
			Some tools were used in this scene, e.g. ocean shader to simulate the lava, lights to simulate fireballs and mist, curve tools to model some complicated geometry, etc.<br/><br/>
			Only one thing make me regreted after the project finished: I did not add the skybox in the scene.
		  </div>
		  
	  </div>
	</div>
	</div>
</div>
</div>

<div id="float4" class="floatArea" >
<div id="floatcontent2" class="floatAreaContent"> 
	<div id="navi" style="width:100%">
		<ul id="nav1"  class="nav">
		  <li id="firecat_pic1"><a href="#tab20" rel="slideBoard" class="selected" onclick="return false;">
			<img src="images/gpuraytracing/glassboard.jpg" style="width:50px; height:50px"/></a></li>
			
		  <li id="firecat_pic2"><a href="#tab21" rel="slideBoard" onclick="return false;" >
			<img src="images/gpuraytracing/glasscube.jpg" style="width:50px; height:50px"/></a></li>
			
     	  <li id="firecat_pic3"><a href="#tab22" rel="slideBoard" onclick="return false;" >
			<img src="images/gpuraytracing/onlysphere.jpg" style="width:50px; height:50px"/></a></li>
			
     	  <li id="firecat_pic3"><a href="#tab23" rel="slideBoard" onclick="return false;" >
			<img src="images/gpuraytracing/with dof.jpg" style="width:50px; height:50px"/></a></li>
			
     	  <li id="firecat_pic3"><a href="#tab24" rel="slideBoard" onclick="return false;" >
			<img src="images/gpuraytracing/raytracer.jpg" style="width:50px; height:50px"/></a></li>
			
		  <li id="firecat_intro"><a href="#tab25" rel="slideBoard" onclick="return false;">Introduction</a></li>
		  <button>X</button>
		</ul>
	</div>
	<div id="content2" class="slide_content"  style="width:99%">
	  <div id="mask2" class="slide_mask" style="height:500px">
	  <div id="panel2" class="slide_panel">
		  <div id="tab20" style="height:510px;">
			  <img src="images/gpuraytracing/glassboard.jpg" style="height:500px; width:auto"></img>   
		  </div>
		  <div id="tab21">
			  <img src="images/gpuraytracing/glasscube.jpg" style="height:500px; width:auto"></img>  
		  </div>
		  <div id="tab22">
			  <img src="images/gpuraytracing/onlysphere.jpg" style="height:500px; width:auto" ></img>  
		  </div>
		  <div id="tab23" >
			  <img src="images/gpuraytracing/with dof.jpg" style="height:500px; width:auto"></img>   
		  </div>
		  <div id="tab24">
			  <img src="images/gpuraytracing/raytracer.jpg" style="height:500px; width:auto"></img>  
		  </div>

		  <div id="tab25" style="font-size:16px; color:#000000">
			This is the GPU ray tracer based on Cuda technique. In this project, cube and sphere with arbitrary transformation can be rendered, and several material attributs is sponsored by this renderer.<br/><br/>
			There are several features I'd implemented on it, such as specular surface, diffuse surface, refractive ray tracing, color bleeding for semi-transparent object, soft shadow, Super Sampled Anti-Aliasing, area light, multiple light source, depth of field blurring effect, etc. One of the thing that I'm most proud of is that this ray tracer is not a recursive-ray-tracer, but it can approach the effect of the slower recursive one, because of I "hacked" some part of the algorithm so that it looks pretty realistic.<br/><br/>
			Comparing with traditional CPU ray-tracer, GPU ray-tracer is thousands of time faster than that because of its parallel computing feature. And Cuda-C++ is easy to use, although hard to debug.<br/><br/>
			The next step would be a GPU based path tracer. It will be based on ray-parallel level instead of pixel-parallel level, which can make the program even faster.
		  </div>
		  
	  </div>
	</div>
	</div>
</div>
</div>

</body>
</html>
