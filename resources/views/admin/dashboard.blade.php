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
                <a href="/admin/procurement">
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
                <a href="/admin/createuser">
                    <span class="material-icons-sharp">
                        groups
                    </span>
                    <h3>Employee Management</h3>
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
            <h1>Dashboard</h1>

            <div class="dashboard">
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="board board-body bg-primary text-white mb-3">
                        <div class="analyse">
                            <div class="sales">
                                <div class="status">
                                    <div class="info">
                                        <h3>Registered Employees</h3>
                                        <h1></h1>
                                    </div>
                                    <div class="progresss">
                                        <div class="percentage">
                                            <?php

                                            $connection = mysqli_connect("localhost","root","","pems");


                                            $query = "SELECT id FROM users ORDER BY id";
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
                                        <h3>Submitted Procurement Requests</h3>
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
                                        <h3>Administrator Procurement Requests</h3>
                                        <h1></h1>
                                    </div>
                                    <div class="progresss">
                                        <div class="percentage">
                                            <?php

                                            $connection = mysqli_connect("localhost","root","","pems");


                                            $query = "SELECT id FROM admin_procurements ORDER BY id";
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
        </main>
    </div>

@endsection


