@extends('layouts.master')

@section('content')
{{--  
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Create New User</h2>
            </div>
            <div class="pull-right">
                <a href="{{route('users.index')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>


@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input. <br><br>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif


{!! Form::open(['route' => 'users.store' , 'method' =>'POST']) !!}

<div class="row">

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name' , null , ['placeholder' => 'Name' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::email('email' , null , ['placeholder' => 'Email' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password'  , ['placeholder' => 'Password' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password'  , ['placeholder' => 'Confirm Password' , 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]'  , $roles , [] , ['multiple', 'class' => 'form-control']) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <button class="btn btn-primary" type="submit">Submit</button>
    </div>

</div>

{!! Form::close() !!}

<p class="text-center text-primary"><small>Aseel Adnan</small></p>  --}}




<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input. <br><br>
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
          </div>
        </div>
      
      </div>
      <div class="content-body">
          
<section id="basic-input">
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title">Create User</h4>
      </div>
      {!! Form::open(['route' => 'users.store' , 'method' =>'POST']) !!}
      <div class="card-body">
        <div class="row">
          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Name</label>
              {!! Form::text('name' , null , ['placeholder' => 'Name' , 'class' => 'form-control']) !!}
            </div>
          </div>
          
          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Email</label>
              {!! Form::email('email' , null , ['placeholder' => 'Email' , 'class' => 'form-control']) !!}
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Password</label>
              {!! Form::password('password'  , ['placeholder' => 'Password' , 'class' => 'form-control']) !!}
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Confirm Password</label>
              {!! Form::password('confirm-password'  , ['placeholder' => 'Confirm Password' , 'class' => 'form-control']) !!}
            </div>
          </div>

          <div class="col-xl-12 col-md-12 col-12">
            <div class="mb-1">
              <label class="form-label" for="basicInput">Role Selected</label>
              {!! Form::select('roles[]'  , $roles , [] , ['multiple', 'class' => 'form-control']) !!}
            </div>
          </div>

       

            <div class="col-xl-12 col-md-12 col-12">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </div>
          </div>
          
         
         
        
        </div>
      </div>
    </div>
  </div>
</div>
</section>



      </div>
    </div>
  </div>

@endsection
