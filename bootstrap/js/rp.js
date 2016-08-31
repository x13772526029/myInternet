var app = angular.module('app', []);

app.controller('neon', function($scope, $element) {
  var _name = 'jzSong ';
  $scope.user = {
    name: function(newName) {
      return arguments.length ? (_name = newName) : _name;
    }
  };
  document.getElementById("focus").focus();
});