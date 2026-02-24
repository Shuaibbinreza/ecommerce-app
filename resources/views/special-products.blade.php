<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Special Products - E-Commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
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
            background: rgba(31, 41, 55, 0.95);
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
            background: linear-gradient(145deg, #2d3748 0%, #1a202c 100%);
            border: 1px solid rgba(245, 158, 11, 0.2);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s ease;
            height: 100%;
        }
        .special-card:hover {
            transform: translateY(-10px);
            border-color: #f59e0b;
            box-shadow: 0 20px 40px rgba(245, 158, 11, 0.2);
        }
        .special-image {
            position: relative;
            padding-top: 60%;
            background: linear-gradient(135deg, #374151 0%, #4b5563 100%);
        }
        .special-image i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 5rem;
            color: #f59e0b;
            opacity: 0.8;
        }
        .exclusive-tag {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: white;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        .limited-tag {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #ef4444;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 600;
            animation: pulse 2s infinite;
        }
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        .special-body {
            padding: 25px;
        }
        .special-category {
            color: #f59e0b;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }
        .special-title {
            color: white;
            font-size: 1.25rem;
            font-weight: 700;
            margin-bottom: 12px;
        }
        .special-description {
            color: #9ca3af;
            font-size: 0.9rem;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        .special-features {
            margin-bottom: 20px;
        }
        .feature-item {
            display: flex;
            align-items: center;
            gap: 10px;
            color: #d1d5db;
            font-size: 0.85rem;
            margin-bottom: 8px;
        }
        .feature-item i {
            color: #f59e0b;
            font-size: 0.8rem;
        }
        .special-price {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .price-wrapper {
            display: flex;
            align-items: baseline;
            gap: 12px;
        }
        .current-price {
            font-size: 1.75rem;
            font-weight: 700;
            color: #f59e0b;
        }
        .original-price {
            font-size: 1rem;
            color: #6b7280;
            text-decoration: line-through;
        }
        .discount-badge {
            background: #10b981;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        .btn-premium {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            border: none;
            border-radius: 12px;
            padding: 14px 24px;
            font-weight: 600;
            color: white;
            width: 100%;
            transition: all 0.3s ease;
        }
        .btn-premium:hover {
            transform: scale(1.02);
            box-shadow: 0 10px 25px rgba(245, 158, 11, 0.4);
            color: white;
        }
        .stock-info {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        .stock-info i {
            color: #ef4444;
        }
        .stock-info span {
            color: #9ca3af;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="bi bi-gem me-2"></i>Premium Shop
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
                        <div class="user-info">
                            <i class="bi bi-person-circle"></i>
                            <span>{{ $user->email ?? 'Member' }}</span>
                        </div>
                    </li>
                    <li class="nav-item ms-3">
                        <a class="nav-link btn btn-sm btn-outline-warning" href="/logout">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Premium Banner -->
    <div class="premium-banner">
        <div class="container text-center position-relative">
            <div class="premium-badge">
                <i class="bi bi-gem-fill"></i>
                <span>Exclusive Members Only</span>
            </div>
            <h1><i class="bi bi-star-fill me-3"></i>Special Products</h1>
            <p>Access premium, limited-edition products available only to our valued members</p>
        </div>
    </div>

    <!-- Special Products Section -->
    <div class="products-section">
        <div class="container">
            <h2 class="section-title">
                <i class="bi bi-gem"></i>
                Premium Collection
            </h2>

            <div class="row g-4">
                <!-- Special Product 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="limited-tag"><i class="bi bi-fire me-1"></i>Limited</span>
                            <span class="exclusive-tag">Exclusive</span>
                            <i class="bi bi-gem"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Luxury Edition</div>
                            <h5 class="special-title">Diamond Smart Watch</h5>
                            <p class="special-description">Exclusive smartwatch with real diamond accents and premium materials.</p>
                            
                            <div class="special-features">
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>18K Gold & Diamond Case</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Custom Leather Strap</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Lifetime Warranty</span>
                                </div>
                            </div>
                            
                            <div class="special-price">
                                <div class="price-wrapper">
                                    <span class="current-price">$4,999</span>
                                    <span class="original-price">$7,499</span>
                                </div>
                                <span class="discount-badge">33% OFF</span>
                            </div>
                            
                            <button class="btn btn-premium">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            
                            <div class="stock-info">
                                <i class="bi bi-exclamation-triangle"></i>
                                <span>Only 5 units remaining</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special Product 2 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-tag">Exclusive</span>
                            <i class="bi bi-laptop"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Professional</div>
                            <h5 class="special-title">Titanium Laptop</h5>
                            <p class="special-description">Ultra-premium laptop crafted from aerospace-grade titanium.</p>
                            
                            <div class="special-features">
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Titanium Unibody Design</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>64GB RAM / 4TB SSD</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>5-Year Premium Support</span>
                                </div>
                            </div>
                            
                            <div class="special-price">
                                <div class="price-wrapper">
                                    <span class="current-price">$3,499</span>
                                    <span class="original-price">$4,299</span>
                                </div>
                                <span class="discount-badge">19% OFF</span>
                            </div>
                            
                            <button class="btn btn-premium">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            
                            <div class="stock-info">
                                <i class="bi bi-check-circle"></i>
                                <span>In stock - Ready to ship</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special Product 3 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="limited-tag"><i class="bi bi-fire me-1"></i>Limited</span>
                            <span class="exclusive-tag">Exclusive</span>
                            <i class="bi bi-headphones"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Audio Elite</div>
                            <h5 class="special-title">Studio Pro Headphones</h5>
                            <p class="special-description">Hand-crafted premium headphones with platinum drivers.</p>
                            
                            <div class="special-features">
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Hand-Assembled in Japan</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Platinum Diaphragm Drivers</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Personalized Ear Impressions</span>
                                </div>
                            </div>
                            
                            <div class="special-price">
                                <div class="price-wrapper">
                                    <span class="current-price">$1,999</span>
                                    <span class="original-price">$2,799</span>
                                </div>
                                <span class="discount-badge">29% OFF</span>
                            </div>
                            
                            <button class="btn btn-premium">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            
                            <div class="stock-info">
                                <i class="bi bi-exclamation-triangle"></i>
                                <span>Only 3 units remaining</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special Product 4 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-tag">Exclusive</span>
                            <i class="bi bi-camera"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Photography</div>
                            <h5 class="special-title">Pro Camera System</h5>
                            <p class="special-description">Full-frame camera system with exclusive lens kit.</p>
                            
                            <div class="special-features">
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>100MP Full-Frame Sensor</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Premium Lens Kit Included</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Priority Repair Service</span>
                                </div>
                            </div>
                            
                            <div class="special-price">
                                <div class="price-wrapper">
                                    <span class="current-price">$5,999</span>
                                    <span class="original-price">$7,499</span>
                                </div>
                                <span class="discount-badge">20% OFF</span>
                            </div>
                            
                            <button class="btn btn-premium">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            
                            <div class="stock-info">
                                <i class="bi bi-check-circle"></i>
                                <span>In stock - Ready to ship</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special Product 5 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="exclusive-tag">Exclusive</span>
                            <i class="bi bi-controller"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Gaming</div>
                            <h5 class="special-title">Elite Gaming Setup</h5>
                            <p class="special-description">Complete gaming setup with custom LED and premium peripherals.</p>
                            
                            <div class="special-features">
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Custom RGB Lighting</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>4K 240Hz Gaming Monitor</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>VIP Gaming Support</span>
                                </div>
                            </div>
                            
                            <div class="special-price">
                                <div class="price-wrapper">
                                    <span class="current-price">$2,999</span>
                                    <span class="original-price">$3,799</span>
                                </div>
                                <span class="discount-badge">21% OFF</span>
                            </div>
                            
                            <button class="btn btn-premium">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            
                            <div class="stock-info">
                                <i class="bi bi-check-circle"></i>
                                <span>In stock - Ready to ship</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Special Product 6 -->
                <div class="col-md-6 col-lg-4">
                    <div class="special-card">
                        <div class="special-image">
                            <span class="limited-tag"><i class="bi bi-fire me-1"></i>Limited</span>
                            <span class="exclusive-tag">Exclusive</span>
                            <i class="bi bi-phone"></i>
                        </div>
                        <div class="special-body">
                            <div class="special-category">Communication</div>
                            <h5 class="special-title">Signature Smartphone</h5>
                            <p class="special-description">Bespoke smartphone with personalized engraving and premium materials.</p>
                            
                            <div class="special-features">
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Custom Gold/Carbon Body</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>1TB Storage / 16GB RAM</span>
                                </div>
                                <div class="feature-item">
                                    <i class="bi bi-check-circle-fill"></i>
                                    <span>Concierge Support</span>
                                </div>
                            </div>
                            
                            <div class="special-price">
                                <div class="price-wrapper">
                                    <span class="current-price">$2,499</span>
                                    <span class="original-price">$3,199</span>
                                </div>
                                <span class="discount-badge">22% OFF</span>
                            </div>
                            
                            <button class="btn btn-premium">
                                <i class="bi bi-cart-plus me-2"></i>Add to Cart
                            </button>
                            
                            <div class="stock-info">
                                <i class="bi bi-exclamation-triangle"></i>
                                <span>Only 8 units remaining</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
