angular.module('dropzone', []).directive('dropzone', function () {
  return function (scope, element, attrs) {
    console.log("dropzone directive");
    var config, dropzone;
 
    config = scope[attrs.dropzone];
 
    // create a Dropzone for the element with the given options
    dropzone = new Dropzone(element[0], config.options);
 
    // bind the given event handlers
    angular.forEach(config.eventHandlers, function (handler, event) {
      dropzone.on(event, handler);
    });
  };
});
 
angular.module('commentApp', ['dropzone']);
 
angular.module('commentApp').controller('mainController', function ($scope) {
  $scope.dropzoneConfig = {
    'options': { // passed into the Dropzone constructor
      'url': '/index.php'
    },
    'eventHandlers': {
      'sending': function (file, formData, xhr) {
        console.log("sending");
      },
      'success': function (file, response) {
        console.log("success");
      }
    }
  };
});