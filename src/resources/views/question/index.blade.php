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

@section('page-class')
    question-list-page
@endsection

@section('content')
    <?php
    use App\Models\Question;
    use Illuminate\Support\Str;
        /** @var Question[] $questions */
    ?>
<section class="page container-fluid">
    <div class="row mt-5">
        <div class="col-sm-auto" id="topicList">Test</div>
        <div class="col-sm" id="questionList">Test2</div>
    </div>
</section>
@endsection
