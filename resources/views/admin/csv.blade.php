@extends('admin/admin')
@section('content')
<div class="col-md-9 col-sm-9">
    <div class="mgt20 text-justify">
        <table class="table table-striped">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Email</th>
                    <th>Ngày tạo</th>
                    <th class="text-center">#</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumni as $alumnus)
                <tr>
                    <td>{{ $alumnus->id }}</td>
                    <td><a href="{{ route('lists.show', $alumnus) }}">{{ $alumnus->ten }}</a></td>
                    <td>{{ $alumnus->email }}</td>
                    <td>{{ date('d-m-Y', strtotime($alumnus->created_at)) }}</td>
                    <td class="text-center d-flex justify-content-center">
                        <a href="{{ route('alumni.edit', $alumnus) }}"><button type="button"
                                class="btn btn-dark btn-sm mx-2">Edit</button></a>
                        <form method="POST" action="{{ route('alumni.destroy', $alumnus->id) }}">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $alumni->links() }}
    </div>
</div>
@endsection
