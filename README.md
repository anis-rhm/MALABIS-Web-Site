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



## 🐛 Known Issues

- Shopping cart functionality needs session persistence
- Payment gateway integration pending
- Email verification system not implemented
- Product image optimization needed




*Last updated: May 2025*
