// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
$(document).foundation({
 	orbit: {
 		animation: 'fade',
 		bullets_container_class: 'slider-bullets',
		stack_on_small: true,
		navigation_arrows: false,
		slide_number: false, 
		timer: true,
		timer_speed: 7000,
		swipe: true,		
 	},
 	equalizer:{
 		equalize_on_stack: true
 	}
});

// HOME GRID
$("#large-grid-1").hover(function(event) {
    $("#large-grid-1 .grid-link").fadeIn(200);
}, function() {
    $("#large-grid-1 .grid-link").fadeOut(300);
});

$("#large-grid-2").hover(function(event) {
    $("#large-grid-2 .grid-link").fadeIn(200);
}, function() {
    $("#large-grid-2 .grid-link").fadeOut(300);
});

// COUPLE EDIT NAME

function coupleName(){
    var x = document.getElementById("couple-name-form").value;
    document.getElementById("couple-name").innerHTML = x;
}

// COUPLE EDIT BACKGROUND
	var file, 
	    render;

	document.getElementById("upload_button").addEventListener("click", function(){
	  document.getElementById("background_input").click();
	}, false);

	document.body.addEventListener("drop", function(ev){
	  file = ev.dataTransfer.files[0];
	  if(!file.type.match("image.*")) {
	    alert("This file isn't image or it's unsupported format");
	    return;
	  }
	  reader = new FileReader();
	  reader.addEventListener("load", (function(theFile) {
	    return function(e) {
	      document.body.style.backgroundImage = "url('" + e.target.result + "')";
			};
		})(file), false);
	  reader.readAsDataURL(file);
	}, false);

	document.getElementById("background_input").addEventListener("change", function(ev){
	  file = ev.target.files[0];
	  if(!file.type.match("image.*")) {
	    alert("This file isn't image or it's unsupported format");
	    return;
	  }
	  reader = new FileReader();
	  reader.addEventListener("load", (function(theFile) {
	    return function(e) {
	      document.getElementById("couple-banner").style.backgroundImage = "url('" + e.target.result + "')";
			};
		})(file), false);
	  reader.readAsDataURL(file);
	}, false);

// REGISTRY EDIT - MODAL

$('.color-selection label input[type=radio]').click(function() {
    $('input[name="' + this.name + '"]').each(function(){
        $(this.parentNode).toggleClass('checked', this.checked);
    });
});

// CART - MODAL

$(".remove-item").on("click", function(){
    $(this).closest(".cart-single-item").remove();
});

