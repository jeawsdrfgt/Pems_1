@extends('layouts.Submissionlayout')

@section('submissioncontent')
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
        <h1>Submit a request</h1>
       <section>
        <div>
            <h2>Fill out the requisition form below</h2>
            <form action='/procurement/makesubmission' method='POST'>
                @csrf
                <h3>Name</h3>
                <input type="text" placeholder="Your Name" name="dept_name" required>
                <h3>ID</h3>
                <input type="text" placeholder="Employee ID" name="emp_no" required>
                <h3>Department</h3>
                <input type="text" placeholder="Department Name" name="dept_name" required>
                <h3>Item Name</h3>
                <input type="text" placeholder="Item Name" name="item_name" required>
                <h3>Quantity</h3>
                <input type="text" placeholder="Quantity" name="quantity" required>
                <h3>Budget</h3>
                <input type="text" placeholder="Budget Estimate" name="budget" required>
                <h3>Desctiption</h3>
                <input type="text" placeholder="Description" name="description" required>
    
                <div class="container-snd">
                    <input type="submit" value="Submit">
                </div>
        </div>
        </form>


       </section>

    </main>