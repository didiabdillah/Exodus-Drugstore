@extends('../templates/landing_main')

@section('title', 'Exodus Drugstore')

@section('page')
<div class="site-blocks-cover" style="background-image: url('{{ URL::asset('assets/img/hero_1.jpg') }}');">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 mx-auto order-lg-2 align-self-center">
        <div class="site-block-cover-content text-center">
          <h1>Welcome to Exodus Drugstore</h1>
          <p>
            <a href="" class="btn btn-primary px-5 py-3">Shop Now</a>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection