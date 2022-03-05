@extends('layouts.master')

@section('title')
    Welcome to ToucanTech - Create School
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <form action="{{ route('school.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleFormControlInput1">Name</label>
                    <input type="text" name="name" required class="form-control" id="exampleFormControlInput1" placeholder="Please enter a school name">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
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