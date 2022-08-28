(function($){$.fn.accordion=function(options){return this.each(function(){var settings=$.extend({firstChildExpand:true,multiExpand:false,slideSpeed:100,dropDownIcon:'&#9660'},options);$(this).children("h1").each(function(){$(this).next('div').andSelf().wrapAll("<div class='accordion-item'></div>");});$(this).children().children('div').addClass("accordion-content");$(this).find("h1").wrap("<div class='accordion-header'></div>");$(this).find("h1").after("<div class='accordion-header-icon'>"+settings.dropDownIcon+"</div>");$(this).children('.accordion-item').wrap('<div class="drawer"></div>');if(settings.firstChildExpand==true){$(this).find(".accordion-header:first").toggleClass("accordion-header-active");$(this).find(".accordion-header:first").parent().toggleClass("accordion-item-active");$(this).find(".accordion-header:first").next().slideToggle(0);$(this).find(".accordion-header:first").children(".accordion-header-icon").toggleClass("accordion-header-icon-active");}$(this).find(".accordion-header").click(function(){if(settings.multiExpand==false){if(!$(this).hasClass('accordion-header-active')){$(this).parent().parent().parent().find(".accordion-header-active").removeClass('accordion-header-active');$(this).parent().parent().parent().find(".accordion-item-active").children(".accordion-content").slideUp(settings.slideSpeed);$(this).parent().parent().parent().find(".accordion-header-icon-active").removeClass("accordion-header-icon-active");$(this).parent().parent().parent().find(".accordion-item-active").removeClass("accordion-item-active");}}$(this).toggleClass("accordion-header-active");$(this).parent().toggleClass("accordion-item-active");$(this).next().slideToggle(settings.slideSpeed);$(this).children(".accordion-header-icon").toggleClass("accordion-header-icon-active");});});}
$.fn.openSection = function(index){$(".accordion").find(".accordion-header").filter(function(indexx){return indexx==index;}).click();}
}(jQuery));



jQuery(document).ready(function() {
	// Standard
	jQuery('.tabs.standard .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).show().siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Fade
	jQuery('.tabs.animated-fade .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).fadeIn(400).siblings().hide();

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Slide 1
	jQuery('.tabs.animated-slide-1 .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).siblings().slideUp(400);
		jQuery('.tabs ' + currentAttrValue).delay(400).slideDown(400);

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});

	// Animated Slide 2
	jQuery('.tabs.animated-slide-2 .tab-links a').on('click', function(e)  {
		var currentAttrValue = jQuery(this).attr('href');

		// Show/Hide Tabs
		jQuery('.tabs ' + currentAttrValue).slideDown(400).siblings().slideUp(400);

		// Change/remove current tab to active
		jQuery(this).parent('li').addClass('active').siblings().removeClass('active');

		e.preventDefault();
	});
});