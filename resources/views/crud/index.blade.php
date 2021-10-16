@extends('layout')

@section('content')
<div class="w-75 m-auto">


    <div class="row mt-5">
            <div class="col-lg-12 mb-5 gap-5 d-flex gap-2">
                    <h2>Laravel 8 CRUD Example from scratch - ItSolutionStuff.com</h2>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalForm"> Create New Product</button>
            </div>
    </div>
   
    
        <!-- <div class="alert alert-success">
            <p></p>
        </div> -->
    
   
    <table id="crud-item" class="table table-bordered  w-100">
        <thead>
            <tr>
                <th style="width:1%; white-space:nowrap;">Contoh</th>
                <th>Contoh</th>
                <th style="width:1%; white-space:nowrap;">Contoh</th>
            </tr>
        </thead>
        <tbody>
            
            
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <!-- <td class="d-flex gap-4 " >
                    <button class="btn btn-primary">Update</button>
                    <button class="btn btn-danger">Delete</button>
                </td> -->
            </tr>
            
        </tbody>
    </table>
</div>


<!-- Modal Form -->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Bootstrap 5 Modal Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="form-modal">
                    <div class="mb-3">
                        <label class="form-label">Email Address</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" />
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" />
                    </div>
                    
                    <div class="modal-footer d-block">
                        <button type="submit" class="btn btn-warning float-end">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
