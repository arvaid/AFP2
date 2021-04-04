@extends('layouts.app', ['title' => 'Answer Question'])

<?php
$isUpdate = isset($answer)
?>

@push('beforePageLoads')
    <script src="https://cdn.tiny.cloud/1/3jaiexnly731ggors3gs8kyqi5bhnkvu8ztjtv9684h70rut/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tiny-mce.config.js') }}"></script>
    <script type="application/javascript" defer> richText('answer_text') </script>
@endpush

@section('content')
    @php
        use App\Models\Answer;
        use App\Models\Question;
        use \Illuminate\Support\Facades\Auth;

        /**
        * @var Question $question
        * @var Answer|null $answer
        */
    @endphp
    <section class="page container-fluid">
        <div class="m-1 m-md-5">
            @include('components.partials.question-card', ['hideButtons' => true])
            <div class="card mt-3">
                <div class="card-header">
                    <h5>Your Answer:</h5>
                </div>
                <div class="card-body">
                    <form action="{{ $isUpdate ? route('answer.update', $question) : route('answer.store') }}"
                          method="post" class="">
                        @csrf
                        @if($isUpdate)
                            @method('put')
                        @endif
                        <div class="row p-1">
                            <div class="form-group col">
                                <label for="answer_text" class="h4 d-none">Text:</label>
                                <textarea name="answer_text" id="answer_text"
                                          class="form-control @error('answer_text') is-invalid @enderror">
                            {{ $isUpdate ? $answer->answer_text : old('answer_text') }}
                        </textarea>
                                @error('answer_text')
                                <div class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <input type="submit" value="Submit" class="btn btn-primary m-3">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
