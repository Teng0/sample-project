@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Question</div>

                    <div class="card-body">
                        <form action="/questionnarie/{{questionnarie->id}}/questions" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="question">Title</label>
                                <input name="question[question]" type="text" class="form-control" id="question" aria-describedby="titleHelp" placeholder="Enter question">
                                <small id="questionlHelp" class="form-text text-muted">Give question</small>

                                @error("question.question")
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>


                            <div class="form-group">
                              <fieldset>
                                  <leagend>Choices</leagend>
                                  <small id="choiceslHelp" class="form-text text-muted">Give question</small>
                                  <div>
                                      <div class="form-group">
                                          <label for="answer1">answer1</label>
                                          <input name="answers[answer]" type="text" class="form-control" id="answer1" aria-describedby="choiceslHelp" placeholder="Enter Choice 1">
                                          <small id="answer1Help" class="form-text text-muted">Give answer1</small>

                                          @error("answers.0.answer")
                                          <small class="text-danger">{{$message}}</small>
                                          @enderror
                                      </div>
                                  </div>
                                  <div>
                                      <div class="form-group">
                                          <label for="answer2">answer2</label>
                                          <input name="answers[answer]" type="text" class="form-control" id="answer2" aria-describedby="choiceslHelp" placeholder="Enter Choice 2">
                                          <small id="answer2Help" class="form-text text-muted">Give answer2</small>

                                          @error("answers.1.answer")
                                          <small class="text-danger">{{$message}}</small>
                                          @enderror
                                      </div>
                                  </div>
                                  <div>
                                      <div class="form-group">
                                          <label for="answer3">answer3</label>
                                          <input name="answers[answer]" type="text" class="form-control" id="answer3" aria-describedby="choiceslHelp" placeholder="Enter Choice 3">
                                          <small id="answer3Help" class="form-text text-muted">Give answer3</small>

                                          @error("answers.2.answer")
                                          <small class="text-danger">{{$message}}</small>
                                          @enderror
                                      </div>
                                  </div>
                                  <div>
                                      <div class="form-group">
                                          <label for="answer4">answer4</label>
                                          <input name="answers[answer]" type="text" class="form-control" id="answer4" aria-describedby="choiceslHelp" placeholder="Enter Choice 4">
                                          <small id="answer4Help" class="form-text text-muted">Give answer4</small>

                                          @error("answers.3.answer")
                                          <small class="text-danger">{{$message}}</small>
                                          @enderror
                                      </div>
                                  </div>
                              </fieldset>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Questionnarie</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
