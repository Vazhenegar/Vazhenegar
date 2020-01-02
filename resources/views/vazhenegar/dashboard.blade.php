@extends('auth.DashboardLayout.DashboardMasterLayout')
@php
    $role_name=\App\Role::where('id',Auth::user()->Role)->value('RoleName');
@endphp

@section('Role', $role_name)
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if(session('UserFirstName'))
                            <div class="alert alert-success" role="alert">
                                Hello {{ session('UserFirstName') }}
                            </div>
                        @endif

                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in to exclusive dashboard!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
