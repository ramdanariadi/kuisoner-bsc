<?php

namespace App\Http\Controllers\Frontend\Questionnaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Border;

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
                    ->where('ua.user_id', '=', auth()->user()->id);
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
                    ->where('ua.user_id', '=', auth()->user()->id);
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

        $countUserAnswer = DB::table('user_answers')
            ->whereIn('questionnaire_type_id', [1, 2, 3, 4])
            ->where('user_id', auth()->user()->id)
            ->where('year', now()->year)
            ->where('semester', now()->month > 6 ? 1 : 2)
            ->where('school_id', auth()->user()->school_id)
            ->sum('value');

        $countUserAnswer2 = DB::table('user_answers')
            ->whereIn('questionnaire_type_id', [5, 6])
            ->where('user_id', auth()->user()->id)
            ->where('year', now()->year)
            ->where('semester', now()->month > 6 ? 1 : 2)
            ->where('school_id', auth()->user()->school_id)
            ->sum('value');

        // echo json_encode([
        //     'questionnaires' => $data, 
        //     'applicationPerformanceQuestionnaire' => $applicationPerformanceQuestionnaire
        // ]); exit;
        return view('frontend.questionnaire.index', [
            'questionnaires' => $data,
            'applicationPerformanceQuestionnaire' => $applicationPerformanceQuestionnaire,
            'alreadyAttemptQuestionnaire' => $countUserAnswer > 0,
            'alreadyAttemptQuestionnaireAppPerformance' => $countUserAnswer2 > 0
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
                    ->where('user_id', auth()->user()->id)
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
                            'user_id' => auth()->user()->id,
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
                            'updated_by' => auth()->user()->id,
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
                        'created_by' => auth()->user()->id,
                        'created_at' => now()
                    ]);
                }
            }
        }

        if (!empty($data['komentar'])) {

            DB::table('user_suggestion_and_questions')->updateOrInsert(
                [
                    'user_id' => auth()->user()->id,
                    'year' => now()->year,
                    'semester' => now()->month > 6 ? 1 : 2,
                    'school_id' => auth()->user()->school_id,
                ],
                ['value' => $data['komentar']]
            );
        }

        DB::commit();

        $count = DB::table('user_answers')
            ->whereIn('questionnaire_type_id', [5, 6])
            ->where('user_id', auth()->user()->id)
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

    public function getRawAnswer(array $questionnaire_type_id)
    {
        $data = DB::table('user_answers as ua')
            ->join('users as u', 'ua.user_id', '=', 'u.id')
            ->leftJoin('statements as s', 'ua.statement_id', '=', 's.id')
            ->join('questionnairetypes as qt', 's.questionnaire_type_id', '=', 'qt.id')
            ->leftJoin('respondenttypes as rt', DB::raw('COALESCE(s.respondent_type_id, u.respondent_type_id)'), '=', 'rt.id')
            ->join('questionnaires as q', 's.questionnaire_id', '=', 'q.id')
            ->whereIn('s.questionnaire_type_id', $questionnaire_type_id)
            ->select([
                'u.id as user_id',
                'u.name as nama',
                'u.school_name',
                'rt.name as respondent',
                'qt.name as perspective',
                'q.id as questionnaire_id',
                'q.name as title',
                'qt.id as perspective_id',
                's.id as statement_id',
                's.statement',
                'ua.value'
            ])
            ->orderBy('u.school_id', 'ASC')
            ->orderBy('ua.user_id', 'DESC')
            ->orderBy('s.id', 'ASC')
            ->get();
        return $data;
    }

    public function rawReport(Request $request)
    {
        $header_style = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ]
            ],
            'font' => [
                'name' => 'Arial',
                'bold' => true,
                'size' => 10
            ],
            'alignment' => [
                'vertical' => Alignment::VERTICAL_CENTER,
                'horizontal' => Alignment::HORIZONTAL_CENTER,
            ],
        ];

        $body_style = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => Border::BORDER_THIN,
                ]
            ],
            'font' => [
                'name' => 'Arial',
                'bold' => false,
                'size' => 10
            ],
        ];

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Laporan BSC');

        $sheet->setCellValue('A1', 'Nama');
        $sheet->setCellValue('B1', 'Sekolah');
        $sheet->setCellValue('C1', 'Tipe Respondent');
        $sheet->setCellValue('D1', 'A1');
        $sheet->setCellValue('E1', 'A2');
        $sheet->setCellValue('F1', 'A3');
        $sheet->setCellValue('G1', 'A4');
        $sheet->setCellValue('H1', 'A5');
        $sheet->setCellValue('I1', 'B6');
        $sheet->setCellValue('J1', 'B7');
        $sheet->setCellValue('K1', 'B8');
        $sheet->setCellValue('L1', 'B9');
        $sheet->setCellValue('M1', 'B10');
        $sheet->setCellValue('N1', 'C11');
        $sheet->setCellValue('O1', 'C12');
        $sheet->setCellValue('P1', 'C13');
        $sheet->setCellValue('Q1', 'C14');
        $sheet->setCellValue('R1', 'C15');
        $sheet->setCellValue('S1', 'D16');
        $sheet->setCellValue('T1', 'D17');
        $sheet->setCellValue('U1', 'D18');
        $sheet->setCellValue('V1', 'D19');
        $sheet->setCellValue('W1', 'D20');
        $sheet->getStyle('A1:W1')->applyFromArray($header_style);

        $dataBSC = $this->getRawAnswer([1, 2, 3, 4]);
        $alphabet = range('A', 'Z');
        $row = 1;
        $column = 0;
        $currentUser = null;
        foreach ($dataBSC as $key => $data) {

            if ($currentUser != $data->user_id) {
                $row++;
                $column = 0;
                $currentUser = $data->user_id;
            }

            if ($column < 4) {
                $sheet->setCellValue($alphabet[$column++] . '' . $row, $data->nama);
                $sheet->setCellValue($alphabet[$column++] . '' . $row, $data->school_name);
                $sheet->setCellValue($alphabet[$column++] . '' . $row, $data->respondent);
                $sheet->setCellValue($alphabet[$column++] . '' . $row, $data->value);
            } else {
                $sheet->setCellValue($alphabet[$column++] . '' . $row, $data->value);
            }
        }
        if($column > 0){
            $sheet->getStyle('A2:'.$alphabet[$column - 1].($row))->applyFromArray($body_style);
        }

        // Create a App experience sheet
        $sheet2 = $spreadsheet->createSheet();
        $sheet2->setTitle('SUS');

        $sheet2->setCellValue('A1', 'Nama');
        $sheet2->setCellValue('B1', 'Sekolah');
        $sheet2->setCellValue('C1', 'Tipe Respondent');
        $sheet2->setCellValue('D1', 'A1');
        $sheet2->setCellValue('E1', 'A2');
        $sheet2->setCellValue('F1', 'A3');
        $sheet2->setCellValue('G1', 'A4');
        $sheet2->setCellValue('H1', 'A5');
        $sheet2->setCellValue('I1', 'B6');
        $sheet2->setCellValue('J1', 'B7');
        $sheet2->setCellValue('K1', 'B8');
        $sheet2->setCellValue('L1', 'B9');
        $sheet2->setCellValue('M1', 'B10');
        $sheet2->setCellValue('N1', 'C11');
        $sheet2->setCellValue('O1', 'C12');
        $sheet2->setCellValue('P1', 'C13');
        $sheet2->setCellValue('Q1', 'C14');
        $sheet2->setCellValue('R1', 'C15');
        $sheet2->setCellValue('S1', 'D16');
        $sheet2->setCellValue('T1', 'D17');
        $sheet2->setCellValue('U1', 'D18');
        $sheet2->getStyle('A1:U1')->applyFromArray($header_style);

        $dataBSC = $this->getRawAnswer([5,6]);
        $row = 1;
        $column = 0;
        $currentUser = null;
        foreach ($dataBSC as $key => $data) {

            if ($currentUser != $data->user_id) {
                $row++;
                $column = 0;
                $currentUser = $data->user_id;
            }

            if ($column < 4) {
                $sheet2->setCellValue($alphabet[$column++] . '' . $row, $data->nama);
                $sheet2->setCellValue($alphabet[$column++] . '' . $row, $data->school_name);
                $sheet2->setCellValue($alphabet[$column++] . '' . $row, $data->respondent);
                $sheet2->setCellValue($alphabet[$column++] . '' . $row, $data->value);
            } else {
                $sheet2->setCellValue($alphabet[$column++] . '' . $row, $data->value);
            }
        }
        if($column > 0) {
            $sheet2->getStyle('A2:'.$alphabet[$column - 1].($row))->applyFromArray($body_style);
        }

        $writer = new Xlsx($spreadsheet);
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename=raw-data.xlsx');
        header('Cache-Control: max-age=0');
        $writer->save('php://output');
    }

    public function report(Request $request)
    {

        $schoolScores = DB::table('schools as s')
            ->leftJoin('school_scores as ss', 's.id', '=', 'ss.school_id')
            ->select('s.id', 's.name', DB::raw('COALESCE(SUM(ss.score / ss.total / 5 * 20 * ss.multiple_by), 0) as score'));

        if (!auth()->user()->hasRole('super admin')) {
            $schoolScores = $schoolScores->where('s.id', auth()->user()->school_id);
        }


        $schoolScores = $schoolScores->groupBy('s.id')
            ->orderBy('score', 'desc')
            ->get();

        $schoolAvg = DB::table('schools as s')
            ->leftJoin('school_scores as ss', 's.id', '=', 'ss.school_id')
            ->select(DB::raw('COALESCE(SUM(ss.score / ss.total / 5 * 20 * ss.multiple_by), 0) as score'))
            ->groupBy('s.id')
            ->get()
            ->filter(fn($item) => $item->score > 0)
            ->avg('score');

        $school_id = $request->query('school_id');
        $school_id = $school_id ?? auth()->user()->school_id;

        $yourSchoolScores = null;
        if (auth()->check() && $school_id) {
            $yourSchoolScores = $schoolScores->firstWhere('id', $school_id);
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
            ->whereIn('qt.id', [1, 2, 3, 4]);

        if (!auth()->user()->hasRole('super admin')) {
            $perfectiveBsc = $perfectiveBsc->where('s.id', auth()->user()->school_id);
        } else if (!empty($school_id)) {
            $perfectiveBsc = $perfectiveBsc->where('s.id', $school_id);
        }

        $perfectiveBsc = $perfectiveBsc
            ->whereIn('qt.id', [1, 2, 3, 4])
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
            ->whereIn('qt.id', [1, 2, 3, 4])
            ->orderBy('qt.id')
            ->get();

        // echo json_encode($schoolScores); exit;
        return view('frontend.questionnaire.penilaian', ['reports' => $schoolScores]);
    }
}
