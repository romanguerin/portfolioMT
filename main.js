
let lastID = '';
let boolLine = false;
let dateStay = '';

function loadPost(insert){
    //'sub/home.php'
    let post = 'sub/' + insert + '.php';
    if (!insert.includes("Q")) {
        $(function () {
            $('#loadPost').load(post);
        });
    }
    if (boolLine === true){
        document.getElementById(lastID).style.textDecoration = "line-through";
    }
    if (insert !== 'home') {
        document.getElementById(insert).style.textDecorationThickness = "4px";
        boolLine = true;
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
            //document.getElementById("content").style.paddingTop = "1px";
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

/*
function stayDate(date) {
    dateStay = date;
    let ArrayQ = ["Q1","Q2","Q3","Q4"];
    for (let i = 0; i < ArrayQ.length; i ++) {
        let fontA = document.getElementsByClassName(ArrayQ[i]);
        for (let j = 0; j < fontA.length; j++) {
            fontA[j].style.fontWeight = "normal";
        }
    }
    let fontB = document.getElementsByClassName(date);
    for (let k = 0; k < fontB.length; k++) {
        fontB[k].style.fontWeight = "bold";
    }
    loadPost(date)
}
*/

function findDate(date){
    let font = document.getElementsByClassName(date);
    for (let i = 0; i < font.length; i++) {
        font[i].style.fontStyle = "italic";
        font[i].style.fontWeight = "bold";

    }
}

function unfindDate(date){
        //if (date !== dateStay) {
            let font = document.getElementsByClassName(date);
            for (let i = 0; i < font.length; i++) {
                font[i].style.fontStyle = "normal";
                font[i].style.fontWeight = "normal";
            }
        //}
}

function tag(tags) {
    const arrCourses = ["Q1", "Q2", "Q3", "Q4"];
    for (let i = 0; i < arrCourses.length; i++) {
        let box = document.getElementsByClassName(arrCourses[i]);
        for (let j = 0; j < box.length; j++) {
            let font = document.getElementById(box[j].id);
            if (font.textContent.includes(tags)) {
                font.style.fontStyle = "italic";
                font.style.fontWeight = "bold";
                //font.style.fontVariantCaps = "small-caps";
            }
        }
    }
}

function unTag(){
    const arrCourses = ["Q1", "Q2", "Q3", "Q4"];
    for (let i = 0; i < arrCourses.length; i++) {
        let font = document.getElementsByClassName(arrCourses[i]);
        for (let j = 0; j < font.length; j++) {
            font[j].style.fontStyle = "normal";
            font[j].style.fontWeight = "normal";
        }
    }
}