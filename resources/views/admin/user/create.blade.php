@extends('layouts.app')
@section('content')

<div class="container">
    <div class="main_container">
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                <form method="POST" action="{{ route('user.store') }}">
                    @csrf
                    <h1>Create New Account</h1>

                    <div>
                        <input class="form-control" type="text" name="user_name" value="{{old('user_name')}}" placeholder="Username" required autocomplete="username" />
                    </div>

                    <div>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Full Name" required autocomplete="username" />
                    </div>

                    <div>
                        <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="E-mail" required autocomplete="username" />
                    </div>

                    <div>
                        <input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="new-password"  />
                    </div>

                    <div>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password"  />
                    </div>

                    <div>
                    {{-- <a class="btn btn-default submit" href="index.html">Submit</a> --}}
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </div>
                    <div class="separator">
                    <br />
                </form>
                </section>
            </div>
        </div>
    </div>
</div>
   
    
@endsection
