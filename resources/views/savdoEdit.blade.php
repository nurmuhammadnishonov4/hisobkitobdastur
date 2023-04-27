@extends('layouts')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <form action="{{route('update', $trade->id)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6 mb-2">
                            <label for="date">Sana:</label>
                            <input type="date" required name="date" value="{{ $trade->date }}" id="date"
                                class="form-control">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="name">Ismingiz:</label>
                            <input type="text" required name="name" value="{{ $trade->name }}" id="name"
                                class="form-control" placeholder="Ismingiz">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="price">Naqd savdo:</label>
                            <input type="number" name="cash" value="{{ $trade->cash }}" id="price"
                                class="form-control" placeholder="Naqd savdo">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="terminal">Terminal savdo:</label>
                            <input type="number" required name="terminal" value="{{ $trade->terminal }}" id="terminal"
                                class="form-control" placeholder="Terminal savdo">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="product">Kelgan tovar:</label>
                            <input type="number" required name="product" value="{{ $trade->product }}" id="product"
                                class="form-control" placeholder="Kelgan tovar">
                        </div>
                        <div class="col-6 mb-2">
                            <label for="buy">Kunlik rasxod:</label>
                            <input type="number" required name="spend" value="{{ $trade->spend }}" id="buy"
                                class="form-control" placeholder="Rasxod bo'ldimi? (kiriting)">
                        </div>
                        <div class="col-12 mb-2">
                            <label for="exampleFormControlTextarea1">Izoh</label>
                            <textarea name="comment" required class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $trade->comment }}</textarea>
                        </div>
                        <div class="col-6">
                             <button type="submit" class="btn btn-success">Update</button>
                            <a href="/"><button type="button" class="btn btn-warning"
                                    data-bs-dismiss="modal">Close</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
