@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Admin Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                      <div class="col-md-4 text-center">
                        <p>Create New Employee</p>
                          <a href="{{ url('register') }}"><i class="fa fa-user-plus fa-5x" aria-hidden="true"></i></a>
                      </div>
                      <div class="col-md-4 text-center">
                        <p>Employee Info Management</p>
                        <i class="fa fa-id-card fa-5x" aria-hidden="true"></i>
                      </div>
                      <div class="col-md-4 text-center">
                        <p>Timesheet Management</p>
                        <i class="fa fa-calendar fa-5x" aria-hidden="true"></i>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
