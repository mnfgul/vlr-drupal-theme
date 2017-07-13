$(document).ready(function(){
	
	$(".views-table tr").hover(function(){
		$(this).addClass("rowHover");
	}, function(){
		$(this).removeClass("rowHover");
	});
	
	//projects popups
	if($("a.imagecache-project-img-s").length > 0){
		$("a.imagecache-project-img-s").lightBox();  
	}
	
	if($("a.img-dimensions").length > 0){
		$("a.img-dimensions").lightBox();  
	}
	
});
