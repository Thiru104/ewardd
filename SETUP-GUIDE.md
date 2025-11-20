# 🚀 EWARDD Website Setup Guide

## Step-by-Step Installation

### 1. Upload Files to Server

Upload all files to your web server (via FTP, cPanel, or file manager):
```
/htdocs/ or /public_html/
├── index.php
├── about.php
├── services.php
├── service-*.php files
├── contact.php
├── faq.php
├── case-studies.php
├── privacy-policy.php
├── 404.php
├── web-logo.png (ADD YOUR LOGO HERE)
├── .htaccess
├── includes/
│   ├── header.php
│   └── footer.php
├── assets/
│   ├── css/
│   │   ├── style.css
│   │   └── pages.css
│   ├── js/
│   │   └── script.js
│   └── images/ (CREATE THIS FOLDER)
│       ├── banners/ (CREATE)
│       ├── facility/ (CREATE)
│       ├── services/ (CREATE)
│       └── case-studies/ (CREATE)
```

### 2. Add Your Logo

Replace the logo file:
- **File name:** `web-logo.png`
- **Location:** Root directory
- **Size:** 200px × 60px recommended
- **Format:** PNG with transparent background

### 3. Create Image Folders

Create these folders in `assets/images/`:
```bash
mkdir -p assets/images/banners
mkdir -p assets/images/facility  
mkdir -p assets/images/services
mkdir -p assets/images/case-studies
mkdir -p assets/images/team
```

### 4. Add Banner Images (Priority)

Add these images to `assets/images/banners/`:
- **banner1.jpg** - Recycling facility / E-waste collection (1920×600px)
- **banner2.jpg** - IT equipment / Office computers (1920×600px)
- **banner3.jpg** - Green technology theme (1920×600px)

### 5. Update Contact Information

Edit these files to add your contact details:

**includes/footer.php** (Lines 25-28):
```php
<li><i class="fas fa-phone"></i> +91 XXXXX XXXXX</li>
<li><i class="fas fa-envelope"></i> support@ewardd.com</li>
<li><i class="fas fa-map-marker-alt"></i> Your Address, City</li>
```

**includes/footer.php** (Line 62 - WhatsApp):
```php
<a href="https://wa.me/91XXXXXXXXXX" class="whatsapp-float">
```

**contact.php** (Lines 21-31):
```php
<p>+91 YOUR PHONE</p>
<a href="mailto:your@email.com">your@email.com</a>
<p>Your Address</p>
```

### 6. Optional: Add Real Images to Hero Banners

Edit `assets/css/style.css` (around line 320):

**Before:**
```css
.hero-slide:nth-child(1) {
    background-image: linear-gradient(...), url('data:image/svg+xml,...');
}
```

**After (with real images):**
```css
.hero-slide:nth-child(1) {
    background-image: linear-gradient(135deg, rgba(13, 80, 37, 0.92), rgba(26, 127, 55, 0.88)),
                      url('../images/banners/banner1.jpg');
}

.hero-slide:nth-child(2) {
    background-image: linear-gradient(135deg, rgba(26, 127, 55, 0.92), rgba(39, 174, 96, 0.88)),
                      url('../images/banners/banner2.jpg');
}

.hero-slide:nth-child(3) {
    background-image: linear-gradient(135deg, rgba(39, 174, 96, 0.92), rgba(46, 204, 113, 0.88)),
                      url('../images/banners/banner3.jpg');
}
```

### 7. Add Facility Images to Homepage

Edit `index.php` (around line 225 - floating images section):

Update the `floating-image-card` divs to include actual images:

```html
<div class="floating-image-card" style="background-image: url('assets/images/facility/facility1.jpg'); background-size: cover; background-position: center;">
    <div class="floating-image-content">
        <h3>Modern Facility</h3>
        <p>CPCB-certified recycling plant</p>
    </div>
</div>
```

### 8. Configure SSL (HTTPS)

Once you have an SSL certificate:

1. Edit `.htaccess`
2. Uncomment these lines (remove the # symbol):
```apache
# RewriteCond %{HTTPS} off
# RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

Becomes:
```apache
RewriteCond %{HTTPS} off
RewriteRule ^(.*)$ https://%{HTTP_HOST}%{REQUEST_URI} [L,R=301]
```

### 9. Test Your Website

Visit these pages to test:
- ✅ http://yourdomain.com
- ✅ http://yourdomain.com/about
- ✅ http://yourdomain.com/services
- ✅ http://yourdomain.com/contact
- ✅ Test mobile responsiveness
- ✅ Test forms
- ✅ Test all navigation links

### 10. Optional Enhancements

#### Add Google Analytics
Add this code before `</head>` in all PHP files:
```html
<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'GA_MEASUREMENT_ID');
</script>
```

#### Connect Contact Form to Email
Create `submit-contact-form.php`:
```php
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "your@email.com";
    $subject = "New Contact Form Submission from EWARDD Website";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
    $headers = "From: $email";
    
    if (mail($to, $subject, $body, $headers)) {
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }
}
?>
```

Then update `assets/js/script.js` around line 87:
```javascript
// Uncomment this to enable email sending:
fetch('submit-contact-form.php', {
    method: 'POST',
    body: formData
}).then(response => response.json())
  .then(data => {
    if (data.success) {
        showNotification('Thank you! We will contact you shortly.', 'success');
    }
});
```

## 📸 Where to Get Images

### Free Stock Photos:
1. **Unsplash** (unsplash.com)
2. **Pexels** (pexels.com)
3. **Pixabay** (pixabay.com)

### Search Terms:
- "e-waste recycling"
- "electronic waste"
- "computer recycling"
- "industrial recycling facility"
- "green technology"
- "data center"

### Image Optimization:
Before uploading, optimize images using:
- **TinyPNG** (tinypng.com)
- **ImageOptim** (imageoptim.com)
- **Squoosh** (squoosh.app)

## 🎨 Customization Tips

### Change Color Scheme
Edit `assets/css/style.css` (around line 14):
```css
:root {
    --primary-green: #1a7f37;    /* Main brand color */
    --secondary-green: #27ae60;   /* Secondary color */
    --light-green: #2ecc71;       /* Accent color */
    --dark-green: #0d5025;        /* Dark variant */
}
```

### Change Fonts
Add Google Fonts in `<head>` of all PHP files:
```html
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
```

Then update CSS:
```css
body {
    font-family: 'Poppins', sans-serif;
}
```

## 🔒 Security Checklist

- ✅ Install SSL certificate (HTTPS)
- ✅ Keep PHP updated
- ✅ Use strong passwords
- ✅ Regular backups
- ✅ Protect .htaccess file
- ✅ Validate all form inputs
- ✅ Add CAPTCHA to forms (optional)

## 📱 Mobile Testing

Test on these devices/screen sizes:
- iPhone (375px)
- iPad (768px)
- Desktop (1200px+)

Use browser dev tools (F12) to test responsive design.

## 🚀 Performance Optimization

### Enable Caching
Your `.htaccess` file already includes caching rules.

### Enable GZIP Compression
Already enabled in `.htaccess`.

### Image Optimization
- Use WebP format for modern browsers
- Lazy load images below the fold
- Use responsive images with `srcset`

## 📊 SEO Checklist

- ✅ Meta titles and descriptions (already added)
- ✅ Semantic HTML structure
- ✅ Alt tags for images (add when you upload images)
- ✅ Fast loading speed
- ✅ Mobile-friendly
- ✅ SSL certificate
- ⬜ Submit sitemap to Google Search Console
- ⬜ Create robots.txt file
- ⬜ Set up Google My Business

## 🆘 Troubleshooting

### Website not loading?
- Check file permissions (755 for folders, 644 for files)
- Verify .htaccess file is uploaded
- Check PHP version (7.4+ recommended)

### Images not showing?
- Check image paths (case-sensitive on Linux)
- Verify images folder exists
- Check file permissions

### Forms not working?
- Check PHP mail configuration
- Use form submission service (Formspree, etc.)
- Verify SMTP settings

### Mobile menu not working?
- Ensure JavaScript is loaded
- Check browser console for errors
- Clear browser cache

## 📞 Need Help?

For technical support:
- Email: support@ewardd.com
- Phone: +91 XXXXX XXXXX

## 🎉 You're All Set!

Your EWARDD website is now live with:
- ✅ Beautiful responsive design
- ✅ Professional animations
- ✅ SEO optimization
- ✅ Fast loading
- ✅ Modern UI/UX

**Remember to:**
1. Add your logo
2. Update contact information
3. Add real images for better visuals
4. Test thoroughly before launch

Good luck with your e-waste recycling business! 🌿♻️

