window.onscroll = function() {myFunction()};

function myFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("nav").className = "background";
    } else {
        document.getElementById("nav").className = "";
    }
}