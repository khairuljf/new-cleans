$(document).ready(function(){
	$("#p1").hide();
	$("#p2").hide();
	$("#p3").hide();
    
    $("a[href$='#1a']").click(function(){
        $("#p1").toggle();
		$("#p2").hide();
		$("#p3").hide();

    });
    $("a[href$='#2a']").click(function(){
        $("#p1").hide();
		$("#p2").toggle();
		$("#p3").hide();

    });
    $("a[href$='#3a']").click(function(){
        $("#p1").hide();
		$("#p2").hide();
		$("#p3").toggle();

    });
    
});