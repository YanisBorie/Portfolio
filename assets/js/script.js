document.getElementById("buttons1").addEventListener("click", semestre1);
document.getElementById("buttons2").addEventListener("click", semestre2);
document.getElementById("buttons3").addEventListener("click", semestre3);

function semestre1() {
    document.getElementById("s1").style.display = "block";
    document.getElementById("s2").style.display = "none";
    document.getElementById("s3").style.display = "none";
}

function semestre2() {
    document.getElementById("s1").style.display = "none";
    document.getElementById("s2").style.display = "block";
    document.getElementById("s3").style.display = "none";
}

function semestre3() {
    document.getElementById("s1").style.display = "none";
    document.getElementById("s2").style.display = "none";
    document.getElementById("s3").style.display = "block";
}