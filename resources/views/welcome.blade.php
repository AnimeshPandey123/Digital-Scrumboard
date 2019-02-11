
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DSB</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Merriweather|Poppins" rel="stylesheet">

        <!-- Font Awesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #F5F5F5;
                font-family: 'Poppins', sans-serif;
                color: #707070;
                margin: 0;
                padding: 0;
            }

            .land{
                background: url({{asset('images/landbg.png')}}) no-repeat center right scroll; 
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: auto 100%;
                min-height: 100vh;
            }            

            .nav-link{
                font-size: 15px;
                font-weight: bold;
            }

            .nav-item{
                padding: 0 0 0 20px;
            }

            .navibg{
                background: white;
                padding: 0px 40px;
                box-shadow:0px 1px 3px #b5b5b5;
            }

            .logo{
                width: 80px;
            }

            .dsbtitle{
                font-family: 'Merriweather', serif;
                padding-top: 80px; 
                font-weight: bold;
                font-size:3em;
            }

            .pd_20{
                padding: 10px;
            }

            .redbutton{border-radius:100px;transition:0.5s;background:#FD79A8;padding:5px 15px; border:1px solid #FD79A8;  width: 200px; text-align:center; color:#fff; text-decoration: none; box-shadow: 0px 2px #ddd; margin: 40px 0px 0px 150px;} 

            .redbutton:hover {background:#fd79a7;}

            .features{
                margin: 20px auto;
            }

            .large_card_pink{
                margin: 20px;
                border-radius: 4px; 
                padding: 15px 15px;
                width: 300px;
                text-align: center;
                color: white;
                background-color: #FD79A8;
            }
            .large_card_blue{
                margin: 20px;
                border-radius: 4px; 
                padding: 15px 15px;
                width: 300px;
                text-align: center;
                color: white;
                background-color: #74B9FF;
            }
            .large_card_green{
                margin: 20px;
                border-radius: 4px; 
                padding: 15px 15px;
                width: 300px;
                text-align: center;
                color: white;
                background-color: #55EFC4;
            }

            .centa{
                margin: 15px auto;
                font-size:22px;
                font-weight:bold;
            }

            .team{
                background: #515151;
            }

            .dev_pic{
                width: 100px;
                margin: 35px 10px;
            }

            .dev_name{
                display: inline-block;
                color: white;
                font-weight: bold;
            }

            .dev_role{
                font-weight: normal;
                font-size: 14px;
                font-style: oblique;
            }

            .foot{
                text-transform: capitalize;
            }

            .foot ul{
                list-style: none;
                margin: 0 auto;
            }

            .foot ul li{
                display: inline-block;
                padding: 20px 20px;
            }


            @media (max-width: 992px) { 
                .land{
                    background: none;
                }
            }
        </style>
        </head>
        <body>
        <div class="land">
        <div class="container-fluid navibg">
            <div class="container">
                <nav class="navbar navbar-expand-lg">
                    <a class="navbar-brand" href="#">
                        <img src="{{asset('images/logo.png')}}" alt="" class="logo">
                    </a>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        @if (Route::has('login'))
                            @auth
                                <a class="nav-link" href="{{ url('/home') }}">Home</a>
                            @else
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}" data-toggle="modal" data-target="#login">Get Started</a>
                                @endif
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}" data-toggle="modal" data-target="#login">Login</a>
                            @endauth
                        @endif
                    </li>
                </ul>
                </nav>
            </div>
        </div>
            

            <div class="row container-fluid">
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <h1 class="dsbtitle"> Digital Scrum Board</h1>
                </div>
                <div class="col-md-8"></div>
            </div>

            <div class="row container-fluid">
                <div class="col-md-1"></div>
                <div class="col-md-4 pd_20">
                    <hr>
                    <p style="font-size:20px;">" Not only has this online tool helped me get my job done faster, 
                    it also helped me get promoted "
                    <div class="float-right">
                        <br>   -Saugat Sigdel 
                        <br>   <span style="margin-left:8px;font-style:italic;">St. Xavier's College</span>
                    </div>
                    </p>
                </div>
                <div class="col-md-7"></div>
            </div>
            <div class="redbutton"> 
                <a href="{{ route('register') }}" style="color:#fff;"  data-toggle="modal" data-target="#login"> Get Started  </a>
            </div>
        </div>

        <div class="features">
        <h2 style="color:#55EFC4;text-align:center;padding-top: 30px;">Features</h2>
        <div class="row container-fluid ">
            <div class="col-md-4"><div class=" large_card_blue centa">
                <i class="fas fa-tachometer-alt"></i>&nbsp;Dashboard 
            </div> </div>
            <div class="col-md-4"><div class=" large_card_pink centa">
                <i class="fas fa-bolt"></i>&nbsp;Super Fast
            </div></div>
            <div class="col-md-4"><div class=" large_card_green centa">
                <i class="fas fa-bell"></i>&nbsp;Notifications
            </div></div>
        </div>
        <div class="row container-fluid">
            <div class="col-md-4"><div class=" large_card_green centa">
                <i class="fas fa-file"></i>&nbsp;Flexible Cards
            </div></div>
            <div class="col-md-4"><div class=" large_card_blue centa">
                <i class="fas fa-cog"></i>&nbsp;Customizable
            </div></div>
            <div class="col-md-4"><div class=" large_card_pink centa">
                <i class="fas fa-lock"></i>&nbsp;Secure
            </div> </div>
        </div>
        </div>
            
        <div class="team container-fluid">
            <h2 style="color:#fff;text-align: center;padding-top: 30px;"> Meet The Team</h2>
            <div class="row ">
                <div class="col-md-3">
                        <img src="{{asset('images/Akash.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Aakash Singh Thakuri
                        <br><p class="dev_role">Frontend Developer<p>
                        </div>
                </div>
                <div class="col-md-3">
                        <img src="{{asset('images/Pandu.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Animesh Pandey
                        <br><p class="dev_role">Backend and API<p>
                        </div>
                </div>
                <div class="col-md-3">
                        <img src="{{asset('images/Biku.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Bibek Paudel
                        <br><p class="dev_role">Frontend Developer<p>
                        </div>
                </div>
                <div class="col-md-3">
                        <img src="{{asset('images/Ghiru.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Cheena Niraula
                        <br><p class="dev_role">Frontend Developer<p>
                        </div>
                </div>
            </div>

            <div class="row ">
                <div class="col-md-3">
                        <img src="{{asset('images/Pandu female.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Neha Pandey
                        <br><p class="dev_role">Backend Developer<p>
                        </div>
                </div>
                <div class="col-md-3">
                        <img src="{{asset('images/me.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Nischal Kharel
                        <br><p class="dev_role">UI/UX and Frontend<p>
                        </div>
                </div>
                <div class="col-md-3">
                        <img src="{{asset('images/Hairy.png')}}" alt="" class="dev_pic">
                        <div class="dev_name">
                        Prashant Raj Dahal
                        <br><p class="dev_role">UI/UX and Backend<p>
                        </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>

        <div class="row container-fluid foot">
            <ul>
                <li>About</li>
                <li>Terms and conditions</li>
                <li>Privacy Policy</li>
                <li>Help</li>
            </ul>
        </div>

        <!-- The Modal -->
        <div class="modal fade" id="login">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title text-info">
                    Get Inside
                </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <div class="modal-body">
                <!-- Nav pills -->
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="pill" href="#home">Log In</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="pill" href="#menu1">Register</a>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div class="tab-pane container active" id="home">
                      <div class="text-center"><br><br>
                          <button class="btn btn-danger" style="border-radius:100px;padding:5px 15px;">
                              <i class="fab fa-google"></i>&nbsp;
                              Sign In with Google
                          </button><br><br>
                      </div>
                  </div>
                  <div class="tab-pane container fade" id="menu1">
                      <div class="text-center"><br><br>
                          <button class="btn btn-danger" style="border-radius:100px;padding:5px 15px;">
                              <i class="fab fa-google"></i>&nbsp;
                              Get Started with Google
                          </button><br><br>
                      </div>
                  </div>
                </div>
              </div>

              <!-- Modal footer -->
              <div class="modal-footer">
                <button type="button" class="btn btn-info" style="border-radius:100px;padding:5px 15px;" data-dismiss="modal">
                    <i class="fas fa-times"></i>&nbsp;
                    Not Now
                </button>
              </div>

            </div>
          </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>
