@extends('layouts.app')

@section('title', 'Special Products - E-Commerce')

@section('extra_styles')
    <style>
        :root {
            --primary-color: #f59e0b;
            --secondary-color: #d97706;
            --dark-bg: #1f2937;
        }
        body {
            background: var(--dark-bg);
            min-height: 100vh;
        }
        .navbar {
            background: rgba(31, 41, 55, 0.95) !important;
            backdrop-filter: blur(10px);
            padding: 15px 0;
            border-bottom: 1px solid rgba(245, 158, 11, 0.3);
        }
        .navbar-brand {
            color: #f59e0b !important;
            font-weight: 700;
            font-size: 1.5rem;
        }
        .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            font-weight: 500;
        }
        .nav-link:hover {
            color: #f59e0b !important;
        }
        .premium-banner {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            padding: 60px 0;
            position: relative;
            overflow: hidden;
        }
        .premium-banner::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
        }
        .premium-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.2);
            padding: 8px 20px;
            border-radius: 30px;
            color: white;
            font-weight: 600;
            margin-bottom: 20px;
        }
        .premium-banner h1 {
            color: white;
            font-weight: 700;
            margin-bottom: 15px;
            position: relative;
        }
        .premium-banner p {
            color: rgba(255, 255, 255, 0.9);
            font-size: 1.2rem;
            position: relative;
        }
        .user-info {
            display: flex;
            align-items: center;
            gap: 10px;
            color: white;
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 30px;
        }
        .user-info i {
            color: #f59e0b;
        }
        .products-section {
            padding: 60px 0;
        }
        .section-title {
            color: white;
            font-weight: 700;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            gap: 15px;
        }
        .section-title i {
            color: #f59e0b;
        }
        .special-card {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(245, 158, 11, 0.2);
            border-radius: 16px;
            overflow: hidden;
            height: 100%;
            transition: all 0.3s ease;
        }
        .special-card:hover {
            transform: translateY(-8px);
            border-color: rgba(245, 158, 11, 0.5);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
        }
        .special-image {
            position: relative;
            padding-top: 75%;
            background: linear-gradient(135deg, #374151 0%, #1f2937 100%);
            overflow: hidden;
        }
        .special-image i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            color: #f59e0b;
        }
        .exclusive-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
        }
        .special-body {
            padding: 20px;
        }
        .special-category {
            color: #f59e0b;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
        }
        .special-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: white;
            margin-bottom: 10px;
        }
        .special-description {
            color: #9ca3af;
            font-size: 0.875rem;
            margin-bottom: 15px;
            line-height: 1.5;
        }
        .special-price {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 15px;
        }
        .special-current-price {
            font-size: 1.25rem;
            font-weight: 700;
            color: #f59e0b;
        }
        .special-original-price {
            font-size: 0.875rem;
            color: #6b7280;
            text-decoration: line-through;
        }
        .btn-special {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            border: none;
            border-radius: 10px;
            padding: 12px 20px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }
        .btn-special:hover {
            transform: scale(1.02);
            box-shadow: 0 5px 15px rgba(245, 158, 11, 0.4);
            color: white;
        }
        footer {
            background: #111827 !important;
        }
    </style>
@endsection

@section('content')
    <!-- Premium Banner -->
    <div class="premium-banner">
        <div class="container text-center position-relative">
            <span class="premium-badge">
                <i class="bi bi-star-fill"></i>
                Premium Collection
            </span>
            <h1><i class="bi bi-gem me-3"></i>Exclusive Special Products</h1>
            <p>Discover our premium collection available only for logged-in users</p>
            @if(isset($user))
            <div class="user-info d-inline-flex mt-3">
                <i class="bi bi-person-circle"></i>
                <span>Welcome, {{ $user->email }}</span>
            </div>
            @endif
        </div>
    </div>

    <!-- Special Products Section -->
    <div class="products-section">
        <div class="container">
            <h2 class="section-title">
                <i class="bi bi-collection"></i>
                Featured Products
            </h2>

            <div class="row g-4">
                <!-- Special Product 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-badge">Exclusive</span>
                            <i class="bi bi-gem"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Luxury</div>
                            <h5 class="special-title">Diamond Edition Watch</h5>
                            <p class="special-description">Handcrafted luxury timepiece with genuine diamonds and gold finish.</p>
                            <div class="special-price">
                                <span class="special-current-price">$4,999</span>
                                <span class="special-original-price">$6,999</span>
                            </div>
                            <button class="btn btn-special">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-badge">Exclusive</span>
                            <i class="bi bi-briefcase"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Accessories</div>
                            <h5 class="special-title">Premium Leather Bag</h5>
                            <p class="special-description">Genuine Italian leather business bag with gold hardware.</p>
                            <div class="special-price">
                                <span class="special-current-price">$899</span>
                                <span class="special-original-price">$1,299</span>
                            </div>
                            <button class="btn btn-special">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-badge">Exclusive</span>
                            <i class="bi bi-watch"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Electronics</div>
                            <h5 class="special-title">Smart Watch Elite</h5>
                            <p class="special-description">Limited edition smartwatch with titanium case and sapphire glass.</p>
                            <div class="special-price">
                                <span class="special-current-price">$1,299</span>
                            </div>
                            <button class="btn btn-special">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-badge">Exclusive</span>
                            <i class="bi bi-speaker"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Audio</div>
                            <h5 class="special-title">Studio Pro Headphones</h5>
                            <p class="special-description">Professional studio headphones with noise cancellation.</p>
                            <div class="special-price">
                                <span class="special-current-price">$699</span>
                                <span class="special-original-price">$899</span>
                            </div>
                            <button class="btn btn-special">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-badge">Exclusive</span>
                            <i class="bi bi-camera2"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Photography</div>
                            <h5 class="special-title">Professional Camera Kit</h5>
                            <p class="special-description">Full-frame mirrorless camera with premium lens kit.</p>
                            <div class="special-price">
                                <span class="special-current-price">$3,499</span>
                                <span class="special-original-price">$4,299</span>
                            </div>
                            <button class="btn btn-special">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Special Product 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-badge">Exclusive</span>
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Electronics</div>
                            <h5 class="special-title">Business Elite Laptop</h5>
                            <p class="special-description">High-performance laptop with carbon fiber body.</p>
                            <div class="special-price">
                                <span class="special-current-price">$2,499</span>
                                <span class="special-original-price">$3,199</span>
                            </div>
                            <button class="btn btn-special">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
