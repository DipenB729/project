function updateProduct(product, id) {
    if (!id) {
        document.getElementById(`${product}1`).innerHTML = "";
        document.getElementById(`${product}2`).innerHTML = "";
        return;
    }

    fetch(`getProduct.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            document.getElementById(`img${product}`).innerHTML = `<img src="${data.image}" alt="${data.name}" />`;
            document.getElementById(`price${product}`).innerText = `Npr ${data.price}`;
            document.getElementById(`desc${product}`).innerText = data.description;
            document.getElementById(`brand${product}`).innerText = data.brand;
        })
        .catch(error => console.error('Error:', error));
}


function update(){
        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'show_comparision_ajax_handler.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                console.log(xhr.responseText);
            }
        };
        
        xhr.send('value=' + encodeURIComponent("A"));
}
