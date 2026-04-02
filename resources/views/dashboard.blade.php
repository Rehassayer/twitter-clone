@extends('layout.layout')
@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-3">
                @include('shared.left-sidebar')
            </div>
            <div class="col-6">
                @include('shared.sucess-message')
                @include('shared.submit_idea')
                <hr>
                @foreach ($ideas as $Idea)
                    <div class="mt-3">
                        @include('shared.idea-card')
                    </div>
                @endforeach
                <div class="mt-5">
                    {{ $ideas->links()}}
                </div>
            </div>
            <div class="col-3">
                @include('shared.search-bar')
                @include('shared.follow-box')

            </div>
        </div>
@endsection