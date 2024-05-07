<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateDetail;
use App\Models\Education;
use App\Models\EmploymentInformation;
use App\Models\Language;
use App\Models\Nationality;
use App\Models\Skill;
use Illuminate\Http\Request;
use PDF;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $candidateId = $request->id;
        $profileInfoLanguages = '';
        $profileInfo = CandidateDetail::where('candidate_id', $candidateId)->first();

        if ($profileInfo?->languages) {
            $language = Language::whereIn('id', $profileInfo?->languages)->pluck('name')->toArray();
            $profileInfoLanguages = implode(', ', $language);
        }

        if ($profileInfo?->nationality) {
            $profileInfo->nationality = Nationality::find($profileInfo->nationality)->value('name');
        }

        $candidate = Candidate::find($candidateId);

        $employmentInfo = EmploymentInformation::where('candidate_id', $candidateId)->first();

        $educationInfos = Education::where('candidate_id', $candidateId)->get();

        $skills = Skill::where('candidate_id', $candidateId)->first();

        if ($request->has('download')) {
            $view = view(
                'pdf.resume-pdf',
                compact(
                    'profileInfo',
                    'candidate',
                    'employmentInfo',
                    'educationInfos',
                    'skills',
                    'profileInfoLanguages'
                )
            );
            $html = $view->render();
            $pdf = PDF::loadHTML($html)->setOptions(['defaultFont' => 'sans-serif']);

            $pdf->output();
            $canvas = $pdf->getDomPDF()->getCanvas();
            $canvas->set_opacity(.1, 'Multiply');
            $canvas->set_opacity(.1);

            return $pdf->download($candidate->first_name . '_CV.pdf');
        }

        return view(
            'pdf.resume-pdf',
            compact('profileInfo', 'candidate', 'employmentInfo', 'educationInfos', 'skills')
        );
    }
}
