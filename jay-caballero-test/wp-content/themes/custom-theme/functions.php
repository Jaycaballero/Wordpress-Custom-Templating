 <?php
    /*
    ===========================================
    Add theme logo support
    ===========================================
    */

    add_theme_support( 'custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    ) );


    /* 
    ===========================================
    Nav Walker to support Bootsrap 4
    ===========================================
    */
    function register_navwalker(){
        require_once get_template_directory() . '/lib/class-wp-bootstrap-navwalker.php';
    }
    add_action( 'after_setup_theme', 'register_navwalker' );

    function add_my_favicon() {
        $favicon_path = get_template_directory_uri() . '/favicon.ico';
        echo '<link rel="shortcut icon" href="' . esc_url($favicon_path) . '" />';
    }
    
    add_action( 'wp_head', 'add_my_favicon' );
    add_action( 'admin_head', 'add_my_favicon' );


    /*
    ===========================================
    Menu 
    ===========================================
    */
    function test_register_menus(){
        register_nav_menus( array(
            'main_menu' => 'Main Menu',
        ));
    }
    
    add_action('init', 'test_register_menus');



    /*
    ===========================================
    Register Footer widget
    ===========================================
    */
    register_sidebar( array(
        'name' => __( 'Footer Widget'),
        'id' => 'stat-widget',
        'description' => __( 'Footer Widget'),
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );


    // Creating the widget 
    class wpb_widget extends WP_Widget {
      
        function __construct() {
            parent::__construct(
              
            // Base ID of your widget
            'wpb_widget', 
              
            // Widget name will appear in UI
            __('Footer Widget', 'wpb_widget_domain'), 
              
            // Widget description
            array( 'description' => __( 'Footer Widget', 'wpb_widget_domain' ), ) 
            );
        }
          
        // Creating widget front-end
          
        public function widget( $args, $instance ) {
            $title = apply_filters( 'widget_title', $instance['title'] );
              
            // before and after widget arguments are defined by themes
            echo $args['before_widget'];
            if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
              
            // This is where you run the code and display the output
            //echo __( 'Hello, World!', 'wpb_widget_domain' );
            echo $args['after_widget'];
        }
                  
        // Widget Backend 
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
            }
            else {
                $title = __( 'New title', 'wpb_widget_domain' );
            }
            // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <?php 
        }
              
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            return $instance;
        }
     
    
    } 
     
    // Register and load the widget
    function wpb_load_widget() {
        register_widget( 'wpb_widget' );
    }
    add_action( 'widgets_init', 'wpb_load_widget' );



    //get field value from acf
    add_filter('dynamic_sidebar_params', 'my_dynamic_sidebar_params');

    function my_dynamic_sidebar_params( $params ) {
    
        // get widget vars
        $widget_name = $params[0]['widget_name'];
        $widget_id = $params[0]['widget_id'];
        
        
        if( $widget_name != 'Footer Widget' ) {
            
            return $params;
            
        }
        
        // get fields value and render
        $footer_text_colour = get_field('footer_text_colour', 'widget_' . $widget_id);
        $footer_introtext = get_field('footer_introtext', 'widget_' . $widget_id);
        $footer_subtext = get_field('footer_subtext', 'widget_' . $widget_id);
        $footer_button_1 = get_field('footer_button_1', 'widget_' . $widget_id);
        $footer_button_2 = get_field('footer_button_2', 'widget_' . $widget_id);
        $footer_logo = get_field('footer_logo', 'widget_' . $widget_id);
        $copyright_text = get_field('copyright_text', 'widget_' . $widget_id);

       
        $params[0]['before_widget'] = '
            <h3 class="text-center" style="color: '.$footer_text_colour.';">' . $footer_introtext . '</h3>
            <div class="footer-subtext text-center" style="color: '.$footer_text_colour.';">' . $footer_subtext . '</div> 
            <div class="footer-buttons d-table mx-auto pt-3">
                <a class="call-to-action footer-button-1 me-2" href="'.$footer_button_1['url'].'">' . $footer_button_1['title'] . '</a>
                <a class="call-to-action footer-button-2" href="'.$footer_button_2['url'].'">' . $footer_button_2['title'] . '</a>
            </div>

            <div class="footer-logo-copyright mt-5 pt-5">
                <div class="row">
                    <div class="col-6"><img src="'.$footer_logo.'"></div>
                    <div class="col-6" style="color: '.$footer_text_colour.';">
                        <div class="copyright-text text-end">'.$copyright_text.'</div>
                    </div>
                </div>
            </div>

        ' . $params[0]['before_widget'];
    
        
        // return
        return $params;

    }


     /*
    ===========================================
    Register Header widget
    ===========================================
    */
    register_sidebar( array(
        'name' => __( 'Header Widget'),
        'id' => 'header-widget',
        'description' => __( 'Header Widget'),
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ) );

    // Creating the widget 
    class header_widget extends WP_Widget {
      
        function __construct() {
            parent::__construct(
              
            // Base ID of your widget
            'header_widget', 
              
            // Widget name will appear in UI
            __('Header Widget', 'header_widget_domain'), 
              
            // Widget description
            array( 'description' => __( 'Header Widget', 'header_widget_domain' ), ) 
            );
        }
          
        // Creating widget front-end
          
        public function widget( $args, $instance ) {
            $title = apply_filters( 'widget_title', $instance['title'] );
              
            // before and after widget arguments are defined by themes
            echo $args['before_widget'];
            if ( ! empty( $title ) )
            echo $args['before_title'] . $title . $args['after_title'];
              
            // This is where you run the code and display the output
            //echo __( 'Hello, World!', 'header_widget_domain' );
            echo $args['after_widget'];
        }
                  
        // Widget Backend 
        public function form( $instance ) {
            if ( isset( $instance[ 'title' ] ) ) {
                $title = $instance[ 'title' ];
            }
            else {
                $title = __( 'New title', 'header_widget_domain' );
            }
            // Widget admin form
            ?>
            <p>
                <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
                <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
            </p>
            <?php 
        }
              
        // Updating widget replacing old instances with new
        public function update( $new_instance, $old_instance ) {
            $instance = array();
            $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
            return $instance;
        }
     
    
    } 
     
    // Register and load the widget
    function header_load_widget() {
        register_widget( 'header_widget' );
    }
    add_action( 'widgets_init', 'header_load_widget' );


    //get field value from acf
    add_filter('dynamic_sidebar_params', 'my_dynamic_header_params');

    function my_dynamic_header_params( $params ) {
    
        // get widget vars
        $widget_name = $params[0]['widget_name'];
        $widget_id = $params[0]['widget_id'];
        
        
        if( $widget_name != 'Header Widget' ) {
            
            return $params;
            
        }
        
        
        $header_button_1 = get_field('header_button_1', 'widget_' . $widget_id);
        $header_button_2 = get_field('header_button_2', 'widget_' . $widget_id);
        

       
        $params[0]['before_widget'] = '
            <div class="header-buttons">
                <a class="call-to-action header-button-1 me-2" href="'.$header_button_1['url'].'">' . $header_button_1['title'] . '</a>
                <a class="call-to-action header-button-2" href="'.$header_button_2['url'].'">' . $header_button_2['title'] . '</a>
            </div>

        ' . $params[0]['before_widget'];
    
        
        // return
        return $params;

    }


?>