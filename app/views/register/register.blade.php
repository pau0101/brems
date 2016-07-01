<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/bootstrap/css/bootstrap.min.css') }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/dist/css/AdminLTE.min.css') }}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('bower_components/admin-lte/plugins/iCheck/square/blue.css') }}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background-image: url('{{ asset('bower_components/admin-lte/dist/images/brgy1.png')}}'); background-size: cover;">

@if (Session::get('message'))
    <div class="alert alert-success">
        {{ Session::get('message') }}
    </div>
@endif


<div class="login-box" style="width: 700px; height: 400px;">
  <div class="login-logo" style="background-color: white; opacity: 0.8; width: 700px">
    <a href="../../index2.html"><b>Officials</b> Registration</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="opacity: 0.8; height: 350px; ">
  <br>

    <form method="post" action="{{URL::to('registration')}}" id="formform">
    <p class="login-box-msg">Fill-up the Needed Information </p>
      <div class="col-xs-6">

        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control" placeholder="First Name" id = "fname" name="fname">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-user"></i>
            </div>
            <input type="text" class="form-control" placeholder="Last Name" id = "lname" name="lname">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-venus-mars"></i>
            </div>
            <select type="text" class="form-control" placeholder="Gender" id = "gender" name="gender">
              <option disabled="" selected="">Gender</option>
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-calendar"></i>
            </div>
            <input type="text" class="form-control" placeholder="Birthdate" onfocus="(this.type='date')" id = "birthdate" name="birthdate">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-black-tie"></i>
            </div>
            <select type="text" class="form-control" placeholder="Position" id = "position" name="position">
              <option selected="" disabled="">Position</option>
              @foreach($pos as $pos)
                <option value = "{{$pos -> OfficialPositionID}}">{{$pos -> OfficialPosition}}</option>
              @endforeach
            </select>
          </div>
        </div>
      </div>
      <div class="col-xs-6">
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-envelope"></i>
            </div>
            <input type="email" class="form-control" placeholder="Email" id = "email" name="email">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-at"></i>
            </div>
            <input type="text" class="form-control" placeholder="Username" id = "username" name="username">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-unlock"></i>
            </div>
            <input type="password" class="form-control" placeholder="Password" id = "password" name="password">
          </div>
        </div>
        <div class="form-group">
          <div class="input-group">
            <div class="input-group-addon">
              <i class="fa fa-lock"></i>
            </div>
            <input type="password" class="form-control" placeholder="Re-enter Password" id = "confirmpassword" name="confirmpassword">
          </div>
        </div>

        

      <div class="row">
        <div class="col-xs-8"></div>
        
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" id = "btn" name = "btn">Register</button>

        </div>
        <!-- /.col -->
      </div>
      </div>

    </form>
    </div>
    <!-- /.social-auth-links -->

  </div>
  <!-- /.login-box-body -->
<!-- /.login-box -->

<!-- iCheck -->

<!-- jQuery 2.1.3 -->
<script src="{{ asset ('bower_components/admin-lte/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#username').keyup(function(){
      $.ajax({
        type: 'POST',
        url: 'checkUsername',
        data: {username: $('#username').val()},
        dataType:'JSON',
        success: function(data){
          if(data.hey[0] == 1)
          {
            alert('username not available');
          }
        },
         error: function (request, error) {
                        console.log(arguments);
                        alert(" Can't do because: " + error);
        }
      }).error(function(ts){
                      alert(ts.responseText)
                    });
    });
    
  });
</script>


<!-- Bootstrap 3.3.2 JS -->
<script src="{{ asset ('bower_components/admin-lte/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>

<!-- InputMask -->
<script src="{{ asset ('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.js') }}"></script>
<script src="{{ asset ('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.date.extensions.js') }}"></script>
<script src="{{ asset ('bower_components/admin-lte/plugins/input-mask/jquery.inputmask.extensions.js') }}"></script>
</body>
</html>
