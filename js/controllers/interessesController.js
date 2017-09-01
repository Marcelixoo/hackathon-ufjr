// Registro de controller
angular.module('projeto').controller('interessesController', function($scope) {

  $scope.interessesUsuario = [];

  $scope.adicionarInteresse = function (valor) {
    console.log (valor);
  }
})
