@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xl-12">

                <section class="hk-sec-wrapper mt-100">



                    <h3 class="hk-sec-title text-white text-center color-wrap  "
                        style=" background-color:#6B021C; padding:10px;">ዋቸሞ ዩኒቨርሲቲ የሰራተኞች የስራ
                        ድልድል ማወዳደርያ ቅፅ</h3>
                    <div class="row">
                        <div class="col-sm">
                            <form action="{{ route('update_education', $form->id) }}"method="POST">

                                @csrf
                                @method('PUT')



                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="firstName"> ስም *</label>
                                        <input class="form-control" id="firstName" placeholder=" ስም"
                                            value="{{ $form->full_name }}" type="text" name="firstName" readonly>

                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="sex">ጾታ *</label>
                                        <input type="text" value="{{ $form->sex }}"
                                            name="sex"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10" for="email">ኢሜይል (የ አ.ሳ.ቴን ኢሜይል ብቻ
                                            ይጠቀሙ) *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                            </div>
                                            <input type="email" value="{{ $form->email }}"
                                                name="email"class="form-control" id="inputname" placeholder="email"
                                                readonly>



                                        </div>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label class="control-label mb-10">ስልክ
                                            ቁጥር(09...) *</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                            </div>
                                            <input type="text" value="{{ $form->phone }}"
                                                name="phone"class="form-control" id="inputname" placeholder="phone"
                                                readonly>
                                        </div>


                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                        <input type="text" value="{{ $form->positionofnow }}"
                                            name="positionofnow"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="level_id">ደረጃ </label>
                                        <input type="text" value="{{ $form->level ?? '' }}"
                                            name="level"class="form-control " id="inputEmail3" readonly>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <label for="fee">ደምወዝ (ETB)</label>
                                        <input type="text" value="{{ $form->fee }}"
                                            name="fee"class="form-control " id="fee" readonly>
                                    </div>
                                </div>












                                <h3 class="text-white text-center mt-3 mb-4  "
                                    style=" background-color:#6B021C; margin:center">
                                    አገልግሎት
                                </h3>

                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን በኢትዮጵያ
                                            አቆጣጠር</label>
                                        <input type="text" value="{{ $form->UniversityHiringEra }}"
                                            name="UniversityHiringEra"class="form-control " id="UniversityHiringEra"
                                            readonly>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን (በዓመት,የስራ
                                            መደብ)</label>
                                        <input type="text" value="{{ $form->servicPeriodAtUniversity }}"
                                            name="servicPeriodAtUniversity"class="form-control "
                                            id="servicPeriodAtUniversity" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን(በዓመት,የስራ
                                            መደብ)</label>
                                        <input type="text" value="{{ $form->servicPeriodAtAnotherPlace }}"
                                            name="servicPeriodAtAnotherPlace"class="form-control "
                                            id="servicPeriodAtAnotherPlace" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት(በዓመት,የስራ መደብ)</label>
                                        <input type="text" value="{{ $form->serviceBeforeDiplo }}"
                                            name="serviceBeforeDiplo"class="form-control " id="serviceBeforeDiplo" readonly>

                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ(በዓመት, የስራ መደብ)</label>
                                        <input type="text" value="{{ $form->serviceAfterDiplo }}"
                                            name="serviceAfterDiplo"class="form-control " id="serviceAfterDiplo" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ የሥራ
                                            አፈጻፀም አማካይ
                                            ውጤት(ከ100 በቁጥር)</label>
                                        <input type="text" value="{{ $form->resultOfrecentPerform }}"
                                            name="resultOfrecentPerform"class="form-control " id="resultOfrecentPerform"
                                            readonly>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                        <input type="text" value="{{ $form->DisciplineFlaw }}"
                                            name="DisciplineFlaw"class="form-control " id="DisciplineFlaw" readonly>
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                        <input type="text" value="{{ $form->MoreRoles }}"
                                            name="MoreRoles"class="form-control " id="MoreRoles" readonly>
                                    </div>


                                </div>






                                <button type="submit" class="btn bg-blue-dark-3 text-white float-right ">Save
                                </button>




                            </form>


                        </div>

                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection
