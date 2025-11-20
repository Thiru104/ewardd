<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scrap Price Calculator – Get Instant E-Waste Value Estimate | EWARDD</title>
    <meta name="description" content="Calculate your e-waste scrap value instantly. Get real-time price estimates for laptops, computers, servers, mobile phones, and all electronic devices.">
    <meta name="keywords" content="scrap price calculator, e-waste value calculator, IT scrap rate calculator, electronic waste price">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <!-- Page Header -->
    <section class="page-header">
        <div class="container">
            <h1>Scrap Price Calculator</h1>
            <p>Get Instant Estimate for Your E-Waste Value</p>
        </div>
    </section>

    <!-- Calculator Section -->
    <section class="price-calculator-page">
        <div class="container">
            <div class="calculator-intro">
                <p>Select your items below to get an instant price estimate. Final prices may vary based on condition, brand, specifications, and current market rates. Our team will provide accurate quotes after physical inspection.</p>
            </div>

            <div class="calculator-container">
                <div class="calculator-left">
                    <div class="calculator-header">
                        <h3><i class="fas fa-calculator"></i> Select Items</h3>
                        <p>Choose items and quantities to calculate estimated value</p>
                    </div>
                    
                    <div class="item-selector">
                        <!-- Laptops & Computers -->
                        <div class="item-category active" data-category="laptops">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-laptop"></i>
                                <span>Laptops & Computers</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="1000" data-unit="piece" data-name="Laptop (Working)">
                                    <div class="item-info">
                                        <span class="item-name">Laptop (Working Condition)</span>
                                        <span class="item-price">₹500 - ₹1,500 per piece</span>
                                        <span class="item-desc">All brands, functional laptops</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="400" data-unit="piece" data-name="Laptop (Non-Working)">
                                    <div class="item-info">
                                        <span class="item-name">Laptop (Non-Working)</span>
                                        <span class="item-price">₹200 - ₹600 per piece</span>
                                        <span class="item-desc">Damaged or non-functional</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="350" data-unit="piece" data-name="Desktop CPU">
                                    <div class="item-info">
                                        <span class="item-name">Desktop CPU</span>
                                        <span class="item-price">₹200 - ₹500 per piece</span>
                                        <span class="item-desc">Complete desktop computer unit</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="200" data-unit="piece" data-name="Monitor (LCD/LED)">
                                    <div class="item-info">
                                        <span class="item-name">Monitor (LCD/LED)</span>
                                        <span class="item-price">₹100 - ₹300 per piece</span>
                                        <span class="item-desc">Flat screen monitors</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="50" data-unit="piece" data-name="Monitor (CRT)">
                                    <div class="item-info">
                                        <span class="item-name">Monitor (CRT - Old)</span>
                                        <span class="item-price">₹30 - ₹80 per piece</span>
                                        <span class="item-desc">Old CRT monitors</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Servers & Networking -->
                        <div class="item-category" data-category="servers">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-server"></i>
                                <span>Servers & Networking</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="5500" data-unit="piece" data-name="Server">
                                    <div class="item-info">
                                        <span class="item-name">Server</span>
                                        <span class="item-price">₹3,000 - ₹8,000 per piece</span>
                                        <span class="item-desc">Enterprise servers, blade servers</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="600" data-unit="piece" data-name="UPS">
                                    <div class="item-info">
                                        <span class="item-name">UPS System</span>
                                        <span class="item-price">₹300 - ₹800 per piece</span>
                                        <span class="item-desc">Uninterruptible power supply</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="200" data-unit="piece" data-name="Router/Switch">
                                    <div class="item-info">
                                        <span class="item-name">Router/Switch</span>
                                        <span class="item-price">₹100 - ₹300 per piece</span>
                                        <span class="item-desc">Network equipment</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mobile & Tablets -->
                        <div class="item-category" data-category="mobile">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-mobile-alt"></i>
                                <span>Mobile & Tablets</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="300" data-unit="piece" data-name="Smartphone">
                                    <div class="item-info">
                                        <span class="item-name">Smartphone</span>
                                        <span class="item-price">₹100 - ₹500 per piece</span>
                                        <span class="item-desc">All brands, working or non-working</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="400" data-unit="piece" data-name="Tablet">
                                    <div class="item-info">
                                        <span class="item-name">Tablet/iPad</span>
                                        <span class="item-price">₹150 - ₹600 per piece</span>
                                        <span class="item-desc">Tablets and iPads</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Office Equipment -->
                        <div class="item-category" data-category="office">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-print"></i>
                                <span>Office Equipment</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="300" data-unit="piece" data-name="Printer">
                                    <div class="item-info">
                                        <span class="item-name">Printer</span>
                                        <span class="item-price">₹150 - ₹500 per piece</span>
                                        <span class="item-desc">Inkjet, laser printers</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="250" data-unit="piece" data-name="Scanner">
                                    <div class="item-info">
                                        <span class="item-name">Scanner/Copier</span>
                                        <span class="item-price">₹100 - ₹400 per piece</span>
                                        <span class="item-desc">Office scanners and copiers</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Home Appliances -->
                        <div class="item-category" data-category="appliances">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-tv"></i>
                                <span>Home Appliances</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="1000" data-unit="piece" data-name="Television">
                                    <div class="item-info">
                                        <span class="item-name">Television (LED/LCD)</span>
                                        <span class="item-price">₹500 - ₹1,500 per piece</span>
                                        <span class="item-desc">Flat screen TVs</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="1500" data-unit="piece" data-name="Refrigerator">
                                    <div class="item-info">
                                        <span class="item-name">Refrigerator</span>
                                        <span class="item-price">₹800 - ₹2,000 per piece</span>
                                        <span class="item-desc">All sizes and types</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="800" data-unit="piece" data-name="Washing Machine">
                                    <div class="item-info">
                                        <span class="item-name">Washing Machine</span>
                                        <span class="item-price">₹400 - ₹1,200 per piece</span>
                                        <span class="item-desc">All types</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="600" data-unit="piece" data-name="AC">
                                    <div class="item-info">
                                        <span class="item-name">Air Conditioner</span>
                                        <span class="item-price">₹300 - ₹1,000 per piece</span>
                                        <span class="item-desc">Split or window AC</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Other Items -->
                        <div class="item-category" data-category="other">
                            <div class="item-header" onclick="toggleCategory(this)">
                                <i class="fas fa-box"></i>
                                <span>Other Items</span>
                                <i class="fas fa-chevron-down toggle-icon"></i>
                            </div>
                            <div class="item-list">
                                <div class="calculator-item" data-price="150" data-unit="kg" data-name="Mixed E-Waste">
                                    <div class="item-info">
                                        <span class="item-name">Mixed E-Waste (per kg)</span>
                                        <span class="item-price">₹100 - ₹200 per kg</span>
                                        <span class="item-desc">Cables, circuit boards, small electronics</span>
                                    </div>
                                    <div class="item-controls">
                                        <button type="button" class="qty-btn" onclick="decrementQty(this)">-</button>
                                        <input type="number" class="qty-input" value="0" min="0" step="0.5" readonly>
                                        <button type="button" class="qty-btn" onclick="incrementQty(this)">+</button>
                                    </div>
                                </div>
                                <div class="calculator-item" data-price="200" data-unit="piece" data-name="Battery">
                                    <div class="item-info">
                                        <span class="item-name">Battery (Laptop/UPS)</span>
                                        <span class="item-price">₹100 - ₹300 per piece</span>
                                        <span class="item-desc">Laptop batteries, UPS batteries</span>
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
                        <h3><i class="fas fa-calculator"></i> Price Estimate</h3>
                        
                        <div class="selected-items" id="selectedItems">
                            <p class="empty-message">
                                <i class="fas fa-info-circle"></i><br>
                                Select items from the left to see your estimated value
                            </p>
                        </div>
                        
                        <div class="estimate-summary">
                            <div class="summary-row">
                                <span>Subtotal:</span>
                                <span class="subtotal-amount">₹0</span>
                            </div>
                            <div class="summary-row discount">
                                <span>Bulk Discount (10+ items):</span>
                                <span class="discount-amount">-₹0</span>
                            </div>
                            <div class="estimate-total">
                                <span>Estimated Value:</span>
                                <span class="total-amount">₹0</span>
                            </div>
                        </div>
                        
                        <div class="calculator-note">
                            <i class="fas fa-info-circle"></i>
                            <p><strong>Note:</strong> This is an approximate estimate. Final price depends on condition, brand, specifications, and current market rates. Our team will provide accurate quotes after physical inspection.</p>
                        </div>
                        
                        <button type="button" class="btn btn-primary btn-block" onclick="requestQuote()" id="requestQuoteBtn" disabled>
                            <i class="fas fa-paper-plane"></i> Request Accurate Quote
                        </button>
                        
                        <div class="calculator-benefits">
                            <h4>Why Get a Quote?</h4>
                            <ul>
                                <li><i class="fas fa-check"></i> Accurate pricing based on actual condition</li>
                                <li><i class="fas fa-check"></i> Best market rates guaranteed</li>
                                <li><i class="fas fa-check"></i> Free doorstep pickup</li>
                                <li><i class="fas fa-check"></i> Instant payment after inspection</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works" style="background: var(--light-gray);">
        <div class="container">
            <div class="section-header">
                <h2>How to Get Your Quote</h2>
                <p>Simple process to get the best price for your e-waste</p>
            </div>
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <div class="step-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>Calculate Estimate</h3>
                    <p>Use this calculator to get an approximate value</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <div class="step-icon">
                        <i class="fas fa-paper-plane"></i>
                    </div>
                    <h3>Request Quote</h3>
                    <p>Submit your items list for accurate pricing</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <div class="step-icon">
                        <i class="fas fa-calendar-check"></i>
                    </div>
                    <h3>Schedule Pickup</h3>
                    <p>Our team contacts you to schedule inspection</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <div class="step-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <h3>Get Paid</h3>
                    <p>Receive instant payment after weighing</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script src="assets/js/calculator.js"></script>
</body>
</html>

