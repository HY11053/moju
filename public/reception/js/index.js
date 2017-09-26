$(function(){
//app下拉
$("#js_phone_app,#js_add_wx").hover(function(){
	$(this).addClass("hover");
	},function(){
	$(this).removeClass("hover");
});
});


function ch(t){
if (t==1)
{
 document.getElementById("ch1").className="cur";
 document.getElementById("ch2").className="";
 document.getElementById("ch3").className="";
 document.getElementById("a2_3_1").className="lcur";
 document.getElementById("a2_3_2").className="lnone";
 document.getElementById("a2_3_3").className="lnone";
}
if (t==2)
{
 document.getElementById("ch1").className="";
 document.getElementById("ch2").className="cur";
 document.getElementById("ch3").className="";
 document.getElementById("a2_3_1").className="lnone";
 document.getElementById("a2_3_2").className="lcur";
 document.getElementById("a2_3_3").className="lnone";
}
if (t==3)
{
 document.getElementById("ch1").className="";
 document.getElementById("ch2").className="";
 document.getElementById("ch3").className="cur";
 document.getElementById("a2_3_1").className="lnone";
 document.getElementById("a2_3_2").className="lnone";
 document.getElementById("a2_3_3").className="lcur";
}
}















$(function(){

//内容页固定导航
    $(document).scroll(function(){
        //获取窗口的滚动条的垂直位置
        var s = $(document).scrollTop();
        //当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
        if( s > 562){
            $(".fixed_nav").addClass("anchor_fixed");
        }else{
            $(".fixed_nav").removeClass("anchor_fixed");
        }

        if( s > 239){
            $(".side_nav").addClass("side_nav_fixed");
        }else{
            $(".side_nav").removeClass("side_nav_fixed");
        }

        if( s > 350){
            $(".ico-backtop").css("display","block");
        }else{
            $(".ico-backtop").css("display","none");
        }

    });

    if($(".fixed_nav").html()){
        $(document).scroll(function(){
            //获取窗口的滚动条的垂直位置
            var s = $(document).scrollTop();
            //当窗口的滚动条的垂直位置大于页面的最小高度时，让返回顶部元素渐现，否则渐隐
            if(s >=$('#js_join_1').offset().top-45 && s<$('#js_join_2').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(0).addClass('cur');
            }else if(s >=$('#js_join_2').offset().top-45 && s<$('#js_join_3').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(1).addClass('cur');
            }else if(s >=$('#js_join_3').offset().top-45 && s<$('#js_join_4').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(2).addClass('cur');
            }else if(s >=$('#js_join_4').offset().top-45 && s<$('#js_join_5').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(3).addClass('cur');
            }else if(s >=$('#js_join_5').offset().top-45 && s<$('#js_join_6').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(4).addClass('cur');
            }else if(s >=$('#js_join_6').offset().top-45 && s<$('#js_join_7').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(5).addClass('cur');
            }else if(s >=$('#js_join_7').offset().top-45){
                $('.fixed_nav li').removeClass("cur").eq(6).addClass('cur');
            }
        });
    }


    $('.js_join_1').click(function(){
        var sTop=$('#js_join_1').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });
    $('.js_join_2').click(function(){
        var sTop=$('#js_join_2').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });
    $('.js_join_3').click(function(){
        var sTop=$('#js_join_3').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });
    $('.js_join_4').click(function(){
        var sTop=$('#js_join_4').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });
    $('.js_join_5').click(function(){
        var sTop=$('#js_join_5').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });
    $('.js_join_6').click(function(){
        var sTop=$('#js_join_6').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });
    $('.js_join_7').click(function(){
        var sTop=$('#js_join_7').offset().top-45;
        $('html,body').animate({scrollTop:sTop+"px"},500);
    });


});
