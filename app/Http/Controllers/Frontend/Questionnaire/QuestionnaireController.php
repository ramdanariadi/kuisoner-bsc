<?php

namespace App\Http\Controllers\Frontend\Questionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class QuestionnaireController extends Controller
{
    public function index()
    {

        $data = DB::table('statements as s')
            ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
            ->join('respondenttypes as rt', 's.respondent_type_id', '=', 'rt.id')
            ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
            ->leftJoin('user_answers as ua', 'ua.statement_id', '=', 's.id')
            ->where('s.questionnaire_type_id', '=', 1)
            ->select([
                'q.id as questionnaire_id',
                'q.name as title',
                'rt.name as respondent',
                'qt.name as perspective',
                'qt.id as perspective_id',
                's.id as statement_id',
                's.statement',
                'ua.value'
            ])
            ->get();

        return view('frontend.questionnaire.keuangan', ['questionnaires' => $data]);
    }

    public function answer(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'questionnaire_id' => 'required|integer',
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => false,
                'message' => 'Invalid questionnaire ID.'
            ], 200);
        }

        $data = $request->all();

        foreach ($data['answers'] as $questionnaire_type_id => $statement) {
            foreach ($statement as $statement_id => $value) {
                DB::table('user_answers')->updateOrInsert(
                    ['statement_id' => $statement_id, 'questionnaire_id' => $data['questionnaire_id'], 'questionnaire_type_id' => $questionnaire_type_id, 'user_id' => auth()->id()],
                    ['value' => $value]
                );
            }
        }

        // return redirect()->route('frontend.questionnaire')->with('success', 'Jawaban berhasil disimpan.');
    }
}
