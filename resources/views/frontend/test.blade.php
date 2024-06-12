"use strict";var
testimonialsSlider=$("#testimonials-slider","#testimonials");testimonialsSlider.slick({dots:!1,arrows:!0,infinite:!1,slidesToShow:1,slidesToScroll:1});var
miniTestimonialsSlider=$(".mini-testimonials-slider","#form-section");miniTestimonialsSlider.slick({dots:!0,arrows:!1,infinite:!1,autoplay:!0,speed:200});var
infoSlider=$(".info-slider","#page-head");function validateform(){var
e=!0,a=document.forms.myform.number.value;return(a.length<script||a.length>20||"
    "==a.contain)&&(document.getElementById("error").innerHTML=" PHONE NUMBER IS INVALID
    ",e=!1),e}infoSlider.slick({dots:!0,arrows:!1,infinite:!1,autoplay:!0,speed:200}),$(window).on("load",function(){$(".slick-active
    > div:nth-child(1)","#main-slider").addClass("animated"),$(".slick-active >
    div:nth-child(2)","#main-slider").addClass("animated animation-delay1");var
    e=$("#c-plan");e.slider({tooltip:"always"}),e.on("slide",function(e){$(".slider
    .tooltip-up","#custom-plan").text(e.value/20),$(".price","#custom-plan").text($(this).data("currency")+e.value/20),$(".feature1
    span","#custom-plan").text(e.value),$(".feature2
    span","#custom-plan").text(98*e.value)}),e.value=e.data("slider-value"),$(".slider
    .tooltip","#custom-plan").append('<div class="tooltip-up"></div>'),$(".slider
    .tooltip-up","#custom-plan").text(e.value/20),$(".slider
    .tooltip-inner","#custom-plan").attr("data-unit",e.data("unit")),$(".slider
    .tooltip-up","#custom-plan").attr("data-currency",e.data("currency")),$(".price","#custom-plan").text(e.data("currency")+e.value/20),$(".feature1
    span","#custom-plan").text(e.value),$(".feature2 span","#custom-plan").text(98*e.value);var
    a=$(".feature-icon-holder","#features-links-holder");a.on("click",function(){a.removeClass("opened"),$(this).addClass("opened"),$(".show-details","#features-holder").removeClass("show-details"),$(".feature-d"+$(this).data("id"),"#features-holder").addClass("show-details")});var
    t=$("#features-holder");$("#features-links-holder");var
    s=$(".show-details","#features-holder");t.css("height",s.height()+120),$(window).on("resize",function(){return
    t.css("height",s.height()+150),!1});var
    i=$(".app-icon-holder","#apps");i.on("mouseover",function(){i.removeClass("opened"),$(this).addClass("opened"),$(".show-details","#apps").removeClass("show-details"),$(".app-details"+$(this).data("id"),"#apps").addClass("show-details")});var
    l=$(".info-link","#more-info");l.on("mouseover",function(){l.removeClass("opened"),$(this).addClass("opened"),$(".show-details","#more-info").removeClass("show-details"),$(".info-d"+$(this).data("id"),"#more-info").addClass("show-details")});for(var
    o=[["California",97,48,"r"],["Costa
    Rika",212,31,"l"],["Vancouver",136,161,"r"],["Brazil",303,233,"r"],["Alexandria",149,349,"l"],["Dubai",174,469,"l"],["Delhi",204,605,"r"],["Munech",91,417,"r"],["Barcelona",112,279,"l"],["Moscow",41,554,"r"],["Hong
    Kong",151,663,"r"],["Melborne",356,688,"l"],["Pulau
    Ujong",265,578,"l"]],n=$(".servers-location-holder","#serversmap.st"),r=0;r<=o.length-1;r++){var d=o[r][3],c="",u=""
        ;"r"==d?(c="" ,u=o[r][0]):"l"==d&&(c=o[r][0],u="" ),n.append('<div class="server-marker"
        style="top:'+o[r][1]+"px;left:"+o[r][2]+'px;"><span class="left-text">'+c+'</span><span
            class="marker-icon"></span><span class="right-text">'+u+"</span></div>
        ")}}),$(document).ready(function(){$("#Message").bind("paste",function(e){e.preventDefault()})});let
        question=document.querySelectorAll(".question");question.forEach(e=>{e.addEventListener("click",a=>{let
        t=document.querySelector(".question.active");t&&t!==e&&(t.classList.toggle("active"),t.nextElementSibling.style.maxHeight=0),e.classList.toggle("active");let
        s=e.nextElementSibling;e.classList.contains("active")?s.style.maxHeight=s.scrollHeight+"px":s.style.maxHeight=0})});
