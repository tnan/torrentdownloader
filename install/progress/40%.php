<meta http-equiv="refresh" content="30">
<?php $link = $_SERVER['HTTP_HOST']; ?>
<style>
.progress {
  width: 100%;
  max-width: 100%;
  height: 30px;
  background: #e1e4e8;
  border-radius: 3px;
  overflow: hidden;
}
.progress .progress-bar {
  display: block;
  height: 100%;
  background: linear-gradient(90deg, #ffd33d, #ea4aaa 17%, #b34bff 34%, #01feff 51%, #ffd33d 68%, #ea4aaa 85%, #b34bff);
  background-size: 300% 100%;
  -webkit-animation: progress-animation 2s linear infinite;
          animation: progress-animation 2s linear infinite;
}

@-webkit-keyframes progress-animation {
  0% {
    background-position: 100%;
  }
  100% {
    background-position: 0;
  }
}

@keyframes progress-animation {
  0% {
    background-position: 100%;
  }
  100% {
    background-position: 0;
  }
}

.center {
  width: 99.5%;
  height: 99%;
  position: fixed;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
</style>

<script type="text/javascript">
var refreshtime=10;
function tc()
{
asyncAjax("GET","log.php",Math.random(),display,{});
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

<table style="width: 99%; height: 99%; margin-left: auto; margin-right: auto;" border="0">
<tbody>
<tr>
<td style="width: 100%; height: 100%;">
<table style="width: 100%; margin-left: auto; margin-right: auto;" border="0">
<tbody>
<tr>
<td><center>

<table style="width: 80%; height: 260px;" border="1" cellspacing="0" cellpadding="0">
<tbody>

<tr>
<td style="width: 100%; height: 30px;">
<center><strong>
40%
</center></strong>
</td>
</tr>


<tr>
<td style="width: 100%; height: 30px;">
<div class="progress">
<span class="progress-bar" style="width: 40%"></span>
</div>
</td>
</tr>


<tr>
<td style="width: 100%; height: 30px;">
<center><strong>
Installation take about 30~60 minutes. Click <a href="http://<?php echo "$link";?>">HERE</a> to go to Home Page when Execution Done! Contact <a href="https://whmcs.the-entertainment.com/submitticket.php" target="_blank">Support</a> if needed!
</center></strong>
</td>
</tr>


<tr>
<td style="width: 100%; height: 200px;">
<div id="feed"></div>
</td>
</tr>

</tbody>
</table>


</center></td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
