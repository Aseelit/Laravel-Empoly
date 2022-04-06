@extends('layouts.master')
@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row">
        <div class="content-header-left col-md-9 col-12 mb-2">
          <div class="row breadcrumbs-top">
          
          </div>
        </div>
       
      </div>
      <div class="content-body">
    

<div class="row" id="table-small">
<div class="col-12">
  <div class="card">
    <div class="card-header">
      <h4 class="card-title">User List</h4>
    </div>
    <div class="card-body">
     
    </div>
    <div class="table-responsive">
      <table class="table table-sm">
        <thead>
          <tr>
            <th>Name User</th>
            <th>Email</th>
            <th>Role</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach($data as $key => $user)
          <tr>
            <td>
              <span class="fw-bold">{{ $user->name }}</span>
            </td>
            <td>{{ $user->email }}</td>
           
            <td>
                @if(!empty($user->getRoleNames()))
                @foreach($user->getRoleNames() as $v)
                    <span class="badge rounded-pill badge-light-primary me-1">
                        {{$v}}
                    </span>
                @endforeach
            @endif
            </td>
            <td>
                    @can('user-edit')
                <a href="{{route('users.edit' , $user->id)}}" class="btn btn-icon btn-icon rounded-circle btn-warning waves-effect waves-float waves-light">
                    <i data-feather='edit'></i>
                </a>
                @endcan
                @can('user-delete')
                {!! Form::open(['method' => 'DELETE' , 'route' => ['users.destroy' , $user->id] , 'style' => 'display:inline']) !!}
                {!! Form::submit('DELETE' , ['class' => 'btn btn-flat-danger waves-effect']) !!}
                {!! Form::close() !!}
                @endcan
            </td>
          </tr>
       @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
</div>




      </div>
    </div>
  </div>
@endsection