'use strict';

angular.module('productService')
.factory('ProductService', ['$resource',
    function ($resource) {
        return $resource('/api/products/:id', {}, {
            query: { method: "GET", isArray: true },
            create: { method: "POST"},
            get: { method: "GET"},
            remove: { method: "DELETE"},
            update: { method: "PUT"},
            upload: { url:"/api/upload", method: "POST"
            , transformRequest: angular.identity
            ,headers: { 'Content-Type': undefined }}
        });
}]);