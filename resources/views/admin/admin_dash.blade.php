@extends('dash')

@section('dash_content')

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper">


    <div class="main-panel">
      <div class="content-wrapper">

        {{-- welcome message start --}}
        <div class="row">
          <div class="col-md-12 grid-margin">
            <div class="row">
              <div class="col-12 col-xl-8 mb-4 mb-xl-0">
                <h3 class="font-weight-bold">Welcome Aamir</h3>
                <h6 class="font-weight-normal mb-0">
                  All systems are running smoothly! You have 
                  <span class="text-primary">3 unread alerts!</span>
                </h6>
              </div>
            </div>
          </div>
        </div>
        {{-- welcome message end --}}

      </div>

      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
            Copyright © 2021. Premium 
            <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> 
            from BootstrapDash. All rights reserved.
          </span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
            Hand-crafted & made with 
            <i class="ti-heart text-danger ml-1"></i>
          </span>
        </div>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
            Distributed by 
            <a href="https://www.themewagon.com/" target="_blank">Themewagon</a>
          </span> 
        </div>
      </footer>

    </div>
  </div>
</div>

@endsection
