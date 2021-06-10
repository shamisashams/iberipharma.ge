/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
$(document).ready(function () {
  var oldImages = $('#old_images').val();

  if (oldImages) {
    oldImages = JSON.parse(oldImages);
  }

  var imagedata = [];
  var getUrl = window.location;
  var baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[0];

  if (oldImages && oldImages.length > 0) {
    oldImages.forEach(function (el, key) {
      var directory = '';

      if (el.fileable_type === "App\\Models\\User") {
        directory = 'user';
      }

      if (el.fileable_type === 'App\\Models\\Product') {
        directory = 'product';
      }

      imagedata.push({
        id: el.id,
        src: "".concat(baseUrl, "storage/").concat(directory, "/").concat(el.fileable_id, "/").concat(el.name)
      });
    });
    $('.input-images').imageUploader({
      preloaded: imagedata,
      imagesInputName: 'images',
      preloadedInputName: 'old_images'
    });
  } else {
    $('.input-images').imageUploader();
  }
});
/******/ })()
;