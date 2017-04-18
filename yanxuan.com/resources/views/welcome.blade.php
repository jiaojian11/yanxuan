<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;   
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            @font-face {
                  font-family: 'Lato';
                  font-style: normal;
                  font-weight: 100;
                  src: local('Lato Hairline'), local('Lato-Hairline'), url(https://fonts.gstatic.com/s/lato/v13/boeCNmOCCh-EWFLSfVffDg.woff) format('woff');
                }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title"><a href="">Reception</a></div>
                <div class="title"><a href="{{url('/admin/login')}}">Background</a></div>
            </div>
        </div>
    </body>
</html>
