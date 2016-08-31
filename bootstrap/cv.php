<?php error_reporting(0);  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
	<title>部落格-个人简历</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/sweetalert2.min.css">
   <link rel="stylesheet" href="css/cv.css">
     <link rel="stylesheet" type="text/css" href="css/set2.css" />
<script type="text/javascript" src="js/jquery-1.12.0.min.js"></script>
  <style>

*{padding: 0;margin: 0;}

.lined{
  opacity: 1;
}
.dotted{
  opacity: 0;
  display: none;
  position: absolute;
  left: 57%;
  top:51%;
}
.dashed{
   opacity: 0;
  display: none;
  position: absolute;
  left: 37%;
  top:41%;
}/**/
.dashedd{
   opacity: 0;
  display: none;
  position: absolute;
  left: 37%;
  top:41%;
}
.linedd{
  opacity: 0;
  display: none;
  position: absolute;
  left: 15%;
  top:45%;
}
img{

  width: 100%;height: 93%;
  overflow: hidden;
  padding: 11px;
  border-radius:31px;
top:7%;
  position: absolute;z-index: 3
  ;
}
#img{
  display: block;
}
.content{
top: -42%;
    left: -2%;
    display: none;
    opacity: 0;
    position: relative;
}
.player__cover{
     position: absolute;
    width: 107%;
    height: 69%;
    top: -2%;
    left: -3%;
}
.morpher{
  position: absolute;
  top:7%;
  left: 2%;
}
.player__track{
 position: absolute;
    top: 57%;
    font-size: 27px;
    left: 22%;
}
.player__album{

  position: absolute;
    top: 73%;
    font-size: 16px;
    left: 13%;
}
.player__controls{

      position: absolute;
    top: 75%;
    font-size: 20px;
    left: 20%;
}
#wrapper{
    width: 66%;
    height: 60%;
    top: 81%;
    left: 18%;
    display: none;
    opacity: 0;
    position: absolute;
}
.lg{display: block;}
.re{display: block;}
.user{display: none;}
.zhuxiao{display: none;}
  </style>  
<script>
      /*
        VIEWPORT BUG FIX
        iOS viewport scaling bug fix, by @mathias, @cheeaun and @jdalton
      */
      (function(doc){var addEvent='addEventListener',type='gesturestart',qsa='querySelectorAll',scales=[1,1],meta=qsa in doc?doc[qsa]('meta[name=viewport]'):[];function fix(){meta.content='width=device-width,minimum-scale='+scales[0]+',maximum-scale='+scales[1];doc.removeEventListener(type,fix,true);}if((meta=meta[meta.length-1])&&addEvent in doc){fix();scales=[.25,1.6];doc[addEvent](type,fix,true);}}(document));
    </script>

<script src="js/modernizr-custom.js"></script>
</head>
<body>
<!-- 导航 -->
<?php include('header.php');?>


  

<!-- 背景 -->
<div>
<div class="title">
  <h1>Welcome JZS</h1>
  <p>By <a href="http://twitter.com/lewitje" target="_blank">@Songzijia</a></p>
</div>

<canvas id="base" width="500" height="500"></canvas>

</div>
<!-- 主页内容 -->
<div class="cv">
<div class="container">

    <div class="cv1">
      <div class="png"></div>
      <span class="name">name : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jinx Moly</span>
      <span class="Occ">Occupation : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;illustrator</span>
       <span class="skil">skilful : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quick description</span>
    </div>
    <div class="cv2">
           <span class="name">Many think we'll never forget the things, as we remember days, we were forgotten.
2 if God wanted to destroy a person must first make mad. But I crazy for so long why God does not destroy me.
3 some people will always be engraved in memory, even forget his voice, forgot his smile, forget his face, but whenever he remembered the kind of feeling, is never changed.
4 you will never see my most lonely time, because only you are not around me, I was the most lonely.
5 song form the space, let love come and go free, so still protect the people's appearance has not changed and a huge and no end of hate.
6 not every effort will have a harvest, but each time the harvest must be hard, this is an unfair irreversible proposition.
7 I love you... For your happiness, I am willing to give up everything --- including you.
8 disappointment, and sometimes is also a kind of happiness, because there is something to look forward to, so will be disappointed. Because there is love, will have to look forward to, so even if disappointed, is also a kind of happiness, although this kind of happiness a little pain</span>
    </div>
   

  </div>
</div>
  
   
       
        
    


  

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/responsive-nav.min.js"></script>
<script type="text/javascript" src="js/cv.js"></script>

<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>

      <!-- IE support -->
      <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
   
</body>
</html>