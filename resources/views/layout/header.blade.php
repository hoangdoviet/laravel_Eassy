<div class="container my-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-1 pl-0">
          <form action="{{route('contact.index')}}" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold">{{ __('language.home')}} </button>
          </form>
        </div>
        <div class="col-md-4">
          <a href="{!! route('language.change-language', ['en']) !!}">{{ __('language.english') }}</a>
          <a href="{!! route('language.change-language', ['vi']) !!}">{{ __('language.vietnamese') }}</a>
        </div>

        <form action="{{route('contact.create')}}" method="get">
          <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
          {{ __('language.create')}}
          </button>
        </form>
        <div class="col-10">
          <h1 class="text-center font-weight-bold text-uppercase">{{ __('language.employee') }}</h1>
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </div>
</div>
