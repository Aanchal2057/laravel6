$(function(){

    
    //for changing the length of search input field of the navbar
  
   $(".d-flex").find('input').focus(function(){
       
       $('.disappear').stop().hide();
       
       $(this).stop().css({"outline":'none'}).animate({'width':'700px',}).fadeIn();
       
   });

  
   $("input[type='text']").stop().blur(function(){
       
       $('.disappear').stop().show();
      
       $(this).stop().animate({'width':"50%"}).fadeIn();
       $(".bi-search").delay(500).fadeIn()
   });
   //for showing products on hovering nav content
   $('.navbar-nav').find('.show-hover').mouseenter(function(){
      
    $('#hover-nav-element').stop().empty();
    var text = $('<h1>').text($(this).text())
    $(this).stop().css({'color':'black'});
     $('#hover-nav-element').stop()
                             .prepend(text).
                             append("<img src='./img/product/ee.jpg' alt= height='200px' width='200px'>").
                             append("<h4>earings</h4>").
                             css({'display':'block','top':$(this)[0].offsetHeight+15,"left":$(this)[0].offsetLeft,'z-index':10000000})
                             $('#hover-nav-element').stop().css({'display':'block'})
                         })
    $('.show-hover').mouseleave(function(){
     
     $(this).stop().css({'font-size':'16px'});
     $('#hover-nav-element').stop().hide();
    });
     $('#hover-nav-element').mouseenter(function(){
     $(this).stop().show();
     })
     $('#hover-nav-element').mouseleave(function(){
     $(this).stop().hide();
    });

   //for highligting para 
   $("p").css("background-color","rgba(173,216,230,0.7)");
   $("input[type='text'] ").css("background-color","rgba(173,216,230,0.7)");
   //for fade-in and out images
   $( ".fe-box" ).hover(function() {
    $( this ).fadeOut( 100 );
    $( this ).fadeIn( 500 );
  });
$( ".pro" ).hover(function() {
    $( this ).fadeOut( 100 );
    $( this ).fadeIn( 500 );
  });
$(function(){
        $("#move").hide(1000);
        $("#move").show(1000);
});
$('.banner-box').click(function(){
    $('#move').hide(1000);
    $('#move').show(2000);
});


});
