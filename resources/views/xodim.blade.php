@extends('layouts')
@section('content')

 

    <div class="container mt-3">
        <div class="row">

            <div class="col-6 text-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="bi bi-plus-circle"></i> Xodim qo'shish
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
                    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Xodim ismini kiriting</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-12 mb-2">
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-success">Save</button>
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
            <div class="col-6 text-center">
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#qarz">
                    <i class="bi bi-plus-circle"></i> Ish haqi qo'shish
                </button>

                <!-- Modal -->
                <div class="modal fade" id="qarz" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Ish haqi qo'shish</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body text-start">
                                <form action="" method="post">
                                    <div class="row">
                                        <div class="col-6 mb-2">
                                            <label for="date">Sana:</label>
                                            <input type="date" id="date" class="form-control">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="name">Kimga yozamiz:</label>
                                            <select class="form-select" name="" id="name">
                                                <option value="">Elbek</option>
                                                <option value="">Nurmuhammad</option>
                                                <option value="">Muhammadjon</option>
                                            </select>
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="price">Umumiy oylik:</label>
                                            <input type="text" id="price" class="form-control" placeholder="Naqd savdo">
                                        </div>
                                        <div class="col-6 mb-2">
                                            <label for="terminal">Berilgan oylik:</label>
                                            <input type="text" id="terminal" class="form-control"
                                                placeholder="Terminal savdo">
                                        </div>

                                        <div class="col-12 mb-2">
                                            <label for="exampleFormControlTextarea1">Izoh</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1"
                                                rows="3"></textarea>
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
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item">Islom</li>
                    <li class="list-group-item active">Elbek</li>
                    <li class="list-group-item">Mustafo</li>
                    <li class="list-group-item">Samandar</li>
                    <li class="list-group-item">Muhammadjon</li>
                </ul>
            </div>
            <div class="col-9">
                <div class="col-12">
                    <table class="table mytable table-bordered text-center border-3">
                        <thead>
                            <tr>
                                <th scope="col">Summasi</th>
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
                                <th scope="col">Summa</th>
                                <th scope="col">Berildi</th>
                                <th scope="col">Qoldi</th>
                                <th scope="col">Izoh</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>0</td>
                                <td>
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-secondary dropdown-toggle" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="bi bi-list"></i>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="show.html"><button class="dropdown-item" type="button"><i
                                                            class="bi col-12 btn btn-success bi-eye-fill">
                                                            show</i></button></a></li>
                                            <li><a href="#"><button class="dropdown-item" type="button"><i
                                                            class="bi col-12 btn btn-warning bi-pencil-square"> edit
                                                        </i></button></a></li>
                                            <li><a href="#"><button class="dropdown-item" type="button"><i
                                                            class="bi col-12 btn btn-danger bi-trash"> delete
                                                        </i></button></a></li>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@endsection