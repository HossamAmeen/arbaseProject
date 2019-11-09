<!DOCTYPE html>
<html lang="en" xmlns="http:/www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- Viewport metatags -->
    <meta name="HandheldFriendly" content="true" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- iOS webapp metatags -->
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />

    <!-- iOS webapp icons -->
    <link rel="apple-touch-icon-precomposed" href="{{asset('panel/assets/images/ios/fickle-logo-72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('panel/assets/images/ios/fickle-logo-72.png')}}" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('panel/assets/images/ios/fickle-logo-114.png')}}" />

    <!-- TODO: Add a favicon -->
    <link rel="shortcut icon" href="{{asset('panel/assets/images/ico/fab.ico')}}">

    <title> @yield('title')</title>

    <!--Page loading plugin Start -->
    <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/pace-rtl.css')}}">
    <script src="{{asset('panel/assets/js/pace.min.js')}}"></script>
    <!--Page loading plugin End   -->

    <!-- Plugin Css Put Here -->
    <link href="{{asset('panel/assets/css/bootstrap-rtl.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/bootstrap-progressbar-3.1.1-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/dndTable-rtl.css')}}">
    <link rel="stylesheet" href="{{asset('panel/assets/css/rtl-css/plugins/tsort-rtl.css')}}">

    <!-- Plugin Css End -->
    <!-- Custom styles Style -->
    <link href="{{asset('panel/assets/css/rtl-css/style-rtl.css')}}" rel="stylesheet">
    <!-- Custom styles Style End-->

    <!-- Responsive Style For-->
    <link href="{{asset('panel/assets/css/rtl-css/responsive-rtl.css')}}" rel="stylesheet">
    <!-- Responsive Style For-->

   
    <!-- Custom styles for this template -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>
    <![endif]-->
    @stack('css')
</head>
<body class="">
    <!--Navigation Top Bar Start-->
    @include('back-end.layout.nav')
    
    <!--Navigation Top Bar End-->
    <section id="main-container">

        <!--Left navigation section start-->
         @include('back-end.layout.side-bar')
        <!--Left navigation section end-->


        <!--Page main section start-->
        <section id="min-wrapper">
            <div id="main-content">
                <div class="container-fluid">
                    @yield('content')

                </div>
            </div>
        </section>
        <!--Page main section end -->
        
        <!--Right hidden  section start-->
        <section id="right-wrapper">
            <!--Right hidden  section close icon start-->
            <div class="close-right-wrapper">
                <a href="javascript:void(0)"><i class="fa fa-times"></i></a>
            </div>
            <!--Right hidden  section close icon end-->

            <!--Tab navigation start-->
            <ul class="nav nav-tabs" id="setting-tab">
                <li class="active"><a href="#chatTab" data-toggle="tab"><i class="fa fa-comment-o"></i> Chat</a></li>
                <li><a href="#settingTab" data-toggle="tab"><i class="fa fa-cogs"></i> Setting</a></li>
            </ul>
            <!--Tab navigation end -->

            <!--Tab content start-->
            <div class="tab-content">
                <div class="tab-pane active" id="chatTab">
                    <div class="nano">
                        <div class="nano-content">
                            <div class="chat-group chat-group-fav">
                                <h3 class="ls-header">Favorites</h3>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-online"></span>
                                    Catherine J. Watkins
                                    <span class="badge badge-lightBlue">1</span>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-idle"></span>
                                    Fernando G. Olson
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-busy"></span>
                                    Susan J. Best
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-offline"></span>
                                    Brandon S. Young
                                </a>
                            </div>
                            <div class="chat-group chat-group-coll">
                                <h3 class="ls-header">Colleagues</h3>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-offline"></span>
                                    Brandon S. Young
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-idle"></span>
                                    Fernando G. Olson
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-online"></span>
                                    Catherine J. Watkins
                                    <span class="badge badge-lightBlue">3</span>
                                </a>

                                <a href="javascript:void(0)">
                                    <span class="user-status is-busy"></span>
                                    Susan J. Best
                                </a>

                            </div>
                            <div class="chat-group chat-group-social">
                                <h3 class="ls-header">Social</h3>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-online"></span>
                                    Catherine J. Watkins
                                    <span class="badge badge-lightBlue">5</span>
                                </a>
                                <a href="javascript:void(0)">
                                    <span class="user-status is-busy"></span>
                                    Susan J. Best
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="chat-box">
                        <div class="chat-box-header">
                            <h5>
                                <span class="user-status is-online"></span>
                                Catherine J. Watkins
                            </h5>
                        </div>

                        <div class="chat-box-content">
                            <div class="nano nano-chat">
                                <div class="nano-content">

                                    <ul>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Are you here?</p>
                                            <span class="time">10:10</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Whohoo!</p>
                                            <span class="time">10:12</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>This message is pre-queued.</p>
                                            <span class="time">10:15</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Do you like it?</p>
                                            <span class="time">10:20</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>This message is pre-queued.</p>
                                            <span class="time">11:00</span>
                                        </li>
                                        <li>
                                            <span class="user">Catherine</span>
                                            <p>Hi, you there ?</p>
                                            <span class="time">12:00</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="chat-write">
                        <textarea class="form-control autogrow" placeholder="Type your message"></textarea>
                    </div>
                </div>

                <div class="tab-pane" id="settingTab">

                    <div class="setting-box">
                        <h3 class="ls-header">Account Setting</h3>
                        <div class="setting-box-content">
                            <ul>
                                <li><span class="pull-left">Online status: </span><input type="checkbox" class="js-switch-red" checked/></li>
                                <li><span class="pull-left">Show offline contact: </span><input type="checkbox" class="js-switch-light-blue" checked/></li>
                                <li><span class="pull-left">Invisible mode: </span><input class="js-switch" type="checkbox" checked></li>
                                <li><span class="pull-left">Log all message:</span><input class="js-switch-light-green" type="checkbox" checked></li>
                            </ul>
                        </div>
                    </div>
                    <div class="setting-box">
                        <h3 class="ls-header">Maintenance</h3>
                        <div class="setting-box-content">
                            <div class="easy-pai-box">
                                <span class="easyPieChart" data-percent="90">
                                    <span class="easyPiePercent"></span>
                                </span>
                            </div>
                            <div class="easy-pai-box">
                                <button class="btn btn-xs ls-red-btn js_update">Update Data</button>
                            </div>
                        </div>
                    </div>

                    <div class="setting-box">
                        <h3 class="ls-header">Progress</h3>
                        <div class="setting-box-content">

                            <h5>File uploading</h5>
                            <div class="progress">
                                <div class="progress-bar ls-light-blue-progress six-sec-ease-in-out"
                                     aria-valuetransitiongoal="10"></div>
                            </div>

                            <h5>Plugin setup</h5>
                            <div class="progress progress-striped active">
                                <div class="progress-bar six-sec-ease-in-out ls-light-green-progress"
                                     aria-valuetransitiongoal="20"></div>
                            </div>
                            <h5>Post New Article</h5>
                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-yellow-progress six-sec-ease-in-out"
                                     aria-valuetransitiongoal="80"></div>
                            </div>
                            <h5>Create New User</h5>
                            <div class="progress progress-striped active">
                                <div class="progress-bar ls-red-progress six-sec-ease-in-out"
                                     aria-valuetransitiongoal="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Tab content -->
        </section>
        <!--Right hidden  section end -->

        <div id="change-color">
            <div id="change-color-control">
                <a href="javascript:void(0)"><i class="fa fa-magic"></i></a>
            </div>
            <div class="change-color-box">
                <ul>
                    <li class="default active"></li>
                    <li class="red-color"></li>
                    <li class="blue-color"></li>
                    <li class="light-green-color"></li>
                    <li class="black-color"></li>
                    <li class="deep-blue-color"></li>
                </ul>
            </div>
        </div>

    </section>
     <!--Layout Script start -->
     <script type="text/javascript" src="{{asset('panel/assets/js/color.js')}}"></script>
     <script type="text/javascript" src="{{asset('panel/assets/js/lib/jquery-1.11.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('panel/assets/js/bootstrap.min.js')}}"></script>
     <script type="text/javascript" src="{{asset('panel/assets/js/multipleAccordion.js')}}"></script>
     <!--jqueryui for table start-->
     <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
     <!--jqueryui for table end-->
 
 
     <!--easing Library Script Start -->
     <script src="{{asset('panel/assets/js/lib/jquery.easing.js')}}"></script>
     <!--easing Library Script End -->
 
     <!--Nano Scroll Script Start -->
     <script src="{{asset('panel/assets/js/jquery.nanoscroller.min.js')}}"></script>
     <!--Nano Scroll Script End -->
 
     <!--switchery Script Start -->
     <script src="{{asset('panel/assets/js/switchery.min.js')}}"></script>
     <!--switchery Script End -->
 
     <!--bootstrap switch Button Script Start-->
     <script src="{{asset('panel/assets/js/bootstrap-switch.js')}}"></script>
     <!--bootstrap switch Button Script End-->
 
     <!--easypie Library Script Start -->
     <script src="{{asset('panel/assets/js/jquery.easypiechart.min.js')}}"></script>
     <!--easypie Library Script Start -->
 
     <!--bootstrap-progressbar Library script Start-->
     <script src="{{asset('panel/assets/js/bootstrap-progressbar.min.js')}}"></script>
     <!--bootstrap-progressbar Library script End-->
 
     <script type="text/javascript" src="{{asset('panel/assets/js/pages/layout.js')}}"></script>
     <!--Layout Script End -->
 
 
 
     <!--Drag & Drop & Sort  table start-->
     <script src="{{asset('panel/assets/js/tsort.js')}}"></script>
     <script src="{{asset('panel/assets/js/jquery.tablednd.js')}}"></script>
     <script src="{{asset('panel/assets/js/jquery.dragtable.js')}}"></script>
     <!--Drag & Drop & Sort table end-->
 
     <!--Editable-table Start-->
     <script src="{{asset('panel/assets/js/editable-table/jquery.dataTables.js')}}"></script>
     <script src="{{asset('panel/assets/js/editable-table/jquery.validate.js')}}"></script>
     <script src="{{asset('panel/assets/js/editable-table/jquery.jeditable.js')}}"></script>
     <script src="{{asset('panel/assets/js/editable-table/jquery.dataTables.editable.js')}}"></script>
     <!--Editable-table Finish -->
 
     <script src="{{asset('panel/assets/js/bootstrap-progressbar.min.js')}}"></script>
 
     <!--Demo table script start-->
     <script src="{{asset('panel/assets/js/pages/table.js')}}"></script>
     <!--Demo table script end-->

    @stack('js')
</body>
</html>