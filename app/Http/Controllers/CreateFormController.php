<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\Level;
use App\Models\jobcat2;
use App\Models\EduLevel;
use App\Models\Position;
use App\Models\Education;
use App\Models\experience;
use App\Models\JobCategory;
use Illuminate\Http\Request;
use App\Models\EducationType;

class CreateFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $level = Level::all();
        $form = Form::all();

        $edu_level = EduLevel::all();
        $job_category = JobCategory::all();

        $position = Position::join('categories', 'categories.id', '=', 'positions.category_id')
            ->where('categories.catstatus', 'active')->get();
        $jobcat2 = jobcat2::all();
        $edutype = EducationType::all();
        return view('try2', compact('level', 'edu_level', 'job_category', 'position', 'jobcat2', 'edutype', 'form'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'firstName' => 'required',
            'middleName' => 'required',
            'lastName' => 'required',
            'sex' => 'required',
            'email' => ['nullable', 'string', 'email', 'max:255',  'regex:/(.*)@wcu.edu.et/i'],

            'phone' => 'nullable',


            'positionofnow' => 'required',
            'ethinicity' => 'required',
            'birth_date' => 'nullable',
            'jobcat' => 'required',
            'level' => 'required',
            'disability'=>'required',
            'addMoreInputFields.*.startingDate' => 'date|nullable',
            'addMoreInputFields.*.endingDate' => 'date|after:starting_date|nullable',
            'addMoreInputFields.*.positionyouworked' => 'nullable',
            // 'UniversityHiringEra' => 'nullable',
            // 'servicPeriodAtUniversity' => 'nullable',
            // 'servicPeriodAtAnotherPlace' => 'nullable',
            // 'serviceBeforeDiplo' => 'nullable',
            // 'serviceAfterDiplo' => 'nullable',
            'resultOfrecentPerform' => 'required', 'regex:/^(?:d*.d{1,2}|d+)$/', 'min:1', 'max:100',
            'DisciplineFlaw' => 'required',
            'MoreRoles' => 'required',


        ]);

        $previousforms = Form::select('categories.id')
            ->join('positions', 'positions.id', '=', 'forms.position_id')
            ->join('categories', 'categories.id', '=', 'positions.category_id')

            ->where('email', $request->email)

            ->get();


        $category = Position::select('categories.id')->join('categories', 'category_id', 'categories.id')->where('positions.id', $request->position_id)->first();

        // foreach ($previousforms as $form) {
        //     if ($form->id == $category->id) {
        //         return  redirect()->back()->withErrors(['custom_email_error' => ' በዚህ ስራ መደብ መወዳደር አይችሉም'])->withInput();
        //     }
        // }






        $form =
            Form::create(
                [
                    'firstName' => $request->firstName,
                    'middleName' => $request->middleName,
                    'lastName' => $request->lastName,
                    // 'email' => $request->email,
                    'phone' => $request->phone,
                    'ethinicity' => $request->ethinicity,
                    'birth_date' => $request->birth_date,
                    'jobcat' => $request->jobcat,



                    'positionofnow' => $request->positionofnow,
                    // 'firstdergee' => $request->firstdergee,
                    'sex' => $request->sex,
                    'level' => $request->level,
                    // "UniversityHiringEra" => $request->UniversityHiringEra,
                    // "servicPeriodAtUniversity" => $request->servicPeriodAtUniversity,
                    // "servicPeriodAtAnotherPlace" => $request->servicPeriodAtAnotherPlace,
                    // "serviceBeforeDiplo" => $request->serviceBeforeDiplo,
                    // "serviceAfterDiplo" => $request->serviceAfterDiplo,
                    "resultOfrecentPerform" => $request->resultOfrecentPerform,
                    "DisciplineFlaw" => $request->DisciplineFlaw,
                    "MoreRoles" => $request->MoreRoles,
                    'registeredBy' =>auth()->user()->name,
                    'disability'=>$request->disability
                ]
            );


        foreach ($request->addMoreFields as $key => $val) {

            Education::create([
                "form_id" => $form->id,
                "discipline" => $val["discipline"],
                "level" => $val["level"],
                "completion_date" => $val["completion_date"],

            ]);
        }
        foreach ($request->addMoreInputFields as $key => $value) {
            experience::create([
                "form_id" => $form->id,
                "positionyouworked" => $value["positionyouworked"],
                "startingDate" => $value["startingDate"],
                "endingDate" => $value["endingDate"],
            ]);
        }

        // dd($form);
        //  return redirect('createform');
        return redirect('createform')->with('success', 'Form submitted successfully!')->with('fadeout', true);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
