@extends('layouts.app')
@section('content')

<div class="container">
    <div class="main_container">
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                <form method="POST" action="{{ route('teacher.store') }}">
                    @csrf
                    <h1>Teacher Account</h1>

                    <div>
                        <select name="department_id" id="" class="form-control">
                            <option value="" disabled selected name="department_id">Choose Department</option>
                            @foreach ($department as $row)
                                <option value="{{ $row->id }}" >{{ $row->department }}</option>
                            @endforeach
                        </select>
                    </div><br>

                    <div>
                        <select name="user_status" id="" class="form-control  @error('user_status') is-invalid @enderror">
                          <option value="" disabled selected name="user_status">Choose Type</option>
                          <option value="3" disabled>Student</option>
                          <option value="2" >Teacher</option>
                          
                        </select>
                        @error('user_status')
                              <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div><br>

                    <div>
                        <input class="form-control" type="text" name="name" value="{{old('name')}}" placeholder="Full Name" autocomplete="stu_name" />
                    </div>

                    <div>
                        <input class="form-control" type="text" name="user_name" value="{{old('user_name')}}" placeholder="Username" required autocomplete="username" />
                    </div>

                    <div>
                        <input id="email" class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="E-mail" required autocomplete="username" />
                    </div>
                    <div>

                        <input id="stu_phone" class="form-control" type="number" name="phone" value="{{old('phone')}}" placeholder="Phone" autocomplete="username" /><br>
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

                    <div class="clearfix"></div>

                    <div class="separator">
                    <p class="change_link">Already a member ?
                        <a href="{{ route('login') }}" class="to_register"> Log in </a>
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
            </div>
            </div>
            </div>
   
    
@endsection
