$(document).ready(function(){
	form=$("#form");
	form.hide();
	std = $("#stdBtn");
	box = std.parent('.inner-box');
	console.log(box);
	console.log(std);
	console.log("student")
	std.click(function(){
		box.fadeOut(700,function(){
			$('#h2').hide();
		form.fadeIn(500);
	});

	});

	funder=$("#funder");
	funder.hide();
	fnd = $("#fndBtn");
	box = fnd.parent('.inner-box');
	console.log(box);
	console.log(fnd);
	fnd.click(function(){
		box.fadeOut(700,function(){
			$('#h2').hide();
		funder.fadeIn(500);
	});

	});

});