@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sản Phẩm</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Thêm Mới Sản Phẩm</h4>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">

                            <div class="form-group ">
                                <label>Image</label>
                                <div id="image-preview" class="image-preview mx-auto">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" id="image-upload" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="title" class="form-control mx-auto w-75">
                            </div>
                            <div class="form-group">
                                <label>Slug</label>
                                <input type="text" name="title" class="form-control mx-auto w-75" disabled>
                            </div>


                        </div>

                        <div class="col-lg-9 col-md-6 col-12">

                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>price</label>
                                        <input type="text" name="offer" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>discount_price</label>
                                        <input type="text" name="sub_title" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>stock_quantity</label>
                                        <input type="text" name="button_link" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>hot</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-12">
                                    <div class="form-group">
                                        <label>new</label>
                                        <select name="status" class="form-control">
                                            <option value="1">Active</option>
                                            <option value="0">Inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>description</label>
                                <textarea name="" class="form-control summernote " style="width: 50%; height: 100px;" cols="30"
                                    rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Create</button>
                            </div>

                        </div>
                    </div>

                </form>
            </div>
        </div>

    </section>
@endsection
