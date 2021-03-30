@if(count($topic->questions) < 1)
    <div class="alert alert-warning">No questions here</div>
@else
    @foreach($topic->questions as $question)
        <div class="card mr-3 ml-3 mb-4 mt-2">
            <div class="card-header"><h5>{{ $question->question_title }}</h5></div>
            <div class="card-body">{{ Str::limit($question->question_text, 200) }}</div>
            <div class="card-subtitle ml-3"><span class="text-muted">{{ $question->created_at }}</span> </div>
            <div class="card-linwebk"><a href="{{ route('question.show', $question) }}" class="btn btn-primary m-2">Show more >></a></div>
        </div>
    @endforeach
@endif

