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
                <span class="inline-block pr-10">{{trans('vexe.login_account_exits')}}</span>
                <a class="inline-block btn btn-info btn-rounded btn-outline" href="{{ route('register') }}">{{ trans('vexe.register')}}</a>
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
                                        <h3 class="text-center txt-dark mb-10">{{trans('vexe.login')}}</h3>
                                    </div>
                                    <div class="form-wrap">
                                        <form action="{{ route('account.login') }}" method="POST" role="form">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label class="control-label mb-10" for="exampleInputName_1">{{trans('vexe.login_uname')}}</label>
                                                <input type="text" name="username" class="form-control" required="" id="exampleInputName_1" placeholder="{{trans('vexe.login_uname_tip')}}">
                                            </div>
                                            <div class="form-group">
                                                <label class="pull-left control-label mb-10" for="exampleInputpwd_2">{{trans('vexe.register_pass')}}</label>
                                                <input type="password" name="password" class="form-control" required="" id="exampleInputpwd_2" placeholder="{{trans('vexe.register_pass_tip')}}">
                                            </div>
                                            <div class="form-group">
                                                <div class="pr-20 pull-left">
                                                    <input id="checkbox_2" type="checkbox">
                                                    <label for="checkbox_2"> {{trans('vexe.login_keep_pass')}}</label>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="form-group text-center">
                                                <button type="submit" class="btn btn-info btn-rounded">{{trans('vexe.login')}}</button>
                                                <a href="{{route('register')}}" class="pull-right">{{trans('vexe.login_loss_pass')}}</a>
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