@extends('layouts.viewsubmissionlayout')

@section('viewsubmissioncontent')
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
        <h1>View procurement requests</h1>
       <section>
        <div>
            <table>
                <tr>
                   <td>Name</td>
                   <td>Item</td>
                   <td>Department</td>
                   <td>Quantity</td>
                   <td>Description</td>
                </tr>
                @foreach ($procurements as $procurements)
                <tr>
                   <td>{{$procurements->name}}</td>
                   <td>{{ $procurements->item_name }}</td>
                   <td>{{ $procurements->department_name }}</td>
                   <td>{{ $procurements->quantity }}</td>
                   <td>{{ $procurements->description }}</td>
                </tr>
                @endforeach
             </table>
         <ul>
        
    </ul>
</body>
</html>

        </div>
        </form>


       </section>

    </main>