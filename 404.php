<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | EWARDD</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .error-page {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 40px 20px;
            background: linear-gradient(135deg, var(--light-gray), var(--white));
        }
        .error-content {
            max-width: 600px;
        }
        .error-code {
            font-size: 120px;
            font-weight: 700;
            color: var(--primary-green);
            line-height: 1;
            margin-bottom: 20px;
        }
        .error-content h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: var(--text-dark);
        }
        .error-content p {
            font-size: 18px;
            color: var(--gray);
            margin-bottom: 30px;
        }
        .error-icon {
            font-size: 80px;
            color: var(--primary-green);
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="error-page">
        <div class="error-content">
            <i class="fas fa-exclamation-triangle error-icon"></i>
            <div class="error-code">404</div>
            <h1>Page Not Found</h1>
            <p>Sorry, the page you're looking for doesn't exist or has been moved.</p>
            <div style="display: flex; gap: 15px; justify-content: center; flex-wrap: wrap;">
                <a href="index.php" class="btn btn-primary">Go to Homepage</a>
                <a href="contact.php" class="btn btn-secondary">Contact Us</a>
            </div>
        </div>
    </div>
</body>
</html>

