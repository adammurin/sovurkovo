
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

//require('countup.js');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('example', require('./components/Example.vue'));

//const app = new Vue({
//    el: '#app'
//});


var jq = jQuery.noConflict();

jq(document).ready(function(){

	setGlobalVars();
	identifyDevice();

	treatNavbar();

	homepage();

    googleMap();

    handleErrorMsgs();

    scrollToQuote();

    scrollToRelated();

});

function setGlobalVars(){
    baseDir = jq(".baseDir").html();

    viewportWidth = jq(window).width();
    viewportHeight = jq(window).height();

    documentHeight = jq(document).height();

    isMobileCheck = false;
};

function identifyDevice() {
    if(viewportWidth<640) {
        jq("body").addClass("mobile");
        isMobileCheck = true;
    }else if(640<viewportWidth && viewportWidth<980){
        jq("body").addClass("tablet");
    }
};

function treatNavbar() {
    jq(window).scroll(function(){
        if(jq(window).scrollTop() > jq(".infobar").height()) {
            jq("header").addClass("fixedPos");
        }else{
            jq("header").removeClass("fixedPos");
        }
    });
};

function smoothScroll(element,target) {
    if(element.hasClass("scrollTo")) {
        element.click(function(e) {
            e.preventDefault();
            jq('html, body').animate({
                scrollTop: target.offset().top - jq("header").height()
            }, 600);
        });
    }
};

function numberFormatted(amount) {
    var i = parseFloat(amount);
    if(isNaN(i)) { i = 0.00; }
    var minus = '';
    if(i < 0) { minus = '-'; }
    i = Math.abs(i);
    i = parseInt((i + .005) * 100);
    i = i / 100;
    s = new String(i);
    if(s.indexOf('.') < 0) { s += '.00'; }
    if(s.indexOf('.') == (s.length - 2)) { s += '0'; }
    s = minus + s;
    s = s.replace(/\s/g, "").replace(".", ",");
    return s;
};

function carousel(carouselObject){
	carouselObject.slick({
        dots: true,
        arrows: true,
        speed: 1000,
        autoplay: true,
        autoplaySpeed: 6500
    });
};

function homepage() {
	//carousel(jq(".carousel.customersCarousel"));

	//smoothScroll(jq(".hero .scrollTo"),jq(".section-two"));
	//smoothScroll(jq(".section-two .scrollTo"),jq(".section-three"));
	//smoothScroll(jq(".section-three .scrollTo"),jq(".section-four"));
};

function scrollToQuote() {
    smoothScroll(jq(".scrollToQuote"),jq("#quoteForm"));
    jq(".scrollToQuote").click(function(){
        var clickedService;
        if(jq(this).parents(".item").find("h2.itemTitle a").length) {
            clickedService = jq(this).parents(".item").find("h2.itemTitle a").html();
        }else if(jq(this).parents(".itemDetail").find(".pageCover h1").length){
            clickedService = jq(this).parents(".itemDetail").find(".pageCover h1").html();
        }
        if(clickedService != undefined){
            jq("#quoteForm textarea").html("Dobrý deň, mám záujem o službu: "+clickedService);
        }
    });
};

function scrollToRelated() {
    smoothScroll(jq(".scrollToRelated"),jq(".relatedServices "));
};

function googleMap() {
    jq('.mapBlock').click(function(){
        jq(this).find('iframe').addClass('clicked');
    })
    .mouseleave(function(){
        jq(this).find('iframe').removeClass('clicked');
    });
};

function handleErrorMsgs() {
    if(jq('.errorMsg').length){
        jq('.errorMsg').each(function(){
            var thisHeight = jq(this).height();
            jq(this).css("top",-thisHeight);
            jq(this).wrapInner("<div class='inner'></div>");
            jq(this).find(".inner").prepend("<div class='close'></div>");
            jq(this).append("<div class='pointer'></div>");
        });
        jq('html, body').animate({ scrollTop: (jq('.errorMsg').parents(".sectionForm").offset().top)+50 });
    }
};

function scrollToElement() {
    var hash = window.location.hash;
    jq('html, body').animate({ scrollTop: (jq(hash).offset().top)+50 });
}
