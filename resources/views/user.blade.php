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
            <a href="procurement.html">
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
            <a href="myacc.html">
                <span class="material-icons-sharp">
                    manage_accounts
                </span>
                <h3>My Account</h3>
            </a>
        </div>
    </aside>

    <main>
        <h1>{{ Auth::user()->name }}</h1>

        <div class="dashboard">
        </div>


