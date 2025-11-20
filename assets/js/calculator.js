// ===================================
// ADVANCED PRICE CALCULATOR
// Standalone calculator functionality
// ===================================

// Toggle category expansion
function toggleCategory(element) {
    const category = element.parentElement;
    category.classList.toggle('active');
}

// Increment quantity
function incrementQty(button) {
    const input = button.previousElementSibling;
    const currentValue = parseFloat(input.value) || 0;
    const step = input.step ? parseFloat(input.step) : 1;
    input.value = currentValue + step;
    updateCalculator();
}

// Decrement quantity
function decrementQty(button) {
    const input = button.nextElementSibling;
    const currentValue = parseFloat(input.value) || 0;
    if (currentValue > 0) {
        const step = input.step ? parseFloat(input.step) : 1;
        input.value = Math.max(0, currentValue - step);
        updateCalculator();
    }
}

// Update calculator totals and selected items
function updateCalculator() {
    const selectedItemsDiv = document.getElementById('selectedItems');
    const items = document.querySelectorAll('.calculator-item');
    let subtotal = 0;
    let totalItems = 0;
    let selectedHtml = '';
    let hasItems = false;
    
    items.forEach(item => {
        const qty = parseFloat(item.querySelector('.qty-input').value) || 0;
        if (qty > 0) {
            hasItems = true;
            totalItems += qty;
            const name = item.dataset.name || item.querySelector('.item-name').textContent;
            const price = parseFloat(item.dataset.price);
            const unit = item.dataset.unit || 'piece';
            const itemTotal = qty * price;
            subtotal += itemTotal;
            
            selectedHtml += `
                <div class="selected-item">
                    <div class="selected-item-details">
                        <div class="selected-item-name">${name}</div>
                        <div class="selected-item-meta">
                            <span class="selected-item-qty">Qty: ${qty} ${unit}</span>
                            <span class="selected-item-rate">@ ₹${price}/${unit}</span>
                        </div>
                    </div>
                    <div class="selected-item-price">₹${itemTotal.toLocaleString('en-IN')}</div>
                </div>
            `;
        }
    });
    
    // Calculate discount (10% for 10+ items)
    const discount = totalItems >= 10 ? subtotal * 0.1 : 0;
    const total = subtotal - discount;
    
    if (hasItems) {
        selectedItemsDiv.innerHTML = selectedHtml;
        document.querySelector('.subtotal-amount').textContent = '₹' + subtotal.toLocaleString('en-IN');
        document.querySelector('.discount-amount').textContent = '-₹' + discount.toLocaleString('en-IN');
        document.querySelector('.total-amount').textContent = '₹' + total.toLocaleString('en-IN');
        
        // Show/hide discount row
        const discountRow = document.querySelector('.summary-row.discount');
        if (totalItems >= 10) {
            discountRow.style.display = 'flex';
        } else {
            discountRow.style.display = 'none';
        }
        
        // Enable quote button
        const quoteBtn = document.getElementById('requestQuoteBtn');
        if (quoteBtn) {
            quoteBtn.disabled = false;
        }
    } else {
        selectedItemsDiv.innerHTML = '<p class="empty-message"><i class="fas fa-info-circle"></i><br>Select items from the left to see your estimated value</p>';
        document.querySelector('.subtotal-amount').textContent = '₹0';
        document.querySelector('.discount-amount').textContent = '-₹0';
        document.querySelector('.total-amount').textContent = '₹0';
        document.querySelector('.summary-row.discount').style.display = 'none';
        
        // Disable quote button
        const quoteBtn = document.getElementById('requestQuoteBtn');
        if (quoteBtn) {
            quoteBtn.disabled = true;
        }
    }
}

// Request accurate quote
function requestQuote() {
    const items = [];
    const calculatorItems = document.querySelectorAll('.calculator-item');
    
    calculatorItems.forEach(item => {
        const qty = parseFloat(item.querySelector('.qty-input').value) || 0;
        if (qty > 0) {
            const name = item.dataset.name || item.querySelector('.item-name').textContent;
            const price = parseFloat(item.dataset.price);
            const unit = item.dataset.unit || 'piece';
            items.push({
                name: name,
                quantity: qty,
                unit: unit,
                estimatedPrice: price
            });
        }
    });
    
    if (items.length === 0) {
        showNotification('Please select at least one item to get a quote.', 'info');
        return;
    }
    
    // Calculate totals
    let subtotal = 0;
    let totalItems = 0;
    items.forEach(item => {
        subtotal += item.quantity * item.estimatedPrice;
        totalItems += item.quantity;
    });
    const discount = totalItems >= 10 ? subtotal * 0.1 : 0;
    const total = subtotal - discount;
    
    // Store in sessionStorage
    const quoteData = {
        items: items,
        subtotal: subtotal,
        discount: discount,
        total: total,
        totalItems: totalItems,
        timestamp: new Date().toISOString()
    };
    
    sessionStorage.setItem('calculatorQuote', JSON.stringify(quoteData));
    
    // Show success message
    showNotification('Redirecting to quote request form...', 'success');
    
    // Redirect after short delay
    setTimeout(() => {
        window.location.href = 'request-quote.php';
    }, 1000);
}

// Initialize calculator on page load
document.addEventListener('DOMContentLoaded', function() {
    // Auto-open first category
    const firstCategory = document.querySelector('.item-category');
    if (firstCategory) {
        firstCategory.classList.add('active');
    }
    
    // Initialize calculator
    updateCalculator();
    
    // Load saved data if exists
    const savedQuote = sessionStorage.getItem('calculatorQuote');
    if (savedQuote && window.location.pathname.includes('price-calculator.php')) {
        // Clear saved data when returning to calculator
        sessionStorage.removeItem('calculatorQuote');
    }
});

