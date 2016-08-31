<?php
header("Content-type:text/html;charset=utf-8");



  function createHtmlTag($tag = ""){
  	echo "<h1>$tag</h1><br/>";
  }
  createHtmlTag("Hello");

  createHtmlTag("Json和serialize对比");
  $member = array("username","age");
  var_dump($member);
  
  $jsonObj = json_encode($member);

  $serializeObj = serialize($member);
  createHtmlTag($jsonObj);
  createHtmlTag($serializeObj);
   
   
  
  
  ?>