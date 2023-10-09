@extends('layouts.userlayout')

@section('usercontent')
<div class="container-1">
    <aside>
        <a class="toggle" href="{{ url('/') }}">
            <div class="logo">
                <h2>PEM<span class="danger">Sys</span></h2>
            </div>
        </a>
        <div class="sidebar">
            <a href="/dashboard">
                <span class="material-icons-sharp">
                    space_dashboard
                </span>
                <h3>Dashboard</h3>
            </a>
            <a href="/procurement">
                <span class="material-icons-sharp">
                    inventory
                </span>
                <h3>Procurement</h3>
            </a>
            <a href="notice.html">
                <span class="material-icons-sharp">
                    notifications
                </span>
                <h3>Notifications</h3>
            </a>                
            <a href="employees.html">
                <span class="material-icons-sharp">
                    groups
                </span>
                <h3>Employees</h3>
            </a>
            <a href="/user">
                <span class="material-icons-sharp">
                    manage_accounts
                </span>
                <h3>My Account</h3>
            </a>
        </div>
    </aside>

    <main>
        <h1>Hello {{ Auth::user()->name }}</h1>

        <div class="user_content">
            <div class="user_info">
                <section>
                    <h2>Account Information</h2>
                    <hr>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="board board-body bg-primary text-white mb-3">
                                <div class="procurement-1">
                                    <div class="sales">
                                        <div class="status">
                                                <div class="info">
                                                    <h3>User Details</h3>
                                                </div>
                                        </div>
                                    </div>
                                    <div class="visits">
                                        <div class="status">
                                            <div class="info">
                                                <h3>Contact Information</h3>
                                                <h1></h1>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="visits">
                                        <div class="status">
                                            <div class="info">
                                                <h2>Change your account password</h2>                                           
                                                <form action="{{ route('update-password') }}" method="POST">
                                                    @csrf
                                                    <div class="card-body">
                                                        @if (session('status'))
                                                            <div class="alert alert-success" role="alert">
                                                                {{ session('status') }}
                                                            </div>
                                                        @elseif (session('error'))
                                                            <div class="alert alert-danger" role="alert">
                                                                {{ session('error') }}
                                                            </div>
                                                        @endif
                            
                                                        <div class="mb-3">
                                                            <label for="oldPasswordInput" class="form-label">Old Password</label>
                                                            <input name="old_password" type="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                                                placeholder="Old Password">
                                                            @error('old_password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="newPasswordInput" class="form-label">New Password</label>
                                                            <input name="new_password" type="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                                                placeholder="New Password">
                                                            @error('new_password')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                                            <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                                                placeholder="Confirm New Password">
                                                        </div>
                            
                                                    </div>
                            
                                                    <div class="container-snd">
                                                        <input type="submit" value="Change Password">
                                                    </div>
                            
                                                </form>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1>Title</h1>
                </section>

            </div>
        </div>


