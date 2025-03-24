<?php
    namespace MyPlugin\Shortcode\Home;

    use MyPlugin\Shortcode\AbstractShortcode;

    class ShortcodeSectionOne extends AbstractShortcode
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
            return 'itsa_section_1';
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

            ob_start();
            include $this->parent->locateTemplate('home/shortcode-section-one.tpl.php');
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
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_section_1_background',
                    'heading'    => esc_html__('Background', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_1_slogan',
                    'heading'    => esc_html__('Slogan', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_1_text_title',
                    'heading'    => esc_html__('Text title', 'bookawesome')
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_section_1_logo',
                    'heading'    => esc_html__('Logo', 'bookawesome')
                ),
                array(
                    'type'       => 'attach_image',
                    'param_name' => 'itsa_section_1_logo_2',
                    'heading'    => esc_html__('Logo IDG', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_1_time',
                    'heading'    => esc_html__('Thời gian tổ chức', 'bookawesome')
                ),
                array(
                    'type'       => 'textfield',
                    'param_name' => 'itsa_section_1_year',
                    'heading'    => esc_html__('Năm tổ chức', 'bookawesome')
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'itsa_section_1_location',
                    'heading'    => esc_html__('Địa chỉ', 'bookawesome'),
                ),
                array(
                    'type'       => 'textarea',
                    'param_name' => 'itsa_section_1_province',
                    'heading'    => esc_html__('Province', 'bookawesome'),
                ),
                // array(
                //     'type'       => 'textfield',
                //     'param_name' => 'itsa_home_about_url',
                //     'heading'    => esc_html__('Đường dẫn', 'bookawesome')
                // )
            );

            return array(
                'name'        => esc_html__('Section 1', 'bookawesome'),
                'description' => esc_html__('Home', 'bookawesome'),
                'category'    => $this->get_category(),
                'icon'        => $this->get_icon(),
                'params'      => $params
            );
        }
    }
