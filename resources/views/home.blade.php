@extends('layouts.admin')




@section('content')
    <div class="container">


        <div class="row">
            <div class="col-xl-12">



                    {{-- <div class="col-lg-8 col-sm  ml-25 mt-100">
                        <div class=" card card-sm ">
                            <div class="card-body  ">
                                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                                    {{ __('እንኳን ወደ የሰው ኃብት ዳሽቦርድ በደህና መጡ ') }}
                                </h2>
                            </div>
                        </div>
                    </div> --}}
                      @role('admin')
                    <div class="hk-row mt-100">
                        <div class="col-lg-4 col-md-8">
                            <div class="card card-sm">
                                <div class="card-body">

                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-16 text-dark font-weight-500">Yirgalem Hailu</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-20 font-weight-500" id="data_32ba">
                                                {{ $hrs = DB::table('forms')->where('registeredBy', 'Yirgalem Hailu')->count() }}</span></span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-16 text-dark font-weight-500">ABIY ADANE</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-20 font-weight-500" id="data_32b">
                                                {{ $hrs = DB::table('forms')->where('registeredBy', 'ABIY ADANE')->count() }}</span>
                                        </div>
                                    </div>

                                    <div class="text-center">

                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-8">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-16 text-dark font-weight-500">Senait Melese</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-20 font-weight-500" id="data_32b">
                                                {{ $hrs = DB::table('forms')->where('registeredBy', 'senait melese')->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-16 text-dark font-weight-500">Taye Yohannes
                                                </span>
                                        </div>
                                        <div>
                                            <span class="text-success font-20 font-weight-500" id="data_32ba">
                                                {{ $hrs = DB::table('forms')->where('registeredBy', 'Taye Yohannes')->count() }}</span></span>
                                        </div>
                                    </div>


                                    <div class="text-center">

                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-8">
                            <div class="card card-sm">
                                <div class="card-body">
                                  <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-16 text-dark font-weight-500">Asdesach Tesfaye</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-20 font-weight-500" id="data_32bb">
                                                {{ $hrs = DB::table('forms')->where('registeredBy', 'Asdesach Tesfaye')->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-16 text-dark font-weight-500">Abebe Ayele</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-20 font-weight-500" id="data_32bb">
                                                {{ $hrs = DB::table('forms')->where('registeredBy', 'abebe ayele')->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">

                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-lg-4 col-md-8">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-20 text-dark font-weight-500"> አጠቃላይ የተመዘገቡ</span>
                                        </div>
                                        <div>
                                            <span
                                                class="text-success font-34 font-weight-500">{{ $hrs = DB::table('forms')->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='fa fa-bar-chart-o'style="font-size:48px;color:">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>
                    {{-- <div class="col-lg-8 col-sm  ml-25 mt-100">
                        <div class=" card card-sm ">
                            <div class="card-body  ">
                                <h2 class="font-semibold text-center text-xl text-gray-800 leading-tight">
                                    {{ __('እንኳን ወደ የሰው ኃብት ዳሽቦርድ በደህና መጡ ') }}
                                </h2>
                            </div>
                        </div>
                    </div> --}}

                @endrole
                @role('hr|president')
                    <div class="hk-row mt-100">
                        <div class="col-lg-3 col-md-6 ">
                            <div class="card card-sm ">
                                <div class="card-body ">

                                    <div class="d-flex justify-content-between mb-5 ">
                                        <div>
                                            <span class="d-block font-18 text-dark font-weight-500"> በሰው ኅብት Approve
                                                ያልተደረጉ
                                                ተወዳዳሪዎች
                                                ብዛት
                                            </span>
                                        </div>
                                        <div>
                                            <span class="text-success font-34 font-weight-500">
                                                {{ \App\Models\Form::where('isEditable', 0)->count() }}</span>
                                            {{-- {{ \App\Models\Form::where('isEditable', 0)->count() }} --}}
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='glyphicon glyphicon-user'style="font-size:48px;color:black">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 col-md-6 ">
                            <div class="card card-sm ">
                                <div class="card-body ">

                                    <div class="d-flex justify-content-between mb-5 ">
                                        <div>
                                            <span class="d-block font-18 text-dark font-weight-500"> በሰው ኅብት Approve
                                                የተደረጉ
                                                ተወዳዳሪዎች
                                                ብዛት</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-34 font-weight-500">
                                                {{ \App\Models\Form::where('isEditable', 1)->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='glyphicon glyphicon-user'style="font-size:48px;color:black">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div class="col-lg-3 col-md-6 ">
                             <div class="card card-sm ">
                              <div class="card-body ">

                              <div class="d-flex justify-content-between mb-5 ">
                                <div>
                                <span class="d-block font-18 text-dark font-weight-500"> በሰው ኅብት Approve የተደረጉ ተወዳዳሪዎች ብዛት</span>
                               </div>
                               <div>
                                <span class="text-success font-34 font-weight-500">
                                      {{ \App\Models\Form::where('isEditable',1)->count()}}</span>
                               </div>
                                 </div>
                                <div class="text-center">
                               <span class="d-block display-4 text-dark mb-5"><i
                                    class='glyphicon glyphicon-user'style="font-size:48px;color:black">
                                </i></span>
                            <small class="d-block"></small>
                        </div>
                    </div>
                    </div>
                    </div> --}}
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-20 text-dark font-weight-500"> ከ ቡድን መሪ በታች
                                                ተወዳዳሪዎች</span>
                                        </div>
                                        <div>
                                            <span
                                                class="text-success font-34 font-weight-500">{{ $hrs = DB::table('forms')->where('isEditable', 1)->join('positions', 'positions.id', '=', 'forms.position_id')->where('positions.position_type_id', 2)->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='fa fa-bar-chart-o'style="font-size:48px;color:">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-20 text-dark font-weight-500"> ከ ቡድን መሪ በላይ
                                                ተወዳዳሪዎች</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-34 font-weight-600">


                                                {{ $hrs = DB::table('forms')->where('isEditable', 1)->join('positions', 'positions.id', '=', 'forms.position_id')->where('positions.position_type_id', 1)->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='glyphicon glyphicon-signal'style="font-size:48px;color:green">
                                            </i></span>
                                        </span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>

                        </div>



                        <div class="col-lg-3 col-md-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-18 text-dark font-weight-500">በበላይ አመራር የተሰጠ
                                                ውጤት</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-34 font-weight-500">

                                                {{ \App\Models\President::where('status', '!=', '0')->count() }}


                                            </span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='glyphicon glyphicon-th-list 'style="font-size:48px;color:black">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-20 text-dark font-weight-500">በኮሚቴ የተሰጠ ውጤት</span>
                                        </div>
                                        <div>
                                            <span
                                                class="text-success font-34 font-weight-500">{{ \App\Models\HR::query()->where('status_hr', '!=', '0')->select('presidentGrade')->distinct()->count() }}</span>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='glyphicon glyphicon-signal'style="font-size:48px;color:green">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- <div class="col-lg-3 col-md-6">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-5">
                                        <div>
                                            <span class="d-block font-18 text-dark font-weight-500">ያልተሞሉ የስራ መደቦች</span>
                                        </div>
                                        <div>
                                            <span class="text-success font-34 font-weight-500">

                                   {{App\Models\Position::with('forms')->count()}}



                                            </span>
                                        </div>

                                    </div>
                                    <div class="text-center">
                                        <span class="d-block display-4 text-dark mb-5"><i
                                                class='glyphicon glyphicon-th-list 'style="font-size:48px;color:black">
                                            </i></span>
                                        <small class="d-block"></small>
                                    </div>
                                </div>
                            </div>

                        </div> --}}
                    </div>
                @endrole


            </div>

        </div>
    </div>
@endsection
