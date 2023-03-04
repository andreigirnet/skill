const cartRow = document.getElementById('cartTableRow');
const url = window.location.origin + "/api/cart/items";

function getCartItems(){
    axios
        .get(url)
        .then((response) => {
            const items = response.data;
            console.log(`GET items`, items);
        })
        .catch((error) => console.error(error));
}

getCartItems();



for(let i = 0; i<=items.length;i++){

}
