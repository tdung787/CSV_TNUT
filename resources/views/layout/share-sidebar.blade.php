<div id="sidebar" class="mb-3 widget p-3 bg-light rounded">
    <div class="minTl">Danh mục</div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">
        <a href="{{route('quytuhao')}}" class="text-dark">Quỹ tự hào TNUT</a>
      </li>
      <li class="list-group-item">
        <a href="{{route('quyphattrien')}}" class="text-dark">Quỹ phát triển tài năng ĐHCD</a>
      </li>
      @auth
      <li class="list-group-item">
          <a href="{{route('dangkydonggop')}}" class="text-dark">Đăng ký đóng góp</a>
        </li>
        @endauth
    </ul>
  </div>
