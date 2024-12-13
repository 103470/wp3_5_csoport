@extends('layouts.app')
 
@section('title', 'Profil beállítások')
 
@section('contents')
<hr />
<form method="POST" enctype="multipart/form-data" action="">
    <div>
        <label class="label">
            <span class="text-base label-text">Név: </span>
        </label>
        <input name="name" type="text" value="{{ auth()->user()->name }}" class="w-full input input-bordered" />
    </div>
    <div>
        <label class="label">
            <span class="text-base label-text">Email-cím: </span>
        </label>
        <input name="email" type="text" value="{{ auth()->user()->email }}" class="w-full input input-bordered" />
    </div>
    <div class="mt-6">
        <button type="submit" class="btn btn-block">Mentés</button>
    </div>
</form>
@endsection