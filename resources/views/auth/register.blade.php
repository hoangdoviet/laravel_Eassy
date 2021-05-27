
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
				<div class="panel-heading">
					<h4 class="panel-title">{{__('language.register')}}</h4>
				</div>
				<div class="panel-body">
				<form role="form" action="{{'register' }}" method="POST">
					{!! csrf_field()!!}
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user">{{__('language.name')}}</span>
								<input class="form-control" placeholder="{{__('language.name')}}" name="name" type="text" value="{{ old('name') }}" autofocus>
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope">{{__('language.email')}}</span>
								<input class="form-control" placeholder="{{__('language.email')}}" name="email" type="text" value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock">{{__('language.password')}}</span>
								<input class="form-control" placeholder="{{__('language.password')}}" name="password" type="password">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock">{{__('language.confirmpassword')}}</span>
								<input class="form-control" placeholder="{{__('language.confirmpassword')}}" name="password_confirmation" type="password">
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-lg btn-primary btn-block">{{__('language.register')}}</button>
						</div>
						<center><a href="{{ 'login' }}">{{__('language.return')}}  {{__('language.login')}}</a></center>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection