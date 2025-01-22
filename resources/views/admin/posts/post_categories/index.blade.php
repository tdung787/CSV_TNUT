<x-admin-layout>
    <link href="{{ asset('admin/datatable-new/dataTables.bootstrap5.css') }}" rel="stylesheet">
    <main id="main" class="main">
        <div class="pagetitle">
            <h1>Danh mục tin tức</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Tin tức</a></li>
                    <li class="breadcrumb-item">Danh mục tin tức</li>
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
                            <a type="button" href="{{ route('admin.post_categories.create') }}"
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
                                            <th class="text-left">Tên danh mục</th>
                                            <th class="text-center">Thao tác</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($postCategory as $index => $postCategory)
                                            <tr>
                                                <td class="text-center">{{ $index + 1 }}</td>
                                                <td class="fw-semibold">{{ $postCategory->title }}</td>
                                                <td class="justify-items-center">
                                                    <div class="row col-4">
                                                        <div class="col-6">
                                                            <a href="{{ route('admin.post_categories.edit', $postCategory) }}"
                                                                class="edit-button align-self-center" type="button">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                        </div>
                                                        <div class="col-6">
                                                            <x-delete-modal id="{{ $postCategory->id }}"
                                                                title="{{ $postCategory->title }}"
                                                                route="{{ route('admin.post_categories.destroy', $postCategory) }}"
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
    @endPushOnce
</x-admin-layout>
