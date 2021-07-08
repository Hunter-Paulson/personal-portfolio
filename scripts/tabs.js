// Author: Nicholas Fazzolari

function openTab(tabName) {
    let i;
    let tabContent;
    
    tabContent = document.getElementsByClassName("tab-content");

    for (i = 0; i < tabContent.length; i++) {
        tabContent[i].style.display = "none";
    } 
    
    document.getElementById(tabName).style.display = "flex";
}

$(document).ready(function() {

    $(".heading").click(function () {
  
      $( ".heading" ).each(function() {
        $( this ).removeClass( "active" );
        //get data attribute value, store in variable
      });
      
        $(this).addClass("active");  
        console.log('working') ;

        //add a new loop targeting .container-fluid
          //if has class=variable, then run the right information (open tab)
    }); 
});

let processLink = document.getElementById("processLink");
let designLink = document.getElementById("designLink");
let reflectionLink = document.getElementById("reflectionLink");

processLink.addEventListener("click", function() { openTab("process") }, false);
processLink.addEventListener("click", function() { activeTab() }, false);
designLink.addEventListener("click", function() { openTab("design") }, false);
reflectionLink.addEventListener("click", function() { openTab("reflection") }, false);
reflectionLink.addEventListener("click", function() { activeTab() }, false);


