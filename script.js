document.addEventListener("DOMContentLoaded", function(){
    console.log("DOM cargado y listo"); 
    darkMode();
    mostrarRestultados();
})

function darkMode(){

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme:dark)');

    const modoLocal = localStorage.getItem('Theme');

if(prefiereDarkMode.matches){
    document.body.classList.add('dark-mode');
}else if(modoLocal==='Dark'){
    document.body.classList.add('dark-mode');
}else{
    document.body.classList.remove('dark-mode');
}

prefiereDarkMode.addEventListener('change', function(){
    if(prefiereDarkMode.matches){
        document.body.classList.add('dark-mode');
    }else{
        document.body.classList.remove('dark-mode');
    }
});

const btnDark = document.getElementById("btnDark");

btnDark.addEventListener('click', function(){
    const isDark=document.body.classList.toggle('dark-mode');
    localStorage.setItem('Theme', isDark ? 'Dark' : 'Light');
});
}
