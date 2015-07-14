<!DOCTYPE html>
<html lang="en" ng-app='democracy'>
    <head>
        <title>Democracy</title>
        <link href="{{ asset('/css/libs.css') }}" rel="stylesheet" type="text/css">
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
                    <div layout="row">
                        <div>I'm left.</div>
                        <div>I'm right.</div>
                    </div>
                    <div layout="column">
                        <div>I'm above.</div>
                        <div>I'm below.</div>
                    </div>
                </md-content>
            </div>
        </div>
        <script src="{{ asset('/js/libs.js') }}"></script>
        <script src="{{ asset('/js/main.js') }}"></script>
    </body>
</html>