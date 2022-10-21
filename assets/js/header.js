function mobileHeaderShow() {
    document.getElementById("hamburger-cross").style.display = "block";
    document.getElementById("header-menu").style.position = "fixed";
    document.getElementById("hamburger").style.display = "none";
    document.getElementById("header-menu").style.right = "0%";
    document.getElementById("header-menu").style.transition = "all 0.5s";
}

function mobileHeaderHide() {
    document.getElementById("header-menu").style.right = "-100%";
    document.getElementById("header-menu").style.position = "absoltue";
    document.getElementById("hamburger").style.display = "block";
    document.getElementById("hamburger-cross").style.display = "none";
}