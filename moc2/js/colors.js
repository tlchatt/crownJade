$(document).ready(function (){
$("#spectrum").spectrum({
    showInput: true,
    allowEmpty:true
});

 
 	$('ul.colorselectul li').click(function(){
		var tab_number = $(this).attr('tabnumber');
        if (tab_number == "tab1"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('.header_text').addClass('positivetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('li.tab1').addClass("header_background negativetext", 2000, "easeInCubic" );
                $('div.color_select_header_background').addClass('header_background', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background', 1000, "easeInCubic" );
            
        } else if (tab_number == "tab2"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('.header_text').addClass('positivetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('li.tab2').addClass("header_background2 positivetext", 2000, "easeInCubic" );
                $('div.color_select_header_background').addClass('header_background2', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background2', 1000, "easeInCubic" );
   
        } else if (tab_number == "tab3"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('.header_text').addClass('positivetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('li.tab3').addClass("header_background3 negativetext", 2000, "easeInCubic" );
                $('div.color_select_header_background').addClass('header_background3', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background3', 1000, "easeInCubic" );
    
   

        } else if (tab_number == "tab4"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').addClass("header_background4 negativetext", 2000, "easeInCubic" );
                $('.header_text').addClass('positivetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').addClass('header_background4', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background4', 1000, "easeInCubic" );
    
   
        } else if (tab_number == "tab5"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').addClass("header_background5 positivetext", 2000, "easeInCubic" );
                $('.header_text').addClass('negativetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').addClass('header_background5', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background5', 1000, "easeInCubic" );
    
   
        } else if (tab_number == "tab6"){
                
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                  $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').addClass("header_background6 negativetext", 2000, "easeInCubic" );
                $('.header_text').addClass('negativetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').addClass('header_background6', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background6', 1000, "easeInCubic" );
            
        }else if (tab_number == "tab7"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Maroon.png")
                
                          $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').addClass("header_background7 negativetext", 2000, "easeInCubic" );
                $('.header_text').addClass('negativetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').addClass('header_background7', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background7', 1000, "easeInCubic" );
        }
        else if (tab_number == "tab8"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_white_on_purple.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').addClass("header_background8 negativetext", 2000, "easeInCubic" );
                $('.header_text').addClass('positivetext', 1000, "easeOutCubic");
                $('.body_text').addClass('negativetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').addClass('header_background8', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background8', 1000, "easeInCubic" );
            
        } else if (tab_number == "tab9"){
                $(".logo").attr("src", "/img/Crown_Jade_Structural_Engineering_Fort_Collins_Colorado_Logo_Gray.png")
                $('.header_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('.body_text').removeClass('negativetext positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9', 1000, "easeOutCubic");
                $('div.color_select_body_background').removeClass('body_background body_background2 body_background3 body_background4 body_background5 body_background6 body_background7 body_background8 body_background9', 1000, "easeOutCubic");
                $('li.tab1').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab2').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab3').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab4').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab5').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6  header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab6').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab7').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab8').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').removeClass('header_background header_background2 header_background3 header_background4 header_background5 header_background6 header_background7 header_background8 header_background9 positivetext negativetext', 1000, "easeOutCubic");
                $('li.tab9').addClass("header_background9 negativetext", 2000, "easeInCubic" );
                $('.header_text').addClass('negativetext', 1000, "easeOutCubic");
                $('.body_text').addClass('positivetext', 1000, "easeOutCubic");
                $('div.color_select_header_background').addClass('header_background9', 1000, "easeInCubic" );
		        $('div.color_select_body_background').addClass('body_background9', 1000, "easeInCubic" );
        }
        else {

        }
	})
    
    })

