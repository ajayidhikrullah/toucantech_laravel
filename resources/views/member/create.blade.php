@extends('layouts.master')

@section('title')
    Welcome to ToucanTech - Create Member
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            {{-- FORM FOR CREATING SCHOOLS --}}
            <form action="{{ route('member.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="fullname" class="form-control" value="{{ old('fullname') }}" id="exampleFormControlInput1" placeholder="Please enter your name">
                    @if ($errors->has('fullname'))
                        <span class="text-danger">{{ $errors->first('fullname') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email Address</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="exampleFormControlInput1" placeholder="yourname@domain.com">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Select School</label>
                    <select value="{{ old('school_id') }}" name="school_id" class="form-control" id="exampleFormControlSelect1">
                        <option value="">Select School</option>
                        @foreach ($schools as $school)
                            <option value="{{ $school->id }}">{{ $school->name }}</option>
                        @endforeach
                    </select>
                    @if ($errors->has('school_id'))
                        <span class="text-danger">{{ $errors->first('school_id') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary">Submit</button>
                </div>
          </form>
        </div>
    </div>
    {{-- School form --}}
@endsection