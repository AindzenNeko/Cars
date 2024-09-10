<?php 
class Elementor_Service_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'service-widget';
    }

	public function get_title() {
        return esc_html__('Service Widget','geniuscourses');
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
                'default' => '02',
                'condition' => [
                    'switch_number' => 'yes',
                ],
            )
        );

        $this->add_control(
            'title',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title', 'geniuscourses' ),
                'default' => 'Our service'
            )
        );
        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'Service List', 'geniuscourses' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_icon',
						'label' => esc_html__( 'Icon', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '',
						'label_block' => true,
					],
					[
						'name' => 'list_title',
						'label' => esc_html__( 'Title', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '',
						'label_block' => true,
					],
					[
						'name' => 'list_description',
						'label' => esc_html__( 'Description', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXTAREA,
                        'default' => '',
						'label_block' => true,
					],
				],
				'default' => [
					[
						'list_icon' => 'fa-taxi',
						'list_title' => esc_html__( 'Car Rental', 'geniuscourses' ),
						'list_description' => esc_html__( 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed', 'geniuscourses' ),
					],
					[
						'list_icon' => 'fa-money-check-alt',
						'list_title' => esc_html__( 'Car Financing', 'geniuscourses' ),
						'list_description' => esc_html__( 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed', 'geniuscourses' ),
					],
					[
						'list_icon' => 'fa-car',
						'list_title' => esc_html__( 'Car Inspection', 'geniuscourses' ),
						'list_description' => esc_html__( 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed', 'geniuscourses' ),
					],
					[
						'list_icon' => 'fa-cogs',
						'list_title' => esc_html__( 'Auto Repairing', 'geniuscourses' ),
						'list_description' => esc_html__( 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed', 'geniuscourses' ),
					],
					[
						'list_icon' => 'fa-spray-can',
						'list_title' => esc_html__( 'Auto Painting', 'geniuscourses' ),
						'list_description' => esc_html__( 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed', 'geniuscourses' ),
					],
					[
						'list_icon' => 'fa-pump-soap',
						'list_title' => esc_html__( 'Auto Cleaning', 'geniuscourses' ),
						'list_description' => esc_html__( 'Kasd dolor no lorem nonumy sit labore tempor at justo rebum rebum stet, justo elitr dolor amet sit sea sed', 'geniuscourses' ),
					],
				],
				'title_field' => '{{{ list_title }}}',
			]
		);


		$this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="container-fluid py-5">
                <div class="container pt-5 pb-3">
                    <h1 class="display-1 text-primary text-center"><?php echo $settings['number']?></h1>
                    <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $settings['title']; ?></h1>
					<?php if($settings['list']){ ?>
						<div class="row">
							<?php $index = 0;?>
							<?php foreach($settings['list'] as $item){ ?>
								<?php $index++; ?>
								<div class="col-lg-4 col-md-6 mb-2">
									<div class="service-item d-flex flex-column justify-content-center px-4 mb-4">
										<div class="d-flex align-items-center justify-content-between mb-3">
											<div class="d-flex align-items-center justify-content-center bg-primary ml-n4" style="width: 80px; height: 80px;">
												<i class="fa fa-2x <?php echo $item['list_icon'] ?> text-secondary"></i>
											</div>
											<h1 class="display-2 text-white mt-n2 m-0"><?php echo '0'.$index ?></h1>
										</div>
										<h4 class="text-uppercase mb-3"><?php echo $item['list_title'] ?></h4>
										<p class="m-0"><?php echo $item['list_description'] ?></p>
									</div>
								</div>
							<?php } ?>
						</div>
					<?php } ?>
                </div>
            </div>
        <?php
    }
}