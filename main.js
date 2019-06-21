var ab = document.getElementById('Ab');
var ac = document.getElementById('Ac');
var com = document.getElementById('Com');
var sp = document.getElementById('sp');
var pr = document.getElementById('pr');
var par = document.getElementById('par');
var reg = document.getElementById('reg');
var con = document.getElementById('con');
var display = document.getElementById('display');

ab.onclick = async function () {

    display.innerHTML = await '<object type="text/html" data="aboutconference.html" ></object>';
}

ac.onclick = async function () {
    display.innerHTML = await '<object type="text/html" data="aboutcollege.html" ></object>';
}

com.onclick = async function() {
    display.innerHTML = await '<object type="text/html" data="committee.html" ></object>';
}
sp.onclick = async function() {
    display.innerHTML = await '<object type="text/html" data="speakers.html" ></object>';
}

pr.onclick = async function() {
    display.innerHTML = await '<object type="text/html" data="program.html" ></object>';
}

par.onclick = async function() {
    display.innerHTML = await '<object type="text/html" data="participants.html" ></object>';
}

reg.onclick = async function() {
    display.innerHTML = await '<object type="text/html" data="register.html" ></object>';
}

con.onclick = async function() {
    display.innerHTML = await '<object type="text/html" data="contact.html" ></object>';
}