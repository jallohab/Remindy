
// Check off specific Todos by Clicking
$("ul").on("click", "li", function(){
	// This is too much, but we have another way to do it.
	// if ($(this).css("color") === "rgb(128, 128, 128)") {
	// 	$(this).css({
	// 	color: "black",
	// 	textDecoration: "none"
	// });
	// }
	// else{
	// 	$(this).css({
	// 	color: "gray",
	// 	textDecoration: "line-through"
	// });
	// }
	//Do the same, but easy steps!!
	$(this).toggleClass("completed")
});

//Click on to delete.
 $("ul").on("click", "span", function(event){
 	event.stopPropagation();
 	$(this).parent().fadeOut(500, function(){
 		$(this).remove();
 	});
 });

 $("input[type = 'text']").keypress(function(enet){
 	if(event.which === 13){
 		//grabbing now to do text from input
 		var todoText = $(this).val();
 		$(this).val("");
 		//create a new li and add to ul
		 $("ul").append("<li><span><i class='fa fa-trash'></i></span> " + todoText + "</li>");
 	}
 });

//

// 

$(".fa-plus").click(function(){
 	$("input[type = 'text']").fadeToggle()
  });
