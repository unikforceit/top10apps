<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_hosting_slider extends Widget_Base
{

    public function get_name()
    {
        return 'hosting_slider';
    }

    public function get_title()
    {
        return __('Hosting slider', 'top10apps');
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
            'htitle',
            [
                'label' => __( 'Title', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Compare the Best Hosting Services', 'top10apps' ),
            ]
        );

        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'review',
            [
                'label' => __( 'Title', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Review', 'top10apps' ),
            ]
        );
        $this->add_control(
            'slist',
            [
                'label' => __( 'List', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                    [
                        'review' => __( 'Review', 'top10apps' ),
                    ],
                ],
            ]
        );
        $this->end_controls_section();

        $this->start_controls_section(
            'content_section',
            [
                'label' => __('Slider', 'top10apps'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater2 = new \Elementor\Repeater();
        $repeater2->add_control(
            'host_image',
            [
                'label' => __( 'Choose Image', 'ageland' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater2->add_control(
            'host_rating',
            [
                'label' => __( 'Host Rating', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '9.8', 'top10apps' ),
            ]
        );
        $repeater2->add_control(
            'host_btn',
            [
                'label' => __('Host site', 'ageland'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('visit site', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'host_btn_link', [
                'label' => __('Host site link', 'ageland'),
                'type' => Controls_Manager::URL,
                'show_external' => true,
                'default' => [
                    'url' => '#',
                    'is_external' => true,
                    'nofollow' => true,
                ],
            ]
        );
        $repeater2->add_control(
            'service_details',
            [
                'label' => __( 'Details', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'services', 'top10apps' ),
            ]
        );
        $this->add_control(
            'sliderlist',
            [
                'label' => __( 'Slider List', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'service_details' => __( 'Review', 'top10apps' ),
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
        $settings = $this->get_settings_for_display();
//        var_dump($settings['slist']);
        ?>
            <div class="comparison-table__root-element">
                <div class="comparison-table__container">
                    <aside class="comparison-table__sidebar">
                        <section class="comparison-table__first-column">
                            <h2 class="comparison-table__title"><span><?php echo esc_html($settings['htitle']);?></span></h2>
                            <div class="comparison-table__section--container">
                                <?php
                                if($settings['slist']){
                                foreach ($settings['slist'] as $lists){
                                 ?>
                                    <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 33px 0;max-height: 82px;">
                                        <div class="comparison-table__feature-display-name--text"><?php echo esc_html($lists['review']);?></div>
                                    </div>
                               <?php }
                                }
                                ?>
                            </div>
                        </section>
                    </aside>
                    <!-- Start Slider -->
                    <aside class="comparison-table__sidebar comparison-table__sidebar2">
                        <!-- Swiper -->
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                            <?php
                            if($settings['sliderlist']){
                                foreach ($settings['sliderlist'] as $slider){
                                    ?>
                                <div class="swiper-slide">
                                    <div class="comparison-table__first-column">
                                        <div class="comparison-table__title host-site-link">
                                            <div class="host-area">
                                                <span class="host-no">1</span>
                                                <div class="host-img">
                                                    <img class="logo__image" src="https://images.top10.com/f_auto,q_auto/v1/production/products/uploads/photo/Bluehost%20logo%20new.20210323132054.png" alt="BlueHost" title="">
                                                </div>
                                                <div class="host-rating">
                                                    <span>9.8</span>
                                                </div>
                                            </div>
                                            <a class="comparison-table__product--cta" href="#" target="_blank">Visit Site</a>
                                        </div>
                                        <div class="comparison-table__section--container comparison-table__section--container2">
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text rating-area">
                                                    <div class="rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </div>
                                                    <a href="#" class="reviews-count">112 reviews</a>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span>Starting at $2.95</span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span>Unlimited</span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span>Free domain for first year, SSL certificate</span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span>99.99%</span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span>Yes, Weebly, Drupal, etc.</span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 32px 0;max-height: 81px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span>30-day</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php }
                            }
                            ?>
                            </div>
                        </div>
                        <div class="swiper-control">
                            <div class="swiper-button-next">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                            <div class="swiper-button-prev">
                                <i class="fas fa-arrow-left"></i>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>

  <?php  }
}

Plugin::instance()->widgets_manager->register(new top10apps_hosting_slider());
?>