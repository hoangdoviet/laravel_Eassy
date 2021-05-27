@extends('layout.main')
@section('content')
@component('layout.components.title')
@endcomponent
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
<<<<<<< HEAD
		<strong>{{ Session::get('success') }}</strong>
=======
		<strong>{{ __('language.delete') }} {{ __('language.success') }}</strong>
>>>>>>> 6d99061 (Authentication and Mail)

	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
<<<<<<< HEAD
		<strong>{{ Session::get('error') }}</strong>
=======
		<strong>{{ __('language.delete') }} {{ __('language.fail') }}</strong>
>>>>>>> 6d99061 (Authentication and Mail)
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>

		</button>
	</div>
@endif

<div class="container mt-3">
  <div class="row">
    <div class="col-12">
      <table class="table table-hover table-bordered">
        <thead>
          <tr class="text-center">
            <th scope="col" class="">#</th>
            <th scope="col" class="">{{ __('language.name') }}</th>
            <th scope="col" class="">{{ __('language.address') }}</th>
            <th scope="col" class="">{{ __('language.email') }}</th>
            <th scope="col" class="">{{ __('language.content') }}</th>
<<<<<<< HEAD
=======
            <th scope="col" class="">{{ __('language.created_by') }}</th>
>>>>>>> 6d99061 (Authentication and Mail)
          </tr>
        </thead>
        <tbody>
          @foreach($contact as $contact1)
          <tr class="text-center">
            <th scope="row">{{$contact1->id}}</th>
            <td>{{$contact1->name}}</td>
            <td>{{$contact1->address}}</td>
            <td>{{$contact1->email}}</td>
            <td>{{$contact1->content}}</td>
<<<<<<< HEAD
=======
            <td>{{$contact1->created_by}}</td>

>>>>>>> 6d99061 (Authentication and Mail)
            <td class="d-flex align-items-center justify-content-around">

              <form action="{{route('contact.edit',$contact1->id)}}" method="get">
                <button class="btn btn-sm btn-warning rounded-0">
                {{ __('language.update') }}
                </button>
              </form>
<<<<<<< HEAD
              <form action="{{route('contact.destroy',$contact1->id)}}" method="post">
=======
              <form action="{{route('delete',$contact1->id)}}" method="post">
>>>>>>> 6d99061 (Authentication and Mail)
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="_method" value="delete">
                <button class="btn btn-sm btn-danger rounded-0">
                {{ __('language.delete') }}
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <div class="d-flex justify-content-center">{{$contact->links()}}</div>
    </div>
  </div>
</div>
@endsection
