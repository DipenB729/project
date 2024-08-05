// addtosell.js

let itemData = {}; // Object to store the item data

document.getElementById('sellForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form values
    const itemName = document.getElementById('itemName').value;
    const itemDescription = document.getElementById('itemDescription').value;
    const itemPrice = document.getElementById('itemPrice').value;
    const itemImage = document.getElementById('itemImage').files[0];

    // Create a FileReader to read the image file
    const reader = new FileReader();
    
    reader.onload = function(e) {
        // Update itemData object
        itemData = {
            name: itemName,
            description: itemDescription,
            price: itemPrice,
            image: e.target.result // Set image data URL
        };

        // Display the submitted item
        const displayArea = document.getElementById('displayArea');
        displayArea.innerHTML = `
            <h3>${itemData.name}</h3>
            <img src="${itemData.image}" alt="${itemData.name}" />
            <p><strong>Description:</strong> ${itemData.description}</p>
            <p><strong>Price:</strong> Rs ${itemData.price}</p>
        `;

        // Show the item display and edit button
        document.getElementById('itemDisplay').style.display = 'block';
        document.getElementById('editButton').style.display = 'block';
    };

    // Read the image file as a data URL
    if (itemImage) {
        reader.readAsDataURL(itemImage);
    }
});

document.getElementById('editButton').addEventListener('click', function() {
    // Pre-fill the form with the current item data
    document.getElementById('itemName').value = itemData.name;
    document.getElementById('itemDescription').value = itemData.description;
    document.getElementById('itemPrice').value = itemData.price;

    // Clear the current image display
    document.getElementById('itemImage').value = ''; // Reset file input

    // Hide the item display and edit button
    document.getElementById('itemDisplay').style.display = 'none';
    document.getElementById('editButton').style.display = 'none';
});
