<div class="card"><a id="{{$ans->id}}_id"></a>
    <div class="row col">
        <div class="col-md-1 m-auto d-none d-md-block align-content-center text-center">
            <div class="row">
                <div class="col">
                    <button id="inc_1" class="btn btn-success"
                            onclick="scoreModify('{{$ans->id}}', '{{ route('answer.score.increment', [$ans]) }}')">+
                    </button>
                </div>
            </div>
            <div class="row">
                <div class="col" id="{{ $ans->id }}_score">
                    {{ $ans->score }}
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button id="dec_1" class="btn btn-danger"
                            onclick="scoreModify('{{$ans->id}}', '{{ route('answer.score.decrement', [$ans]) }}')">-
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-11">
            <div class="row card-body m-1">
                {{ $ans->answer_text }}
            </div>
            <div class="row m-1 card-details">
                <div class="col-6 d-block d-md-none mb-3">
                    <button id="inc_2" class="btn btn-danger"
                            onclick="scoreModify('{{$ans->id}}', '{{ route('answer.score.increment', [$ans]) }}')">-
                    </button>
                    {{ $ans->score }}
                    <button id="dec_2" class="btn btn-success"
                            onclick="scoreModify('{{$ans->id}}', '{{ route('answer.score.decrement', [$ans]) }}')">+
                    </button>
                </div>
                <div class="d-none d-md-block col-md-8"></div>
                <div class="col-12 col-md-3">
                    <form action="{{ route('answer.destroy', [$ans]) }}" method="post" class="btn-group">
                        @csrf
                        @method('delete')
                        @if(Auth::user()?->id === $ans->user->id)
                            <a class="btn btn-block btn-warning mt-2" href="{{ route('answer.edit', [$ans]) }}">Edit</a>
                            <input type="submit" class="btn btn-block btn-danger" value="Delete"/>
                        @endif
                        <button type="button" class="btn btn-block btn-primary" onclick="copyToClipboard('{{ Request::url() }}/#{{$ans->id}}_id')">Share
                        </button>
                    </form>
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
