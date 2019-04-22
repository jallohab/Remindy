
// Check off specific Todos by Clicking
$("#container ul").on("click", "li", function(){
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
 $("#container ul").on("click", "span", function(event){
 	event.stopPropagation();
 	$(this).parent().fadeOut(500, function(){
 		$(this).remove();
 	});
 });

 $(".add[type = 'text']").keypress(function(enet){
 	if(event.which === 13){
 		//grabbing now to do text from input
 		var todoText = $(this).val();
 		$(this).val("");
 		//create a new li and add to ul
		 $("#container ul").append("<li><span><i class='fa fa-trash'></i></span> " + todoText + "</li>");
 	}
 });

//

//

$(".fa-plus").click(function(){
 	$(".add[type = 'text']").fadeToggle()
  });


  function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("mySearch");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myTodo");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("span")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}


