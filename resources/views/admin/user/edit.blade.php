@extends('layouts.app')
@section('content')
<div class="right_col" role="main" >
    
<div class="container">
    <div class="main_container">
        <div class="login_wrapper">
            
                <section class="login_content">
                <form method="POST" action="{{ route('user.update',$edit->id) }}">
                    @csrf
                    <h1>Update User Account</h1>

                    <div>
                        <input class="form-control" type="text" name="user_name" value="{{ $edit->user_name }}" />
                    </div>

                    <div>
                        <input class="form-control" type="text" name="name" value="{{ $edit->name }}" />
                    </div>

                    <div>
                        <input id="email" class="form-control" type="email" name="email" value="{{ $edit->email }}" />
                    </div>

                    <div>
                    {{-- <a class="btn btn-default submit" href="index.html">Submit</a> --}}
                    <button type="submit" class="btn btn-primary btn-block">Update</button>
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
