<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_ad_block extends Widget_Base
{

    public function get_name()
    {
        return 'top10apps_ad_block';
    }

    public function get_title()
    {
        return __('Ad Block List', 'top10apps');
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
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'info',
            [
                'label' => __('Info', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Adblock PlusThis free extension blocks banners, pop-ups, tracking, and malware, and by default leav...', 'top10apps'),
            ]
        );
        $repeater->add_control(
            'features',
            [
                'label' => __('Features', 'top10apps'),
                'type' => \Elementor\Controls_Manager::WYSIWYG,
                'default' => __('<li>Cost: Free</li>
                                <li>Used by: 100M devices</li>', 'top10apps'),
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
            'btn',
            [
                'label' => __('Button', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Visit Site', 'top10apps'),
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
    <div class="chart__body__products">';
        if ($settings['list']) {
            $index = 0;
            foreach ($settings['list'] as $scroll) {
                $index++;
                echo '<div class="chart-product-text-body">
                <div class="chart-product-text">
                            <div class="product-row">
              <div class="left">
                 <div class="left__info">
                    <div class="index-counter">
                       <div class="index-counter__value">'.$index.'</div>
                       <div class="index-counter__border"></div>
                    </div>
                 </div>
                 <div class="left__container">
                    <div class="logo__container">
                       <div data-role="product-logo-image">
                        '.top10apps_get_that_image($scroll['img'], 'logo__image').'
                       </div>
                    </div>
                 </div>
              </div>
              <div class="before-center"></div>
              <div class="center">
                 <div class="center__header"></div>
                 <div class="bottom-line">'.$scroll['info'].'</div>
                 <ul class="attributes">
                    '.$scroll['features'].'
                 </ul>
              </div>
              <div class="after-center"></div>
              <div class="right">
                 <div class="right__container">
                    <div class="right__CTA-container">
                    <a class="cta-button"  '.top10apps_get_that_link($scroll['link']).'><span class="cta-button__text">'.$scroll['btn'].'</span></a></div>
                 </div>
              </div>
           </div>
           </div>
                    </div>';
            }
        }
        echo '</div>
    <!-- built app area end here  -->';

    }
}

Plugin::instance()->widgets_manager->register(new top10apps_ad_block());