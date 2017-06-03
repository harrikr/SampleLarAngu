<!DOCTYPE html>
<html lang="en" ng-app="getSupplier">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 5 dan Angular</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="container">
      <h2>Sample Laravel 5 dan Angular</h2>
      <div ng-controller="SupplierController">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama Supplier</th>
              <th>Email Supplier</th>
              <th>Contact Supplier</th>
              <th>Jabatan Supplier</th>
              <th>
                <button id="btn-add" class="btn btn-success btn-xs" ng-click="toggle('add', 0)">Tambah</button>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr ng-repeat="supplier in suppliers">
              <td>@{{ supplier.id }}</td>
              <td>@{{ supplier.supplierName }}</td>
              <td>@{{ supplier.supplierEmail }}</td>
              <td>@{{ supplier.supplierContact }}</td>
              <td>@{{ supplier.supplierPosition }}</td>
              <td>
                <button class="btn btn-warning btn-xs btn-detail" ng-click="toggle('edit', supplier.id)">
                  <span class="glyphicon glyphicon-edit"></span>
                </button>
                <button class="btn btn-danger btn-xs btn-delete" ng-click="confirmDelete(supplier.id)">
                  <span class="glyphicon glyphicon-trash"></span>
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <!-- show modal  -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">@{{form_title}}</h4>
              </div>
              <div class="modal-body">
                <form name="frmSupplier" class="form-horizontal" novalidate="">
                  <div class="form-group">
                    <label class="col-sm-3 control-label">Supplier Name</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="supplierName" name="supplierName" placeholder="Mohon di isi..." value="@{{supplierName}}" ng-model="supplier.supplierName" ng-required="true">
                      <span ng-show="frmSupplier.supplierName.$invalid && frmSupplier.supplierName.$touched">Field Nama Supplier dibutuhkan</span>
                    </div>
                  </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Email Supplier </label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="supplierEmail" name="supplierEmail" placeholder="Mohon di isi..." value="@{{supplierEmail}}" ng-model="supplier.supplierEmail" ng-required="true">
                        <span ng-show="frmSupplier.supplierEmail.$invalid && frmSupplier.supplierEmail.$touched">Field Email Supplier dibutuhkan</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Contact Supplier</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="supplierContact" name="supplierContact" placeholder="Mohon di isi..." value="@{{supplierContact}}" ng-model="supplier.supplierContact" ng-required="true">
                        <span ng-show="frmSupplier.supplierContact.$invalid && frmSupplier.supplierContact.$touched">Field Contact Supplier dibutuhkan</span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-sm-3 control-label">Jabatan Supplier </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="supplierPosition" name="supplierPosition" placeholder="Mohon di isi..." value="@{{supplierPosition}}" ng-model="supplier.supplierPosition" ng-required="true">
                        <span ng-show="frmSupplier.supplierPosition.$invalid && frmSupplier.supplierPosition.$touched">Field Jabatan Supplier dibutuhkan</span>
                      </div>
                    </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btn-save" ng-click="save(modalstate, id)" ng-disabled="frmSupplier.$invalid">Simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- Aangular Material load from CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.1/angular-material.min.js"></script>

    <!-- Angular Application Scripts Load  -->
    <script src="{{ asset('angular/app.js') }}"></script>
    <script src="{{ asset('angular/controllers/SupplierController.js') }}"></script>
  </body>
</html>