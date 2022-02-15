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
                'default' => __( 'Reviews', 'top10apps' ),
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
            'rating_number',
            [
                'label' => __( 'Rating', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::NUMBER,
                'default' => 3,
            ]
        );
        $repeater2->add_control(
            'review_btn',
            [
                'label' => __('Review number', 'ageland'),
                'type' => Controls_Manager::TEXTAREA,
                'default' => __('112 reviews', 'ageland'),
            ]
        );
        $repeater2->add_control(
            'review_btn_link', [
                'label' => __('Review page link', 'ageland'),
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
            'hosting_price',
            [
                'label' => __( 'Price per month', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Starting at $2.95', 'top10apps' ),
            ]
        );
        $repeater2->add_control(
            'hosting_bandwidth',
            [
                'label' => __( 'Bandwidth', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Unlimited', 'top10apps' ),
            ]
        );
        $repeater2->add_control(
            'hosting_offer',
            [
                'label' => __( 'Special offer', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Free domain for first year, SSL, certificate', 'top10apps' ),
            ]
        );
        $repeater2->add_control(
            'hosting_uptime',
            [
                'label' => __( 'Hosting uptime', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '99.99%', 'top10apps' ),
            ]
        );
        $repeater2->add_control(
            'hosting_web',
            [
                'label' => __( 'Website builder', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( 'Yes, Weebly, Drupal, etc.', 'top10apps' ),
            ]
        );
        $repeater2->add_control(
            'money_back',
            [
                'label' => __( 'Money back guarantee', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __( '30 day', 'top10apps' ),
            ]
        );
        $this->add_control(
            'sliderlist',
            [
                'label' => __( 'Slider List', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater2->get_controls(),
                'default' => [
                    [
                        'hosting_price' => __( 'Hosting Rating', 'top10apps' ),
                    ],
                    [
                        'hosting_price' => __( 'Hosting Rating', 'top10apps' ),
                    ],
                    [
                        'hosting_price' => __( 'Hosting Rating', 'top10apps' ),
                    ],
                    [
                        'hosting_price' => __( 'Hosting Rating', 'top10apps' ),
                    ],
                    [
                        'hosting_price' => __( 'Hosting Rating', 'top10apps' ),
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
            'post_title_color',
            [
                'label' => __( 'Table Title Color', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .comparison-table__title' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Table Title Typography', 'top10apps' ),
                'selector' => '{{WRAPPER}} .comparison-table__title',
            ]
        );
        $this->add_control(
            'field_title_color',
            [
                'label' => __( 'Field Test Color', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .comparison-table__section--container .feature-display-name' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Field Text Typography', 'top10apps' ),
                'selector' => '{{WRAPPER}} .comparison-table__section--container .feature-display-name',
            ]
        );

//        $this->add_control(
//            'post_titlea_colodfr',
//            [
//                'label' => __( 'Item Color', 'top10apps' ),
//                'type' => \Elementor\Controls_Manager::COLOR,
//                'selectors' => [
//                    '{{WRAPPER}} .page__left-sidebar .toc__items .toc__item a' => 'color: {{VALUE}};',
//                ],
//            ]
//        );
//        $this->add_group_control(
//            \Elementor\Group_Control_Typography::get_type(),
//            [
//                'name' => 'ttsdfih',
//                'label' => __( 'Item Typography', 'top10apps' ),
//                'selector' => '{{WRAPPER}} .page__left-sidebar .toc__items .toc__item a',
//            ]
//        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'backgrouncfbxd',
                'label' => esc_html__( 'ODD Field Background', 'top10apps' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .comparison-table__body-row:nth-of-type(odd), .comparison-table__sidebar--cell:nth-of-type(odd)',
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name' => 'backgrouncfbxdeven',
                'label' => esc_html__( 'EVEN Field Background', 'top10apps' ),
                'types' => [ 'classic', 'gradient' ],
                'selector' => '{{WRAPPER}} .comparison-table__body-row:nth-of-type(even), .comparison-table__sidebar--cell:nth-of-type(even)',
            ]
        );
        $this->add_control(
            'icon_color',
            [
                'label' => __( 'Icon Color', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .rating i' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_control(
            'review_color',
            [
                'label' => __( 'Review Color', 'top10apps' ),
                'type' => \Elementor\Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} a.reviews-count' => 'color: {{VALUE}};',
                ],
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name' => 'ttih',
                'label' => __( 'Review Typography', 'top10apps' ),
                'selector' => '{{WRAPPER}} .comparison-table__feature-display-name--text.rating-area .reviews-count',
            ]
        );
        $this->end_controls_section();

    }

    protected function render()
    {
        $settings = $this->get_settings_for_display();
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
                                    <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 33px 0;max-height: 82px;min-height: 82px;">
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
                                $loop = 0;
                                foreach ($settings['sliderlist'] as $slider){
                                    $loop++;
                                    ?>
                                <div class="swiper-slide">
                                    <div class="comparison-table__first-column">
                                        <div class="comparison-table__title host-site-link">
                                            <div class="host-area">
                                                <span class="host-no"><?php echo esc_html($loop);?></span>
                                                <div class="host-img">
                                                    <?php echo top10apps_get_that_image($slider['host_image'], 'logo__image');?>
                                                </div>
                                                <div class="host-rating">
                                                    <span><?php echo esc_html($slider['host_rating']);?></span>
                                                </div>
                                            </div>
                                            <a class="comparison-table__product--cta" <?php echo top10apps_get_that_link($slider['host_btn_link']);?> class="btn-1" target="_blank"><?php echo esc_html($slider['host_btn']);?></a>
                                        </div>
                                        <div class="comparison-table__section--container comparison-table__section--container2">
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text rating-area">
                                                    <div class="rating">
                                                        <?php echo top10apps_client_ratings($slider['rating_number']);?>
                                                    </div>
                                                    <a <?php echo top10apps_get_that_link($slider['review_btn_link']);?> class="reviews-count"><?php echo esc_html($slider['review_btn'])?></a>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span><?php echo esc_html($slider['hosting_price']);?></span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span><?php echo esc_html($slider['hosting_bandwidth']);?></span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span><?php echo esc_html($slider['hosting_offer']);?></span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span><?php echo esc_html($slider['hosting_uptime']);?></span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span><?php echo esc_html($slider['hosting_web']);?></span>
                                                </div>
                                            </div>
                                            <div class="comparison-table__sidebar--cell feature-display-name" style="padding: 40px 0;max-height: 82px;min-height:82px;">
                                                <div class="comparison-table__feature-display-name--text">
                                                    <span><?php echo esc_html($slider['money_back']);?></span>
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