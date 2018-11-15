jQuery(document).ready(function () {

    jQuery('.portfolio-item').off();
    jQuery('.portfolio-item').on('click', function (e) {
        e.preventDefault();
        var post_link = jQuery(this).attr('href');
        var post_title = jQuery(this).attr('data-name');
        
        var srcS = Array();
        var srcset = jQuery(this).find('img').attr('srcset').split(', ');
        for( el in srcset ){
            var ar = srcset[el].split(' ');       
            srcS.push(ar[0]); 
        }
        
        jQuery('body').append('<div class="portfolio-modal mfp-hide" id="portfolio-modal-1"><div class="portfolio-modal-dialog bg-white"><a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#"><i class="fa fa-3x fa-times"></i></a><div class="container text-center"><div class="row"><div class="col-lg-8 mx-auto"><h2 class="text-secondary text-uppercase mb-0">'+post_title+'</h2><hr class="star-dark mb-5"><div class="post-image"><img src="'+srcS[1]+'"></div><div class="post-content mt-5"><img src="wp-content/themes/freelanceportfolio/img/loader.gif"></div> <a class="btn btn-primary btn-lg rounded-pill portfolio-modal-dismiss" href="#"> <i class="fa fa-close"></i> Close Project</a> </div> </div> </div></div></div>');
        
        jQuery('.post-content').load(post_link+' .post-content *');
        
        jQuery('.close-button').on('click',function(){
            jQuery('.portfolio-modal').remove();
        });
                

    });
});
