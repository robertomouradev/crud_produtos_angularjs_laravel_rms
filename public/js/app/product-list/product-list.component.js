'use strict';

angular.module('productList').
    component('productList', 
	{
        templateUrl: './templates/product-list.html',
        controller:function(ProductService,$scope)
		{
			$scope.products = [];
			getProductList();
			
			//atualiza lista de produtos
			function getProductList()
			{
				$(".modal").modal("hide");
				ProductService.query({}, function(data) {
					//response
					$scope.products = data;
				});
            }
			
			// Create new product
			$scope.createProduct = function(product)
			{
				if($scope.produto.fd != undefined)
				{
					uploadFile($scope.produto.fd,$scope.createProduct);
					return;
				}
				ProductService.create(product, function(data) {
					//response
					console.log(data);
					getProductList();
				});
			};
			/*
			// Get single product
			$scope.getProduct = function(id)
			{
				ProductService.get({id:id}, function(data) {
				   //response
				   
				});
			};
			*/
			// Update product
			$scope.updateProduct =  function(product)
			{
				delete $scope.produto.imagemData;
				
				if($scope.produto.fd != undefined)
				{
					uploadFile($scope.produto.fd,$scope.updateProduct);
					return;
				}
				ProductService.update({id:product.id},product, function(data) {
					//response
					console.log(data);
					getProductList();
			   });
			   
			};
			
			// Upload file
			function uploadFile(fd,callBackFunction)
			{
				ProductService.upload(fd, function(data) {
					//response
					$scope.produto.imagem = data.message;//pega url imagem produto
					delete $scope.produto.fd;//deleta form data
					callBackFunction($scope.produto);//atualiza ou cria com url imagem
			   });
			   
			};
			
			// Delete product
			$scope.deleteProduct = function(id)
			{
				ProductService.remove({id:id}, function(data) {
					//response
					getProductList();
				});
			};
            			
			$scope.updateProductScope = function(produto)
			{
				$scope.produto = angular.copy(produto);
				$scope.imgBase64Tmp = "";
			};
			
			$scope.selectImageFile= function(el)
			{
				var file = el.files[0];
				var fd = new FormData();
				fd.append("imagem", file);
				$scope.produto.fd = fd;
				var reader = new FileReader();
				reader.onload = (function(theFile)
				{
					return function(e)
					{
						$scope.produto.imagem = "";
						$scope.imgBase64Tmp = e.target.result;
						$scope.$apply();
					};
				})(file);
				reader.readAsDataURL(file);
			}


        }
    });