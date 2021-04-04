<div class="card">
    <div class="row card-header m-1">
        <h2>{{ $question->question_title }}</h2>
    </div>
    <div class="row m-1 my-3 text-muted card-subtitle">
        <div class="col-md-6">
            <h6>Created at: {{ $question->created_at }}</h6>
        </div>
        <div class="col-md-6 text-md-right">
            <h6>Last activity: {{ $question->answers()->orderBy('updated_at')->first()->updated_at ?? $question->created_at }}</h6>
        </div>
    </div>
    <div class="row card-body m-1">
        {{ $question->question_text }}
    </div>
    <div class="row m-1 card-details">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-right">Asked by: <a href="#">{{ $question->user->username }}</a></div>
        <!-- TODO: link to user profile -->
    </div>
    @if(!($hideButtons ?? false))
        <div class="row m-1 card-details">
            <div class="col-12 col-md-2 p-0 pl-md-2">
                <a class="btn btn-success btn-block" href="{{ route('answer.create', [$question->id]) }}">Write an
                    Answer</a>
            </div>
            <div class="d-none d-md-block col-md-5"></div>
            <div class="col-12 col-md-5 p-0 pl-md-1 text-md-right">
                <form action="{{ route('question.destroy', [$question]) }}" method="post" class="btn-group text-md-right">
                    @csrf
                    @method('delete')
                    @if(Auth::user()?->id === $question->user->id)
                        <a class="btn btn-warning" href="{{ route('question.edit', [$question]) }}">Edit Question</a>
                        <input type="submit" class="btn btn-danger" value="Delete Question"/>
                    @endif
                    <button type="button" class="btn btn-primary" onclick="copyToClipboard('{{ Request::url() }}')">Share
                    </button>
                </form>
            </div>
        </div>
    @endif
</div>
