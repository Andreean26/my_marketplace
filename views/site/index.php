<?php

/** @var yii\web\View $this */

$this->title = 'BlueMarket - Premium Marketplace';
?>

<div class="site-index">
    <!-- Enhanced Hero Section -->
    <div class="marketplace-hero">
        <!-- Floating Background Elements -->
        <div class="floating-elements">
            <i class="floating-icon fas fa-shopping-bag"></i>
            <i class="floating-icon fas fa-star"></i>
            <i class="floating-icon fas fa-heart"></i>
            <i class="floating-icon fas fa-gift"></i>
            <i class="floating-icon fas fa-tags"></i>
            <i class="floating-icon fas fa-crown"></i>
        </div>
        
        <div class="container">
            <div class="hero-content">
                <h1 class="hero-title text-reveal">Selamat Datang di BlueMarket</h1>
                <p class="hero-subtitle">Marketplace premium dengan ribuan produk berkualitas tinggi dari penjual terpercaya di seluruh Indonesia. Temukan pengalaman berbelanja yang tak terlupakan!</p>
                
                <div class="search-box hero-glow">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Cari produk, kategori, atau brand favorit Anda..." autocomplete="off">
                        <button class="btn btn-primary-custom pulse-animation" type="button">
                            <i class="fas fa-search"></i> Cari Sekarang
                        </button>
                    </div>
                </div>
                
                <!-- Hero Feature Badges -->
                <div class="hero-features">
                    <div class="feature-badge" data-tooltip="Pengiriman gratis untuk pembelian di atas Rp 100.000">
                        <i class="fas fa-shipping-fast"></i>
                        <span>Gratis Ongkir</span>
                    </div>
                    <div class="feature-badge" data-tooltip="Jaminan uang kembali 100% jika tidak puas">
                        <i class="fas fa-shield-alt"></i>
                        <span>Jaminan Aman</span>
                    </div>
                    <div class="feature-badge" data-tooltip="Customer service siap membantu kapan saja">
                        <i class="fas fa-clock"></i>
                        <span>24/7 Support</span>
                    </div>
                    <div class="feature-badge" data-tooltip="Produk berkualitas dari penjual terpercaya">
                        <i class="fas fa-medal"></i>
                        <span>Produk Terbaik</span>
                    </div>
                </div>
                
                <!-- Quick Action Buttons -->
                <div class="hero-actions mt-4">
                    <a href="#categories" class="btn btn-outline-light btn-lg me-3">
                        <i class="fas fa-th-large me-2"></i>Jelajahi Kategori
                    </a>
                    <a href="#featured" class="btn btn-light btn-lg">
                        <i class="fas fa-fire me-2"></i>Produk Trending
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Scroll Indicator -->
        <div class="scroll-indicator">
            <i class="fas fa-chevron-down"></i>
        </div>
    </div>

    <!-- Categories Section -->
    <div id="categories" class="container my-5 py-5">
        <h2 class="section-title text-center">Kategori Populer</h2>
        <div class="row g-4">
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #1e3c72;">Elektronik</h4>
                    <p class="text-muted">Smartphone, laptop, gadget terbaru dengan teknologi canggih</p>
                    <a href="#" class="btn btn-primary-custom btn-sm">Lihat Produk</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-tshirt"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #1e3c72;">Fashion</h4>
                    <p class="text-muted">Pakaian trendy, sepatu, dan aksesoris fashion terkini</p>
                    <a href="#" class="btn btn-primary-custom btn-sm">Lihat Produk</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #1e3c72;">Rumah Tangga</h4>
                    <p class="text-muted">Furniture, dekorasi, dan perlengkapan rumah modern</p>
                    <a href="#" class="btn btn-primary-custom btn-sm">Lihat Produk</a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-gamepad"></i>
                    </div>
                    <h4 class="fw-bold mb-3" style="color: #1e3c72;">Gaming</h4>
                    <p class="text-muted">Console, game, dan aksesoris gaming terlengkap</p>
                    <a href="#" class="btn btn-primary-custom btn-sm">Lihat Produk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured Products Section -->
    <div id="featured" class="featured-section">
        <div class="container">
            <h2 class="section-title text-center">Produk Unggulan</h2>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="product-info">
                            <h5 class="fw-bold mb-2">Smartphone Premium</h5>
                            <p class="text-muted small mb-3">Smartphone flagship dengan kamera canggih dan performa tinggi</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 8.999.000</span>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-headphones"></i>
                        </div>
                        <div class="product-info">
                            <h5 class="fw-bold mb-2">Wireless Headphones</h5>
                            <p class="text-muted small mb-3">Headphone nirkabel dengan noise cancelling premium</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 2.499.000</span>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-watch"></i>
                        </div>
                        <div class="product-info">
                            <h5 class="fw-bold mb-2">Smartwatch Elite</h5>
                            <p class="text-muted small mb-3">Jam tangan pintar dengan fitur kesehatan lengkap</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 3.299.000</span>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="product-card">
                        <div class="product-image">
                            <i class="fas fa-camera"></i>
                        </div>
                        <div class="product-info">
                            <h5 class="fw-bold mb-2">Digital Camera Pro</h5>
                            <p class="text-muted small mb-3">Kamera digital profesional untuk fotografer</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="product-price">Rp 15.999.000</span>
                                <div class="text-warning">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="far fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="stats-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">10K+</span>
                        <span class="stat-label">Produk Tersedia</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">5K+</span>
                        <span class="stat-label">Penjual Terpercaya</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">50K+</span>
                        <span class="stat-label">Pelanggan Puas</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="stat-item">
                        <span class="stat-number">99%</span>
                        <span class="stat-label">Kepuasan Pelanggan</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call to Action -->
    <div class="container text-center py-5 my-5">
        <h2 class="fw-bold mb-4" style="color: #1e3c72;">Siap Berbelanja?</h2>
        <p class="lead mb-4 text-muted">Bergabunglah dengan ribuan pelanggan yang telah merasakan pengalaman berbelanja terbaik</p>
        <a href="#" class="btn btn-primary-custom btn-lg me-3">Mulai Belanja</a>
        <a href="#" class="btn btn-outline-primary btn-lg">Daftar Sebagai Penjual</a>
    </div>
</div>
