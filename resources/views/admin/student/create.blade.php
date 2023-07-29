@extends('layouts.app')
@section('content')

<div class="container">
    <div class="main_container">
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                <form method="POST" action="{{ route('student_add.store') }}">
                    @csrf
                    <h1>Student Add</h1>

                    <div>
                        <select name="user_status" id="" class="form-control  @error('user_status') is-invalid @enderror">
                          <option value="" disabled selected name="user_status">Choose Type</option>
                          <option value="3">Student</option>
                          
                          
                        </select>
                        @error('user_status')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div><br>

                    <div>
                        <input class="form-control" type="text" name="s_id" placeholder="Student ID" autocomplete="username" />
                    </div>

                    <div>
                        <input class="form-control" type="text" name="name" placeholder="Full Name" autocomplete="username" />
                    </div>

                    <div>
                        <input class="form-control" type="text" name="user_name" placeholder="Username" required autocomplete="username" />
                    </div>

                    <div>
                        <input id="email" class="form-control" type="email" name="email" placeholder="E-mail" required autocomplete="username" />
                    </div>
                    <div>

                        <input id="stu_phone" class="form-control" type="number" name="phone" placeholder="Phone" autocomplete="username" /><br>
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
