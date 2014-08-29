/**
 * Created by Guanyu He on 13-12-5.
 */

function sendEmail(bInfo, cInfo,itemName)
{
    var xmlhttp;

    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        //alert(xmlhttp.readyState+" "+ xmlhttp.status);
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {
            alert("Following message will has been sent to me:\r\n\n\n\n"+xmlhttp.responseText+"\r\n I'll get back to you thru the contact info you provided pretty soon :) Thanks!");
        }
    }
    xmlhttp.open("GET","../php/sendmail.php?bInfo="+bInfo+"&cInfo="+cInfo+"&itemName="+itemName,true);
    xmlhttp.send();
}
function submitRequest(idx)
{

    var bargainInputTextBox = document.getElementById("bargainbox"+idx.toString());
    var contactInputTextBox = document.getElementById("contactbox"+idx.toString());

    sendEmail(bargainInputTextBox.value,contactInputTextBox.value,bargainInputTextBox.getAttribute("tag"));
    //alert(bargainInputTextBox.value+" "+contactInputTextBox.value);
}
function insertToTable(table,items,idx)
{
    var row=table.insertRow(-1);
    var cWidth = new Array(6);
    cWidth[0]="10%";
    cWidth[1]="20%";
    cWidth[2]="30%";
    cWidth[3]="20%";
    cWidth[4]="10%";
    cWidth[5]="10%";
    for(var i=0;i<5;i++)
    {
        var curcell = row.insertCell(i);
        curcell.style.width=cWidth[i];
        curcell.style.wordWrap="break-word";
        curcell.style.fontSize="18px";
        curcell.innerHTML = items[i];
    }
    var i=5;
    var buycell = row.insertCell(i);
    buycell.style.width=cWidth[i];
    buycell.style.wordWrap="break-word";
    buycell.style.fontSize="15px";

    buycell.innerHTML = "Your Ideal Bargain";
    var buyCellInputText=document.createElement('input');
    buyCellInputText.style.width="90%";
    buyCellInputText.setAttribute("id","bargainbox"+idx.toString());
    buyCellInputText.setAttribute("tag",items[0]);
    buycell.appendChild(buyCellInputText);

    buycell.innerHTML+="Your Contact Info(Phone or email)";
    var buyCellContactText=document.createElement('input');
    buyCellContactText.setAttribute("id","contactbox"+idx.toString());
    buyCellContactText.style.width="90%";
    buycell.appendChild(buyCellContactText);

    buycell.innerHTML+="\<br/>";
    buycell.innerHTML+="\<br/>";
    buycell.innerHTML+="\<br/>";
    buycell.innerHTML+="\<br/>";
    var buyCellButton=document.createElement('input');
    buyCellButton.setAttribute("type","button");
    buyCellButton.setAttribute("value","Buy "+items[0]);

    buyCellButton.style.width="50%";
    buyCellButton.addEventListener("click",function(){submitRequest(idx);},false);
    //alert(buyCellButton.getAttribute("onclick"));
    buycell.appendChild(buyCellButton);
}

function getAllItemInfo(filterIdx)
{
    var xmlhttp;

    if (window.XMLHttpRequest)
    {// code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    }
    else
    {// code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function()
    {
        //alert(xmlhttp.readyState+" "+ xmlhttp.status);
        if (xmlhttp.readyState==4 && xmlhttp.status==200)
        {

            var x=xmlhttp.responseXML.documentElement.getElementsByTagName("ITEM");
            var table=document.getElementById("generalTable");

            for(var i=0;i< x.length;i++)
            {
                var result=new Array(6);
                var typename = x[i].getElementsByTagName("TYPE")[0].firstChild.nodeValue.toString();

                if(filterIdx==1 && typename!="electronic") continue;
                if(filterIdx==2 && typename!="kitchen") continue;
                if(filterIdx==3 && typename!="grocery") continue;
                if(filterIdx==4 && typename!="Tools") continue;


                result[0]=x[i].getElementsByTagName("NAME")[0].firstChild.nodeValue;
                result[1]=x[i].getElementsByTagName("PARA")[0].firstChild.nodeValue;
                result[2]="\<img src=\"../movesaleimgs/"+x[i].getElementsByTagName("PHOTO")[0].firstChild.nodeValue.toString()+"\" style=\"width:98%\"\>";
                result[2]+="\</img>"


                result[3]=x[i].getElementsByTagName("NOTE")[0].firstChild.nodeValue;
                //alert(result[3]);
                result[4]=x[i].getElementsByTagName("PRICE")[0].firstChild.nodeValue;
                result[5]=x[i].getElementsByTagName("BARGAIN")[0].firstChild.nodeValue;
                insertToTable(table,result,i);
            }
        }
    }
    xmlhttp.open("GET","../xml/itemlist.xml",true);
    xmlhttp.send();
}