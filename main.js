var ab = document.getElementById('Ab');
var ac = document.getElementById('Ac');
var com = document.getElementById('Com');
var sp = document.getElementById('sp');
var pr = document.getElementById('pr');
var par = document.getElementById('par');
var reg = document.getElementById('reg');
var con = document.getElementById('con');
var display = document.getElementById('display');

window.onload = async function () {
    selectTab();
    ab.style.backgroundColor = "black";
    ab.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="aboutconference.html" class="container"></object>';
}

ab.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="aboutconference.html" class="container"></object>';
}

ac.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="aboutcollege.html" class="container"></object>';
}

com.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="committee.html" class="container"></object>';
}
sp.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="speakers.html" class="container"></object>';
}

pr.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="program.html" class="container"></object>';
}

par.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="participants.html" class="container"></object>';
}

reg.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";
    display.innerHTML = await '<object width=100% height=100% type="text/html" data="register.html" class="container"></object>';
}

con.onclick = async function () {
    selectTab();
    this.style.backgroundColor = "black";
    this.style.color = "white";

    display.innerHTML = await '<object width=100% height=100% type="text/html" data="contact.html" class="container"></object>';
}

function selectTab() {
    ab.style.backgroundColor = "white";
    ab.style.color = "black";
    ac.style.backgroundColor = "white";
    ac.style.color = "black";
    com.style.backgroundColor = "white";
    com.style.color = "black";
    sp.style.backgroundColor = "white";
    sp.style.color = "black";
    pr.style.backgroundColor = "white";
    pr.style.color = "black";
    par.style.backgroundColor = "white";
    par.style.color = "black";
    reg.style.backgroundColor = "white";
    reg.style.color = "black";
    con.style.backgroundColor = "white";
    con.style.color = "black";

}

console.log(window.innerWidth);
console.log(document.documentElement.clientWidth);
var w = Math.min(document.documentElement.clientWidth, window.innerWidth || 0);
console.log(w);
