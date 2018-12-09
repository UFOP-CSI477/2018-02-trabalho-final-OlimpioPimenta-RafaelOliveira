
window.onload = function hora() {
    dayName = new Array("domingo", "segunda", "terça", "quarta", "quinta", "sexta", "sábado")
    monName = new Array("janeiro", "fevereiro", "março", "abril", "maio", "junho", "agosto", "outubro", "novembro", "dezembro")
    now = new Date
    tempo = document.getElementById("timeDate"),
    tempo.innerHTML = " Hoje é " + dayName[now.getDay()] + ", " + now.getDate() + " de " + monName[now.getMonth() - 2] + " de " + now.getFullYear() + ".";

    time();
};

function time() {
    today = new Date();
    h = today.getHours();
    m = today.getMinutes();
    s = today.getSeconds();
    document.getElementById('temponow').innerHTML = h + ":" + m + ":" + s;
    setTimeout('time()', 500);
}
