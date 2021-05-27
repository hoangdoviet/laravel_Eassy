@extends('layout.main')
@section('content')
@component('layout.components.title')
create page
@endcomponent
<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
<<<<<<< HEAD
		<strong>{{ Session::get('success') }}</strong>
=======
		<strong>{{ __('language.create') }} {{ Session::get('success') }} {{ __('language.success') }}</strong>
>>>>>>> 6d99061 (Authentication and Mail)
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
<<<<<<< HEAD
		<strong>{{ Session::get('error') }}</strong>
=======
		<strong>{{ __('language.create') }} {{ __('language.fail') }}</strong>
>>>>>>> 6d99061 (Authentication and Mail)

	</div>
@endif
<div class="container mt-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <form action="{{route('contact.store')}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">{{ __('language.name') }}</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="address">{{ __('language.address') }}</label>
          <input type="text" class="form-control rounded-0" id="address" placeholder="Address" name="address">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">{{ __('language.email') }}</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="content">{{ __('language.content') }}</label>
          <input type="text" class="form-control rounded-0" id="content" placeholder="Content" name="content">
        </div>
<<<<<<< HEAD
=======

>>>>>>> 6d99061 (Authentication and Mail)
        <div class="form-group ">
          <button type="submit" class="btn btn-danger text-uppercase rounded-0 font-weight-bold">
          {{ __('language.confirm') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
