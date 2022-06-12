const qtyMinus = document.querySelector(".qty-minus");
const qtyPlus = document.querySelector(".qty-plus");
const cartAdd = document.querySelector(".cart-add");
const input = document.getElementById("counter_input");
const cartInput = document.querySelector(".qty-value");
let itemsArray = [];

input.oninput = function() {
    const newQty = input.value;
    document.getElementById("counter_input").setAttribute('value', newQty);
};

// cartInput.oninput = function() {
//     debugger
//     const newQty = cartInput.value;
//     document.querySelector(".qty-value").setAttribute('value', newQty);
// };

qtyMinus.addEventListener("click",
    e => {
        const qtyValue = document.getElementById("counter_input").value;
        if(!e.target.classList.contains("qty-minus")) {
            return
        };
        if (qtyValue > 1) {
            const newQty = +qtyValue - 1;
            document.getElementById("counter_input").setAttribute('value', newQty);
        } else {}
    }
);

qtyPlus.addEventListener("click",
    e => {
    debugger
        const qtyValue = document.getElementById("counter_input").value;
        if(!e.target.classList.contains("qty-plus")) {
            return
        };
        if (qtyValue < 5) {
            const newQty = +qtyValue + 1;
            console.log(newQty);
            document.getElementById("counter_input").setAttribute('value', newQty);
        } else {}
    }
);

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


cartAdd.addEventListener("click",
        e => {
        debugger
        if(!e.target.classList.contains("cart-add")) {
            return
        };
        checkAndSetCookie();
});

function checkAndSetCookie() {
    if (getCookie('items') !== undefined) {
        let jsonArray = getCookie('items');
        itemsArray = JSON.parse(jsonArray);
        let qtyElem = document.querySelector(".qty-value");
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
        }
    } else {
        let qtyElem = document.querySelector(".qty-value");
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
        console.log (item);
        itemsArray.push(item);
    }
    let qwe = JSON.stringify(itemsArray);
    setCookie('items', qwe, {secure: true, 'max-age': 3600});
}



