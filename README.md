# HappySoft Website

A professional website introducing practical solutions for developers.

## 🎯 Overview

This website introduces proven solutions for developers including SQL data migration, Excel generation, and utility tools.

### Key Solutions
- **SQL2DB v2.3.0** - Real-time monitoring data migration tool
- **SQL2Excel v1.2.1** - Multi-sheet Excel generation tool
- **Client Util App** - Client utility tools
- **Vue3 Web App** - Modern frontend application
- **Express Server** - Node.js backend server

## 🛠️ Technology Stack

### Frontend
- **HTML5** - Structured markup
- **CSS3** - Modern styling and responsive design
- **JavaScript (ES6+)** - Interactive functionality
- **Google Fonts** - Web fonts (Inter, JetBrains Mono)

### Backend
- **PHP 7.4+** - Server-side logic
- **MySQL 5.7+** - Contact data storage
- **Email System** - Contact form processing
- **Session Management** - User state management

### Features
- **Responsive Design** - Mobile to desktop optimization
- **Accessibility** - Screen reader and keyboard navigation support
- **SEO Optimization** - Meta tags and structured data
- **Performance Optimization** - Image compression, CSS/JS optimization

## 🚀 Installation and Setup

### 1. Server Requirements
- **Web Server**: Apache 2.4+ or Nginx 1.18+
- **PHP**: 7.4 or higher (8.0+ recommended)
- **MySQL**: 5.7 or higher (8.0+ recommended)
- **Extensions**: `php-mail`, `php-session`, `php-json`, `php-pdo`, `php-mysql`

### 2. File Upload
```bash
# Upload website files to web server root directory
cp -r solutions-website/* /var/www/html/
```

### 3. Permission Settings
```bash
# Set write permissions for log directory
chmod 755 logs/
chown www-data:www-data logs/

# Set PHP file execution permissions
chmod 644 *.php
chmod 644 includes/*.php
```

### 4. Database Configuration
Modify MySQL connection information in `config/database.php`:

```php
define('DB_HOST', 'localhost');           // MySQL host
define('DB_USER', 'your_username');       // MySQL username
define('DB_PASS', 'your_password');       // MySQL password
define('DB_NAME', 'happysoft_contacts');  // Database name
define('DB_PORT', 3306);                  // MySQL port
```

### 5. Database Initialization
Access `setup-database.php` in your browser to create database tables and insert sample data.

### 6. Email Configuration
Modify email settings in `send-message.php`:

```php
$config = [
    'to_email' => 'your-email@example.com',        // Recipient email
    'from_email' => 'noreply@your-domain.com',     // Sender email
    'site_name' => 'HappySoft',                    // Site name
    // ... other settings
];
```

### 7. Virtual Host Configuration (Apache)
```apache
<VirtualHost *:80>
    ServerName your-domain.com
    DocumentRoot /var/www/html
    
    <Directory /var/www/html>
        AllowOverride All
        Require all granted
    </Directory>
    
    ErrorLog ${APACHE_LOG_DIR}/error.log
    CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
```

### 8. SSL Certificate Setup (Recommended)
```bash
# Install Let's Encrypt certificate
certbot --apache -d your-domain.com
```

## 📁 Project Structure

```
solutions-website/
├── index.php                 # Main homepage
├── sql2db.php               # SQL2DB solution page
├── sql2excel.php            # SQL2Excel solution page
├── send-message.php          # Contact form processing (email + DB storage)
├── setup-database.php        # Database initialization script
├── config/
│   └── database.php          # MySQL connection settings
├── admin/
│   └── contacts.php          # Contact management page
└── logs/                     # Log file directory
├── includes/
│   ├── header.php           # Common header
│   └── footer.php           # Common footer
├── assets/
│   ├── css/
│   │   ├── main.css         # Main stylesheet
│   │   └── responsive.css   # Responsive styles
│   └── js/
│       └── main.js          # Main JavaScript
├── logs/                    # Log file storage
└── docs/                    # Documentation files (optional)
```

## 🎨 Customization

### Color Theme Changes
Modify CSS variables in `assets/css/main.css`:

```css
:root {
    --primary-color: #2563eb;      /* Default blue */
    --primary-hover: #1d4ed8;      /* Hover color */
    --accent-color: #f59e0b;       /* Accent color */
    /* ... other color variables */
}
```

### Logo and Branding
Modify brand information in `includes/header.php`:

```php
<div class="nav-brand">
    <a href="index.php">
        <span class="brand-icon">🔧</span>
        <span class="brand-text">HappySoft</span>
    </a>
</div>
```

### Contact Information
Modify contact information in `includes/footer.php`:

```php
<div class="contact-info">
    <p class="contact-item">
        <strong>📧 Email</strong><br>
        <a href="mailto:your-email@example.com">your-email@example.com</a>
    </p>
    <!-- ... other contact information -->
</div>
```

## 📱 Responsive Design

The website is optimized for various screen sizes:

- **Mobile**: 320px ~ 767px
- **Tablet**: 768px ~ 1023px
- **Desktop**: 1024px ~ 1199px
- **Large Screen**: 1200px+

### Breakpoints
```css
/* Mobile */
@media (max-width: 767px) { ... }

/* Tablet */
@media (max-width: 991px) { ... }

/* Desktop */
@media (min-width: 1200px) { ... }
```

## 🔧 Development and Maintenance

### Local Development Environment
```bash
# Local testing with PHP built-in server
cd solutions-website
php -S localhost:8000
```

### Log Monitoring
```bash
# Check contact form logs
tail -f logs/contact.log

# Check database logs
tail -f logs/database.log

# Check error logs
tail -f logs/error.log
tail -f logs/database_error.log
```

### Performance Optimization
- **Image Compression**: Use WebP format when possible
- **CSS/JS Compression**: Use minified versions in production
- **Caching**: Configure static file caching in Apache/Nginx
- **CDN**: Consider CDN setup for global users

## 🔒 Security Configuration

### Basic Security Measures
- **Form Validation**: XSS, CSRF prevention
- **Rate Limiting**: Spam prevention
- **Input Validation**: SQL injection prevention (using PDO prepared statements)
- **Session Security**: Secure session management
- **Database Security**: Secure database connection through PDO

### .htaccess Security Settings
```apache
# Block access to logs directory
<Directory "logs">
    Require all denied
</Directory>

# Prevent PHP info exposure
<Files "*.php~">
    Require all denied
</Files>

# Security headers
Header always set X-Content-Type-Options nosniff
Header always set X-Frame-Options DENY
Header always set X-XSS-Protection "1; mode=block"
```

## 📊 Contact Management System

### New Features
- **MySQL Database Integration**: Store contact content in database
- **Admin Page**: Contact list viewing, search, and delete functionality
- **Statistics Dashboard**: Total contacts, today's contacts, solution-specific statistics
- **Pagination**: Efficient management of large contact data
- **Search Function**: Search contacts by name, email, and message

### Admin Page Access
- **URL**: `your-domain.com/admin/contacts.php`
- **Default Password**: `admin123` (must be changed for actual operation)
- **Features**:
  - Contact list viewing and search
  - Contact detail confirmation
  - Contact deletion
  - Statistics dashboard
  - Pagination

### Database Structure
```sql
CREATE TABLE contacts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(255) NOT NULL,
    company VARCHAR(200),
    solution VARCHAR(50),
    message TEXT NOT NULL,
    ip_address VARCHAR(45),
    user_agent TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
```

## 📊 Analytics and Monitoring

### Google Analytics (Optional)
Add to `includes/header.php`:

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

### Website Status Check
- **Contact Form**: Regular test message sending
- **Database**: MySQL connection status and contact data verification
- **Email Sending**: SMTP log verification
- **Performance**: Page loading speed monitoring
- **Admin Page**: Check contact status at `/admin/contacts.php`

## 🚀 Pre-Deployment Checklist

- [ ] MySQL database configuration and connection test
- [ ] Database initialization (execute `setup-database.php`)
- [ ] Admin password change (`admin/contacts.php`)
- [ ] Email configuration verification
- [ ] Contact information update
- [ ] Change GitHub links to actual repositories
- [ ] Modify domain name and branding information
- [ ] SSL certificate installation
- [ ] Log directory permission settings
- [ ] Contact form test (email + DB storage)
- [ ] Admin page access test
- [ ] Mobile responsive test
- [ ] Browser compatibility test
- [ ] Delete `setup-database.php` file (security)

## 📞 Support

- **Email**: happysoftinfodesk@gmail.com
- **Website**: happysoft.kr

---

**Version**: v1.0.0  
**Last Updated**: 2025-01-15  
**License**: MIT License
