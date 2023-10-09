@extends('layouts.layout2')

@section('procurecontent')
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
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/user" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                <span class="material-icons-sharp">
                    manage_accounts
                </span>
                {{ Auth::user()->name }}   
            </a>                  
        </div>
    </aside>

    <main>
        <h1>Manage Your Procurement Requests</h1>

        <div class="dashboard">
        </div>

        <div class="row">
            <div class="col-md-3">
                <div class="board board-body bg-primary text-white mb-3">
                    <div class="procurement-1">
                        <div class="sales">
                            <div class="status">
                                <a class="toggle" href="{{ url('/procurement/makesubmission') }}">
                                    <div class="info">
                                        <h3><u>Make a submission</u></h3>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="visits">
                            <div class="status">
                                <div class="info">
                                    <h3>View submission requests</h3>
                                    <h1></h1>
                                </div>
                                
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <h1>Title</h1>
    </main>

    <div class="right-section">
        <div class="nav">
            <button id="menu-btn">
                <span class="material-icons-sharp">
                    menu
                </span>
            </button>
            <div class="dark-mode">
                <span class="material-icons-sharp active">
                    light_mode
                </span>
                <span class="material-icons-sharp">
                    dark_mode
                </span>
            </div>

</div>