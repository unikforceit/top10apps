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
        return __('Sidebar Scroll', 'top10apps');
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
                'label' => __('Content', 'top10apps'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'title',
            [
                'label' => __( 'Title', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Jump to', 'top10apps' ),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'scroll_item',
            [
                'label' => __( 'Item', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'In a Nutshell', 'top10apps' ),
            ]
        );
        $repeater->add_control(
            'link', [
                'label' => __('Link', 'top10apps'),
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
            'list',
            [
                'label' => __( 'List', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item' => __( 'Time Balanceing', 'top10apps' ),
                    ],
                    [
                        'item' => __( 'Time Balanceing', 'top10apps' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_settings',
            [
                'label' => __( 'General', 'top10apps' ),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_titlea_color',
            [
                'label' => __( 'Title Color', 'top10apps' ),
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
                'label' => __( 'Title Typography', 'top10apps' ),
                'selector' => '{{WRAPPER}} .page__left-sidebar .jump_title',
            ]
        );
        $this->add_control(
            'post_titlea_colodfr',
            [
                'label' => __( 'Item Color', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .page__left-sidebar .toc__items .toc__item a' => 'color: {{VALUE}}; border-color: {{VALUE}}',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttsdfih',
                'label' => __( 'Item Typography', 'top10apps' ),
                'selector' => '{{WRAPPER}} .page__left-sidebar .toc__items .toc__item a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'backgrouncfbxd',
                'label' => esc_html__( 'Background', 'top10apps' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .page__left-sidebar',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings();
        echo '<!-- built app area start here  -->
        <div class="page__left-sidebar">
        <p class="jump_title">'.$settings['title'].'</p>
            <div class="toc__items">';
            if ($settings['list']) {
                foreach ($settings['list'] as $scroll) {
                    echo '<div class="toc__item"><a '.get_that_link($scroll['link']).'>'.$scroll['item'].'</a></div>';
                }
            }
        echo '</div>
        </div>
    <!-- built app area end here  -->';

    }
}

Plugin::instance()->widgets_manager->register(new top10apps_sidebar_scroll());