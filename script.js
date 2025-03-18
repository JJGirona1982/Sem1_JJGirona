document.addEventListener("DOMContentLoaded", function(){

    darkMode();
})

function darkMode(){
    let btnDark = document.getElementById("btnDark");
    let main = document.getElementById("main");
    btnDark.addEventListener("click", function(){
        main.classList.toggle("dark");
    })
}