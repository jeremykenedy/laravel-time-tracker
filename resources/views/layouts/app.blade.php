<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Time Tracker</title>

        {{-- Fonts --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

        {{-- Styles --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body id="app-layout" ng-app="timeTracker" ng-controller="TimeEntry as vm">

        @include('partials.nav')

        @yield('content')

        {{-- CDN Library Scripts --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

        {{-- Library Scripts --}}
        <script type="text/javascript" src="/js/vendor/angular.min.js"></script>
        <script type="text/javascript" src="/js/vendor/ui-bootstrap-tpls.min.js"></script>
        <script type="text/javascript" src="/js/vendor/angular-resource.min.js"></script>
        <script type="text/javascript" src="/js/vendor/moment.js"></script>

        {{-- App Scripts --}}
        <script type="text/javascript" src="/js/app.js"></script>
        <script type="text/javascript" src="/js/controllers/TimeEntry.js"></script>
        <script type="text/javascript" src="/js/services/time.js"></script>
        <script type="text/javascript" src="/js/services/user.js"></script>

    </body>
</html>