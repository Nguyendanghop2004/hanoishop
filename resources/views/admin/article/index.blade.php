@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Bài Viết</h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Danh Sách Bài Viết</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-primary">Thêm Mới</a>
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
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Ảnh bài viết</th>
                                    <th>Ngày xuất bản</th>
                                    <th> Danh mục</th>
                                    <th>Tags</th>
                                    <th>Tác giả</th>
                                    <th>Ảnh đại diện bài viết</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Bài viết</td>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="" alt="avatar"
                                                width="30" class="rounded-circle mr-1"> Bagus Dwi
                                            Cahya</a>
                                    </td>
                                    <td>01-07-2004</td>

                                    <td>Danh mục áo</td>
                                    <td>Quần áo,Áo đẹp</td>
                                    <td>Hữu Nam</td>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="" alt="avatar"
                                                width="30" class="rounded-circle mr-1"> Bagus Dwi
                                            Cahya</a>
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="bạn có chắc muốn xóa?|Bạn có chắc chắn muốn xóa không. Hành động này không thể hoàn tác?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bài viết</td>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="" alt="avatar"
                                                width="30" class="rounded-circle mr-1"> Bagus Dwi
                                            Cahya</a>
                                    </td>
                                    <td>01-07-2004</td>

                                    <td>Danh mục áo</td>
                                    <td>Quần áo,Áo đẹp</td>
                                    <td>Hữu Nam</td>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="" alt="avatar"
                                                width="30" class="rounded-circle mr-1"> Bagus Dwi
                                            Cahya</a>
                                    </td>
                                    <td>
                                        <a href=" route{{ 'admin.article.edit_article' }}"
                                            class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="bạn có chắc muốn xóa?|Bạn có chắc chắn muốn xóa không. Hành động này không thể hoàn tác?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>Bài viết</td>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="" alt="avatar"
                                                width="30" class="rounded-circle mr-1"> Bagus Dwi
                                            Cahya</a>
                                    </td>
                                    <td>01-07-2004</td>

                                    <td>Danh mục áo</td>
                                    <td>Quần áo,Áo đẹp</td>
                                    <td>Hữu Nam</td>
                                    <td>
                                        <a href="#" class="font-weight-600"><img src="" alt="avatar"
                                                width="30" class="rounded-circle mr-1"> Bagus Dwi
                                            Cahya</a>
                                    </td>
                                    <td>
                                        <a class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i
                                                class="fas fa-pencil-alt"></i></a>
                                        <a class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"
                                            data-confirm="bạn có chắc muốn xóa?|Bạn có chắc chắn muốn xóa không. Hành động này không thể hoàn tác?"
                                            data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></a>
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
