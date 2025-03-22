<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeSectiontwo extends AbstractShortcode
    {
        protected $parent;
        public function __construct($self = null) {
            $this->parent = $self;
            add_shortcode($this->get_name(), array($this, 'render'));
            vc_lean_map($this->get_name(), array($this, 'map'));
        }

        /**
         * Get ShortCode name.
         *
         * @return string
         */
        public function get_name() {
            return 'itsa_section_2';
        }

        /**
         * ShortCode handler.
         *
         * @param array $atts ShortCode attributes.
         *
         * @return string ShortCode output.
         */
        public function render($atts) {
            $atts = vc_map_get_attributes($this->get_name(), $atts);
            $atts = array_map('trim', $atts);

            $listItems = vc_param_group_parse_atts( $atts['items'] );

            ob_start();
            include $this->parent->locateTemplate('home/shortcode-section-two.tpl.php');
            return ob_get_clean();
        }

        /**
         * Get shortCode settings.
         *
         * @return array
         *
         * @see vc_lean_map()
         */
        public function map() {
            $params = array(
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_2_url_contact_us',
                    'heading'    => esc_html__('Url Contact Us', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_2_url_register',
                    'heading'    => esc_html__('Url Register', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_2_title',
                    'heading'    => esc_html__('Text Past Event', 'bookawesome')
                ),
                array(
                    'type'       => 'param_group',
                    'param_name' => 'items',
                    'heading'    => esc_html__( 'Danh sách event', 'bookawesome' ),
                    'params'     => array(
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'year',
                            'heading'    => esc_html__('Năm', 'bookawesome')
                        ),
                        array(
                            'type'       => 'textfield',
                            'param_name' => 'url',
                            'heading'    => esc_html__('Link', 'bookawesome')
                        )
                    )
                ),
            );

            return array(
                'name'        => esc_html__('Section 2', 'bookawesome'),
                'description' => esc_html__('Home', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
