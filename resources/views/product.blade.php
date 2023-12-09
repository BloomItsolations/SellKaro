@extends('layout.app')
@section('title')
    Sell Karo
@endsection

@section('content')
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sell Karo</title>
        <!-- =-=-=-=-=-=-= Bootstrap CSS Style =-=-=-=-=-=-= -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <body>
    
        <section class="brand">
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <label for="brand">Select Device Brand:</label>
                            <select class="form-select" id="brand" name="brand" onchange="loadModels()">
                                <option value="Apple">Apple</option>
                                <option value="Samsung">Samsung</option>
                                <option value="google">Google</option>
                                <option value="vivo">Vivo</option>
                                <option value="Xiaomi">Xiaomi</option>
                                <option value="OnePlus">OnePlus</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label for="model">Select Device Model:</label>
                            <select class="form-select" id="model" name="model" onchange="loadProductDetails()">
                                <!-- Options for the selected brand will be loaded dynamically -->
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="product-details" style="display: none;">
            <div class="container py-4 text-center">
                <div class="row" id="product-cards"></div>
            </div>
        </section>

        <script>
            // Define brand and model data
            const brandModels = [{
                    brand: "Apple",
                    models: [{
                            id: 1,
                            name: "Apple iPhone 6",
                            products: [{
                                    id: 1,
                                    name: "Apple IPhone 6 (1 GB/16 GB)",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "Apple IPhone 6 (1 GB/32 GB)",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "Apple IPhone 6 (1 GB/128 GB)",
                                    image: "assets/images/mobile/iphone12.png",
                                }
                                // Add more products for iPhone 11 as needed
                            ],
                        },
                        // Add more models for Apple as needed
                        {
                            id: 4,
                            name: "Macbook",
                            products: [{
                                    id: 4,
                                    name: "iPhone 13",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone 13 as needed
                            ],
                        },
                        {
                            id: 5,
                            name: "iPad Pro Series",
                            products: [{
                                    id: 5,
                                    name: "IPad Pro 12.9",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "IPad Pro 10.5",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "IPad Pro 11",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "IPad Pro 9.7",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "IPad Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "IPad Pro 11 64GB",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone SE as needed
                            ],
                        },
                        // Add more models for Apple as needed
                    ],
                },

                {
                    brand: "Samsung",
                    models: [{
                            id: 1,
                            name: "Galaxy A Series",
                            products: [{
                                    id: 1,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                }
                                // Add more products for iPhone 11 as needed
                            ],
                        },
                        // Add more models for Apple as needed
                        {
                            id: 4,
                            name: "Galaxy J Series",
                            products: [{
                                    id: 4,
                                    name: "Samsung S22",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S52",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S67",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S20",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S12",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone 13 as needed
                            ],
                        },
                        {
                            id: 5,
                            name: "Galaxy Note Series",
                            products: [{
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone SE as needed
                            ],
                        },
                        // Add more models for Apple as needed
                    ],
                },
                {
                    brand: "google",
                    models: [{
                            id: 1,
                            name: "Nexus Series",
                            products: [{
                                    id: 1,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                }
                                // Add more products for iPhone 11 as needed
                            ],
                        },
                        // Add more models for Apple as needed
                        {
                            id: 4,
                            name: "Pixel Series",
                            products: [{
                                    id: 4,
                                    name: "Samsung S22",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S52",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S67",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S20",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S12",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone 13 as needed
                            ],
                        },
                        {
                            id: 5,
                            name: "Pixel 2 Series",
                            products: [{
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone SE as needed
                            ],
                        },
                        // Add more models for Apple as needed
                    ],
                },
                {
                    brand: "vivo",
                    models: [{
                            id: 1,
                            name: "Vivo Y Series",
                            products: [{
                                    id: 1,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                }
                                // Add more products for iPhone 11 as needed
                            ],
                        },
                        // Add more models for Apple as needed
                        {
                            id: 4,
                            name: "Vivo V Series",
                            products: [{
                                    id: 4,
                                    name: "Samsung S22",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S52",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S67",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S20",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S12",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone 13 as needed
                            ],
                        },
                        {
                            id: 5,
                            name: "Vivo X Series",
                            products: [{
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone SE as needed
                            ],
                        },
                        // Add more models for Apple as needed
                    ],
                },
                {
                    brand: "Xiaomi",
                    models: [{
                            id: 1,
                            name: "Redmi 6 Series",
                            products: [{
                                    id: 1,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                }
                                // Add more products for iPhone 11 as needed
                            ],
                        },
                        // Add more models for Apple as needed
                        {
                            id: 4,
                            name: "MI Series",
                            products: [{
                                    id: 4,
                                    name: "Samsung S22",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S52",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S67",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S20",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S12",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone 13 as needed
                            ],
                        },
                        {
                            id: 5,
                            name: "Redmi Note Series",
                            products: [{
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone SE as needed
                            ],
                        },
                        // Add more models for Apple as needed
                    ],
                },
                {
                    brand: "OnePlus",
                    models: [{
                            id: 1,
                            name: "OnePlus One",
                            products: [{
                                    id: 1,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "Samsung Galaxy",
                                    image: "assets/images/mobile/iphone12.png",
                                }
                                // Add more products for iPhone 11 as needed
                            ],
                        },
                        // Add more models for Apple as needed
                        {
                            id: 4,
                            name: "OnePlus 2",
                            products: [{
                                    id: 4,
                                    name: "Samsung S22",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S52",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S67",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S20",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 4,
                                    name: "Samsung S12",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone 13 as needed
                            ],
                        },
                        {
                            id: 5,
                            name: "OnePlus X",
                            products: [{
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "Samsung X",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                // Add more products for iPhone SE as needed
                            ],
                        },
                        // Add more models for Apple as needed
                    ],
                },

                // Add more brands as needed
            ];

            // Function to load models based on the selected brand
            function loadModels() {
                const brandSelect = document.getElementById("brand");
                const modelSelect = document.getElementById("model");
                const selectedBrand = brandSelect.value;

                // Find models for the selected brand
                const models = brandModels.find(brand => brand.brand === selectedBrand).models;

                // Populate the model dropdown
                modelSelect.innerHTML = '<option value="" selected>Select Device Model</option>';
                models.forEach(model => {
                    const option = document.createElement("option");
                    option.value = model.name;
                    option.textContent = model.name;
                    modelSelect.appendChild(option);
                });
            }

            // Function to load product details based on the selected model
            // Function to load product details based on the selected model
            function loadProductDetails() {
                const modelSelect = document.getElementById("model");
                const selectedModel = modelSelect.value;

                // Find the selected model
                const selectedBrand = brandModels.find(brand => brand.brand === document.getElementById("brand").value);
                const selectedModelData = selectedBrand.models.find(model => model.name === selectedModel);

                // Store selected product information in the session
                sessionStorage.setItem('selectedProduct', JSON.stringify(selectedModelData));

                // Display product details
                const productCardsContainer = document.getElementById("product-cards");
                productCardsContainer.innerHTML = ''; // Clear existing cards

                selectedModelData.products.forEach(product => {
                    const card = document.createElement("div");
                    card.classList.add("col-lg-4", "mx-auto");

                    card.innerHTML = `
                        <div class="card h-100 py-2">
                        <img class="card-img-top" src="${product.image}" alt="Product Image">
                            <div class="card-body">
                                <h6 class="card-title">${selectedModel}</h6>
                                <h6 class="card-title">${product.name}</h6>
                            </div>
                            <a href="/location?productId=${product.id}">
                            <button class="btn btn-danger">Repair this Device</button>
                            </a>
                        </div>
                    `;

                    productCardsContainer.appendChild(card);
                });

                // Show the product details section
                document.getElementById("product-details").style.display = "block";
            }
        </script>
    @endsection
</body>

</html>
