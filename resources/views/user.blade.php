@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>Job Detail</h1>
                </div>
                <div class="card-body">
                    <div id="job-datail">
                        <job-datail-component></job-datail-component>
                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
                <script src="{{ mix('js/app.js') }}"></script>
            </div>
        </div>
    </div>
</div>
@endsection
