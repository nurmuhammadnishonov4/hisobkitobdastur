@extends('layouts')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card card-body">
                    <p class="text-center">Sana: <strong> {{$trade->date}} </strong></p>
                    <p>Ismi: <strong> {{$trade->name}} </strong></p>
                    <p>Naqd savdo: <strong> {{$trade->cash}} </strong> $</p>
                    <p>Terminal savdo: <strong> {{$trade->terminal}} </strong> $</p>
                    <p>Jami savdo: <strong> {{$trade->product + $trade->terminal}} </strong> $</p>
                    <p>Kelgan tovar: <strong> {{$trade->product}} </strong> $</p>
                    <p>Kunlik rasxod: <strong> {{$trade->spend}} </strong> $</p>
                    <p>Kassa: <strong>   {{ $trade->cash + $trade->terminal - ($trade->product + $trade->spend) }} </strong> $</p>
                    <p>Izoh: <strong>  {{$trade->comment}} </strong></p>

                    <div class="d-flex justify-content-between">
                        <a href="/" class="btn col-5 btn-warning">Back</a>
                        <a class="btn col-5 btn-primary">Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
