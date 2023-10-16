@extends('layouts.Submissionlayout')

@section('submissioncontent')
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
        <h1>Requisition form</h1>
       <section>
        <form action='' method='POST'>
            @csrf
            <input type="text" placeholder="Item Name" name="item_name" required>
            <input type="text" placeholder="Quantity" name="quantity" required>
            <input type="text" placeholder="Budget Estimate" name="budget" required>
            <input type="text" placeholder="Description" name="description" required>

            <div class="container-snd">
                <input type="submit" value="Subscribe">
            </div>
        </form>

       </section>

    </main>