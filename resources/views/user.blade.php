@extends('layouts.app')

@section('content')
            <div class="d-flex align-items-center p-3 my-3 text-white-50 bg-purple rounded shadow-sm">
                <h6></h6>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">
                                <h1>Job Detail</h1>
                            </div>
                            <div class="card-body">
                                <div id="app">
                                    <router-view></router-view>
                                </div>
                            </div>
                            <script src="{{ mix('js/app.js') }}"></script>
                        </div>
                    </div>
                </div>
            </div>
@endsection
