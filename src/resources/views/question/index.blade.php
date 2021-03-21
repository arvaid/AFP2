@extends('layouts.app')

@section('title')
    Questions - Brand
@endsection

@section('main')
<main class="page question-list-page">
    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
            </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->question_text }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</main>
@endsection
