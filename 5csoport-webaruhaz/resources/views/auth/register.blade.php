@extends('layouts.layout')
@section('title', 'Regisztráció')
@section('content')
    <div class="container">
        <div class="mt-5">
            @if($errors->any())
                <div class="col-12">
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            @if(session('success'))
                <div class="alert alert-success">php artisan config:clear
                php artisan cache:clear
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <form action="{{route('register.store')}}" method="POST" class="ms-auto me-auto mt-auto">
            @csrf
            <div class="mb-3">
                <label class="form-label">Vezetéknév: </label>
                <input type="text" class="form-control" name="first_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Keresztnév: </label>
                <input type="text" class="form-control" name="last_name">
            </div>
            <div class="mb-3">
                <label class="form-label">Felhasználónév: </label>
                <input type="text" class="form-control" name="username">
            </div>
            <div class="mb-3">
                <label class="form-label">Email cím: </label>
                <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">Jelszó: </label>
                <input type="password" class="form-control" name="password">
            </div>
            <div class="mb-3">
                <label class="form-label">Jelszó megerősítése: </label>
                <input type="password" class="form-control" name="password_confirmation">
            </div>
            <div class="mb-3">
                <label class="form-label">Telefonszám: </label>
                <input type="phone" class="form-control" name="phone">
            </div>
            <div class="mb-3">
                <label class="form-label">Irányítószám: </label>
                <input type="text" class="form-control" name="post_code">
            </div>
            <div class="mb-3">
                <label class="form-label">Település: </label>
                <input type="text" class="form-control" name="city">
            </div>
            <div class="mb-3">
                <label class="form-label">Utca név: </label>
                <input type="text" class="form-control" name="street">
            </div>
            <div class="mb-3">
                <label class="form-label">Házszám: </label>
                <input type="text" class="form-control" name="h_number">
            </div>
            <button type="submit" class="btn btn-primary">Regisztráció</button>
        </form>
    </div>