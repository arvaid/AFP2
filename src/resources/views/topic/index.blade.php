<main class="page question-list-page container-fluid border">
    <table >
        <thead>
        <tr>
            <th scope="col">Topic:</th>
        </tr>
        </thead>
        <tbody>
        @foreach($topics as $topic)
            <tr><td class="p-1"><button onclick="loadQuestionsFor('{{ $topic->id }}')" id="topic-{{$topic->id}}" class="btn-block btn-primary rounded pl-3 pr-3 pt-1 pb-1">{{ $topic->name }}</button></td></tr>
        @endforeach
        </tbody>
    </table>
</main>
