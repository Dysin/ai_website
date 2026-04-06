# DJI-Style E-Commerce WordPress Theme

A modern, responsive WordPress e-commerce theme inspired by DJI Store. Built with clean code, no page builders, and optimized for performance.

## Features

- **Modern Design**: Clean, minimalist aesthetic with DJI Store-inspired styling
- **Fully Responsive**: Mobile-first approach with seamless experience across devices
- **Custom Product System**: Built-in product post type and categories (WooCommerce-ready)
- **Interactive Components**:
  - Hero slider with auto-play and touch support
  - Product cards with hover effects and quick actions
  - Category grid with icons
  - Search overlay
  - Scroll animations
- **WordPress Best Practices**: Custom post types, taxonomies, meta boxes
- **Performance Optimized**: Lazy loading images, CSS variables, minimal JS

## Installation

1. Clone the repository:
```bash
git clone git@github.com:Dysin/ai_website.git
```

2. Copy the theme to your WordPress installation:
```bash
cp -r wp-content/themes/dji-store-theme /path/to/wordpress/wp-content/themes/
```

3. Activate the theme in WordPress Admin > Appearance > Themes

4. Create a blank page named "Home" and set it as the static front page in Settings > Reading

5. Create a blank page named "Products" for the products archive

## Theme Structure

```
dji-store-theme/
├── style.css          # Main stylesheet with CSS variables
├── functions.php      # Theme setup, post types, meta boxes
├── header.php         # Header template
├── footer.php         # Footer template
├── front-page.php     # Homepage template
├── index.php          # Main blog/index fallback
├── single-product.php # Product detail page
├── archive-product.php # Products listing page
├── page.php           # Generic page template
├── css/
│   └── custom.css     # (reserved for additional styles)
├── js/
│   └── main.js        # Interactive components
└── assets/
    ├── images/        # Theme images
    └── icons/         # SVG icons
```

## Custom Post Types

### Products
- Slug: `/products/`
- Supports: title, editor, thumbnail, excerpt, custom fields
- Has archive page at `/products/`

### Product Categories
- Slug: `/product-category/`
- Hierarchical taxonomy for products

## Product Meta Fields

- `_price` - Regular price
- `_sale_price` - Sale price
- `_sku` - Product SKU
- `_stock` - Stock quantity

## Development

The theme uses:
- CSS Variables for theming
- Native JavaScript (no jQuery)
- Lucide-style inline SVG icons
- Google Fonts (Inter, DM Sans)

## Future Enhancements

- [ ] WooCommerce integration
- [ ] Mobile hamburger menu
- [ ] Cart sidebar drawer
- [ ] Search results page
- [ ] Product quick view modal
- [ ] Wishlist functionality
- [ ] Age verification popup
- [ ] Multi-language support (WPML)

## License

GNU General Public License v2 or later
