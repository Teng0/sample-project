@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Questionnarie</div>

                    <div class="card-body">
                        <form action="/questionnarie/store" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input name="title" type="text" class="form-control" id="title" aria-describedby="titleHelp" placeholder="Enter Title">
                                <small id="titlelHelp" class="form-text text-muted">Give Your Questionnarie a Title</small>

                                @error("title")
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="purpose">Title</label>
                                <input name="purpose" type="text" class="form-control" id="purpose" aria-describedby="purposeHelp" placeholder="Enter purpouse">
                                <small id="purposeHelp" class="form-text text-muted">Give Your Questionnarie purpouse</small>
                                @error("purpouse")
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary">Save Questionnarie</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
