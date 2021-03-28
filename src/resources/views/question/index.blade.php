@extends('layouts.app')

@push('scripts')
    <script src="{{ asset('js/question-handler.js') }}" type="application/javascript"></script>
    <script type="application/javascript" defer>
        loadTopics("{{route('topic.index')}}")
        loadQuestionsFor("{{ $defaultTopic }}", "{{route('topic.show', '')}}")
    </script>
@endpush

@section('title')
    Questions - Brand
@endsection

@section('main')
    <?php
    use App\Models\Question;
    use Illuminate\Support\Str;
        /** @var Question[] $questions */
    ?>
<main class="page question-list-page container-fluid">
    <div class="row mt-5">
        <div class="col-sm-auto" id="topicList">Test</div>
        <div class="col-sm" id="questionList">Test2</div>
    </div>
</main>
@endsection
