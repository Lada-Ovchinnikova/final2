const cartTable = document.querySelector(".cart-table");
let itemsArray = [];

cartTable.addEventListener("click",
    e => {
    debugger
        if(!e.target.classList.contains("qty-minus")) {
            return;
        }
        let id = e.target.getAttribute('product_id');
        let qtyValue = e.target.parentNode.querySelector(".counter-control .qty-value").value;
        if (qtyValue > 1) {

            let newQty = +qtyValue - 1;
            e.target.parentNode.querySelector(".counter-control .qty-value").setAttribute('value', newQty);
            if (!e.target.classList.contains("cart-qty-minus")) {
                return
            }
            //checkAndSetCookie()
            updateAndSetCookie(newQty, id)
            showFinalPrice(newQty, id);
            showTotalPrice();
        } else {}
    }
);

cartTable.addEventListener("click",
    e => {
        if(!e.target.classList.contains("qty-plus")) {
            return
        };
        let id = e.target.getAttribute('product_id');
        let qtyValue = e.target.parentNode.querySelector(".counter-control .qty-value").value;
        let newQty = +qtyValue + 1;
        e.target.parentNode.querySelector(".counter-control .qty-value").setAttribute('value', newQty);
        if (!e.target.classList.contains("cart-qty-plus")) {
            return
        }
        //checkAndSetCookie()
        updateAndSetCookie(newQty, id)
        showFinalPrice(newQty, id);
        showTotalPrice();
    }
);

function showFinalPrice(qty, id) {
    let searchedSelector = '.price-for-' + id;
    let price = document.querySelector(searchedSelector);
    let oldPrice = price.textContent;
    let newPrice = +oldPrice * qty;
    let searchedSelectorFinal = '.final-price-for-' + id;
    let finalPrice = document.querySelector(searchedSelectorFinal);
    finalPrice.textContent = newPrice;
}

function showTotalPrice() {
    let allPrices = document.querySelectorAll(".item-final-price");
    let newArray = Array.from(allPrices);
    let sum = 0;
    for ( let i = 0; i < newArray.length; i++) {
        sum += +newArray[i].innerHTML;
    }
    let totalPrices = document.querySelector(".cart-total-sum");
    totalPrices.textContent = sum;
}


cartTable.addEventListener("click",
    e => {
    debugger
        if(!e.target.classList.contains("cart-add")) {
            return
        } else {
            checkAndSetCookie();
         };
    });

function checkAndSetCookie() {
    if (getCookie('items') !== undefined) {
        let jsonArray = getCookie('items');
        itemsArray = JSON.parse(jsonArray);
        let item = addCokie();

        if (itemsArray.find(iteme => iteme.id === item.id)) {
            itemsArray.forEach(function(itemd, i) {
                if (itemd.id === item.id) {
                    item.qty = itemd.qty + item.qty;
                    item.final = item.qty * item.price;
                    itemd.qty = item.qty;
                    itemd.final = item.final;
                } else {}
            });
        } else {
            itemsArray.push(item);
            console.log(itemsArray);
        }
    } else {
        let item = addCokie();
        itemsArray.push(item);
        //console.log(itemsArray);
    }
    let createCookie = JSON.stringify(itemsArray);
    console.log(itemsArray);
    setCookie('items', createCookie, {secure: true, 'max-age': 3600});
}

function addCokie() {
    let qtyElem = document.querySelector(".qty-value");
    let cartAdd = document.querySelector(".add-itm-cart");
    let id = cartAdd.getAttribute("product_id");
    let name = cartAdd.getAttribute("product_name");
    let qty = qtyElem.getAttribute("value");
    let price = cartAdd.getAttribute("product_price");
    let weight = cartAdd.getAttribute("product_weight");
    let img = cartAdd.getAttribute("product_img");
    let item = {
        id: +id,
        name: name,
        qty: +qty,
        price: +price,
        weight: weight,
        img: img,
        final: qty * price
    }
    return item;
};

function updateAndSetCookie(newQty, id) {
        let jsonArray = getCookie('items');
        let toNumberId = +id;
        itemsArray = JSON.parse(jsonArray);
        let neededItem = itemsArray.find(item => item.id === toNumberId);
        neededItem.qty = newQty;
        let createCookie = JSON.stringify(itemsArray);
        setCookie('items', createCookie, {secure: true, 'max-age': 3600});
}

//стандартные функции для куки

function setCookie(name, value, options = {}) {
    options = {
        path: '/',
        // при необходимости добавьте другие значения по умолчанию
        ...options
    };
    if (options.expires instanceof Date) {
        options.expires = options.expires.toUTCString();
    }
    let updatedCookie = encodeURIComponent(name) + "=" + encodeURIComponent(value);
    for (let optionKey in options) {
        updatedCookie += "; " + optionKey;
        let optionValue = options[optionKey];
        if (optionValue !== true) {
            updatedCookie += "=" + optionValue;
        }
    }
    document.cookie = updatedCookie;
}

function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}


cartTable.addEventListener("click",
    e => {
    debugger
        if(!e.target.classList.contains("js-del")) {
            return
        };
        let id = e.target.getAttribute('product_id');
        let toNumberId = +id;
        let jsonArray = getCookie('items');
        itemsArray = JSON.parse(jsonArray);
        if (itemsArray.find(item => item.id === toNumberId)) {
            itemsArray.splice(itemsArray.indexOf(toNumberId),1)
        };
        let createCookie = JSON.stringify(itemsArray);
        console.log(itemsArray);
        setCookie('items', createCookie, {secure: true, 'max-age': 3600});
        location.reload();
    }
);





// cartTable.onclick = function(event) {
//     let target = event.target; // где был клик?
//
//     if (!target.classList.contains("qty-minus")) {
//         return;
//     }
//     // let qtyValue = document.querySelector(".qty-value").value;
//     // if (qtyValue > 1) {
//
//         // const newQty = +qtyValue - 1;
//         // document.getElementById("counter_input").setAttribute('value', newQty);
//      else {
//          console.log('click');
//     }
// };



