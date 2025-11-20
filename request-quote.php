<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Quote – Get Accurate E-Waste Pricing | EWARDD</title>
    <meta name="description" content="Request an accurate quote for your e-waste. Our team will provide the best market rates after inspection.">
    <meta name="keywords" content="request quote, e-waste quote, scrap price quote, IT scrap quotation">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/pages.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <section class="page-header">
        <div class="container">
            <h1>Request Quote</h1>
            <p>Get Accurate Pricing for Your E-Waste</p>
        </div>
    </section>

    <section class="contact-form-section">
        <div class="container">
            <div class="quote-summary-box" id="quoteSummary" style="display: none;">
                <h3><i class="fas fa-calculator"></i> Your Estimate Summary</h3>
                <div id="quoteSummaryContent"></div>
                <button type="button" class="btn btn-secondary" onclick="editCalculator()">
                    <i class="fas fa-edit"></i> Edit Items
                </button>
            </div>

            <div class="contact-form-container">
                <h2 style="text-align: center; margin-bottom: 15px;">Quote Request Form</h2>
                <p style="text-align: center; color: var(--gray); margin-bottom: 40px;">Fill in your details and we'll provide an accurate quote within 24 hours</p>

                <form id="quoteForm" class="calculator-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label>Full Name *</label>
                            <input type="text" name="name" placeholder="Enter your name" required>
                        </div>
                        <div class="form-group">
                            <label>Email Address *</label>
                            <input type="email" name="email" placeholder="Enter your email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label>Phone Number *</label>
                            <input type="tel" name="phone" placeholder="Enter phone number" required>
                        </div>
                        <div class="form-group">
                            <label>City *</label>
                            <input type="text" name="city" placeholder="Enter your city" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Address / Pickup Location</label>
                        <textarea name="address" rows="3" placeholder="Enter complete address for pickup"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Preferred Pickup Date</label>
                        <input type="date" name="pickup_date" min="<?php echo date('Y-m-d'); ?>">
                    </div>

                    <div class="form-group">
                        <label>Items List *</label>
                        <textarea name="items_list" id="itemsList" rows="6" placeholder="List of items (automatically filled from calculator)" required></textarea>
                        <small style="color: var(--gray); margin-top: 5px; display: block;">Items from calculator are pre-filled. You can edit if needed.</small>
                    </div>

                    <div class="form-group">
                        <label>Estimated Value (from calculator)</label>
                        <input type="text" id="estimatedValue" readonly style="background: var(--light-gray);">
                    </div>

                    <div class="form-group">
                        <label>Additional Notes</label>
                        <textarea name="notes" rows="4" placeholder="Any special requirements, item conditions, or additional information"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Upload Photos (Optional)</label>
                        <input type="file" name="photos" accept="image/*" multiple>
                        <small style="color: var(--gray); margin-top: 5px; display: block;">Upload photos of your items for better price estimation</small>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">
                        <i class="fas fa-paper-plane"></i> Submit Quote Request
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/script.js"></script>
    <script>
        // Load quote data from calculator
        document.addEventListener('DOMContentLoaded', function() {
            const quoteData = sessionStorage.getItem('calculatorQuote');
            
            if (quoteData) {
                try {
                    const data = JSON.parse(quoteData);
                    displayQuoteSummary(data);
                    populateForm(data);
                } catch (e) {
                    console.error('Error parsing quote data:', e);
                }
            }
        });

        function displayQuoteSummary(data) {
            const summaryBox = document.getElementById('quoteSummary');
            const summaryContent = document.getElementById('quoteSummaryContent');
            
            if (!summaryBox || !summaryContent) return;
            
            let itemsHtml = '<div class="quote-items-list">';
            data.items.forEach(item => {
                itemsHtml += `
                    <div class="quote-item-row">
                        <span>${item.name}</span>
                        <span>${item.quantity} ${item.unit}</span>
                        <span>₹${(item.quantity * item.estimatedPrice).toLocaleString('en-IN')}</span>
                    </div>
                `;
            });
            itemsHtml += '</div>';
            
            itemsHtml += `
                <div class="quote-totals">
                    <div class="quote-total-row">
                        <span>Subtotal:</span>
                        <span>₹${data.subtotal.toLocaleString('en-IN')}</span>
                    </div>
                    ${data.discount > 0 ? `
                    <div class="quote-total-row discount">
                        <span>Bulk Discount (10+ items):</span>
                        <span>-₹${data.discount.toLocaleString('en-IN')}</span>
                    </div>
                    ` : ''}
                    <div class="quote-total-row total">
                        <span>Estimated Total:</span>
                        <span>₹${data.total.toLocaleString('en-IN')}</span>
                    </div>
                </div>
            `;
            
            summaryContent.innerHTML = itemsHtml;
            summaryBox.style.display = 'block';
        }

        function populateForm(data) {
            // Populate items list
            let itemsText = '';
            data.items.forEach((item, index) => {
                itemsText += `${index + 1}. ${item.name} - Quantity: ${item.quantity} ${item.unit}\n`;
            });
            document.getElementById('itemsList').value = itemsText;
            
            // Populate estimated value
            document.getElementById('estimatedValue').value = '₹' + data.total.toLocaleString('en-IN') + ' (Approximate)';
        }

        function editCalculator() {
            window.location.href = 'price-calculator.php';
        }

        // Form submission
        const quoteForm = document.getElementById('quoteForm');
        if (quoteForm) {
            quoteForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const formData = new FormData(this);
                
                // Show success message
                showNotification('Thank you! Your quote request has been submitted. Our team will contact you within 24 hours with accurate pricing.', 'success');
                
                // Clear session storage
                sessionStorage.removeItem('calculatorQuote');
                
                // Reset form after delay
                setTimeout(() => {
                    this.reset();
                    window.location.href = 'index.php';
                }, 2000);
                
                // In production, send to server:
                // fetch('submit-quote-request.php', {
                //     method: 'POST',
                //     body: formData
                // });
            });
        }
    </script>
</body>
</html>

