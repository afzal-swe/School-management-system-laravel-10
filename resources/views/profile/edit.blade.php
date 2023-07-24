@extends('layouts.app')
@section('content')

<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Information</h3>
        </div>
      </div>

      <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_content"><br />

                        <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>

                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    @include('profile.partials.update-profile-information-form')
                                    
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                        </div>


                        <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
  
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    @include('profile.partials.update-password-form')
                                  
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                        </div>

                        <div class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name"></label>
  
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    @include('profile.partials.delete-user-form')
                                  
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection