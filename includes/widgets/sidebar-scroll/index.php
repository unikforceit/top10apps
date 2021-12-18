<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_sidebar_scroll extends Widget_Base
{

    public function get_name()
    {
        return 'sidebar_scroll';
    }

    public function get_title()
    {
        return __('Sidebar Scroll', 'moda');
    }

    public function get_icon()
    {
        return 'eicon-form-horizontal';
    }

    public function get_categories()
    {
        return ['top10apps-addons'];
    }

    protected function _register_controls()
    {

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Content', 'moda'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'scroll_title',
            [
                'label' => __( 'Scroll Title', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Jump to', 'landzai' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'scroll_item',
            [
                'label' => __( 'Scroll Item', 'landzai' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'In a Nutshell', 'landzai' ),
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __('Link', 'landzai'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $this->add_control(
            'scroll_list',
            [
                'label' => __( 'Scroll List', 'landzai' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'scroll_item' => __( 'Time Balanceing', 'landzai' ),
                    ],
                    [
                        'scroll_item' => __( 'Time Balanceing', 'landzai' ),
                    ],
                ],
                'title_field' => '{{{ scroll_item }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_settings',
            [
                'label' => __( 'General', 'landzai' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_titlea_color',
            [
                'label' => __( 'Title Color', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page__left-sidebar .jump_title' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Title Typography', 'landzai' ),
                'selector' => '{{WRAPPER}} .page__left-sidebar .jump_title',
            ]
        );
        $this->add_control(
            'post_titlea_colodfr',
            [
                'label' => __( 'Item Color', 'landzai' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page__left-sidebar ul li a' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttsdfih',
                'label' => __( 'Item Typography', 'landzai' ),
                'selector' => '{{WRAPPER}} .page__left-sidebar ul li a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Border::get_type(),
            [
                'name' => 'border',
                'label' => esc_html__( 'Border', 'landzai' ),
                'selector' => '{{WRAPPER}} .page__left-sidebar .jump_title:after',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'backgrouncfbxd',
                'label' => esc_html__( 'Background', 'landzai' ),
                'types' => [ 'classic' ],
                'selector' => '{{WRAPPER}} .page__left-sidebar ul',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings();
        echo '<!-- built app area start here  -->
        <section class="page__left-sidebar">
            <ul class="jumpto">
                <span class="jump_title">'.$settings['scroll_title'].'</span>';
            if ($settings['scroll_list']) {
                foreach ($settings['scroll_list'] as $scroll) {
                    echo '<li><a href="#">'.$scroll['scroll_item'].'</a></li>';
                }
            }
        echo '</ul>
        </section>
    <!-- built app area end here  -->';

    }
}

Plugin::instance()->widgets_manager->register(new top10apps_sidebar_scroll());