(function($) {

    //扩展这个方法到jquery
    $.fn.extend({

        //插件名字
        bumenico: function() {

            alert(555);
        }
    });

 //传递jQuery到方法中，这样我们可以使用任何javascript中的变量来代替"$"      
})(jQuery); 