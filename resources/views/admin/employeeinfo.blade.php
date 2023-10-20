@extends('layouts.admin.admindashboard')

@section('admincontent')
    <div class="container-1">
        <aside>
            <a class="toggle" href="{{ url('/dashboard') }}">
                <div class="logo">
                    <h2>PEM<span class="danger">Sys</span></h2>
                </div>
            </a>
            <div class="sidebar">
                <a href="/admin/dashboard">
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
                <a href="employees.html">
                    <span class="material-icons-sharp">
                        lock
                    </span>
                    <h3>Site Security</h3>
                </a>
                <a href="/admin/employeeinfo">
                    <span class="material-icons-sharp">
                        account_box
                    </span>
                    <h3>Employee Information</h3>
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
                <a href="/admin/user">
                    <span class="material-icons-sharp">
                        manage_accounts
                    </span>
                    <h3>{{ Auth::user()->name }}</h3>
                </a>
            </div>
        </aside>

        <main>
            
        </main>
    </div>



