// Define your product data
const products = [
    {
        id: 0,
        image: "samsungs22.jpg",
        price: "Npr 109,999",
        description: " Display: 6.1-inch AMOLED, 120Hz Processor: Exynos 2200 / Snapdragon 8 Gen 1 RAM/Storage: 8GB / 128GB/256GB (no microSD)Cameras: 50 MP (wide), 12 MP (ultrawide), 10 MP (telephoto) / 10 MP (front)Battery: 3700 mAh, 25W wired, 15W wireless Build: Glass front/back, aluminum frameConnectivity: 5G, Wi-Fi 6E, Bluetooth 5.2, NFCWater Resistance: IP68 " ,
        brand: "Samsung"
    },
    {
        id: 1,
        image: "samsunga52.jpg",
        price: "Npr 80000",
        description: " Display: 6.1-inch AMOLED, 120Hz Processor: Exynos 2200 / Snapdragon 8 Gen 1 RAM/Storage: 8GB / 128GB/256GB (no microSD)Cameras: 50 MP (wide), 12 MP (ultrawide), 10 MP (telephoto) / 10 MP (front)Battery: 3700 mAh, 25W wired, 15W wireless Build: Glass front/back, aluminum frameConnectivity: 5G, Wi-Fi 6E, Bluetooth 5.2, NFCWater Resistance: IP68 ",
        brand: "Samsung"
    },
    {
        id: 2,
        image: "canon.jpeg",
        price: "Npr 150000",
        description: "Sensor: APS-C CMOS, 24.2 MPProcessor: DIGIC 7ISO Range: 100-25,600 (expandable)Autofocus: 45-point all cross-typeContinuous Shooting: 6 fpsScreen: 3-inch vari-angle touchscreen LCDVideo: Full HD 1080p at 60 fpsConnectivity: Wi-Fi, Bluetooth, NFCBuild: Lightweight, ergonomic design",
        brand: "Canon"
    },
    {
        id: 3,
        image: "camera.jpeg",
        price: "Npr 180000",
        description: "Sensor Type: Full-frame (FX) or APS-C (DX) CMOS sensorResolution: 45.7 MP (for high-resolution models)ISO Range: 64-25,600 (expandable to 32-102,400)Autofocus: 153-point AF system with 99 cross-type sensorsContinuous Shooting Speed: Up to 7 fps (frames per second)Video Recording: 4K UHD (Ultra High Definition) video recordingScreen: 3.2-inch LCD touchscreen with high resolutionImage Stabilization: In-body VR (Vibration Reduction) for stillsBattery Life: Approximately 1,840 shots per charge (CIPA standard)",
        brand: "Nikkle"
    }
    // Add more products as needed
];

// Function to update product details based on selection
function updateProductDetails() {
    const select1 = document.getElementById("select1");
    const select2 = document.getElementById("select2");

    const product1 = products[select1.value];
    const product2 = products[select2.value];

    // Update Product 1 details
    document.getElementById("img1").src = product1.image;
    document.getElementById("price1").innerText = product1.price;
    document.getElementById("desc1").innerText = product1.description;
    document.getElementById("brand1").innerText = product1.brand;

    // Update Product 2 details
    document.getElementById("img2").src = product2.image;
    document.getElementById("price2").innerText = product2.price;
    document.getElementById("desc2").innerText = product2.description;
    document.getElementById("brand2").innerText = product2.brand;
}

// Attach event listeners to the dropdowns
document.getElementById("select1").addEventListener("change", updateProductDetails);
document.getElementById("select2").addEventListener("change", updateProductDetails);

// Initialize the product details on page load
window.onload = updateProductDetails;
