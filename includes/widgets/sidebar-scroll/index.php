<?php
namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_sidebar_scroll extends Widget_Base {

    public function get_name() {
        return 'sidebar_scroll';
    }

    public function get_title() {
        return __('Sidebar Scroll', 'moda');
    }

    public function get_icon() {
        return 'eicon-form-horizontal';
    }

    public function get_categories() {
        return ['top10apps-addons'];
    }

    protected function _register_controls() {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __( 'Content', 'moda' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title Left', 'moda' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Who We Are', 'moda' ),
            ]
        );
        $this->end_controls_section();

    }

    protected function render(){
        $settings = $this->get_settings();
        echo '<h2 class="top10apps">'.$settings['title'].'</h2>';

    }
}
Plugin::instance()->widgets_manager->register( new top10apps_sidebar_scroll() );