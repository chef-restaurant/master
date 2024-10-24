import "jquery";
import "slick-carousel";
function addClassPageName(){
    
}

function ConfigurePage(){
    addClassPageName();
}

function menuToggle(){
    if($("#main-menu").hasClass("collaped")){
        $("#main-menu").removeClass("collaped");
    } else{
        $("#main-menu").addClass("collaped");
    }
}

$("#menuBtn").on("click", () =>{
    menuToggle()
})

export default ConfigurePage;