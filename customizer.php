<?php 
function first_customizer_register( $wp_customize ){
//creating the header customizer pannel
 $wp_customize->add_panel( 'theme_option', array(
   'priority'       => 1,
   'capability'     => 'edit_theme_options',
   'title'          => __('Theme Option', 'kessel'),
   'description'    => __('Several settings pertaining top header', 'kessel'),
   ) );
//creating the add section for header title
 $wp_customize->add_section('header_title', array(
   'title'           => __('Header Section', 'kessel'),
   'description'     => __('','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
//creating the setting for header title text
 $wp_customize->add_setting( 'header_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for header title text
 $wp_customize->add_control( 'header_text', array(
   'type' => 'text',
   'section' => 'header_title',
   'label' => __( '', 'kessel' ),
   'description' => __( 'Input your Header Title', 'kessel' ),
   ) );


//creating the add section for Banner title
 $wp_customize->add_section('banner_section', array(
   'title'           => __('Banner Section', 'kessel'),
   'description'     => __('','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
   // function made for the control of fetching post id,title,content
   $fetch_pages_list = array();
$args = array('post_type' => 'page');
$posts_u = get_posts( $args ); 
foreach($posts_u as $rt) {
   $fetch_pages_list[$rt->ID] = $rt->post_title;
}

   $wp_customize->add_section('post_title', array(
   'title'           => __('Select Page Title', 'kessel'),
   'description'     => __('Select any Page You want to display','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
//creating the setting for post title text
 $wp_customize->add_setting( 'post_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for post display
 $wp_customize->add_control( 'post_text', array(
   'type' => 'select',
   'section' => 'banner_section',
   'choices' => $fetch_pages_list,
   'label' => __( 'Page Title', 'kessel' ),
   'description' => __( 'Select your Page Title.', 'kessel' ),
   ) );
 //choices is used to make dropdown the variables where variables contains the list of the posts


   $wp_customize->add_section('about_section', array(
   'title'           => __('About Section', 'kessel'),
   'description'     => __('','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));

//creating the setting for about title text
 $wp_customize->add_setting( 'about_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for about title text
 $wp_customize->add_control( 'about_text', array(
   'type' => 'textbox',
   'section' => 'about_section',
   'label' => __( 'About Title', 'kessel' ),
   'description' => __( 'Input your About Page Title.', 'kessel' ),
   ) );
 
//creating the setting for about description text area
 $wp_customize->add_setting( 'about_textarea', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for about title textarea
 $wp_customize->add_control( 'about_textarea', array(
   'type' => 'textarea',
   'section' => 'about_section',
   'label' => __( 'About Description', 'kessel' ),
   'description' => __( 'Input your About Page Description', 'kessel' ),
   ) );

//creating the setting for about title text
 $wp_customize->add_setting( 'about_textbtn', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for about title text
 $wp_customize->add_control( 'about_textbtn', array(
   'type' => 'textbox',
   'section' => 'about_section',
   'label' => __( 'About Button', 'kessel' ),
   'description' => __( 'Input your About Page Button.', 'kessel' ),
   ) );

//creating the setting for about title text
 $wp_customize->add_setting( 'button_dir', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );

$wp_customize->add_control( 'button_dir', array(
   'section'    => 'about_section',
   'type'       => 'radio',
   'choices'    => array(
      '#services'=> 'Go To Services',
       '#about' => 'Go To About',
       '#portfolio' => 'Go To Portfolio',
       '#contact' => 'Go To Contact',

       )
) );

$wp_customize->add_section('service_section', array(
   'title'           => __('Services Section', 'kessel'),
   'description'     => __('','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));

//creating the setting for about title text
 $wp_customize->add_setting( 'service_title', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for about title text
 $wp_customize->add_control( 'service_title', array(
   'type' => 'textbox',
   'section' => 'service_section',
   'label' => __( 'Service Title', 'kessel' ),
   'description' => __( 'Input your Service section Title.', 'kessel' ),
   ) );
 


//creating the add section for external link title
 $wp_customize->add_section('call_on', array(
   'title'           => __('Call On Action Section', 'kessel'),
   'description'     => __('','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
//creating the setting for external link title text
 $wp_customize->add_setting( 'elink_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'elink_text', array(
   'type' => 'text',
   'section' => 'call_on',
   'label' => __( 'External Link Title', 'kessel' ),
   'description' => __( 'Input your Link Title', 'kessel' ),
   ) );

 $wp_customize->add_setting( 'callon_button', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'callon_button', array(
   'type' => 'text',
   'section' => 'call_on',
   'label' => __( ' Call on button Title', 'kessel' ),
   'description' => __( 'Input your Call On button  Text', 'kessel' ),
   ) );

//creating the setting for external link title text
 $wp_customize->add_setting( 'e_link', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'e_link', array(
   'type' => 'text',
   'section' => 'call_on',
   'label' => __( 'External Link ', 'kessel' ),
   'description' => __( 'Input your external Link ', 'kessel' ),
   ) );//creating the Contact customization pannel
 
//creating the add section for external link title
 $wp_customize->add_section('contact_section', array(
   'title'           => __('Contact Section ', 'kessel'),
   'description'     => __('','kessel'),
   'priority'        => 1,
   'panel'           => 'theme_option',
   ));
//creating the setting for external link title text
 $wp_customize->add_setting( 'ctitle_text', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'ctitle_text', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( 'Contact Title', 'kessel' ),
   'description' => __( 'Input your Contact Section Title', 'kessel' ),
   ) );

 //creating the setting for external link title text
 $wp_customize->add_setting( 'contact_des', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'contact_des', array(
   'type' => 'textarea',
   'section' => 'contact_section',
   'label' => __( 'Contact Description', 'kessel' ),
   'description' => __( 'Input your Contact Section Description', 'kessel' ),
   ) );

 //creating the setting for external link title text
 $wp_customize->add_setting( 'contact_num', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'contact_num', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( 'Contact Number', 'kessel' ),
   'description' => __( 'Input your Contact Number', 'kessel' ),
   ) );
//creating the setting for external link title text
 $wp_customize->add_setting( 'contact_email', array(
   'type' => 'theme_mod',
   'capability' => 'edit_theme_options',
   'default' => '',
   ) );
//creating the control for External Link title text
 $wp_customize->add_control( 'contact_email', array(
   'type' => 'text',
   'section' => 'contact_section',
   'label' => __( 'Contact E-mail', 'kessel' ),
   'description' => __( 'Input your E-mail', 'kessel' ),
   ) );


}
add_action('customize_register', 'first_customizer_register');

