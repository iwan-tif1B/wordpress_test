<?php if (!defined('ABSPATH')) die('Direct access forbidden.');
/**
 * customizer option: general
 */
$options =[
    'preloader_settings' => [
            'title'		 => esc_html__( 'Preloader settings', 'blo' ),
            'options'	 => [
                'show_preloader' => array(
                    'type'         => 'multi-picker',
                    'label'        => false,
                    'desc'         => false,
                    'picker'       => array(
                        'show_preloader' => array(
                            'type'			 => 'switch',
                            'label'		 => esc_html__( 'Show Preloader', 'blo' ),
                            'value'       => 'yes',
                            'left-choice'	 => [
                                'value'   	     => 'yes',
                                'label'	        => esc_html__( 'Yes', 'blo' ),
                            ],
                            'right-choice'	 => [
                                'value'	 => 'no',
                                'label'	 => esc_html__( 'no', 'blo' ),
                            ],

                        )
                    ),
                    'choices'      => array(
                        'yes' => array(
                            'preloader_style' => array(
                                'type'         => 'multi-picker',
                                'label'        => false,
                                'desc'         => false,
                                'picker'       => array(
                                    'svg_style' => array(
                                        'type'			 => 'switch',
                                        'label'		 => esc_html__( 'Custom svg', 'blo' ),
                                        'value'       => 'custom',
                                        'left-choice'	 => [
                                            'value'   	     => 'custom',
                                            'label'	        => esc_html__( 'Custom', 'blo' ),
                                        ],
                                        'right-choice'	 => [
                                            'value'	 => 'simple',
                                            'label'	 => esc_html__( 'Simple', 'blo' ),
                                        ],

                                    )
                                ),
                                'choices'      => array(
                                    'custom' => array(
                                        'custom_svg'=> array(
                                            'type'  => 'textarea',
                                            'value' => '<div class="preloder-logo">
        <svg version="1.1" id="xs_animated_logo_loder" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 487.9 190" enable-background="new 0 0 487.9 190" xml:space="preserve" style="" class="">
<g><g><path fill="none" id="path-1" stroke-width="4px" stroke="#000000" stroke-miterlimit="10" d="M154.4,149h-47.6V41h45.6c11.9,0,20.8,2.8,26.8,8.3
			c6,5.5,9,12.6,9,21.4c0,5.6-1.3,10.4-4,14.5c-2.7,4.1-6.4,7.2-11,9.3c5.1,1.9,9.1,5,12.1,9.1c3,4.2,4.5,9.1,4.5,14.7
			c0,9.5-3,17-9.1,22.4C174.6,146.3,165.9,149,154.4,149z M152.3,61h-23.9v23.4h23.9c4.4,0,7.7-1,10.1-3c2.4-2,3.6-4.9,3.6-8.7
			c0-3.4-1.1-6.3-3.4-8.4C160.3,62,156.8,61,152.3,61z M153.8,104.4h-25.4V129h25.4c9.1,0,13.7-4.1,13.7-12.3c0-3.7-1.1-6.7-3.4-9
			C161.8,105.5,158.4,104.4,153.8,104.4z" class="dRdcDtGX_0"></path>
        <path fill="none" id="path-2" stroke-width="4px" stroke="#000000" stroke-miterlimit="10" d="M271.9,128.6V149h-70.1V41H224v87.6H271.9z" class="dRdcDtGX_1"></path>
        <path fill="none" id="path-3" stroke-width="4px" stroke="#000000" stroke-miterlimit="10" d="M365.2,54.7C375.8,65.4,381,78.8,381,95c0,16.2-5.3,29.6-15.8,40.3
			c-10.5,10.6-24,16-40.3,16c-16.3,0-29.7-5.3-40.3-16c-10.5-10.6-15.8-24.1-15.8-40.3c0-16.2,5.3-29.6,15.8-40.3
			c10.5-10.6,24-16,40.3-16C341.3,38.8,354.7,44.1,365.2,54.7z M348.5,120.5c6.1-6.4,9.1-14.9,9.1-25.5c0-10.5-3-19-9.1-25.5
			c-6.1-6.4-13.9-9.7-23.6-9.7c-9.6,0-17.5,3.2-23.6,9.7c-6.1,6.4-9.1,14.9-9.1,25.5c0,10.5,3,19,9.1,25.5
			c6.1,6.4,13.9,9.7,23.6,9.7C334.6,130.1,342.4,126.9,348.5,120.5z" class="dRdcDtGX_2"></path>
    </g>
    <g><g><path fill="none" id="path-4" stroke-width="6px" stroke="#000000" stroke-miterlimit="10" d="M0,0L487.9,0" class="dRdcDtGX_3"></path></g><g>
            <path fill="none" id="path-5" stroke-width="6px" stroke="#000000" stroke-miterlimit="10" d="M0,190L487.9,190" class="dRdcDtGX_4"></path></g></g></g>
            <style data-made-with="vivus-instant">.dRdcDtGX_0{stroke-dasharray:598 600;stroke-dashoffset:599;animation:dRdcDtGX_draw_0 5450ms ease-in-out 0ms infinite,dRdcDtGX_fade 5450ms linear 0ms infinite;}.dRdcDtGX_1{stroke-dasharray:357 359;stroke-dashoffset:358;animation:dRdcDtGX_draw_1 5450ms ease-in-out 0ms infinite,dRdcDtGX_fade 5450ms linear 0ms infinite;}.dRdcDtGX_2{stroke-dasharray:573 575;stroke-dashoffset:574;animation:dRdcDtGX_draw_2 5450ms ease-in-out 0ms infinite,dRdcDtGX_fade 5450ms linear 0ms infinite;}.dRdcDtGX_3{stroke-dasharray:488 490;stroke-dashoffset:489;animation:dRdcDtGX_draw_3 5450ms ease-in-out 0ms infinite,dRdcDtGX_fade 5450ms linear 0ms infinite;}.dRdcDtGX_4{stroke-dasharray:488 490;stroke-dashoffset:489;animation:dRdcDtGX_draw_4 5450ms ease-in-out 0ms infinite,dRdcDtGX_fade 5450ms linear 0ms infinite;}@keyframes dRdcDtGX_draw{100%{stroke-dashoffset:0;}}@keyframes dRdcDtGX_fade{0%{stroke-opacity:1;}97.24770642201835%{stroke-opacity:1;}100%{stroke-opacity:0;}}@keyframes dRdcDtGX_draw_0{5.5045871559633035%{stroke-dashoffset: 599}18.646267930861743%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes dRdcDtGX_draw_1{18.646267930861743%{stroke-dashoffset: 358}26.5005612821366%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes dRdcDtGX_draw_2{26.5005612821366%{stroke-dashoffset: 574}39.09375788445998%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes dRdcDtGX_draw_3{39.09375788445998%{stroke-dashoffset: 489}49.822108300028155%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}@keyframes dRdcDtGX_draw_4{49.822108300028155%{stroke-dashoffset: 489}60.550458715596335%{ stroke-dashoffset: 0;}100%{ stroke-dashoffset: 0;}}</style></svg>

    </div>',
                                            'label' => __('Custom svg code', 'blo'),
                                            'desc'  => '<a href="https://support.xpeedstudio.com/knowledgebase/how-to-create-your-own-svg-preloader-with-animation-for-blo-theme/" target="_blank">'.__('Please check how to create your own svg preloader with animation', 'blo').'</a>',

                                        )
                                    ),
                                    'simple' => array(
                                        'preloader'=> array(
                                            'type'  => 'image-picker',
                                            'value' => 'oval',
                                            'label' => false,
                                            'choices' => array(
                                                'oval' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/oval.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'audio' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/audio.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'ball-triangle' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/ball-triangle.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'bars' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/bars.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'circles' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/circles.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'grid' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/grid.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'hearts' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/hearts.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'puff' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/puff.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'rings' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/rings.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),'spinning-circles' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/spinning-circles.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                                'three-dots' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/three-dots.svg',
                                                        'height' => 45,
                                                        'width' => 45,

                                                    ),
                                                ),
                                                'tail-spin' => array(
                                                    // (required) url for thumbnail
                                                    'small' => array(
                                                        'src' => BLO_IMG.'/preloader/tail-spin.svg',
                                                        'height' => 45,
                                                        'width' => 45,
                                                    ),
                                                ),
                                            ),
                                            /**
                                             * Allow save not existing choices
                                             * Useful when you use the select to populate it dynamically from js
                                             */
                                            'no-validate' => false,
                                        )
                                    ),



                                ),
                                'show_borders' => false,
                            ),
                        ),



                    ),
                    'show_borders' => false,
                ),



            ],
        ],
    ];