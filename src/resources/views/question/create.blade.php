<?php
    $isUpdate = isset($question)
?>

@extends('layouts.app')

@section('title')
    Ask a new question - Brand
@endsection

@section('page-class')
    question-create-page
@endsection

@push('beforePageLoads')
    <script src="https://cdn.tiny.cloud/1/3jaiexnly731ggors3gs8kyqi5bhnkvu8ztjtv9684h70rut/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script src="{{ asset('js/tiny-mce.config.js') }}" defer></script>
@endpush

@section('content')
    <section class="page container-fluid">
        <form action="{{ $isUpdate ? route('question.update', $question) : route('question.create') }}" method="post" class="card m-2 p-2 m-md-5 p-md-5">
            @csrf
            @if($isUpdate)
                @method('put')
            @endif
            <div class="row">
                <div class="form-group col-sm-8">
                    <label for="question_title" class="h4">Title:</label>
                    <input type="text" name="question_title" id="question_title"
                           class="form-control @error('question_title') is-invalid @enderror"
                           value="{{ $isUpdate ? $question->question_title : old('question_title') }}" required/>
                    @error('question_title')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group col-sm-4">
                    <label for="question_topic" class="h4">Topic:</label>
                    <input list="topic_list" name="question_topic" id="question_topic"
                           class="form-control @error('question_topic') is-invalid @enderror"
                           value="{{ $isUpdate ? $question->topic->name : old('question_topic') }}" required/>
                    @error('question_topic')
                    <div class="invalid-feedback" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <datalist id="topic_list">
                        @foreach($topics as $topic)
                            <option value="{{$topic->name}}"></option>
                        @endforeach
                    </datalist>
                </div>
                <div class="row p-3">
                    <div class="form-group col">
                        <label for="question_text" class="h4">Text:</label>
                        <textarea name="question_text" id="question_text"
                               class="form-control @error('question_text') is-invalid @enderror">
                            {{ $isUpdate ? $question->topic->name : old('question_text') }}
                        </textarea>
                        @error('question_text')
                        <div class="invalid-feedback" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="btn btn-primary m-3">
            </div>
        </form>
    </section>
@endsection
