@extends('layouts.app', ['title' => 'Question'])

@section('content')
    @php
        use App\Models\Question;
        use \Illuminate\Support\Facades\Auth;

        /** @var Question $question */
        $answers = $question->answers();
    @endphp
    <section class="page container-fluid">
        <div class="m-1 m-md-5">
            <div class="card">
                <div class="row card-header m-1">
                    <h2>{{ $question->question_title }}</h2>
                </div>
                <div class="row m-1 my-3 text-muted card-subtitle">
                    <div class="col-md-6">
                        <h6>Created at: {{ $question->created_at }}</h6>
                    </div>
                    <div class="col-md-6 text-md-right">
                        <h6>Last activity: {{ $answers->orderBy('updated_at')->first()->updated_at ?? $question->created_at }}</h6>
                    </div>
                </div>
                <div class="row card-body m-1">
                    {{ $question->question_text }}
                </div>
                <div class="row m-1 card-details">
                    <div class="col-md-6"></div>
                    <div class="col-md-6 text-right">Asked by: <a href="#">{{ $question->user->username }}</a></div> <!-- TODO: link to user profile -->
                </div>
                <div class="row m-1 card-details">
                    <div class="col-6 col-md-2 p-0 pl-md-2">
                        <a class="btn btn-success btn-block" href="{{ route('answer.create', [$question->id]) }}">Write an Answer</a>
                    </div>
                    <div class="d-none d-md-block col-md-6"></div>
                    <div class="col-6 col-md-2 text-right p-0">
                        <button class="btn btn-block btn-primary">Share</button>
                    </div>
                    <div class="col-12 col-md-2 text-md-right p-0 pl-md-1">
                        @if(Auth::user()?->id === $question->user->id)
                            <a class="btn btn-block btn-warning" href="{{ route('question.edit', [$question]) }}">Edit Question</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="mt-3">
                <h4>Answers ({{ $question->answers()->count() }}):</h4>
            </div>
            <div>
                @foreach($answers->orderBy('score', 'desc')->get() as $ans)
                    <div class="card">
                        <div class="row col">
                            <div class="col-md-1 m-auto d-none d-md-block align-content-center text-center">
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-success" onclick="scoreIncrement('{{$ans->id}}')">+</button>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        {{ $ans->score }}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-danger" onclick="scoreDecrement('{{$ans->id}}')">-</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-11">
                                <div class="row card-body m-1">
                                    {{ $ans->answer_text }}
                                </div>
                                <div class="row m-1 card-details">
                                    <div class="col-6 d-block d-md-none mb-3">
                                        <button class="btn btn-danger" onclick="scoreDecrement('{{$ans->id}}')">-</button>
                                        {{ $ans->score }}
                                        <button class="btn btn-success" onclick="scoreIncrement('{{$ans->id}}')">+</button>
                                    </div>
                                    <div class="col-6 col-md text-md-right">
                                        <button class="btn btn-primary">Share</button>
                                    </div>
                                </div>
                                <div class="row m-1 my-3 text-muted card-subtitle">
                                    <div class="col-md-6">
                                        <h6>Created at: {{ $ans->created_at }}</h6>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        Answered by: <a href="#">{{ $ans->user->username }}</a>
                                    </div> <!-- TODO: link to user profile -->
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
