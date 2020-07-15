var filter = document.querySelectorAll(".category")
var catCheckbox = document.querySelectorAll(".catCheck")

for(let i = 0; i < filter.length; i++){
    filter[i].addEventListener("click", function () {

        this.classList.toggle("checked")
        catCheckbox[i].checked = true

    })
}

var distence = document.querySelectorAll(".distance")

for(let i = 0; i < distence.length; i++){
    distence[i].addEventListener("click", function () {

        for(let j = 0; j < distence.length; j++){
            distence[j].classList.remove("checked")

        }
        this.classList.add("checked")

    })
}

var price = document.querySelectorAll(".price")

for(let i = 0; i < price.length; i++){
    price[i].addEventListener("click", function () {

        for(let j = 0; j < price.length; j++){
            price[j].classList.remove("checked")
        }
        this.classList.add("checked")

    })
}

var veggie = document.querySelectorAll(".veggie")

for(let i = 0; i < veggie.length; i++){
    veggie[i].addEventListener("click", function () {

        for(let j = 0; j < veggie.length; j++){
            veggie[j].classList.remove("checked")
        }
        this.classList.add("checked")

    })
}