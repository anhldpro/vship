@extends('layouts.app')

@section('content')

    <div class="wrapper pa-0">
        <header class="sp-header">
            <div class="sp-logo-wrap pull-left">
                <a href="/">
                    <img class="brand-img" src="{{url('css/doodle/dist/img/logo.png')}}" alt="brand"/>
                    <span class="brand-text">vShip</span>
                </a>
            </div>
            <div class="form-group mb-0 pull-right">
                <span class="inline-block pr-10">{{trans('vexe.register_account_exits')}}</span>
                <a class="inline-block btn btn-info btn-rounded btn-outline" href="{{ route('login') }}">{{ trans('vexe.login')}}</a>
            </div>
            <div class="clearfix"></div>
        </header>

        <!-- Main Content -->
        <div class="page-wrapper pa-0 ma-0 auth-page">
            <div class="container-fluid">

                <!-- Row -->
                <div class="table-struct full-width full-height">

                    <div class="table-cell vertical-align-middle auth-form-wrap">
                        <div class="auth-form  ml-auto mr-auto no-float">

                            @include('share.errors')
                            @include('share.success')
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <div class="mb-30">
                                        <h3 class="text-center txt-dark mb-10">{{trans('vexe.register_title')}}</h3>
                                        <h6 class="text-center nonecase-font txt-grey">{{trans('vexe.register_input_info')}}</h6>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ route('account.store') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputName_1">{{trans('vexe.register_uname')}}</label>
                                                <input type="text" name="username" class="form-control" required="" id="exampleInputName_1"
                                                       placeholder="{{trans('vexe.register_uname_tip')}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputEmail_2">{{trans('vexe.register_email')}}</label>
                                                <input type="email" name="email" class="form-control" required="" id="exampleInputEmail_2"
                                                       placeholder="{{trans('vexe.register_email_tip')}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">{{trans('vexe.register_pass')}}</label>
                                                <input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2"
                                                       placeholder="{{trans('vexe.register_pass_tip')}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_3">{{trans('vexe.register_cpass')}}</label>
                                                <input type="password" name="c_password" class="form-control" required="" id="exampleInputpwd_3"
                                                       placeholder="{{trans('vexe.register_cpass_tip')}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label">
                                                    <input type="radio" name="acct_type" value="01" checked=""> Chủ hàng
                                                    <br>
                                                </label>

                                                <label class="control-label" data-pg-collapsed>
                                                    <input type="radio" name="acct_type" value="02" checked=""> Chủ xe
                                                    <br>
                                                </label>
                                            </div>
                                            <div class="form-group">
                                                <div class="pr-20 pull-left">
                                                    <input id="checkbox_2" required="" type="checkbox">
                                                    <label for="checkbox_2"> {{trans('vexe.register_agree')}}</label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-info btn-rounded">{{trans('vexe.register')}}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Row -->
            </div>

        </div>
        <!-- /Main Content -->

    </div>
@endsection
