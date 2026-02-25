@extends('layouts.app')

@section('title', 'Products - E-Commerce')

@section('content')
    <!-- Page Header -->
    <div class="page-header">
        <div class="container text-center">
            <h1><i class="bi bi-box-seam me-3"></i>Our Products</h1>
            <p>Discover our amazing collection of products</p>
        </div>
    </div>

    <!-- Login Alert Bar -->
    @auth
    @else
    <div class="container py-3">
        <div class="alert alert-info d-flex align-items-center justify-content-between login-alert" role="alert">
            <div class="d-flex align-items-center">
                <i class="bi bi-info-circle-fill me-2 text-primary fs-5"></i>
                <span class="fw-semibold" style="color: #1e293b;">Login to see the exclusive products</span>
            </div>
            <a href="{{ route('login') }}" class="btn btn-sm">
                <i class="bi bi-box-arrow-in-right me-1"></i> Login
            </a>
        </div>
    </div>
    @endauth

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
@endsection
