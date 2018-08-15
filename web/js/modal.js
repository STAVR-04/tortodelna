$("html").on('click', '.header__close',function () {

   location.href = "http://tortodelna.ru/site/constructorlist/";

});
// $(document).on('pjax:send', function() {
//   alert('<q></q>');
// })
$(document).ready(function () {

});
function getUrlVars()
{
    var vars = [], hash;
    var hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
    for(var i = 0; i < hashes.length; i++)
    {
        hash = hashes[i].split('=');
        vars.push(hash[0]);
        vars[hash[0]] = hash[1];
    }
    return vars;
}
$(document).on('pjax:end', function() {
  var tier = $("#constructor_wrp").attr("tier");
  var col = $("#constructor_wrp").attr("col");
  var tek = $("#constructor_wrp").attr('tek');
  var retur = $("#constructor_wrp").attr('retur');
  var back = $("#constructor_wrp").attr('back');
  //одноярусный на 2 коржа
  if (tier == 1 && col == 1) {
    if (tek == 5 ) {
        if(!retur){
            if (back.length==0) {
                $('.'+tek).fadeTo(0,0);
            }
        }
      setTimeout(function(){
          if(!retur){
              if (back.length==0) {
                  $(".1").fadeTo(300,0);
                  $(".2").fadeTo(300,0);
                  $(".3").fadeTo(100,0);
                  $(".4").fadeTo(300,0);
              }
          }
      $('.'+tek).fadeTo(500,1);
    },400);
    }
    if ( tek == 6) {
      $('.'+tek).fadeTo(0,0);
      setTimeout(function(){
              $('.'+tek).fadeTo(300,1);
    },500);
    }
    if (tek>=1 && tek<=4){
      if(!retur){
        if (back.length==0) {
          $('.'+tek).fadeTo(0,0);
        }
      }

  setTimeout(function(){$('.'+tek).fadeTo(300,1);},500);
    }
  }

    //одноярусный на 3 коржа
    if (tier == 1 && col == 2) {
        if (tek == 8 ) {
            if(!retur){
                if (back.length==0) {
                    $('.'+tek).fadeTo(0,0);
                }
            }
            setTimeout(function(){
                if(!retur){
                    if (back.length==0) {
                        $(".1").fadeTo(300,0);
                        $(".2").fadeTo(300,0);
                        $(".3").fadeTo(100,0);
                        $(".4").fadeTo(300,0);
                        $(".5").fadeTo(300,0);
                        $(".6").fadeTo(100,0);
                        $(".7").fadeTo(300,0);
                    }
                }
                $('.'+tek).fadeTo(500,1);
            },400);
        }
        if ( tek == 9) {
            $('.'+tek).fadeTo(0,0);
            setTimeout(function(){
                $('.'+tek).fadeTo(300,1);
            },500);
        }
        if (tek>=1 && tek<=7){
            if(!retur){
                if (back.length==0) {
                    $('.'+tek).fadeTo(0,0);
                }
            }

            setTimeout(function(){$('.'+tek).fadeTo(300,1);},500);
        }
    }

    //двухярусный на 2 коржа
    if (tier == 2 && col == 1) {
        if (tek == 9 ) {
            if(!retur){
                if (back.length==0) {
                    $('.'+tek).fadeTo(0,0);
                }
            }
            setTimeout(function(){
                if(!retur){
                    if (back.length==0) {
                        $(".1").fadeTo(300,0);
                        $(".2").fadeTo(300,0);
                        $(".3").fadeTo(100,0);
                        $(".4").fadeTo(300,0);
                        $(".5").fadeTo(300,0);
                        $(".6").fadeTo(100,0);
                        $(".7").fadeTo(300,0);
                        $(".8").fadeTo(300,0);
                    }
                }
                $('.'+tek).fadeTo(500,1);
            },600);
        }
        if ( tek == 10) {
            $('.'+tek).fadeTo(0,0);
            $(".1").fadeTo(0,0);
            $(".2").fadeTo(0,0);
            $(".3").fadeTo(0,0);
            $(".4").fadeTo(0,0);
            $(".5").fadeTo(0,0);
            $(".6").fadeTo(0,0);
            $(".7").fadeTo(0,0);
            $(".8").fadeTo(0,0);
            setTimeout(function(){
                $('.'+tek).fadeTo(300,1);
            },500);
        }
        if (tek>=1 && tek<=8){
            if(!retur){
                if (back.length==0) {
                    $('.'+tek).fadeTo(0,0);
                }
            }

            setTimeout(function(){$('.'+tek).fadeTo(300,1);},500);
        }
    }
    //двухярусный на 3 коржа
    if (tier == 2 && col == 2) {
        if (tek == 15 ) {
            if(!retur){
                if (back.length==0) {
                    $('.'+tek).fadeTo(0,0);
                }
            }
            setTimeout(function(){
                if(!retur){
                    if (back.length==0) {
                        $(".1").fadeTo(300,0);
                        $(".2").fadeTo(300,0);
                        $(".3").fadeTo(100,0);
                        $(".4").fadeTo(300,0);
                        $(".5").fadeTo(300,0);
                        $(".6").fadeTo(100,0);
                        $(".7").fadeTo(300,0);
                        $(".8").fadeTo(300,0);
                        $(".9").fadeTo(300,0);
                        $(".10").fadeTo(300,0);
                        $(".11").fadeTo(300,0);
                        $(".12").fadeTo(300,0);
                        $(".13").fadeTo(300,0);
                        $(".14").fadeTo(300,0);
                    }
                }
                $('.'+tek).fadeTo(500,1);
            },400);
        }
        if ( tek == 16) {
            $('.'+tek).fadeTo(0,0);
            $(".1").fadeTo(0,0);
            $(".2").fadeTo(0,0);
            $(".3").fadeTo(0,0);
            $(".4").fadeTo(0,0);
            $(".5").fadeTo(0,0);
            $(".6").fadeTo(0,0);
            $(".7").fadeTo(0,0);
            $(".8").fadeTo(0,0);
            $(".9").fadeTo(0,0);
            $(".10").fadeTo(0,0);
            $(".11").fadeTo(0,0);
            $(".12").fadeTo(0,0);
            $(".13").fadeTo(0,0);
            $(".14").fadeTo(0,0);
            setTimeout(function(){
                $('.'+tek).fadeTo(300,1);
            },500);
        }
        if (tek>=1 && tek<=14){
            if(!retur){
                if (back.length==0) {
                    $('.'+tek).fadeTo(0,0);
                }
            }

            setTimeout(function(){$('.'+tek).fadeTo(300,1);},500);
        }
    }
    $(function() {
        var dd = new DropDown( $('#kdd-one') );
        var dd = new DropDown( $('#kdd-two') );
    });
});
function DropDown(el) {
    this.dd = el;
    this.initEvents();
}
DropDown.prototype = {
    initEvents : function() {
        var obj = this;

        obj.dd.on('click', function(event){
            $(this).toggleClass('active');
            event.stopPropagation();
        });
    }
}

$(function() {
    var dd = new DropDown( $('#kdd-one') );
    var dd = new DropDown( $('#kdd-two') );
});
