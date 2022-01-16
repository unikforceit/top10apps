<?php

namespace Elementor;
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

class  top10apps_header_banner extends Widget_Base
{

    public function get_name()
    {
        return 'top10apps_header_banner';
    }

    public function get_title()
    {
        return __('Header Banner', 'top10apps');
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
                'label' => __( 'Image', 'moda' ),
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
            'bg',
            [
                'label' => __( 'BG', 'moda' ),
                'type' => \Elementor\Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
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
        <section class="charticle__header">
           <div  class="charticle__header--top" data-background="'.$settings['bg']['url'].'">
              <div class="charticle__header--info">
                 <h1 class="charticle__header--title" >'.$settings['title'].'</h1>
                 <div class="charticle__header--details">
                    <div class="by-author">
                       <div class="by-author__author-credentials">
                          '.top10apps_get_that_image($settings['img'], 'by-author__image').'
                          <div class="by-author__author-metadata">
                             <div class="by-author__author-name"><a '.top10apps_get_that_link($settings['link']).'>'.$settings['name'].'</a></div>
                             <span class="by-author__pubdate">'.$settings['date'].'</span>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="charticle__header--placeholder"></div>
           </div>
        </section>

    <!-- built app area end here  -->';

    }
}

Plugin::instance()->widgets_manager->register(new top10apps_header_banner());