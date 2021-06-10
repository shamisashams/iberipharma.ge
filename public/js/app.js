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

      if (el.fileable_type === 'App\\Models\\Project') {
        directory = 'project';
      }

      imagedata.push({
        id: el.id,
        src: "".concat(baseUrl).concat(el.path, "/").concat(el.title)
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