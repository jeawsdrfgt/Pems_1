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
                <a href="/employeeinfo">
                    <span class="material-icons-sharp">
                        groups
                    </span>
                    <h3>Employees</h3>
                </a>
                @if (auth()->user()->is_admin)
                <a href="/admin/dashboard">
                    <span class="material-icons-sharp">
                        admin_panel_settings
                        </span>
                    <h3>Admin Dashboard</h3>
                </a>
                @endif
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
                                        <h3>Total Submitted Procurements</h3>
                                        <h1></h1>
                                    </div>
                                    <div class="progresss">
                                        <div class="percentage">
                                            <?php

                                            $connection = mysqli_connect("localhost","root","","pems");


                                            $query = "SELECT id FROM procurements ORDER BY id";
                                            $query_run = mysqli_query($connection, $query);

                                            $row = mysqli_num_rows($query_run);

                                            echo '<h1>'.$row.'</h1>';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="visits">
                                <div class="status">
                                    <div class="info">
                                        <h3>Personally Submitted Requests</h3>
                                        <h1></h1>
                                    </div>
                                    <div class="progresss">
                                       
                                        <div class="percentage">
                                            <?php

                                            $connection = mysqli_connect("localhost","root","","pems");


                                            $query = "SELECT id FROM procurements ORDER BY id ";
                                            $query_run = mysqli_query($connection, $query);

                                            $row = mysqli_num_rows($query_run);

                                            echo '<h1>'.$row.'</h1>';
                                            ?>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
           
        </main>

       

    </div>

@endsection
