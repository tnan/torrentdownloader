<html><head></head><body><center>
<?php $link = $_SERVER['HTTP_HOST']; ?>
Instaltion take about 15~20 minutes. Contact <a href="https://whmcs.the-entertainment.com/submitticket.php" target="_blank">Support</a> if need more assistant!<br><br>
Click <a href="http://<?php echo "$link";?>">HERE</a> to go to Home Page when Execution Done!<br><br>
<img width="100%" height="10" src="https://whmcs.the-entertainment.com/te-services/torrent-services/image/loading.gif"><br><br>
<div id="feed"></div>
<script type="text/javascript">
var refreshtime=10;
function tc()
{
asyncAjax("GET","firstinstalllog.php",Math.random(),display,{});
setTimeout(tc,refreshtime);
}
function display(xhr,cdat)
{
 if(xhr.readyState==4 && xhr.status==200)
 {
   document.getElementById("feed").innerHTML=xhr.responseText;
 }
}
function asyncAjax(method,url,qs,callback,callbackData)
{
    var xmlhttp=new XMLHttpRequest();
    //xmlhttp.cdat=callbackData;
    if(method=="GET")
    {
        url+="?"+qs;
    }
    var cb=callback;
    callback=function()
    {
        var xhr=xmlhttp;
        //xhr.cdat=callbackData;
        var cdat2=callbackData;
        cb(xhr,cdat2);
        return;
    }
    xmlhttp.open(method,url,true);
    xmlhttp.onreadystatechange=callback;
    if(method=="POST"){
            xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
            xmlhttp.send(qs);
    }
    else
    {
            xmlhttp.send(null);
    }
}
tc();
</script>
</center></body></html>
