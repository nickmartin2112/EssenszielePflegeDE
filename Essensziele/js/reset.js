var reset = document.getElementById("reset")
var li = document.querySelectorAll(".listPoint")

reset.addEventListener("click", function () {

    for(let i = 0; i < li.length; i++){
        li[i].classList.remove("checked")
    }
})