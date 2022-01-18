<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_ad_block2 extends Widget_Base
{

    public function get_name()
    {
        return 'top10apps_ad_block2';
    }

    public function get_title()
    {
        return __('Ad Block List 2', 'top10apps');
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
                'label' => __('Image', 'moda'),
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
        ?>
        <div class="chart__body2">
            <div class="chart__body__products2">
                <?php
        if ($settings['list']) {
            $index = 0;
            foreach ($settings['list'] as $scroll) {
                $index++;
                ?>
                <div class="chart-product-text nilink  ribbon_primary accordion-open">
                    <div class="chart-product-text-body null">
                        <div class="product-row  has-ribbon">
                            <div class="left">
                                <div class="product-ribbon"><span class="product-ribbon__text">Our Most Popular</span></div>
                                <div class="left__info">
                                    <div class="index-counter">
                                        <div class="index-counter__value">1</div>
                                        <div class="index-counter__border"></div>
                                    </div>
                                </div>
                                <div class="left__container">
                                    <div class="logo__container">
                                        <div><img class="logo__image" src="https://images.top10.com/f_auto,q_auto/v1/production/products/uploads/photo/gusto_Logo_xSite.20200308135552.png"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="before-center"></div>
                            <div class="center">
                                <div class="center__header"></div>
                                <div class="bottom-line">
                                    <span class="bottom-line__product-name">Gusto</span>
                                    <a class="review-link" href="/payroll/reviews/gusto"
                                       >
               <span>
                  121<!-- --> 
               </span>
                                        reviews
                                    </a>
                                </div>
                                <ul class="attributes">
                                    <li title="Best for small businesses">
                                        <div class="" title=""><strong>Best for small businesses</strong></div>
                                    </li>
                                    <li title="PCMags best online payroll">
                                        <div class="" title="">PCMags best online payroll</div>
                                    </li>
                                    <li title="&quot;Autopilot&quot; runs payroll itself">
                                        <div class="" title="">"Autopilot" runs payroll itself</div>
                                    </li>
                                    <li title="Simple switchover + flat fee">
                                        <div class="" title="">Simple switchover + flat fee</div>
                                    </li>
                                    <li title="Advanced hiring and onboarding tools">
                                        <div class="" title="">Advanced hiring and onboarding tools</div>
                                    </li>
                                </ul>
                                <div class="addon__sale-badge">
                                    <svg class="addon__sale-badge__icon">
                                        <use xlink:href="#flame-icon"></use>
                                    </svg>
                                    <span class="addon__sale-badge__text">Free month trial</span>
                                </div>

                            </div>
                            <div class="after-center"></div>
                            <div class="right">
                                <div class="product-score real-score tooltip-animation">
                                    <div class="product-score__text">exceptional</div>
                                    <div class="product-score__number">9.8</div>
                                    <div class="real-score__card" data-role="score-card">
                                        <ul class="real-score__card__items">
                                            <li class="real-score__card__item">
                                                <svg class="real-score__card__icon">
                                                    <use xlink:href="#consumer-interest"></use>
                                                </svg>
                                                <div class="real-score__card__info">
                                                    <div class="real-score__card__info--title">Consumer Engagement</div>
                                                    <div class="real-score__card__info--highlight">
                                                        <span>Chosen by 10387</span>people
                                                        in the past 30 days
                                                    </div>
                                                </div>
                                                <div class="real-score__card__score">9.9</div>
                                            </li>
                                            <li class="real-score__card__item">
                                                <svg class="real-score__card__icon">
                                                    <use xlink:href="#costumer-feedback"></use>
                                                </svg>
                                                <div class="real-score__card__info">
                                                    <div class="real-score__card__info--title">Customer Feedback</div>
                                                    <div class="real-score__card__info--highlight">Great
                                                        in<span>Value for Money</span></div>
                                                </div>
                                                <div class="real-score__card__score">9.0</div>
                                            </li>
                                            <li class="real-score__card__item">
                                                <svg class="real-score__card__icon">
                                                    <use xlink:href="#brand-reputation"></use>
                                                </svg>
                                                <div class="real-score__card__info">
                                                    <div class="real-score__card__info--title">Brand Reputation</div>
                                                    <div class="real-score__card__info--highlight">Based
                                                        on<span>web analytics</span></div>
                                                </div>
                                                <div class="real-score__card__score">8.5</div>
                                            </li>
                                            <li class="real-score__card__item">
                                                <svg class="real-score__card__icon">
                                                    <use xlink:href="#features-benefits"></use>
                                                </svg>
                                                <div class="real-score__card__info">
                                                    <div class="real-score__card__info--title">Features &amp; Benefits
                                                    </div>
                                                    <div class="real-score__card__info--highlight">Product
                                                        Review<span></span>
                                                    </div>
                                                </div>
                                                <div class="real-score__card__score">9.8</div>
                                            </li>
                                        </ul>
                                        <a class="real-score__card__link"
                                           href="https://www.top10.com/legal-pages/how-we-score"><span
                                                    class="real-score__card__link--text">Learn how we score</span></a>
                                    </div>
                                </div>
                                <div class="right__container">
                                    <div class="right__CTA-container">
                                        <a class="cta-button  nilink"
                                           href="#"
                                          ><span class="cta-button__text">Visit Site</span></a>
                                    </div>
                                    <div class="addon__sale-badge">
                                        <svg class="addon__sale-badge__icon">
                                            <use xlink:href="#flame-icon"></use>
                                        </svg>
                                        <span class="addon__sale-badge__text">Free month trial</span>
                                    </div>
                                </div>
                                <div class="accordion-button-container">
                                    <button type="button" class="toggle-accordion"><span class="toggle-accordion__text">Less info</span><span
                                                class="toggle-accordion__icon"></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="accordion">
                            <div class="accordion-active"></div>
                            <div class="accordion-items">
                                <div class="accordion-items__top">
                                    <div class="accordion-items__left">
                                        <div class="accordion-items__product-title">Highlights</div>
                                        <div class="accordion-items__bottom-line-container">
                                            <div class="bottom-line"><span class="bottom-line__content">Tax filings, pay stubs, W-2s, and more all done automatically</span>
                                            </div>
                                        </div>
                                        <ul class="accordion-items__bullet-points">
                                            <li class="accordion-items__bullet-points__item"><span
                                                        class="accordion-items__bullet-points__text">Automatic tax filing</span>
                                            </li>
                                            <li class="accordion-items__bullet-points__item"><span
                                                        class="accordion-items__bullet-points__text">Simple &amp; friendly interface</span>
                                            </li>
                                            <li class="accordion-items__bullet-points__item"><span
                                                        class="accordion-items__bullet-points__text">Direct deposit available</span>
                                            </li>
                                            <li class="accordion-items__bullet-points__item"><span
                                                        class="accordion-items__bullet-points__text">Self-setup &amp; onboarding for employees</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="accordion-items__right">
                                        <div class="image-carousel-parent">
                                            <div
                                                 class="carousel--single-image">
                                                <img class="carousel--image image-element loaded"
                                                     src="https://images.top10.com/f_auto,q_auto/v1/production/product_inspirational_images/uploads/photo/Gusto.20200422085019.jpg"
                                                >
                                                <div class="carousel--image inline-background-image"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-items__bottom">
                                    <a class="review-link" href="/payroll/reviews/gusto"><span
                                                class="review-link-text">Read Review</span></a>
                                    <a class="accordion-items__visit-button nilink">Visit Site</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
            </div>
        </div>
    <?php }
}

Plugin::instance()->widgets_manager->register(new top10apps_ad_block2());