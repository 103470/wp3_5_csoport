@extends('layouts.app')
 
@section('title', 'Termékek')
 
@section('contents')
<h1 class="font-bold text-2xl ml-3">Termékleírás</h1>
<hr />
<div class="border-b border-gray-900/10 pb-12">
    <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Megnevezés</label>
            <div class="mt-2">
                {{ $product->name }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Leírás</label>
            <div class="mt-2">
                {{ $product->description }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Ár</label>
            <div class="mt-2">
                {{ $product->price }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Kép</label>
            <div class="mt-2">
                {{ $product->image }}
            </div>
        </div>
        <div class="sm:col-span-4">
            <label class="block text-sm font-medium leading-6 text-gray-900">Létrehozás dátuma</label>
            <div class="mt-2">
                {{ $product->created_at }}
            </div>
        </div>
        </form>
    </div>
</div>
@endsection