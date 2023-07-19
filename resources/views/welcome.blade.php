@extends('layouts.app')
@section('content')
    
    <div class="container">
        <div class="main_container">
            <div class="login_wrapper">
                <div class="animate form login_form">
                  <section class="login_content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <h1>Login Form</h1>

                      <div>
                        <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{old('email')}}" required autofocus autocomplete="username" />
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                      </div>

                      <div>
                        <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="current-password" />
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                            </span>
                        @enderror
                      </div>

                      <div>
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        <a class="reset_pass" href="{{ route('password.email') }}">Lost your password?</a>
                      </div>
        
                      <div class="clearfix"></div>
        
                      <div class="separator">
                        <p class="change_link">New to site?
                          <a href="{{ route('register') }}" class="to_register"> Create Account </a>
                        </p>
        
                        <div class="clearfix"></div>
                        <br />
        
                        <div>
                          <h1><i class="fa fa-paw"></i> Altazur Rahman Degree College</h1>
                          <p>©2023 All Rights Reserved. <span class="text-success">Code Artist.IT</span></p>
                        </div>
                      </div>
                    </form>
                  </section>
                </div>
        
                {{-- <div id="register" class="animate form registration_form">
                  <section class="login_content">
                    <form>
                      <h1>Create Account</h1>
                      <div>
                        <input type="text" class="form-control" placeholder="Username" required="" />
                      </div>
                      <div>
                        <input type="email" class="form-control" placeholder="Email" required="" />
                      </div>
                      <div>
                        <input type="password" class="form-control" placeholder="Password" required="" />
                      </div>
                      <div>
                        <a class="btn btn-default submit" href="index.html">Submit</a>
                      </div>
        
                      <div class="clearfix"></div>
        
                      <div class="separator">
                        <p class="change_link">Already a member ?
                          <a href="#signin" class="to_register"> Log in </a>
                        </p>
        
                        <div class="clearfix"></div>
                        <br />
        
                        <div>
                          <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                          <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                        </div>
                      </div>
                    </form>
                  </section>
                </div> --}}
              </div>
        </div>
    </div>

@endsection

