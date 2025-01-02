<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo bài viết</title>
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script> --}}
    <script src="assets/vendor/ckeditor5/build/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
    <!-- SimpleLightbox plugin CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style_old.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/dropdown.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/slick_style.css') }}" />


</head>

<body>
    <style>
        #wrapper{
            max-width: 1024px;
            margin: 0px auto;
        }
        .ck-editor__editable_inline{
            height: 400px;
        }
    </style>
    @include('layout.nav')
    <h2 class="text-center" style="color: red">Tạo bài viết</h2>
    <div id="wrapper">
    <form action="{{route('create_post')}}" method="POST">
        @csrf
        <span>Thumbnail</span>
        <input name="thumbnail" class="form-control" type="text" id="thumbnail" />
        <span>Category</span>
        <select class="form-select" name="category" id="category">
            <option style="display:none" disabled selected value> </option>
            <option value="Hợp tác">Hợp tác</option>
            <option value="Chia sẻ">Chia sẻ</option>
            <option value="Kết nối">Kết nối</option>
            <option value="Thành công">Thành công</option>
          </select>
        <span>Tittle</span>
        <input name="tittle" class="form-control" type="text" id="tittle" />
        <span>Description</span>
        <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
        <span>Content</span>
        <textarea name="content" id="editor" cols="30" rows="10"></textarea>
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-primary">Đăng bài</button>
        </div>
    </form>
</div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('{{ asset('js/scripts_old.js') }}') }}"></script>
    <script src="{{ asset('slick/slick.js') }}"></script>
    <script src="{{ asset('{{ asset('js/scripts.js') }}') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>

</script>
    <script>
    ClassicEditor
        .create( document.querySelector( '#editor' ),{
            ckfinder:
            {
                uploadUrl:"{{route('ckeditor.upload',['_token'=>csrf_token()])}}"
            }
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
