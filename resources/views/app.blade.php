<!DOCTYPE html>
<html lang="en" ng-app='democracy'>
    <head>
        <title>Democracy</title>
        <link href="{{ asset('/css/libs/angular-csp.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/libs/angular-material.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('/css/app.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=RobotoDraft:300,400,500,700,400italic">
        <meta name="viewport" content="initial-scale=1" />
    </head>
    <body layout="column" ng-controller="AppCtrl">
        <md-toolbar layout="row">
          <div class="md-toolbar-tools">
            <md-button ng-click="toggleSidenav('left')" hide-gt-sm class="md-icon-button">
              <md-icon aria-label="Menu" md-svg-icon="https://s3-us-west-2.amazonaws.com/s.cdpn.io/68133/menu.svg"></md-icon>
            </md-button>
            <h1>Hello World</h1>
          </div>
        </md-toolbar>
        <div layout="row" flex>
            <md-sidenav layout="column" class="md-sidenav-left md-whiteframe-z2" md-component-id="left" md-is-locked-open="$mdMedia('gt-sm')">
              
            </md-sidenav>
            <div layout="column" flex id="content">
                <md-content layout="column" flex class="md-padding">
                
                </md-content>
            </div>
        </div>
        <script src="{{ asset('/js/libs/angular.js') }}"></script>
        <script src="{{ asset('/js/libs/angular-animate.js') }}"></script>
        <script src="{{ asset('/js/libs/angular-aria.js') }}"></script>
        <script src="{{ asset('/js/libs/angular-material.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>