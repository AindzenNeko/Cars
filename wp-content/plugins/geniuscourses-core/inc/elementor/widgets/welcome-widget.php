<?php 
class Elementor_Welcome_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'welcome-widget';
    }

	public function get_title() {
        return esc_html__('Welcome Widget','geniuscourses');
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
            'switch_number',
            array(
                'label' => esc_html__( 'Show number', 'geniuscourses' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'textdomain' ),
				'label_off' => esc_html__( 'Hide', 'textdomain' ),
				'return_value' => 'yes',
				'default' => 'yes',
            )
        );
        $this->add_control(
            'number',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Number', 'geniuscourses' ),
                'default' => '01',
                'condition' => [
                    'switch_number' => 'yes',
                ],
            )
        );
		$this->add_control(
            'title-1',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title 1', 'geniuscourses' ),
                'default' => 'Welcome To'
            )
        );
		$this->add_control(
            'title-2',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title 2', 'geniuscourses' ),
                'default' => 'Royal Cars'
            )
        );
		$this->add_control(
            'description',
            array(
                'type' => \Elementor\Controls_Manager::TEXTAREA,
				'label' => esc_html__( 'Description', 'geniuscourses' ),
                'default' => 'Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et.'
            )
        );
		$this->add_control(
            'image',
            array(
                'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Image', 'geniuscourses' ),
                'default' => array(
                    'id' => '5',
                    'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/about-1.png',
                )
            )
        );
		$this->add_control(
            'icon-1',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Icon 1', 'geniuscourses' ),
                'description' => 'Insert class for icon from Font Awesome',
                'default' => 'fa-headset'
            )
        );
		$this->add_control(
            'text-1',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Text 1', 'geniuscourses' ),
                'default' => '24/7 Car Rental Support'
            )
        );
		$this->add_control(
            'icon-2',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Icon 2', 'geniuscourses' ),
                'description' => 'Insert class for icon from Font Awesome',
                'default' => 'fa-car'
            )
        );
		$this->add_control(
            'text-2',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Text 2', 'geniuscourses' ),
                'default' => 'Car Reservation Anytime'
            )
        );
		$this->add_control(
            'icon-3',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Icon 3', 'geniuscourses' ),
                'description' => 'Insert class for icon from Font Awesome',
                'default' => 'fa-map-marker-alt'
            )
        );
		$this->add_control(
            'text-3',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Text 3', 'geniuscourses' ),
                'default' => 'Lots Of Pickup Locations'
            )
        );

		$this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="container-fluid py-5">
                <div class="container pt-5 pb-3">
                    <?php if($settings['switch_number'] == 'yes') { ?>
                        <h1 class="display-1 text-primary text-center"><?php echo $settings['number']?></h1>
                    <?php } ?>
                    <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $settings['title-1']?> <span class="text-primary"><?php echo $settings['title-2']?></span></h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <img class="w-75 mb-4" src="<?php echo $settings['image']['url'] ?>" alt="">
                            <p><?php echo $settings['description'] ?></p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 mb-2">
                            <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                    <i class="fa fa-2x <?php echo $settings['icon-1']?> text-secondary"></i>
                                </div>
                                <h4 class="text-uppercase m-0"><?php echo $settings['text-1'] ?></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                    <i class="fa fa-2x <?php echo $settings['icon-2'] ?> text-secondary"></i>
                                </div>
                                <h4 class="text-light text-uppercase m-0"><?php echo $settings['text-2'] ?></h4>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                    <i class="fa fa-2x <?php echo $settings['icon-3'] ?> text-secondary"></i>
                                </div>
                                <h4 class="text-uppercase m-0"><?php echo $settings['text-3'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }

	/*protected function content_template() {
        ?>
            <div class="container-fluid py-5">
                <div class="container pt-5 pb-3">
                    <h1 class="display-4 text-uppercase text-center mb-5">Welcome To <span class="text-primary">Royal Cars</span></h1>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 text-center">
                            <img class="w-75 mb-4" src="http://geniuscourses-cars/wp-content/uploads/2023/12/about-1.png" alt="">
                            <p>Justo et eos et ut takimata sed sadipscing dolore lorem, et elitr labore labore voluptua no rebum sed, stet voluptua amet sed elitr ea dolor dolores no clita. Dolores diam magna clita ea eos amet, amet rebum voluptua vero vero sed clita accusam takimata. Nonumy labore ipsum sea voluptua sea eos sit justo, no ipsum sanctus sanctus no et no ipsum amet, tempor labore est labore no. Eos diam eirmod lorem ut eirmod, ipsum diam sadipscing stet dolores elitr elitr eirmod dolore. Magna elitr accusam takimata labore, et at erat eirmod consetetur tempor eirmod invidunt est, ipsum nonumy at et.</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-lg-4 mb-2">
                            <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                    <i class="fa fa-2x fa-headset text-secondary"></i>
                                </div>
                                <h4 class="text-uppercase m-0">24/7 Car Rental Support</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <div class="d-flex align-items-center bg-secondary p-4 mb-4" style="height: 150px;">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                    <i class="fa fa-2x fa-car text-secondary"></i>
                                </div>
                                <h4 class="text-light text-uppercase m-0">Car Reservation Anytime</h4>
                            </div>
                        </div>
                        <div class="col-lg-4 mb-2">
                            <div class="d-flex align-items-center bg-light p-4 mb-4" style="height: 150px;">
                                <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary ml-n4 mr-4" style="width: 100px; height: 100px;">
                                    <i class="fa fa-2x fa-map-marker-alt text-secondary"></i>
                                </div>
                                <h4 class="text-uppercase m-0">Lots Of Pickup Locations</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }*/
    
}
