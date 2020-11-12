@extends('../templates/landing_main')

@section('title', 'Detail Produk')

@section('page')
<div class="bg-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="">Exodus Drugstore</a><span class="mx-2 mb-0">/</span><a href="">Etalase</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"></strong></div>
    </div>
  </div>
</div>

<div class="site-section">
  <div class="container">
    <div class="row">
      <div class="col-md-5 mr-auto">
        <div class="border text-center">
          <img src="{{URL::asset('assets/img/etalase/' . $etalase->drug_image)}}" alt="Image" class="img-fluid p-5">
        </div>
      </div>
      <div class="col-md-6">
        <h2 class="text-black">{{$etalase->drug_name}}</h2>
        <p>{{$etalase->drug_description}}</p>


        <h5>Stock : {{$etalase->drug_stock}}</h5>

        <p>Rp. {{$etalase->drug_price}}</p>

        <form action="" method="POST">
          <div class="mb-5">
            <div class="input-group mb-3" style="max-width: 220px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="number" name="qty" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1" min="0" max="">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

          </div>
          <p><button type="submit" class="buy-now btn btn-sm height-auto px-4 py-3 btn-primary"> Add to Cart </button></p>
        </form>
        <div class="mt-5">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">

            </div>

          </div>
        </div>


      </div>
    </div>
  </div>
</div>
<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <p>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script> All rights reserved | Exodus Drugstore <i aria-hidden="true"></i>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>

    </div>
  </div>
</footer>
</div>

@endsection