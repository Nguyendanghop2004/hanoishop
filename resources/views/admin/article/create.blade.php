@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Bài Viết</h1>
        </div>
        <form id="postForm" action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <!-- Phần chính -->
                <div class="col-lg-8 col-md-7 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Thêm bài viết</h4>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="form-group col-12">
                                    <label>Title</label>
                                    <input type="text" name="sku" class="form-control" value="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="seo_description" class="form-control summernote" cols="30" rows="5"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Tóm tắt</label>
                                <textarea name="" class="form-control summernote " style="width: 50%; height: 100px;" cols="30"
                                    rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Phần phụ -->
                <div class="col-lg-4 col-md-5 col-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Ảnh Đại Diện</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Upload Image</label>
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="thumb_image" id="image-upload" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-header">
                            <h4>Thông tin bài viết</h4>
                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label>Ngày xuất bản</label>
                                <input type="date" name="publish_date" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Chọn danh mục</label>
                                <select name="category" class="form-control select2">
                                    <option value="">Chọn danh mục</option>
                                    <option value="1">Danh mục 1</option>
                                    <option value="2">Danh mục 2</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Tags</label>
                                <select name="tags[]" class="form-control select2" multiple>
                                    <option value="1">Tag 1</option>
                                    <option value="2">Tag 2</option>
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Tác giả</label>
                                <input type="text" name="author" class="form-control" value="{{ old('author') }}">
                            </div>


                            <button type="submit" class="btn btn-primary btn-block">Đăng bài viết</button>
                        </div>
                    </div>

                </div>
            </div>
        </form>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let isFormEdited = false;
            const form = document.getElementById('postForm');
            form.addEventListener('input', function() {
                isFormEdited = true;
            });
            window.addEventListener('beforeunload', function(e) {
                if (isFormEdited) {
                    const confirmationMessage =
                        'Bạn có thay đổi chưa được lưu. Bạn có chắc chắn muốn rời khỏi trang?';
                    e.returnValue = confirmationMessage;
                    return confirmationMessage;
                }
            });
            form.addEventListener('submit', function() {
                isFormEdited = false;
            });
        });
    </script>
@endsection
