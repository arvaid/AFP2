@extends('layouts.app', ['title' => 'Questions'])

@push('scripts')
    <script src="{{ asset('js/question-handler.js') }}" type="application/javascript"></script>
    <script type="application/javascript" defer>
        loadTopics("{{route('topic.index')}}")
        loadQuestionsFor("{{route('topic.show', ['topic' => $defaultTopic])}}")
    </script>
@endpush

@section('content')
    <?php
    use App\Models\Question;
    use Illuminate\Support\Str;
        /** @var Question[] $questions */
    ?>
    <section class="page container-fluid">
        <div class="row ml-1 pt-2 pt-md-3">
            <a href="{{route('question.create')}}" class="btn btn-outline-info"> New Question </a>
        </div>
        <div class="row mt-3">
            <div class="col-sm-auto" id="topicList">Test</div>
            <div class="col-sm" id="questionList">Test2</div>
        </div>
    </section>
@endsection
