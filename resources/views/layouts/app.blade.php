<!DOCTYPE html>
<html lang="en">

   <!--<![endif]-->
   <!-- BEGIN HEAD -->
   <head>
      <meta charset="utf-8" />
      <title>Đăng nhập</title>
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta content="width=device-width, initial-scale=1" name="viewport" />
      <meta content="" name="description" />
      <meta content="" name="author" />
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      {{--<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />--}}
      <link href="{{ asset('assets/global/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
      {{--<link href="{{ asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css" />--}}
      <link href="{{ asset('assets/global/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
      {{--<link href="{{ asset('assets/global/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css" />--}}
      {{--<link href="{{ asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css')}}" rel="stylesheet" type="text/css" />--}}
      <!-- END GLOBAL MANDATORY STYLES -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      {{--<link href="{{ asset('assets/global/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('assets/global/plugins/select2/css/select2-bootstrap.min.css')}}" rel="stylesheet" type="text/css" />--}}
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL STYLES -->
      {{--<link href="{{ asset('assets/global/css/components-md.min.css')}}" rel="stylesheet" id="style_components" type="text/css" />
      <link href="{{ asset('assets/global/css/plugins-md.min.css')}}" rel="stylesheet" type="text/css" />--}}
      <!-- END THEME GLOBAL STYLES -->
      <!-- BEGIN PAGE LEVEL STYLES -->
      <link href="{{ asset('assets/pages/css/login.min.css')}}" rel="stylesheet" type="text/css" />
      <!-- END PAGE LEVEL STYLES -->
      <!-- BEGIN THEME LAYOUT STYLES -->
      <!-- END THEME LAYOUT STYLES -->
      {{--<link rel="shortcut icon" href="{{url('img/favicon.ico')}}" />--}}
      <style type="text/css" media="screen">
         .error{
         color: red;
         }
      </style>
      <!-- CSRF Token -->
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <script>
         window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
            ]); ?>
      </script>
   </head>
   <!-- END HEAD -->
   <body class=" login">




      @yield('content')

      <div class="copyright"> 2018 @ anhldpro </div>
      <!--[if lt IE 9]>
     <!-- <script src="../assets/global/plugins/respond.min.js"></script>
      <script src="../assets/global/plugins/excanvas.min.js"></script>-->
      <![endif]-->
      <!-- BEGIN CORE PLUGINS -->
      <script src="{{ asset('assets/global/plugins/jquery.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      {{--<script src="{{ asset('assets/global/plugins/js.cookie.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}" type="text/javascript"></script>--}}
      <!-- END CORE PLUGINS -->
      <!-- BEGIN PAGE LEVEL PLUGINS -->
      {{--<script src="{{ asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/jquery-validation/js/additional-methods.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('assets/global/plugins/select2/js/select2.full.min.js')}}" type="text/javascript"></script>--}}
      <!-- END PAGE LEVEL PLUGINS -->
      <!-- BEGIN THEME GLOBAL SCRIPTS -->
      <script src="{{ asset('assets/global/scripts/app.min.js')}}" type="text/javascript"></script>
      <!-- END THEME GLOBAL SCRIPTS -->
      <!-- BEGIN PAGE LEVEL SCRIPTS -->
      <script src="{{ asset('assets/pages/scripts/login.min.js')}}" type="text/javascript"></script>
      <script src="{{ asset('js/jqueryValidate/jquery.validate.js')}}"></script>
      <!-- END PAGE LEVEL SCRIPTS -->
      <!-- BEGIN THEME LAYOUT SCRIPTS -->
      <!-- END THEME LAYOUT SCRIPTS -->

      <!-- vector map CSS -->
      <link href="{{ asset('css/doodle/dist/css/style.css')}}" rel="stylesheet" type="text/css"/>


   </body>
   <script>
      /*$("#form-login").validate({
         rules:{
             password:{
                 required:true,
                 minlength:6,
             },
             email:{
                required:true,
                email:true,
             }
         },
         messages:{
             password:{
                 required:'<div style = "margin-top:10px;">Vui lòng nhập trường này</div>',
                 minlength:'<div style = "margin-top:10px;">Phải nhập 6 ký tự trở lên</div>',
             },
             email:{
                 required:'<div style = "margin-top:10px;">Vui lòng nhập trường này</div>',
                 email:'<div style = "margin-top:10px;">Phải nhập đúng định dạng Email</div>',
             }
         }
      })*/
      
   </script>
   <script>
      @if ( Session::has('success'))
      toastr.success('{{ session('success')}}');
      @endif

      @if ( Session::has('error'))
      toastr.success('{{ session('error')}}');
      @endif
   </script>
</html>