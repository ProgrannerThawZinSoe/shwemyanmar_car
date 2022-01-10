@extends('compoent.main')

@section('content')
@if ( auth()->user()->role == 0)
<div class="container" style="margin-top:40px">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <div class="card text-center">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                    <a class="nav-link " href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/order">Orders</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/setting">Setting</a>
                </li>
                </ul>
            </div>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endif
@if ( auth()->user()->role == 1)
@php
        header("Location: " . URL::to('/admin/dashboard'), true, 302);
        exit();
    @endphp
@endif
@endsection
