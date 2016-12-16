@extends('layout.web')

@section('content')        
<div class="row" style="padding-top: 15%">
  <div class="col-sm-4 col-sm-offset-4 col-xs-10 col-xs-offset-1">
    <div class="login-panel panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{{ trans('web_info.system_name') }} {{ trans('web/login.login_text') }}</h3>
        </div>
        <div class="panel-body">
            <form action="{{action('Web\UserController@loginCheck')}}" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <input class="form-control" placeholder="{{ trans('web/login.account_text') }}" name="account" type="text" autofocus="">
                    </div>
                    <div class="form-group">
                        <input class="form-control" placeholder="{{ trans('web/login.password_text') }}" name="password" type="password" value="">
                    </div>
                    <!-- Change this to a button or input when using this as a form -->
                    <button class="btn btn-lg btn-success btn-block" type="submit">{{ trans('web/login.login') }}</button>
                </fieldset>
            </form>
        </div>
    </div>
  </div>
</div>  
@endsection