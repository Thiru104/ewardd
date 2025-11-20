# Image & Video Adding Guide

This guide explains how to add images and videos to your EWARDD website using the comprehensive image/video components we've created.

## Available Image/Video Components

### 1. Image Gallery Section
**Location:** Used in service pages and homepage
**CSS Class:** `image-gallery-section`

**HTML Structure:**
```html
<section class="image-gallery-section">
    <div class="container">
        <div class="section-header">
            <h2>Gallery Title</h2>
            <p>Gallery description</p>
        </div>
        <div class="image-gallery-grid">
            <div class="image-gallery-item">
                <img src="assets/images/gallery/your-image.jpg" alt="Image Description">
                <div class="image-gallery-overlay">
                    <h4>Image Title</h4>
                    <p>Image description</p>
                </div>
            </div>
            <!-- Add more items -->
        </div>
    </div>
</section>
```

**To Add Your Image:**
1. Place your image in `assets/images/gallery/` folder
2. Replace the placeholder div with: `<img src="assets/images/gallery/your-image.jpg" alt="Description">`
3. Update the overlay content with your title and description

### 2. Video Section
**Location:** Used in service pages and homepage
**CSS Class:** `video-section`

**HTML Structure:**
```html
<section class="video-section">
    <div class="container">
        <div class="section-header">
            <h2>Video Title</h2>
            <p>Video description</p>
        </div>
        <div class="video-container">
            <div class="video-wrapper">
                <iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe>
                <!-- OR for self-hosted video: -->
                <video controls>
                    <source src="assets/videos/your-video.mp4" type="video/mp4">
                </video>
            </div>
        </div>
    </div>
</section>
```

**To Add Your Video:**
1. **YouTube Video:** Replace placeholder with: `<iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe>`
2. **Self-hosted Video:** Place video in `assets/videos/` and use `<video>` tag

### 3. Service Image Banner
**Location:** Top of service pages
**CSS Class:** `service-image-banner`

**HTML Structure:**
```html
<div class="service-image-banner">
    <img src="assets/images/services/service-banner.jpg" alt="Service Banner">
    <!-- OR placeholder: -->
    <div class="service-image-banner-placeholder">
        <i class="fas fa-icon"></i>
    </div>
</div>
```

**To Add Your Image:**
1. Place banner image in `assets/images/services/` folder
2. Replace placeholder with: `<img src="assets/images/services/your-banner.jpg" alt="Banner">`

### 4. Process Images Section
**Location:** Service pages showing process steps
**CSS Class:** `process-images-section`

**HTML Structure:**
```html
<section class="process-images-section">
    <div class="container">
        <div class="section-header">
            <h2>Section Title</h2>
            <p>Section description</p>
        </div>
        <div class="process-images-grid">
            <div class="process-image-card">
                <div class="process-image-wrapper">
                    <img src="assets/images/process/your-image.jpg" alt="Process Step">
                </div>
                <div class="process-image-content">
                    <h4>Image Title</h4>
                    <p>Image description</p>
                </div>
            </div>
            <!-- Add more cards -->
        </div>
    </div>
</section>
```

**To Add Your Image:**
1. Place process images in `assets/images/process/` folder
2. Replace placeholder with: `<img src="assets/images/process/your-image.jpg" alt="Description">`

### 5. Hero Image Section
**Location:** Homepage and key pages
**CSS Class:** `hero-image-section`

**HTML Structure:**
```html
<section class="hero-image-section">
    <div class="container">
        <div class="section-header">
            <h2>Section Title</h2>
            <p>Section description</p>
        </div>
        <div class="hero-image-container">
            <img src="assets/images/hero-image.jpg" alt="Hero Image">
        </div>
    </div>
</section>
```

### 6. Before/After Image Section
**Location:** Service pages showing comparisons
**CSS Class:** `before-after-section`

**HTML Structure:**
```html
<section class="before-after-section">
    <div class="container">
        <div class="section-header">
            <h2>Before & After</h2>
        </div>
        <div class="before-after-grid">
            <div class="before-after-card">
                <div class="before-after-header">
                    <h4>Comparison Title</h4>
                </div>
                <div class="before-after-images">
                    <div class="before-after-item">
                        <img src="assets/images/before.jpg" alt="Before">
                        <div class="before-after-label">Before</div>
                    </div>
                    <div class="before-after-item">
                        <img src="assets/images/after.jpg" alt="After">
                        <div class="before-after-label">After</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
```

### 7. Image with Content Overlay
**Location:** Any page needing image with text overlay
**CSS Class:** `image-content-overlay`

**HTML Structure:**
```html
<div class="image-content-overlay">
    <img src="assets/images/overlay-image.jpg" alt="Image">
    <div class="overlay-content">
        <h3>Overlay Title</h3>
        <p>Overlay description text</p>
    </div>
</div>
```

## Recommended Image Sizes

- **Banner Images:** 1920x514px (21:9 aspect ratio)
- **Gallery Images:** 800x500px (16:10 aspect ratio)
- **Process Images:** 600x450px (4:3 aspect ratio)
- **Hero Images:** 1920x675px (16:9 aspect ratio)
- **Video Thumbnails:** 1200x675px (16:9 aspect ratio)

## Image Optimization Tips

1. **Format:** Use JPG for photos, PNG for graphics with transparency
2. **Compression:** Optimize images to reduce file size (aim for <500KB)
3. **Alt Text:** Always include descriptive alt text for accessibility
4. **Naming:** Use descriptive, lowercase filenames with hyphens (e.g., `laptop-recycling-facility.jpg`)

## Video Recommendations

1. **YouTube:** Preferred method - easier to manage and faster loading
2. **Self-hosted:** Use MP4 format, keep file size reasonable
3. **Thumbnails:** Create custom thumbnails for better presentation
4. **Duration:** Keep videos under 5 minutes for better engagement

## File Structure

```
assets/
├── images/
│   ├── gallery/          # Gallery images
│   ├── services/         # Service banner images
│   ├── process/          # Process step images
│   ├── before-after/    # Comparison images
│   └── hero/             # Hero section images
└── videos/               # Self-hosted videos (if any)
    └── your-video.mp4
```

## Quick Reference

**Replace Placeholder with Image:**
```html
<!-- Before (placeholder) -->
<div class="image-gallery-placeholder">
    <i class="fas fa-laptop"></i>
    <span>Laptops</span>
</div>

<!-- After (actual image) -->
<img src="assets/images/gallery/laptops.jpg" alt="Laptops Collection">
```

**Replace Placeholder with Video:**
```html
<!-- Before (placeholder) -->
<div class="video-placeholder">
    <div class="video-play-button">
        <i class="fas fa-play"></i>
    </div>
    <h3>Video Title</h3>
    <p>Video description</p>
</div>

<!-- After (YouTube embed) -->
<iframe src="https://www.youtube.com/embed/YOUR_VIDEO_ID" allowfullscreen></iframe>
```

## Notes

- All placeholders are styled and functional - they work even without images
- Images are lazy-loaded by default for better performance
- All components are fully responsive
- Hover effects and animations are built-in
- Replace placeholders gradually as you add images

