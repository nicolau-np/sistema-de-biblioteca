@extends('layouts.app')
@section('content')
<div class="content-wrapper">
    <div class="page-header">
      <h3 class="page-title">
        <span class="page-title-icon bg-gradient-primary text-white me-2">
          <i class="mdi mdi-home"></i>
        </span> {{ $menu }}
      </h3>
      <nav aria-label="breadcrumb">
        <ul class="breadcrumb">
          <li class="breadcrumb-item active" aria-current="page">
            <span></span>Principal <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
          </li>
        </ul>
      </nav>
    </div>
    <div class="row">
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-danger card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Livros <i class="mdi mdi-chart-line mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">0000</h2>
            <!--<h6 class="card-text">Increased by 5%</h6>-->
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-info card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Leitores <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">6334</h2>
            <!--<h6 class="card-text">Increased by 5%</h6>-->
          </div>
        </div>
      </div>
      <div class="col-md-4 stretch-card grid-margin">
        <div class="card bg-gradient-success card-img-holder text-white">
          <div class="card-body">
            <img src="{{asset('assets/images/dashboard/circle.svg')}}" class="card-img-absolute" alt="circle-image" />
            <h4 class="font-weight-normal mb-3">Pedidos <i class="mdi mdi-diamond mdi-24px float-right"></i>
            </h4>
            <h2 class="mb-5">5741</h2>
            <!--<h6 class="card-text">Increased by 5%</h6>-->
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
