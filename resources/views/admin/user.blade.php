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
                        <th class="text-center">Chức vụ</th>
                        <th class="text-center">#</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td><a href="{{ route('lists.show', $user) }}">{{ $user->name }}</a></td>
                            <td>{{ $user->email }}</td>
                            <td>{{ date('d-m-Y', strtotime($user->created_at)) }}</td>
                            @if ($user->is_admin)
                                <td class="text-center">Admin</td>
                            @elseif ($user->is_poster)
                                <td class="text-center">Editor</td>
                            @else
                                <td class="text-center">User</td>
                            @endif
                            <td class="text-center d-flex justify-content-center">
                                @if ($user->is_admin)
                                @elseif (!$user->is_poster)
                                    <form action="{{ route('admin.update.poster', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-success btn-sm">Granted
                                            Editor</button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.delete.poster', $user->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-secondary btn-sm">Cease
                                            Editor</button>
                                    </form>
                                @endif
                                {{-- <a href="{{ route('users.edit', $user) }}"><button type="button"
                                    class="btn btn-dark btn-sm mx-2">Edit</button></a> --}}
                                    <form method="POST" action="{{ route('users.destroy', $user->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button 
                                            type="submit" 
                                            class="btn btn-danger btn-sm mx-2" 
                                            @if ($user->is_admin) disabled @endif>
                                            Delete
                                        </button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>
@endsection
