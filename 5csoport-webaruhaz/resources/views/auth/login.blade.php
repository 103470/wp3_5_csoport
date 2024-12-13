@extends('layouts.layout')
@section('title', 'Bejelentkezés')
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
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <form action="{{route('authenticate')}}" method="POST" class="ms-auto me-auto mt-auto">
            @csrf
            <div class="mb-3">
                <label class="form-label">Felhasználónév: </label>
                <input type="text" class="form-control" name="username" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jelszó: </label>
                <input type="password" class="form-control" name="password" required>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="remember" id="remember">
                <label class="form-check-label" for="remember">Emlékezz rám</label>
            </div>
            <button type="submit" class="btn btn-primary">Bejelentkezés</button>
            <div class="mb-3">
                <a href="/register">Még nincs fiókja? Regisztráljon most!</a>
            </div>
        </form>
    </div>
@endsection