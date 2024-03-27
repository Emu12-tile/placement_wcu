@extends('layouts.form')
@section('content')
    <div class="hk-pg-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">

                    <section class="hk-sec-wrapper mt-100">
                        @if (session('success'))
                            <div class="alert alert-success" id="success-message"
                                style="background-color: green; color: white;">
                                {{ session('success') }}
                            </div>
                        @endif

                        <h3 class="hk-sec-title text-white text-center color-wrap  "
                            style=" background-color:#6B021C; padding:10px;">ዋቸሞ ዩኒቨርሲቲ የሰራተኞች የስራ
                            ድልድል ማወዳደርያ ቅፅ</h3>
                        <div class="row">
                            <div class="col-sm">
                                <form action="{{ route('add.form') }}" class="employee-form" id='add_form' method="POST">
                                    @csrf

                                    <div class="form-section">
                                        <div class="row">
                                            <div class="col-md-6 form-group">
                                                <label for="firstName">የመጀመሪያ ስም *</label>
                                                <input class="form-control" @error('firstName') is-invalid @enderror"
                                                    id="firstName" placeholder="የመጀመሪያ ስም" value="{{ old('firstName') }}"
                                                    type="text" name="firstName">
                                                @error('firstName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="lastName">የአያት ስም *</label>
                                                <input class="form-control" @error('lastName') is-invalid @enderror"
                                                    id="lastName" placeholder="የአያት ስም" value="{{ old('lastName') }}"
                                                    type="text" name="lastName">
                                                @error('lastName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="middleName">የአባት ስም *</label>
                                                <input class="form-control" @error('middleName') is-invalid @enderror"
                                                    id="middleName" placeholder="የአባት ስም" value="{{ old('middleName') }}"
                                                    type="text" name="middleName">
                                                @error('middleName')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="sex">ጾታ *</label>
                                                <select class="form-control custom-select "value="{{ old('sex') }}"
                                                    id="sex" name="sex">

                                                    <option value="ሴት " {{ old('sex') == 'ሴት' ? 'selected' : '' }}>ሴት
                                                    </option>
                                                    <option value="ወንድ"{{ old('sex') == 'ወንድ' ? 'selected' : '' }}>ወንድ
                                                    </option>

                                                </select>
                                            </div>
                                            {{-- <div class="col-md-6 form-group">
                                                <label class="control-label mb-10" for="email">ኢሜይል ( ኢሜይል ብቻ
                                                    ይጠቀሙ) </label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i
                                                                class="icon-envelope-open"></i></span>
                                                    </div>
                                                    <input name="email" type="email"
                                                        class="form-control
                                                        @error('email') is-invalid @enderror"
                                                        id="email" placeholder="@wcu.edu.et"
                                                        value="{{ old('email') }}">
                                                    @error('email')
                                                        <span class=" error invalid-feedback">
                                                            <strong>የዋቸሞ ኢሜይል ብቻ ይጠቀሙ</strong>
                                                        </span>
                                                    @enderror



                                                </div>
                                                @if ($errors->any())
                                                    <span class=" error" style="color:red">
                                                        <strong>{{ $errors->getBag('default')->first('custom_email_error') }}</strong>
                                                    </span>
                                                @endif
                                            </div> --}}
                                            <div class="col-md-6 form-group">
                                                <label for="ethinicity">ብሔር</label>
                                                <input type="text" value="{{ old('ethinicity') }}"
                                                    class="form-control @error('ethinicity') is-invalid @enderror"
                                                    id="ethinicity" placeholder="ብሔር" name="ethinicity">
                                                @error('ethinicity')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label class="control-label mb-10">ስልክ
                                                    ቁጥር</label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text"><i class="fa fa-phone"></i></span>
                                                    </div>
                                                    <input type="tel"name="phone" id="phone"
                                                        class="form-control @error('phone') is-invalid @enderror"
                                                        placeholder="phone" value="{{ old('phone') }}">
                                                    @error('phone')
                                                        <span class=" error invalid-feedback">
                                                            <strong>ትክክለኛዉን ስልክ
                                                                ቁጥር ያስገቡ</strong>
                                                        </span>
                                                    @enderror
                                                </div>


                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-section">
                                        <div class="row">

                                            {{-- <div class="col-md-6 form-group">
                                                <label for="birth_date">የትውልድ ዘመን</label>
                                                <input type="text" value="{{ old('birth_date') }}"
                                                    class="form-control @error('birth_date') is-invalid @enderror"
                                                    id="birth_date" placeholder="የትውልድ ዘመን" name="birth_date">
                                                @error('birth_date')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                            <div class="col-md-6 form-group">
                                                <label for="jobcat">አሁን ያሉበት የስራ ክፍል</label>
                                                <input type="text" value="{{ old('jobcat') }}"
                                                    class="form-control @error('jobcat') is-invalid @enderror"
                                                    id="jobcat" placeholder="አሁን ያሉበት የስራ መደብ" name="jobcat">
                                                @error('jobcat')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="positionofnow">አሁን ያሉበት የስራ መደብ</label>
                                                <input type="text" value="{{ old('positionofnow') }}"
                                                    class="form-control @error('positionofnow') is-invalid @enderror"
                                                    id="positionofnow" placeholder="አሁን ያሉበት የስራ መደብ" name="positionofnow">
                                                @error('positionofnow')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="level">አሁን ያሉበት ደረጃ</label>
                                                <input type="text" value="{{ old('level') }}"
                                                    class="form-control @error('level') is-invalid @enderror" id="level"
                                                    placeholder="አሁን ያሉበት ደረጃ" name="level">
                                                @error('level')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            {{-- <div class="col-md-4 form-group">
                                                <label for="fee">ደምወዝ (ETB)</label>
                                                <input class="form-control @error('fee') is-invalid @enderror"
                                                    id="fee" placeholder="ደምወዝ" value="{{ old('fee') }}"
                                                    type="number" name="fee">
                                                @error('fee')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4  "
                                            style=" background-color:#6B021C; margin:center">
                                            ያለዎትን የትምህርት ዝግጅትና የትምህርት ደረጃ ያስገቡ
                                        </h3>

                                        <div class="row">
                                            <div class="col-sm">

                                                <div class=" educ row">


                                                    <div class="col-md-4">

                                                        <label for="level">የትምህርት ደረጃ</label>
                                                        <input type="text" name="addMoreFields[0][level]"
                                                            value="{{ old('level') }}"
                                                            class="form-control  @error('level') is-invalid @enderror"
                                                            id="level" placeholder="educational level ">
                                                        @error('level')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror

                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="discipline">የትምህርት ዝግጅት </label>
                                                        <input type="text" name="addMoreFields[0][discipline]"
                                                            value="{{ old('discipline') }}"
                                                            class="form-control  @error('discipline') is-invalid @enderror"
                                                            id="discipline" placeholder=" discipline">
                                                        @error('discipline')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div class="col-md-3">
                                                        <label for="completion_date">completion_date </label>
                                                        <input type="text" name="addMoreFields[0][completion_date]"
                                                            value="{{ old('completion_date') }}"
                                                            class="form-control  @error('completion_date') is-invalid @enderror"
                                                            id="completion_date" placeholder="completion_date">
                                                        @error('completion_date')
                                                            <span class=" error invalid-feedback">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>

                                                    <div>
                                                        <a href="javascript:void(0)"
                                                            class="btn color-wrap text-white bg-blue-dark-4  addrow mt-40 "
                                                            style=" border-radius:50%">+</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <h3 class="text-white text-center mt-3 mb-4 navigation "
                                            style=" background-color:#6B021C; margin:center">
                                        </h3>


                                    </div>






                                    <div class="form-section ">
                                        <div class="row">
                                            {{-- <div class="col-md-6 form-group">
                                                <label for="UniversityHiringEra">በዩኒቨርስቲዉ የቅጥር ዘመን በኢትዮጵያ
                                                    አቆጣጠር(ወር/ቀን/ዓመት)</label>
                                                <input class="form-control"
                                                    @error('UniversityHiringEra') is-invalid @enderror"
                                                    id="UniversityHiringEra" placeholder="UniversityHiringEra"
                                                    value="{{ old('UniversityHiringEra') }}" type="date"
                                                    name="UniversityHiringEra">
                                                @error('UniversityHiringEra')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                            {{-- <div class="col-md-6 form-group">
                                                <label for="servicPeriodAtUniversity">በዩኒቨርስቲዉ አገልግሎት ዘመን (በዓመት,የስራ
                                                    መደብ)</label>
                                                <input class="form-control"
                                                    @error('servicPeriodAtUniversity') is-invalid @enderror"
                                                    id="servicPeriodAtUniversity" placeholder="በዩኒቨርስቲዉ አገልግሎት ዘመን"
                                                    value="{{ old('servicPeriodAtUniversity') }}" type="text"
                                                    name="servicPeriodAtUniversity">
                                                @error('servicPeriodAtUniversity')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="servicPeriodAtAnotherPlace">በሌላ መስርያ ቤት አገልግሎት ዘመን(በዓመት,የስራ
                                                    መደብ)</label>
                                                <input class="form-control"
                                                    @error('servicPeriodAtAnotherPlace') is-invalid @enderror"
                                                    id="servicPeriodAtAnotherPlace" placeholder="በሌላ መስርያ ቤት አገልግሎት ዘመን"
                                                    value="{{ old('servicPeriodAtAnotherPlace') }}" type="text"
                                                    name="servicPeriodAtAnotherPlace">
                                                @error('servicPeriodAtAnotherPlace')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="serviceBeforeDiplo"> አገልግሎት ከዲፕሎማ በፊት(በዓመት,የስራ መደብ)</label>
                                                <input class="form-control "
                                                    @error('serviceBeforeDiplo') is-invalid @enderror"
                                                    id="serviceBeforeDiplo" placeholder="አገልግሎት ከዲፕሎማ በፊት"
                                                    value="{{ old('serviceBeforeDiplo') }}" type="text"
                                                    name="serviceBeforeDiplo">
                                                @error('serviceBeforeDiplo')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="serviceAfterDiplo"> አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ(በዓመት, የስራ
                                                    መደብ)</label>
                                                <input class="form-control mt-25"
                                                    @error('serviceAfterDiplo') is-invalid @enderror"
                                                    id="serviceAfterDiplo" placeholder=" አገልግሎት ከዲፕሎማ/ዲግሪ በኋላ"
                                                    value="{{ old('serviceAfterDiplo') }}" type="text"
                                                    name="serviceAfterDiplo">
                                                @error('serviceAfterDiplo')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div> --}}
                                            <div class="col-md-6 form-group">
                                                <label for="resultOfrecentPerform" class=""> የሁለት ተከታታይ የቅርብ ጊዜ
                                                    የሥራ
                                                    አፈጻፀም አማካይ
                                                    ውጤት(ከ100 በቁጥር)</label>
                                                <input class="form-control mt-25"
                                                    @error('resultOfrecentPerform') is-invalid @enderror"
                                                    id="resultOfrecentPerform" placeholder=" የሁለት ተከታታይ የቅርብ ጊዜ የሥራ አፈጻፀም"
                                                    value="{{ old('resultOfrecentPerform') }}" type="decimal"
                                                    name="resultOfrecentPerform">
                                                @error('resultOfrecentPerform')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>

                                            <div class="col-md-6 form-group">
                                                <label for="DisciplineFlaw"> የዲስፕሊን ጉድለት</label>
                                                <input class="form-control" @error('DisciplineFlaw') is-invalid @enderror"
                                                    id="DisciplineFlaw" placeholder=" የዲስፕሊን ጉድለት"
                                                    value="{{ old('DisciplineFlaw') }}" type="text"
                                                    name="DisciplineFlaw">
                                                @error('DisciplineFlaw')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="disability"> አካል ጉዳተኛ</label>
                                                <select class="form-control custom-select "value="{{ old('disability') }}"
                                                    id="disability" name="disability">

                                                    <option value="No "
                                                        {{ old('disability') == 'No' ? 'selected' : '' }}>No
                                                    </option>
                                                    <option
                                                        value="Yes"{{ old('disability') == 'Yes' ? 'selected' : '' }}>
                                                        Yes
                                                    </option>

                                                </select>
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <label for="MoreRoles"> ተጨማሪ የሥራ ድርሻ</label>
                                                <input class="form-control" @error('MoreRoles') is-invalid @enderror"
                                                    id="MoreRoles" placeholder="ተጨማሪ የሥራ ድርሻ"
                                                    value="{{ old('MoreRoles') }}" type="text" name="MoreRoles">
                                                @error('MoreRoles')
                                                    <span class=" error invalid-feedback">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>


                                        </div>
                                        <h3 class="text-white text-center mt-3 mb-4   "
                                            style=" background-color:#6B021C; margin:center nav">የስራ ልምድ(በኢትዮጵያ አቆጣጠር
                                            ብቻ)</h3>
                                        <div id="myform">
                                            <div class="row">
                                                <div class="col-sm">

                                                    <div class=" formgr row">

                                                        <div class="col-md-3">

                                                            <label for="startingDate">የጀመሩበት ዓመት(ወር/ቀን/ዓመት)</label>
                                                            <input type="date"
                                                                name="addMoreInputFields[0][startingDate]"
                                                                value="{{ old('startingDate') }}"
                                                                class="form-control  @error('startingDate') is-invalid @enderror"
                                                                id="startingDate" placeholder=" ">
                                                            @error('startingDate')
                                                                <span class=" error invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror

                                                        </div>
                                                        <div class="col-md-3">
                                                            <label for="endingDate">ያበቃበት ቀን(ወር/ቀን/ዓመት) </label>
                                                            <input type="date" min="startingDate"
                                                                name="addMoreInputFields[0][endingDate]"
                                                                value="{{ old('endingDate') }}"
                                                                class="form-control  @error('endingDate') is-invalid @enderror"
                                                                id="endingDate" placeholder=" endingDate">
                                                            @error('endingDate')
                                                                <span class=" error invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>

                                                        <div class="col-md-4">
                                                            <label for="positionyouworked">የስራ መደብ </label>
                                                            <input type="text"
                                                                name="addMoreInputFields[0][positionyouworked]"
                                                                value="{{ old('positionyouworked') }}"
                                                                class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                                id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                            @error('positionyouworked')
                                                                <span class=" error invalid-feedback">
                                                                    <strong>{{ $message }}</strong>
                                                                </span>
                                                            @enderror
                                                        </div>
                                                        <div>
                                                            <a href="javascript:void(0)"
                                                                class="btn color-wrap text-white bg-blue-dark-4  addRow mt-40 "
                                                                style=" border-radius:50%">+</a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>


                                        </div>
                                    </div>


                                    <div class="form-navigation mt-3">
                                        <button type="button"
                                            class="previous btn bg-red-dark-3 text-white float-left">&lt;
                                            Previous</button>
                                        <button type="button" class="next btn bg-blue-dark-3 text-white float-right">Next
                                            &gt;</button>
                                        <button type="submit"
                                            class="btn bg-green-dark-3 text-white float-right">Submit</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('javascript')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"
        integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://raw.github.com/mattpowell/localstorageshim/master/localstorageshim.min.js" type="text/javascript">
    </script>
    <script>
        $(document).ready(function() {

            var i = 0

            setTimeout(function() {
                $('#success-message').fadeOut('slow');
            }, 5000);
            $(".addRow").click(function(e) {
                ++i;
                e.preventDefault();
                $("#myform").append(`
                        <div class="row" >
                                    <div class="col-sm">

                                            <div class=" formgr row">

                                                <div class="col-md-3">
                                       <label for="startingDate"></label>

                                                    <input type="date" name="addMoreInputFields[${i}][startingDate]" value="{{ old('startingDate') }}"
                                                        class="form-control  @error('startingDate') is-invalid @enderror"
                                                        id="startingDate" placeholder=" ">
                                                    @error('startingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div class="col-md-3">
                                                  <label for="endingDate"></label>
                                                    <input type="date" name="addMoreInputFields[${i}][endingDate]" value="{{ old('endingDate') }}}"
                                                        class="form-control  @error('endingDate') is-invalid @enderror"
                                                        id="endingDate" placeholder=" endingDate">
                                                    @error('endingDate')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="col-md-4">
                                                    <label for="positionyouworked"></label>

                                                    <input type="text" name="addMoreInputFields[${i}][positionyouworked]" value="{{ old('positionyouworked') }}"
                                                        class="form-control  @error('positionyouworked') is-invalid @enderror"
                                                        id="positionyouworked" placeholder="የሰሩበት የስራ መደብ">
                                                    @error('positionyouworked')
                                                        <span class=" error invalid-feedback">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror

                                                </div>
                                                <div>

                                                    <a href="javascript:void(0)" class="btn btn-danger  removeRow mt-20 "
                                                        style=" border-radius:50%">-</a>
                                                </div>
                                            </div>

                                        </div>
                                </div>





                    `);
            });

            $(document).on('click', '.removeRow', function(e) {

                e.preventDefault();

                let row_item = $(this).parents('.formgr');
                $(row_item).remove();
            });

            var j = 0;

            $(".addrow").click(function(e) {
                ++j;
                e.preventDefault();
                $(".navigation").before(`
                <div class="row">
                    <div class="col-sm">
                        <div class=" educ row">
                            <div class="col-md-4">

                                <label for="level"></label>
                                <input type="text" name="addMoreFields[${j}][level]"
                                value="{{ old('level') }}"
                                class="form-control  @error('level') is-invalid @enderror"
                                id="level" placeholder="educational level ">
                                @error('level')
                                <span class=" error invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                 @enderror

                            </div>
                            <div class="col-md-4">
                                <label for="discipline"> </label>
                                <input type="text"
                                    name="addMoreFields[${j}][discipline]"
                                    value="{{ old('discipline') }}"
                                    class="form-control  @error('discipline') is-invalid @enderror"
                                    id="discipline" placeholder=" discipline">
                                @error('discipline')
                                    <span class=" error invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                               <div class="col-md-3">
                                <label for="discipline"></label>
                                <input type="text"
                                    name="addMoreFields[${j}][completion_date]"
                                    value="{{ old('completion_date') }}"
                                    class="form-control  @error('completion_date') is-invalid @enderror"
                                    id="completion_date" placeholder=" completion_date">
                                @error('completion_date')
                                    <span class=" error invalid-feedback">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>



                            <div>
                               <a href="javascript:void(0)" class="btn btn-danger  removerow mt-20 "
                                                        style=" border-radius:50%">-</a>
                            </div>
                        </div>
                    </div>
                </div>



                    `);
            });

            $(document).on('click', '.removerow', function(e) {

                e.preventDefault();
                // $this.parents('')
                let row_item = $(this).parents('.educ');
                $(row_item).remove();
            });


            $(document).on('change', '.dynamic', function() {
                // console.log("hmm its change");

                // var cat_id = $(this).val();
                var cat_id = $(this).val();

                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/job",
                    data: {
                        "id": cat_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="position_id"]').html(" ");
                        $('select[name="position_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#position_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                div21 = " ";
                var div2 = " ";
                var div3 = " ";
                // console.log(selected);
                $.ajax({
                    url: "/try/selection",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detailsd').html(" ");
                        $('#detailsd').append(di);

                        div += " <b> የስራ ልምድ (በ አመት):</b> " + data.experience
                        $('#details').html(" ");
                        $('#details').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#details2').html(" ");
                        $('#details2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#details4').html(" ");
                        $('#details4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#details3').html(" ");
                        $('#details3').append(div3);


                    },
                    error: function() {

                    }

                });




            });
            $(document).on('change', '.dynamic2', function() {
                // console.log("hmm its change");

                var categ_id = $(this).val();

                console.log(categ_id);
                var div = $(this).parent();


                var op = " ";

                $.ajax({
                    type: "GET",
                    url: "try/categ2",
                    data: {
                        "id": categ_id
                    },
                    success: function(data) {

                        op += '<option value="0" selected disabled>select</option>';
                        for (var i = 0; i < data.length; i++) {
                            op += '<option value="' + data[i].id + '">' + data[i].position +
                                '</option>';
                        }

                        $('select[name="choice2_id"]').html(" ");
                        $('select[name="choice2_id"]').append(op);
                    },
                    error: function() {

                    }
                });
            });
            $(document).on('change', '#choice2_id', function() {
                var selected = $(this).val();
                var a = $(this).parent();
                var di = " ";
                var div = " ";
                var div21 = " ";
                var div2 = " ";
                var div3 = " ";
                // console.log(selected);
                $.ajax({
                    url: "/try/selection2",
                    type: "GET",
                    data: {
                        "id": selected
                    },
                    dataType: "json",

                    success: function(data) {

                        di += " <b>ስራዉ የሚፈልገው ዝቅተኛ መስፈርት </b>  "
                        $('#detaild').html(" ");
                        $('#detaild').append(di);

                        div += "<b> የስራ ልምድ(በ አመት):</b> " + data.experience
                        $('#detail').html(" ");
                        $('#detail').append(div);

                        div2 += "<b> የትምህርት ደረጃ:</b> " + data.edu_level

                        $('#detail2').html(" ");
                        $('#detail2').append(div2);
                        div21 += "<b> የትምህርት ዝግጅት:</b> " + data.education_type

                        $('#detail4').html(" ");
                        $('#detail4').append(div21);
                        div3 += "<b> ደረጃ:</b> " + data.level

                        $('#detail3').html(" ");
                        $('#detail3').append(div3);


                    },
                    error: function() {

                    }

                });




            });
            $(function() {
                var $sections = $('.form-section');

                function navigateTo(index) {
                    $sections.removeClass('current').eq(index).addClass('current');
                    $('.form-navigation .previous').toggle(index > 0);
                    var atTheEnd = index >= $sections.length - 1;
                    $('.form-navigation .next').toggle(!atTheEnd);
                    $('.form-navigation [Type=submit]').toggle(atTheEnd);

                    const step = document.querySelector('.step' + index);
                    step.style.backgroundColor = "#17a2b8";
                    step.style.color = "white";
                }

                function curIndex() {
                    return $sections.index($sections.filter('.current'));


                }
                $('.form-navigation .previous').click(function() {
                    navigateTo(curIndex() - 1);
                });
                $('.form-navigation .next').click(function() {
                    $('.employee-form').parsley().whenValidate({
                        group: 'block-' + curIndex()
                    }).done(function() {
                        navigateTo(curIndex() + 1);
                    });
                });
                $sections.each(function(index, section) {
                    $(section).find(':input').attr('data-parsley-group', 'block-' + index);

                });
                navigateTo(0);
            });


        })
    </script>
@endsection
