@extends('layouts.viewsubmissionlayout')

@section('viewsubmissioncontent')
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
                    <span class="material-icons-sharp">
                        badge
                        </span>
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
            <a href="/dashboard">
                <span class="material-icons-sharp">
                    <span class="material-icons-sharp">
                        dashboard_customize
                        </span>
                    </span>
                <h3>User Dashboard</h3>
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
                @foreach ($admin_procurements as $admin_procurements)
                <tr>
                   <td>{{$admin_procurements->name}}</td>
                   <td>{{ $admin_procurements->item_name }}</td>
                   <td>{{ $admin_procurements->department_name }}</td>
                   <td>{{ $admin_procurements->quantity }}</td>
                   <td>{{ $admin_procurements->description }}</td>
                </tr>
                @endforeach
             </table>
        </div>
    </section>
</body>
</html>

        </div>
        </form>


       </section>

    </main>