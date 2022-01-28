@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Users
                    </div>
                    {{-- <div class="card-header">
                        <a href="{{route('user.create')}}" class="btn btn-primary">Create Article</a>
                    </div> --}}
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Mutators</th>
                                <th>Created By</th>
                            </tr>
                            @foreach ($users as $user)
                                <tr>
                                    <td>{{$user->title}}</td>
                                    <td>{{$user->description}}</td> 
                                    <td>{{$user->titledescription}}</td>
                                    <td>{{$user}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div>
                            {{$users->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection