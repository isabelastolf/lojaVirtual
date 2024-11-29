let MenuItens = document.getElementById("MenuItens");

MenuItens.style.maxHeight = "0rem";

function menucelular(){
    if(MenuItens.style.maxHeight == "0rem"){
        MenuItens.style.maxHeight = "12.5rem";
    }else{
        MenuItens.style.maxHeight = "0rem";
    }
}