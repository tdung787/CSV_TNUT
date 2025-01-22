<x-admin-layout>
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Bài viết</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Tin tức</a></li>
                    <li class="breadcrumb-item">Bài viết</li>
                    <li class="breadcrumb-item active">Chỉnh sửa</li>
                </ol>
            </nav>
        </div>
        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Chỉnh sửa bài viết</h5>
                        <!-- Vertical Form -->
                        <form action="{{ route('admin.posts.update', $post) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                            <div class="row">
                                <div class="col-8">
                                    <div class="mb-3">
                                        <label for="category_id" class="form-label">Danh mục <span class="text-danger">*</span></label>
                                        <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                                            <option selected="">Chọn danh mục ...</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    {{ old('category_id', $post->category_id) == $category->id ? 'selected' : '' }}>
                                                    {{ $category->title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Tiêu đề <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                                            value="{{ old('title', $post->title) }}">
                                            @error('title')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Mô tả</label>
                                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                                            value="{{ old('description', $post->description) }}">
                                            @error('description')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="content" class="form-label">Nội dung <span class="text-danger">*</span></label>
                                        <textarea id="content" name="content" class="form-control @error('content') is-invalid @enderror">{{ old('content', $post->content) }}</textarea>
                                        @error('content')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="mb-3">
                                        <label for="published_at" class="form-label">Ngày xuất bản <span class="text-danger">*</span></label>
                                        <input type="datetime-local" class="form-control @error('published_at') is-invalid @enderror" id="published_at"
                                            name="published_at" value="{{ old('published_at', $post->published_at) }}">
                                            @error('published_at')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="form-label">Hình ảnh</label>
                                        {{-- hình ảnh --}}
                                        <input type="hidden" id="existingImages"
                                            value="{{ json_encode(
                                                $post->images->map(function ($image) {
                                                    return [
                                                        'id' => $image->id,
                                                        'name' => $image->file_name,
                                                        'size' => Storage::disk('public')->exists($image->file_path)
                                                            ? Storage::disk('public')->size($image->file_path)
                                                            : 'Không tìm thấy tệp',
                                                        'path' => Storage::url($image->file_path),
                                                        'file_path' => $image->file_path,
                                                        'isExisting' => Storage::disk('public')->exists($image->file_path),
                                                    ];
                                                }),
                                            ) }}" />
                                        {{-- Input cho ảnh sẽ giữ lại (cả cũ và mới) --}}
                                        <input type="hidden" name="retained_images" id="retainedImages" />
                                        {{-- Input cho ảnh mới upload --}}
                                        <input type="hidden" name="new_images" id="newImages" />
                                        <input type="file" id="image_link" name="image_link[]" multiple
                                            accept="image/*" class="filepond" />
                                        <style>
                                            .filepond--credits {
                                                display: none !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center mt-3 col-12">
                                <a href="{{ route('admin.posts.index') }}" class="btn btn-secondary mr-8">
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
    @pushonce('bottom_scripts')
        {{-- Sử dụng filepond --}}
        @include('components.filepond-edit-only-image')
        <x-admin.forms.tinymce-config column="content" model="Post" id="content" />
    @endpushonce

</x-admin-layout>
