# Dropseed Child Theme Starter

Dropseed Child Theme Starter is a simple starting point for the development of Wordpress child themes. It includes functions which perform tasks such as cleaning up the Wordpress head and adding favicons. Additionally, it includes practical and some stylistic customizations for the login screen and dashboard.

## Installation

1. Download the package and add the `dist` (src if you want decompressed files) to your `/wp-content/themes` directory.
2. Change the name of the folder to your desired child theme name.
3. In `style.css`, change the `Template:` value to your parent theme's folder name.
4. Add your `screenshot.png` file to your child theme's topmost directory.
5. In `/images/favicons` include favicons generated at [realfavicongenerator](http://realfavicongenerator.net) if desired. If not, you can comment out the favicon implementation in `functions.php` as follows:

    ##### Original:
    ``` php
    $dropseed_includes = [
      'lib/setup.php',    // Theme setup
      'lib/cleanup.php',  // Clean up functions
      'lib/login.php',    // Custom login page
      'lib/dashboard.php',    // Customize dashboard
      'lib/helpers.php',   // Useful helper functions
      'lib/favicons.php'   // Adding favicons
    ];
    ```
    ##### Modified:
    ``` php
    $dropseed_includes = [
      'lib/setup.php',    // Theme setup
      'lib/cleanup.php',  // Clean up functions
      'lib/login.php',    // Custom login page
      'lib/dashboard.php',    // Customize dashboard
      'lib/helpers.php',   // Useful helper functions
      // 'lib/favicons.php'   // Adding favicons
    ];
    ```
    _Note: you can use this same technique to remove any of the other partials included in the functions.php file, and therefore all modifications therein. For example, if you don't need to customize the login page:_

    ##### Original:
    ``` php
    $dropseed_includes = [
      'lib/setup.php',    // Theme setup
      'lib/cleanup.php',  // Clean up functions
      'lib/login.php',    // Custom login page
      'lib/dashboard.php',    // Customize dashboard
      'lib/helpers.php',   // Useful helper functions
      'lib/favicons.php'   // Adding favicons
    ];
    ```
    ##### Modified:
    ``` php
    $dropseed_includes = [
      'lib/setup.php',    // Theme setup
      'lib/cleanup.php',  // Clean up functions
      // 'lib/login.php',    // Custom login page
      'lib/dashboard.php',    // Customize dashboard
      'lib/helpers.php',   // Useful helper functions
      'lib/favicons.php'   // Adding favicons
    ];
    ```

6. In `/login/images/` replace `login-logo.svg` with your login logo.
7. Enjoy!

## Contributing

1. Fork it!
2. Create your feature branch
3. Commit your changes
4. Push to the branch
5. Submit a pull request :D

## Credits

A big thank you to:

  - Eddie Machado [themble/bones](http://themble.com/bones/)
  - Roots [roots.io/sage](https://roots.io/sage/)

## License

The Dropseed Child Theme Starter is licensed under the WTFPL license. For more information, see the LICENSE file in this repository.