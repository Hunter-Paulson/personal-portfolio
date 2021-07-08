// $(document).ready(function() {

//   $(".button").click(function () {

//     $( ".button" ).each(function() {
//       $( this ).removeClass( "active" );
//     });
    

//       // $(".button").removeClass("active");
//       $(this).addClass("active");  
//       console.log('working') ;
//   });
  
  
// });







// $(function() {
//   $('nav a[href^="/' + location.pathname.split("/")[1] + '"]').addClass('active');
// });






// let current = document.getElementById("default");

// function activePage() {
//   if (current != null) {
//     current.className = "";
//   } 
  
//   current.className = "active";
// }

// current.addEventListener("click", function() { activePage(this) }, false);




$(document).ready(function() {

  // Get current page URL
  let url = window.location.href;
 
  // remove # from URL
  url = url.substring(0, (url.indexOf("#") == -1) ? url.length : url.indexOf("#"));
 
  // remove parameters from URL
  url = url.substring(0, (url.indexOf("?") == -1) ? url.length : url.indexOf("?"));
 
  // select file name
  url = url.substr(url.lastIndexOf("/") + 1);
  
  // If file name not avilable
  if(url == ''){
  url = 'index.php';
  }
  
  // Loop all menu items
  $('#main-navigation li').each(function(){
 
   // select href
   let href = $(this).find('a').attr('href');
  
   // Check filename
   if(url == href){
 
    // Add active class
    $(this).addClass('active');
   }
  });
 });