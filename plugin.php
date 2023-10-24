<?php
/*
Plugin Name: Density Calculator by Calculator.iO
Plugin URI: https://www.calculator.io/density-calculator/
Description: This volume calculator uses a density formula ρ = m/V to find densities of different substances and objects. It calculates the third one for two given values - density, mass, or volume of a substance.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_density_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Density Calculator by Calculator.iO";

function display_ci_density_calculator(){
    $page = 'index.html';
    return '<h2><a href="https://www.calculator.io/density-calculator/" target="_blank"><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48"></a> Density Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_density_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_density_calculator', 'display_ci_density_calculator' );