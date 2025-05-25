# MALABIS - E-Commerce Clothing Store

A modern, responsive e-commerce web application for clothing and fashion items built with PHP, MySQL, HTML, CSS, and JavaScript.

![Project Banner](images/logo-01.png)

## 🌟 Features

### User Features
- **User Authentication**: Secure registration and login system
- **Product Catalog**: Browse clothing items by categories (Men, Women, Kids)
- **Product Search & Filter**: Find products by name, category, and other criteria
- **Product Details**: Detailed product pages with images, descriptions, and pricing
- **Shopping Cart**: Add items to cart with quantity management
- **User Reviews**: Rate and review products
- **User Profile**: Manage personal information and view order history
- **Responsive Design**: Mobile-friendly interface

### Admin Features
- **Admin Dashboard**: Comprehensive admin panel for user management
- **User Management**: Ban/unban users, view user statistics
- **Product Management**: Add, edit, and delete products
- **Review Moderation**: Manage user reviews and ratings

### Additional Features
- **Contact System**: Contact form for customer inquiries
- **Wishlist**: Save favorite items for later
- **Multi-language Support**: Ready for internationalization
- **SEO Friendly**: Optimized for search engines

## 🛠️ Technology Stack

- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap
- **Backend**: PHP 7.4+
- **Database**: MySQL/MariaDB
- **Libraries**: 
  - jQuery
  - Font Awesome
  - Bootstrap
  - Slick Carousel
  - SweetAlert
  - Perfect Scrollbar

## 📋 Prerequisites

Before running this project, make sure you have:

- **XAMPP/WAMP/LAMP** (Apache, MySQL, PHP)
- **PHP 7.4 or higher**
- **MySQL 5.7 or higher**
- **Web browser** (Chrome, Firefox, Safari, Edge)

## ⚙️ Installation & Setup

### 1. Clone or Download the Project

```bash
git clone https://github.com/yourusername/malabis-ecommerce.git
cd malabis-ecommerce
```

### 2. Setup Database

1. Start your Apache and MySQL services in XAMPP/WAMP
2. Open phpMyAdmin (usually at `http://localhost/phpmyadmin`)
3. Create a new database named `malabis`
4. Import the database structure:
   - Click on the `malabis` database
   - Go to "Import" tab
   - Choose the `malabis.sql` file from the project root
   - Click "Go" to import

### 3. Configure Database Connection

Update the database configuration in `actions/connection.php`:

```php
<?php
define("HOST", "localhost");
define("DBUSER", "root");
define("DBPASS", ""); // Add your MySQL password if any
define("DBNAME", "malabis");

$conn = mysqli_connect(HOST, DBUSER, DBPASS, DBNAME);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
```

### 4. Setup Web Server

1. Copy the project folder to your web server directory:
   - **XAMPP**: `C:\xampp\htdocs\malabis\`
   - **WAMP**: `C:\wamp64\www\malabis\`
   - **Linux**: `/var/www/html/malabis/`

2. Make sure the `images/` directory has write permissions for product uploads

### 5. Access the Application

Open your web browser and navigate to:
- **Main Site**: `http://localhost/malabis/`
- **Admin Login**: Use an account with `user_status = 1` in the database

## 📁 Project Structure

```
malabis/
├── actions/                    # Backend PHP scripts
│   ├── add-item-action.php    # Add new products
│   ├── add-review-action.php  # Add product reviews
│   ├── ban-action.php         # Admin user management
│   ├── connection.php         # Database connection
│   ├── contact-action.php     # Contact form handler
│   ├── delete-item.php        # Delete products
│   ├── login-action.php       # User authentication
│   ├── logout-action.php      # User logout
│   ├── sign-up-action.php     # User registration
│   └── unban-action.php       # Unban users
├── ban/                       # Admin functionality
│   └── ban.php               # User banning interface
├── css/                       # Stylesheets
│   ├── dashboard.css         # Admin dashboard styles
│   ├── main.css              # Main application styles
│   └── util.css              # Utility styles
├── fonts/                     # Font files and icons
├── images/                    # Product and UI images
├── include/                   # PHP includes
│   ├── footer.php            # Site footer
│   └── header.php            # Site header and navigation
├── js/                        # JavaScript files
│   ├── main.js               # Main JavaScript functionality
│   ├── map-custom.js         # Custom map functionality
│   └── slick-custom.js       # Carousel customization
├── login/                     # Authentication pages
│   ├── login.php             # Login page
│   ├── signup.php            # Registration page
│   └── [assets]              # Login page assets
├── plugins/                   # Third-party plugins
├── vendor/                    # External libraries
├── about.php                  # About page
├── add-item.php              # Add product page
├── add-review.php            # Add review page
├── contact.php               # Contact page
├── dashboard.php             # Admin dashboard
├── index.php                 # Homepage
├── malabis.sql               # Database structure
├── product.php               # Product listing page
├── product-detail.php        # Product details page
├── profile.php               # User profile page
├── shopping-cart.php         # Shopping cart page
└── README.md                 # This file
```

## 🎯 Usage

### For Users
1. **Browse Products**: Visit the homepage and explore different categories
2. **Register/Login**: Create an account or login to existing account
3. **Add to Cart**: Click "Add to Cart" on product pages
4. **Review Products**: Leave reviews and ratings for products
5. **Manage Profile**: Update personal information in the profile section

### For Admins
1. **Access Dashboard**: Login with admin credentials (`user_status = 1`)
2. **Manage Users**: Ban/unban users from the admin dashboard
3. **Add Products**: Use the "Add Item" feature to add new products
4. **Monitor Reviews**: Check and moderate user reviews

## 🔧 Configuration

### Database Configuration
- Host: `localhost`
- Database: `malabis`
- Username: `root`
- Password: (empty by default)

### User Roles
- `user_status = 0`: Regular user
- `user_status = 1`: Admin user
- `user_status = -1`: Banned user

### File Upload Settings
Product images are stored in the `images/` directory. Ensure proper permissions for file uploads.

## 🌐 Publishing to GitHub

### 1. Initialize Git Repository

```bash
cd /path/to/your/project
git init
```

### 2. Create .gitignore

Create a `.gitignore` file to exclude sensitive files:

```gitignore
# Database configuration (sensitive)
actions/connection.php

# Environment files
.env
.env.local

# Uploaded files (optional - you may want to keep sample images)
images/uploads/

# IDE files
.vscode/
.idea/
*.swp
*.swo

# OS files
.DS_Store
Thumbs.db

# Logs
*.log

# Temporary files
tmp/
temp/
```

### 3. Create Repository on GitHub

1. Go to [GitHub](https://github.com)
2. Click "New repository"
3. Name it `malabis-ecommerce` (or your preferred name)
4. Add description: "E-commerce clothing store built with PHP and MySQL"
5. Choose visibility (Public/Private)
6. Don't initialize with README (you already have one)

### 4. Push to GitHub

```bash
# Add all files
git add .

# Commit changes
git commit -m "Initial commit: MALABIS E-commerce website"

# Add remote repository
git remote add origin https://github.com/yourusername/malabis-ecommerce.git

# Push to GitHub
git branch -M main
git push -u origin main
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📝 License

This project is open source and available under the [MIT License](LICENSE).

## 🐛 Known Issues

- Shopping cart functionality needs session persistence
- Payment gateway integration pending
- Email verification system not implemented
- Product image optimization needed

## 🚀 Future Enhancements

- [ ] Payment gateway integration (PayPal, Stripe)
- [ ] Email notification system
- [ ] Inventory management
- [ ] Order tracking system
- [ ] Advanced search and filtering
- [ ] Multi-language support
- [ ] API development for mobile app
- [ ] Performance optimization

## 📞 Support

For support and questions:
- Create an issue on GitHub
- Contact: [your-email@example.com]

## 🙏 Acknowledgments

- Bootstrap for responsive design
- Font Awesome for icons
- jQuery for JavaScript functionality
- All open-source contributors

---

**Made with ❤️ by [Your Name]**

*Last updated: May 2025*
