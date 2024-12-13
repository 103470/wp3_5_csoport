@extends('index')
@section('title', 'Webshop')
@section('content')
    <main class="container">
        <section>
            <div class="row">
                @foreach ($jarmuvek as $jarmu)
                <div class="col-lg-6">
                    <center>
                        <img src={{$jarmu->kep}} style="height:150px;width:300px;" alt="">

                    <div>
                        <p>
                            {{$jarmu->id}}
                            {{$jarmu->gyarto}}
                            {{$jarmu->tipus}}
                            {{$jarmu->motor}}
                            {{$jarmu->uzemanyag}}
                            {{$jarmu->hajtas}}
                            {{$jarmu->karosszeria}}
                            {{$jarmu->ajtokSzama}}
                            {{$jarmu->ar}}
                        </p> 
                    </div>
                    </center>
                    
                </div>
                
                @endforeach
            </div>
        </section>
    </main>
@endsection