(function($){

var sidebarTitleTarget = $('.home-fixed-left-column .sidebar-title h2');
var sidebarBGImageTarget = $('.home-fixed-left-column .bg-box');
var sidebarContentTarget = $('.home-fixed-left-column .content-box .variable-content');

$(document).on('ready', function() {
$('#viewport').find('.scroll-section').each(function() {
if ($(this).isInViewport({"tolerance" :150})){
	$(this).addClass('in-viewport');
	var sidebarTitle = $(this).attr('data-sidebar-title');
	var sidebarBGImage = $(this).attr('data-sidebar-image');
	var sidebarContent = $(this).find('.hidden-sidebar-content').html();
	sidebarTitleTarget.text(sidebarTitle);
	sidebarBGImageTarget.css('background-image',sidebarBGImage);
	sidebarContentTarget.html(sidebarContent);
	
}
else{
$(this).removeClass('in-viewport');
}
});

$(window).on('scroll', function() {
$('#viewport').find('.scroll-section').each(function() {
if ($(this).isInViewport({"tolerance" :150,"toleranceForLast": 150, "debug": true})){
	$(this).addClass('in-viewport');
	var sidebarTitle = $(this).attr('data-sidebar-title');
	
	var sidebarBGImage = $(this).attr('data-sidebar-image');
	var sidebarContent = $(this).find('.hidden-sidebar-content').html();
	sidebarTitleTarget.text(sidebarTitle);
	sidebarBGImageTarget.css('background-image',sidebarBGImage);
	sidebarContentTarget.html(sidebarContent);
}
else{
$(this).removeClass('in-viewport');
}
});
});
});
}(jQuery));