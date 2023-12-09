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

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


        <style>
           

            #selected-product,
            #placesDropdown {
                padding: 20px;
                /* Adjust as needed */
            }

           
            .container {
                max-width: 800px;
                margin: 0 auto;
            }

            label {
                display: block;
                margin-bottom: 8px;
            }

            .form-select {
                width: 100%;
                padding: 8px;
                margin-bottom: 16px;
                border: 1px solid #ccc;
                border-radius: 4px;
                box-sizing: border-box;
            }

            .card {
                margin-bottom: 20px;
            }

            .card img {
                max-height: 200px;
                /* Adjust as needed */
            }

            .card-body {
                text-align: center;
            }

            .filtered-place {
                padding: 5px;
                border-bottom: 1px solid #ccc;
            }
        </style>

    </head>

    <body>

        <section class="bg-light container-fluid">

            <div class="row">
                <!-- Left side for product details -->
                <div class="col-lg-6 ">
                    <div id="selected-product">
                        <!-- Product details will be displayed here -->
                    </div>
                </div>

                <!-- Right side for places dropdown -->
                <div class="col-lg-6 mt-4 ">
                    <h3 class="mb-3">Select a Place</h3>
                    <select id="placesDropdown" class="form-select" style="width: 98%;">
                        <!-- Options will be added dynamically using JavaScript -->
                    </select>
                    <h4 class="mt-4">Select the issues you are facing</h4>
                    <div class="form-check mt-4 ">
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Speaker Issue
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Wifi Not Working
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Volume Button Not Working
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Charging Jack Not Working
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Rear camera Not working
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Front Camera Not Working
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Diagnosis
                        </label>
                        <input class="form-check-input" type="checkbox" id="exampleCheckbox">
                        <label class="form-check-label" for="exampleCheckbox">
                            Touch Issue
                        </label>
                    </div>

                    <a href="/login">
                        <button class="btn btn-warning mt-3 mb-3">Submit</button>
                    </a>
                </div>

            </div>

        </section>


        <script>
            const brandModels = [{
                    brand: "Apple",
                    models: [{
                            id: 1,
                            name: "Apple iPhone",
                            products: [{
                                    id: 1,
                                    name: "iPhone 11",
                                    image: "assets/images/mobile/iphone11.png",
                                },
                                {
                                    id: 2,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 3,
                                    name: "iPhone 12",
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
                                    name: "iPhone SE",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "iPhone 11 Pro",
                                    image: "assets/images/mobile/iphone12.png",
                                },
                                {
                                    id: 5,
                                    name: "iPhone 11 Pro",
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
                            ],
                        },

                    ],
                },

                // Add more brands as needed
            ];

            // Function to retrieve selected product information from the query parameter
            function getSelectedProduct() {
                const urlParams = new URLSearchParams(window.location.search);
                const productId = urlParams.get('productId');

                if (productId) {
                    // Find the product in the brandModels array
                    for (const brand of brandModels) {
                        for (const model of brand.models) {
                            for (const product of model.products) {
                                if (product.id == productId) {
                                    // Display the selected product information
                                    const selectedProductSection = document.getElementById("selected-product");
                                    selectedProductSection.innerHTML = `
                                    <div class="card w-75 mx-4">
                                        <h2 class="mx-4">Selected Product</h2>
                                        <img src="${product.image}" alt="${product.name}" style="max-width: 700px; max-height: 500px; ">
                                        <p class="mx-4">1. Category: <b>${model.name}</b></p>
                                        <p class="mx-4">2. Model: <b>${product.name}</b></p>
                                        <p class="mx-4">3. Max Price: <b>30000</b></p> 
                                        <p class="mx-4">4. Internal Memory: <b>512</b></p>
                                    </div>
                                `;
                                    return;
                                }
                            }
                        }
                    }

                    // If the product with the given ID is not found
                    console.log("Product with ID " + productId + " not found");
                } else {
                    console.log("No product ID found in the query parameter");
                }
            }
            getSelectedProduct();

            // Sample places data
            var places = [
                'BANGALORE', 'DELHI NCR', 'MUMBAI', 'CHENNAI', 'HYDERABAD', 'THANE', 'JAIPUR', 'PUNE', 'AGRA',
                'KOLKATA', 'GORAKHPUR', 'MATHURA', 'BANARAS', 'LUCKNOW', 'KANPUR', 'CHANDIGARH', 'AMRITSAR',
                'LUDHIANA', 'PATNA'
            ];

            function populateDropdown() {
                var dropdown = $("#placesDropdown");
                dropdown.empty(); // Clear existing options

                // Add a placeholder with search functionality
                dropdown.append('<option value="" selected disabled hidden>Search for a place...</option>');

                // Add places to the dropdown
                places.forEach(function(place) {
                    dropdown.append('<option value="' + place + '">' + place + '</option>');
                });
            }

            // Call the function to populate the dropdown
            populateDropdown();

            // Add an event listener for the search functionality
            $("#placesDropdown").select2({
                placeholder: "Search for a place...",
                allowClear: true
            });
            // Call the function on page load
        </script>
    @endsection

</body>

</html>
