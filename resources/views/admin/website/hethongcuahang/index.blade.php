<x-website-layout>
    <div class="col-right position-relative open_slogan">
        <div class="contentWarp ">
            <div class="breadcrumbs bg-white">
                <div class="container position-relative">
                    <ul class="breadcrumb align-items-center m-0 pl-0 pr-0 border-bottom bg-white">
                        <li class="home"> <a href="/" title="Trang chủ"> <svg width="14" height="14">
                                    <use href="#svg-home"></use>
                                </svg> Trang chủ </a> <span class="slash-divider ml-2 mr-2"> <svg width="4"
                                    height="8">
                                    <use href="#svg-next-mini"></use>
                                </svg> </span> </li>
                        <li>Hệ thống cửa hàng</li>
                    </ul>
                </div>
            </div> {{-- style  --}}
            <link rel="stylesheet" href="{{ asset('website/css/hethongcuahang.css') }}">
            <div class="com_info">
                <div class="container mt-3 mb-3">
                    <div class="bg-white p-2 px-lg-3 rounded-10 col-main page-title">
                        <h1 class="font-coiny mt-0 mb-3"> Hệ thống cửa hàng </h1>
                        <div class="nb_store mb-3">
                            <div class="row">
                                <div class="col-6 col-sm-6 col-md-3 mb-3 mb-md-0">
                                    <div class="item_nb p-3 b_1 position-relative">
                                        <p class="tt m-0 text-white"> Cửa hàng </p>
                                        <p class="bt font-weight-bold m-0 text-white"> {{ $storeCount }} </p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 mb-3 mb-md-0">
                                    <div class="item_nb p-3 b_2 position-relative">
                                        <p class="tt m-0 text-white"> Tỉnh/Thành </p>
                                        <p class="bt font-weight-bold m-0 text-white"> {{ $provinceCount }}+ </p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 ">
                                    <div class="item_nb p-3 b_3 position-relative">
                                        <p class="tt m-0 text-white"> Đối tác </p>
                                        <p class="bt font-weight-bold m-0 text-white">{{ $partnerCount }}+ </p>
                                    </div>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3 ">
                                    <div class="item_nb p-3 b_4 position-relative">
                                        <p class="tt m-0 text-white"> Nhân sự </p>
                                        <p class="bt font-weight-bold m-0 text-white"> 23+ </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rte">
                            <div class="sectionContentStore row" style="">
                                <!-- Cột danh sách cửa hàng -->
                                <div class="col-12 col-md-4">
                                    <div class="leftCollumStore h-100 p-2 p-lg-3 rounded">
                                        <div class="form-group m-0">
                                            <label
                                                class="select-city-label font-weight-bold text-uppercase position-relative mb-2">
                                                Chọn tỉnh/ thành phố
                                            </label>
                                            <label class="select-city-wrapper mb-1">
                                                <select id="select-city" class="select-city custom-select">
                                                    <option value="" selected>Tất cả</option>
                                                    @foreach ($provinces as $province)
                                                        <option value="{{ $province }}">{{ $province }}</option>
                                                    @endforeach
                                                </select>
                                            </label>
                                        </div>
                                        <div class="resultStore">
                                            <div id="list-store" class="pr-1">
                                                @foreach ($stores as $store)
                                                    <div class="item position-relative p-1 mb-1 rounded"
                                                        data-province="{{ $store->province }}"
                                                        data-map="{{ $store->embed_link }}"
                                                        data-address="{{ $store->address }}">
                                                        <div class="district font-weight-bold">{{ $store->district }}
                                                        </div>
                                                        <div>Mail: {{ $store->email }}</div>
                                                        <div>Hotline: {{ $store->phone }}</div>
                                                        <div>{{ $store->address }}</div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Cột bản đồ -->
                                <div class="col-12 col-md-8">
                                    <div id="map" class="rounded modal-open">
                                        <iframe id="store-map" class="embed-responsive-item" src=""
                                            width="100%" height="450" style="border:0;" allowfullscreen=""
                                            loading="lazy">
                                        </iframe>
                                    </div>
                                </div>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function() {
                                        const storeItems = document.querySelectorAll('.item');
                                        const mapFrame = document.getElementById('store-map');
                                        const selectCity = document.getElementById('select-city');
                                        const listStore = document.getElementById('list-store');

                                        // Hiển thị cửa hàng đầu tiên khi tải trang
                                        function showFirstStore() {
                                            const visibleStores = listStore.querySelectorAll('.item:not(.d-none)');
                                            if (visibleStores.length > 0) {
                                                const firstItem = visibleStores[0];
                                                const firstMapLink = firstItem.getAttribute('data-map');

                                                mapFrame.src = firstMapLink;
                                                visibleStores.forEach(i => i.classList.remove('checked'));
                                                firstItem.classList.add('checked');
                                            }
                                        }

                                        // Lọc cửa hàng theo tỉnh
                                        selectCity.addEventListener('change', function() {
                                            const selectedProvince = this.value;

                                            storeItems.forEach(item => {
                                                const storeProvince = item.getAttribute('data-province');
                                                if (selectedProvince === "" || storeProvince === selectedProvince) {
                                                    item.classList.remove('d-none');
                                                } else {
                                                    item.classList.add('d-none');
                                                }
                                            });

                                            showFirstStore();
                                        });

                                        // Lắng nghe sự kiện click trên từng cửa hàng
                                        storeItems.forEach(item => {
                                            item.addEventListener('click', function() {
                                                const mapLink = this.getAttribute('data-map');
                                                mapFrame.src = mapLink;

                                                storeItems.forEach(i => i.classList.remove('checked'));
                                                this.classList.add('checked');
                                            });
                                        });

                                        // Hiển thị cửa hàng đầu tiên khi trang tải
                                        showFirstStore();
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-website-layout>
