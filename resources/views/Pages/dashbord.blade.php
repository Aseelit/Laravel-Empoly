@extends('layouts.master')

@section('content')
<div class="app-content content">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
      <div class="content-header-left col-md-9 col-12 mb-2">
        <div class="row breadcrumbs-top">
         
        </div>
      </div>
      <div
        class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none"
      >
      
      </div>
    </div>
    <div class="content-body">
      <section class="card-layout">
       
    
        <h6 class="my-3 text-muted">User List</h6>
      
        <div class="row row-cols-1 row-cols-md-3 mb-2">
       
     
          <div class="col" >
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('app-assets/images/profile/user-uploads/user-06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Aseel Adnan</h4>
                <p class="card-text">User Aseel Have Role Admin .</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
         
          <div class="col">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('app-assets/images/profile/user-uploads/user-06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Ahmed Adnan</h4>
                <p class="card-text">User Ahmed Have Role Admin .</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card h-100">
              <img class="card-img-top" src="{{ asset('app-assets/images/profile/user-uploads/user-06.jpg') }}" alt="Card image cap">
              <div class="card-body">
                <h4 class="card-title">Ahmed Adnan</h4>
                <p class="card-text">User Ahmed Have Role Admin .</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
         
        </div>
      </section>
    </div>
  </div>
</div>
  {{-- <!-- END: Content--> --}}
@endsection