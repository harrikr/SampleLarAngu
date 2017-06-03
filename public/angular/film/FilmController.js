app.controller('FilmController', function($scope, $http, API_URL) {
  // retrieve Supplier listing from API
  $http.get(API_URL)
  .success(function(response){
    $scope.suppliers = response;
  });