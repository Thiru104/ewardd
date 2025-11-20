<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EWARDD – E-Waste Recycling | IT Scrap Buyers | Free Pickup India</title>
    <meta name="description" content="EWARDD provides certified e-waste recycling, IT scrap disposal, corporate ITAD, and data destruction services. Free doorstep pickup. Best scrap price in India.">
    <meta name="keywords" content="e-waste recycling, electronic waste disposal, e-waste company India, scrap buyers, IT asset disposal, data destruction, e-waste pickup near me">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-slider">
            <div class="hero-slide active">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">India's Trusted E-Waste Recycling Company</h1>
                        <p class="hero-subtitle">Doorstep Pickup • Highest Scrap Value • CPCB-Certified Recycling</p>
                        <div class="hero-buttons">
                            <a href="contact.php" class="btn btn-primary">Book Free Pickup</a>
                            <a href="price-calculator.php" class="btn btn-secondary">Get Best Scrap Price</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">Secure IT Scrap Disposal for Corporates</h1>
                        <p class="hero-subtitle">Data Destruction | ITAD | Asset Reporting | Recycling Certificate</p>
                        <div class="hero-buttons">
                            <a href="contact.php" class="btn btn-primary">Request Corporate Quote</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="hero-content">
                        <h1 class="hero-title">Sell Your Old Laptop, Mobile, and Appliances</h1>
                        <p class="hero-subtitle">Instant Pickup • Same-Day Payment • Transparent Weighing</p>
                        <div class="hero-buttons">
                            <a href="price-calculator.php" class="btn btn-primary">Check Prices Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="hero-nav prev" onclick="changeSlide(-1)"><i class="fas fa-chevron-left"></i></button>
        <button class="hero-nav next" onclick="changeSlide(1)"><i class="fas fa-chevron-right"></i></button>
        <div class="hero-indicators">
            <span class="hero-indicator active" onclick="goToSlide(0)"></span>
            <span class="hero-indicator" onclick="goToSlide(1)"></span>
            <span class="hero-indicator" onclick="goToSlide(2)"></span>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-preview">
        <div class="container">
            <div class="section-header">
                <h2>About EWARDD</h2>
                <p>India's Leading E-Waste Recycling & IT Scrap Disposal Company</p>
            </div>
            <div class="about-content">
                <p>EWARDD is India's leading e-waste recycling, IT scrap disposal, and electronic waste management company, offering secure, certified, and environmentally responsible recycling services for households, corporates, industries, SMEs, schools, hospitals, and government institutions. With a mission to make India cleaner and more sustainable, we adhere to strict recycling standards, ensuring that every electronic item is collected, processed, and recycled safely.</p>
                <p>We specialize in doorstep e-waste pickup, safe dismantling, refurbishment, IT asset disposal (ITAD), data destruction, battery recycling, home appliance disposal, office IT scrap buyback, and EPR support for brands and manufacturers.</p>
                <a href="about.php" class="btn btn-outline">Learn More About Us</a>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="why-choose">
        <div class="container">
            <div class="section-header">
                <h2>Why Choose EWARDD?</h2>
            </div>
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <h3>Free Doorstep Pickup</h3>
                    <p>Convenient collection from your location across major cities</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-rupee-sign"></i>
                    </div>
                    <h3>Best Scrap Value</h3>
                    <p>Highest market price with transparent weighing</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h3>CPCB-Certified Recycling</h3>
                    <p>Environmentally safe and compliant processes</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <h3>Data Destruction</h3>
                    <p>100% secure data wiping and physical destruction</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Complete E-Waste Management Solutions</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-recycle"></i>
                    </div>
                    <h3>E-Waste Recycling</h3>
                    <p>Safe disposal of all electronic waste with zero landfill</p>
                    <a href="service-ewaste-recycling.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h3>IT Scrap Buyback</h3>
                    <p>Highest value for old computers, laptops, and IT equipment</p>
                    <a href="service-it-scrap-buyback.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3>Corporate E-Waste</h3>
                    <p>Tailored solutions for enterprises and industries</p>
                    <a href="service-corporate-ewaste.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-lock"></i>
                    </div>
                    <h3>Data Destruction</h3>
                    <p>On-site & off-site secure data wiping services</p>
                    <a href="service-data-destruction.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-battery-half"></i>
                    </div>
                    <h3>Battery Recycling</h3>
                    <p>Safe disposal of laptop, UPS, and EV batteries</p>
                    <a href="service-battery-recycling.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-home"></i>
                    </div>
                    <h3>Home Pickup</h3>
                    <p>Doorstep collection of household electronics</p>
                    <a href="service-home-pickup.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-server"></i>
                    </div>
                    <h3>IT Asset Disposal</h3>
                    <p>Complete ITAD with asset tracking and reporting</p>
                    <a href="service-itad.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>EPR Compliance</h3>
                    <p>Documentation and support for manufacturers</p>
                    <a href="service-epr-compliance.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-tools"></i>
                    </div>
                    <h3>Refurbishing</h3>
                    <p>Revive and resell functional electronics</p>
                    <a href="services.php" class="service-link">Learn More <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <div class="section-header">
                <h2>How It Works</h2>
                <p>Simple 3-Step Process</p>
            </div>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-list"></i>
                    </div>
                    <h3>Share List/Photos</h3>
                    <p>Send us your e-waste list or photos via WhatsApp, phone, or website form</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-truck-pickup"></i>
                    </div>
                    <h3>We Pick Up & Weigh</h3>
                    <p>Our team visits your location, weighs items transparently using calibrated scales</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Instant Payment + Certificate</h3>
                    <p>Get immediate payment via UPI/NEFT and receive recycling certificate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Price Calculator -->
    <section class="price-calculator" id="price-calculator">
        <div class="container">
            <div class="section-header">
                <h2>Scrap Price Calculator</h2>
                <p>Get instant estimate for your e-waste</p>
            </div>
            <div style="text-align: center; margin-bottom: 40px;">
                <a href="price-calculator.php" class="btn btn-primary btn-large">
                    <i class="fas fa-calculator"></i> Open Advanced Calculator
                </a>
            </div>
            <div class="calculator-container" style="display: none;">
                <div class="calculator-left">
                    <h3>Select Items</h3>
                    <div class="item-selector">
                        <div class="item-category" data-category="laptops">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-laptop"></i>
                                <span>Laptops & Computers</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="800" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Laptop (Working)</span>
                                        <span class="item-price">₹500-1500/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="400" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Laptop (Non-Working)</span>
                                        <span class="item-price">₹200-600/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="300" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Desktop CPU</span>
                                        <span class="item-price">₹200-500/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="150" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Monitor (LCD/LED)</span>
                                        <span class="item-price">₹100-300/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-category" data-category="servers">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-server"></i>
                                <span>Servers & Networking</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="5000" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Server</span>
                                        <span class="item-price">₹3000-8000/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="500" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">UPS</span>
                                        <span class="item-price">₹300-800/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-category" data-category="mobile">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-mobile-alt"></i>
                                <span>Mobile & Tablets</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="200" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Smartphone</span>
                                        <span class="item-price">₹100-500/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="300" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Tablet</span>
                                        <span class="item-price">₹150-600/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="item-category" data-category="appliances">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-tv"></i>
                                <span>Home Appliances</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="800" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Television</span>
                                        <span class="item-price">₹500-1500/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="1200" data-unit="piece">
                                    <div class="item-info">
                                        <span class="item-name">Refrigerator</span>
                                        <span class="item-price">₹800-2000/piece</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="calculator-right">
                    <div class="estimate-box">
                        <h3>Price Estimate</h3>
                        <div class="selected-items" id="selectedItems">
                            <p class="empty-message">Select items to see estimate</p>
                        </div>
                        <div class="estimate-total">
                            <span>Estimated Value:</span>
                            <span class="total-amount">₹0</span>
                        </div>
                        <div class="calculator-note">
                            <i class="fas fa-info-circle"></i>
                            <p>Final price depends on condition, brand, and market rates. This is an approximate estimate.</p>
                        </div>
                        <button type="button" class="btn btn-primary btn-block" onclick="requestQuote()">Request Accurate Quote</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Image Gallery Section -->
    <section class="parallax-section">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="parallax-content">
                <h2>We Make E-Waste Recycling Simple</h2>
                <p>Join thousands of satisfied customers who trust EWARDD for responsible recycling</p>
                <a href="contact.php" class="btn btn-primary btn-large">Get Started Today</a>
            </div>
        </div>
    </section>

    <!-- Process Visualization -->
    <section class="process-visualization-section">
        <div class="container">
            <div class="section-header">
                <h2>Our Recycling Facility</h2>
                <p>State-of-the-art equipment and eco-friendly processes</p>
            </div>
            <div class="floating-images">
                <div class="floating-image-card">
                    <img src="https://images.unsplash.com/photo-1621905251918-48116d7a068f?w=600&h=380&fit=crop&auto=format" alt="Modern Facility" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                    <div class="floating-image-icon">
                        <i class="fas fa-industry"></i>
                    </div>
                    <div class="floating-image-content">
                        <h3>Modern Facility</h3>
                        <p>CPCB-certified recycling plant with advanced technology</p>
                    </div>
                </div>
                <div class="floating-image-card">
                    <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?w=600&h=380&fit=crop&auto=format" alt="Safe Dismantling" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                    <div class="floating-image-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="floating-image-content">
                        <h3>Safe Dismantling</h3>
                        <p>Professional equipment for secure e-waste processing</p>
                    </div>
                </div>
                <div class="floating-image-card">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=380&fit=crop&auto=format" alt="Zero Landfill" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                    <div class="floating-image-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="floating-image-content">
                        <h3>Zero Landfill</h3>
                        <p>100% eco-friendly material recovery and recycling</p>
                    </div>
                </div>
                <div class="floating-image-card">
                    <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=600&h=380&fit=crop&auto=format" alt="Data Security" loading="lazy" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; z-index: 0;">
                    <div class="floating-image-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="floating-image-content">
                        <h3>Data Security</h3>
                        <p>Military-grade data destruction with certificates</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="section-header" style="margin-bottom: 60px;">
                <h2>Our Impact in Numbers</h2>
                <p>Making a difference through responsible recycling</p>
            </div>
            <div class="stats-grid">
                <div class="stat-item">
                    <span class="stat-number counter" data-target="5000">0</span>
                    <span class="stat-label">Tons Recycled</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number counter" data-target="10000">0</span>
                    <span class="stat-label">Happy Customers</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number counter" data-target="500">0</span>
                    <span class="stat-label">Corporate Clients</span>
                </div>
                <div class="stat-item">
                    <span class="stat-number counter" data-target="99">0</span>
                    <span class="stat-label">% Satisfaction</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate Clients -->
    <section class="corporate-clients">
        <div class="container">
            <div class="section-header">
                <h2>Trusted by Enterprises Across India</h2>
            </div>
            <div class="icon-grid">
                <div class="icon-box-item">
                    <div class="icon-box-image">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Tech Parks</h4>
                    <p style="color: var(--gray); font-size: 14px; margin-top: 10px;">50+ IT parks served</p>
                </div>
                <div class="icon-box-item">
                    <div class="icon-box-image">
                        <i class="fas fa-globe"></i>
                    </div>
                    <h4>MNCs</h4>
                    <p style="color: var(--gray); font-size: 14px; margin-top: 10px;">100+ enterprises</p>
                </div>
                <div class="icon-box-item">
                    <div class="icon-box-image">
                        <i class="fas fa-school"></i>
                    </div>
                    <h4>Schools</h4>
                    <p style="color: var(--gray); font-size: 14px; margin-top: 10px;">200+ institutions</p>
                </div>
                <div class="icon-box-item">
                    <div class="icon-box-image">
                        <i class="fas fa-hospital"></i>
                    </div>
                    <h4>Hospitals</h4>
                    <p style="color: var(--gray); font-size: 14px; margin-top: 10px;">150+ facilities</p>
                </div>
                <div class="icon-box-item">
                    <div class="icon-box-image">
                        <i class="fas fa-landmark"></i>
                    </div>
                    <h4>Government</h4>
                    <p style="color: var(--gray); font-size: 14px; margin-top: 10px;">75+ departments</p>
                </div>
                <div class="icon-box-item">
                    <div class="icon-box-image">
                        <i class="fas fa-store"></i>
                    </div>
                    <h4>SMEs</h4>
                    <p style="color: var(--gray); font-size: 14px; margin-top: 10px;">500+ businesses</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="container">
            <div class="section-header">
                <h2>What Our Clients Say</h2>
            </div>
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"EWARDD provided excellent service for our office IT asset disposal. Professional team, transparent pricing, and complete documentation. Highly recommended!"</p>
                    <div class="testimonial-author">
                        <h4>Rajesh Kumar</h4>
                        <span>IT Manager, Tech Corp</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"Quick pickup, best price in the market, and hassle-free process. Disposed of old laptops and got instant payment. Great experience!"</p>
                    <div class="testimonial-author">
                        <h4>Priya Sharma</h4>
                        <span>Homemaker, Bangalore</span>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>"We needed secure data destruction for our servers. EWARDD delivered on-site destruction with video proof and certificates. Excellent service!"</p>
                    <div class="testimonial-author">
                        <h4>Anil Desai</h4>
                        <span>CTO, Finance Solutions</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <section class="cta-section">
        <div class="container">
            <h2>Ready to Recycle Your E-Waste?</h2>
            <p>Book your free pickup today and get the best value for your old electronics</p>
            <a href="contact.php" class="btn btn-primary btn-large">Contact Us Now</a>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
</body>
</html>

