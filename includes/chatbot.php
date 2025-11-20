<!-- Chatbot Widget -->
<div id="chatbot-widget" class="chatbot-widget">
    <button class="chatbot-toggle" onclick="toggleChatbot()" aria-label="Open Chat">
        <i class="fas fa-comments"></i>
    </button>
    
    <div class="chatbot-window">
        <div class="chatbot-header">
            <div class="chatbot-header-content">
                <img src="web-logo.png" alt="EWARDD" class="chatbot-logo">
                <div>
                    <h4>EWARDD Assistant</h4>
                    <span class="chatbot-status">
                        <span class="status-dot"></span> Online
                    </span>
                </div>
            </div>
            <button class="chatbot-close" onclick="toggleChatbot()" aria-label="Close Chat">
                <i class="fas fa-times"></i>
            </button>
        </div>
        
        <div class="chatbot-messages" id="chatbotMessages">
            <div class="bot-message">
                <div class="message-avatar">
                    <i class="fas fa-robot"></i>
                </div>
                <div class="message-content">
                    <p>Hi! 👋 I'm EWARDD Assistant. How can I help you today?</p>
                </div>
            </div>
            
            <div class="chatbot-quick-replies">
                <button class="quick-reply" onclick="selectQuickReply('Book Free Pickup')">
                    <i class="fas fa-truck"></i> Book Free Pickup
                </button>
                <button class="quick-reply" onclick="selectQuickReply('Get Scrap Price')">
                    <i class="fas fa-rupee-sign"></i> Get Scrap Price
                </button>
                <button class="quick-reply" onclick="selectQuickReply('Corporate Services')">
                    <i class="fas fa-building"></i> Corporate Services
                </button>
                <button class="quick-reply" onclick="selectQuickReply('Data Destruction')">
                    <i class="fas fa-shield-alt"></i> Data Destruction
                </button>
                <button class="quick-reply" onclick="selectQuickReply('Talk to Human')">
                    <i class="fas fa-user"></i> Talk to Human
                </button>
            </div>
        </div>
        
        <div class="chatbot-input">
            <input type="text" id="chatbotInput" placeholder="Type your message..." onkeypress="handleChatEnter(event)">
            <button class="chatbot-send" onclick="sendMessage()">
                <i class="fas fa-paper-plane"></i>
            </button>
        </div>
    </div>
</div>

<style>
.chatbot-widget {
    position: fixed;
    bottom: 100px;
    right: 30px;
    z-index: 9998;
}

.chatbot-toggle {
    width: 65px;
    height: 65px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
    border: none;
    color: white;
    font-size: 28px;
    cursor: pointer;
    box-shadow: 0 6px 25px rgba(26, 127, 55, 0.4);
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: chatbotPulse 2s infinite;
}

.chatbot-toggle:hover {
    transform: scale(1.1);
    box-shadow: 0 8px 30px rgba(26, 127, 55, 0.5);
}

@keyframes chatbotPulse {
    0%, 100% {
        box-shadow: 0 6px 25px rgba(26, 127, 55, 0.4);
    }
    50% {
        box-shadow: 0 6px 25px rgba(26, 127, 55, 0.4), 0 0 0 15px rgba(26, 127, 55, 0.1);
    }
}

.chatbot-window {
    position: absolute;
    bottom: 80px;
    right: 0;
    width: 380px;
    height: 550px;
    background: white;
    border-radius: 20px;
    box-shadow: 0 10px 50px rgba(0,0,0,0.2);
    display: none;
    flex-direction: column;
    overflow: hidden;
    animation: slideUp 0.3s ease;
}

.chatbot-window.active {
    display: flex;
}

@keyframes slideUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.chatbot-header {
    background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
    color: white;
    padding: 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.chatbot-header-content {
    display: flex;
    align-items: center;
    gap: 12px;
}

.chatbot-logo {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: white;
    padding: 5px;
    object-fit: contain;
}

.chatbot-header h4 {
    margin: 0;
    font-size: 16px;
    font-weight: 600;
}

.chatbot-status {
    display: flex;
    align-items: center;
    gap: 5px;
    font-size: 12px;
    opacity: 0.9;
}

.status-dot {
    width: 8px;
    height: 8px;
    background: #4caf50;
    border-radius: 50%;
    animation: statusBlink 2s infinite;
}

@keyframes statusBlink {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.5; }
}

.chatbot-close {
    background: rgba(255,255,255,0.2);
    border: none;
    color: white;
    width: 32px;
    height: 32px;
    border-radius: 50%;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.chatbot-close:hover {
    background: rgba(255,255,255,0.3);
    transform: rotate(90deg);
}

.chatbot-messages {
    flex: 1;
    overflow-y: auto;
    padding: 20px;
    background: #f8f9fa;
}

.bot-message, .user-message {
    display: flex;
    gap: 10px;
    margin-bottom: 15px;
    animation: messageSlide 0.3s ease;
}

@keyframes messageSlide {
    from {
        opacity: 0;
        transform: translateY(10px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.user-message {
    flex-direction: row-reverse;
}

.message-avatar {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: linear-gradient(135deg, var(--primary-green), var(--secondary-green));
    color: white;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.user-message .message-avatar {
    background: #6c757d;
}

.message-content {
    max-width: 70%;
    background: white;
    padding: 12px 16px;
    border-radius: 15px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}

.user-message .message-content {
    background: var(--primary-green);
    color: white;
}

.message-content p {
    margin: 0;
    font-size: 14px;
    line-height: 1.5;
}

.chatbot-quick-replies {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
    margin-top: 15px;
}

.quick-reply {
    background: white;
    border: 2px solid var(--primary-green);
    color: var(--primary-green);
    padding: 10px 15px;
    border-radius: 20px;
    font-size: 13px;
    cursor: pointer;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 6px;
}

.quick-reply:hover {
    background: var(--primary-green);
    color: white;
    transform: translateY(-2px);
}

.chatbot-input {
    display: flex;
    gap: 10px;
    padding: 15px;
    background: white;
    border-top: 1px solid #e0e0e0;
}

.chatbot-input input {
    flex: 1;
    padding: 12px 15px;
    border: 2px solid #e0e0e0;
    border-radius: 25px;
    font-size: 14px;
    outline: none;
    transition: all 0.3s ease;
}

.chatbot-input input:focus {
    border-color: var(--primary-green);
}

.chatbot-send {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    background: var(--primary-green);
    border: none;
    color: white;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.chatbot-send:hover {
    background: var(--dark-green);
    transform: scale(1.1);
}

/* Mobile Responsive */
@media (max-width: 768px) {
    .chatbot-widget {
        right: 15px;
        bottom: 80px;
    }
    
    .chatbot-window {
        width: calc(100vw - 30px);
        height: calc(100vh - 150px);
        right: -15px;
    }
    
    .chatbot-toggle {
        width: 55px;
        height: 55px;
        font-size: 24px;
    }
}
</style>

<script>
function toggleChatbot() {
    const chatWindow = document.querySelector('.chatbot-window');
    chatWindow.classList.toggle('active');
    
    if (chatWindow.classList.contains('active')) {
        document.getElementById('chatbotInput').focus();
    }
}

function sendMessage() {
    const input = document.getElementById('chatbotInput');
    const message = input.value.trim();
    
    if (message) {
        addUserMessage(message);
        input.value = '';
        
        setTimeout(() => {
            handleBotResponse(message);
        }, 800);
    }
}

function handleChatEnter(event) {
    if (event.key === 'Enter') {
        sendMessage();
    }
}

function addUserMessage(message) {
    const messagesDiv = document.getElementById('chatbotMessages');
    const messageHTML = `
        <div class="user-message">
            <div class="message-avatar">
                <i class="fas fa-user"></i>
            </div>
            <div class="message-content">
                <p>${message}</p>
            </div>
        </div>
    `;
    messagesDiv.insertAdjacentHTML('beforeend', messageHTML);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;
}

function addBotMessage(message) {
    const messagesDiv = document.getElementById('chatbotMessages');
    const messageHTML = `
        <div class="bot-message">
            <div class="message-avatar">
                <i class="fas fa-robot"></i>
            </div>
            <div class="message-content">
                <p>${message}</p>
            </div>
        </div>
    `;
    messagesDiv.insertAdjacentHTML('beforeend', messageHTML);
    messagesDiv.scrollTop = messagesDiv.scrollHeight;
}

function selectQuickReply(action) {
    addUserMessage(action);
    setTimeout(() => {
        handleBotResponse(action);
    }, 800);
}

function handleBotResponse(message) {
    const lowerMessage = message.toLowerCase();
    let response = '';
    
    if (lowerMessage.includes('pickup') || lowerMessage.includes('book')) {
        response = 'Great! I can help you book a free pickup. Please share:<br>1. Your location/city<br>2. Items to recycle<br>3. Preferred date<br><br>Or visit our <a href="contact.php" style="color: var(--primary-green);">Contact Page</a> to schedule online.';
    } else if (lowerMessage.includes('price') || lowerMessage.includes('scrap') || lowerMessage.includes('rate')) {
        response = 'To get the best scrap price, I need details about your items. Please share photos via WhatsApp at +91 XXXXX XXXXX or fill our <a href="index.php#price-calculator" style="color: var(--primary-green);">Price Calculator</a>.';
    } else if (lowerMessage.includes('corporate') || lowerMessage.includes('business') || lowerMessage.includes('bulk')) {
        response = 'We provide comprehensive corporate e-waste solutions including ITAD, data destruction, and bulk pickup. Visit our <a href="service-corporate-ewaste.php" style="color: var(--primary-green);">Corporate Services</a> page or call +91 XXXXX XXXXX for a quote.';
    } else if (lowerMessage.includes('data') || lowerMessage.includes('destruction') || lowerMessage.includes('security')) {
        response = 'We offer 100% secure data destruction with certificates. Both on-site and off-site services available. Learn more on our <a href="service-data-destruction.php" style="color: var(--primary-green);">Data Destruction</a> page.';
    } else if (lowerMessage.includes('human') || lowerMessage.includes('agent') || lowerMessage.includes('talk')) {
        response = 'I\'ll connect you with our team. Please call us at +91 XXXXX XXXXX or email support@ewardd.com. We\'re available Mon-Sat, 9 AM - 7 PM.';
    } else {
        response = 'I can help you with:<br>✓ Booking free pickup<br>✓ Getting scrap prices<br>✓ Corporate services<br>✓ Data destruction<br>✓ General inquiries<br><br>What would you like to know?';
    }
    
    addBotMessage(response);
}
</script>

