// ********************************************************************
// Product      : FlexiContact
// Date         : 27 September 2023
// Copyright    : Les Arbres Design 2012-2023
// Contact      : https://www.lesarbresdesign.info
// Licence      : GNU General Public License
// *********************************************************************
//
// Back end Javascript for FlexiContact
//
jQuery(document).ready(function() { 
    jQuery('.ladj-change-submit').on('change', lad_submit); 
    jQuery('.ladj-click-submit').on('click', lad_submit); 
    jQuery('.ladj-check-all').on('click', function() {Joomla.checkAll(this)}); 
    jQuery('.ladj-preview').on('click', lad_preview); 
    jQuery('.ladj-copy_to_clipboard').on('click', lad_copy_to_clipboard);     
    if (jQuery('#show_copy').length)
        {
    	jQuery('#show_copy').on('change', fc_email_option);
        fc_email_option();
        }
    jQuery('.fcj-colour-picker').on('click', fc_button_class);
    jQuery('#button_text').on('input', fc_set_button_preview);
    if (jQuery('.fcj-button-preview').length)
        fc_set_button_preview();
    jQuery('.fcj-button-preview').on('click', fc_preview_click);
});

function lad_submit(e)
{
    e.preventDefault();    
    if (typeof(jQuery(this).attr('data-controller')) != 'undefined') 
        this.form.controller.value = jQuery(this).attr('data-controller');
    if (typeof(jQuery(this).attr('data-task')) != 'undefined') 
        this.form.task.value = jQuery(this).attr('data-task');
    this.form.submit();
}

function lad_preview(e)
{
    e.preventDefault();    
    var prevInput = jQuery(this).prev().val();
    if (prevInput == '')
        return;
    var prefix = prevInput.substring(0, 4);
    if (prefix === 'http')
        var link = prevInput;
    else
        {
        var data_jroot = jQuery(this).attr('data-jroot'); 
        var link = window.location.origin + data_jroot + '/' + prevInput;
        }
    window.open(link,'linkpreview','width=640,height=480,scrollbars=1,location=0,menubar=0,resizable=1');
}

function lad_copy_to_clipboard()
{
    var ta = document.createElement('textarea');
    ta.id = 'ta'; 
    ta.style.height = 0; 
    document.body.appendChild(ta);
    ta.value = this.innerHTML; 
    ta.select();
    document.execCommand('copy'); 
    document.body.removeChild(ta);
    var text_copy = Joomla.JText._('COM_FLEXICONTACT_COPY');
    var text_copied = Joomla.JText._('COM_FLEXICONTACT_COPIED');
    if (typeof(bootstrap) == 'undefined')
        {  // Bootstrap 3
        jQuery('.hasTooltip').attr('title',text_copy).tooltip('fixTitle');
        jQuery(this).attr('title', text_copied).tooltip('fixTitle').tooltip('show');
        }
    else
        {  // Bootstrap > 3
        jQuery('.hasTooltip').attr('data-bs-original-title', text_copy).tooltip('_fixTitle');
        jQuery(this).attr('data-bs-original-title', text_copied).tooltip('_fixTitle').tooltip('show');
        }
}

function fc_email_option()   // email option selector on General Config
{
    if (jQuery('#show_copy').val() == '1')
        jQuery('#copyme_prompt').parents('div.control-group').show();
    else
        jQuery('#copyme_prompt').parents('div.control-group').hide();        
}

//-------------------------------------------------------------------------------------
// the button colour picker
//
function fc_button_class(e)
{
    e.preventDefault();
    var colour_class = this.className.replace('fcj-colour-picker fc_button', '');
    jQuery('#button_class').val('fc_button ' + colour_class);
    fc_set_button_preview();
}

//-------------------------------------------------------------------------------------
// update the button preview
//
function fc_set_button_preview()
{
    jQuery('.fcj-button-preview').removeClass().addClass('fcj-button-preview ');
    var sbc = jQuery('#button_class').val();
    if (sbc)
        jQuery('.fcj-button-preview').addClass(sbc);
    else
        jQuery('.fcj-button-preview').addClass('fc_button');
    var txt = jQuery('#button_text').val();
    if (txt)
        jQuery('.fcj-button-preview').val(txt);
    else
        jQuery('.fcj-button-preview').val(jQuery('.fcj-button-preview').attr('data-default'));
}

function fc_preview_click(e)
{
    e.preventDefault();
}