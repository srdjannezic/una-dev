/*
 * Application
 */

// $(document).tooltip({
//     selector: "[data-toggle=tooltip]"
// })

/*
 * Auto hide navbar
 */
jQuery(document).ready(function($){
    var $header = $('.navbar-autohide'),
        scrolling = false,
        previousTop = 0,
        currentTop = 0,
        scrollDelta = 10,
        scrollOffset = 150

    $(window).on('scroll', function(){
        if (!scrolling) {
            scrolling = true

            if (!window.requestAnimationFrame) {
                setTimeout(autoHideHeader, 250)
            }
            else {
                requestAnimationFrame(autoHideHeader)
            }
        }
    })

    function autoHideHeader() {
        var currentTop = $(window).scrollTop()

        // Scrolling up
        if (previousTop - currentTop > scrollDelta) {
            $header.removeClass('is-hidden')
        }
        else if (currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
            // Scrolling down
            $header.addClass('is-hidden')
        }

        previousTop = currentTop
        scrolling = false
    }

    //load more
    var post_counter = 2;
    $('body').on('click', '.pagination > li > a', function (event) {
       // reference the href attribute of the list item anchor tag
        var page = $(this).attr('href');

        event.preventDefault(); 
        $('.load-more').hide();
        $('.blog-loader').show();
        if ($(this).attr('href') != '#') {
            $('body').find('form.filterPosts').request('onFilterPosts', { 
                data: {page: page,
                    type: 'loadmore'},
                update:{
                    'blog/posts':'.work-list'
                },
                success: function(data){
                    //console.log(data);
                    $.each(data,function(index,value){
                         $('.work-list').append(value);
                    });
                      post_counter ++;
                      let last = $('form.filterPosts').data('last');

                      $('.load-more').attr('href','?page='+post_counter);
                      console.log(post_counter);
                      console.log(last);
                      if(post_counter <= last){
                        $('.load-more').show();
                      }
                      else{
                         $('.load-more').hide();
                      }              
                    //getVideosThumbs(); 
                   
                    $('.blog-loader').hide();
                },
            });
        }
    });
});

