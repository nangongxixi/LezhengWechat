;(function($, window, document,undefined) {
     
    var abc = function(ele, opt) {
        this.$element = ele,
        this.defaults = {},
        this.options = $.extend({}, this.defaults, opt)
    }
     
    abc.prototype = {
        mobileico: function() {
           alert(555);
        },
        b: function(){},
        c: function(){}
    }
    
    $.fn.myPlugin = function(options) {
        var abc1 = new abc(this, options);
        //调用其方法
        return abc1.a();
    }
})(jQuery, window, document);

/*
;(function mobileico() {
alert(666);   
	 // 获取节点
	var block = document.getElementById("return_index");
	var oW, oH;
	// 绑定touchstart事件
	block.addEventListener("touchstart", function (e) {
		console.log(e);
		var touches = e.touches[0];
		oW = touches.clientX - block.offsetLeft;
		oH = touches.clientY - block.offsetTop;
		//阻止页面的滑动默认事件
		document.addEventListener("touchmove", defaultEvent, false);
	}, false)

	block.addEventListener("touchmove", function (e) {
		var touches = e.touches[0];
		var oLeft = touches.clientX - oW;
		var oTop = touches.clientY - oH;
		if (oLeft < 0) {
			oLeft = 0;
		} else if (oLeft > document.documentElement.clientWidth - block.offsetWidth) {
			oLeft = (document.documentElement.clientWidth - block.offsetWidth);
		}
		block.style.left = oLeft + "px";
		block.style.top = oTop + "px";
	}, false);

	block.addEventListener("touchend", function () {
		document.removeEventListener("touchmove", defaultEvent, false);
	}, false);
	function defaultEvent(e) {
		e.preventDefault();
	}
}}

*/