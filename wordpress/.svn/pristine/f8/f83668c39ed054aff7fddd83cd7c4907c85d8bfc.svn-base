jQuery(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
     
    //TABS
    $('.tabsContent .tabContent').hide();
    $('.tabsContent .tabContent:eq(0)').show();
    $('.tabs .tab').on('click',function(){
        
        var tabIndex = $(this).index();
        
        $('.tabsContent .tabContent').hide();
        $('.tabsContent .tabContent:eq('+tabIndex+')').show();
        
        $('.tabs .tab').removeClass('active');
        $(this).addClass('active');
    });
    //TABS
    
    //SC META
    $('.googleSCCode').on('keyup',function(){

        const regex = /<meta name="google-site-verification" content="(.*?)" \/>/g;
        const str = $(this).val();
        let m;

        while ((m = regex.exec(str)) !== null) {
            // This is necessary to avoid infinite loops with zero-width matches
            if (m.index === regex.lastIndex) {
                regex.lastIndex++;
            }
            
            // The result can be accessed through the `m`-variable.
            m.forEach((match, groupIndex) => {
                $(this).val(match);
            });
        }
        
    });
    //SC META
    
    //YANDEX METRİCA
    $('.yandexMetrica').on('keyup',function(){
        
        const regex = /id:(.*?),/g;
        const str = $(this).val();
        let m;

        while ((m = regex.exec(str)) !== null) {
            // This is necessary to avoid infinite loops with zero-width matches
            if (m.index === regex.lastIndex) {
                regex.lastIndex++;
            }
            
            // The result can be accessed through the `m`-variable.
            m.forEach((match, groupIndex) => {
                $(this).val(match);
            });
        }
        
    });
    //SC META
    
});
