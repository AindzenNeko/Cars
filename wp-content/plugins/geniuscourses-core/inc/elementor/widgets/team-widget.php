<?php 
class Elementor_Team_Widget extends \Elementor\Widget_Base {

    public function get_script_depends(){
        if(\Elementor\Plugin::$instance->preview->is_preview_mode()) {
            wp_register_script('gc-team', plugins_url('/js/gc-team.js', __FILE__), ['elementor-frontend'], '1.0', true);
            return ['gc-team'];
        };
        return [];
    }

    public function get_name() {
        return 'team-widget';
    }

	public function get_title() {
        return esc_html__('Team Widget','geniuscourses');
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
                'default' => '04',
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
                'default' => 'MEET OUR TEAM'
            )
        );
        $this->add_control(
			'list',
			[
				'label' => esc_html__( 'Team List', 'geniuscourses' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => [
					[
						'name' => 'list_image',
						'label' => esc_html__( 'Photo', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::MEDIA,
                        'default' => '',
						'label_block' => true,
					],
					[
						'name' => 'list_fullname',
						'label' => esc_html__( 'Fullname', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '',
						'label_block' => true,
					],
					[
						'name' => 'list_jobtitle',
						'label' => esc_html__( 'Job Title', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '',
						'label_block' => true,
					],
                    [
						'name' => 'list_twitter_link',
						'label' => esc_html__( 'Twitter link', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '#',
						'label_block' => true,
					],
                    [
						'name' => 'list_facebook_link',
						'label' => esc_html__( 'Facebook link', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '#',
						'label_block' => true,
					],
                    [
						'name' => 'list_linkedin_link',
						'label' => esc_html__( 'LinkedIn link', 'geniuscourses' ),
						'type' => \Elementor\Controls_Manager::TEXT,
                        'default' => '#',
						'label_block' => true,
					],
				],
				'default' => [
					[
						'list_image' => array(
                            'id' => '1',
                            'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/team-1.jpg',
                            ),
                        'list_fullname' => 'Alex',
                        'list_jobtitle' => 'Designer',
					],
					[
						'list_image' => array(
                            'id' => '2',
                            'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/team-2.jpg',
                            ),
                        'list_fullname' => 'Alex 1',
                        'list_jobtitle' => 'Designer 1',
					],
					[
						'list_image' => array(
                            'id' => '3',
                            'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/team-3.jpg',
                            ),
                        'list_fullname' => 'Alex 2',
                        'list_jobtitle' => 'Designer 2',
					],
					[
						'list_image' => array(
                            'id' => '4',
                            'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/team-4.jpg',
                            ),
                        'list_fullname' => 'Alex 3',
                        'list_jobtitle' => 'Designer 3',
					],
				],
				'title_field' => '{{{ list_fullname }}}',
			]
		);

		$this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <h1 class="display-1 text-primary text-center"><?php echo $settings['number'] ?></h1>
                    <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $settings['title'] ?></h1>
                    <?php if($settings['list']){ ?>
                        <div class="owl-carousel team-carousel position-relative" style="padding: 0 30px;">
                            <?php foreach($settings['list'] as $item) { ?>
                                <div class="team-item">
                                    <img class="img-fluid w-100" src="<?php echo $item['list_image']['url'] ?>" alt="">
                                    <div class="position-relative py-4">
                                        <h4 class="text-uppercase"><?php echo $item['list_fullname'] ?></h4>
                                        <p class="m-0"><?php echo $item['list_jobtitle'] ?></p>
                                        <div class="team-social position-absolute w-100 h-100 d-flex align-items-center justify-content-center">
                                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="<?php echo $item['list_twitter_link'] ?>"><i class="fab fa-twitter"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="<?php echo $item['list_facebook_link'] ?>"><i class="fab fa-facebook-f"></i></a>
                                            <a class="btn btn-lg btn-primary btn-lg-square mx-1" href="<?php echo $item['list_linkedin_link'] ?>"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
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