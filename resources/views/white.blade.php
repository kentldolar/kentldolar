<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">        
        <title>KENT LOYD DOLAR - RESUME AND PORTFOLIO</title>

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
        <!-- Themes styles-->
        <link href="{{ asset('public/white/theme/css/style.css') }}" rel="stylesheet">
    </head>
    <body  data-spy="scroll" data-target=".menu-area" data-offset="200">
    <!--wrapper page-->
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header" id="home">
        <div class="content-table header-content-fixed ">
          <div class="whoim">
            <div class="box-line text-uppercase text-bold">
              Who I Am
            </div>
          </div>
          <div class="v-content">
            <div class="container">
              <h1 class="text-uppercase color-dark name">I'm Kent Loyd Dolar</h1>
              <h4  class="text-uppercase color-dark font-alt job"><span id="typed" class="typed"></span></h4>
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
                    <li class="link-inpage"><a href="#contact" id="hireme-tab" class="link-inpage"><i class="fa fa-briefcase"></i> Hire Me Now</a></li>
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
                      <a href="https://github.com/kentldolar" ><i class="fa fa-github"></i></a>
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
                <h2 class="text-uppercase color-dark text-bold">Kent Loyd Dolar</h2>
                <h5 class="text-uppercase color-dark font-alt ">Live to Serve</h5>
              </div>
            </div>
          </div>
          <div class="my-desc">
            <div class="bg-secondary clearfix">
              <div class="inner-text">
                <h3 class=" color-dark no-margin-top">Hello There!</h3>
                <p>I created this website in order to connect to every people who are willing to let me serve them and to inspire other people. just like a hub for people looking for help and inspiration. I will do my best to be proactive if ever you want to connect with me.</p>
                <p >I discovered my passion for computer when I was still young, It was then when it became clear what I wanted to do for a living. I pursued my career at the amazing Notre Dame of Dadiangas University where I started my major in Computer Engineering. In my Senior year I took a beginner’s Online Web class, where I discovered the love for web development and started the never-ending journey of becoming a web developer along with sharpening my eye for system service.</p>
                <p class="no-margin">In 2016 I become a true web developer and at this moment I am able to serve every people who needs to spread their talents and services around the globe.</p>
              </div>
            </div>
            <div class="bg-dark clearfix">
              <div class="inner-text">
                <p class="no-margin color-light ">
                  <!-- <strong class="fix-width-100"><i class="fa fa-calendar margin-right-5"></i> Birthdate</strong> : 09/25/1991<br/> -->
                  <?php /*<strong class="fix-width-100"><i class="fa fa-skype margin-right-5"></i> Skype</strong> : usename.fake<br/> */ ?>
                  <strong class="fix-width-100"><i class="fa fa-phone margin-right-5"></i> Phone</strong> : + 070-6511-9523<br/>
                  <strong class="fix-width-100"><i class="fa fa-envelope margin-right-5"></i> Email</strong> : kentldolar@gmail.com<br/>
                  <strong class="fix-width-100"><i class="fa fa-globe margin-right-5"></i> Website</strong> : kentldolar.cloud<br/>
                  <!-- <strong class="fix-width-100"><i class="fa fa-location-arrow margin-right-5"></i> Address</strong> : 165-0027 Tokyo-to, Nakano-ku, Nogata 2-38-11-203<br/> -->
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
                <h5 class="text-uppercase color-dark">AWS-DevOps</h5>
              </div>
            </li>
            <li class="col-sm-4 no-padding">
              <div class="box">
                <div class="ic"><i class="fa fa-laptop"></i></div>
                <h5 class="text-uppercase color-dark">Web-Developer</h5>
              </div>
            </li>
            <li class="col-sm-4 no-padding">
              <div class="box ">
                <div class="ic"><i class="fa fa-bar-chart"></i></div>
                <h5 class="text-uppercase color-dark">PHP-Engineer</h5>
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
              <h2 class="text-uppercase color-dark text-bold no-margin">Employment</h2>
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
                  <h5 class="text-uppercase color-dark text-bold">Freelance Web-Developer</h5>
                  <p class="font-alt color-dark"><a href="/">kentldolar.cloud</a></p>
                  <p>Contract project handling <strong><em>AWS Server and CI/CD Automation Development</em></strong>, <em>Wordpress Development</em>, <em>PHP Development</em></p>
                  <p class="font-alt color-dark">Aug 2020 - Present</p>
                </div>
              </li>
            <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">02</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">Cloud Engineer</h5>
                  <p class="font-alt color-dark"><a href="https://www.biosjp.com/corporate.php">BiOS Inc.</a>, Nishi-shinjuku, Shinjuku City, Tokyo 160-0023</p>
                  <p>Contract project, <strong><em>created Serverless application (External Monitoring, Client's AWS-Google Speech to Text API with FFMPEG Codes and Google Natural language Project API)</em></strong>,
Troubleshooting, security testing, installing middlewares and creating linux users for our clients.<em>using CI/CD for development and using Github, Docker, AWS Codebuild, AWS
CodePipeline and AWS CodeDeploy.</em>
</p>
                  <p class="font-alt color-dark">  June 2019 - Aug 2020</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">03</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">Front-End Engineer</h5>
                  <p class="font-alt color-dark"><a href="http://diamondhead.jp/company/">Diamond Head Tokyo</a>, Tokyo Head Office 6&7th Floor, TDS Mita bldg. 2-7-13 Mita, Minato-ku, Tokyo, 〒108-0073 Japan</p>
                  <p>As a Front-End Web Developer, I have been assigned to create, develop and maintain website for our different online shops, 
using the companies e-commerce system. I utilize Adobe Frameworks, PHP, HTML5/CSS3 and JavaScript/jQuery to our companies system and
make the task more efficient and better with the help of Git Bitbucket, Sourcetree and Teraterm.
</p>
                  <p class="font-alt color-dark">  Dec 2017 - June 2019 </p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">04</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">Back-End Engineer</h5>
                  <p class="font-alt color-dark"><a href="http://ring-group.jp/">Ring System Solution</a>, 〒110-0016 Tokyo-to, Taito-ku, 2-1-1 East Akihabara Bldg. 6F, Japan</p>
                  <p>As a Web and System Developer, I am integrated in multi-disciplinary language programs such as HTML5, CSS3, Javascripts, jQuery
and PHP. While also using different frameworks and databases for our customer's services such as Moodle, Laravel, Wordpress, Microsoft
Azure, SQL Server, MySQL, etc. with the help of Information Management System such as Redmine</p>
                  <p class="font-alt color-dark"> Dec 2016 - Dec 2017</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-briefcase"></i></div>
                <div class="number font-alt">05</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">System Monitoring/Operator</h5>
                  <p class="font-alt color-dark"><a href="https://www.citigroup.jp/en/about/access-ses.html">CitiBank Japan Ltd. (CJL)</a>, Shinjuku Eastside Square, 6-27-30 Shinjuku, Shinjuku-ku, Tokyo 〒160-8812 </p>
                  <p>In a Corporate bank environments with formal processes and strict security and procedures handling multiple systems for
monitoring its network connection, server up, system testing, tracking, escalating, incident reporting, documenting, 
reporting, other that I am doing case studies, knowledge sharing, system management, evidence management, 
system documentation and computer tech support, with the help of <a href="https://www.skillhouse.co.jp/">Skillhouse Staffing Solutions</a>.
</p>
                  <p class="font-alt color-dark">  Dec 2014 - Dec 2016</p>
                </div>
              </li>
            </ul>
          </div>
        </div><!--END EMPLOYEMNT-->

        <!--EDUCATION-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">Education</h2>
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
                  <h5 class="text-uppercase color-dark text-bold"><strong>Udemy:</strong><a href="https://www.udemy.com/course/the-complete-web-development-bootcamp/learn/lecture/12287460#overview" target="_blank">The Complete 2020 Web Development Bootcamp by Angela Yu</a> </h5>
                  <!-- <p class="font-alt color-dark"></p> -->
                  <p>I bought a Web developer course in Udemy to improve my Web development skills and be confident more.</p>
                  <p class="font-alt color-dark"> Aug 2020 - Present</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt">02</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold"><strong>Udemy:</strong><a href="https://www.udemy.com/course/aws-certified-cloud-practitioner/learn/lecture/19202366#overview" target="_blank">AWS Certified Cloud Practitioner 2020 by Zeal Vora</a></h5>
                  <!-- <p class="font-alt color-dark">1-21-3 Koenji-Kita, Suginami, Tokyo 〒166-0002, Japan</p> -->
                  <p>I bought an AWS Course to fully grasp the essential usage of AWS and implement it in my work.</p>
                  <p class="font-alt color-dark">June 2019 - Aug 2020</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt">03</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">TOPA 21st Century Language School</h5>
                  <p class="font-alt color-dark">1-21-3 Koenji-Kita, Suginami, Tokyo 〒166-0002, Japan</p>
                  <p>I studied Japanese N3 to work in Japan while having part-time. I encounter meeting different people with diffrent culture and made friends till now.</p>
                  <p class="font-alt color-dark">  Oct 2013 - March 2014</p>
                </div>
              </li>
              <li>
                <div class="ic"><i class="fa fa-graduation-cap"></i></div>
                <div class="number font-alt">04</div>
                <div class="desc">
                  <h5 class="text-uppercase color-dark text-bold">Notre Dame of Dadiangas University</h5>
                  <p class="font-alt color-dark">Marist Ave, General Santos City, 9500 South Cotabato, Philippines</p>
                  <p>I studied Computer Engineering Course within 5 years. My Final Thesis is all about Automated Fan Control depending on temperature and motion around. I learned professionalism,friendships and competence with great/ likable and intelligent people that I have known.</p>
                  <p class="font-alt color-dark"> Bachelor of Science in Computer Engineering SY 2007-2012</p>
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
              <h2 class="text-uppercase color-dark text-bold no-margin">Skills</h2>
              <div class="title-icon"> <i class="fa fa-magic"></i> </div>
            </div>
          </div>
        </div>

        <div class="container-medium">
          <!--SKIL CHART TOP-->
          <ul class="skill top list-unstyled clearfix">
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right br-bottom">
                <span class="chart" data-percent="90" >
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">PHP</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right br-bottom">
                <span class="chart" data-percent="90">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">AWS</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right br-bottom">
                <span class="chart" data-percent="80">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">MYSQL</div>
              </div>
            </li>            
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-bottom">
                <span class="chart" data-percent="90">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase color-dark">JAVASCRIPT</div>
              </div>
            </li>
          </ul><!--END SKIL CHART TOP-->

          <!--SKIL CHART BOTTOM-->
          <ul class="skill bottom list-unstyled clearfix">
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right">
                <span class="chart" data-percent="70" >
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">TERRAFORM/DOCKER/VAGRANT</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right">
                <span class="chart" data-percent="100">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">HTML</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box br-right">
                <span class="chart" data-percent="100">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase  color-dark">CSS</div>
              </div>
            </li>
            <li class="col-sm-3 col-xs-6 no-padding">
              <div class="box">
                <span class="chart" data-percent="50">
                  <span class="percent"></span>
                </span>
                <div class="text-uppercase color-dark">NODEJS/REACTJS/VUEJS</div>
              </div>
            </li>
          </ul><!--END SKIL CHART BOTTOM-->


          <!-- MORE SKILS -->
          <div class="title-border">
            <h5 class="text-uppercase color-dark no-margin text-bold ">MORE SKILLS</h5>
          </div>  

          <div class="row">
            <div class="col-sm-6">
              <ul class="list-unstyled list-progress">
                <li>
                  <div class="text-uppercase color-dark title"><span>Creative</span>  <small aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="60%"  role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" ></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">Leadership   <small aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">Communication   <small aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="list-unstyled list-progress">
                <li>
                  <div class="text-uppercase color-dark title">English <small aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">Japanese  <small aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </li>
                <li>
                  <div class="text-uppercase color-dark title">Filipino  <small aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</small></div>
                  <div class="progress-line">
                    <div class="line bar_progress" data-holdwidth="70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
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
              <a href="{{ asset('public/download/Resume15.pdf') }}" class="btn btn-flat-line btn-default light-font " target="_blank" ><i class="fa fa-download"></i>  Download CV</a>
              <span class="space-inline-15 hidden-xs"></span>
              <a href="javascript: w=window.open('{{ asset('public/download/Resume15.pdf') }}'); w.print(); " class="btn btn-flat-line btn-default light-font"><i class="fa fa-print"></i> Print CV</a>
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
              <h2 class="text-uppercase color-dark text-bold no-margin">Portfolio</h2>
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
                    <img src="{{ asset('public/images/400x300jjhs.png') }}" alt="kentldolar jjhs project">
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
        <?php /*
        <!--TESTIMONIAL-->
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
        </div><!--END TESTIMONIAL--> */ ?>
      </section><!--END PORTFOLIO-->

      <!--BLOG-->
      <section id="blog" class="block-section">
        <!--BLOG TITLE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">Blog</h2>
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
                    <a href="https://kentoy-d-mytricks.blogspot.com/2012/07/mytricks-projects.html" class="btn btn-xs btn-flat-solid primary-btn">Read More</a>
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
                    <a href="https://kentoy-d-mytricks.blogspot.com/2012/05/mytrickshobbies.html" target="_blank" class="btn btn-xs btn-flat-solid primary-btn">Read More</a>
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
                    <a href="http://kentoy-d-mytricks.blogspot.com/2012/05/about-career-as-computer-engineer-like.html" class="btn btn-xs btn-flat-solid primary-btn">Read More</a>
                  </div>
                </div>
              </li>
            </ul> <!--END LIST BLOG-->

            <!--BTN SHOW MORE-->
            <div class="box-btn-more"><a href="http://kentoy-d-mytricks.blogspot.com/" class="btn btn-flat-line btn-link" id="more-blog"> Show More</a></div>
          </div>
        </div>
      </section> <!--END BLOG-->

      <!--CONTACT-->
      <?php /*TODO:: */ ?>
      <section id="contact" class="block-section">
        <!--CONTACT TITLE-->
        <div class=" shape-bottom">
          <div class="bg-secondary block-title">
            <div class="container">
              <h2 class="text-uppercase color-dark text-bold no-margin">Contact</h2>
              <div class="title-icon"> <i class="fa fa-envelope-o"></i> </div>
            </div>
          </div>
        </div><!--END CONTACT TITLE-->

        <div class="contact-area">
          <div class="form-contact-area clearfix">
            <div class="inner-contact clearfix ">
              <!--TABS CONTACT-->
              <ul id="myTab" class="nav nav-tabs flat-nav-tabs" role="tablist">
                <li class="active"><a href="#tab0" role="tab" data-toggle="tab">Contact Me</a></li>
                <!-- <li><a href="#tab1" role="tab" data-toggle="tab">Hire Me</a></li> -->
              </ul>

              <div id="myTabContent" class="tab-content flat-tab-content">
                <div class="tab-pane fade in active" id="tab0">
                  <form method="post" id="contactForm" name="contactForm">
                  <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="subject" value="Message Contact Form">
                    <div class="form-group">
                      <label>Your Name (*)</label>
                      <input id="ful1" type="text" class="form-control form-flat" name="fullname" required>
                    </div>
                    <div class="form-group">
                      <label>Email (*)</label>
                      <input id="eml1" type="email" class="form-control form-flat" name="email" required>
                    </div>
                    <div class="form-group">
                      <label>Your Message (*)</label>
                      <textarea id="mes1" class="form-control form-flat" name="message" rows="8" required></textarea>
                    </div>

                    <div class="form-group">
                      <div id="captcha1"></div>
                      @if($errors->has('g-recaptcha-response'))
                        <span class="invalid-feedback" style="display:block;"><strong>{{$errors->first('g-recaptcha-response')}}</strong></span>
                      @endif
                    </div>
                    <div class="form-group ">
                      <button type="submit" class="btn btn-flat-solid primary-btn" >Send Message</button>
                    </div>
                    <div class="form-group">
                      <div class="preload-submit hidden"><hr/> <i class="fa fa-spinner fa-spin"></i> Please Wait ...</div>
                      <div class="message-submit error hidden"></div>
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
              <h4 class="no-margin-top font-alt">I am Here</h4>
              <!-- <p><i class="fa fa-map-marker"></i> <strong>Address:</strong> 165-0027 Tokyo-to, Nakano-ku, Nogata 2-38-11-203</p> -->
              <p><i class="fa fa-mobile"></i> <strong>Phone:</strong> + 070-6511-9523 </p>
              <p><i class="fa fa-envelope"></i> <strong>Email:</strong> kentldolar@gmail.com</p>
            </div>
          </div>
          <!--END MAP-->
        </div>
      </section><!--END CONTACT-->


      <!--FOOTER-->
      <footer class="main-footer">
        <div class="container">
          <div class="folow-me">
            Follow Me On
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
              <a href="https://github.com/kentldolar"  data-toggle="tooltip"  data-placement="top" title="Github"><i class="fa fa-github"></i></a>
            </li>
          </ul>
          <p class="text-center no-margin">
            kentldolar.cloud - All Rights Reserved &COPY; 2020
          </p>
          <a href="#home" class="back-to-top"><i class="fa fa-angle-double-up" ></i></a>
        </div>
      </footer><!--END FOOTER-->
    </div><!--End wrapper page-->

    <!-- generate captcha -->
    <div id="mycaptcha-wrap" class="hidden mycaptcha1">
      <div id="mycaptcha" class="mycaptcha1"></div>
    </div>

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
          'theme' : 'light'
        });
        // widgetId2 = grecaptcha.render(document.getElementById('captcha2'), {
        //   'sitekey' : "{{env('CAPTCHA_KEY')}}",
        //   'theme' : 'light'
        // });
      };
    </script>
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
    <script src="{{ asset('public/white/theme/js/theme.js') }}"></script>


<!-- TODO:: AJAX -->

  </body>
</html>
