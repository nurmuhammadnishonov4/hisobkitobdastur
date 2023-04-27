@extends('Debt.debtlayouts')
@section('debtContent')
    <div class="col-9">
        <div class="col-12">
            <table class="table mytable table-bordered text-center border-3">
                <thead>
                    <tr>
                        <th scope="col">Qarz</th>
                        <th scope="col">Berildi</th>
                        <th scope="col">Qoldi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-12">
            <table class="table mytable table-bordered text-center border-3">
                <thead>
                    <tr>
                        <th scope="col">№</th>
                        <th scope="col">Sanasi</th>
                        <th scope="col">Olindi</th>
                        <th scope="col">Berildi</th>
                        <th scope="col">Qoldi</th>
                        <th scope="col">Izoh</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($debts->debts as $debt)
                        <tr>
                            <td>{{$debt->id}}</td>
                            <td>{{$debt->date}}</td>
                            <td>{{$debt->received}}</td>
                            <td>{{$debt->given}}</td>
                            <td>{{$debt->received - $debt->given}}</td>
                            <td>{{$debt->comment}}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="bi bi-list"></i>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="{{route('DaydebtShow', $debt->id)}}"><button class="dropdown-item" type="button"><i
                                                        class="bi col-12 btn btn-success bi-eye-fill">
                                                        show</i></button></a></li>
                                        <li><a href="#"><button class="dropdown-item" type="button"><i
                                                        class="bi col-12 btn btn-warning bi-pencil-square"> edit
                                                    </i></button></a></li>
                                        <li>
                                            <form action="{{route('DaydebtDelete', $debt->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                <button class="dropdown-item" type="submit"><i
                                                        class="bi col-12 btn btn-danger bi-trash"> Delete
                                                    </i></button>
                                            </form>   
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
@endsection
