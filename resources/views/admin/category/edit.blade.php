@extends('admin.layouts.master')

@section('content')
<section class="section">
    <div class="section-header">
        <h1>Danh Mục</h1>
    </div>

    <div class="card card-primary">
        <div class="card-header">
            <h4>Sửa danh mục</h4>
        </div>
        <div class="card-body">
            <form action="{{ route('categories.update', $categories->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="form-group">
                            <label>Ảnh Danh Mục</label>
                            <div class="image-preview mx-auto" style="width: 100%; height: 250px; border: 2px dashed #ddd; display: flex; justify-content: center; align-items: center;">
                                <label for="image-upload" id="image-label" style="cursor: pointer;">Chọn Tập Tin</label>
                                <input type="file" name="image_path" id="image-upload" accept="image/*" style="display: none;" />
                                <span id="image-preview" style="display: block;">
                                    <img src="{{ Storage::url($categories->image_path) }}" alt="Preview Image" style="width: 100%; height: 100%; object-fit: cover;" />
                                </span>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Trạng Thái</label>
                            <select name="status" class="form-control">
                                <option value="1" {{ $categories->status == 1 ? 'selected' : '' }}>Hiển thị</option>
                                <option value="0" {{ $categories->status == 0 ? 'selected' : '' }}>Không hiển thị</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-6 col-12">
                        <div class="form-group">
                            <label>Tên Danh Mục</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $categories->name) }}">
                        </div>

                        <div class="form-group">
                            <label>Đường Dẫn Thân Thiện</label>
                            <input type="text" name="slug" class="form-control" value="{{ old('slug', $categories->slug) }}">
                        </div>

                        <div class="form-group">
                            <label>Mô Tả Danh Mục</label>
                            <textarea name="description" class="form-control">{{ old('description', $categories->description) }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Danh Mục Cha</label>
                            <select name="parent_id" class="form-control">
                                <option value="">Chọn danh mục cha</option>
                                @foreach ($categoryList as $cat)
                                    <option value="{{ $cat->id }}" {{ $cat->id == $categories->parent_id ? 'selected' : '' }}>
                                        {{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Cập Nhật</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

<script>
    $(document).ready(function () {
        toastr.options = {
            "closeButton": true,
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

        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach

        $('#image-upload').change(function (e) {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    $('#image-preview img').attr('src', event.target.result);
                }
                reader.readAsDataURL(file);
            }
        });
    });
</script>
@endsection
