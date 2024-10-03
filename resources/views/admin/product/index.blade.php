@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Slider</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Danh Sách Slider</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-primary">
                        Tạo Mới
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <div class="section-title mt-0">
                    </div>
                    <div class="card-header-action">
                        <form class="form-inline">
                            <div class="search-element">
                                <input class="form-control" type="search" placeholder="Search" aria-label="Search"
                                    data-width="250">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Image</th>
                                    <th scope="col">category</th>
                                    <th scope="col">description</th>
                                    <th scope="col">price</th>
                                    <th scope="col">discount_price</th>
                                    <th scope="col">stock_quantity</th>
                                    <th scope="col">Status</th> {{--  san pham ban chay san pham moi tao duoi status --}}
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row"></th>
                                    <td>asdasdasd</td>
                                    <td><img src="" alt="" width="100px"></td>
                                    <td>33</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <span class="badge badge-success">Active</span>
                                        <a href="#" class="badge badge-primary">SP moi</a>
                                        <a href="#" class="badge badge-secondary">Ban chay</a>
                                    </td>

                                    <td scope="row">
                                        <div class="d-flex justify-content-start">
                                            <div> <a href="" class="btn btn-warning"><i class="fas fa-edit"
                                                        style="color: #ffffff;"></i></a></div>
                                            <div>
                                                <button type="submit" class="btn btn-danger ml-2"><i class="fas fa-trash"
                                                        style="color: #ffffff;"></i></button>
                                                <form style="display: none;" action="" method="post">
                                                    @csrf
                                                    @method('DELETE')

                                                </form>
                                            </div>
                                            <div class="btn-group mb-2 ml-2">
                                                <button class="btn btn-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                               setting
                                                </button>
                                                <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                                                  <a class="dropdown-item" href="#">ảnh phụ</a>
                                                  <a class="dropdown-item" href="#">Biến thể</a>
                                                </div>
                                              </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="card-body mx-auto">
                <div class="buttons ">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
