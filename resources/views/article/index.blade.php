@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Articles
                    </div>
                    <div class="card-header">
                        <a href="{{route('articles.create')}}" class="btn btn-primary">Create Article</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <tr>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Created By</th>
                            </tr>
                            @foreach ($articles as $article)
                                <tr>
                                    <td>{{$article->title}}</td>
                                    <td>{{$article->description}}</td> 
                                    <td>{{$article->user->name}}</td>
                                </tr>
                            @endforeach
                        </table>
                        <div>
                            {{$articles->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection