function openNav() {
    document.getElementById("mySidenav").style.width = "270px";
    document.getElementById("main").style.marginLeft = "300px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "60px";
    document.getElementById("main").style.marginLeft = "70px";
    document.getElementById("collapseExample").style.display = "none";
    
}

function myFunction(x) {
    x.classList.toggle("change");
}
function loader(){
    document.getElementById("loader").style.display = "block";   
}
function outer(){
    document.getElementById("loader").style.display = "none";   
}
function downdown(){
    var down = getElementById('down');
    var up = getElementById('up');
    var set = getElementById('setbox');
    down.classList('');
    up.classList('');
    set.style.height = "270px";; 
}
function upward(){
    var down = getElementById('down');
    var up = getElementById('up');
    var set = getElementById('setbox');
    down.classList('');
    up.classList('');
    set.classList(''); 
}

