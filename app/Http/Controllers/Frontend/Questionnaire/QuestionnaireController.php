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
            ->leftJoin('user_answers as ua', function ($join) {
                $join->on('ua.statement_id', '=', 's.id')
                    ->where('ua.user_id', '=', auth()->id());
            })
            ->where('rt.id', auth()->user()->respondent_type_id)
            ->whereIn('s.questionnaire_type_id', array(1, 2, 3, 4))
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

        $applicationPerformanceQuestionnaire = DB::table('statements as s')
            ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
            ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
            ->leftJoin('user_answers as ua', function ($join) {
                $join->on('ua.statement_id', '=', 's.id')
                    ->where('ua.user_id', '=', auth()->id());
            })
            ->whereIn('s.questionnaire_type_id', array(5, 6))
            ->select([
                'q.id as questionnaire_id',
                'q.name as title',
                'qt.name as perspective',
                'qt.id as perspective_id',
                's.id as statement_id',
                's.statement',
                's.questionnaire_type_id',
                'ua.value'
            ])
            ->get();

        // echo json_encode([
        //     'questionnaires' => $data, 
        //     'applicationPerformanceQuestionnaire' => $applicationPerformanceQuestionnaire
        // ]); exit;
        return view('frontend.questionnaire.index', [
            'questionnaires' => $data,
            'applicationPerformanceQuestionnaire' => $applicationPerformanceQuestionnaire
        ]);
    }

    public function keuangan()
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

        return view('frontend.questionnaire.index', ['questionnaires' => $data]);
    }

    public function pelanggan()
    {
        $data = DB::table('statements as s')
            ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
            ->join('respondenttypes as rt', 's.respondent_type_id', '=', 'rt.id')
            ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
            ->leftJoin('user_answers as ua', 'ua.statement_id', '=', 's.id')
            ->where('s.questionnaire_type_id', '=', 2)
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

        return view('frontend.questionnaire.index', ['questionnaires' => $data]);
    }

    public function internal()
    {
        $data = DB::table('statements as s')
            ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
            ->join('respondenttypes as rt', 's.respondent_type_id', '=', 'rt.id')
            ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
            ->leftJoin('user_answers as ua', 'ua.statement_id', '=', 's.id')
            ->where('s.questionnaire_type_id', '=', 3)
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

        return view('frontend.questionnaire.index', ['questionnaires' => $data]);
    }

    public function pertumbuhan()
    {
        $data = DB::table('statements as s')
            ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
            ->join('respondenttypes as rt', 's.respondent_type_id', '=', 'rt.id')
            ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
            ->leftJoin('user_answers as ua', 'ua.statement_id', '=', 's.id')
            ->where('s.questionnaire_type_id', '=', 4)
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

        return view('frontend.questionnaire.index', ['questionnaires' => $data]);
    }

    public function answer(Request $request)
    {
        $data = $request->all();

        DB::beginTransaction();

        foreach ($data['answers'] as $questionnaire_id => $quiestionnaire) {
            foreach ($quiestionnaire as $questionnaire_type_id => $statement) {

                $type = DB::table('questionnairetypes')
                    ->where('id', $questionnaire_type_id)->first();

                if (!$type) {
                    DB::rollBack();
                    return false;
                }

                $count = DB::table('user_answers')
                    ->where('questionnaire_id', $questionnaire_id)
                    ->where('questionnaire_type_id', $questionnaire_type_id)
                    ->where('user_id', auth()->id())
                    ->where('year', now()->year)
                    ->where('semester', now()->month > 6 ? 1 : 2)
                    ->where('school_id', auth()->user()->school_id)
                    ->sum('value');

                $score = 0;
                foreach ($statement as $statement_id => $value) {
                    DB::table('user_answers')->updateOrInsert(
                        [
                            'statement_id' => $statement_id,
                            'questionnaire_id' => $questionnaire_id,
                            'questionnaire_type_id' => $questionnaire_type_id,
                            'user_id' => auth()->id(),
                            'year' => now()->year,
                            'semester' => now()->month > 6 ? 1 : 2,
                            'school_id' => auth()->user()->school_id
                        ],
                        ['value' => $value]
                    );
                    $score += $value;
                }

                $total = 0;
                if (!$count) {
                    $count = 0;
                    $total = 1;
                }

                $row = DB::table('school_scores')
                    ->where('school_id', auth()->user()->school_id)
                    ->where('questionnaire_type_id', $questionnaire_type_id)
                    ->where('year', now()->year)
                    ->where('semester', now()->month > 6 ? 1 : 2)
                    ->lockForUpdate()
                    ->first();

                if ($row) {
                    DB::table('school_scores')
                        ->where('school_id', auth()->user()->school_id)
                        ->where('questionnaire_type_id', $questionnaire_type_id)
                        ->where('year', now()->year)
                        ->where('semester', now()->month > 6 ? 1 : 2)
                        ->update([
                            'score' => DB::raw('score - ' . $count . '+' . $score),
                            'total' => DB::raw('total + ' . $total),
                            'updated_by' => auth()->id(),
                            'updated_at' => now()
                        ]);
                } else {
                    DB::table('school_scores')->insert([
                        'school_id' => auth()->user()->school_id,
                        'questionnaire_type_id' => $questionnaire_type_id,
                        'score' => $score,
                        'multiple_by' => $type->weight_value,
                        'total' => 1,
                        'semester' => now()->month > 6 ? 1 : 2,
                        'year' => now()->year,
                        'created_by' => auth()->id(),
                        'created_at' => now()
                    ]);
                }
            }
        }

        if (!empty($data['komentar'])) {

            DB::table('user_suggestion_and_questions')->updateOrInsert(
                [
                    'user_id' => auth()->id(),
                    'year' => now()->year,
                    'semester' => now()->month > 6 ? 1 : 2,
                    'school_id' => auth()->user()->school_id,
                ],
                ['value' => $data['komentar']]
            );
        }

        DB::commit();

        $count = DB::table('user_answers')
            ->where('questionnaire_id', $questionnaire_id)
            ->whereIn('questionnaire_type_id', [5, 6])
            ->where('user_id', auth()->id())
            ->where('year', now()->year)
            ->where('semester', now()->month > 6 ? 1 : 2)
            ->where('school_id', auth()->user()->school_id)
            ->sum('value');

        return response()->json([
            'status' => true,
            'message' => 'Jawaban berhasil disimpan',
            'count' => $count
        ]);
    }

    public function report()
    {

        $schoolScores = DB::table('schools as s')
            ->leftJoin('school_scores as ss', 's.id', '=', 'ss.school_id')
            ->select('s.id', 's.name', DB::raw('COALESCE(SUM(ss.score / ss.total / 5 * 20 * ss.multiple_by), 0) as score'))
            ->groupBy('s.id')
            ->orderBy('score', 'desc')
            ->get();

        $schoolAvg = DB::table('schools as s')
            ->leftJoin('school_scores as ss', 's.id', '=', 'ss.school_id')
            ->select(DB::raw('COALESCE(SUM(ss.score / ss.total / 5 * 20 * ss.multiple_by), 0) as score'))
            ->groupBy('s.id')
            ->get()
            ->filter(fn($item) => $item->score > 0)
            ->avg('score');

        $yourSchoolScores = null;
        if (auth()->check() && auth()->user()->school_id) {
            $yourSchoolScores = $schoolScores->firstWhere('id', auth()->user()->school_id);
            if ($yourSchoolScores) {
                $yourSchoolScores->position = $schoolScores->search(function ($item) use ($yourSchoolScores) {
                    return $item->id === $yourSchoolScores->id;
                }) + 1; // +1 for 1-based index
                $yourSchoolScores->score_gap_with_first_school = $schoolScores->first()->score - $yourSchoolScores->score;
                $yourSchoolScores->score_gap_with_avg = $schoolAvg - $yourSchoolScores->score * ($yourSchoolScores->score > $schoolAvg ? -1 : 1);
            }
        }

        $perfectiveBsc = DB::table('schools as s')
            ->leftJoin('school_scores as ss', 's.id', '=', 'ss.school_id')
            ->leftJoin('questionnairetypes as qt', 'ss.questionnaire_type_id', '=', 'qt.id')
            ->select('qt.name', 'qt.target', DB::raw('COALESCE(AVG(ss.score / ss.total / 5 * 20), 0) as score'))
            ->where('ss.score', '>', '0')
            ->where('qt.id', 'in', [1, 2, 3, 4])
            ->groupBy('ss.questionnaire_type_id')
            ->orderBy('qt.id')
            ->get();

        $data = [
            'schoolScores' => $schoolScores,
            'schoolAvg' => $schoolAvg,
            'yourSchoolScores' => $yourSchoolScores,
            'perfectiveBsc' => $perfectiveBsc,
        ];

        // echo json_encode($data); exit;
        return view('frontend.questionnaire.report', $data);
    }

    public function penilaian()
    {
        // $data = DB::table('statements as s')
        //     ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
        //     ->join('respondenttypes as rt', 's.respondent_type_id', '=', 'rt.id')
        //     ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
        //     ->leftJoin('user_answers as ua', 'ua.statement_id', '=', 's.id')
        //     ->select([
        //         'qt.name as perspective',
        //         'qt.id as perspective_id',
        //         DB::raw('COUNT(ua.value) as total_answers'),
        //         DB::raw('AVG(ua.value) * 20 as score')
        //     ])
        //     ->groupBy('qt.id', 'qt.name')
        //     ->get();

        $schoolScores = DB::table('school_scores as ss')
            ->leftJoin('questionnairetypes as qt', 'ss.questionnaire_type_id', '=', 'qt.id')
            ->select('qt.name as perspective_name', 'ss.total as total_respondent', 'qt.weight_value', DB::raw('(ss.score / ss.total / 5 * 20) as score '), 'ss.total')
            ->where('qt.id', 'in', [1, 2, 3, 4])
            ->orderBy('qt.id')
            ->get();

        // echo json_encode($schoolScores); exit;
        return view('frontend.questionnaire.penilaian', ['reports' => $schoolScores]);
    }
}
