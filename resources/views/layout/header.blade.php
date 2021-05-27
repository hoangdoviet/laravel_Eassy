<div class="container my-3">
  <div class="d-flex flex-row">
    <div class="col-12 px-0">
      <div class="d-flex flex-row align-items-center">
        <div class="col-1 pl-0">
          <form action="{{route('contact.index')}}" method="get">
            <button class="btn btn-primary rounded-0 font-weight-bold">{{ __('language.home')}} </button>
          </form>
<<<<<<< HEAD
        </div>
        <div class="col-md-4">
          <a href="{!! route('language.change-language', ['en']) !!}">{{ __('language.english') }}</a>
          <a href="{!! route('language.change-language', ['vi']) !!}">{{ __('language.vietnamese') }}</a>
=======
        <?php
$user = Auth::user();
if (Auth::check()) {
    echo Form::open(array('url' => '/logout', 'method' => 'get'));
    echo Form::submit('logout');
    echo Form::close();
} else {
    echo Form::open(array('url' => '/login', 'method' => 'get'));
    echo Form::submit('Login');
    echo Form::close();
    echo Form::open(array('url' => '/register', 'method' => 'get'));
    echo Form::submit('Register');
    echo Form::close();
}
?>


        </div>
        <div class="col-md-4">
          <a href="{!! route('language.change-language', ['en']) !!}" style="<?php if (config('app.locale') == ('en')) {
    echo ('color:red');
}?>">{{ __('language.english') }}</a>
          <a href="{!! route('language.change-language', ['vi']) !!} "style="<?php if (config('app.locale') == ('vi')) {
    echo ('color:red');
}?>">{{ __('language.vietnamese') }}</a>
>>>>>>> 6d99061 (Authentication and Mail)
        </div>

        <form action="{{route('contact.create')}}" method="get">
          <button type="submit" class="btn btn-info text-uppercase font-weight-bold rounded-0">
          {{ __('language.create')}}
          </button>
        </form>
        <div class="col-10">
<<<<<<< HEAD
          <h1 class="text-center font-weight-bold text-uppercase">{{ __('language.employee') }}</h1>
=======

          <h1 class="text-center font-weight-bold text-uppercase">
          <?php
if (Auth::check()) {

    echo __('language.welcome', ['name' => $user->name]);
} else {
    echo 'Laravel Employee';
}

?>
          </h1>
>>>>>>> 6d99061 (Authentication and Mail)
        </div>
        <div class="col-1"></div>
      </div>
    </div>
  </div>
</div>
