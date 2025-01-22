<div>
    <!-- Delete Form -->
    <form id="delete-form-{{ $id }}" action="{{ $route }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="button" data-bs-toggle="modal" data-bs-target="#deleteModal-{{ $id }}" class="p-0 delete-button">
            <i class="bi bi-trash cursor-pointer"></i>
        </button>
    </form>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal-{{ $id }}" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="p-0 m-0 text-danger">Xác nhận xóa</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">
                    <p>{{ $message ?? 'Bạn có chắc chắn muốn xóa?' }}
                        @if (isset($title))
                            <strong>{{ $title }}</strong>
                        @endif
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Hủy</button>
                    <button type="button" class="btn btn-danger"
                        onclick="document.getElementById('delete-form-{{ $id }}').submit();">
                        Xóa
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
