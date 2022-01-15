<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_categories extends Widget_Base
{

    public function get_name()
    {
        return 'top10apps_categories';
    }

    public function get_title()
    {
        return __('Categories', 'top10apps');
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
                'label' => __('Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Best Web Hosting Services', 'top10apps'),
            ]
        );
        $this->add_control(
            'btext',
            [
                'label' => __('Button', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Compare All', 'top10apps'),
            ]
        );
        $this->add_control(
            'blink', [
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'item',
            [
                'label' => __('Item', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('BlueHost', 'top10apps'),
            ]
        );
        $repeater->add_control(
            'img',
            [
                'label' => __( 'Image', 'moda' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
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
                'label' => __('List', 'top10apps'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'item' => __('Time Balanceing', 'top10apps'),
                    ],
                    [
                        'item' => __('Time Balanceing', 'top10apps'),
                    ],
                ],
                'title_field' => '{{{ item }}}',
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'section_settings',
            [
                'label' => __('General', 'top10apps'),
                'tab' => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_control(
            'post_titlea_color',
            [
                'label' => __('Title Color', 'top10apps'),
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
                'label' => __('Title Typography', 'top10apps'),
                'selector' => '{{WRAPPER}} .page__left-sidebar .jump_title',
            ]
        );
        $this->add_control(
            'post_titlea_colodfr',
            [
                'label' => __('Item Color', 'top10apps'),
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
                'label' => __('Item Typography', 'top10apps'),
                'selector' => '{{WRAPPER}} .page__left-sidebar .toc__items .toc__item a',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'backgrouncfbxd',
                'label' => esc_html__('Background', 'top10apps'),
                'types' => ['classic', 'gradient'],
                'selector' => '{{WRAPPER}} .page__left-sidebar',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings();
        echo '<!-- built app area start here  -->
        <div class="categories-shortlist--container">
               <div class="categories-shortlist--header">
                  <h3 class="categories-shortlist--title">'.$settings['title'].'</h3>
                  <a '.get_that_link($settings['blink']).' class="categories-shortlist--all-link categories-shortlist--all-link__header">'.$settings['btext'].'</a>
               </div>
               <div class="categories-shortlist--row categories-shortlist--row__first">
                  <ul class="categories-shortlist--categories">';
                if ($settings['list']) {
                    foreach ($settings['list'] as $scroll) {
                        echo '<li class="categories-shortlist--category">
                                 <a class="categories-shortlist--category__link" '.get_that_link($scroll['link']).'>
                                 '.get_that_image($scroll['img'], 'categories-shortlist--category__icon').'
                                    <span class="categories-shortlist--category__text">'.$scroll['item'].'</span>
                                 </a>
                             </li>';
                    }
                }
                echo '</ul>
               </div>
        </div>

    <!-- built app area end here  -->';

    }
}

Plugin::instance()->widgets_manager->register(new top10apps_categories());