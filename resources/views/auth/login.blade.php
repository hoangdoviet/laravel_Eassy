@extends('layout.main')
@section('content')
@component('layout.components.title')
@endcomponent
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ __('language.register') }} {{ __('language.success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
@if ($errors->any())
	<div class="alert alert-danger alert-dismissible" role="alert">
		<ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif
<div class="container">
	<div class="row">
		<div class="col-sm-6 col-md-4 col-md-offset-4">
			<div class="panel panel-default">
				<div class="panel-body">
					<form role="form" action="{{'login' }}" method="POST">
                    {!! csrf_field() !!}
							<div class="row">
								<div class="col-sm-12 col-md-10  col-md-offset-1 ">
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-user">{{ __('language.email') }}</span>
											<input class="form-control" placeholder="{{ __('language.email') }}" name="email" type="text" value="{{ old('email') }}" autofocus>
										</div>
									</div>
									<div class="form-group">
										<div class="input-group">
											<span class="input-group-addon"><i class="glyphicon glyphicon-lock">{{ __('language.password') }}</span>
											<input class="form-control" placeholder="{{__('language.password')}}" name="password" type="password" value="">
										</div>
									</div>
									<div class="form-group">
										<input type="submit" class="btn btn-lg btn-primary btn-block" value="{{__('language.login')}}">
									</div>
									<div class="login-help">
										<a href="{{'register'}}" >{{__('language.register')}}</a> - <a href="#" >{{__('language.forgotpassword')}}</a>
									</div>
								</div>
							</div>

					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection