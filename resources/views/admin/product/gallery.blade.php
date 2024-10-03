@extends('admin.layouts.master')

@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Sản Phẩm </h1>
        </div>

        <div class="card card-primary">
            <div class="card-header">
                <h4>Ảnh Phụ Sản Phẩm abc</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-primary">
                      Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="gallery gallery-md">
                            <div style="height:200px; width:200px;" class="gallery-item"
                                data-image="{{ asset('admin/assets/img/news/img01.jpg') }}" data-title="Image 1"
                                href="{{ asset('admin/assets/img/news/img01.jpg') }}" title="Image 1"
                                style="background-image: url(&quot;{{ asset('admin/assets/img/news/img01.jpg') }}&quot;);">
                            </div>
                            <div style="height:200px; width:200px;" class="gallery-item"
                                data-image="{{ asset('admin/assets/img/news/img01.jpg') }}" data-title="Image 1"
                                href="{{ asset('admin/assets/img/news/img01.jpg') }}" title="Image 1"
                                style="background-image: url(&quot;{{ asset('admin/assets/img/news/img01.jpg') }}&quot;);">
                            </div>
                            <div style="height:200px; width:200px;" class="gallery-item"
                                data-image="{{ asset('admin/assets/img/news/img01.jpg') }}" data-title="Image 1"
                                href="{{ asset('admin/assets/img/news/img01.jpg') }}" title="Image 1"
                                style="background-image: url(&quot;{{ asset('admin/assets/img/news/img01.jpg') }}&quot;);">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body">
            <form action="#" class="dropzone" id="mydropzone">
                <div class="fallback">
                    <input name="file" type="file" multiple />
                </div>
            </form>
        </div>
    </section>
@endsection
