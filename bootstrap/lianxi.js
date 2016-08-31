/*(1)*/$.extend({ fun1:function(){alert("执行方法一");} })；

$.fun1();

$.fn.extend({ fun2:function(){alert("执行方法二");}})

$(this).fun2();

$.fn.fun3 = function () {alert("执行方法三")}

$(this).fun3();

/*(2)*/jQuery(function(){});
$(document).ready(function(){});

(function($){})(jQuery);

var fn = function($){};
fn(jQuery);

/*(3)*/
(function ($){
     
   var defaults = {
   	prevId : 'prevBtn',
   	prevText: 'Previous',
   	nextId:'nextBtn',
   	nextText: 'Next'
   }

   var showLink = function (obj) {
   	$(obj).append(function(){return "("+$(obj).attr("href")+")"})
   }

	$.fn.easySlider = function (options){
     
    var options = $.extend(defaults,options);
    
    return this.each(function(){
  
    showLink(this);
    

    });
	}
})(jQuery)

//1.添加一个新的全局函数

jQuery.foo =function(){
	alert('');
}
//2.添加多个新的全局函数
jQuery.foo = function(){
	alert('');
}
jQuery.bar = function(){
	alert('asdasd,which is"'+param+'".');
}

//3.使用jQuery.extend(object)

jQuery.extend({
	foo:function(){
		alert('');
	},
	bar:function(param){
		alert('asdasd,which is"'+param+'".');
	}
})

//使用命名空间

jQuery.myPlugin = {
	foo:function(){
		alert('');
	},
	bar:function(param){
		alert('asdasd,which is"'+param+'".');
}
};

$.myPlugin.foo();
$.myPlugin.bar('baz');

//2.对象级的插件开发

(function($){
	$.fn.extend({
		pluginName:function(opt,callback){

		}
	})
})(jQuery)

(function($){
	$.fn.pluginName = function(){

	}
})(jQuery)

//2.1 在jQuery名称空间下申明一个名字

$.fn.hilight = function(){

};
$('#myDiv').hilight();

//2.2 接受options参数以控制插件的行为

function(){
	
}