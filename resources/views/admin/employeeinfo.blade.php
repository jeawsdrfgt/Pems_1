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
            <div class="user_content">
                <div class="user_info">
                    <section>
                        <h2>Employee Information</h2>
                        <hr>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="board board-body bg-primary text-white mb-3">
                                    <div class="procurement-1">
                                        <div class="sales">
                                            <div class="status">
                                                    <div class="info">
                                                        <?php           
                                                        $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='1'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="visits">
                                            <div class="status">
                                                <div class="info">
                                                    <?php
                                                    $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='2'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="visits">
                                            <div class="status">
                                                <div class="info">
                                                    <?php
                                                    $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='3'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="visits">
                                            <div class="status">
                                                <div class="info">
                                                    <?php
                                                    $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='4'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="visits">
                                            <div class="status">
                                                <div class="info">
                                                    <?php
                                                    $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='5'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="visits">
                                            <div class="status">
                                                <div class="info">
                                                    <?php
                                                    $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='6'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="visits">
                                            <div class="status">
                                                <div class="info">
                                                    <?php
                                                    $conn = new mysqli("localhost","root","","pems");

                                                        if      ($conn->connect_error) {
                                                         die("Connection failed: " . $conn->connect_error);
                                                        }

                                                        $sql = "SELECT id, name FROM users WHERE id='7'";
                                                        $result = $conn->query($sql);

                                                        if ($result->num_rows > 0) {
  
                                                        while($row = $result->fetch_assoc()) {
                                                         echo "<h3>". $row["name"]."</h3>";
                                                        }
                                                        } else {
                                                            echo "0 results";
                                                        }
                                                        $conn->close();
                                                        ?>
                                                </div>
                                                
                                            </div>
                                        </div>
                                       
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </section>
    
                </div>
            
        </main>
    </div>



