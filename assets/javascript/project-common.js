
function loadImages(handle, target_id) {
    document.addEventListener('DOMContentLoaded', function() {
            // var userRating = document.querySelector(handle);
            var data = $(handle).data('isAuthenticated');
            var im_ls ="";

            // Iterate over each file in the array
            $.each(data, function(key, value ) {
                if (value.indexOf(".jpg") >= 0) {
                    if (key == 1) {
                        im_ls = im_ls + '<img class="active image" src="' + value + '" > \n'
                    }
                    else {
                    im_ls = im_ls + '<img class="image" src="' + value + '" > \n'
                    }
                }
            });

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

function loadPortfolioCovers(handle, gallery, target_id) {
    document.addEventListener('DOMContentLoaded', function() {
            // var userRating = document.querySelector(handle);
            var data = $(handle).data('isAuthenticated');
            var files = data[0];
            var names = data[1];
            var proper_names = data[2];
            var im_ls = '<div class="grid-container"> \n';

            // Iterate over each file in the array
            $.each(files, function(key, value ) {
                    collection_name = names[key].toUpperCase()
                    proper_name = proper_names[key]
                    im_ls += '<div class="grid-item"> \n <div id="send-session" > \n'
                    im_ls += '<div class="smoky-container">'
                    im_ls += '<a href=' + gallery + '?collection=' + proper_name + '>\n'
                    im_ls += '<img src="' + value + '" alt="" id="send-session" class="button smoky-img"> \n <p class="smoky-txt"> ' 
                    + collection_name + '</p> </a>  </div> \n </div>'
                    im_ls += '\n </div> '

                    // im_ls += '<div class="grid-item"> \n'
                    // im_ls += '<div class="smoky-container">'
                    // im_ls += '<a id=send-session href=' + gallery + '>\n'
                    // im_ls += '<img src="' + value + '" alt="" class="smoky-img"> \n </a> <p class="smoky-txt"> ' 
                    // + collection_name + '</p> </div>'
                    // im_ls += '\n </div> '
            });

            im_ls += '</div> \n </div> '

            document.getElementById(target_id).innerHTML = im_ls;
        });
}   
    
