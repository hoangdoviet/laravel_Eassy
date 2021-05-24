@extends('layout.main')
@section('content')
@component('layout.components.title')
update page
@endcomponent
<div class="container mt-3">
  <div class="row">
    <div class="col-12 ">
      <form action="{{route('contact.update',$contact->id)}}" method="post">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <input type="hidden" name="_method" value="put" />
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="name">{{ __('language.name') }}</label>
          <input type="text" class="form-control rounded-0" id="name" placeholder="Name" name="name"
            value="{{$contact->name}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="address">{{ __('language.address') }}</label>
          <input type="text" class="form-control rounded-0" id="address" placeholder="Address" name="address"
            value="{{$contact->address}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="email">{{ __('language.email') }}</label>
          <input type="email" class="form-control rounded-0" id="email" placeholder="Email" name="email"
            value="{{$contact->email}}">
        </div>
        <div class="form-group ">
          <label class="text-uppercase font-weight-bold" for="content">{{ __('language.content') }}</label>
          <input type="text" class="form-control rounded-0" id="content" placeholder="Content" name="content"
            value="{{$contact->content}}">
        </div>
        <div class="form-group ">
          <button type="submit" class="btn btn-warning text-uppercase rounded-0 font-weight-bold">
          {{ __('language.save') }}
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
