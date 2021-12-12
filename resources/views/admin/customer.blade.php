@extends('layouts.adminpage')

@section('admincontent')
    <div class="container">

        <div class="row">
            <h1>Customer</h1>
        </div>

        <div class="row">
            <a href="/add-customer">Add new Customer</a>
        </div>

        <table class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
            </tr>
            @forelse($users as $user)
            <tr>
                <td>{{$user->id }}</td>
                <td>{{$user->name }}</td>
                <td>{{$user->email }}</td>
            </tr>
            @empty
                {{ 'Nothing to display'}}
            @endforelse
        </table>
    </div>

@endsection
