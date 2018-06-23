'use strict';

angular.module('main').
    config(
        function(
          $locationProvider,
          $routeProvider
          ){
          $locationProvider.html5Mode({
              enabled:true
            })

          $routeProvider.
              when("/", {
                template: "<product-list></product-list>"
              }).
              when("/teste", {
                templateUrl: "./templates/teste.html"
              })

    });