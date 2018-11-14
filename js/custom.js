jQuery(document).ready(function () {

    jQuery('.portfolio-item').off();
    jQuery('.portfolio-item').on('click', function (e) {
        e.preventDefault();
        var post_link = jQuery(this).attr('href');
        jQuery('.post-overlay').show();
        jQuery('.post-overlay').html('<img src="https://tenor.com/view/loader-gif-7427055" />').load(post_link);
        jQuery('#page-top').addClass('stop-scroll');

    });

    function close_popup() {
        jQuery('.post-overlay').hide();
        jQuery('#page-top').removeClass('stop-scroll');;
    }

    jQuery(document).on('click', '.portfolio-modal-dismiss', '.close-button', function () {
        close_popup();
    })
});
