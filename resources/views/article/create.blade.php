@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Articles
                    </div>
                    <div class="card-body">
                        <form action="{{route('articles.store')}}" method="post">
                            @csrf
                            <div>
                                <span>Title:</span>
                                <input type="text" name="title" class="form-control mt-2">
                            </div>
                            <div>
                                <span>Description:</span>
                                <input type="text" name="description" class="form-control">
                                <button type="submit" class="btn btn-primary mt-2">Save Article</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>    
        </div>    
    </div>    
@endsection