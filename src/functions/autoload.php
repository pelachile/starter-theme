<?php
/**
 * Description
 *
 * @package CCWP
 * @since 0.0.1
 * @author cory
 * @link https://corymoore.com
 * @license GNU General Public License 2.0+
 * Date: 5/5/18
 * Time: 9:38 PM
 */

namespace CCWP;
// Sets up the Theme.
require_once CHILD_THEME_DIR . '/config/theme-defaults.php';

// Adds helper functions.
require_once  CHILD_THEME_DIR . '/src/functions/helper-functions.php';

// Adds image upload and color select to Customizer.
require_once CHILD_THEME_DIR . '/src/components/customizer/customize.php';

// Includes Customizer CSS.
require_once CHILD_THEME_DIR . '/src/components/customizer/output.php';


require_once CHILD_THEME_DIR . '/src/structure/header.php';

require_once CHILD_THEME_DIR . '/src/structure/navigation.php';

require_once CHILD_THEME_DIR . '/src/structure/post.php';

require_once CHILD_THEME_DIR . '/src/structure/comments.php';

require_once CHILD_THEME_DIR . '/src/structure/footer.php';


// Adds WooCommerce support.
require_once CHILD_THEME_DIR . '/lib/woocommerce/woocommerce-setup.php';

// Adds the required WooCommerce styles and Customizer CSS.
require_once CHILD_THEME_DIR . '/lib/woocommerce/woocommerce-output.php';

// Adds the Genesis Connect WooCommerce notice.
require_once CHILD_THEME_DIR . '/lib/woocommerce/woocommerce-notice.php';

require_once CHILD_THEME_DIR . '/src/setup.php';

require_once CHILD_THEME_DIR . '/src/functions/load-assets.php';
