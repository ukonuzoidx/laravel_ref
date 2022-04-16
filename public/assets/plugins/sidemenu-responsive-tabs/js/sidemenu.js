(function () {
	"use strict";

	var slideMenu = $('.side-menu');

	
	// Toggle Sidebar
	$(document).on("click", "[data-toggle='sidebar']", function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled');
		$('.app').removeClass('sidenav-toggled4');
	});
	$(document).on("click", ".sidenav-toggled .app-sidebar__toggle", function(event) {
		event.preventDefault();
		$('.app').toggleClass('sidenav-toggled1');
	});
	$(document).on("click", ".sidenav-toggled .resp-tab-item", function(event) {
		event.preventDefault();
		$('.app').addClass('sidenav-toggled4');
		$('.app').removeClass('sidenav-toggled1');
		$('.app').removeClass('sidenav-toggled');
	});
	
	//mobile  Toggle Sidebar
	if ( $(window).width() < 767) { 
		$(document).on("click", "[data-toggle='sidebar']", function(event) {
			event.preventDefault();
			$('.app').toggleClass('sidenav-mobile');
		});
		
		$(document).on("click", ".sidenav-mobile .resp-tab-item", function(event) {
			event.preventDefault();
			$('.app').toggleClass('sidenav-toggled1');
			$('.app').toggleClass('sidenav-toggled');
		});
	}
	
	// Activate sidebar slide toggle
	$("[data-toggle='slide']").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.slide-menu';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});
	
	// Activate sidebar slide toggle
	$("[data-toggle='sub-slide']").on('click', function(e) {
		var $this = $(this);
		var checkElement = $this.next();
		var animationSpeed = 300,
		slideMenuSelector = '.sub-slide-menu';
		if (checkElement.is(slideMenuSelector) && checkElement.is(':visible')) {
		  checkElement.slideUp(animationSpeed, function() {
			checkElement.removeClass('open');
		  });
		  checkElement.parent("li").removeClass("is-expanded");
		}
		 else if ((checkElement.is(slideMenuSelector)) && (!checkElement.is(':visible'))) {
		  var parent = $this.parents('ul').first();
		  var ul = parent.find('ul:visible').slideUp(animationSpeed);
		  ul.removeClass('open');
		  var parent_li = $this.parent("li");
		  checkElement.slideDown(animationSpeed, function() {
			checkElement.addClass('open');
			parent.find('li.is-expanded').removeClass('is-expanded');
			parent_li.addClass('is-expanded');
		  });
		}
		if (checkElement.is(slideMenuSelector)) {
		  e.preventDefault();
		}
	});
	

	// Set initial active toggle
	$("[data-toggle='slide.'].is-expanded").parent().toggleClass('is-expanded');

	//Activate bootstrip tooltips
	$("[data-toggle='tooltip']").tooltip();
	
	
	
	var toggleSidebar = function() {
		var w = $(window);
		if(w.outerWidth() <= 1024) {
			$("body").addClass("sidebar-gone");
			$(document).off("click", "body").on("click", "body", function(e) {
				if($(e.target).hasClass('sidebar-show') || $(e.target).hasClass('search-show')) {
					$("body").removeClass("sidebar-show");
					$("body").addClass("sidebar-gone");
					$("body").removeClass("search-show");
				}
			});
		}else{
			$("body").removeClass("sidebar-gone");
		}
	}
	toggleSidebar();
	$(window).resize(toggleSidebar);
	
	
	/*  p-scroll  */
	const ps51 = new PerfectScrollbar('.first-sidemenu', {
		suppressScrollX: true
	});
	
	const ps52 = new PerfectScrollbar('.second-sidemenu', {
		suppressScrollX: true
	});


	// ______________sticky-header
	function updateScroll() {
		if ($(window).scrollTop() >= 10) {
			$(".main-header").addClass('fixed-header');
		} else {
			$(".main-header").removeClass("fixed-header");
		}
	}
	$(function() {
		$(window).scroll(updateScroll);
		updateScroll();
	});
	
})();
