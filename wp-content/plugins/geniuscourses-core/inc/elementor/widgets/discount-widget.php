<?php 
class Elementor_Discount_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'discount-widget';
    }

	public function get_title() {
        return esc_html__('Discount Widget','geniuscourses');
    }

	public function get_icon() {
        //fa-solid fa-car
        return 'eicon-scroll';
    }

	// public function get_custom_help_url() {}

	public function get_categories() {
        return ['theme-elements'];
    }

	public function get_keywords() {
        return ['my'];
    }

	// public function get_script_depends() {}

	// public function get_style_depends() {}

	protected function register_controls() {
        $this->start_controls_section(
            'content_section',
            array(
                'label' => esc_html__( 'Content', 'geniuscourses' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            )
        );

        $this->add_control(
            'bg-image',
            array(
                'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Background image', 'geniuscourses' ),
                'default' => array(
                    'id' => '1',
                    'url' => '',
                )
            )
        );
        $this->add_control(
            'title',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'geniuscourses' ),
                'default' => esc_html__('50% OFF', 'geniuscourses')
            )
        );
        $this->add_control(
            'subtitle',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Subtitle', 'geniuscourses' ),
                'default' => esc_html__('SPECIAL OFFER FOR NEW MEMBERS', 'geniuscourses')
            )
        );
        $this->add_control(
            'description',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Description', 'geniuscourses' ),
                'default' => esc_html__('Only for Sunday from 1st Jan to 30th Jan 2045', 'geniuscourses')
            )
        );


		$this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();

        global $geniuscourses_options;

        $bg_image = '';
		if($geniuscourses_options['header-banner']['url']) {
			$bg_image = 'style = "background-image: linear-gradient(rgba(28, 30, 50, .9), rgba(28, 30, 50, .9)), url('.$geniuscourses_options['header-banner']['url'].');"';
		}
        ?>
            <div class="container-fluid py-5" >
                <div class="container py-5">
                    <div class="bg-banner py-5 px-4 text-center" <?php echo $bg_image ?>>
                        <div class="py-5">
                            <h1 class="display-1 text-uppercase text-primary mb-4"><?php echo $settings['title'] ?></h1>
                            <h1 class="text-uppercase text-light mb-4"><?php echo $settings['subtitle'] ?></h1>
                            <p class="mb-4"><?php echo $settings['description'] ?></p>
                            <a class="btn btn-primary mt-2 py-3 px-5" href="">Register Now</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
}
