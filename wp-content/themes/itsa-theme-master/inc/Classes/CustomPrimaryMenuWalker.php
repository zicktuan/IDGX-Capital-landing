<?php
/**
 * Custom Walker
 *
 * @author Nguyen Anh Tuan
 * @version 1.0
 * @package Custom Primary Menu Walker
 */

class CustomPrimaryMenuWalker extends Walker_Nav_Menu {

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array|object $args    Additional strings. Actually always an
     * @return void
     */
    public function start_lvl(&$output, $depth = 0, $args = null) {
        if ($depth === 0) {
            if (wp_is_mobile()) {
                $output .= '<ul>';
            } else {
                $output .= '<ul class="dropdown-menu">';
            }
        } elseif ($depth === 1) {
            if (wp_is_mobile()) {
                $output .= '<ul>';
            } else {
                $output .= '<ul class="sub-menu dropdown-menu">';
            }
        } else {
            $output .= '<ul class="sub-menu">';
        }
    }

    /**
     * Start the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  object $item   Menu item data object.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array|object $args    Additional strings. Actually always an
     * @return void
     */
    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $atts = '';

        if ($depth === 0) {
            $classes[] = 'dropdown desktop';
        } elseif ($depth === 1) {
            $classes[] = 'dropdown desktop';
        }

        if ($args->walker->has_children && $depth === 0) {
            $classes[] = 'has-child';
        }

        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        if (wp_is_mobile()) {
            $output .= $indent . '<li>';
        } else {
            $output .= $indent . '<li' . $class_names . '>';
        }

        $atts .= ' class="text-uppercase"';
        !empty($item->attr_title) && $atts .= ' title="' . esc_attr($item->attr_title) . '"';
        !empty($item->target) && $atts .= ' target="' . esc_attr($item->target) . '"';
        !empty($item->xfn) && $atts .= ' rel="' . esc_attr($item->xfn) . '"';
        !empty($item->url) && $atts .= ' href="' . esc_attr($item->url) . '"';

        $title = apply_filters('the_title', $item->title, $item->ID);

        $item_output = $args->before
            . "<a $atts>"
            . $args->link_before
            . $title
            . '</a> '
            . $args->link_after
            . $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    /**
     * End the element output.
     *
     * @param  string $output Passed by reference. Used to append additional content.
     * @param  int $depth     Depth of menu item. May be used for padding.
     * @param  array|object $args    Additional strings. Actually always an
     * @return void
     */
    public function end_lvl(&$output, $depth = 0, $args = null) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul>\n";
    }
}
?>
