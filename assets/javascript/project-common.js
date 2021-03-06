
function loadImages(handle, target_id) {
    document.addEventListener('DOMContentLoaded', function() {
            // var userRating = document.querySelector(handle);
            var data = $(handle).data('isAuthenticated');
            var im_ls ="";

            // Iterate over each file in the array
            $.each(data, function(key, value) {
                    if (key == 0) {
                        im_ls = im_ls + '<img class="active image" src="' + value.path + '" > \n'
                    }
                    else {
                    im_ls = im_ls + '<img class="image" data-src="' + value.path + '" > \n'
                    }
                }
            );

            document.getElementById(target_id).innerHTML = im_ls;
        });
}

function loadGalleryImages(handle, target_id) {
    document.addEventListener('DOMContentLoaded', function() {
            // var userRating = document.querySelector(handle);
            var data = $(handle).data('isAuthenticated');
            var im_ls ="";

            // Iterate over each file in the array
            $.each(data, function(key, value ) {
                if (value.indexOf(".jpg") >= 0) {

                        im_ls = im_ls + '<li data-thumb="' + value + '"> \n'
                        im_ls = im_ls + ' <button id="gallery_toggle"> \n <div class="middlepane" > \n'
                        im_ls = im_ls +  '<img src="' + value + '" class="active image_2"/> \n'
                        im_ls = im_ls + '</div> \n </button> \n </li>';
                    }  
            });

            document.getElementById(target_id).innerHTML = im_ls;
        });
}

function loadPortfolioCovers(handle, target_id) {
    document.addEventListener('DOMContentLoaded', function() {
            // var userRating = document.querySelector(handle);
            var data = $(handle).data('isAuthenticated');
            var im_ls = '<div class="grid-container"> \n';

            // Iterate over each file in the array
            $.each(data, function(key, value ) {
                    if(value.name != "home") {
                        im_ls += '<div class="grid-item"> \n <div id="send-session" > \n'
                        im_ls += '<div class="smoky-container">'
                        im_ls += '<a href=' + value.url + '>\n'
                        im_ls += '<img src="' + value.images[0].path + '" alt="" id="send-session" class="button smoky-img"> \n <p class="smoky-txt"> ' 
                        + value.name.toUpperCase() + '</p> </a>  </div> \n </div>'
                        im_ls += '\n </div> '

                    // im_ls += '<div class="grid-item"> \n'
                    // im_ls += '<div class="smoky-container">'
                    // im_ls += '<a id=send-session href=' + gallery + '>\n'
                    // im_ls += '<img src="' + value + '" alt="" class="smoky-img"> \n </a> <p class="smoky-txt"> ' 
                    // + collection_name + '</p> </div>'
                    // im_ls += '\n </div> '
                    }
                    else {
                        
                    }
            });

            im_ls += '</div> \n </div> '

            document.getElementById(target_id).innerHTML = im_ls;
        });
}   
    
