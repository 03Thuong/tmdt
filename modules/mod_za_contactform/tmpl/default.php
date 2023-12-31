<?php
/*
# ------------------------------------------------------------------------
# Extensions for Joomla 2.5.x - Joomla 3.x
# ------------------------------------------------------------------------
# Copyright (C) 2009-2015 za-studio.net, za-studio.ru. All Rights Reserved.
# @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
# Author: Za Studio
# Websites:  http://www.za-studio.net
# Date modified: 20/02/2015
# ------------------------------------------------------------------------
*/
defined( '_JEXEC' ) or die( 'Restricted access' );
include 'modules/mod_za_contactform/tmpl/style.php';
?>
<div id="za-formwrapper<?php echo $uniqid ?>">
<div class="morph-button morph-button-modal morph-button-modal-2 morph-button-fixed">
						<button type="button"><?php echo $label_text ?></button>
						<div class="morph-content">
							
								<div class="content-style-form content-style-form-1">
									<span class="icon icon-close">Close the dialog</span>
									<h2><?php echo $login_text ?></h2>
<div id="za_quickcontact<?php echo $uniqid ?>" class="za_contactform">
	
	<form id="za-quickcontact-form">
		
		<p>
		<input type="text" name="name" id="name" onfocus="if (this.value=='<?php echo $name_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $name_text ?>';" value="<?php echo $name_text ?>" required />
		</p><p>
		<input type="email" name="email" id="email" onfocus="if (this.value=='<?php echo $email_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $email_text ?>';" value="<?php echo $email_text ?>" required />
	</p><p>
		<input type="text" name="subject" id="subject" onfocus="if (this.value=='<?php echo $subject_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $subject_text ?>';" value="<?php echo $subject_text ?>" />
		</p><p>
		<textarea name="message" id="message" onfocus="if (this.value=='<?php echo $msg_text ?>') this.value='';" onblur="if (this.value=='') this.value='<?php echo $msg_text ?>';" cols="" rows=""><?php echo $msg_text ?></textarea>	
		</p><p>
		<?php if($formcaptcha) { ?>
			<input type="text" name="sccaptcha" placeholder="<?php echo $captcha_question ?>" required />
		<?php } ?>
		</p>
		<div id="za_qc_status"></div>
		<p>
		<input id="za_qc_submit" class="za_qc_submit" type="submit" value="<?php echo $send_msg ?>" />
		</p>
	</form>
</div>
							
						</div>
					</div></div></div>
					
					<script src="/modules/mod_za_contactform/assets/js/modernizr.custom.js"></script>	
<script src="/modules/mod_za_contactform/assets/js/classie.js"></script>					
<script src="/modules/mod_za_contactform/assets/js/uiMorphingButton_fixed.js"></script>
		<script type="text/javascript">
			(function() {
				var docElem = window.document.documentElement, didScroll, scrollPosition;

				// trick to prevent scrolling when opening/closing button
				function noScrollFn() {
					window.scrollTo( scrollPosition ? scrollPosition.x : 0, scrollPosition ? scrollPosition.y : 0 );
				}

				function noScroll() {
					window.removeEventListener( 'scroll', scrollHandler );
					window.addEventListener( 'scroll', noScrollFn );
				}

				function scrollFn() {
					window.addEventListener( 'scroll', scrollHandler );
				}

				function canScroll() {
					window.removeEventListener( 'scroll', noScrollFn );
					scrollFn();
				}

				function scrollHandler() {
					if( !didScroll ) {
						didScroll = true;
						setTimeout( function() { scrollPage(); }, 60 );
					}
				};

				function scrollPage() {
					scrollPosition = { x : window.pageXOffset || docElem.scrollLeft, y : window.pageYOffset || docElem.scrollTop };
					didScroll = false;
				};

				scrollFn();

				var UIBtnn = new UIMorphingButton( document.querySelector( '.morph-button' ), {
					closeEl : '.icon-close',
					onBeforeOpen : function() {
						// don't allow to scroll
						noScroll();
					},
					onAfterOpen : function() {
						// can scroll again
						canScroll();
					},
					onBeforeClose : function() {
						// don't allow to scroll
						noScroll();
					},
					onAfterClose : function() {
						// can scroll again
						canScroll();
					}
				} );

				document.getElementById( 'za_qc_submit' ).addEventListener( 'change', function() {
					UIBtnn.toggle();
				} );
			})();
		</script>	