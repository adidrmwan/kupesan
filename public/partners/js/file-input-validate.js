/*
 * FilePondPluginFileValidateSize 1.0.4
 * Licensed under MIT, https://opensource.org/licenses/MIT
 * Please visit https://pqina.nl/filepond for details.
 */
!function(e,i){"object"==typeof exports&&"undefined"!=typeof module?module.exports=i():"function"==typeof define&&define.amd?define(i):e.FilePondPluginFileValidateSize=i()}(this,function(){"use strict";var e=function(e){var i=e.addFilter,l=e.utils,t=l.Type,n=l.replaceInString,E=l.toNaturalFileSize;return i("ALLOW_HOPPER_ITEM",function(e,i){var l=i.query;if(!l("GET_ALLOW_FILE_SIZE_VALIDATION"))return!0;var t=l("GET_MAX_FILE_SIZE");return!(null!==t&&e.size>t)}),i("LOAD_FILE",function(e,i){var l=i.query;return new Promise(function(i,t){if(!l("GET_ALLOW_FILE_SIZE_VALIDATION"))return void i(e);var a=l("GET_MAX_FILE_SIZE");if(null!==a&&e.size>a)return void t({status:{main:l("GET_LABEL_MAX_FILE_SIZE_EXCEEDED"),sub:n(l("GET_LABEL_MAX_FILE_SIZE"),{filesize:E(a)})}});var u=l("GET_MAX_TOTAL_FILE_SIZE");if(null!==u){var _=l("GET_ITEMS").reduce(function(e,i){return e+i.fileSize},0);if(_>u)return void t({status:{main:l("GET_LABEL_MAX_TOTAL_FILE_SIZE_EXCEEDED"),sub:n(l("GET_LABEL_MAX_TOTAL_FILE_SIZE"),{filesize:E(u)})}})}i(e)})}),{options:{allowFileSizeValidation:[!0,t.BOOLEAN],maxFileSize:[null,t.INT],maxTotalFileSize:[null,t.INT],labelMaxFileSizeExceeded:["File is too large",t.STRING],labelMaxFileSize:["Maximum file size is {filesize}",t.STRING],labelMaxTotalFileSizeExceeded:["Maximum total size exceeded",t.STRING],labelMaxTotalFileSize:["Maximum total file size is {filesize}",t.STRING]}}};return"undefined"!=typeof navigator&&document&&document.dispatchEvent(new CustomEvent("FilePond:pluginloaded",{detail:e})),e});