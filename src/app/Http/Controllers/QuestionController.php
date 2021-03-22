<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Topic;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view_params = [
          'questions' => Question::all()
        ];

        return view('question.index', $view_params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('question.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules =  array(
            'question_text' => 'required'
        );

        $validated = $request->validate($rules);

        if (!$validated) {
            return redirect('question.create');
        }
        else {
            $question = new Question();
            $question->question_text = $request->input('question_text');
            $question->topic = Topic::all()->where('name', $request->input('topic'));
            $question->user = Auth::user();

            $question->save();
        }

        return redirect('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        $view_params = [
            'question' => $question
        ];

        return view('question.show', $view_params);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        $view_params = [
            'question' => $question
        ];

        return view('question.edit', $view_params);

        //Javaslat külsőstől: a view_params változó létrehozása egy plusz memória művelet. Ez egy embernél nem sok, de 1000 user-nél 1000× kell megcsinálni. Javaslom inline hozd létre, ha csak lehet:
        //return view('question.edit', ['question' => $question]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        $question->delete();
        return redirect('question');
    }
}
