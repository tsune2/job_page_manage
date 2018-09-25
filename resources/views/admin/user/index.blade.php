@extends('layouts.admin')

@section('content')
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                <div class="lh-100">
                    <h6 class="mb-0 text-white lh-100">ユーザー管理</h6>
                </div>
            </div>
            <router-view></router-view>
@endsection
