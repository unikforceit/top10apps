<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_review_header extends Widget_Base
{

    public function get_name()
    {
        return 'top10apps_review_header';
    }

    public function get_title()
    {
        return __('Review Header', 'top10apps');
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
                'default' => __('Top 10 Professional Web Hosting Providers', 'top10apps'),
            ]
        );
        $this->add_control(
            'date',
            [
                'label' => __('Date', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Last updated: Jan. 03, 2021', 'top10apps'),
            ]
        );
        $this->add_control(
            'review_counts',
            [
                'label' => __('Review Count', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('112 reviews', 'top10apps'),
            ]
        );
        $this->add_control(
            'rlink', [
                'label' => __('Review Link', 'top10apps'),
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
            'av_rating',
            [
                'label' => __('Average Rating', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('9.7', 'top10apps'),
            ]
        );
        $this->add_control(
            'av_title',
            [
                'label' => __('Average Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Exceptional', 'top10apps'),
            ]
        );
        $this->add_control(
            'name',
            [
                'label' => __('Name', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Dave Platt', 'top10apps'),
            ]
        );
        $this->add_control(
            'img',
            [
                'label' => __('Image', 'moda'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
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
            'sub',
            [
                'label' => __('Sub Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('In a Nutshell', 'top10apps'),
            ]
        );
        $this->add_control(
            'info',
            [
                'label' => __('Info', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Bluehost gives users an intuitive, easy-to-use control panel with extremely cost-effective pricing and a variety of hosting options.', 'top10apps'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'pros_section',
            [
                'label' => __('Pros', 'top10apps'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'ptitle',
            [
                'label' => __('Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('pros', 'top10apps'),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'pitem',
            [
                'label' => __('Item', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Easy and intuitive to use', 'top10apps'),
            ]
        );
        $this->add_control(
            'pros',
            [
                'label' => __('Pros', 'top10apps'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'pitem' => __('Easy and intuitive to use', 'top10apps'),
                    ],
                    [
                        'pitem' => __('Easy and intuitive to use', 'top10apps'),
                    ],
                    [
                        'pitem' => __('Easy and intuitive to use', 'top10apps'),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'cons_section',
            [
                'label' => __('Cons', 'top10apps'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'ctitle',
            [
                'label' => __('Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('cons', 'top10apps'),
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'citem',
            [
                'label' => __('Item', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXTAREA,
                'default' => __('Easy and intuitive to use', 'top10apps'),
            ]
        );
        $this->add_control(
            'cons',
            [
                'label' => __('Cons', 'top10apps'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'citem' => __('Easy and intuitive to use', 'top10apps'),
                    ],
                    [
                        'citem' => __('Easy and intuitive to use', 'top10apps'),
                    ],
                    [
                        'citem' => __('Easy and intuitive to use', 'top10apps'),
                    ],
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'cta_sec',
            [
                'label' => __('Call To Action', 'top10apps'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'cta_text',
            [
                'label' => __('Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('BlueHost', 'top10apps'),
            ]
        );
        $this->add_control(
            'cta_btn',
            [
                'label' => __('Button', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Visit Site', 'top10apps'),
            ]
        );
        $this->add_control(
            'cta_img',
            [
                'label' => __('Image', 'moda'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'cta_link', [
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
        $this->end_controls_section();
        $this->start_controls_section(
            'stk_sec',
            [
                'label' => __('Sticky Section', 'top10apps'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'stk_text',
            [
                'label' => __('Title', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('BlueHost', 'top10apps'),
            ]
        );
        $this->add_control(
            'stk_btn',
            [
                'label' => __('Button', 'top10apps'),
                'type' => \Elementor\Controls_Manager::TEXT,
                'default' => __('Visit Site', 'top10apps'),
            ]
        );
        $this->add_control(
            'stk_img',
            [
                'label' => __('Image', 'moda'),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'stk_link', [
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
        <section class="page__center">
           <h1 class="page-title">' . $settings['title'] . '</h1>
           <div class="reviews-infomartion">
               <div class="visitor-review-agg reviews-infomartion__card reviews-infomartion__stars">
                  <div class="visitor-review-agg__overview">
                     <div class="rating__container--parent">
                        <div class="rating__container">
                           <div class="rating__stars rating__stars--view-only">
                              <ul>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <span class="visitor-review-agg__count show-modal"><a class="review-link" ' . top10apps_get_that_link($settings['rlink']) . '><span>' . $settings['review_counts'] . '</span></a></span>
                  </div>
               </div>
               <div class="score reviews-infomartion__card reviews-infomartion__score">
                  <div class="score__number">' . $settings['av_rating'] . '</div>
                  <div class="score__text">' . $settings['av_title'] . '</div>
               </div>
        </div>
            <div class="divider reviews-divider"></div>
            <div class="widgets-bar">
               <div class="by-author">
                  <div class="by-author__author-credentials">
                      ' . top10apps_get_that_image($settings['img'], 'by-author__image') . '
                     <div class="by-author__author-metadata">
                        <div class="by-author__author-name"><a ' . top10apps_get_that_link($settings['link']) . ' class="by-author__author">' . $settings['name'] . '</a></div>
                        <span class="by-author__pubdate">' . $settings['date'] . '</span>
                     </div>
                  </div>
               </div>
       
            </div>
            <div class="html-content__section">
               <h2 class="in-a-nutshell">' . $settings['sub'] . '</h2>
               <div class="in-a-nutshell">' . $settings['info'] . '</div>
               <div class="pros-cons">
                  <div class="pros">
                     <h3>' . $settings['ptitle'] . '</h3>
                     <ul>';
        if ($settings['pros']) {
            foreach ($settings['pros'] as $pros) {
                echo '<li>' . $pros['pitem'] . '</li>';
            }
        }
        echo '</ul>
                  </div>
                  <div class="cons">
                     <h3>' . $settings['ctitle'] . '</h3>
                     <ul>';
        if ($settings['cons']) {
            foreach ($settings['cons'] as $cons) {
                echo '<li>' . $cons['citem'] . '</li>';
            }
        }
        echo '</ul>
                  </div>
               </div>
            </div>
           <div class="product-cta-button">
                <div class="product-cta-button-icon">
                     ' . top10apps_get_that_image($settings['cta_img'], 'product-cta-button-icon-image') . '
                </div>
                <div class="product-cta-button-text">' . $settings['cta_text'] . '</div>
                    <a ' . top10apps_get_that_link($settings['cta_link']) . ' class="cta-button"><span class="cta-button__text"> ' . $settings['cta_btn'] . '</span></a>
            </div>
        </section>
        <div class="product-sidebar-sticky">
   <div class="product-sidebar-sticky__container">
      <div class="product-sidebar-sticky__left">
       ' . top10apps_get_that_image($settings['stk_img'], 'product-sidebar-sticky__left__logo product-sidebar-sticky__left__logo--show-user-reviews') . '
         <div class="product-sidebar-sticky__left__user-reviews product-sidebar-sticky__left__user-reviews--container">
            <div class="product-sidebar-sticky__left__user-reviews">
                <div class="rating__container--parent">
                        <div class="rating__container">
                           <div class="rating__stars rating__stars--view-only">
                              <ul>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                                  <li><a href="#"><i class="fas fa-star"></i></a></li>
                              </ul>
                           </div>
                        </div>
                     </div>
               <span class="product-sidebar-sticky__left__number-of-reviews">
                   ' . $settings['stk_text'] . '
               </span>
            </div>
         </div>
      </div>
      <div class="product-sidebar-sticky__right"><a class="cta-button" ' . top10apps_get_that_link($settings['stk_link']) . ' > <span class="cta-button__text">' . $settings['cta_btn'] . '</span></a></div>
   </div>
</div>

    <!-- built app area end here  -->';

    }
}

Plugin::instance()->widgets_manager->register(new top10apps_review_header());