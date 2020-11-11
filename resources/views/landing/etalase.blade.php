@extends('../templates/landing_main')

@section('title', 'Etalase')

@section('page')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="">Exodus Drugstore</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Etalase</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      @foreach($etalase as $data)

      <div class="col-sm-6 col-lg-4 text-center item mb-4">
        <!-- <span class="tag">Sale</span> -->
        <a href="{{url('/etalase/' . $data->drug_id)}}"><img src="{{asset('assets/img/etalase/' . $data->drug_image)}}" alt="" width="200" style="width: 320px; height: 330px;"></a>
        <h3 class="text-dark"><a href="{{url('/etalase/' . $data->drug_id)}}">{{$data->drug_name}}</a></h3>
        <p class="price">Rp.{{$data->drug_price}} </p>
      </div>

      @endforeach
    </div>
  </div>
</div>
<div class="row pt-5 mt-5 text-center">
  <div class="col-md-12">
    <p>
      Copyright &copy;
      <script>
        document.write(new Date().getFullYear());
      </script> All rights reserved | Exodus Drugstore <i aria-hidden="true"></i>
    </p>
  </div>

</div>

@endsection