let lastID = '';
let boolLine = false;

function loadPost(insert){
    //'sub/home.php'
    let post = 'sub/' + insert + '.php'
    $(function(){
        $('#loadPost').load(post);
    });
    if (insert !== 'home') {
        document.getElementById(insert).style.textDecorationThickness = "4px";
        console.log(lastID);
    }
    if (boolLine === true){
        document.getElementById(lastID).style.textDecoration = "line-through";
    }
    lastID = insert;
    boolLine = true;
}

$(document).scroll(function() {
    let myScrollFunc = function () {
        let y = window.scrollY;
        if (y > 200) {
            console.log(y);
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
            document.getElementById("content").style.paddingTop = "70px";

        }
    };

    window.addEventListener("scroll", myScrollFunc);
});