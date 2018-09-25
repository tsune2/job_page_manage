@extends('layouts.admin')

@section('content')
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">ダッシュボード</h6>
                </div>
            </div>
            <div class="my-3 p-3 bg-white rounded shadow-sm">
                <h6 class="border-bottom border-gray pb-2 mb-0">メインメニュー</h6>
                <div class="media text-muted pt-3">
                    <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                        <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
                        <strong class="d-block text-gray-dark">
                            <a href="{{ asset('admin/users') }}">ユーザー管理</a>
                        </strong>
                        APIトークンの発行やURLとの紐付け、メールアドレス・パスワード変更を行います。
                    </p>
                </div>
                <div class="media text-muted pt-3">
                    <p class="media-body mb-3 mb-0 small lh-125 border-bottom border-gyay">
                        <strong class="d-block text-gray-dark">
                            <a href="{{ asset('admin/jobs') }}">募集案件管理</a>
                        </strong>
                        新規募集案件の登録や、案件情報の編集・削除を行います。
                    </p>
                </div>
            </div>
@endsection
