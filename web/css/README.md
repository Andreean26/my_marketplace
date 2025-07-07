# BlueMarket CSS Structure Documentation

## 📁 CSS File Organization

Struktur CSS telah diorganisir untuk memberikan maintainability dan readability yang lebih baik:

### 🎯 Core CSS Files
- `css/site.css` - Yii2 default styles
- `css/marketplace.css` - Global marketplace styles (navbar, footer, etc.)

### 🧩 Component-Based CSS
- `css/components/common.css` - Komponen umum (buttons, titles, utilities)
- `css/components/hero.css` - Hero section dengan search box
- `css/components/categories.css` - Category cards dengan hover effects
- `css/components/products.css` - Product cards dan featured section
- `css/components/stats.css` - Statistics section dengan animasi

## 🎨 Design System

### Color Palette
- **Primary Blue**: `#1e3c72` (Dark Blue)
- **Secondary Blue**: `#2a5298` (Medium Blue)
- **Background**: `#f8faff` (Light Blue)
- **Accent**: `#e3f2fd`, `#bbdefb` (Very Light Blue)

### Components
- **Gradients**: `linear-gradient(135deg, #1e3c72, #2a5298)`
- **Shadows**: `rgba(30,60,114,0.1)` untuk shadow ringan
- **Hover Effects**: Transform `translateY()` dengan shadow enhancement
- **Border Radius**: 15px untuk cards, 25px untuk buttons

### Responsive Breakpoints
- **Mobile**: max-width: 576px
- **Tablet**: max-width: 768px
- **Desktop**: 769px and above

## 🔧 Usage Guidelines

### Loading CSS Files
CSS files dimuat melalui `AppAsset.php` dengan urutan:
1. Core styles terlebih dahulu
2. Common components
3. Specific components (hero, categories, products, stats)

### Best Practices
- Gunakan CSS variables untuk konsistensi warna
- Implementasi BEM methodology untuk naming
- Optimize untuk performance dengan minifikasi
- Test responsive design di berbagai device

## 🚀 Performance Notes
- CSS dipisah berdasarkan komponen untuk memudahkan lazy loading
- Animasi menggunakan CSS transform untuk better performance
- Media queries dioptimasi untuk berbagai screen size
