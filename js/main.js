// JavaScript Document

var flag;
var shown=new Array();

$(document).ready(function(){

	flag=false;
	$('.slide_panel').width(parseInt($('.slide_mask').width() * $('.slide_panel div').length));
	$('.slide_panel div').width($('.slide_mask').width());
	$('.floatArea').hide();
	$('.nav button').click(function(){
		$(this).parents('.floatArea').fadeOut();							
	});
	$("#ss1 > div:gt(0)").hide();
	setInterval(function() { 
  	$('#ss1 > div:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#ss1');},
	3000);
	$("#ss2 > div:gt(0)").hide();
	setInterval(function() { 
  	$('#ss2 > div:first').fadeOut(1000).next().fadeIn(1000).end().appendTo('#ss2');},
	3000);

 	$('a[rel=slideBoard]').click(function () {
    
        //Get the height of the sub-panel
        var panelheight = $($(this).attr('href')).height();
        //Set class for the selected item
        $('a[rel=slideBoard]').removeClass('selected');
        $(this).addClass('selected');
        
        //Resize the height
        $(this).parents('.floatArea').find('.slide_mask').animate({'height':panelheight},{queue:false, duration:400});            
        
        //Scroll to the correct panel, the panel id is grabbed from the href attribute of the anchor
        $(this).parents('.floatArea').find('.slide_mask').scrollTo($(this).attr('href'),400);   
		$(this).parents('.floatArea').animate({'height':panelheight+100},{queue:false, duration:400});   

		
        return false;
    });	
	$('.floatTriggerButton').mouseover(function(){
		$(this).fadeTo("fast",0.6);
	});
		$('.floatTriggerButton').mouseout(function(){
		$(this).fadeTo("fast",1.0);
	});
	$('.floatTriggerButton').click(function(){
		$('.floatArea').not($(this)).fadeOut("medium","linear");
		$($(this).parents("a").attr('href')).fadeIn("medium","linear");
		$($(this).attr('href')).fadeIn("medium","linear");
	});
	$("#navi").style.width="100%";
	$("#container").style.width="100%";
	
});

