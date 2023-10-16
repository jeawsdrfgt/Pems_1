@extends('layouts.mainlayout')

@section('dashcontent')
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
                    <h3>{{ Auth::user()->name }}</h3>
                </a>                  
            </div>
        </aside>

        <main>
            <h1>Dashboard</h1>

            <div class="dashboard">
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="board board-body bg-primary text-white mb-3">
                        <label>Quick Statistics</label>
                        <div class="analyse">
                            <div class="sales">
                                <div class="status">
                                    <div class="info">
                                        <h3>Procurement Status</h3>
                                        <h1></h1>
                                    </div>
                                    <div class="progresss">
                                        <svg>
                                            <circle cx="38" cy="38" r="36"></circle>
                                        </svg>
                                        <div class="percentage">
                                            <p>+81%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="visits">
                                <div class="status">
                                    <div class="info">
                                        <h3>Request Results</h3>
                                        <h1></h1>
                                    </div>
                                    <div class="progresss">
                                        <svg>
                                            <circle cx="38" cy="38" r="36"></circle>
                                        </svg>
                                        <div class="percentage">
                                            <p>-48%</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
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

@endsection
