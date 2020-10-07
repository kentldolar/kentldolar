<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>KENT LOYD DOLAR - RESUME AND PORTFOLIO</title>

        <!--favicon-->
        <link rel="apple-touch-icon" href="{{ asset('images/logo.png') }}">
        <link rel="icon" href="{{ asset('images/logo.ico') }}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP" rel="stylesheet">

        <!-- Styles -->
        <style>
            @import url('http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700, 800');

            .wf-notosansjapanese { 
                font-family: "Noto Sans JP"; 
            }

            body{
                width: 100%;
                height: 100%;
                line-height: 2;
                font-size: 13px;
                background-image: url( {{ asset('images/main-header.jpg') }} ) ;
                background-position: center;
                background-repeat: no-repeat;
                font-family: 'Open Sans';
                background-size: cover;
                background-attachment: fixed;        
            }

            .wrapper{

            }

            .font-alt {
                font-family: Georgia;
            }

            .side{
                position: fixed;
                width: 50%;
                top: 0;
                text-align: center;
                height: 100%;
                transition: background 0.8s ease 0s;
                -webkit-transition: background 0.8s ease 0s;
                -moz-transition: background 0.8s ease 0s;
                -o-transition: background 0.8s ease 0s;
                -ms-transition: background 0.8s ease 0s;
            }

            @media (max-width: 600px) {
                .side{
                position: relative;
                height: 300px;
                width: 100%;
                }
            }

            .side.light{
                left: 0;
                color: #000;  
                background: #fff;
                background: rgba(255,255,255,0.7);
            }

            .side.light:hover{
                background: #fff;
            }

            .side.light a{
                color: #000;  
            }

            .side.light .inner{
                /* background: #fff; */
            }

            .side.dark{
                right: 0;
                color: #fff;
                background: #323232;
                background: rgba(0,0,0,0.7);
            }


            .side.dark:hover{
                background: #323232;
            }

            .side.dark:hover .inner{
                background: #323232;
            }

            .side.dark a{
                color: #fff;  
            }


            .box-line {
                border: 3px solid #000000;
                color: #000000;
                letter-spacing: 2px;
                padding: 10px 30px;
                display: inline-block;
                margin-bottom: 20px;
            }

            .side.dark  .box-line{
                border: 3px solid #fff;
                color: #fff;
            }

            .text-bold {
                font-weight: 700;
            }

            .inner{
                position: absolute;
                top: 50%;
                text-align: center;
                width: 100%;
                height: 200px;
                background: rgba(255,255,255,0.1);;
                padding-top: 55px;
                margin-top: -100px;

                transition: background 0.8s ease 0s;
                -webkit-transition: background 0.8s ease 0s;
                -moz-transition: background 0.8s ease 0s;
                -o-transition: background 0.8s ease 0s;
                -ms-transition: background 0.8s ease 0s;

            }
            h4{margin:0;}

            a{
                text-decoration: none;
            }
        </style>
    </head>
    <body >
    <!--wrapper page-->
    <div class="wrapper">
      <div class="light side">
        <a href="{{ url('/whitepage') }}">
          <div class="inner">
            <div class="whoim">
              <div class="box-line text-uppercase text-bold">
                Who I Am
              </div>
            </div>

            <h4 class="font-alt">English Version</h4>
          </div>
        </a>
      </div>
      <div class="dark side">
        <a href="{{ url('/blackpage') }}">
          <div class="inner">
            <div class="whoim">
              <div class="box-line text-uppercase text-bold wf-notosansjapanese">
                私は誰なのか
              </div>
            </div>

            <h4 class="wf-notosansjapanese">日本バージョン</h4>
          </div>
        </a>

      </div>
    </div><!--End wrapper page-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('plugins/jquery.js') }}"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

  </body>
</html>
