@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Product Sizes</h1>
        </div>

        <div>
            <a href="" class="btn btn-primary my-3">Go Back</a>
        </div>
        <div class="row">
            {{-- size --}}
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Create Size</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                        <input type="hidden" name="product_id" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" name="price" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>List All Size By Product </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                    <td>
                                        <div>
                                            <button type="submit" class="btn btn-danger ml-2"><i class="fas fa-trash"
                                                    style="color: #ffffff;"></i></button>
                                            <form style="display: none;" action="" method="post">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="4" class="text-center">No Have Data!</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            {{-- option --}}
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>Create Product Option</h4>
                    </div>
                    <div class="card-body">

                        <form action="" method="POST" enctype="multipart/form-data">
                            @csrf<div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input type="text" name="name" id="" class="form-control">
                                        <input type="hidden" name="product_id" value="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <input type="text" name="price" id="" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>
                        </form>

                    </div>
                </div>
                <div class="card card-primary">
                    <div class="card-header">
                        <h4>List All Option By Product </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td> </td>
                                    <td>
                                        <div>
                                            <button type="submit" class="btn btn-danger ml-2"><i class="fas fa-trash"
                                                    style="color: #ffffff;"></i></button>
                                            <form style="display: none;" action="" method="post">
                                                @csrf
                                                @method('DELETE')

                                            </form>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="4" class="text-center">No Have Data!</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </section>
@endsection
