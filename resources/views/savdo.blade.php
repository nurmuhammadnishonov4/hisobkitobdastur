@extends('layouts')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table mytable table-bordered text-center border-3">
                    <thead>
                        <tr>
                            <th scope="col">Naqd</th>
                            <th scope="col">Terminal</th>
                            <th scope="col">Jami</th>
                            <th scope="col">Tovar</th>
                            <th scope="col">Rasxod</th>
                            <th scope="col">Kassa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="TotalCash">0</td>
                            <td class="TotalTerminal">0</td>
                            <td class="TotalSavdo">0</td>
                            <td class="TotalTovar">0</td>
                            <td class="TotalRasxod">0</td>
                            <td class="TotalKassa">0</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-12 text-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn mybtn btn-warning" data-bs-toggle="modal"
                    data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus-circle"></i> Savdo qo'shish
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Savdo qo'shish</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <form action="store" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-6 mb-2">
                                            <label for="date">Sana:</label>
                                            <input type="date" required name="date" id="date"
                                                class="form-control">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="name">Ismingiz:</label>
                                            <input type="text" required name="name" id="name"
                                                class="form-control" placeholder="Ismingiz">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="price">Naqd savdo:</label>
                                            <input type="number" name="cash" id="price" class="form-control"
                                                placeholder="Naqd savdo">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="terminal">Terminal savdo:</label>
                                            <input type="number" required name="terminal" id="terminal"
                                                class="form-control" placeholder="Terminal savdo">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="product">Kelgan tovar:</label>
                                            <input type="number" required name="product" id="product"
                                                class="form-control" placeholder="Kelgan tovar">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="buy">Kunlik rasxod:</label>
                                            <input type="number" required name="spend" id="buy"
                                                class="form-control" placeholder="Rasxod bo'ldimi? (kiriting)">
                                        </div>
                                        <div class="col-12 mb-2">
                                            <label for="exampleFormControlTextarea1">Izoh</label>
                                            <textarea name="comment" required class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Submit</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-12">
                <table class="table mytable table-bordered text-center border-3">
                    <thead>
                        <tr>
                            <th scope="col">№</th>
                            <th scope="col">Sanasi</th>
                            <th scope="col">Naqd savdo</th>
                            <th scope="col">Terminal savdo</th>
                            <th scope="col">Kunlik savdo</th>
                            <th scope="col">Kelgan tovar</th>
                            <th scope="col">Kunlik rasxod</th>
                            <th scope="col">Kassa</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trades as $trade)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $trade->date }}</td>
                                <td class="cash">{{ $trade->cash }}</td>
                                <td class="terminal">{{ $trade->terminal }}</td>
                                <td class="savdo">{{ $trade->cash + $trade->terminal }}</td>
                                <td class="tovar">{{ $trade->product }}</td>
                                <td class="rasxod">{{ $trade->spend }}</td>
                                <td class="kassa">
                                    {{ $trade->cash + $trade->terminal - ($trade->product + $trade->spend) }}</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-list"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{ route('show', $trade->id) }}"><button class="dropdown-item"
                                                        type="button"><i class="bi col-12 btn btn-success bi-eye-fill">
                                                            Show</i></button></a></li>
                                            <li><a href="{{ route('edit', $trade->id) }}"><button class="dropdown-item"
                                                        type="button"><i
                                                            class="bi col-12 btn btn-warning bi-pencil-square"> Edit
                                                        </i></button></a></li>
                                            <li>
                                                <form action="destroy/{{ $trade->id }}" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                    <button class="dropdown-item" type="submit"><i
                                                            class="bi col-12 btn btn-danger bi-trash"> Delete
                                                        </i></button>
                                                </form>
                                            </li>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
