//jquery.scrollTo-1.4.2-min.js
(function(d){var k=d.scrollTo=function(a,i,e){d(window).scrollTo(a,i,e)};k.defaults={axis:'xy',duration:parseFloat(d.fn.jquery)>=1.3?0:1};k.window=function(a){return d(window)._scrollable()};d.fn._scrollable=function(){return this.map(function(){var a=this,i=!a.nodeName||d.inArray(a.nodeName.toLowerCase(),['iframe','#document','html','body'])!=-1;if(!i)return a;var e=(a.contentWindow||a).document||a.ownerDocument||a;return d.browser.safari||e.compatMode=='BackCompat'?e.body:e.documentElement})};d.fn.scrollTo=function(n,j,b){if(typeof j=='object'){b=j;j=0}if(typeof b=='function')b={onAfter:b};if(n=='max')n=9e9;b=d.extend({},k.defaults,b);j=j||b.speed||b.duration;b.queue=b.queue&&b.axis.length>1;if(b.queue)j/=2;b.offset=p(b.offset);b.over=p(b.over);return this._scrollable().each(function(){var q=this,r=d(q),f=n,s,g={},u=r.is('html,body');switch(typeof f){case'number':case'string':if(/^([+-]=)?\d+(\.\d+)?(px|%)?$/.test(f)){f=p(f);break}f=d(f,this);case'object':if(f.is||f.style)s=(f=d(f)).offset()}d.each(b.axis.split(''),function(a,i){var e=i=='x'?'Left':'Top',h=e.toLowerCase(),c='scroll'+e,l=q[c],m=k.max(q,i);if(s){g[c]=s[h]+(u?0:l-r.offset()[h]);if(b.margin){g[c]-=parseInt(f.css('margin'+e))||0;g[c]-=parseInt(f.css('border'+e+'Width'))||0}g[c]+=b.offset[h]||0;if(b.over[h])g[c]+=f[i=='x'?'width':'height']()*b.over[h]}else{var o=f[h];g[c]=o.slice&&o.slice(-1)=='%'?parseFloat(o)/100*m:o}if(/^\d+$/.test(g[c]))g[c]=g[c]<=0?0:Math.min(g[c],m);if(!a&&b.queue){if(l!=g[c])t(b.onAfterFirst);delete g[c]}});t(b.onAfter);function t(a){r.animate(g,j,b.easing,a&&function(){a.call(this,n,b)})}}).end()};k.max=function(a,i){var e=i=='x'?'Width':'Height',h='scroll'+e;if(!d(a).is('html,body'))return a[h]-d(a)[e.toLowerCase()]();var c='client'+e,l=a.ownerDocument.documentElement,m=a.ownerDocument.body;return Math.max(l[h],m[h])-Math.min(l[c],m[c])};function p(a){return typeof a=='object'?a:{top:a,left:a}}})(jQuery);
//jquery.scrollTo-1.4.2-min.js


//  Форма "Обратный звонок"
function sendFormCallBack() {

    event.preventDefault();
    var validPhone = /^[0-9+()-]+$/;

    if ($("#formCallBackPhone").val().search(validPhone) != 0) {
        $("#formCallBackPhone").css({
            'outline-style': 'solid',
            'outline-width': '2px',
            'outline-color': '#ff5102',
            'outline-offset': '-2px'
        });
        $(".forError").html('Мы не сможем дозвониться по этому номеру!');
        return;
    }

    if ($("#formCallBackPhone").val().length < 10) {
        $(".forError").html('Мы не сможем дозвониться по этому номеру!');
        return;
    }

    $.ajax({
        type: "POST",
        async: false,
        url: "http://" + window.location.hostname + "/php/formCallBack.php",
        data: $("#formCallBack").serialize(),
        dataType: "html",
        success: function (data) {
            alert('Ожидайте звонка диспетчера!');
        }
    });
    return;

}

$(document).ready(function () {
    $("img.bus").animate({
        right: "4%",
        bottom: "4%"
    }, 1000);
    
    $("nav").animate({
        opacity: "1"
    }, 1000);
    
    $("a.linkNav").hover(function () {
        $('span.ind').css('color', '#fff');
    });
    
    $(".burgNav").click(function () {
        $('.sideMenu').animate({
            right: "0"
        }, 400);
    });
    
    $(".sideMenu img").click(function () {
        $('.sideMenu').animate({
            right: "-100%"
        }, 400);
    });
    
    $(".img1, .img2, .img3").hover(function () {
        $('.blackOver').animate({
            opacity: 1
        }, 150);
        $('.blackOver a').animate({
            marginBottom: '0'
        }, 150);
    },
                    function () {
        $('.blackOver').animate({
            opacity: 0
        }, 150);
        $('.blackOver a').animate({
            marginBottom: '-100%'
        }, 150);
    });


    $(".arrow_next").hover(function () {
        $(this).prev('.overTrip').animate({
            opacity: '.65'
        }, 300);
    },
                          function () {
        $(this).prev('.overTrip').animate({
            opacity: '0'
        }, 100);
    }
    );
   
    
    //  Стрелка вверх
    $(".forScrollTo").on("click", "a", function (event) {
        event.preventDefault();
        var id = $(this).attr('href'),
            top = $(id).offset().top;
        $('body,html').animate({
            scrollTop: top
        }, 800);
    });
    
    
});