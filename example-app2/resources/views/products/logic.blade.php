<script type="text/javascript">
products = []
//mapping
const mapping = {
    'blue': 'modrá',
    'red': 'červená',
    'black': 'čierna',
    'white': 'biela',
    'brown': 'hnedá',
    'yellow': 'žltá',
    'green': 'zelená',
    'pink': 'ružová'
};

const reverse_mapping ={
    'modrá': 'blue',
    'červená': 'red',
    'čierna': 'black',
    'biela': 'white',
    'hnedá': 'brown',
    'žltá': 'yellow',
    'zelená': 'green',
    'ružová': 'pink'
}

function replaceValues(tmp, mapping) {
    return tmp.map(color => mapping[color] || color);
}

function fillarray(arr){
    arr.forEach(record => {
        products.push(record);
    });
}

// Function to render products
function renderProducts(products) {
    const productList = document.getElementById('productList');
    productList.innerHTML = '';

    if (!products.length) {
        const par = document.createElement('h1');
        par.style.minWidth = '80%';
        par.style.textAlign = 'center';
        par.innerHTML = 'Ľutujeme, ale žiaden s produktov nevyhovuje všetkým vašim požiadavkam.'
        productList.appendChild(par);
        return;
    }
    products.forEach(product => {
        const productCard = document.createElement('div');
        productCard.classList.add('product');
        productCard.innerHTML = `
            <img src="${product.imageUrl}" alt="${product.name}" height="200px" width="200px">
            <h5 style="font-weight: bold">${product.name}</h5>
            <p>${product.brand}</p>
            <p>$${product.price}</p>
            <button id="button_${product.id}" type="button" style="background-color: #ffe288; font-weight: bold; border-radius: 12px; padding: 8px;">Zobraziť</button>
        `;
        const button = productCard.querySelector(`#button_${product.id}`);
        button.addEventListener('click', function() {
            window.location.href = `/item/${product.id}`;
        });
        productList.appendChild(productCard);
    });
}

let pagination_check = 0;
let direction = 0

function lefttoright(direct) {
    if (direct)
        direction = 1;
    else
        direction = -1;
    filterProducts()
}

function paginate(pages) {
    if (direction !== 0) {
        let cur_page = document.getElementsByClassName('pagination')[0];
        if (!((Number(cur_page.id) === Number(pages.length)) && direction === 1))
            if (!(cur_page.id < 2 && direction === -1))
                pagination_check = Number(cur_page.id) + Number(direction);
        else
            pagination_check = Number(pages.length);

        direction = 0;
    }
    const productList = document.getElementById('paginate');
    productList.innerHTML = '';

    pages.forEach(page => {
        const productCard = document.createElement('h6');
        productCard.innerHTML = page;
        productCard.id = page;

        productCard.onclick = function() {
            pagination_check = page;
            filterProducts();
        }
        if (pagination_check === 0 && page === 1) {
            productCard.classList.add('pagination');
        }
        else if (page === pagination_check ) {
            productCard.classList.add('pagination');
        }
        else
            productCard.classList.add('unselected_pages');
        productList.appendChild(productCard);
    });
    return pagination_check;
}

function filterProducts() {
    const minPrice = parseInt(document.getElementById('minPrice').value) || 0;
    const maxPrice = parseInt(document.getElementById('maxPrice').value) || Number.MAX_VALUE;
    const brands = document.getElementsByClassName('brandNEW');
    const colors = document.getElementsByClassName('selected');
    const sizes = document.getElementsByClassName('checkNEW');
    let sortOption = document.getElementById('sort').textContent;
    let userinput = document.getElementById('search');
    let filteredProducts = products;

    //colors
    let tmp = [];

    Array.prototype.forEach.call(colors, function (el) {
        tmp.push(el.id.substring(7));
    });

    if (tmp.length) {
        tmp = replaceValues(tmp, mapping);
        filteredProducts = filteredProducts.filter(product => {
            return product.color.some(color => tmp.includes(color));
        });
    }

    // nazov
    if (userinput.value !== "") {
        filteredProducts = filteredProducts.filter(product => {
            return (product.name.toLowerCase()).includes(userinput.value.toLowerCase());
        });
    }

    //brands
    tmp = [];

    Array.prototype.forEach.call(brands, function (el) {
        tmp.push(el.id);
    });

    if (tmp.length) {
        filteredProducts = filteredProducts.filter(product => {
            return tmp.includes(product.brand);
        });
    }

    //sizes
    tmp = [];

    Array.prototype.forEach.call(sizes, function (el) {
        tmp.push(el.id);
    });

    if (tmp.length) {
        tmp = replaceValues(tmp, mapping);
        filteredProducts = filteredProducts.filter(product => {
            return product.size.some(size => tmp.includes(size));
        });
    }

    //cena
    filteredProducts = filteredProducts.filter(product => {
        return (product.price >= minPrice && product.price <= maxPrice);
    });

    //sort
    sortOption = (sortOption.split(' ')).splice(0,2).join(' ')
    switch (sortOption) {
        case 'Cena: najnižšia':
            filteredProducts = filteredProducts.sort((a, b) => a.price - b.price);
            break;
        case 'Cena: najvyššia':
            filteredProducts = filteredProducts.sort((a, b) => b.price - a.price);
            break;
        case 'Dátum: najnovšie':
            filteredProducts = filteredProducts.sort((a, b) => new Date(b.dateAdded) - new Date(a.dateAdded));
            break;
        case 'Dátum: najstaršie':
            filteredProducts = filteredProducts.sort((a, b) => new Date(a.dateAdded) - new Date(b.dateAdded));
            break;
    }

    //strankovanie
    let pages = []
    for (let i = 0; i < Math.ceil(filteredProducts.length/6); i++) {
        pages.push(i+1);
    }

    let multiplier = paginate(pages);
    if (multiplier === 0)
        multiplier = 1;
    pagination_check = 0;

    let x = (multiplier * 6)-6;
    let y = (multiplier*6);
    filteredProducts = filteredProducts.slice(x,y);



    // Render filtered products
    renderProducts(filteredProducts);
}

let expanded = {'testing': false, 'testing1': false, 'testing2': false, 'testing3': false};

function showCheckboxes(id, el) {
    let checkboxes = document.getElementById(id);
    if (!expanded[id]) {
        if (id === 'testing' || id === 'testing3')
            checkboxes.style.display = "flex";
        else
            checkboxes.style.display = "block";
        expanded[id] = true;
    } else {
        checkboxes.style.display = "none";
        expanded[id] = false;
    }
    let st = window.getComputedStyle(el, null);
    let tr = st.getPropertyValue("transform");
    if (tr === 'none')
        el.style.transform = 'rotate(180deg)';
    else
        el.style.transform = 'none';
}

function selectMarker(color) {
    let item = document.getElementById('marker_' + color)
    if (item.classList.contains("unselected")) {
        item.classList.remove("unselected");
        item.classList.add("selected");
    } else {
        item.classList.remove("selected");
        item.classList.add("unselected");
    }
    filterProducts();
}

function changeSize(clickedDiv) {
    if (clickedDiv.classList.contains("checkNEW")) {
        clickedDiv.classList.remove("checkNEW");
        clickedDiv.classList.add("checkOLD");
    } else {
        clickedDiv.classList.remove("checkOLD");
        clickedDiv.classList.add("checkNEW");
    }
    filterProducts();
}

function changeBrand(clickedDiv) {
    if (clickedDiv.classList.contains("brandNEW")) {
        clickedDiv.classList.remove("brandNEW");
        clickedDiv.classList.add("brandOLD");
    } else {
        clickedDiv.classList.remove("brandOLD");
        clickedDiv.classList.add("brandNEW");
    }
    filterProducts();
}

function select_highlighted(chosen, category) {
    let all_elms = document.getElementsByClassName(category);
    Array.prototype.forEach.call(all_elms, function (el) {
        el.style.textDecoration = 'none';
        el.style.fontWeight = 'normal';
        el.style.color = '#808080';
    });
    chosen.style.textDecoration = 'underline';
    chosen.style.fontWeight = 'bold';
    chosen.style.color = 'black';
}

function selectOption(option) {
    document.getElementById("sort").innerText = option;
    filterProducts();
}

// Event listeners for filtering and sorting
document.getElementById('minPrice').addEventListener('input', filterProducts);
document.getElementById('maxPrice').addEventListener('input', filterProducts);
document.addEventListener("DOMContentLoaded", filterProducts);
</script>
