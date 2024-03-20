@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <section class="hk-sec-wrapper">

                    <div class="pull-right">
                        <a class="btn btn-dark" href="{{ url('result-choice1') }}"> Back</a>
                    </div>



                    <h5 class="hk-sec-title"> የመመዘኛ መስፈርቶች ከቡድን መሪ በላይ
                    </h5>
                    <div class="row">

                        <div class="col-sm">

                            <div class="row">
                                <div class="col-md-6">

                                    <div class="table-wrap mb-20">
                                        <div class="table-responsive">

                                            <table class="table table-active table-bordered mb-0">
                                                <thead class="thead-active">
                                                    <tr>
                                                        <th>ተ.ቁ</th>
                                                        <th>የመመዘኛ መስፈርቶች</th>


                                                        <th>የ ማወዳደርያ ነጥብ(35%)</th>


                                                    </tr>
                                                </thead>

                                                <tbody>

                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ ነጥብ </td>
                                                        <td>

                                                            <button class="btn bg-blue-dark-4 text-white" type="button"
                                                                data-toggle="collapse" data-target="#collapseExamplepres"
                                                                aria-expanded="false" aria-controls="collapseExample">
                                                                35
                                                            </button>
                                                        </td>

                                                    </tr>



                                                </tbody>

                                            </table>

                                        </div>
                                    </div>


                                </div>






                                <div class="col-md-6 ">





                                    <div class="collapse" id="collapseExamplepres">
                                        <div class="card card-body">

                                            <div class="table-wrap mb-20 ">
                                                <div class="table-responsive">
                                                    <table class="table table-active table-bordered mb-0">
                                                        <thead class="thead-active">
                                                            <tr>
                                                                <th>ተ.ቁ</th>

                                                                <th>የማወዳደሪያ መስፈርት</th>
                                                                <th>ነጥብ
                                                                    ክብደት</th>

                                                            </tr>
                                                        </thead>

                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>

                                                                <td>የመንግስትን ሀብት በቁጠባ መጠቀም፣ ታማኝነትና ቅንነት

                                                                    መላበስ</td>
                                                                <td>
                                                                    5
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>በወቅቱ ተገቢነት ያለው ውሳኔ መስጠት </td>
                                                                <td>5</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>የሴክተሩን ፖሊሲ፣ ስትራቴጂና ፕሮግራሞችን ከተቋሙ ራእይና
                                                                    ተልእኮ ጋር በማቀናጀት ለስኬት የራሱን ድርሻ ለመወጣት በቂግንዛቤ የያዘና ሌላውን
                                                                    ለማስገንዘብ
                                                                    የሚተጋ </td>
                                                                <td>5</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>ተጨማሪ ተልእኮ ወስዶ የመፈፀምና በወቅቱ የማቅረብ ብቃት፣

                                                                    ቁርጠኝነትና ከፍተኛ የተነሳሽነት ስሜት መኖር

                                                                </td>
                                                                <td>5</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">5</th>
                                                                <td>የአመራር ብቃት ፣ የተግባቦት ብቃት ፣ የዕቅድ ዝግጅት ጥራት
                                                                    ፣የሪፖርት ዝግጀት ጥራት፣፤ በውስጡ ያሉ ሰራተኞችን

                                                                    የመምራት ብቃት፣ ሁልጊዜ ከሰራተኞች ጋር አብሮ የመስራት</td>
                                                                <td>5</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">6</th>
                                                                <td> የኢንፎርሜሽን ኮሙኒኬሽን ቴከኖሎጂን በብቃት ለስራ ።

                                                                    መጠቀም </td>
                                                                <td>5</td>

                                                            </tr>
                                                            <tr>
                                                                <th scope="row">7</th>
                                                                <td> ለማህደር ጥራት የሚሰጥ ነጥብ</td>
                                                                <td>5</td>

                                                            </tr>

                                                        </tbody>

                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>














                                </div>
                            </div>

                            <form action="{{ route('addPresidentPost', $id) }}" method="POST" id="add_evaluation">
                                @csrf

                                <div class="row">
                                    {{-- <div class="col-md-6"> --}}


                                    <div class="col-sm">
                                        <div class="table-wrap">
                                            <div class="table-responsive">
                                                <table class="table table-sm table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>

                                                            <th>ሙሉ ስም</th>
                                                            <th>ጾታ</th>
                                                            <th>የሚወዳደሩበት የስራ መደብ</th>
                                                            <th>አሁን ያሉበት የትምህርት ደረጃና ዝግጅት</th>

                                                            <th> የስራ ልምድዎ </th>
                                                            <th>የሁለት ተከታታይ የስራ አፈጻጸም አማካይ ውጤት</th>
                                                            <th>ተጨማሪ ይመልከቱ</th>




                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                        <tr>

                                                            <td>{{ $form->form->full_name }}
                                                            </td>
                                                            <td>{{ $form->form->sex }}</td>
                                                            <td>{{ $form->form->position->position }}</td>

                                                            <td>
                                                                @foreach ($edu as $type)
                                                                    ({{ $type->level }},
                                                                    {{ $type->discipline}},{{ $type->completion_date }})
                                                                    ,
                                                                @endforeach

                                                            </td>




                                                            <td>
                                                                @foreach ($forms as $fo)
                                                                    <?php

                                                                    $fdate = Carbon::parse($fo->startingDate);

                                                                    $tdate = Carbon::parse($fo->endingDate);

                                                                    // $years = $tdate - $fdate;
                                                                    $days = $tdate->diffInDays($fdate);
                                                                    $months = $tdate->diffInMonths($fdate);

                                                                    $years = $tdate->diffInYears($fdate);
                                                                    // dd($fdate->diffForHumans($tdate));
                                                                    // dd($years,$months,$days);

                                                                    $time = $tdate->diff($fdate);
                                                                    // echo $time->y;

                                                                    echo $time->y, 'ዓመት', 'ከ', $time->m, ' ወር በ(', $fo->positionyouworked, '), ';

                                                                    ?>
                                                                @endforeach
                                                            </td>
                                                            <td>{{ $form->form->resultOfrecentPerform }}
                                                            </td>
                                                            <td data-toggle="collapse" data-target="#more"
                                                                aria-expanded="false" aria-controls="collapseExample">more
                                                                <i class='ion ion-md-arrow-round-forward'></i>


                                                            </td>




                                                        </tr>

                                                    </tbody>
                                                </table>
                                                {{-- {!! $hrs->links() !!} --}}

                                            </div>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                </div>
                                <div class="collapse" id="more">
                                    <div class="card card-body">

                                        <div class="table-wrap mb-20 ">
                                            <div class="table-responsive">
                                                <table class="table table-active table-bordered mb-0">
                                                    <thead class="thead-active">
                                                        <tr>


                                                            <th>አሁን ያሉበት የስራ ክፍል</th>

                                                            <th>አሁን ያሉበት የስራ መደብ</th>
                                                            <th>ብሔር</th>
                                                            <th>የትውልድ ዘመን</th>
                                                            <th>በዩኒቨርስቲዉ የቅጥር ዘመን
                                                                በኢትዮጵያ</th>
                                                            <th>በዩኒቨርስቲዉ አገልግሎት ዘመን
                                                                (በዓመት,የስራ
                                                                መደብ)</th>
                                                            <th>በሌላ መስርያ ቤት አገልግሎት
                                                                ዘመን(በዓመት,የስራ
                                                                መደብ)</th>
                                                            <th>አገልግሎት ከዲፕሎማ
                                                                በፊት(በዓመት,የስራ መደብ)</th>
                                                            <th>አገልግሎት ከዲፕሎማ/ዲግሪ
                                                                በኋላ(በዓመት, የስራ መደብ)</th>
                                                            <th>የዲስፕሊን ጉድለት</th>
                                                            <th>ተጨማሪ የሥራ ድርሻ</th>

                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                        <tr>
                                                            <td>{{ $form->form->jobcat }}</td>
                                                            <td>{{ $form->form->positionofnow }}</td>
                                                            <td>{{ $form->form->ethinicity }}</td>
                                                            <td>{{ $form->form->birth_date }}</td>
                                                            <td>{{ $form->form->UniversityHiringEra }}</td>
                                                            <td>{{ $form->form->servicPeriodAtUniversity }}</td>
                                                            <td>{{ $form->form->servicPeriodAtAnotherPlace }}</td>
                                                            <td>{{ $form->form->serviceBeforeDiplo }}</td>
                                                            <td>{{ $form->form->serviceAfterDiplo }}</td>
                                                            <td>{{ $form->form->DisciplineFlaw }}</td>
                                                            <td>{{ $form->form->MoreRoles }}</td>
                                                        </tr>

                                                    </tbody>

                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-40">

                                    <div class="col-md-6 form-group">
                                        <label for="presidentGrade">በበላይ ሃላፊ ለአመራርነት ክህሎት የሚሰጥ ነጥብ ከ(35%) </label>
                                        <input class="form-control @error('presidentGrade') is-invalid @enderror"
                                            id="presidentGrade" placeholder="ለአመራርነት ክህሎት  ከ(35%)"
                                            value="{{ old('presidentGrade') }}" type="float" name="presidentGrade"
                                            min="0" max="35">
                                        @error('presidentGrade')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="remark">Remark</label>
                                        <textarea class="form-control @error('remark') is-invalid @enderror" id="remark" placeholder="remark"
                                            value="{{ old('remark') }}" type="text" name="remark"></textarea>
                                        @error('remark')
                                            <span class=" error invalid-feedback">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>







                                </div>
                                <div class="form-group row mb-0 pull-right">
                                    <div class="col-sm-10">
                                        <button type="submit" class="btn bg-blue-dark-4 text-white"
                                            id="add_btn">save</button>
                                    </div>
                                </div>





                            </form>


                        </div>

                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
