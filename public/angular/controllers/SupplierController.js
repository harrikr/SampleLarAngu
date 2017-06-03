app.controller('SupplierController', function($scope, $http, API_URL) {
  // retrieve Supplier listing from API
  $http.get(API_URL + "supplier")
  .success(function(response){
    $scope.suppliers = response;
  });

  // show modal Form
  $scope.toggle = function(modalstate, id) {
      $scope.modalstate = modalstate;
      switch(modalstate) {
        case 'add':
          $scope.form_title = "Tambah";
          break;
        case 'edit':
          $scope.form_title = "Detail";
          $scope.id = id;
          $http.get(API_URL + 'supplier/' + id).success(function(response){
            console.log(response);
            $scope.supplier = response;
          });
          break;
        default:
          break;
      }
      console.log(id);
      $('#myModal').modal('show');
  }

  // save new supplier and update existing supplier
  $scope.save = function(modalstate, id) {
    var url = API_URL + "supplier";
    if (modalstate === 'edit') {
      url += "/" + id;
    }
    $http({
      method: 'POST',
      url: url,
      data: $.param($scope.supplier),
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}
    }).success(function(response){
      console.log(response);
      location.reload();
    }).error(function(response){
      console.log(response);
      alert('Terjadi kesalahan. mohon cek LOG kembali');
    });
  }

 // delete supplier record
 $scope.confirmDelete = function(id) {
   var isConfirmDelete = confirm('Yakin ingin menghapus?');
   if (isConfirmDelete) {
     $http({
       method: 'DELETE',
       url: API_URL + 'supplier/' + id
     }).success(function(data){
       console.log(data);
       location.reload();
     }).error(function(data){
       console.log(data);
       alert('Tidak bisa dihapus.');
     });
   } else {
     return false;
   }
 }
});