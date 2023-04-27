@extends('layouts')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-3">
                <div class="card card-body">
                    <p class="text-center">Sana: <strong> {{ $debt->date }} </strong></p>
                    <p>Ismi: <strong> {{ $debtname->name }} </strong></p>
                    <p>Olingan qarz: <strong> {{ $debt->received }} </strong> So'm</p>
                    <p>Berilgan qarz: <strong> {{ $debt->given }} </strong> So'm</p>
                    <p>Qoldi: <strong> {{ $debt->received - $debt->given }} </strong> So'm</p>
                    <p>Izoh: <strong> {{ $debt->comment }} </strong></p>

                    <div class="d-flex justify-content-between">
                        <a href="/" class="btn col-5 btn-warning">Back</a>
                        <a class="btn col-5 btn-primary">Print</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
