<x-admin-layout>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Danh mục tin tức</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Tin tức</a></li>
                    <li class="breadcrumb-item">Danh mục tin tức</li>
                    <li class="breadcrumb-item active">Thêm mới</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Thêm mới danh mục tin tức</h5>

                        <!-- Vertical Form -->
                        <form action="{{ route('admin.post_categories.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            
                            <div class="mb-3 col-6">
                                <label for="title" class="form-label">Tên danh mục <span class="text-danger">*</span></label>
                                <input type="text" name="title" id="title"
                                    class="form-control @error('title') is-invalid @enderror"
                                    value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="text-center mt-3 col-6">
                                <a href="{{ route('admin.post_categories.index') }}" class="btn btn-secondary mr-8">
                                    Huỷ
                                </a>
                                <button type="submit" class="btn btn-primary">Lưu</button>
                            </div>
                        </form><!-- Vertical Form -->

                    </div>
                </div>
            </div>
        </section>

    </main>

</x-admin-layout>
