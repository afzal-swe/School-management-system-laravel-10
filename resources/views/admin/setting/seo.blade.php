@extends('layouts.app')
@section('content')

            <div class="right_col" role="main">
                <div class="">
                  <div class="page-title">
                    <div class="title_left">
                      <h3>Seo Section</h3>
                    </div>
      
                    <div class="title_right">
                      <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Search for...">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                          </span>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                      <div class="x_panel">
                        <div class="x_title">
                          <h2> SEO</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                          <br />

                          <form class="form-horizontal form-label-left" action="{{ route('seo.update',$seo->id) }}" method="POST">
                            @csrf
                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="meta_author" class="form-control col-md-7 col-xs-12" name="meta_author" value="{{ $seo->meta_author }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="meta_title" class="form-control col-md-7 col-xs-12" name="meta_title" value="{{ $seo->meta_title }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="meta_keyword" class="form-control col-md-7 col-xs-12" name="meta_keyword" value="{{ $seo->meta_keyword }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="meta_description" class="form-control col-md-7 col-xs-12" name="meta_description" value="{{ $seo->meta_description }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="google_analytics" class="form-control col-md-7 col-xs-12" name="google_analytics" value="{{ $seo->google_analytics }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="google_verification" class="form-control col-md-7 col-xs-12" name="google_verification" value="{{ $seo->google_verification }}">
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <input type="text" id="alexa_analytics" class="form-control col-md-7 col-xs-12" name="alexa_analytics" value="{{ $seo->alexa_analytics }}">
                              </div>
                            </div>
                      
                            <div class="ln_solid"></div>
                            <div class="form-group">
                              
                                <button type="submit" class="btn btn-success">Update</button>
                              
                            </div>
      
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                  </div>
                  </div>
      
                  
@endsection