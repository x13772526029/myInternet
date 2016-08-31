<?php error_reporting(0);  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
	<title>部落格-推荐实例</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/sweetalert2.min.css">
   <link rel="stylesheet" href="css/ex.css">
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
.Solarsystem{display: block;opacity: 1;}
.container-bike{display: none;opacity: 0;}




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

<div class="container Solarsystem">
  <div class="Planet Planet--mercury">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--venus">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--earth">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--mars">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--jupiter">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--saturn">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--uranus">
    <!--= planet.toUpperCase()-->
  </div>
  <div class="Planet Planet--neptun">
    <!--= planet.toUpperCase()-->
  </div>
<input type="button" value="切换" class="bike1"/>

</div>
<!-- 主页内容 -->

<div class="preload">
  <p>Let's look my example</p>
</div>
<div class="container container-bike">
  <div class="background">

    <div class="tree">
      <div class="tree-img"></div>
    </div>
    <div class="tree">
      <div class="tree-img"></div>
    </div>
    <div class="tree">
      <div class="tree-img"></div>
    </div>
    <div class="tree">
      <div class="tree-img"></div>
    </div>
    <div class="tree">
      <div class="tree-img"></div>
    </div>

    <div class="tree">
      <div class="tree-img"></div>
    </div>
    <div class="tree">
      <div class="tree-img"></div>
    </div>
    <div class="tree">
      <div class="tree-img"></div>
    </div>

  </div>
  <div class="bike">

    <div class="cyclist">
      <div class="body">
        <div class="body-box"></div>
        <div class="body-arm"></div>
      </div>
      <div class="legs-right">
        <div class="legs-part"></div>
      </div>
      <div class="legs-left">
        <div class="legs-part"></div>
      </div>
    </div>

    <div class="frame">
      <div class="frame-1"></div>
      <div class="frame-2"></div>
      <div class="frame-3"></div>
    </div>
    <div class="wheel-particle">
      <div></div>
      <div></div>
      <div></div>
    </div>
    <div class="wheel">
      <div class="wheel-radial"></div>
    </div>
    <div class="wheel">
      <div class="wheel-radial"></div>
    </div>

  </div>
  <div class="floor"></div>
  <input type="button" value="切换" class="earth"/>
</div>

   
       
        
    


  

	<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/responsive-nav.min.js"></script>
 


<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>


      <!-- IE support -->
      <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.4/TweenMax.min.js"></script>
       <script type="text/javascript" src="js/ex.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.5/utils/Draggable.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
   <script type="text/javascript">
       $(document).ready(function(){
         $(".bike1").click(function(){
            $(".Solarsystem").animate({opacity:'0'},1000)
            $(".Solarsystem").css("display", "none");
             $(".container-bike").delay(500).animate({opacity:'1'},1000)
            $(".container-bike").css("display", "block");
         })
          $(".earth").click(function(){
            $(".Solarsystem").delay(500).animate({opacity:'1'},1000)
            $(".Solarsystem").css("display", "block");
             $(".container-bike").animate({opacity:'0'},1000)
            $(".container-bike").css("display", "none");
         })

       })
   </script>
</body>
</html>