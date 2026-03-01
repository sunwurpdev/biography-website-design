# BioGraph - Professional Biography Website

A modern, responsive biography website template built with **Tailwind CSS 4.2.1** and vanilla JavaScript. Perfect for developers, creatives, and professionals who want to showcase their portfolio and skills with a sleek, professional design.

![Version](https://img.shields.io/badge/version-1.0.0-blue)
![License](https://img.shields.io/badge/license-ISC-green)
![Tailwind CSS](https://img.shields.io/badge/Tailwind%20CSS-4.2.1-06B6D4)

## ✨ Features

- **Fully Responsive Design** - Works seamlessly on mobile, tablet, and desktop devices
- **Dark/Light Theme Toggle** - Persistent theme preference with localStorage
- **Modern UI Components** - Beautiful gradients, shadows, and animations
- **Smooth Scrolling Navigation** - Enhanced user experience with smooth transitions
- **Contact Information Cards** - Easy-to-copy contact details with one-click functionality
- **Custom Scrollbar Styling** - Matches the overall design aesthetic
- **Performance Optimized** - Lightweight and fast-loading
- **SEO Friendly** - Semantic HTML structure
- **Accessibility Focused** - ARIA labels and keyboard navigation support

## 🛠️ Tech Stack

- **HTML5** - Semantic markup
- **CSS3** - Tailwind CSS framework with custom styling
- **JavaScript (Vanilla)** - No frameworks, pure ES6+
- **PHP** - For dynamic content rendering
- **Google Fonts** - Quicksand font family
- **Git** - Version control

## 📁 Project Structure

```
biography-website-design/
├── index.php                 # Main website file
├── assets/
│   └── css/
│       ├── site.css         # Compiled Tailwind CSS
│       └── app.css          # Custom CSS imports
├── package.json             # NPM dependencies
├── tailwind.css-starter.bat # Development build script
├── .gitignore               # Git ignore rules
├── LICENSE                  # ISC License
└── README.md               # This file
```

## 🚀 Getting Started

### Prerequisites

- **Node.js** (v14 or higher) - For Tailwind CSS compilation
- **Modern Web Browser** - Chrome, Firefox, Safari, or Edge
- **Code Editor** - VS Code, Sublime, or any text editor

### Installation

1. **Clone the Repository**
   ```bash
   git clone https://github.com/sunwurpdev/biography-website-design.git
   cd biography-website-design
   ```

2. **Install Dependencies**
   ```bash
   npm install
   ```

3. **Build Tailwind CSS** (if making style changes)
   ```bash
   # On Windows
   .\tailwind.css-starter.bat
   
   # On macOS/Linux
   npx tailwindcss -i ./assets/css/app.css -o ./assets/css/site.css --watch
   ```

4. **Serve the Website**
   - Using a local server (recommended):
     ```bash
     # Python 3
     python -m http.server 8000
     
     # Python 2
     python -m SimpleHTTPServer 8000
     
     # Node.js (http-server)
     npx http-server
     ```
   - Or use any PHP server, XAMPP, Laragon, etc.

5. **Open in Browser**
   ```
   http://localhost:8000
   ```

## 📝 Usage

### Customizing Your Information

Edit the following sections in `index.php`:

**Profile Name & Title:**
```html
<h1 class="mt-5 text-4xl font-bold leading-tight sm:text-5xl lg:text-6xl">
    Hello, I'm
    <span class="bg-gradient-to-r from-cyan-400 via-sky-400 to-indigo-400 bg-clip-text text-transparent">
        John Doe  <!-- Change your name here -->
    </span>
</h1>
```

**About Section:**
```html
<p class="text-base leading-8 text-slate-600 dark:text-slate-300 sm:text-lg">
    My journey in software development started with a passion for building elegant and practical web experiences.
    <!-- Update your bio here -->
</p>
```

**Skills:**
```php
<?php
$skills = ['PHP', 'Tailwind CSS', 'JavaScript', 'MySQL', 'Laravel', 'Responsive Design', 'UI/UX', 'API Integration'];
foreach ($skills as $skill) {
    echo '<span class="...">'. $skill .'</span>';
}
?>
```

**Contact Information:**
- Email: `johndoe@example.com`
- Phone: `+44 7700 100200`
- Location: `Manchester, United Kingdom`
- Website: `www.johndoe.dev`

Update these values in the contact section.

### Adding Sections

To add new sections, follow this structure:

```html
<section id="section-name" class="mt-20 sm:mt-24">
    <div class="mb-8">
        <p class="text-xs font-bold uppercase tracking-[0.3em] text-cyan-600 dark:text-cyan-400 sm:text-sm">
            Section Label
        </p>
        <h2 class="mt-2 text-2xl font-bold sm:text-3xl">Section Title</h2>
    </div>
    
    <!-- Your content here -->
</section>
```

## 🎨 Customization

### Changing Colors

Tailwind CSS utilities are used throughout. To customize colors:

1. Edit `assets/css/app.css`
2. Modify the Tailwind config
3. Rebuild CSS:
   ```bash
   npm run build
   ```

Common color classes:
- `bg-cyan-500` - Background color
- `text-cyan-600` - Text color
- `border-cyan-400` - Border color
- `from-cyan-400` - Gradient start

### Modifying Fonts

Default font: **Quicksand** from Google Fonts

To change fonts:
1. Update the Google Fonts link in `<head>`
2. Modify the `font-[Quicksand]` class in styles

### Theme Customization

The website supports light and dark themes. Toggle is located in the header. Preferences are saved to localStorage.

## 🌐 Browser Support

| Browser | Support | Version |
|---------|---------|---------|
| Chrome | ✅ Full | Latest |
| Firefox | ✅ Full | Latest |
| Safari | ✅ Full | 14+ |
| Edge | ✅ Full | Latest |
| IE 11 | ❌ Not Supported | - |

## ⚡ Performance

- **Lightweight** - No heavy dependencies
- **Fast Loading** - Optimized CSS and JavaScript
- **Mobile Optimized** - Responsive images and mobile-first design
- **SEO Friendly** - Semantic HTML structure

### Performance Metrics
- Page Size: < 100KB
- Load Time: < 2 seconds (on average connection)
- Lighthouse Score: 90+

## 🔧 Development

### Making Changes

1. **Edit HTML Structure** - Modify `index.php`
2. **Update Styles** - Edit `assets/css/app.css`
3. **Add Scripts** - Add to `<script>` section in `index.php`

### Building for Production

```bash
npx tailwindcss -i ./assets/css/app.css -o ./assets/css/site.css --minify
```

## 📦 Dependencies

```json
{
  "@tailwindcss/cli": "^4.2.1",
  "tailwindcss": "^4.2.1"
}
```

## 🤝 Contributing

Contributions are welcome! To contribute:

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## 📄 License

This project is licensed under the **ISC License** - see the [LICENSE](LICENSE) file for details.

## 👤 Author

**Sunwurpdev**

- GitHub: [@sunwurpdev](https://github.com/sunwurpdev)
- Repository: [biography-website-design](https://github.com/sunwurpdev/biography-website-design)

## 📧 Contact & Support

For questions, issues, or suggestions:

- Open an issue on GitHub
- Check existing documentation
- Review the code comments

## 🙏 Acknowledgments

- [Tailwind CSS](https://tailwindcss.com) - Utility-first CSS framework
- [Google Fonts](https://fonts.google.com) - Typography
- [Unsplash](https://unsplash.com) - Free images

## 📈 Roadmap

- [ ] Add portfolio/projects showcase section
- [ ] Implement blog/articles section
- [ ] Add contact form with email integration
- [ ] Social media links integration
- [ ] Multi-language support
- [ ] SEO meta tags optimization
- [ ] Analytics integration

## 💡 Tips & Best Practices

1. **Keep it Updated** - Update information regularly
2. **Use High-Quality Images** - Profile photos matter
3. **Mobile First** - Always test on mobile devices
4. **Performance** - Optimize images and minimize CSS
5. **Accessibility** - Use proper semantic HTML
6. **SEO** - Update meta tags and content
7. **Backup** - Keep regular backups of your data

## 🔒 Security

- No sensitive information stored locally
- HTTPS recommended for production
- Regular updates for dependencies
- No external API calls that expose user data

---

**Last Updated:** March 1, 2026

**Version:** 1.0.0

Made with ❤️ by [Sunwurpdev](https://github.com/sunwurpdev)
