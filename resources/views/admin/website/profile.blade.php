<x-website-layout>
    <div class="contentWarp container">
        <section class="section profile" style="margin-top: 24px;">
            <div class="row">
                <div class="col-xl-4">

                    <div class="card">
                        <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                            <img id="avatar-preview" src="{{ Auth::user()->avatar_url }}" alt="Profile"
                                class="rounded-circle" style="max-width: 120px; max-height: 120px;">
                            <h2>{{ Auth::user()->name }}</h2>

                            <form action="{{ route('admin.profiles.update-avatar') }}" method="POST"
                                enctype="multipart/form-data" class="mt-3">
                                @csrf
                                <div class="d-flex flex-column align-items-center">
                                    <label for="avatar" class="btn btn-outline-primary btn-sm">Chọn ảnh</label>
                                    <input type="file" name="avatar" id="avatar" class="d-none" accept="image/*"
                                        onchange="previewAvatar(event)">
                                </div>
                                <button type="submit" id="update-avatar-btn" class="btn btn-primary btn-sm mt-2"
                                    style="display: none;">Cập nhật avatar</button>
                            </form>
                            <script>
                                function previewAvatar(event) {
                                    const file = event.target.files[0];
                                    if (file) {
                                        const reader = new FileReader();
                                        reader.onload = function(e) {
                                            const preview = document.getElementById('avatar-preview');
                                            preview.src = e.target.result;
                            
                                            // Hiển thị nút "Cập nhật avatar"
                                            const updateButton = document.getElementById('update-avatar-btn');
                                            updateButton.style.display = 'block';
                                        };
                                        reader.readAsDataURL(file);
                                    }
                                }
                            </script>
                            
                        </div>
                    </div>

                </div>

                <div class="col-xl-8">

                    <div class="card">
                        <div class="card-body pt-3">
                            <!-- Bordered Tabs -->
                            <ul class="nav nav-tabs nav-tabs-bordered" role="tablist">

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" data-bs-toggle="tab"
                                        data-bs-target="#profile-overview" aria-selected="true" role="tab">Thông
                                        tin giới thiệu</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit"
                                        aria-selected="false" tabindex="-1" role="tab">Chỉnh sửa thông tin cá
                                        nhân</button>
                                </li>

                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-don-hang"
                                        aria-selected="false" tabindex="-1" role="tab">Đơn hàng</button>
                                </li>

                                {{-- <li class="nav-item" role="presentation">
                                    <button class="nav-link" data-bs-toggle="tab"
                                        data-bs-target="#profile-change-password" aria-selected="false" tabindex="-1"
                                        role="tab">Đổi mật khẩu</button>
                                </li> --}}

                            </ul>
                            <div class="tab-content pt-2">

                                <div class="tab-pane fade show active profile-overview" id="profile-overview"
                                    role="tabpanel">
                                    <h5 class="card-title">Thông Tin</h5>
                                    <p class="small fst-italic">{{ $user->description ?? 'Chưa có thông tin mô tả.' }}
                                    </p>

                                    <h5 class="card-title">Chi Tiết Hồ Sơ</h5>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Họ và Tên</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->full_name ?? $user->name }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Email</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->email }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Số Điện Thoại</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->phone ?? 'Chưa cập nhật' }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Địa Chỉ</div>
                                        <div class="col-lg-9 col-md-8">{{ $user->address ?? 'Chưa cập nhật' }}</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-lg-3 col-md-4 label">Ngày Sinh</div>
                                        <div class="col-lg-9 col-md-8">
                                            {{ $user->birthday ? \Carbon\Carbon::parse($user->birthday)->format('d/m/Y') : 'Chưa cập nhật' }}
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade profile-edit pt-3" id="profile-edit" role="tabpanel">

                                    <!-- Profile Edit Form -->
                                    <form action="{{ route('web.profile.update') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')

                                        <!-- Name -->
                                        <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-lg-3 col-form-label">Biệt
                                                danh</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="name" type="text" class="form-control" id="name"
                                                    value="{{ old('name', $user->name) }}">
                                            </div>
                                        </div>

                                        <!-- Full Name -->
                                        <div class="row mb-3">
                                            <label for="full_name" class="col-md-4 col-lg-3 col-form-label">Họ &
                                                tên</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="full_name" type="text" class="form-control"
                                                    id="full_name" value="{{ old('full_name', $user->full_name) }}">
                                            </div>
                                        </div>

                                        <!-- Phone -->
                                        <div class="row mb-3">
                                            <label for="phone" class="col-md-4 col-lg-3 col-form-label">Số điện
                                                thoại</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="phone" type="text" class="form-control" id="phone"
                                                    value="{{ old('phone', $user->phone) }}">
                                            </div>
                                        </div>

                                        <!-- Address -->
                                        <div class="row mb-3">
                                            <label for="address" class="col-md-4 col-lg-3 col-form-label">Địa
                                                chỉ</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="address" type="text" class="form-control"
                                                    id="address" value="{{ old('address', $user->address) }}">
                                            </div>
                                        </div>

                                        <!-- Email -->
                                        <div class="row mb-3">
                                            <label for="email"
                                                class="col-md-4 col-lg-3 col-form-label">Email</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="email" type="email" class="form-control"
                                                    id="email" value="{{ old('email', $user->email) }}">
                                            </div>
                                        </div>

                                        <!-- Birthday -->
                                        <div class="row mb-3">
                                            <label for="birthday" class="col-md-4 col-lg-3 col-form-label">Ngày
                                                sinh</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="birthday" type="date" class="form-control"
                                                    id="birthday"
                                                    value="{{ old('birthday', $user->birthday ? $user->birthday->format('Y-m-d') : '') }}">
                                            </div>
                                        </div>


                                        <!-- Description -->
                                        <div class="row mb-3">
                                            <label for="description" class="col-md-4 col-lg-3 col-form-label">Giới
                                                thiệu</label>
                                            <div class="col-md-8 col-lg-9">
                                                <textarea name="description" class="form-control" id="description" style="height: 100px">{{ old('description', $user->description) }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Nút đổi mật khẩu -->
                                        <div class="row mb-3">
                                            <div class="col-md-8 offset-md-4">
                                                <button type="button" class="btn btn-secondary"
                                                    id="changePasswordBtn">Đổi mật khẩu</button>
                                            </div>
                                        </div>

                                        <!-- Phần form nhập mật khẩu mới (ẩn mặc định) -->
                                        <div id="changePasswordSection" style="display: none;">
                                            <!-- Mật khẩu hiện tại -->
                                            <div class="row mb-3">
                                                <label for="currentPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">Mật khẩu hiện tại</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="current_password" type="password"
                                                        class="form-control" id="currentPassword">
                                                </div>
                                            </div>

                                            <!-- Mật khẩu mới -->
                                            <div class="row mb-3">
                                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Mật
                                                    khẩu mới</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password" type="password" class="form-control"
                                                        id="newPassword">
                                                </div>
                                            </div>

                                            <!-- Nhập lại mật khẩu mới -->
                                            <div class="row mb-3">
                                                <label for="renewPassword"
                                                    class="col-md-4 col-lg-3 col-form-label">Nhập lại mật khẩu
                                                    mới</label>
                                                <div class="col-md-8 col-lg-9">
                                                    <input name="password_confirmation" type="password"
                                                        class="form-control" id="renewPassword">
                                                </div>
                                            </div>
                                        </div>
                                        <script>
                                            document.getElementById('changePasswordBtn').addEventListener('click', function() {
                                                var changePasswordSection = document.getElementById('changePasswordSection');
                                                // Toggle visibility of the password change section
                                                changePasswordSection.style.display = (changePasswordSection.style.display === 'none' ||
                                                    changePasswordSection.style.display === '') ? 'block' : 'none';
                                            });
                                        </script>


                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                        </div>
                                    </form><!-- End Profile Edit Form -->

                                </div>


                                <div class="tab-pane fade pt-3" id="profile-don-hang" role="tabpanel">

                                    <!-- don-hang Form -->
                                    <main class="container mt-1">
                                        @if ($orders->isEmpty())
                                            <p>Bạn chưa có đơn hàng nào.</p>
                                        @else
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Mã đơn hàng</th>
                                                        <th>Ngày đặt</th>
                                                        <th>Tổng tiền</th>
                                                        <th>Trạng thái</th>
                                                        <th>Hành động</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($orders as $order)
                                                        <tr>
                                                            <td>#{{ $order->id }}</td>
                                                            <td>{{ $order->created_at->format('d/m/Y') }}</td>
                                                            <td>{{ number_format($order->total_amount) }} VND</td>
                                                            <td><span class="{{ $order->status['class'] }}">
                                                                    {{ $order->status['label'] }}
                                                                </span></td>
                                                            <td>
                                                                <a href="{{ route('web.profile.showCheckout', $order->id) }}#profile-don-hang" class="btn btn-primary btn-sm">
                                                                    Xem chi tiết
                                                                </a>                                                                
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </main>
                                    <!-- End don-hang Form -->

                                </div>

                                {{-- <div class="tab-pane fade pt-3" id="profile-change-password" role="tabpanel">
                                    <!-- Change Password Form -->
                                    <form action="{{ route('web.profile.changePassword') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                
                                        <!-- Current Password -->
                                        <div class="row mb-3">
                                            <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="current_password" type="password" class="form-control" id="currentPassword" required>
                                            </div>
                                        </div>
                                
                                        <!-- New Password -->
                                        <div class="row mb-3">
                                            <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="new_password" type="password" class="form-control" id="newPassword" required>
                                            </div>
                                        </div>
                                
                                        <!-- Re-enter New Password -->
                                        <div class="row mb-3">
                                            <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                            <div class="col-md-8 col-lg-9">
                                                <input name="renew_password" type="password" class="form-control" id="renewPassword" required>
                                            </div>
                                        </div>
                                
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary">Change Password</button>
                                        </div>
                                    </form>
                                    <!-- End Change Password Form -->
                                </div> --}}


                            </div><!-- End Bordered Tabs -->

                        </div>
                    </div>

                </div>
            </div>
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    // Đảm bảo tab "Đơn hàng" được chọn khi quay lại từ chi tiết đơn hàng
                    const backButton = document.getElementById('backToOrdersBtn');

                    if (backButton) {
                        backButton.addEventListener('click', function(e) {
                            e.preventDefault(); // Ngừng chuyển hướng mặc định
                            window.location.href =
                            '{{ route('web.profile.index') }}#profile-don-hang'; // Thêm hash vào URL
                        });
                    }

                    // Kiểm tra URL hiện tại có chứa hash '#profile-don-hang' không
                    if (window.location.hash === '#profile-don-hang') {
                        // Tìm tab "Đơn hàng"
                        const profileDonHangTab = document.querySelector('button[data-bs-target="#profile-don-hang"]');
                        const profileOverviewTab = document.querySelector('button[data-bs-target="#profile-overview"]');

                        if (profileDonHangTab && profileOverviewTab) {
                            // Xóa trạng thái active và aria-selected trên tab "Thông tin"
                            profileOverviewTab.classList.remove('active');
                            profileOverviewTab.setAttribute('aria-selected', 'false');

                            // Thêm trạng thái active và aria-selected trên tab "Đơn hàng"
                            profileDonHangTab.classList.add('active');
                            profileDonHangTab.setAttribute('aria-selected', 'true');

                            // Hiển thị tab "Đơn hàng" và ẩn tab "Thông tin"
                            const tabContentDonHang = document.querySelector('#profile-don-hang');
                            const tabContentOverview = document.querySelector('#profile-overview');

                            if (tabContentDonHang && tabContentOverview) {
                                tabContentOverview.classList.remove('show', 'active');
                                tabContentDonHang.classList.add('show', 'active');
                            }
                        }
                    }
                });
            </script>
        </section>
    </div>
</x-website-layout>
