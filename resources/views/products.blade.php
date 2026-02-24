<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <style>
        :root {
            --primary-color: #667eea;
            --secondary-color: #764ba2;
        }
        body {
            background: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 15px 0;
        }
        .navbar-brand {
            color: white !important;
            font-weight: 700;
            font-size: 1.5rem;
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: white !important;
        }
        .page-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            padding: 60px 0 80px;
            margin-bottom: -40px;
        }
        .page-header h1 {
            color: white;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .page-header p {
            color: rgba(255, 255, 255, 0.85);
            font-size: 1.1rem;
        }
        .product-card {
            background: white;
            border: none;
            border-radius: 16px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            overflow: hidden;
            height: 100%;
        }
        .product-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.15);
        }
        .product-image {
            position: relative;
            padding-top: 75%;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            overflow: hidden;
        }
        .product-image i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            color: #a0aec0;
        }
        .product-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: var(--primary-color);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .product-badge.sale {
            background: #ef4444;
        }
        .product-badge.new {
            background: #10b981;
        }
        .product-body {
            padding: 20px;
        }
        .product-category {
            color: #667eea;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .product-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #1f2937;
            margin-bottom: 10px;
        }
        .product-description {
            color: #6b7280;
            font-size: 0.875rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .product-price {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .current-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--primary-color);
        }
        .original-price {
            font-size: 0.875rem;
            color: #9ca3af;
            text-decoration: line-through;
        }
        .product-rating {
            display: flex;
            align-items: center;
            gap: 5px;
            margin-bottom: 15px;
        }
        .product-rating i {
            color: #fbbf24;
            font-size: 0.875rem;
        }
        .product-rating span {
            color: #6b7280;
            font-size: 0.875rem;
        }
        .btn-add-cart {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }
        .btn-add-cart:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
            color: white;
        }
        .btn-outline-primary {
            border-color: var(--primary-color);
            color: var(--primary-color);
        }
        .btn-outline-primary:hover {
            background: var(--primary-color);
            color: white;
        }
        .category-filter {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        .category-btn {
            padding: 10px 20px;
            border: 2px solid #e5e7eb;
            border-radius: 25px;
            background: white;
            color: #6b7280;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        .category-btn:hover,
        .category-btn.active {
            background: var(--primary-color);
            border-color: var(--primary-color);
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-shop me-2"></i>E-Shop
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="bi bi-house me-1"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/products"><i class="bi bi-box me-1"></i> Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/special-products"><i class="bi bi-star me-1"></i> Special</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="bi bi-person me-1"></i> Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <div class="page-header">
        <div class="container text-center">
            <h1><i class="bi bi-box-seam me-3"></i>Our Products</h1>
            <p>Discover our amazing collection of products</p>
        </div>
    </div>

    <!-- Products Section -->
    <div class="container py-5">
        <!-- Category Filter -->
        <div class="category-filter justify-content-center">
            <button class="category-btn active">All</button>
            <button class="category-btn">Electronics</button>
            <button class="category-btn">Clothing</button>
            <button class="category-btn">Accessories</button>
            <button class="category-btn">Home & Garden</button>
        </div>

        <!-- Products Grid -->
        <div class="row g-4">
            <!-- Product 1 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge sale">Sale</span>
                        <i class="bi bi-laptop"></i>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Electronics</div>
                        <h5 class="product-title">Premium Laptop</h5>
                        <p class="product-description">High-performance laptop with stunning display and powerful processor.</p>
                        <div class="product-price">
                            <span class="current-price">$999</span>
                            <span class="original-price">$1299</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span>(4.5)</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 2 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge new">New</span>
                        <i class="bi bi-smartwatch"></i>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Electronics</div>
                        <h5 class="product-title">Smart Watch Pro</h5>
                        <p class="product-description">Advanced smartwatch with health monitoring and GPS tracking.</p>
                        <div class="product-price">
                            <span class="current-price">$299</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>(5.0)</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 3 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-image">
                        <i class="bi bi-phone"></i>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Electronics</div>
                        <h5 class="product-title">Latest Smartphone</h5>
                        <p class="product-description">Cutting-edge smartphone with amazing camera and battery life.</p>
                        <div class="product-price">
                            <span class="current-price">$799</span>
                            <span class="original-price">$899</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span>(4.0)</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 4 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-image">
                        <i class="bi bi-headphones"></i>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Accessories</div>
                        <h5 class="product-title">Wireless Headphones</h5>
                        <p class="product-description">Premium noise-cancelling headphones with crystal clear audio.</p>
                        <div class="product-price">
                            <span class="current-price">$199</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                            <span>(4.5)</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 5 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-image">
                        <span class="product-badge sale">Sale</span>
                        <i class="bi bi-camera"></i>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Electronics</div>
                        <h5 class="product-title">Digital Camera</h5>
                        <p class="product-description">Professional camera with high-resolution sensor and 4K video.</p>
                        <div class="product-price">
                            <span class="current-price">$649</span>
                            <span class="original-price">$799</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star"></i>
                            <span>(4.0)</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>

            <!-- Product 6 -->
            <div class="col-md-6 col-lg-4">
                <div class="product-card">
                    <div class="product-image">
                        <i class="bi bi-controller"></i>
                    </div>
                    <div class="product-body">
                        <div class="product-category">Electronics</div>
                        <h5 class="product-title">Gaming Console</h5>
                        <p class="product-description">Next-gen gaming console with immersive graphics and speed.</p>
                        <div class="product-price">
                            <span class="current-price">$499</span>
                        </div>
                        <div class="product-rating">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <span>(5.0)</span>
                        </div>
                        <button class="btn btn-add-cart">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
