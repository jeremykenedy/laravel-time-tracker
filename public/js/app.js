(function() {

  'use strict';

  angular
    .module('timeTracker', [
      'ngResource',
      'ui.bootstrap'
    ], function($interpolateProvider) {

        $interpolateProvider.startSymbol('<%');
        $interpolateProvider.endSymbol('%>');

    });

})();