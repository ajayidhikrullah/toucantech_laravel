@extends('layouts.master')

@section('title')
    Welcome to Toucan-Tech
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            @include('member.partials.members_table')
        </div>
    </div>
@endsection