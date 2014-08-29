var ctx,grd,now,inputBuffer,cols, rows, gridsize, tail, head;
var dir, nextdir;  //0 up, 1 left, 2right  , 3 down
var snake=new Array(), map=new Array();
var havefood=false,gameover=false;

function drawGrid(x , y)
{
	if(map[y*cols+x]==0) ctx.fillStyle="rgb(255,125,84)";else ctx.fillStyle="rgb(0,255,180)";
	if(map[y*cols+x]<=1) ctx.fillRect(x*gridsize,y*gridsize,gridsize,gridsize);
	else{ctx.beginPath();ctx.arc((x+0.5)*gridsize,(y+0.5)*gridsize,gridsize/2,0,2*Math.PI); ctx.fill();}
}
function drawtext()
{
	now++;
	if(gameover)
	{
		ctx.font="30px Arial";
		ctx.fillStyle="white";
		ctx.fillRect(0,0,500,500);
		grd=ctx.createLinearGradient(0,0,200,0);
		grd.addColorStop(0,"blue");
		grd.addColorStop(1,"red");
		ctx.strokeStyle=grd;
		ctx.strokeText("GAME OVER... PLZ TRY AGAIN",30,200);
	}
	else
	{
		for(var i=0;i<rows;i++) for(var j=0;j<cols;j++){drawGrid(i,j);}
	}
	//document.getElementById("debugTxt").innerHTML=head.toString()+","+tail.toString()+"----"+(head-tail).toString();
}
function move()
{
	var oldx=snake[head].x, oldy=snake[head].y;
	head++; if(head>=500) head-=500;
	var ppoint={x:oldx, y:oldy};
	if(dir+nextdir!=3) dir=nextdir;
	
	if(dir==0){ppoint.y--;if(ppoint.y<0) ppoint.y+=rows;}
	if(dir==1){ppoint.x--;if(ppoint.x<0) ppoint.x+=cols;}
	if(dir==2){ppoint.x++;if(ppoint.x>=cols) ppoint.x-=cols;}
	if(dir==3){ppoint.y++;if(ppoint.y>=rows) ppoint.y-=rows;}
	snake[head]=ppoint;	if(map[ppoint.y*cols+ppoint.x]==2){ tail--;if(tail<0) tail+=500; havefood=false;}
	
	for(var i=0;i<rows;i++) for(var j=0;j<cols;j++) if(map[i*cols+j]!=2) map[i*cols+j]=0;
	var nows=head;
	while(nows!=tail)
	{
		var x=snake[nows].x, y=snake[nows].y;
		if(map[y*cols+x]==1) gameover=true;
		map[y*cols+x]=1;
		nows--;
		if(nows<0) nows+=500;
	}
	tail++; if(tail>=500)tail-=500;
	spawnFood();
	drawtext();
	if(!gameover)setTimeout(move,200);
}
function spawnFood()
{
	if(havefood)return;
	var x,y, flag;flag=false;
	while(!flag)
	{
		x=Math.floor(Math.random()*cols); y=Math.floor(Math.random()*rows);
		if(map[y*cols+x]==0) flag=true;
	}
	map[y*cols+x]=2;
	havefood=true;
}
function init(){
	cols=20;rows=20;gridsize=25;dir=0;nextdir=0;havefood=false;gameover=false;
	
	ctx=document.getElementById("myCanvas").getContext("2d");

	for(var i=0;i<4;i++)
	{
		var ppoint={y:10,x:i+4};
		snake[i]=ppoint;
	}
	head=3;tail=0;now=0;
	move();
}
function processInput(e)
{
	if(e.keyCode==87 || e.keyCode==38 ){ inputBuffer='w'; nextdir=0;}
	if(e.keyCode==65|| e.keyCode==37){ inputBuffer='a'; nextdir=1;}
	if(e.keyCode==68|| e.keyCode==40){ inputBuffer='d'; nextdir=2;}
	if(e.keyCode==83|| e.keyCode==39){ inputBuffer='s'; nextdir=3;}
}
window.onload=init;
window.addEventListener("keydown", processInput,true);