<?php error_reporting(0);  session_start(); ?>
<?php
    header('Content-Type:text/html; charset=utf-8');
    //数据
    $arr=array(
     //array(分类id,分类名，分类的父id)
     array('id'=>'1','name'=>'数码产品','pid'=>'0'),
     array('id'=>'2','name'=>'家电','pid'=>'0'),
     array('id'=>'3','name'=>'书籍','pid'=>'0'),
     array('id'=>'4','name'=>'服装','pid'=>'0'),
     array('id'=>'5','name'=>'手机','pid'=>'1'),
     array('id'=>'6','name'=>'笔记本','pid'=>'1'),
     array('id'=>'7','name'=>'平板电脑','pid'=>'1'),
     array('id'=>'8','name'=>'智能手机','pid'=>'5'),
     array('id'=>'9','name'=>'功能机','pid'=>'5'),
     array('id'=>'10','name'=>'电视机','pid'=>'2'),
     array('id'=>'11','name'=>'电冰箱','pid'=>'2'),
     array('id'=>'12','name'=>'智能电视','pid'=>'10'),
     array('id'=>'13','name'=>'编程书籍','pid'=>'3'),
     array('id'=>'14','name'=>'JavaScript','pid'=>'13'),
    );
    //获取指定分类的商品
    function getByPid($arr,$pid){
        $result=array();
        foreach($arr as $v){
            if($v['pid']==$pid){
              $result[]=$v;
            }
        }
        return $result;
    }
    //获取请求参数
    $pid=isset($_GET['pid'])?$_GET['pid']:'0';

    $result=getByPid($arr,$pid);
    //输出json数据
    echo json_encode($result);
?>