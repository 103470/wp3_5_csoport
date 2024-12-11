@extends('layouts.layout')
@section('navbar')
<div class="navbar">
    <div class="logo">
        Webshop
    </div>
    <div class="nav-links">
        <a href="/">Főoldal</a>
        <a href="/products">Termékek</a>
        <a href="/about">Rólunk</a>
        <a href="/contact">Kapcsolat</a>
    </div>
    <a href="/cart" class="cart">Kosár</a>
</div>
@endsection


