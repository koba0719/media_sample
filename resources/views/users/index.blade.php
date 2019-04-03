@extends('layouts.app')
@section('content')
    <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">ユーザー一覧</h6>

        @foreach($users as $user)
            <div class="media text-muted pt-3">
                <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        <strong class="text-gray-dark">{{ $user->email }}</strong>
                        <div class="d-flex ">
                            {{-- Admin以外は自分以外のデータを編集削除できない --}}
                            @if(!Auth::user()->is_admin)
                                @if($user->id === Auth::user()->id)
                                    <button class="btn-primary" onclick="location.href='user/{{ $user->id }}/edit'">編集</button>

                                    <form action="{{ url('user/'.$user->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn-danger">削除</button>
                                    </form>
                                @endif
                            @else
                                <button class="btn-primary" onclick="location.href='user/{{ $user->id }}/edit'">編集</button>

                                <form action="{{ url('user/'.$user->id) }}" method="post">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn-danger">削除</button>
                                </form>
                            @endif
                        </div>
                    </div>
                    <span class="d-block">{{ $user->name }}</span>
                </div>
            </div>
        @endforeach
        {{ $users->links() }}
    </div>
@endsection
