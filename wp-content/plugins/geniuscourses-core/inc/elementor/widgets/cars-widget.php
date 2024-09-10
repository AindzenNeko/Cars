<?php 
class Elementor_Cars_Widget extends \Elementor\Widget_Base {
    public function get_name() {
        return 'cars-widget';
    }

	public function get_title() {
        return esc_html__('Cars Widget','geniuscourses');
    }

	public function get_icon() {
        //fa-solid fa-car
        return 'eicon-gallery-grid';
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
                'default' => '03',
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
                'default' => esc_html__('Find Your Car', 'geniuscourses')
            )
        );
        $this->add_control(
			'posts_per_page_select',
			[
				'label' => esc_html__( 'Posts per page', 'geniuscourses' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 3,
				'options' => [
					3 => esc_html__( '3', 'geniuscourses' ),
					6  => esc_html__( '6', 'geniuscourses' ),
					9 => esc_html__( '9', 'geniuscourses' ),
					12 => esc_html__( '12', 'geniuscourses' ),
				],
			]
		);
        

		$this->end_controls_section();
    }

	protected function render() {
        $settings = $this->get_settings_for_display();
        $paged = (get_query_var('page')) ? get_query_var('page') : 1;

        $args = [
            'post_type' => 'car',
            'posts_per_page' => $settings['posts_per_page_select'],
            'paged' => $paged,
        ];

        $query = new WP_Query($args);

        ?>
            <div class="container-fluid py-5">
                <div class="container pt-5 pb-3">
                    <h1 class="display-1 text-primary text-center"><?php echo $settings['number'] ?></h1>
                    <h1 class="display-4 text-uppercase text-center mb-5"><?php echo $settings['title'] ?></h1>
                    <?php if($query->have_posts()){ ?>
                        <div class="row">
                            <?php while($query->have_posts()) : $query->the_post(); ?>
                                <div class="col-lg-4 col-md-6 mb-2">
                                    <div class="rent-item mb-4">
                                        <img class="img-fluid mb-4" src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
                                        <h4 class="text-uppercase mb-4"><?php the_title(); ?></h4>
                                        <div class="d-flex justify-content-center mb-4">
                                            <div class="px-2">
                                                <i class="fa fa-car text-primary mr-1"></i>
                                                <span><?php echo get_post_meta(get_the_ID(), 'car_manufacture_year', true);?></span>
                                            </div>
                                            <div class="px-2 border-left border-right">
                                                <i class="fa fa-cogs text-primary mr-1"></i>
                                                <span style="text-transform: uppercase;"><?php echo get_post_meta(get_the_ID(), 'car_transmission_type', true);?></span>
                                            </div>
                                            <div class="px-2">
                                                <i class="fa fa-road text-primary mr-1"></i>
                                                <span><?php echo get_post_meta(get_the_ID(), 'car_mileage', true); ?>К</span>
                                            </div>
                                        </div>
                                        <a class="btn btn-primary px-3" href="">$<?php echo get_post_meta(get_the_ID(), 'car_price', true); ?>.00/Day</a>
                                    </div>
                                </div>
                            <?php 
                                endwhile; 
                            ?>
                        </div>
                        <div class="pagination">
                            <?php echo paginate_links(array(
                                'total'   => $query->max_num_pages,
                                'current' => max(1, get_query_var('page')),
                                'prev_next' => false,
                                ));
                                // wp_reset_postdata();
                            ?>
                        </div>
                    <?php } ?>
                </div>
            </div>
        <?php
    }
}