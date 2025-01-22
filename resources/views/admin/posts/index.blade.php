<x-admin-layout>
    <link href="{{ asset('admin/datatable-new/dataTables.bootstrap5.css') }}" rel="stylesheet">
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Bài viết</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Tin tức</a></li>
                    <li class="breadcrumb-item">Bài viết</li>
                    <li class="breadcrumb-item active">Danh sách</li>
                </ol>
            </nav>
        </div>

        <!-- End Page Title -->
        <section class="section">
            <div class="row">
                <div class="card p-2">
                    <div class="card-body p-0">
                        <div class="w-fit ml-auto">
                            <a type="button" href="{{ route('admin.posts.create') }}"
                                class="btn btn-primary mb-2 ms-auto d-flex justify-content-end items-center">
                                <i class="bi bi-plus-circle me-1"></i>Thêm mới
                            </a>
                        </div>
                        <div class=" rounded-lg text-sm">

                            <div id='recipients' class="lg:mt-0 rounded shadow bg-white p-2">
                                <table id="example" class="table table-striped" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">STT</th>
                                            <th>Tiêu đề</th>
                                            <th>Danh mục</th>
                                            <th class="text-center">Ngày đăng</th>
                                            <th class="text-center">Cập nhật</th>
                                            <th class="text-center">Ẩn/Hiện</th>
                                            <th class="text-center">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $index => $post)
                                            <tr>
                                                <td class="text-center">{{ $index + 1 }}</td>
                                                <td class="fw-semibold">{{ $post->title }}</td>
                                                <td class="fw-semibold">{{ $post->category->title }}</td>
                                                <td class="text-center">{{ $post->publishedAtVi }}</td>
                                                <td class="text-center">{{ $post->updatedAtVi }}</td>
                                                <td class="justify-items-center">
                                                    <div class="form-check form-switch min-h-0">
                                                        <input type="checkbox" class="form-check-input"
                                                            @if ($post->is_visible) checked="checked" @endif
                                                            onclick="toggleVisibility('{{ $post->id }}')" />
                                                    </div>
                                                </td>
                                                <td class="justify-items-center">
                                                    <div class="row col-12">
                                                        <div class="col-6">
                                                            <a href="{{ route('admin.posts.edit', $post) }}"
                                                                class="edit-button align-self-center" type="button">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <x-delete-modal id="{{ $post->id }}"
                                                                title="{{ $post->title }}"
                                                                route="{{ route('admin.posts.destroy', $post) }}"
                                                                message="Bạn có chắc chắn muốn xóa danh mục này?" />
                                                        </div>
                                                    </div>


                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    @pushOnce('bottom_scripts')
        <!-- jQuery -->
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.7.1.js"></script>
        <script type="text/javascript" src="{{ asset('admin/datatable-new/dataTables.js') }}"></script>
        <script type="text/javascript" src="{{ asset('admin/datatable-new/dataTables.bootstrap5.js') }}"></script>

        <script>
            $(document).ready(function() {

                var table = $('#example').DataTable({
                        responsive: true
                    })
                    .columns.adjust();
            });
        </script>
        {{-- Trạng thái ẩn hiện và thông báo toast --}}
        <script>
            function toggleVisibility(postId) {
                fetch(`/admin/posts/${postId}/toggle-visibility`, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({})
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            showToast('Trạng thái hiển thị của bài viết đã được cập nhật.', 'success');
                        } else {
                            showToast('Đã xảy ra lỗi.', 'error');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        showToast('Có lỗi xảy ra trong hệ thống.', 'error');
                    });
            }

            function showToast(message, type) {
                const toastContainer = document.querySelector('.alert-container');
                const toast = document.createElement('div');
                toast.classList.add('alert', type === 'success' ? 'alert-success' : 'alert-danger', 'alert-dismissible', 'fade',
                    'show', 'p-2');
                toast.setAttribute('role', 'alert');
                toast.innerHTML =
                    `<h4 class="alert-heading ml-0 mb-0 mr-8" style="font-size: 16px;">
                         ${type === 'success' ? '<i class="bi bi-check-circle me-1"></i>' : '<i class="bi bi-exclamation-octagon me-1"></i>'}
                         ${message}
                       </h4>
                       <button type="button" class="btn-close p-2 m-1" data-bs-dismiss="alert" aria-label="Close"></button>`;

                toastContainer.appendChild(toast);

                // Tự động ẩn sau 5 giây
                setTimeout(() => {
                    toast.classList.add('hidden');
                    setTimeout(() => toast.remove(), 500);
                }, 5000);

                // Đóng alert khi nhấn nút close
                const closeButton = toast.querySelector('.btn-close');
                if (closeButton) {
                    closeButton.addEventListener('click', function() {
                        toast.classList.add('hidden');
                        setTimeout(() => toast.remove(), 500);
                    });
                }
            }
        </script>
    @endPushOnce
</x-admin-layout>
