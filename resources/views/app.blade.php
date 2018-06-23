<!DOCTYPE html>
<html lang="en" ng-app='main'>
  <head>
	<base href="/">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD PRODUTOS</title>
	
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-resource.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular-route.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.1.3/ui-bootstrap-tpls.min.js'></script>
    
	<script src='./js/utils/confirm-click/confirm-click.module.js' ></script>
    <script src='./js/utils/confirm-click/confirm-click.directive.js' ></script>
	
    <script src='./js/external/dirPagination.js' ></script>
    <script src='./js/app/product-list/product-list.module.js' ></script>
    <script src='./js/app/product-list/product-list.component.js' ></script>
	
    <script src='./js/app/core/product/product.module.js' ></script>
    <script src='./js/app/core/product/product.service.js' ></script>
		
    <script src='./js/app/app.module.js' ></script>
    <script src='./js/app/app.config.js' ></script>
	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		#imagem
		{
		  margin-right : auto;
		  margin-left : auto;
		  max-height : 150px;
		  max-width : 150px;
		}
	</style>
  </head>
  <body>
    <div class='container'>
        <div ng-view></div>
    </div>
  </body>
</html>