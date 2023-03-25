function sendMail() {
    var link = "mailto:tristanhache2009@gmail.com"
    + "?cc=myCCtristanhache2009@gmail.com"
    + "&subject=" + escape("Family Tree - Answer Form - Home")
    + "&body=" + escape(document.getElementById('Body').value)
;

window.location.href = link;
}