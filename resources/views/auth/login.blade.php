@extends('layouts.app')

@section('content')
<!--<script>
    let token =sessionStorage.getItem('Token');
    if (token != null){
        window.location.replace("http://localhost/laravel/fx-API/public/");
    }
</script> -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">

                                <button onclick="loginn()" class="btn btn-primary">Login</button>
                                <script>
                                    function loginn() {
                                        let email = document.getElementById('email').value
                                        let password = document.getElementById('password').value
                                        axios({
                                          method: 'post',
                                          url: 'http://localhost/laravel/fx-API/public/api/login',
                                          data: {
                                            email: email,
                                            password: password
                                          }
                                        })
                                        .then(function (response) {
                                            console.log(response.data.token);
                                            let token= response.data.token;
                                            //Session::put('api-token',$token);
                                            
                                            
                                            /*var username ='<%= Session["token"] %>';
                                                console.log(username);*/
                                                sessionStorage.Token=token;
                                                console.log(sessionStorage.getItem('Token'));
                                                var test = "<?php echo Session::put('api-token', 'asdf'); ?>";
                                                var test2 = "<?php echo Session::get('api-token'); ?>";
                                                console.log(test2);
                                                window.location.replace("http://localhost/laravel/fx-API/public/");
                                            
                                        });
                                    }
                                </script>
                                
                                
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
