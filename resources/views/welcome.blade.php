@extends('compoent.main')
@section('title','Shwe Myanmar Car Showroom')
@section('content')
<!-- Hero Section -->
<div class="jumbotron" id="hero">
  <h1 class="display-4">Weclome From Shwe Myanmar Car Showroom!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4 hero-hr">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/cars" role="button"> See Car </a>
  </p>
</div>

<!-- featured products --> 
<div class="container" style="margin-bottom:40px">
    <h3 class="text-center" style="margin-bottom: 30px;">Featured Products</h3>
    <div class="card-columns">
        <div class="col-lg-4 col-md-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car1.jpg')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Pro Box </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car2.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Track Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Banner 2 -->
<div class="container">
    <div class="row">


        <div class="col-lg-6 col-md-6" >
            <div class="jumbotron" id="banner-one" style="display: inline-block;">
                <h3 class="display-4"> Buy Car </h3>
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/cars" role="button"> Buy The Car </a>
                </p>
            </div>
        </div>

        <div class="col-lg-6 col-md-6">
            <div class="jumbotron"  id="banner-two" style="display: inline-block;">
                <h3 class="display-4"> Sell Car </h3>
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="/sell/car" role="button"> Sell The Car </a>
                </p>
            </div>
        </div>

        </div>
</div>

<!-- Sell All Car -->
<div class="container" style="margin-bottom:40px">
    <h3 class="text-center" style="margin-bottom: 30px;"> Best For You </h3>
    <div class="card-columns">
        <div class="col-lg-3 col-md-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car1.jpg')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Pro Box </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car2.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Track Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-sm-12">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top mx-auto d-block" src="{{ URL:: asset('images/template/car3.png')  }}" alt="Card image cap" style="width: 200px; height: 150px;padding:0 auto">
                <div class="card-body">
                    <h5 class="card-title"> Bus Car </h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary"> Detail </a>
                </div>
            </div>
        </div>
       
    </div>
   
</div>

<div class="container" style="margin-bottom: 40px;">
  <div class="row">
    <div class="col text-center">
      <button class="btn btn-primary">See All Car </button>
    </div>
  </div>
</div>
@endsection