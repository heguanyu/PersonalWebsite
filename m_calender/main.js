// JavaScript Document

$(document).ready(function(){

$('.mainDiv').width($('.mainDiv').parent().width()-$('.sideDiv').width()-10);
$('.sideDiv').css('left',$('.content').css('left'));
$('.sideDiv').css('top',$('.content').css('top'));
$('.mainDiv').css('top',$('.sideDiv').css('top'));
$('.mainDiv').css('left',$('.sideDiv').css('left')+$('.sideDiv').width());
//alert($('.mainDiv').css('left'));
  });