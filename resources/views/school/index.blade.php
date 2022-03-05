@extends('layouts.master')

@section('title')
    Welcome to ToucanTech - Schools
@endsection

@section('content')
    <div class="row">
        <div class="col-6">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">S/N</th>
                    <th scope="col">Name</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($schools as $school)
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>
                            <a href="{{ route('school.members', $school->id) }}">{{ $school->name }}</a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </div>
@endsection