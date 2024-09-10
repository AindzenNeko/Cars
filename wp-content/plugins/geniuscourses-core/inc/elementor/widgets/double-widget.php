<?php 
class Elementor_Double_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'double-widget';
    }

	public function get_title() {
        return esc_html__('Double Widget','geniuscourses');
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
            'image-1',
            array(
                'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Image 1', 'geniuscourses' ),
                'default' => array(
                    'id' => '1',
                    'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/banner-left.png',
                )
            )
        );
        $this->add_control(
            'title-1',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title 1', 'geniuscourses' ),
                'default' => esc_html__('WANT TO BE DRIVER?', 'geniuscourses')
            )
        );
        $this->add_control(
            'description-1',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Description 1', 'geniuscourses' ),
                'default' => esc_html__('Lorem justo sit sit ipsum eos lorem kasd, kasd labore', 'geniuscourses')
            )
        );
        $this->add_control(
            'image-2',
            array(
                'type' => \Elementor\Controls_Manager::MEDIA,
				'label' => esc_html__( 'Image 2', 'geniuscourses' ),
                'default' => array(
                    'id' => '2',
                    'url' => 'http://geniuscourses-cars/wp-content/uploads/2023/12/banner-right.png',
                )
            )
        );
        $this->add_control(
            'title-2',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Title 2', 'geniuscourses' ),
                'default' => esc_html__('LOOKING FOR A CAR?', 'geniuscourses')
            )
        );
        $this->add_control(
            'description-2',
            array(
                'type' => \Elementor\Controls_Manager::TEXT,
				'label' => esc_html__( 'Description 2', 'geniuscourses' ),
                'default' => esc_html__('Lorem justo sit sit ipsum eos lorem kasd, kasd labore', 'geniuscourses')
            )
        );

		$this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
            <div class="container-fluid py-5">
                <div class="container py-5">
                    <div class="row mx-0">
                        <div class="col-lg-6 px-0">
                            <div class="px-5 bg-secondary d-flex align-items-center justify-content-between" style="height: 350px;">
                                <img class="img-fluid flex-shrink-0 ml-n5 w-50 mr-4" src="<?php echo $settings['image-1']['url'] ?>" alt="">
                                <div class="text-right">
                                    <h3 class="text-uppercase text-light mb-3"><?php echo $settings['title-1'] ?></h3>
                                    <p class="mb-4"><?php echo $settings['description-1'] ?></p>
                                    <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 px-0">
                            <div class="px-5 bg-dark d-flex align-items-center justify-content-between" style="height: 350px;">
                                <div class="text-left">
                                    <h3 class="text-uppercase text-light mb-3"><?php echo $settings['title-2'] ?></h3>
                                    <p class="mb-4"><?php echo $settings['description-2'] ?></p>
                                    <a class="btn btn-primary py-2 px-4" href="">Start Now</a>
                                </div>
                                <img class="img-fluid flex-shrink-0 mr-n5 w-50 ml-4" src="<?php echo $settings['image-2']['url'] ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php
    }
}
