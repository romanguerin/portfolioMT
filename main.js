let lastID = '';
let boolLine = false;
let dateStay = '';

function loadPost(insert){
    //'sub/home.php'
    let post = 'sub/' + insert + '.php'
    if (!insert.includes("Q")) {
        $(function () {
            $('#loadPost').load(post);
        });
    }
    if (insert !== 'home') {
        document.getElementById(insert).style.textDecorationThickness = "4px";
        boolLine = true;
    }
    if (boolLine === true){
        document.getElementById(lastID).style.textDecoration = "line-through";
    }
    lastID = insert;
}

$(document).scroll(function() {
    let myScrollFunc = function () {
        let y = window.scrollY;
        if (y > 200) {
            document.getElementById("sidebar").style.position = "unset";
            document.getElementById("sidebar").style.marginLeft = "-320px";
            document.getElementById("header").style.position = "unset";
            document.getElementById("header").style.paddingTop = "200px";
            document.getElementById("sidebar").style.paddingTop = "140px";
            document.getElementById("content").style.paddingTop = "1px";
        } else {
            document.getElementById("sidebar").style.position = "fixed";
            document.getElementById("sidebar").style.marginLeft = "30px";
            document.getElementById("header").style.position = "fixed";
            document.getElementById("header").style.paddingTop = "0px";
            document.getElementById("sidebar").style.paddingTop = "20px";

        }
    };

    window.addEventListener("scroll", myScrollFunc);
});

function stayDate(date) {
    dateStay = date;
    let ArrayQ = ["Q1","Q2","Q3","Q4"];
    for (let i = 0; i < ArrayQ.length; i ++) {
        let fontA = document.getElementsByClassName(ArrayQ[i])
        for (let j = 0; j < fontA.length; j++) {
            fontA[j].style.fontWeight = "normal";
        }
    }
    let fontB = document.getElementsByClassName(date)
    for (let j = 0; j < fontB.length; j++) {
        fontB[j].style.fontWeight = "bold";
    }
    loadPost(date)
}

function findDate(date){
    let font = document.getElementsByClassName(date)
    for (let j = 0; j < font.length; j++) {
        font[j].style.fontWeight = "bold";
    }
}

function unfindDate(date){
        if (date !== dateStay) {
            let font = document.getElementsByClassName(date)
            for (let j = 0; j < font.length; j++) {
                font[j].style.fontWeight = "normal";
            }
        }
}