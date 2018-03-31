$(window).on("load",function(){
	for (var i = parseInt($("#photoCount").val())+1; i <= 10; i++) {
		$("#photo"+i).hide();
	}

	$("#photoCount").change(function(){
		var count=parseInt($("#photoCount").val());
		for (var i=1;i<=count;i++){
			$("#photo"+i).show();
		}
		for (var i=count+1;i<=10;i++){
			$("#photo"+i).hide();
		}
	});
});