<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New year Count Down 2021 Year of the OX </title>
    <link rel="icon" href="bg1.jpg" type="image/gif" sizes="100X100"> 
</head>
<style>
*{
    margin:0;padding:0;

}
.page-container{
    position:absolute;
    max-width:100%;
    height:100%;


    

}
.ox h1{line-height:200px;text-align:center;color: white;font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif, sans-serif;font-size: 72px;  text-shadow: 5px 5px 7px  rgb(170, 157, 68);}
.countdown-wrapper{
position: fixed;
transform: translate(-0%,-0%);
height:100%;
width:100%;
padding:20px;
background: #19283b;   
background-attachment: fixed;
background-image: url('bg1.jpg');
background-repeat: no-repeat;
background-size: cover;

background-position: center;
overflow:auto;

}
.timer{
    color:white;
    text-align: center;
    font-size: 120px;
   
    margin:20px auto;
    text-shadow: 5px 5px 7px  rgba(219, 105, 52, 0.568);
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
}
.count-down-text{
    color:white;
    
    text-shadow: 5px 5px 7px  rgb(170, 157, 68);
    margin-top:100px;
    font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    text-align: center;
}
@media screen and (max-width: 600px) {
  .timer{
    font-size: 60px;
  }
}
.rocket1{
    position: relative;
    top:0px;
    left:50%;
    right:0px;
    z-index: -1;
    animation-name: rocket1;
  animation-duration: 2s;
  animation-delay: -4s;
  animation-iteration-count: infinite;
  width:100px;
  visibility: hidden;
}
.rocket1 img{
    width:150px;
}
@keyframes rocket1 {
  0%   { left:50%; top:0px;}
  25%  { left:50%; top:-100px;}
  50%  { transform: rotate(-40deg);left:50%; top:-300px;}
  75%  {   transform: rotate(0deg);left:40%; top:-600px;}
  100% { left:40%; top:-1000px;}
}


.rocket2{
    position: relative;
    top:0px;
    left:50%;
    right:0px;
    z-index: -1;
    animation-name: rocket2;
  animation-duration: 2s;
  animation-delay: -3s;
  animation-iteration-count: infinite;
  width:100px;
 visibility: hidden;
}
.rocket2 img{
    width:100px;
}
@keyframes rocket2 {
  0%   { left:10%; top:0px;}
  25%  { left:10%; top:-50px;}
  50%  {  transform: rotate(20deg);left:10%; top:-300px;}
  75%  {  transform: rotate(0deg);left:30%;  top:-500px;}
  100% { left:30%; top:-1000px;}
}
.ox{

max-width:600px;
margin:0 auto;

visibility: hidden;




}
.ox img{
width:200px;
animation-name: none;
  animation-duration: 3s;
  animation-delay: -3s;
  animation-iteration-count: infinite;
}
.ox-img{
   
    max-width:200px;
    margin:0 auto;
 
}

@keyframes ox {
  0%   { width:50px;height:50px;}
  25%  {width:100px;height:100px; }
  50%  {  width:150px;height:150px;}
  75%  { width:200px;height:200px; }
  100% { width:250px;height:250px;}
}
.fireworks-wrapper{
    position: absolute;
    top:20px;
    height:auto;
   
    width:100%;
    display:flex;
    justify-content: center;
    visibility: hidden;
}
.f0{
    position: relative;
    top:-10px;
    left:-200px; 
    z-index: -1;   
}.f0 img{
    width:170px;
 
    animation-name: f0;
  animation-duration: 4s;
  animation-delay: -3s;
  animation-iteration-count: infinite;

}
@keyframes f0 {
  0%   { transform: scale(0); opacity: 0.0;}

  100%  {transform: scale(1.5); opacity: 1;}
 
}
.f1 img{
    width:100px;

    animation-name: f1;
  animation-duration: 2s;
  animation-delay: -2s;
  animation-iteration-count: infinite;
}
@keyframes f1 {
  0%   { transform: scale(0); opacity: 0.0;}

  100%  {transform: scale(1.5); opacity: 1;}
 
}
.f2{
  margin-left: 60px;
}
.f2 img{
    width:100px;
 
    animation-name: f2;
  animation-duration: 3s;
  animation-delay: -4s;
  animation-iteration-count: infinite;
}
@keyframes f2 {
  0%   { transform: scale(0); opacity: 0.0;}

  100%  {transform: scale(1.5); opacity: 1;}
 
}
.f3{
    position: relative;
    left:300px; 
    z-index: -1;  
}
.f4{
    position: relative;
    top:100px;
    left:-20px; 
    z-index: -1;  
}
.f4 img{
    width:100px;
  
    animation-name: f1;
  animation-duration: 2s;
  animation-delay: -2s;
  animation-iteration-count: infinite;
}
.f3 img{
    width:200px;
 
    animation-name: f3;
  animation-duration: 5s;
  animation-delay: -2s;
  animation-iteration-count: infinite;
  
}
@keyframes f3 {
  0%   { transform: scale(0); opacity: 0.0;}

  100%  {transform: scale(1.5); opacity: 1;}
 
}
#sound{
 
}
</style>

<body>
<div class="page-container">
    
    <div class="countdown-wrapper" id="countdown_wrapper">
        

<div >
<audio id="sound" controls hidden loop>
  <source src="fireworks.mp3" type="audio/mpeg">
  <p>If you can read this, your browser does not support the audio element.</p>
</audio>
</div>
        

        <div class="fireworks-wrapper" id="fireworks-wrapper">
            <div class="f0">
                <img src="f2.png" alt="">
            </div>
            <div class="f1">
                <img src="f1.png" alt="">
            </div>
            <div class="f2">
                <img src="f2.png" alt="">
            </div>
            <div class="f3">
                <img src="f2.png" alt="">
            </div>
            <div class="f4">
                <img src="f1.png" alt="">
            </div>
         </div>
 
        <div class="count-down-text" id="count-down-text">
            <h1 style="font-size: 48px;">NEW YEAR COUNT DOWN 2021 </h1>
        </div>
            <div class="timer" id="timer">


            </div>
            <div class="ox" id="ox">
                <h1>Year of The Ox</h1>
                <div class="ox-img"><img src="ox.png" id ="ox-img"alt=""></div>

            </div>

            <img src="rockets.png" alt="" class="rocket2" id="rocket2"> <img src="rockets.png" alt="" class="rocket1" id="rocket1">
        </div>
        
           
        
        

</div>

    <script>

var div =document.getElementById("timer");
 
 setInterval(function(){ 
   var toDate=new Date();
   var tomorrow=new Date();
   tomorrow.setHours(24,0,0,0);
   var diffMS=tomorrow.getTime()/1000-toDate.getTime()/1000;
   var diffHr=Math.floor(diffMS/3600);
   diffMS=diffMS-diffHr*3600;
   var diffMi=Math.floor(diffMS/60);
   diffMS=diffMS-diffMi*60;
   var diffS=Math.floor(diffMS);
   var result=((diffHr<10)?"0"+diffHr:diffHr);
   result+=":"+((diffMi<10)?"0"+diffMi:diffMi);
   result+=":"+((diffS<10)?"0"+diffS:diffS);
   div.innerHTML=result;
   if(result< "00:59:00"){
    document.getElementById("timer").style.color="red";
   }
   if(result<="00:00:00"){
    document.getElementById("timer").style.color="white";
   }
   if(result=="00:00:00"){
       document.getElementById("countdown_wrapper").style.backgroundImage="url('bg2.jpg')";
       document.getElementById("rocket1").style.visibility="visible";
       document.getElementById("rocket2").style.visibility="visible";
       document.getElementById("fireworks-wrapper").style.visibility="visible";

       document.getElementById("count-down-text").innerHTML="HAPPY NEW YEAR";
       document.getElementById("count-down-text").style.fontSize="48px";
       document.getElementById("ox").style.visibility="visible";
       document.getElementById("ox-img").style.animationName="ox";
       document.getElementById("sound").autoplay="true";
   }
   
 },1000);
    </script>
</body>
</html>