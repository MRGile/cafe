@extends('layouts.app')
@section('title', 'Cafe Kopi')

@section('content')

<div id="app">
    <div id="main">
        <div class="card-body">

            <table class="table table-hover">

                <thead>
                    <tr>
                        <th>Role</th>
                        <th>Dashboard</th>
                        <th>Menu</th>
                        <th>Inventory</th>
                        <th>Sales</th>
                        <th>Reports</th>
                        <th>Settings</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>

                    <tr>
                        <td>Owner</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                Edit Permission
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Administrator</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>✅</td>
                        <td>❌</td>
                        <td>❌</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                Edit Permission
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Cashier</td>
                        <td>✅</td>
                        <td>❌</td>
                        <td>❌</td>
                        <td>✅</td>
                        <td>❌</td>
                        <td>❌</td>
                        <td>
                            <button class="btn btn-primary btn-sm">
                                Edit Permission
                            </button>
                        </td>
                    </tr>

                </tbody>

            </table>

        </div>
    </div>
</div>

@endsection
