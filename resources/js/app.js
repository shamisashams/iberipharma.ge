$( document ).ready(function() {
    let oldImages = $('#old_images').val();
    if (oldImages) {
        oldImages = JSON.parse(oldImages);
    }
    let imagedata = [];
    let getUrl = window.location;
    let baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];
    if (oldImages && oldImages.length > 0) {
        oldImages.forEach((el, key) => {
            let directory = '';
            if (el.fileable_type === 'App\\Models\\Project') {
                directory = 'project';
            }
            imagedata.push({
                id: el.id,
                src: `${baseUrl}${el.path}/${el.title}`
            })
        })
        $('.input-images').imageUploader({
            preloaded: imagedata,
            imagesInputName: 'images',
            preloadedInputName: 'old_images'
        });
    } else {
        $('.input-images').imageUploader();
    }
});