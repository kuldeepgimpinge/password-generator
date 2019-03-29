<?php
/*

* Plugin Name: password-generator
* Plugin URI : https://www.impingesolutions.com/
* Description: This is password generator plugins
* Version    : 1.2
* Author 	 : Imping
* Author URI : https://www.impingesolutions.com/
*/


//This is custom function to generate the plugins
function my_plugins_page() {

?>

    <!--This is the html layout used for generate the plugins---->
    <style>
        .entry-title{display:none;}
        .entry-header{display:none;}

    </style>
     
	<div class="container">
		<div class="col-sm-12 lp-intro">
			<span class="lp-eyebrow">PASSWORD GENERATOR TOOL</span>
			<h1>Generate a secure password</h1>
			<h4>Use our online password generator to instantly create a secure, random password.</h4>
		</div>
		<div class="lp-pg-gp">
				<div class="lp-pg-gp-code">
					<h3 id="code"></h3>
				</div>
				<div class="lp-gp-icon">
					<div class="lp-gp-generate-icon" onclick="randomString()">
					</div>
				</div>
        </div>
		<div class="lp-pg-settings">
			<div class="lp-pg-title">
				<h3 class="lp-pg-settings__title">Customize your password</h3>
			</div>
			<div class="lp-custom-range__wrapper">
                        <label class="lp-custom-range__label" for="lp-pg-password-length">
                            Password Length
                        </label>
            <div class="lp-custom-range__inner">
            <div class="range-slider">
                <input value="12" name="length" class="lp-custom-range__number range-slider__dyn" step="1" id="passLength" type="number" min="0" max="100" onclick="randomString()">
                 <div class="blockDiv">
                 <input class="range-slider__range" onclick="randomString()" type="range" value="12" min="0" max="100"> 
                 <div class="loading-progree-bar" style="width:12%"></div>
                 </div>
            </div>
            </div>
        </div>
			<div class="lp-row">
                    <div class="lp-pg-settings__radio-wrap">
                        <div class="lp-radio">
                            <input class="lp-radio__input" id="lp-pg-easy-to-say"  name="encryption-style" type="radio" value="easy-to-say">
                            <label class="lp-radio__label" for="lp-pg-easy-to-say"  onclick="randomString('2')" >
                                Easy to say
                            </label>
                                <div class="lp-icon__info">
                            </div>
                        </div>
                        <div class="lp-radio">
                            <input class="lp-radio__input" id="lp-pg-easy-to-read" name="encryption-style" type="radio" value="easy-to-read">
                            <label class="lp-radio__label" for="lp-pg-easy-to-read" onclick="randomString('option')">
                                Easy to read
                            </label>
                                <div class="lp-icon__info">
                                </div>
                        </div>
                        <div class="lp-radio">
                            <input class="lp-radio__input"  id="lp-pg-all-characters" checked="checked" name="encryption-style" type="radio" value="all-characters">
                            <label class="lp-radio__label" for="lp-pg-all-characters" onclick="randomString('all');">
                                All characters
                            </label>
                                <div class="lp-icon__info">
                                </div>
                        </div>
                    </div>
                    <div class="lp-pg-settings__checkbox-wrap">
                        <div class="lp-checkbox">
                            <input class="lp-checkbox__input" checked="checked" id="UBoxCheck" type="checkbox" name="uppercase" onclick="randomString()">
                            <label class="lp-checkbox__label" for="UBoxCheck">
                                Uppercase
                            </label>
                        </div>
                        <div class="lp-checkbox">
                            <input class="lp-checkbox__input" checked="checked" id="LBoxCheck" type="checkbox" name="lowercase" onclick="randomString()">
                            <label class="lp-checkbox__label" for="LBoxCheck">
                                Lowercase
                            </label>
                        </div>
                        <div class="lp-checkbox">
                            <input class="lp-checkbox__input" checked="checked" id="NBoxCheck" type="checkbox"  name="numbers" onclick="randomString()">
                            <label class="lp-checkbox__label" for="NBoxCheck">
                                Numbers
                            </label>
                        </div>
                        <div class="lp-checkbox">
                            <input class="lp-checkbox__input" checked="checked" id="SBoxCheck" type="checkbox" name="symbols" onclick="randomString()">
                            <label class="lp-checkbox__label" for="SBoxCheck">
                                Symbols
                            </label>
                        </div>
                    </div>
            </div>	
		</div>
			<div class="lp-pg-copy-password">
                <button onclick="copyToClipboard()" data-clipboard-target="#GENERATED-PASSWORD" class="lp-pg-copy-password__button lp-button lp-button__red lp-button__jumbo">
                    Copy Password
                </button>
            </div>
	</div>
    <script>randomString('all')</script>
<?php
}

//This function is used to generate the Shortcode of the plugin
add_shortcode('PasswordGenerator','my_plugins_page');

// This function is used to add the scripts and style of the plugin
add_action('wp_enqueue_scripts','register_my_scripts');

//This is used to include the style and script file
function register_my_scripts(){
    wp_enqueue_style ('style-plugin', plugins_url( 'assets/css/style.css' , __FILE__ ) );
    wp_enqueue_style ('bootstrap-plugin', plugins_url( 'assets/css/bootstrap.min.css' , __FILE__ ) );
    wp_enqueue_script('custom', 'http://code.jquery.com/jquery-2.2.4.min.js', '', '', true);
    wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', '', '', true);
    wp_enqueue_script('main',  plugins_url( 'assets/js/main.js' , __FILE__ ) );
}

?>