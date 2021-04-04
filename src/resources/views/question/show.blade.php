@extends('layouts.app', ['title' => 'Question'])

@push('scripts')
    <script type="application/javascript">
        var csrf = '{{ csrf_token() }}'
    </script>
    <script type="application/javascript" src="{{ asset('js/answer_methods.js') }}"></script>
@endpush

@section('content')
    @php
        use App\Models\Question;
        use \Illuminate\Support\Facades\Auth;

        /** @var Question $question */
    @endphp
    <section class="page container-fluid">
        <div class="m-1 m-md-5">
            @include('components.partials.question-card')
            <div class="mt-3">
                <h4>Answers ({{ $question->answers()->count() }}):</h4>
            </div>
            <div>
                @foreach($question->answers()->orderByDesc('score')->get() as $ans)
                    @include('components.partials.answer-card')
                @endforeach
            </div>
        </div>
    </section>
@endsection
