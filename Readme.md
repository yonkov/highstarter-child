## Highstarter Child

A starter child theme that is configured to work with Webpack to provide a modern development experience. Webpack is a module bundler that provides multiple performance optimizations. It lets you use js modules, preprocesses scss and js files and allows minification and concatenation of assets. It can also automatically refresh the page when new code is added. It uses the [@wordpress/scripts](https://developer.wordpress.org/block-editor/reference-guides/packages/packages-scripts/) npm package. The scss and js files from the `src` folder are minified and compiled automatically into the `build` folder. Use this theme to make theme customizations while keeping parent theme's updates. 
For more information about what is a child theme and why you may need it, refer to the [WordPress Theme Developer Handbook](https://developer.wordpress.org/themes/advanced-topics/child-themes/).

## Installation

Download this folder, unzip it and upload it to the *themes* folder in your wordpress installation. 
You can also install it via the WordPress dashboard (appearance=> themes => upload a theme).

## Development

Install node.js and npm, then run `npm i`. To enter development mode run `npm run start`. To prepare a production build run `npm run build`. To format js files run `npm run format:js`