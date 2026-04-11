# Tanvir Block

A WordPress plugin that adds three custom Gutenberg blocks to the block editor and Site Editor.

**Plugin URI:** https://github.com/1mdalamin1/Tanvir-Block
**Author:** [1mdalamin1](https://profiles.wordpress.org/1mdalamin1/)
**License:** GPL-2.0-or-later

---

## Blocks Included

### My Icon/Image Block (`tanvir-blocks/my-icon-img`)
Insert any SVG icon or image into your content with full controls.

- 296+ built-in WordPress SVG icons, including social logos
- Use any custom SVG icon or graphic
- Insert images from the Media Library
- Controls for size, link, rotate, flip, alignment, color, border, padding, and margin
- Optional text description alongside the icon
- Fully compatible with the Site Editor

### My CTA Block (`tanvir-blocks/my-cta`)
A customizable Call To Action block with title, description, button, and optional background image. All content is editable directly in the editor.

### My Contact Block (`tanvir-blocks/my-contact`)
A Contact block with a customizable title, description, and button. Ideal for contact pages or sidebars.

---

## Requirements

- WordPress 6.5+
- PHP 7.4+
- Node.js 20+ and npm 10+ (for development only)

---

## Installation

1. Upload the `tanvir-block` folder to `/wp-content/plugins/`.
2. Activate the plugin in the **Plugins** screen in WordPress.
3. Open any post, page, or the Site Editor and search for "Icon", "CTA", or "Contact" in the block inserter.

---

## Development

Clone the repository and install dependencies:

```shell
git clone https://github.com/1mdalamin1/Tanvir-Block.git
cd tanvir-block
npm install
```

Available commands:

```shell
# Start development build with file watcher
npm start

# Build for production
npm run build

# Format files
npm run format

# Lint CSS
npm run lint:css

# Lint JavaScript
npm run lint:js

# Create a plugin zip for distribution
npm run plugin-zip

# Update WordPress packages
npm run packages-update
```

---

## Privacy

This plugin does not collect, store, or transmit any user data to external services. All block content is stored in your WordPress database only.

---

## Changelog

### 0.1.0
- Initial release. Includes My Icon/Image, My CTA, and My Contact blocks.
