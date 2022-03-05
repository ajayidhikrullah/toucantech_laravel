@extends('layouts.master')

@section('title')
    Welcome to ToucanTech
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            @include('member.partials.members_table')
        </div>
    </div>
@endsection