document.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const query = urlParams.get('query') ? urlParams.get('query').toLowerCase().trim() : '';
    const products = [
        { name: 'Airpod Pro', price: 'Rs 33,000', img: 'airpod.jpeg' },
        { name: 'Wireless Mouse', price: 'Rs 2,000', img: 'mouse.jpg' },
        { name: 'Nikon Camera', price: 'Rs 1,20,000', img: 'camera.jpeg' },
        { name: 'Insta X mini camera', price: 'Rs 50,000', img: 'cmra.jpeg' },
        { name: 'Beats speaker', price: 'Rs 60,000', img: 'speaker (1).jpeg' },
        { name: 'Speaker', price: 'Rs 1,500', img: 'speaker.jfif' },
        { name: 'XBox', price: 'Rs 75,000', img: 'plastation.jpeg' },
        { name: 'Noise AirBuds Mini', price: 'Rs 2,300', img: 'airbud.jpeg' },
        { name: 'Canon Camera', price: 'Rs 200,000', img: 'canon.jpeg' },
        { name: 'PS5', price: 'Rs 70,000', img: 'ps5.jpeg' },
        { name: 'Ipad Pro', price: 'Rs 2,00,000', img: 'tab.jpeg' },
        { name: 'Iphone 15 pro Max', price: 'Rs 1,80,000', img: 'iphone 15 pro.jpeg' },
        { name: 'Samsung S24', price: 'Rs 2,00,000', img: 'Galaxy-S22-Ultra-Dark-Red.jpg' },
        { name: 'VIVO V20', price: 'Rs 39,999', img: 'vivo.jpeg' },
        { name: 'MSI Titan', price: 'Price 4,00,000', img: 'mstitan.jpeg' },
        { name: 'AcerNitro 5', price: 'Rs 1,50,000', img: 'acernitro.jpg' },
        { name: 'HP Omen', price: 'Rs1,70,000', img: 'hpomen.jpg' },
        { name: 'Macbook Pro', price: 'Rs 1,30,000', img: 'macbook.jpg' },
        { name: 'DJI mini 4 drone', price: 'Rs 80,000', img: 'drone.jpg' },
        { name: 'Gopro hero12', price: 'Rs 50,000', img: 'gopro.jpeg' },
        { name: 'Samsung Galaxy Watch6', price: 'Rs 33,999', img: 'samsunga52.jpg' },
        { name: 'Insta360 X4 360° 8K Camera', price: 'Rs 78,500', img: 'camera.jpeg' },
        { name: 'Nothing Phone 2', price: 'Rs 55,000', img: 'iphone 15 pro.jpeg' }
    ];

    const searchResultsContainer = document.getElementById('search-results');
    
    if (query) {
        const filteredProducts = products.filter(product => product.name.toLowerCase().includes(query));
        
        if (filteredProducts.length > 0) {
            filteredProducts.forEach(product => {
                const productElement = document.createElement('div');
                productElement.classList.add('box1');
                productElement.innerHTML = `
                    <img src="${product.img}" alt="${product.name}" height="180px" width="180px" />
                    <h1>${product.name}</h1>
                    <p>${product.price}</p>
                    <a href="addtocart.html" id="addtocart"><p>Add to Cart</p></a>
                `;
                searchResultsContainer.appendChild(productElement);
            });
        } else {
            searchResultsContainer.innerHTML = '<p>No products found.</p>';
        }
    } else {
        searchResultsContainer.innerHTML = '<p>Please enter a search query.</p>';
    }
});
