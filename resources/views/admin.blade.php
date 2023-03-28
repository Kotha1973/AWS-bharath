@extends('layout')

@section('content')
<div class="bg-primary text-light p-3 d-flex justify-content-between">
    <h2 style="padding: 0;margin: 0;">ADMIN</h2>
    <button type="button" class="btn btn-outline-light">LOG OUT</button>
</div>
<div class="p-5">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-rm-tab" data-bs-toggle="pill" data-bs-target="#pills-rm"
                type="button" role="tab" aria-controls="pills-rm" aria-selected="true">RMs</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-client-tab" data-bs-toggle="pill" data-bs-target="#pills-client"
                type="button" role="tab" aria-controls="pills-client" aria-selected="false">Clients</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-idea-tab" data-bs-toggle="pill" data-bs-target="#pills-idea"
                type="button" role="tab" aria-controls="pills-idea" aria-selected="false">Ideas</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-rm" role="tabpanel" aria-labelledby="pills-rm-tab">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>RM 1</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>RM 2</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>RM 3</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#rm">CREATE
                RM</button>
            <div class="modal fade" id="rm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">CREATE RM</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-client" role="tabpanel" aria-labelledby="pills-client-tab">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>CLIENT 1</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>CLIENT 2</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>CLIENT 3</td>
                        <td>01.01.2023</td>
                        <td><button type="button" class="btn btn-danger">DELETE</button></td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#client">CREATE
                CLIENT</button>
            <div class="modal fade" id="client" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">CREATE CLIENT</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-idea" role="tabpanel" aria-labelledby="pills-idea-tab">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Registration Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>IDEA 1</td>
                        <td>01.01.2023</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-warning">UPDATE</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>IDEA 2</td>
                        <td>01.01.2023</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-warning">UPDATE</button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>IDEA 3</td>
                        <td>01.01.2023</td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                <button type="button" class="btn btn-danger">DELETE</button>
                                <button type="button" class="btn btn-warning">UPDATE</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-success w-100" data-bs-toggle="modal" data-bs-target="#idea">CREATE
                IDEA</button>
            <div class="modal fade" id="idea" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">CREATE IDEA</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="mb-3">
                                <label for="exampleInputName1" class="form-label">Name</label>
                                <input type="text" class="form-control" id="exampleInputName1"
                                    aria-describedby="nameHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CLOSE</button>
                            <button type="button" class="btn btn-primary">CREATE</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection