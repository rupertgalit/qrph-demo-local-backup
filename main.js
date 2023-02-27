console.log("running");

let carts = document.querySelectorAll(".add-cart");

let products = [ 
    
        {
            name: 'Demo Product no. 1',
            tag: 'HP1',
            price: 8,
            inCart: 0
        },
        {
            name: 'Demo Product no. 2',
            tag: 'Asus1',
            price: 20,
            inCart: 0
        },
        {
            name: 'Demo Product no. 3',
            tag: 'Dell1',
            price: 30,
            inCart: 0
        },


        {
            name: 'Lenovo ThinkPad T15 Gen 2',
            tag: 'Lenovo1',
            price: 27000,
            inCart: 0
        },
        {
            name: 'Huawei MateBook D 14',
            tag: 'Huawei-mate1',
            price: 36500,
            inCart: 0
        },
        {
            name: 'MSI Titan GT77',
            tag: 'Msi1',
            price: 34500,
            inCart: 0
        },


        {
            name: 'Razer Blade 14',
            tag: 'Razerblade1',
            price: 54500,
            inCart: 0
        },
        {
            name: 'Toshiba Satellite S55',
            tag: 'Toshiba1',
            price: 29999,
            inCart: 0
        },
        {
            name: 'LG Gram 17',
            tag: 'Lg1',
            price: 31500,
            inCart: 0
        },
        {
            name: 'LG Gram 17',
            tag: 'Lg1',
            price: 31500,   
            inCart: 0
        },
        

    ]

for (let i = 0; i < carts.length; i++) {

    carts[i].addEventListener('click',() => {
        carNumbers(products[i]);
        totalCost(products[i]);
    })    
} 

function onLoadCartNumbers() {
    let productNumbers = localStorage.getItem('cartNumbers');

    if(productNumbers){
        document.querySelector('.cart span').textContent = productNumbers;
    }
}


function carNumbers(product) {
     
    let productNumbers = localStorage.getItem('cartNumbers');
    // console.log(productNumbers);
    

    productNumbers = parseInt(productNumbers);
    // console.log(typeof productNumbers);

    if(productNumbers)
    {
        localStorage.setItem('cartNumbers',productNumbers + 1);
        document.querySelector('.cart span').textContent = productNumbers + 1;
    }   
    else
    {
        localStorage.setItem('cartNumbers', 1);
        document.querySelector('.cart span').textContent = 1;    
    }

    setItem(product);

}

function setItem(product){

    let cartItems = localStorage.getItem('productsInCart');
    cartItems = JSON.parse(cartItems);
    // console.log("my cartitems are", cartItems);

    if (cartItems != null){

        if (cartItems[product.tag] == undefined){
            cartItems = {
                ...cartItems,
                [product.tag]: product
            }
        }
        cartItems[product.tag].inCart += 1;
    }
    else{

        product.inCart = 1;
        cartItems = {
        [product.tag]: product
        }

    }

    
    localStorage.setItem("productsInCart", JSON.stringify(cartItems));


}

function totalCost(product) {
    // console.log("product cost" , product.price);
    
    let cartCost = localStorage.getItem('totalCost');
    
    
    

    if(cartCost != null){
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", cartCost + product.price);
        console.log(typeof cartCost);
    }
    else{
        cartCost = parseInt(cartCost);
        localStorage.setItem("totalCost", product.price);
    }

   

}

function displayCart(){
    let cartItems = localStorage.getItem("productsInCart");
    cartItems = JSON.parse(cartItems);
    
    let productContainer = document.querySelector(".product");
    let basketContainer = document.querySelector(".basket");


    console.log(cartItems);
    if (cartItems && productContainer) {
        productContainer.innerHTML = '';
        Object.values(cartItems).map(item => {
            productContainer.innerHTML += `
            <div class="product row "> 
                <div class="col-2  d-flex justify-content-center text-center ">
                 <a href="https://qrph-demo.netglobalsolutions.net/shop.php" onclick="removeData()"><ion-icon name="close-circle-outline"> </ion-icon></a> 
                </div>       
                <div class="col-3 product-title d-flex justify-content-center text-center">
                
                <img src="./assets/img/${item.tag}.jpg">
                <span>${item.name}</span>                                                                                        
                </div>
                
                <div class="col-3 d-flex justify-content-center text-center ">
                    <span>₱${item.price}</span> 
                </div>    
                <div class="col-1 d-flex justify-content-center text-center ">
                    
                    <span>${item.inCart}</span> 
                    
                </div>
                <div class="col-3 d-flex justify-content-center text-center ">
                   
                    <span>₱${item.inCart * item.price}.00</span>                     
                </div>
                <hr>
                                                                                                                                                
            `;
        });

        basketContainer.innerHTML += `
        <div class="row basket"> 
            <div class="col-sm">
            <span></span>                                                                                                              
            
            </div>
                                     
        </div> 
        `;

    }
}
function removeData(){
    localStorage.removeItem("productsInCart");
    localStorage.removeItem("totalCost");
    localStorage.removeItem("cartNumbers");
}



onLoadCartNumbers();
displayCart();