@extends('index')
@section('title', 'Webshop')
@section('content')
    <main class="container">
        <section>
            <div class="row">
                @foreach ($jarmuvek as $jarmu)
                <div class="col-lg-6">
                    <center>
                        <a href="car?id={{$jarmu->id}}" target="blank">
                            <img src={{$jarmu->kep}} style="height:150px;width:300px;" alt="">
                        </a>
                        <div>
                            <p>
                             {{$jarmu->gyarto}}
                             {{$jarmu->tipus}}
                            </p> 
                            <div>
                             {{$jarmu->ar}}  Ft
                        </div>
                    </div>
                    </center>
                    
                </div>
                
                @endforeach
            </div>
        </section>
    </main>
@endsection