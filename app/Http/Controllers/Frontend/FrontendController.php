<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    /**
     * Retrieves the view for the index page of the frontend.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {

        // SELECT s.name, COALESCE(SUM(score/total/5*20*multiple_by), 0) as score 
        // FROM schools s
        // left JOIN school_scores ss on s.id = ss.school_id
        // group by s.id
        // ORDER by score desc;
        // count school score
        $schoolScores = DB::table('schools as s')
            ->leftJoin('school_scores as ss', function($join){
                $join->on('s.id', '=', 'ss.school_id')
                ->whereIn('ss.questionnaire_type_id', [1, 2, 3, 4]);
            })
            ->select('s.id', 's.name', DB::raw('COALESCE(SUM(ss.score / ss.total / 5 * 20 * ss.multiple_by), 0) as score'))
            ->groupBy(['s.id', 's.name'])
            ->orderBy('score', 'desc')
            ->get();

        $schoolAvg = DB::table('schools as s')
            ->leftJoin('school_scores as ss', function($join){
                $join->on('s.id', '=', 'ss.school_id')
                ->whereIn('ss.questionnaire_type_id', [1, 2, 3, 4]);
            })
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
                $yourSchoolScores->score_gap_with_avg = ($yourSchoolScores->score - $schoolAvg);
            }
        }

        $perfectiveBsc = DB::table('schools as s')
            ->leftJoin('school_scores as ss', 's.id', '=', 'ss.school_id')
            ->leftJoin('questionnairetypes as qt', 'ss.questionnaire_type_id', '=', 'qt.id')
            ->select('qt.name', 'qt.target', DB::raw('COALESCE(AVG(ss.score / ss.total / 5 * 20), 0) as score'))
            ->where('ss.score', '>', '0')
            ->whereIn('qt.id', [1, 2, 3, 4])
            ->groupBy(['ss.questionnaire_type_id', 'qt.name', 'qt.target'])
            ->orderBy('qt.id')
            ->get();

        $data = [
            'schoolScores' => $schoolScores,
            'schoolAvg' => $schoolAvg,
            'yourSchoolScores' => $yourSchoolScores,
            'perfectiveBsc' => $perfectiveBsc,
        ];

        // echo json_encode($data); exit;

        // return view('frontend.index');
        return view('frontend.questionnaire.dashboard', $data);
    }

    // public function index()
    // {
    //     // count all users
    //     $userCount = User::count();
    //     // count all users that registered one month ago
    //     $userCountMonth = User::where('created_at', '>=', now()->subMonth())->count();
    //     // count all users that registered one week ago
    //     // count user that has completed questionnaire
    //     $userCompleted = DB::selectOne("SELECT COUNT(DISTINCT u.id) AS completed_users
    //         FROM users AS u
    //         JOIN user_answers ua ON ua.user_id = u.id
    //         group by u.id")?->completed_users;

    //     $rawReport = DB::table('statements as s')
    //         ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
    //         ->join('respondenttypes as rt', 's.respondent_type_id', '=', 'rt.id')
    //         ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
    //         ->leftJoin('user_answers as ua', 'ua.statement_id', '=', 's.id')
    //         ->select([
    //             'rt.name as respondent',
    //             'qt.name as perspective',
    //             'qt.id as perspective_id',
    //             DB::raw('COUNT(ua.value) as total_answers'),
    //             DB::raw('AVG(ua.value) as average_value')
    //         ])
    //         ->groupBy('qt.id', 'rt.name', 'qt.name')
    //         ->get();
    //     // echo json_encode($data);exit;

    //     // [
    //     //     {
    //     //         respondent: "Siswa",
    //     //         perspective: "PERSPEKTIF KEUANGAN",
    //     //         perspective_id: 1,
    //     //         total_answers: 5,
    //     //         average_value: "3.0000"
    //     //     }
    //     // ]

    //     $totalScore = 0;
    //     foreach ($rawReport as $report) {
    //         $weights = [
    //             0,
    //             25,
    //             30,
    //             25,
    //             20
    //         ];
    //         $score = $report->total_answers;
    //         $weight = $weights[$report->perspective_id] ?? 0;
    //         $weightedScore = $score * ($weight / 100);
    //         $totalScore += $weightedScore;
    //     }        

    //     $data = [
    //         'userCount' => $userCount,
    //         'userCountMonth' => $userCountMonth,
    //         'userCompleted' => $userCompleted,
    //         'totalScore' => $totalScore,
    //     ];

    //     // return view('frontend.index');
    //     return view('frontend.questionnaire.dashboard', $data);
    // }

    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function privacy()
    {
        return view('frontend.privacy');
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function terms()
    {
        return view('frontend.terms');
    }
}
