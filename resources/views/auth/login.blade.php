<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">

    <title>Login-Laptop PhongLinh</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('public/admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/bootstrap-reset.css')}}" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="{{asset('public/admin/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('public/admin/css/style-responsive.css')}}" rel="stylesheet" />

  
</head>

  <body class="login-body">

    <div class="container">

                @if ($errors->any())
                <div class="alert alert-danger"> 
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>  
                @endif
      <form class="form-signin" action="{{asset('/auth/login')}}" method="post">
        <h2 class="form-signin-heading">Đăng nhập</h2>
        <div class="login-wrap">
         @if (Session::has('message'))
            <div class="alert alert-success">
                {!! Session::get('message') !!}
            </div> 
          @endif  
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="text" name='username' class="form-control" placeholder="tên đăng nhập" autofocus>
            <input type="password" name='password' class="form-control" placeholder="mật khẩu">
           
            <button class="btn btn-lg btn-login btn-block" type="submit">Đăng nhập</button>
           

        </div>

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{asset('public/admin/js/jquery.js')}}"></script>
    <script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>


  </body>
</html>
