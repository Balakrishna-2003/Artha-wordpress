<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>
      Artha Hospitality Management | Hospitality Consultancy in Mangalore
    </title>
    <meta
      name="description"
      content="Artha Hospitality Management offers hospitality business support across planning, location selection, outlet and kitchen design, civil work, interiors, staffing and operational quality."
    />
    <meta
      property="og:title"
      content="Artha Hospitality Management | Hospitality Consultancy in Mangalore"
    />
    <meta
      property="og:description"
      content="From strategic planning and location selection to outlet design, operations and service quality, Artha helps hospitality businesses turn ideas into successful, sustainable ventures."
    />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/og-image.jpg" />
    <meta property="og:locale" content="en_IN" />
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/favicon.png" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=DM+Serif+Display:ital@0;1&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome for icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "ProfessionalService",
        "name": "Artha Hospitality Management",
        "description": "Hospitality management consultancy supporting restaurants, hotels and pub/resto bars across planning, design, development and operations.",
        "telephone": ["+918951511234", "+919980447824", "+91000000000"],
        "email": "Artha.hm26@gmail.com",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "T-14, 3rd Floor, Meridian Guru Plaza, Bijai",
          "addressLocality": "Mangalore",
          "postalCode": "575004",
          "addressCountry": "IN"
        },
        "areaServed": "India",
        "knowsAbout": [
          "Hospitality management",
          "Restaurant consultancy",
          "Hotel operations",
          "Kitchen design"
        ]
      }
    </script>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/assets/css/style.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <!-- TOP HIRING ANNOUNCEMENT STRIP -->
    <div class="hiring-strip" role="region" aria-label="Hiring announcement">
      <div class="hiring-strip-inner">
        <span class="hiring-badge">WE ARE HIRING</span>
        <span class="hiring-text"
          >— Hotel Jobs in Mangalore &amp; Karnataka | Chefs, Front Office,
          Housekeeping, F&amp;B Service |</span
        >
        <a href="<?php echo home_url('/careers'); ?>" class="hiring-cta">Apply Now &rarr;</a>
      </div>
    </div>

    <!-- HEADER -->
    <header id="site-header">
      <div class="wrap nav">
        <a
          href="<?php echo esc_url( home_url( '/' ) ); ?>"
          class="logo"
          aria-label="Artha Hospitality Management home"
        >
          <figure class="cr-figure">
            <img
              src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/artha-hospitality-management-logo.png"
              alt="Artha Hospitality Management Logo"
              class="brand-logo"
            />
            <figcaption class="cr-only">
              Artha Hospitality Management Logo
            </figcaption>
          </figure>
        </a>
       <?php
/* =============================================================
 * Build the Primary menu tree once (parents + children)
 * ============================================================= */
$locations = get_nav_menu_locations();
$menu_id   = isset( $locations['primary'] ) ? $locations['primary'] : 0;
$items     = $menu_id ? wp_get_nav_menu_items( $menu_id ) : array();

$menu_tree = array();   // top-level parents, keyed by ID
$children  = array();   // children grouped by parent ID

foreach ( (array) $items as $item ) {
    // Skip the CTA — Get in Touch is rendered statically below
    if ( in_array( 'nav-cta', (array) $item->classes, true ) ) {
        continue;
    }
    if ( 0 == $item->menu_item_parent ) {
        $menu_tree[ $item->ID ] = $item;
    } else {
        $children[ $item->menu_item_parent ][] = $item;
    }
}

/* ---------- Helpers ---------- */

/* Icon from "fa-xxx" CSS class → <i class="fas fa-xxx"></i> */
if ( ! function_exists( 'artha_icon_from_classes' ) ) {
    function artha_icon_from_classes( $classes ) {
        foreach ( (array) $classes as $class ) {
            if ( 0 === strpos( $class, 'fa-' ) ) {
                return '<i class="fas ' . esc_attr( $class ) . '"></i> ';
            }
        }
        return '';
    }
}

/* Active state checking Page ID, Slug, and Front Page */
if ( ! function_exists( 'artha_is_item_active' ) ) {
    function artha_is_item_active( $item ) {
        // 1. Match by Page ID (Most reliable)
        $current_id = get_queried_object_id();
        if ( ! empty( $item->object_id ) && (int) $item->object_id === (int) $current_id ) {
            return true;
        }

        // 2. Match by Slug (For Custom Links)
        $current_obj  = get_queried_object();
        $current_slug = isset( $current_obj->post_name ) ? $current_obj->post_name : '';
        
        if ( ! empty( $current_slug ) ) {
            $item_path = parse_url( $item->url, PHP_URL_PATH );
            $item_slug = basename( untrailingslashit( $item_path ) );
            if ( ! empty( $item_slug ) && $item_slug === $current_slug ) {
                return true;
            }
        }

        // 3. EXPLICIT FRONT PAGE CHECK
        if ( is_front_page() ) {
            // A. Check if the URL matches the home URL exactly
            $home_url = untrailingslashit( home_url() );
            $item_url = untrailingslashit( $item->url );
            if ( $home_url === $item_url ) {
                return true;
            }

            // B. Check if the path is just '/' or empty
            $item_path = parse_url( $item->url, PHP_URL_PATH );
            // if ( empty( $item_path ) || $item_path === '/' ) {
            //     return true;
            // }
            // if(is_front_page()){
            //     return true;
            // }
            // 2. Ignore empty URLs or anchor links like "#services"
if ( empty( $item->url ) || '#' === substr( trim( $item->url ), 0, 1 ) ) {
    return false;
}

            

            // C. Fallback: If the item title is "Home" (covers custom links like # or index.html)
            // if ( strtolower( trim( $item->title ) ) === 'home' ) {
            //     return true;
            // }
        }

        return false;
    }
}

/* Render a DROPDOWN CHILD title as HTML. */
if ( ! function_exists( 'artha_menu_item_title_html' ) ) {
    function artha_menu_item_title_html( $item ) {
        $title = wp_kses_post( $item->title );
        if ( false === strpos( $title, '<i' ) ) {
            $title = artha_icon_from_classes( $item->classes ) . $title;
        }
        return $title;
    }
}
?>

<!-- ============================== DESKTOP NAV ============================== -->
<nav class="nav-links" aria-label="Primary">

<?php foreach ( $menu_tree as $parent ) :

    $has_children    = ! empty( $children[ $parent->ID ] );
    
    // Check if parent is active (Passing the whole object)
    $is_active = artha_is_item_active( $parent );

    // If parent is not active, check if any of its children are active
    if ( ! $is_active && $has_children ) {
        foreach ( $children[ $parent->ID ] as $child ) {
            if ( artha_is_item_active( $child ) ) {
                $is_active = true;
                break;
            }
        }
    }

    $link_class_attr = $is_active ? ' class="active"' : '';

    if ( $has_children ) : ?>

        <div class="nav-item-dropdown">
            <a href="<?php echo esc_url( $parent->url ); ?>"<?php echo $link_class_attr; ?>>
                <?php echo esc_html( $parent->title ); ?>
                <i class="fas fa-chevron-down"></i>
            </a>
            <div class="dropdown-menu">
                <?php foreach ( $children[ $parent->ID ] as $child ) : ?>
                    <a href="<?php echo esc_url( $child->url ); ?>">
                        <?php echo artha_menu_item_title_html( $child ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    <?php else : ?>

        <a href="<?php echo esc_url( $parent->url ); ?>"<?php echo $link_class_attr; ?>>
            <?php echo esc_html( $parent->title ); ?>
        </a>

    <?php endif; ?>

<?php endforeach; ?>

    <!-- Static Get in Touch (desktop) -->
    <a href="" class="nav-cta">Get in Touch</a>
</nav>

<button
    class="menu-toggle"
    id="menuToggle"
    aria-label="Toggle menu"
    aria-expanded="false"
    aria-controls="mobileMenu"
>
    <span></span><span></span><span></span>
</button>
</div>
</header>

<!-- ============================== MOBILE MENU ============================== -->
<div
    class="mobile-menu"
    id="mobileMenu"
    role="dialog"
    aria-label="Mobile navigation"
>

<?php foreach ( $menu_tree as $parent ) :

    $has_children    = ! empty( $children[ $parent->ID ] );
    
    // Check if parent is active
    $is_active = artha_is_item_active( $parent );

    // Check if any children are active
    if ( ! $is_active && $has_children ) {
        foreach ( $children[ $parent->ID ] as $child ) {
            if ( artha_is_item_active( $child ) ) {
                $is_active = true;
                break;
            }
        }
    }

    $link_class_attr = $is_active ? ' class="active"' : '';

    if ( $has_children ) : ?>

        <details class="mobile-dropdown">
            <summary><?php echo esc_html( $parent->title ); ?></summary>
            <div class="mobile-sub-links">
                <?php foreach ( $children[ $parent->ID ] as $child ) : ?>
                    <a href="<?php echo esc_url( $child->url ); ?>">
                        <?php echo artha_menu_item_title_html( $child ); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </details>

    <?php else : ?>

        <a href="<?php echo esc_url( $parent->url ); ?>"<?php echo $link_class_attr; ?>>
            <?php echo esc_html( $parent->title ); ?>
        </a>

    <?php endif; ?>

<?php endforeach; ?>

    <!-- Static Get in Touch (mobile) -->
    <a href="" class="btn btn-primary">Get in Touch</a>
</div>