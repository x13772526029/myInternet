<?php error_reporting(0);  session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no"/>
	<title>部落格</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/jzs.css" media="screen and (max-width: 450px)">
   <link rel="stylesheet" type="text/css" href="css/jzsc.css" media="screen and (min-width: 768px)">
   <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="css/swiper-3.2.7.min.css">
        <link rel="stylesheet" type="text/css" href="css/icons.css" />
  <link rel="stylesheet" type="text/css" href="css/default.css" />
  <link rel="stylesheet" type="text/css" href="css/component.css" />
  <link rel="stylesheet" href="css/audioplayer.css" />
  <link rel="stylesheet" type="text/css" href="css/default1.css">
   <link rel="stylesheet" type="text/css" href="css/set2.css" />

      <link rel="stylesheet" href="css/sweetalert2.min.css">
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
  position: absolute;
  z-index: 3
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

   <!-- 背景canvas -->
<div id="container" class="container1">
      <div id="output"></div>
  </div>
   <!-- 名人名句 -->
<div class="headt">
<div class="container"><span>JZSong</span>
<span>Wine comes in at the mouth and love comes in at the eye</span>
<span>酒之醇美兮，得于舌喉；爱之深浓兮，望乎眼眸</span>
<span>————</span>
<span>《饮酒歌》威廉·勃特勒·叶芝（1865~ 1939）</span></div></div>

<!-- 几个重要点 -->
<div class=container>
<div class="jq22-container">

  <section>
    <button class='lined thin'>click me</button>
    <div class="" id="img1"><div class="gang"></div></div><!-- 点击第一页 -->
    <button class='dotted thick'>funk me</button>
    <button class='dashed thick'>choose me</button>
    <a href="#0" class="cd-btn cd-modal-trigger"><button class='dashedd thin'>link me</button></a>
    <button class='linedd thick'>carray me</button>


  </section>
</div>
<svg version="1.1" id="svg1" class="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
   width="100%" height="100%" viewBox="0 0 450.039 360.031" enable-background="new 0 0 450.039 360.031"
   xml:space="preserve">
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M246.021,123.011c5.392-0.176,12.58-0.598,16.201,1.2
  c-0.4,0-0.8,0-1.2,0c-23.796,12.031-39.476,22.295-48.004,49.204c1.4,0,2.8,0,4.2,0c-2.287,0.235-4.175,0.512-5.4,1.8
  c-9.913,14.729-17.036,31.326-27.002,45.604c0.58,0.878,1.914,0.925,0.6,1.2c-10.217,8.35-15.323,24.695-27.603,30.603
  c6.4-8.8,12.802-17.603,19.202-26.402c-2,0.4-4.001,0.8-6.001,1.2c15.933-4.998,23.765-32.688,31.803-46.204
  c8.914-14.989,19.576-35.867,35.403-47.404c6.4-3.2,12.802-6.401,19.202-9.601c0-0.2,0-0.4,0-0.6
  c-27.275-0.697-64.086,17.089-57.005,44.404c-0.4-0.2-0.8-0.4-1.2-0.6C193.456,135.356,223.969,132.038,246.021,123.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M277.824,123.011c5.4,0.2,10.801,0.4,16.201,0.6c0,0.2,0,0.4,0,0.6
  c-27.45-2.415-52.848,9.868-49.804,37.203c-0.2,0-0.4,0-0.6,0C239.604,133.642,259.054,130.536,277.824,123.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M136.212,126.611c3.8,0.2,7.601,0.4,11.401,0.6c0,0.2,0,0.4,0,0.6
  c-4.8-0.2-9.601-0.4-14.401-0.6C134.211,127.011,135.212,126.811,136.212,126.611z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M187.816,126.611c1.4,0.4,2.8,0.8,4.2,1.2c0,0.2,0,0.4,0,0.6
  c-2.135,12.542-16.53,13.373-26.402,18.602c-5.6,7.2-11.202,14.402-16.801,21.602c0.6,0.4,1.2,0.8,1.8,1.2c1.4,0.4,2.8,0.8,4.2,1.2
  c2.2-1.8,4.4-3.6,6.601-5.4c-4.279,9.603-12.585,5.469-18.602,9.601c-8.2,8.4-16.402,16.802-24.602,25.202
  c0.408,0.017,2.213-0.28,1.2,0.6c-10.021,3.276-15.574,13.563-24.602,18.602c-0.8-0.2-1.6-0.4-2.4-0.6c0-0.8,0-1.6,0-2.4
  c19.074-13.472,37.89-26.354,49.804-46.804c-1.4-0.6-2.8-1.2-4.2-1.8c-4.516,0.591-6.118,2.7-9.001,4.8c1.4-1.8,2.8-3.601,4.2-5.4
  c4.857-1.869,8.485-1.25,12.601-1.2c9.826-21.383,37.668-19.735,45.604-37.203c-0.4-0.6-0.8-1.2-1.2-1.8
  C189.417,127.011,188.616,126.811,187.816,126.611z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M186.616,127.211c0.4,0,0.8,0,1.2,0
  C187.417,127.211,187.016,127.211,186.616,127.211z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M328.829,127.211c1.6,0.2,3.2,0.4,4.8,0.6c-2.2,0-4.4,0-6.601,0
  C327.628,127.611,328.229,127.411,328.829,127.211z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M131.412,127.811c0.6,0,1.2,0,1.8,0
  C132.612,127.811,132.011,127.811,131.412,127.811z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M147.613,127.811c0.6,0,1.2,0,1.8,0
  C148.813,127.811,148.213,127.811,147.613,127.811z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M185.416,127.811c0.4,0,0.8,0,1.2,0
  C186.216,127.811,185.816,127.811,185.416,127.811z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M333.629,127.811c0.4,0,0.8,0,1.2,0
  C334.429,127.811,334.029,127.811,333.629,127.811z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M129.611,128.411c0.6,0,1.2,0,1.8,0
  C130.812,128.411,130.211,128.411,129.611,128.411z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M149.413,128.411c0.4,0,0.8,0,1.2,0
  C150.213,128.411,149.813,128.411,149.413,128.411z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M184.216,128.411c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C183.816,129.211,184.016,128.811,184.216,128.411z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M325.228,128.411c0.6,0,1.2,0,1.8,0c0,0.2,0,0.4,0,0.6c-1,0-2,0-3,0
  C324.428,128.811,324.828,128.611,325.228,128.411z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M128.411,129.011c0.4,0,0.8,0,1.2,0
  C129.211,129.011,128.811,129.011,128.411,129.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M150.613,129.011c8.613,3.676,5.181,9.403,3.6,16.801
  c0.2,0.4,0.4,0.8,0.6,1.2c2.6,0.4,5.201,0.8,7.801,1.2c-3.2-0.4-6.401-0.8-9.601-1.2c-1-1.2-2-2.4-3-3.6
  C150.645,136.04,154.292,134.563,150.613,129.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M335.429,129.011c0.6,0.6,1.2,1.2,1.8,1.8
  c-0.856,13.244-14.633,24.64-25.202,28.202C319.735,151.284,338.208,144.572,335.429,129.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M127.211,129.611c0.4,0,0.8,0,1.2,0
  C128.011,129.611,127.611,129.611,127.211,129.611z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M182.416,129.611c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C182.016,130.411,182.216,130.011,182.416,129.611z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M322.828,129.611c0.4,0,0.8,0,1.2,0
  C323.628,129.611,323.228,129.611,322.828,129.611z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M126.011,130.211c0.4,0,0.8,0,1.2,0
  C126.811,130.211,126.411,130.211,126.011,130.211z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M124.811,130.812c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C124.411,131.611,124.611,131.211,124.811,130.812z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M321.028,130.812c0.4,0,0.8,0,1.2,0
  C321.828,130.812,321.428,130.812,321.028,130.812z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M319.828,131.412c0.4,0,0.8,0,1.2,0
  C320.628,131.412,320.228,131.412,319.828,131.412z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M123.011,132.011c0.4,0,0.8,0,1.2,0c-1,0.8-2,1.601-3,2.4
  C121.811,133.612,122.411,132.812,123.011,132.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M179.416,132.011c0.4,0,0.8,0,1.2,0c-1,0.8-2,1.601-3,2.4
  C178.215,133.612,178.815,132.812,179.416,132.011z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M318.027,132.611c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C317.627,133.412,317.828,133.012,318.027,132.611z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M315.627,134.412c0.4,0,0.8,0,1.2,0
  c-5.8,7.4-11.602,14.802-17.402,22.202c-11.19,18.017-17.502,40.6-37.203,53.404c-5.961,3.875-22.556,14.089-33.603,7.801
  c26.778,1.632,37.836-12.153,48.004-28.802c1.779-2.913,13.04-17.771,10.201-19.802c5.857-4.788,8.718-13.062,13.201-19.202
  C305.226,144.813,310.427,139.612,315.627,134.412z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M174.615,136.212c0.4,0,0.8,0,1.2,0c-2.6,2.6-5.201,5.201-7.801,7.801
  C170.214,141.413,172.415,138.812,174.615,136.212z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M118.21,136.812c-0.193,1.234,0.202,1.02-1.2,2.4
  C117.41,138.412,117.81,137.612,118.21,136.812z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M116.41,139.212c-0.132,0.88,0.248,0.603-0.6,1.8
  C116.01,140.412,116.21,139.812,116.41,139.212z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M115.21,141.012c0.2,0.4,0.4,0.8,0.6,1.2
  C115.61,141.813,115.41,141.412,115.21,141.012z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M114.61,142.212c0.2,0.6,0.4,1.2,0.6,1.8c-0.2,0-0.4,0-0.6,0
  C114.61,143.413,114.61,142.813,114.61,142.212z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M114.01,144.013c0.6,2.8,1.2,5.601,1.8,8.4c-0.4-0.2-0.8-0.4-1.2-0.6
  C114.41,149.213,114.21,146.612,114.01,144.013z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M144.013,147.613c0.4,0,0.8,0,1.2,0c-1.2,1-2.4,2-3.6,3
  C142.412,149.613,143.212,148.613,144.013,147.613z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M238.221,149.413c0.2,0.4,0.4,0.8,0.6,1.2
  C238.621,150.213,238.421,149.813,238.221,149.413z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M140.412,150.613c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C140.012,151.413,140.212,151.013,140.412,150.613z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M237.621,151.213c0.2,0.4,0.4,0.8,0.6,1.2
  C238.021,152.013,237.821,151.613,237.621,151.213z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M138.612,151.813c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C138.212,152.613,138.412,152.213,138.612,151.813z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M115.81,152.413c3.838,2.577,7.406,2.664,12.601,4.801
  C122.104,157.521,117.801,156.452,115.81,152.413z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M237.021,152.413c0.2,0.4,0.4,0.8,0.6,1.2
  C237.42,153.213,237.221,152.813,237.021,152.413z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M136.812,153.013c0.4,0,0.8,0,1.2,0
  C137.612,153.013,137.212,153.013,136.812,153.013z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M135.612,153.613c0.4,0,0.8,0,1.2,0
  C136.412,153.613,136.012,153.613,135.612,153.613z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M236.42,153.613c0.2,0.4,0.4,0.8,0.6,1.2
  C236.821,154.414,236.621,154.013,236.42,153.613z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M134.412,154.213c0.4,0,0.8,0,1.2,0
  C135.212,154.213,134.812,154.213,134.412,154.213z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M133.211,154.813c0.4,0,0.8,0,1.2,0
  C134.012,154.813,133.611,154.813,133.211,154.813z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M235.82,154.813c-0.132,0.88,0.249,0.602-0.6,1.8
  C235.42,156.014,235.621,155.414,235.82,154.813z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M131.412,155.414c0.6,0,1.2,0,1.8,0
  C132.612,155.414,132.011,155.414,131.412,155.414z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M128.411,156.014c1,0.2,2,0.4,3,0.6
  C130.412,156.414,129.411,156.213,128.411,156.014z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M234.62,156.614c0.2,0.4,0.4,0.8,0.6,1.2
  C235.021,157.414,234.82,157.014,234.62,156.614z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M233.42,158.414c-0.132,0.88,0.248,0.603-0.6,1.8
  C233.02,159.614,233.22,159.014,233.42,158.414z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M310.827,159.014c0.4,0,0.8,0,1.2,0c-1,0.6-2,1.2-3,1.8
  C309.627,160.214,310.227,159.614,310.827,159.014z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M231.62,160.814c-0.132,0.88,0.248,0.602-0.6,1.8
  C231.22,162.014,231.42,161.414,231.62,160.814z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M307.827,160.814c0.4,0,0.8,0,1.2,0
  C308.627,160.814,308.227,160.814,307.827,160.814z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M244.221,161.414c2.2,2.8,4.4,5.601,6.601,8.401
  C247.421,168.329,245.072,165.469,244.221,161.414z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M306.626,161.414c0.4,0,0.8,0,1.2,0c-1.559,1.728-3.83,3.004-6,2.4
  C303.426,163.014,305.026,162.214,306.626,161.414z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M300.026,164.414c0.6,0,1.2,0,1.8,0c0,0.2,0,0.4,0,0.6
  c-2,0.4-4,0.8-6,1.2C297.226,165.614,298.626,165.014,300.026,164.414z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M200.417,168.015c0.6,0.8,1.2,1.6,1.8,2.4
  C201.618,169.615,201.018,168.814,200.417,168.015z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M223.819,168.615c0.4,0,0.8,0,1.2,0
  C224.62,168.615,224.219,168.615,223.819,168.615z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M222.02,169.815c0.399,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C221.619,170.615,221.819,170.215,222.02,169.815z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M250.822,169.815c1.6,0.6,3.2,1.2,4.8,1.8c0,0.2,0,0.4,0,0.6
  C254.022,171.415,252.422,170.615,250.822,169.815z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M284.425,169.815c0.8,0,1.6,0,2.4,0c0,0.2,0,0.4,0,0.6
  c-8.104,1.582-22.459,6.82-31.203,1.8C264.951,173.375,277.221,174.143,284.425,169.815z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M202.817,171.015c0.6,0.4,1.2,0.8,1.8,1.2
  C204.018,171.815,203.417,171.415,202.817,171.015z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M220.219,171.015c0.4,0,0.8,0,1.2,0
  C221.019,171.015,220.619,171.015,220.219,171.015z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M219.019,171.615c0.4,0,0.8,0,1.2,0
  C219.819,171.615,219.419,171.615,219.019,171.615z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M204.618,172.215c0.6,0,1.2,0,1.8,0
  C205.818,172.215,205.218,172.215,204.618,172.215z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M217.219,172.215c0.6,0,1.2,0,1.8,0
  C218.419,172.215,217.819,172.215,217.219,172.215z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M375.633,190.816c1.8,0.4,3.6,0.8,5.4,1.2c0,1.4,0,2.8,0,4.201
  c3.136-2.682,2.88-4.668,9-4.801c-12.775,18.555-26.077,33.869-40.204,49.805c-2.825,3.187-13.037,15.263-19.201,10.201
  c11.102,1.813,21.087-15.194,25.202-22.802c-3.4,1.4-6.801,2.801-10.201,4.201c3.127-3.053,7.517-2.892,11.401-5.4
  c4.3-2.778,24.758-31.297,22.202-36.003c-0.2,0-0.4,0-0.6,0c-9.562,1.064-25.46,17.192-24.002,27.002c-0.4-0.2-0.8-0.4-1.2-0.6
  c-1.068-3.845-1.259-9.183,0.6-11.401C358.969,198.139,367.037,195.56,375.633,190.816z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M304.826,191.417c1.2,0.2,2.4,0.4,3.601,0.6
  c-9.138,1.15-21.294,15.346-22.202,24.602c0.4,0.6,0.8,1.2,1.2,1.8c1.8-0.4,3.601-0.8,5.4-1.2c-0.2,0.4-0.4,0.8-0.6,1.2
  c-4.074,0.642-5.577,0.974-7.2-2.4C281.503,202.254,296.577,196.097,304.826,191.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M327.628,191.417c0.8,0,1.6,0,2.4,0c0,0.2,0,0.4,0,0.6
  C329.229,191.816,328.428,191.617,327.628,191.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M343.83,191.417c1,0.2,2,0.4,3,0.6
  C345.83,191.816,344.83,191.617,343.83,191.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M137.412,192.017c2.6,0.2,5.201,0.4,7.8,0.6c0,0.2,0,0.4,0,0.6
  c-3.4-0.2-6.801-0.4-10.201-0.6C135.812,192.417,136.612,192.217,137.412,192.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M308.427,192.017c1.154,0.835,0.359,0.061,1.2,1.2
  C309.227,192.817,308.827,192.417,308.427,192.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M325.828,192.017c0.6,0,1.2,0,1.8,0c0,0.2,0,0.4,0,0.6
  C325.731,192.625,326.778,192.696,325.828,192.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M330.029,192.017c0.4,0,0.8,0,1.2,0
  c2.084,11.968-8.57,18.685-13.801,26.402c-1.8,0-3.601,0-5.4,0c0-0.2,0-0.4,0-0.6c0.8-0.8,1.6-1.6,2.4-2.4
  C317.904,208.104,330.659,200.272,330.029,192.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M342.03,192.017c0.6,0,1.2,0,1.8,0
  C343.23,192.017,342.63,192.017,342.03,192.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M346.83,192.017c1.607,0.934,1.319,1.125,2.4,2.4
  c-1.452,10.313-8.46,14.053-13.201,21.002c0.2,1,0.4,2,0.6,3c0.2,0,0.4,0,0.6,0c2.4-1,4.801-2,7.201-3c-0.4,0.6-0.8,1.2-1.2,1.8
  c-2.2,0.6-4.401,1.2-6.601,1.8c-0.8-1.2-1.601-2.4-2.4-3.6c1.564-9.892,8.905-13.243,13.201-20.402
  C347.23,194.017,347.03,193.017,346.83,192.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M340.83,192.617c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C340.43,193.417,340.629,193.017,340.83,192.617z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M133.211,193.217c0.6,0,1.2,0,1.8,0
  C134.412,193.217,133.812,193.217,133.211,193.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M145.212,193.217c0.8,0.4,1.601,0.8,2.4,1.2
  c0.4,2.6,0.8,5.201,1.2,7.801c-2.879,5.819-7.629,8.521-10.801,13.801c0.792,2.297-0.001,1.248,1.8,2.4
  c7.699,2.563,15.367-8.448,19.802-12.001c-2.829,6.224-11.124,13.421-19.802,13.801c-3.055-1.747-3.528-3.034-4.8-6.601
  C137.728,206.798,148.206,200.27,145.212,193.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M309.627,193.217c0,1.4,0,2.8,0,4.2
  C309.627,196.017,309.627,194.617,309.627,193.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M324.028,193.217c0.4,0,0.8,0,1.2,0
  C324.828,193.217,324.428,193.217,324.028,193.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M131.412,193.817c0.6,0,1.2,0,1.8,0
  C132.612,193.817,132.011,193.817,131.412,193.817z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M130.211,194.417c0.4,0,0.8,0,1.2,0
  C131.011,194.417,130.611,194.417,130.211,194.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M322.228,194.417c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C321.828,195.217,322.028,194.817,322.228,194.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M338.429,194.417c0.4,0,0.8,0,1.2,0
  C339.229,194.417,338.829,194.417,338.429,194.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M128.411,195.017c0.6,0,1.2,0,1.8,0c0,0.2,0,0.4,0,0.6c-1,0-2,0-3,0
  C127.611,195.417,128.011,195.217,128.411,195.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M126.011,196.217c0.4,0,0.8,0,1.2,0
  C126.811,196.217,126.411,196.217,126.011,196.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M124.811,196.817c0.4,0,0.8,0,1.2,0
  C125.611,196.817,125.211,196.817,124.811,196.817z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M319.228,196.817c0.4,0,0.8,0,1.2,0
  c-3.4,3.4-6.801,6.801-10.201,10.201C313.227,203.618,316.228,200.217,319.228,196.817z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M335.429,196.817c0.4,0,0.8,0,1.2,0c-2.6,2.6-5.201,5.201-7.801,7.801
  C331.028,202.018,333.229,199.417,335.429,196.817z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M123.611,197.417c0.4,0,0.8,0,1.2,0
  C124.411,197.417,124.011,197.417,123.611,197.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M309.027,197.417c0.2,0.6,0.4,1.2,0.6,1.8c-0.2,0-0.4,0-0.6,0
  C309.027,198.617,309.027,198.017,309.027,197.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M122.411,198.017c0.4,0,0.8,0,1.2,0
  C123.211,198.017,122.811,198.017,122.411,198.017z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M121.21,198.617c0.4,0,0.8,0,1.2,0
  C122.011,198.617,121.61,198.617,121.21,198.617z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M120.01,199.217c0.4,0,0.8,0,1.2,0
  C120.811,199.217,120.41,199.217,120.01,199.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M308.427,199.217c0.2,0.4,0.4,0.8,0.6,1.2
  C308.827,200.018,308.626,199.617,308.427,199.217z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M223.819,199.817c1.2,0,2.4,0,3.601,0
  c2.033,3.046,1.998,4.755,0,7.801c-0.8,0-1.601,0-2.4,0c-1.047-1.69-1.302-1.541-1.8-4.201c-0.6,0.4-1.2,0.8-1.8,1.2
  c-0.2,0.8-0.4,1.6-0.6,2.4c0.543,6.022,2.945,6.997,6,10.201c-3.309-1.114-4.854-2.721-6-6c0-2.4,0-4.801,0-7.201
  C221.819,202.618,222.819,201.217,223.819,199.817z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M307.827,200.417c0.2,0.4,0.4,0.8,0.6,1.2
  C308.227,201.218,308.027,200.817,307.827,200.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M307.227,201.618c-0.132,0.88,0.248,0.602-0.6,1.8
  C306.827,202.818,307.026,202.218,307.227,201.618z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M306.026,203.417c-0.132,0.88,0.249,0.603-0.6,1.8
  C305.626,204.618,305.827,204.018,306.026,203.417z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M304.826,205.218c0.6,0.8,1.2,1.6,1.8,2.4c-0.8-0.4-1.6-0.8-2.4-1.2
  C304.426,206.018,304.626,205.618,304.826,205.218z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M309.027,207.018c0.4,0,0.8,0,1.2,0c-0.4,0.4-0.8,0.8-1.2,1.2
  c-0.8-0.2-1.6-0.4-2.4-0.6C307.427,207.418,308.227,207.218,309.027,207.018z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M387.634,207.018c-0.282,1.569,0.055,1.879-2.4,3
  C386.033,209.018,386.833,208.018,387.634,207.018z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M303.026,207.618c-0.132,0.88,0.248,0.602-0.6,1.8
  C302.626,208.818,302.826,208.218,303.026,207.618z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M352.23,207.618c-0.215,1.784-0.93,3.121-3.6,4.2
  C349.83,210.418,351.031,209.018,352.23,207.618z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M204.018,210.018c0.4,0,0.8,0,1.2,0c-1.2,1-2.4,2-3.6,3
  C202.417,212.019,203.218,211.018,204.018,210.018z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M366.632,212.418c0.4,0,0.8,0,1.2,0c-1.4,1.2-2.801,2.4-4.201,3.6
  C364.631,214.819,365.632,213.619,366.632,212.418z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M200.417,213.019c0.041,1.083,0.685,0.738-1.2,1.8
  C199.617,214.219,200.018,213.619,200.417,213.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M297.026,213.619c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C296.625,214.418,296.826,214.019,297.026,213.619z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M345.63,213.619c0.042,1.083,0.685,0.738-1.2,1.8
  C344.83,214.819,345.23,214.219,345.63,213.619z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M380.433,213.619c0.041,1.083,0.685,0.738-1.2,1.8
  C379.633,214.819,380.033,214.219,380.433,213.619z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M198.017,214.819c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C197.617,215.619,197.817,215.219,198.017,214.819z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M294.625,215.419c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C294.226,216.219,294.426,215.819,294.625,215.419z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M196.217,216.019c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C195.817,216.819,196.017,216.419,196.217,216.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M362.432,216.019c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C362.031,216.819,362.231,216.419,362.432,216.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M377.433,216.019c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C377.033,216.819,377.233,216.419,377.433,216.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M292.825,216.619c0.4,0,0.8,0,1.2,0
  C293.625,216.619,293.226,216.619,292.825,216.619z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M194.417,217.219c0.4,0,0.8,0,1.2,0
  C195.217,217.219,194.817,217.219,194.417,217.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M226.82,217.219c0.6,0,1.2,0,1.8,0
  C228.02,217.219,227.42,217.219,226.82,217.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M360.631,217.219c0.4,0,0.8,0,1.2,0c-1.2,0.6-2.4,1.2-3.601,1.8
  c0-0.2,0-0.4,0-0.6C359.031,218.019,359.831,217.619,360.631,217.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M375.633,217.219c0.041,1.083,0.685,0.738-1.2,1.8
  C374.833,218.419,375.232,217.819,375.633,217.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M193.217,217.819c0.4,0,0.8,0,1.2,0
  C194.017,217.819,193.617,217.819,193.217,217.819z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M192.017,218.419c0.4,0,0.8,0,1.2,0
  C192.817,218.419,192.417,218.419,192.017,218.419z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M190.816,219.019c0.4,0,0.8,0,1.2,0
  C191.617,219.019,191.216,219.019,190.816,219.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M355.231,219.019c1,0.2,2,0.4,3,0.6
  C357.231,219.419,356.231,219.219,355.231,219.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M373.232,219.019c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C372.832,219.819,373.032,219.419,373.232,219.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M189.616,219.619c0.4,0,0.8,0,1.2,0
  C190.417,219.619,190.017,219.619,189.616,219.619z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M188.417,220.219c0.4,0,0.8,0,1.2,0
  C189.216,220.219,188.816,220.219,188.417,220.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M371.432,220.219c0.4,0,0.8,0,1.2,0
  C372.232,220.219,371.832,220.219,371.432,220.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M186.616,220.819c0.6,0,1.2,0,1.8,0
  C187.816,220.819,187.216,220.819,186.616,220.819z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M370.232,220.819c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C369.832,221.619,370.032,221.219,370.232,220.819z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M368.432,222.019c0.4,0,0.8,0,1.2,0
  C369.232,222.019,368.832,222.019,368.432,222.019z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M367.232,222.619c0.4,0,0.8,0,1.2,0
  C368.032,222.619,367.632,222.619,367.232,222.619z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M366.032,223.219c0.4,0,0.8,0,1.2,0
  C366.832,223.219,366.432,223.219,366.032,223.219z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M364.832,223.819c0.4,0,0.8,0,1.2,0
  C365.632,223.819,365.231,223.819,364.832,223.819z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M169.814,228.02c0.4,0,0.8,0,1.2,0
  C170.615,228.02,170.215,228.02,169.814,228.02z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M168.615,228.62c0.4,0,0.8,0,1.2,0
  C169.415,228.62,169.015,228.62,168.615,228.62z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M167.415,229.22c0.4,0,0.8,0,1.2,0
  C168.215,229.22,167.814,229.22,167.415,229.22z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M166.214,229.82c0.4,0,0.8,0,1.2,0
  c-7.14,6.646-21.913,10.252-19.202,24.602c-0.4-0.2-0.8-0.4-1.2-0.6C144.522,240.406,158.674,235.451,166.214,229.82z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M344.43,232.82c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C344.03,233.62,344.23,233.22,344.43,232.82z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M342.63,234.021c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C342.229,234.82,342.43,234.42,342.63,234.021z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M340.229,235.82c0.4,0,0.8,0,1.2,0c-0.6,0.4-1.2,0.8-1.8,1.2
  C339.83,236.621,340.029,236.22,340.229,235.82z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M337.229,238.221c0.4,0,0.8,0,1.2,0
  c-3.435,4.57-5.588,7.367-8.4,13.201c0-1.2,0-2.4,0-3.6C332.429,244.622,334.829,241.421,337.229,238.221z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M156.614,252.622c0.041,1.083,0.685,0.738-1.2,1.8
  C155.813,253.822,156.213,253.222,156.614,252.622z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M154.213,254.422c0.4,0,0.8,0,1.2,0
  C155.014,254.422,154.613,254.422,154.213,254.422z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M148.813,255.022c0.4,0,0.8,0,1.2,0
  C149.613,255.022,149.213,255.022,148.813,255.022z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M153.013,255.022c0.4,0,0.8,0,1.2,0
  C153.813,255.022,153.413,255.022,153.013,255.022z"/>
<path fill-rule="evenodd" clip-rule="evenodd" fill="none" d="M150.013,255.622c1,0.2,2,0.4,3,0.6
  C152.013,256.022,151.013,255.822,150.013,255.622z"/>
</svg>
</div>
   <!-- swiper -->
  <div class="cd-modal">
    <div class="modal-content">
    <div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide"><img src="../bootstrap/images/11.jpg"></div>
    <div class="swiper-slide"><img src="../bootstrap/images/22.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/33.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/44.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/55.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/66.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/77.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/88.jpg"></div>
   <div class="swiper-slide"><img src="../bootstrap/images/99.jpg"></div>
  </div>
</div>
    </div> <!-- .modal-content -->

    <a href="#0" class="modal-close">Close</a>
  </div>
  <div class="cd-transition-layer"> 
    <div class="bg-layer"></div>
  </div> <!-- .cd-modal -->


  
    <div class="content">
    
      <div class="component" data-path-start="M280,466c0,0.13-0.001,0.26-0.003,0.39c-0.002,0.134-0.004,0.266-0.007,0.396
C279.572,482.992,266.307,496,250,496h-2.125H51.625H50c-16.316,0-29.592-13.029-29.99-29.249c-0.003-0.13-0.006-0.261-0.007-0.393
C20.001,466.239,20,466.119,20,466l0,0c0-0.141,0.001-0.281,0.003-0.422C20.228,449.206,33.573,436,50,436h1.625h196.25H250
c16.438,0,29.787,13.222,29.997,29.608C279.999,465.738,280,465.869,280,466L280,466z" data-path-listen="M181,466c0,0.13-0.001,0.26-0.003,0.39c-0.002,0.134-0.004,0.266-0.007,0.396
C180.572,482.992,167.307,496,151,496h-2.125h2.75H150c-16.316,0-29.592-13.029-29.99-29.249c-0.003-0.13-0.006-0.261-0.007-0.393
C120.001,466.239,120,466.119,120,466l0,0c0-0.141,0.001-0.281,0.003-0.422C120.228,449.206,133.573,436,150,436h1.625h-2.75H151
c16.438,0,29.787,13.222,29.997,29.608C180.999,465.738,181,465.869,181,466L181,466z" data-path-player="M290,40c0,0.13-0.001,380.26-0.003,380.39c-0.002,0.134,0.006,24.479,0.003,24.609 c0,3.095-2.562,5.001-5,5.001h-27.125H41.625H15c-1.875,0-5-1.25-5-5.001c-0.003-0.13,0.004-24.509,0.003-24.641 C10.001,420.239,10,40.119,10,40l0,0c0-0.141-0.002-24.859,0-25c0,0,0-5,5-5h26.625h216.25H285c2.438,0,5,1.906,5,5 C290.002,15.13,290,39.869,290,40L290,40z">
        <!-- SVG with morphing paths and initial start button shape -->
        <svg class="morpher" width="300" height="500">
          <path class="morph__button" d="M280,466c0,0.13-0.001,0.26-0.003,0.39c-0.002,0.134-0.004,0.266-0.007,0.396
C279.572,482.992,266.307,496,250,496h-2.125H51.625H50c-16.316,0-29.592-13.029-29.99-29.249c-0.003-0.13-0.006-0.261-0.007-0.393
C20.001,466.239,20,466.119,20,466l0,0c0-0.141,0.001-0.281,0.003-0.422C20.228,449.206,33.573,436,50,436h1.625h196.25H250
c16.438,0,29.787,13.222,29.997,29.608C279.999,465.738,280,465.869,280,466L280,466z"/>
        </svg>
        <!-- Initial start button that switches into the recording button -->
        <button class="button button--start">
          <span class="button__content button__content--start">Listen to this song</span>
          <span class="button__content button__content--listen"><span class="icon icon--microphone"></span></span>
        </button>
        <!-- Music player -->
        <div class="player player--hidden">
          <img class="player__cover" src="../bootstrap/images/Gramatik.jpg"  alt="Water 4 The Soul by Gramatik" />
          <div class="player__meta">
            <h3 class="player__track">Virtual Insight</h3>
            <h3 class="player__album">
              <span class="player__album-name">Water 4 The Soul</span> by <span class="player__artist">Gramatik</span>
            </h3>
           
          </div>
          <button class="button button--close"><span class="icon icon--cross"></span></button>
        </div><!-- /player -->
      </div><!-- /component -->
       <div id="wrapper">
      <audio preload="auto" controls>
        <source src="audio/BlueDucks_FourFlossFiveSix.mp3">
        <source src="audio/BlueDucks_FourFlossFiveSix.ogg">
        <source src="audio/BlueDucks_FourFlossFiveSix.wav">
      </audio>
      </div>
     
    </div><!-- /content -->

  


  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/responsive-nav.min.js"></script>
  <script src="js/swiper-3.2.7.min.js"></script>
    <script src="js/FSS.js"></script>
    <script src="js/main.js"></script>
    <script src="js/classie.js"></script>
  <script src="js/snap.svg-min.js"></script>
  <script src="js/main1.js"></script>
  <script src="js/audioplayer.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/localization/messages_zh.js"></script>

      <!-- IE support -->
      <script src="https://cdn.jsdelivr.net/es6-promise/latest/es6-promise.min.js"></script>
  <script src="js/sweetalert2.min.js"></script>
   <script type="text/javascript">(function () {
            if (!String.prototype.trim) {
                (function () {
                    // Make sure we trim BOM and NBSP
                    var rtrim = /^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g;
                    String.prototype.trim = function () {
                        return this.replace(rtrim, '');
                    };
                })();
            }

            [ ].slice.call(document.querySelectorAll('input.input__field')).forEach(function (inputEl) {
                // in case the input is already filled..
                if (inputEl.value.trim() !== '') {
                    classie.add(inputEl.parentNode, 'input--filled');
                }

                // events:
                inputEl.addEventListener('focus', onInputFocus);
                inputEl.addEventListener('blur', onInputBlur);
            });

            function onInputFocus(ev) {
                classie.add(ev.target.parentNode, 'input--filled');
            }

            function onInputBlur(ev) {
                if (ev.target.value.trim() === '') {
                    classie.remove(ev.target.parentNode, 'input--filled');
                }
            }
        })();
    </script>
  <script>$( function() { $( 'audio' ).audioPlayer(); } );</script>
   <script language="javascript">

  var mySwiper = new Swiper('.swiper-container', {
   effect : 'flip',
   flip: {
            slideShadows : true,
            limitRotation : true,
        }

})
</script>
<script type="text/javascript">
  var navigation = responsiveNav("#nav", {customToggle: "#toggle"});

</script>
<script type="text/javascript">
  $(document).ready(function(){
   
  FSS("container", "output");
   var timer = null;
 
   function fnColor(){

    var arr1 = ["#49dd84","#ff5a3d","#ffac3f","#ff8864"];
    var n = Math.floor(Math.random() * arr1.length + 1)-1; 
    $("body").css("background-color", arr1[n]);
   }
     timer=setInterval(fnColor, 5000);
   $(".lined").click(function(){
     clearInterval(timer);
     $(".lined").animate({opacity:'0'})
      $("body").css("background-color", "#7dd79e");
      $("#img1").attr("class","car");
      $(".car").delay(1200).animate({opacity:'1'},1500)
      $(".dotted").css("display","block")
      $(".dotted").delay(2200).animate({opacity:'1'},1000)
      
   })
 $(".dotted").click(function(){
     
     $(".dotted").animate({opacity:'0'})
      $("body").css("background-color", "#70217a");
      $("#img1").attr("class","bas");
      $("#img1").css("opacity","0");
      $(".bas").delay(1200).animate({opacity:'1'},1500)
      $(".dashed").css("display","block")
      $(".dashed").delay(2200).animate({opacity:'1'},1000)
   
       $(".headt span").css({"color":"#ebdb3d"})
       $(".dashed").css("color", "#ebdb3d")
   })
 $(".dashed").click(function(){
     
     $(".dashed").animate({opacity:'0'})
      $("body").css("background-color", "#42636b");
      $("#img1").attr("class","head");
      $("#img1").css("opacity","0");
      $(".gang").css("display","block")
       $(".gang").delay(1200).animate({opacity:'1'},1500)
      $(".head").delay(1200).animate({opacity:'1'},1500)
      $(".dashedd").css("display","block")
      $(".dashedd").delay(2200).animate({opacity:'1'},1000)
      $(".headt span").css({"color":"#eae9dc"})
      $(".dashedd").css("color", "#eae9dc")
   })
 $(".modal-close").click(function(){
    $(".dashedd").css("display","none");
    $(".linedd").css({"display":"block","color":"#eae9dc"});

    $(".linedd").delay(100).animate({opacity:'1'},1000)
   })
   
 $(".linedd").click(function(){
     
     $(".linedd").animate({opacity:'0'})
     $(".content").css("display","block")
     $(".content").delay(1200).animate({opacity:'1'},1000)
      $("body").css("background", "url(../bootstrap/images/bg.png)");
     $(".headt span").css("display","none")
      $("#img1").css("display","none");
   })
  $(".button--start").click(function(){
      $("#wrapper").css("display","block")
     $("#wrapper").delay(7200).animate({opacity:'1'},1000)
   })
   $(".button--close").click(function(){
      $("#wrapper").css({"dislplay":"none","opacity":"0"})
      
   })
    })
</script>
</body>
</html>