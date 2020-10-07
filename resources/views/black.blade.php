<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}"> 
        <title>ケントロイドドラール - 履歴書とポートフォリオ</title>

        <!--favicon-->
        <link rel="apple-touch-icon" href="{{ asset('public/images/logo.png') }}">
        <link rel="icon" href="{{ asset('public/images/logok_rda_icon.ico') }}">

        <!--pace (page loader) style-->
        <link href="{{ asset('public/plugins/pace/pace.css') }}" rel="stylesheet">
        <script src="{{ asset('public/plugins/pace/pace.min.js') }}"></script>

        <!-- Bootstrap -->
        <link href="{{ asset('public/plugins/bootstrap-3.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
        <!-- Icons -->
        <link href="{{ asset('public/plugins/font-awesome-4.2.0/css/font-awesome.min.css') }}" rel="stylesheet">
        <!-- typed style -->
        <link href="{{ asset('public/plugins/typed/typed.css') }}" rel="stylesheet">
        <!-- popup style-->
        <link href="{{ asset('public/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
        <!-- simple Captcha-->
        <link href="{{ asset('public/plugins/simpleCaptcha/jquery.simpleCaptcha.css') }}" rel="stylesheet">
        <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
        async defer>
        </script>
        <script type="text/javascript">
          var verifyCallback = function(response) {
            alert(response);
          };
          var widgetId1;
          var widgetId2;
          var onloadCallback = function() {
            // Renders the HTML element with id 'example1' as a reCAPTCHA widget.
            // The id of the reCAPTCHA widget is assigned to 'widgetId1'.
            widgetId1 = grecaptcha.render(document.getElementById('captcha1'), {
              'sitekey' : "{{env('CAPTCHA_KEY')}}",
              'theme' : 'dark'
            });
            widgetId2 = grecaptcha.render(document.getElementById('captcha2'), {
              'sitekey' : "{{env('CAPTCHA_KEY')}}",
              'theme' : 'dark'
            });
          };
        </script>

        <!-- Themes styles-->
        <link href="{{ asset('public/black/theme/css/style.css') }}" rel="stylesheet">
        <!-- black skin-->
        <link href="{{ asset('public/black/theme/css/skin-black.css') }}" rel="stylesheet">

    </head>
    <body  data-spy="scroll" data-target=".menu-area" data-offset="200">
    <!--wrapper page-->
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header" id="home">
        <div class="content-table header-content-fixed ">
          <div class="whoim">
            <div class="box-line text-uppercase text-bold wf-notosansjapanese">
              自己紹介
            </div>
          </div>
          <div class="v-content">
            <div class="container">
              <h1 class="text-uppercase color-dark name wf-notosansjapanese">ケントロイドドラールと申します</h1>
              <h4  class="text-uppercase color-dark font-alt job wf-notosansjapanese"><span id="typed" class="typed wf-notosansjapanese"></span></h4>
            </div>
          </div>
        </div>


        <!-- Main navbar -->
        <div class="menu-area">
          <div class="toogle-bars">
            <a href="#menu-collapse" data-toggle="collapse" class="collapsed"><i class="fa fa-bars ic-open"></i> <i class="fa fa-remove ic-close"></i> MENU</a>
          </div>
          <div class="menu-collapse collapse" id="menu-collapse">
            <div class="container">
              <div class="row">
                <div class="col-md-3">
                  <ul class="breadcrumb main-nav no-space">
                    <li class="link-inpage"><a href="#contact" id="hireme-tab" class="link-inpage"><i class="fa fa-briefcase"></i> 今すぐ会いましょう</a></li>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="breadcrumb main-nav nav">
                    <li class="active"><a href="#home" class="link-inpage">Home</a></li>
                    <li ><a href="#about" class="link-inpage">About</a></li>
                    <li ><a href="#resume" class="link-inpage">Resume</a></li>
                    <li ><a href="#portfolio" class="link-inpage">Portfolio</a></li>
                    <li ><a href="#blog" class="link-inpage">Blog</a></li>
                    <li ><a href="#contact" id="contact-tab" class="link-inpage">Contact</a></li>
                  </ul>
                </div>
                <div class="col-md-3">
                  <ul class="breadcrumb main-nav no-space">
                    <li>
                      <a href="https://www.facebook.com/kent.dolar25" ><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="https://codepen.io/kentcodes/"  ><i class="fa fa-codepen"></i></a>
                    </li>
                    <li>
                      <a href="https://twitter.com/kelocreate"  ><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="https://www.linkedin.com/in/dolarkent/" ><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li>
                      <a href="https://github.com/CpEKent" ><i class="fa fa-github"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Main navbar -->
      </header><!-- End Main Header -->

      <!-- ABOUT ME -->
      <section id="about" class="block-section">
        <div class="clearfix my-profile">
          <div class="my-pict" >
            <div class="overfly">
              <div class="text-botttom">
                <h2 class="text-uppercase color-dark text-bold wf-notosansjapanese">ケントロイドドラール</h2>
                <h5 class="text-uppercase color-dark font-alt wf-notosansjapanese">奉仕するために生きる</h5>
              </div>
            </div>
          </div>
          <div class="my-desc">
            <div class="bg-secondary clearfix">
              <div class="inner-text">
                <h3 class=" color-dark no-margin-top wf-notosansjapanese">こんにちは！</h3>
                <p>私は彼らに手を貸したりサービスを提供したり他の人々を奮い立たせたいと思っているすべての人々とつながるためにこのウェブサイトを作成しました。 ヘルプ/サービスとインスピレーションを探している人々のためのハブのように。私とつながりたいと思ったことがあるなら、私は先を見越して最善を尽くします。</p>
                <p>コンピューターに対する私の情熱を発見たのは、私がまだ幼いころでした。そして、将来の仕事を考えた時、それがはっきりと分かりました。私はノートルダム・オブ・ダディアンガス大学て、コンピュータ工学を専攻し、キャリアを追求しはじめました。最終学年の時に、私は初心者向けのオンラインWebクラスを受講し, Web開発が大好きだと思いました。そして、システムサービスに対する目を研ぎ澄ますとともに、Web開発者になるという終わりのない旅を始めました。</p>
                <p class="no-margin">2016年、私は本物のWeb開発者になりました。現時点で私は自分の才能やサービスを世界中に広める必要があるすべての人々を助けることができます。</p>　
              </div>
            </div>
            <div class="bg-dark clearfix">
              <div class="inner-text">
                <p class="no-margin color-light ">
                  <strong class="fix-width-100 wf-notosansjapanese"><i class="fa fa-calendar margin-right-5"></i> 生年月日</strong> : 09/25/1991<br/>
                  <?php /*<strong class="fix-width-100"><i class="fa fa-skype margin-right-5"></i> Skype</strong> : usename.fake<br/> */ ?>
                  <strong class="fix-width-100 wf-notosansjapanese"><i class="fa fa-phone margin-right-5"></i> 電話</strong> : + 070-6511-9523<br/>
                  <strong class="fix-width-100 wf-notosansjapanese"><i class="fa fa-envelope margin-right-5"></i> eメール</strong> : kentldolar@gmail.com<br/>
                  <strong class="fix-width-100 wf-notosansjapanese"><i class="fa fa-globe margin-right-5"></i> サイト</strong> : www.kentscsv.com<br/>
                  <strong class="fix-width-100 wf-notosansjapanese"><i class="fa fa-location-arrow margin-right-5"></i> 現住所</strong> : 〒165-0027 東京都、中野区、野方2丁目38-11<br/>
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- SERVICES-->
        <div class="container">
          <ul class="services list-unstyled clearfix">
            <li class="col-sm-4 no-padding">
              <div class="box">
                <div class="ic"><i class="fa fa-code"></i></div>
                <h5 class="text-uppercase color-dark　wf-notosansjapanese">ウェブ開発者</h5>
              </div>
            </li>
            <li class="col-sm-4 no-padding">
              <div class="box">
                <div class="ic"><i class="fa fa-laptop"></i></div>
                <h5 class="text-uppercase color-dark　wf-notosansjapanese">ウェブデザイナー</h5>
              </div>
            </li>
            <li class="col-sm-4 no-padding">
              <div class="box ">
                <div class="ic"><i class="fa fa-bar-chart"></i></div>
                <h5 class="text-uppercase color-dark　wf-notosansjapanese">Webフルスタック</h5>
              </div>
            </li>
          </ul>
        </div><!-- END SERVICES-->
      </section><!-- END ABOUT ME -->


      <!-- RESUME -->
      <section id="resume" class="block-section">
        <!--EMPLOYEMNT-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin　wf-notosansjapanese">職歴</h2>
              <div class="title-icon"> <i class="fa fa-briefcase"></i> </div>
            </div>
          </div>
        </div>

        <div class="container-medium ">
          <div class="list-employment">
            <ul class="list-unstyled  clearfix">
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">01</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold wf-notosansjapanese">技術開発</h5>
                  <p class="font-alt color-dark　wf-notosansjapanese"><a href="http://diamondhead.jp/company/">ダイアモンドヘッド株式会社</a>、〒108-0073 東京都港区三田2-7-13 TDS三田ビル6・7F</p>
                  <p>フロントエンドWeb開発者として、 私は私たちのさまざまなオンラインショップのためのウェブサイトを作成、開発、そして維持するように割り当てられました、 
企業の電子商取引システムを使用しています。アドビフレームワーク、PHP、HTML5 / CSS3、JavaScript / jQueryを自社システムに活用と
Git Bitbucket、Sourcetree、Teratermの助けを借りて、タスクをより効率的でより良いものにします。
</p>
                  <p class="font-alt color-dark wf-notosansjapanese">  2017年12月　- 現在</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">02</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold　wf-notosansjapanese">システムエンジニア</h5>
                  <p class="font-alt color-dark　wf-notosansjapanese"><a href="http://ring-group.jp/">株式会社リングシステムソリューションズ </a>、〒110-0016　東京都台東区台東2-1-1　東秋葉原ビル6階</p>
                  <p class="wf-notosansjapanese">Webおよびシステム開発者として、 私はHTML 5、CSS 3、Javascript、jQuery、およびPHPなどの多分野言語プログラムに統合されています。Moodle、Laravel、Wordpress、Microsoftなど、お客様のサービスにさまざまなフレームワークとデータベースも使用しています。
Azure、SQL Server、MySQLなどとRedmineなどの情報管理システムの助けを借りて</p>
                  <p class="font-alt color-dark wf-notosansjapanese"> 2016年12月 - 2017年12月</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">03</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold　wf-notosansjapanese">技術サポートエンジニア</h5>
                  <p class="font-alt color-dark　wf-notosansjapanese"><a href="https://www.citigroup.jp/en/about/access-ses.html">シティグループ・ジャパン・ホールディングス合同会社</a>、 〒160-8812 東京都新宿区新宿6-27-30 新宿イーストサイドスクエア 地図 </p>
                  <p>正式なプロセスと厳格なセキュリティおよび手続きを備えた企業の銀行環境でネットワーク接続の監視、サーバーの起動、システムテスト、追跡、エスカレート、インシデントレポート、文書化、その他、私はケーススタディ、知識共有、システム管理、証拠管理を行っています。システム文書およびコンピュータ技術サポート、<a href="https://www.skillhouse.co.jp/">スキルハウス・スタッフィング･ソリューションズ株式会社</a>の助けを借りて。</p>
                  <p class="font-alt color-dark wf-notosansjapanese"> 2014年12月 - 2016年12月</p>
                </div>
              </li>
            </ul>
          </div>
        </div><!--END EMPLOYEMNT-->

        <!--EDUCATION-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin wf-notosansjapanese">学歴</h2>
              <div class="title-icon"> <i class="fa fa-graduation-cap"></i> </div>
            </div>
          </div>
        </div>
        <div class="container-medium">
          <div class="list-education">
            <ul class="list-unstyled  clearfix">
              <li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt">01</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">TOPA21世紀日本語学校</h5>
                  <p class="font-alt color-dark">東京都杉並区高円寺北１丁目２１−３ <a href="http://www.topa21.co.jp/">ＴＯＰＡ２１世紀語学校</a>、 日本</p>
                  <p>私はアルバイトをしながら日本で働くために日本語N3を勉強しました。私は今までとは異なる文化を持つさまざまな人々との出会いに出会い、友達を作りました。</p>
                  <p class="font-alt color-dark">  2013年10月から2014年3月まで </p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt">02</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">ノーター・デイム・オブ・ダディアンガス大学</h5>
                  <p class="font-alt color-dark">マリストアベニュー、 ジェネラル・サントス、 9500 サウスコタバト <a href="http://www.nddu.edu.ph/">ノーター・デイム・オブ・ダディアンガス大学</a>, フィリピン</p>
                  <p>私は5年以内にコンピュータ工学コースを勉強しました。私の最終論文は、周囲の温度と動きに応じた自動ファン制御に関するものです。 私はプロ意識、私が知っている偉大で知的な人々との友情を学びました。</p>
                  <p class="font-alt color-dark">コンピュータ工学の理学士号 2007年から2012年まで</p>
                </div>
              </li>
              <?php /*<li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt">03</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">Design University</h5>
                  <p class="font-alt color-dark">Bandung</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p class="font-alt color-dark "> 1999-2001</p>
                </div>
              </li> */ ?>
            </ul>
          </div>
        </div> <!--END EDUCATION-->

        <!--SKILLS-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin wf-notosansjapanese">腕前</h2>
              <div class="title-icon"> <i class="fa fa-magic"></i> </div>
            </div>
          </div>
        </div>

        <div class="container-medium">
          <!--SKIL CHART TOP-->
          <!--SKIL CHART TOP-->
          <ul class="skill top list-unstyled clearfix">
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right br-bottom">
                <span class="chart" data-percent="80" >
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">PHP</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right br-bottom">
                <span class="chart" data-percent="60">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">C/C++</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right br-bottom">
                <span class="chart" data-percent="50">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">MYSQL</div>
              </div>
            </li>            
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-bottom">
                <span class="chart" data-percent="70">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase color-dark">JQUERY/JAVASCRIPT</div>
              </div>
            </li>
          </ul><!--END SKIL CHART TOP-->

          <!--SKIL CHART BOTTOM-->
          <ul class="skill bottom list-unstyled clearfix">
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right">
                <span class="chart" data-percent="60" >
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">Adobe Photoshop</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right">
                <span class="chart" data-percent="80">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">HTML</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right">
                <span class="chart" data-percent="60">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">CSS</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box">
                <span class="chart" data-percent="55">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase color-dark">BOOTSTRAP</div>
              </div>
            </li>
          </ul><!--END SKIL CHART BOTTOM-->


          <!-- MORE SKILS -->
          <div class="title-border">
            <h5 class="text-uppercase color-dark no-margin text-bold wf-notosansjapanese">より多くの腕前</h5>
          </div>  

          <div class="row">
            <div class="col-sm-6">
              <ul class="list-unstyled list-progress">
                <li>
                  <div class="text-uppercase color-dark title"><span>クリエイティブ</span>  <small aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="60%"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">リーダーシップ   <small aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">コミュニケーション   <small aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="list-unstyled list-progress">
                <li>
                  <div class="text-uppercase color-dark title">英語 <small aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">日本語  <small aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">タガログ語、ビサヤ語、ヒラガイノン語  <small aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
            </div>
          </div><!-- END MORE SKILS -->
          <div class="white-space-50"></div>
        </div>

        <!-- DOWNLOAD & PRVIEW BTN -->
        <div class="parallax-bg bg1" >
          <div class="container">
            <div class="padding30 text-center">
              <a href="{{ asset('public/download/Resume15jp.pdf') }}" class="btn btn-flat-line btn-default light-font wf-notosansjapanese" target="_blank"><i class="fa fa-download"></i>CVをダウンロード</a>
              <span class="space-inline-15 hidden-xs"></span>
              <a href="javascript: w=window.open('{{ asset('public/download/Resume15jp.pdf') }}'); w.print(); " class="btn btn-flat-line btn-default light-font wf-notosansjapanese"><i class="fa fa-print"></i>CVを印刷</a>
            </div>
          </div>
        </div><!-- END DOWNLOAD & PRVIEW BTN -->
      </section><!-- END SERVICES-->


      <!--PORTFOLIO-->
      <section id="portfolio" class="block-section">
        <!--PORTFOLIO TITLE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin wf-notosansjapanese">ポートフォリオ</h2>
              <div class="title-icon"> <i class="fa fa-inbox"></i> </div>
            </div>
          </div>
        </div><!--END PORTFOLIO TITLE-->

        <!--List WOrk-->
        <div class="block-page" >
          <div class="container-medium clearfix">
            <div class="row list-work">
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300jjhs.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300jjhs.png') }}" title="pic 02" class="galery-item" ><i class="fa fa-search-plus"></i></a>
                        <a href="https://joloujapanhomespa.com/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://joloujapanhomespa.com/" class="project-title" target="_blank">Jolou Japan Home Spa (Full-Web)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300kentscsv.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300kentscsv.png') }}" title="pic 02" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="http://resume.kentscsv.com/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="http://resume.kentscsv.com/" class="project-title" target="_blank">Kent's CSV (Full-Web)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300tph.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300tph.png') }}" title="pic 03" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="http://resume.kentscsv.com/tph/index" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="http://resume.kentscsv.com/tph/index" class="project-title" target="_blank">Times Plaza Hotel (Full-Web)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300sanyo.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300sanyo.png') }}" title="pic 04" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://sanyo-i.jp/s/customer/NewYearSale_tokushu" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://sanyo-i.jp/s/customer/NewYearSale_tokushu" class="project-title" target="_blank">Sanyo i-store (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300benexy.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300benexy.png') }}" title="pic 05" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://ec.benexy.com/sp/renewal-campaign/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://ec.benexy.com/sp/renewal-campaign/" class="project-title" target="_blank">Benexy Online (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300grurond.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300grurond.png') }}" title="pic 06" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="http://test.grurond.com/lp/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="http://test.grurond.com/lp/" class="project-title" target="_blank">Grurond Online Store  (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300melrose.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300melrose.png') }}"  title="pic 07" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://store.melrose.co.jp/sp/martiniquepre_2018_summer_issue/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://store.melrose.co.jp/sp/martiniquepre_2018_summer_issue/" class="project-title" target="_blank">Melrose Online (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300virtusize.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300virtusize.png') }}"  title="pic 08" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://sanyo-i.jp/s/customer/virtusize" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://sanyo-i.jp/s/customer/virtusize" class="project-title" target="_blank">Sanyo-i (Landing Page)</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 col-sm-6">
                <div class="box-work">
                  <div class="work-preview">
                    <img src="{{ asset('public/images/400x300tegteg.png') }}" alt="">
                    <div class="hover">
                      <div class="link-btns">
                        <a href="{{ asset('public/images/400x300tegteg.png') }}" title="pic 09" class="galery-item"><i class="fa fa-search-plus"></i></a>
                        <a href="https://onlinestore.tegteg.tokyo/" target="_blank"><i class="fa fa-link"></i></a>
                      </div>
                      <a href="https://onlinestore.tegteg.tokyo/" class="project-title" target="_blank">Tegteg Renewal 2018</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--BTN SHOW MORE-->
            <!-- <div class="box-btn-more"><a href="portfolio-list.html" class="btn btn-flat-line btn-link" id="more-work"> Show More</a></div> -->
          </div>
        </div><!--END List WOrk-->

        <!--TESTIMONIAL-->
        <?php /*
        <div class="parallax-bg black-light bg2">
          <div class="container-medium">
            <div class="block-page ">
              <div id="carousel-example-generic" class="carousel slide carousel-testi" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <div class="box-testimonial">
                      <img src="assets/theme/images/people/1.jpg" alt="" class="img-profile">
                      <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Kent! This guy is Really amazing.  </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><a href="#"><img src="assets/theme/images/patner/1.png" alt="" class="img-logo-client"></a></p>
                      <p class="font-alt no-margin color-dark">Colie - Css Founder</p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-testimonial">
                      <img src="assets/theme/images/people/2.jpg" alt="" class="img-profile">
                      <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Kent! This guy is Really Something.  </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><a href="#"><img src="assets/theme/images/patner/2.png" alt="" class="img-logo-client"></a></p>
                      <p class="font-alt no-margin color-dark">Rischy - Js Founder</p>
                    </div>
                  </div>
                  <div class="item">
                    <div class="box-testimonial">
                      <img src="assets/theme/images/people/3.jpg" alt="" class="img-profile">
                      <h4 class="color-dark text-capitalize no-margin-top line-dash-bottom"> Well Done Kent! This guy is Really Tallent.  </h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                      <p><a href="#"><img src="assets/theme/images/patner/3.png" alt="" class="img-logo-client"></a></p>
                      <p class="font-alt no-margin color-dark">Robin - Html Founder</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!--END TESTIMONIAL-->
        */?>
      </section><!--END PORTFOLIO-->

      <!--BLOG-->
      <section id="blog" class="block-section">
        <!--BLOG TITLE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin  wf-notosansjapanese">ブログ</h2>
              <div class="title-icon"> <i class="fa fa-comments-o"></i> </div>
            </div>
          </div>
        </div><!--END BLOG TITLE-->

        <div class="block-page">
          <div class="container-medium">
            <!--LIST BLOG-->
            <ul class="list-unstyled list-blog">
              <li>
                <div class="clearfix box-blog">
                  <div class="blog-bg" data-holdbg="{{ asset('public/images/1280x943web.png') }}">&nbsp;
                    <div  class="blog-ic"><i class="fa fa-pencil"></i></div>
                  </div>
                  <div class="blog-content">
                    <h5 class="text-uppercase color-dark text-bold">My Website Making</h5>
                    <div class="post-meta font-alt">
                      <span><i class="fa fa-calendar"></i> 19th July 2012 </span>
                      <span><i class="fa fa-user"></i> Kent</span>
                      <span><i class="fa fa-folder-o"></i> News</span>
                    </div>
                    <p>Since then when in elementary I'm used to make a webpage using HTML and until in college using HTML is my easiest way to make my project in Online Technology Course.</p>
                    <a href="https://kentoy-d-mytricks.blogspot.com/2012/07/mytricks-projects.html" class="btn btn-xs btn-flat-solid primary-btn">続きを読む</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="clearfix box-blog">
                  <div class="blog-bg" data-holdbg="{{ asset('public/images/1280x943hobbies.png') }}" >&nbsp;
                    <div  class="blog-ic"><i class="fa fa-picture-o"></i></div>
                  </div>
                  <div class="blog-content">
                    <h5 class="text-uppercase color-dark text-bold">Hobbies & Talents as a musician</h5>
                    <div class="post-meta font-alt">
                      <span><i class="fa fa-calendar"></i> 15th May 2012</span>
                      <span><i class="fa fa-user"></i> Kent</span>
                      <span><i class="fa fa-folder-o"></i> News</span>
                    </div>
                    <p>GooD @ GuiTaR: It became my Hobby since I waS a TeenageR, My cousin a great artist introduce me to this kind of hobby, and now when iM playing I feel great. </p>
                    <a href="https://kentoy-d-mytricks.blogspot.com/2012/05/mytrickshobbies.html" class="btn btn-xs btn-flat-solid primary-btn">続きを読む</a>
                  </div>
                </div>
              </li>
              <li>
                <div class="clearfix box-blog">
                  <div class="blog-bg" data-holdbg="{{ asset('public/images/1280x943aboutme.png') }}">&nbsp;
                    <div  class="blog-ic"><i class="fa fa-camera-retro"></i></div>
                  </div>
                  <div class="blog-content">
                    <h5 class="text-uppercase color-dark text-bold">About me</h5>
                    <div class="post-meta font-alt">
                      <span><i class="fa fa-calendar"></i> 2nd May 2012</span>
                      <span><i class="fa fa-user"></i> Kent</span>
                      <span><i class="fa fa-folder-o"></i> News</span>
                    </div>
                    <p>Personality : Flexible in different areas,I want to learn everything (even it is not agreed to my skills and environment), easily get bored when I'm not doing anything, adjusting easily to the the team and I love to be at the group,I am friendly and peacemaker.</p>
                    <a href="http://kentoy-d-mytricks.blogspot.com/2012/05/about-career-as-computer-engineer-like.html" class="btn btn-xs btn-flat-solid primary-btn">続きを読む</a>
                  </div>
                </div>
              </li>
            </ul> <!--END LIST BLOG-->

            <!--BTN SHOW MORE-->
            <div class="box-btn-more"><a href="blog-list.html" class="btn btn-flat-line btn-link  wf-notosansjapanese" id="more-blog"> もっと見せる</a></div>
          </div>
        </div>
      </section> <!--END BLOG-->

      <!--CONTACT-->
      <section id="contact" class="block-section">
        <!--CONTACT TITLE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin  wf-notosansjapanese">お問い合わせ</h2>
              <div class="title-icon"> <i class="fa fa-envelope-o"></i> </div>
            </div>
          </div>
        </div><!--END CONTACT TITLE-->

        <div class="contact-area">
          <div class="form-contact-area clearfix">
            <div class="inner-contact clearfix ">
              <!--TABS CONTACT-->
              <ul id="myTab" class="nav nav-tabs flat-nav-tabs" role="tablist">
                <li class="active wf-notosansjapanese"><a href="#tab0" role="tab" data-toggle="tab">私に連絡して</a></li>
                <li class=" wf-notosansjapanese"><a href="#tab1" role="tab" data-toggle="tab">私を雇う</a></li>
              </ul>

              <div id="myTabContent" class="tab-content flat-tab-content">
                <div class="tab-pane fade in active" id="tab0">
                  <form method="post" id="contactForm" name="contactForm">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subject" value="Message Contact Form">
                    <div class="form-group wf-notosansjapanese">
                      <label>あなたの名前 (*)</label>
                      <input id="ful1" type="text" class="form-control form-flat" name="fullname" required>
                    </div>
                    <div class="form-group wf-notosansjapanese">
                      <label>Eメール (*)</label>
                      <input id="eml1" type="email" class="form-control form-flat" name="email" required>
                    </div>
                    <div class="form-group wf-notosansjapanese">
                      <label>あなたのメッセージ (*)</label>
                      <textarea id="mes1" class="form-control form-flat" name="message" rows="8" required></textarea>
                    </div>

                    <div class="form-group wf-notosansjapanese">
                      <div id="captcha1"></div>
                      @if($errors->has('g-recaptcha-response'))
                        <span class="invalid-feedback" style="display:block;"><strong>{{$errors->first('g-recaptcha-response')}}</strong></span>
                      @endif
                    </div>
                    <div class="form-group wf-notosansjapanese">
                      <button type="submit" class="btn btn-flat-solid primary-btn" >メッセージを送る</button>
                    </div>
                    <div class="form-group wf-notosansjapanese">
                      <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> お待ちください ...</div>
                      <div class="message-submit error hidden wf-notosansjapanese"></div>
                    </div>
                  </form>
                </div>
                <div class="tab-pane fade" id="tab1">
                  <!-- <form method="post" id="id="hireForm"" name="hireForm"> -->
                  {!! Form::open(['url'=>'upload','files'=>true,'id'=>'hireForm','enctype'=>"multipart/form-data"]); !!}
                    <input type="hidden" name="subject" value="Message Hire Form">
                    <input type="hidden" name="file" id="file-att" value="">
                    <div class="form-group">
                      <label>あなたの名前 (*)</label>
                      <input id="ful1" type="text" class="form-control form-flat" name="fullname" required>
                    </div>
                    <div class="form-group wf-notosansjapanese">
                      <label>Eメール (*)</label>
                      <input id="eml1" type="email" class="form-control form-flat" name="email" required>
                    </div>
                    <div class="form-group">
                      <label>プロジェクト概要 (*)</label>
                      <textarea id="mes1" class="form-control form-flat" name="message" rows="8" required></textarea>
                    </div>

                    <div class="form-group wf-notosansjapanese">                    
                      <label>あなたの文書を添付する <span class="display-block color-dark">(許可されているのはPDFのみ , 最大サイズ200Kb)</span></label>
                      {!!Form::file('fileatt',['id' => 'filat', 'accept'=>'.pdf','value'=>'204800' ]); !!}
                      @if(count($errors)>0)
                      <label style="color:red;" for="">{{$errors->first('fileatt')}}</label>
                      @endif
                    </div>
                    <div class="form-group">
                      <div id="captcha2"></div>
                      @if($errors->has('g-recaptcha-response'))
                        <span class="invalid-feedback wf-notosansjapanese" style="display:block;"><strong>{{$errors->first('g-recaptcha-response')}}</strong></span>
                      @endif
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-flat-solid primary-btn wf-notosansjapanese">リクエストを送信</button>
                    </div>
                    <div class="form-group">
                      <div class="preload-submit hidden wf-notosansjapanese"><hr/> <i class="fa fa-spinner fa-spin"></i> お待ちください ...</div>
                      <div class="message-submit error hidden wf-notosansjapanese"></div>
                    </div>
                  </form>
                </div>
              </div><!--End Tabs-->
            </div>
          </div>

          <!--MAP-->
          <div class="map-area" id="map-contact"></div>
          <div class="hidden map-contact-body">
            <div class="map-content">
              <h4 class="no-margin-top font-alt wf-notosansjapanese">私はここにいます</h4>
              <p class="wf-notosansjapanese"><i class="fa fa-map-marker"></i> <strong>現住所:</strong> 〒165-0027 東京都、中野区、野方2丁目38-11</p>
              <p class="wf-notosansjapanese"><i class="fa fa-mobile"></i> <strong>電話:</strong> + 070-6511-9523 </p>
              <p class="wf-notosansjapanese"><i class="fa fa-envelope"></i> <strong>メール:</strong> kentldolar@gmail.com</p>
            </div>
          </div>
          <!--END MAP-->
        </div>
      </section><!--END CONTACT-->


      <!--FOOTER-->
      <footer class="main-footer">
        <div class="container">
          <div class="folow-me wf-notosansjapanese">
            私に従ってください
          </div>
          <ul class="list-inline social-links text-center">
            <li>
              <a href="https://www.facebook.com/kent.dolar25"  data-toggle="tooltip"  data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
              <a href="https://codepen.io/kentcodes/"  data-toggle="tooltip"  data-placement="top" title="Codepen"><i class="fa fa-codepen"></i></a>
            </li>
            <li>
              <a href="https://twitter.com/kelocreate"  data-toggle="tooltip"  data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
              <a href="https://www.linkedin.com/in/dolarkent/"  data-toggle="tooltip"  data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
              <a href="https://github.com/CpEKent"  data-toggle="tooltip"  data-placement="top" title="Github"><i class="fa fa-github"></i></a>
            </li>
          </ul>
          <p class="text-center no-margin">
            kentscsv.kentldolar - All Rights Reserved &COPY; 2019
          </p>
          <a href="#home" class="back-to-top"><i class="fa fa-angle-double-up" ></i></a>
        </div>
      </footer><!--END FOOTER-->
    </div><!--End wrapper page-->

    <!-- generate captcha -->
    <div id="mycaptcha-wrap" class="hidden mycaptcha1">
      <div id="mycaptcha" class="mycaptcha1"></div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('public/plugins/jquery.js') }}"></script>
    <script src="{{ asset('public/plugins/bootstrap-3.3.1/js/bootstrap.min.js') }}"></script>

    <!-- maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaRXO_URtinYZvUJ1WNLPgwQX-xfQhcs" type="text/javascript"></script> 
    <script src="{{ asset('public/plugins/jquery.ui.map.js') }}"></script> 
    <!-- advanced easing options -->
    <script src="{{ asset('public/plugins/jquery.easing-1.3.pack.js') }}"></script>
    <!-- parallax bg js -->
    <script src="{{ asset('public/plugins/jquery.parallax-1.1.3.js') }}"></script>
    <!-- lightbox js -->
    <script src="{{ asset('public/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- typed animation-->
    <script src="{{ asset('public/plugins/typed/typed.js') }}"></script>
    <!-- easy chart-->
    <script src="{{ asset('public/plugins/easypiechart/jquery.easypiechart.min.js ') }}"></script>
    <!-- simple Captcha -->
    <script src="{{ asset('public/plugins/simpleCaptcha/jquery.simpleCaptcha.js ') }}"></script>
    <!-- simple Ajax Uploader -->
    <script src="{{ asset('public/plugins/Simple-Ajax-Uploader/SimpleAjaxUploader.min.js') }}"></script>
    <!-- validate jquery-->
    <script src="{{ asset('public/plugins/validator/jquery.validate.min.js') }}"></script>

    <!--=====================================================-->
    <!--configuration template-->
    <script src="{{ asset('public/black/theme/js/theme.js') }}"></script>
  </body>
</html>