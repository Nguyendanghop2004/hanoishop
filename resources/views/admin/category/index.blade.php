@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Danh Mục Sản Phẩm</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Danh Sách Danh Mục Sản Phẩm</h4>
            <div class="card-header-action">
                <a href="{{ route('categoriesAdd') }}" class="btn btn-primary">
                    Tạo Mới
                </a>
            </div>
        </div>

        <div class="card-body">
            <div class="card-header d-flex justify-content-between align-items-center">
                <div class="section-title mt-0"></div>
                <div class="card-header-action">
                    <form class="form-inline" method="GET" action="{{ route('categoriesList') }}">
                        <div class="search-element">
                            <input class="form-control" type="search" placeholder="Tìm kiếm..." aria-label="Search"
                                name="name" value="{{ $search }}" data-width="250">
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
                                <th scope="col">Ảnh Danh Mục</th>
                                <th scope="col">Tên Danh Mục</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Mô Tả</th>
                                <th scope="col">Danh Mục Cha</th> 
                                <th scope="col">Trạng Thái</th>
                                <th scope="col">Hành Động</th>
                            </tr>
                        </thead>
                        <tbody>
                           @if($categories->isEmpty())
                                <tr>
                                    <td colspan="8" class="text-center text-danger">Không có danh mục nào.</td>
                                </tr>
                            @else
                                @foreach ($categories as $index => $cate)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><img src="{{ Storage::url($cate->image_path) }}" alt="Ảnh danh mục" width="100px"></td>
                                        <td>{{ $cate->name }}</td>
                                        <td>{{ $cate->slug }}</td>
                                        <td>{{ $cate->description }}</td>
                                        <td>{{ $cate->parent ? $cate->parent->name : 'Không có' }}</td>
                                        <td>
                                            <span class="{{ $cate->status == 1 ? 'badge badge-success' : 'badge badge-danger' }}">
                                                {{ $cate->status == 1 ? 'hiển thị' : 'không hiển thị' }}
                                            </span>
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-start">
                                                @if(!$cate->parent_id)
                                                    <form action="{{ route('categories.toggleStatus', $cate->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-info">
                                                            @if($cate->status == 1)
                                                                <i class="fas fa-eye" style="color: green;"></i>
                                                            @else
                                                                <i class="fas fa-eye-slash" style="color: red;"></i>
                                                            @endif
                                                        </button>
                                                    </form>
                                                @else
                                                    <form action="{{ route('categories.toggleStatus', $cate->id) }}" method="POST"
                                                        style="display: inline;">
                                                        @csrf
                                                        <button type="submit" class="btn btn-info ml-2">
                                                            @if($cate->status == 1)
                                                                <i class="fas fa-eye" style="color: green;"></i>
                                                            @else
                                                                <i class="fas fa-eye-slash" style="color: red;"></i>
                                                            @endif
                                                        </button>
                                                    </form>
                                                    <a href="{{ route('categories.edit', $cate->id) }}" class="btn btn-warning ml-2">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                    
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card-body mx-auto">
            <div class="buttons">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item {{ $categories->onFirstPage() ? 'disabled' : '' }}">
                            <a class="page-link" href="{{ $categories->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>

                        @foreach ($categories->getUrlRange(1, $categories->lastPage()) as $page => $url)
                            <li class="page-item {{ $page == $categories->currentPage() ? 'active' : '' }}">
                                <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                            </li>
                        @endforeach

                        <li class="page-item {{ $categories->hasMorePages() ? '' : 'disabled' }}">
                            <a class="page-link" href="{{ $categories->nextPageUrl() }}" aria-label="Next">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

<script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
        };

        @if(session('success'))
            toastr.success("{{ session('success') }}");
        @endif

        @if(session('error'))
            toastr.error("{{ session('error') }}");
        @endif
    });

   
</script>
@endsection
