@extends('layouts.app')

@section('title')
    Questions - Brand
@endsection

@section('page-class')
    question-list-page
@endsection

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th>Question</th>
                <th>Date</th>
                <th>User</th>
                <th>Topic</th>
            </tr>
        </thead>
        <tbody>
        @foreach($questions as $question)
            <tr>
                <td>{{ $question->question_text }}</td>
                <td>{{ $question->created_at }}</td>
                <td>{{ $question->user->username }}</td>
                <td>{{ $question->topic->name }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
