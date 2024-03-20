@extends('layouts.admin')

@section('content')
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">

                <a href="{{ url('positionpres') }}" class=" btn btn-dark mr-25"> back </a>
            </div>
            <h5 class="hk-sec-title">የተወዳዳሪዎች 1ኛ ምርጫ ከ ቡድን መሪ በላይ አጠቃላይ ውጤት </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_6" class="table table-hover table-bordered w-100  pb-30">
                                <thead>
                                    <tr>
                                        <th>ተ.ቁ</th>
                                        <th> ስም</th>



                                        <th> በሰው ኃብት ውጤት (65%)</th>

                                        <th> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ ነጥብ(35%)</th>
                                        <th>አጠቃላይ ውጤት(100%)</th>
                                        <th>Action</th>
                                        <th>Submit</th>
                                        <th>pdf</th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pres as $i => $hr)
                                        @if ($hr->status == null)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>
                                                    {{ $hr->hr->form->full_name }} <p>{{ $hr->hr->form->email }}</p>

                                                </td>



                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam }}
                                                </td>
                                                <td>
                                                    @if ($hr->presidentGrade == null)
                                                        N/A
                                                    @else
                                                        {{ $hr->presidentGrade }}
                                                    @endif
                                                </td>
                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam + $hr->presidentGrade }}
                                                </td>
                                                <td> <a href="{{ route('evaluation.edit', $hr->id) }}"data-toggle="tooltip"
                                                        data-original-title="Edit"> <i class="icon-pencil"></i>
                                                    </a>


                                                </td>
                                                <td>

                                                    <div class="row">
                                                        <div class="col-sm">
                                                            <!-- Button trigger modal -->
                                                            <button type="button"
                                                                class="btn bg-green-dark-4 text-white btn-sm"
                                                                data-toggle="modal" data-target="#id1_{{ $i }}">
                                                                Submit
                                                            </button>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="id1_{{ $i }}"
                                                                tabindex="-1" role="dialog"
                                                                aria-labelledby="exampleModalCenter" aria-hidden="true">
                                                                <div class="modal-dialog modal-dialog-centered"
                                                                    role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title">Submission</h5>
                                                                            <button type="button" class="close"
                                                                                data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <p>Are you sure do you want to submit
                                                                                {{ $hr->hr->form->full_name }}?

                                                                            </p>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-secondary"
                                                                                data-dismiss="modal">Close</button>
                                                                            <form
                                                                                action="{{ url('update-evaluation/' . $hr->id) }}"
                                                                                method="POST"
                                                                                enctype="multipart/form-data">
                                                                                @csrf

                                                                                @method('PUT')
                                                                                <button type="submit"
                                                                                    class="btn btn-green">
                                                                                    Yes</button>
                                                                            </form>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td> <button type="button" class="btn btn-primary requestStat btn-sm"
                                                        data-toggle="modal" data-target="#id_{{ $i }}"><i
                                                            class="ion ion-md-archive "></i>pdf
                                                    </button>

                                                    <div class="modal fade" id="id_{{ $i }}" tabindex="-1"
                                                        role="dialog" aria-labelledby="exampleModalLongTitle"
                                                        aria-hidden="true">
                                                        <div class="modal-dialog modal-lg" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <div id="element-to-print">


                                                                        <h5 class="modal-title " id="exampleModalLongTitle">
                                                                            የተወዳዳሪው 1ኛ ምርጫ ከ ደረጃ በላይ አጠቃላይ ውጤት
                                                                        </h5>
                                                                        <table
                                                                            class="table table-hover table-bordered w-100  pb-30">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th></th>
                                                                                    <th></th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>ሙሉ ስም</td>
                                                                                    <td>{{ $hr->hr->form->full_name }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>የትምህርት ደረጃና ዝግጅት</td>
                                                                                    <td>
                                                                                        @foreach ($hr->hr->form->education as $i => $type)
                                                                                            ({{ $type->level }},
                                                                                            {{ $type->discipline }},{{ $type->completion_date }})
                                                                                            ,
                                                                                        @endforeach
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>
                                                                                        ያለዎት የስራ ልምድ
                                                                                    </td>

                                                                                    <td>
                                                                                        @foreach ($hr->hr->form->experiences as $i => $fo)
                                                                                            <p> ከ{{ Carbon::parse($fo->startingDate)->day }}/{{ Carbon::parse($fo->startingDate)->month }}/{{ Carbon::parse($fo->startingDate)->year }}
                                                                                                እስከ
                                                                                                {{ Carbon::parse($fo->endingDate)->day }}/{{ Carbon::parse($fo->endingDate)->month }}/{{ Carbon::parse($fo->endingDate)->year }}
                                                                                                በ
                                                                                                {{ $fo->positionyouworked }},
                                                                                            </p>

                                                                                            {{-- <td>{{ $fo->positionyouworked }} --}}
                                                                                        @endforeach
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>የሚወዳደሩበት የሥራ መደብ</td>
                                                                                    <td>{{ $hr->hr->form->position->position }}
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>ለትምህርት ዝግጅት የሚሰጥ ነጥብ(25%):-</td>
                                                                                    <td>{{ $hr->hr->performance }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>ለስራ ልምድ አገልግሎት የሚሰጥ ነጥብ(15%)</td>
                                                                                    <td> {{ $hr->hr->experience }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>ለውጤት ተኮር ምዘና(10%)</td>
                                                                                    <td>{{ $hr->hr->resultbased }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>ለፈተና ውጤት (የጽሁፍ፡ የቃል)(15%)</td>
                                                                                    <td>{{ $hr->hr->exam }}</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ
                                                                                        ነጥብ(35%)</td>
                                                                                    <td>
                                                                                        @if ($hr->presidentGrade == null)
                                                                                            N/A
                                                                                        @else
                                                                                            {{ $hr->presidentGrade }}
                                                                                        @endif
                                                                                    </td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td> Remark</td>
                                                                                    <td>{{ $hr->remark }}</td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot style="font-size: 20px;">
                                                                                <tr>
                                                                                    <td>አጠቃላይ ውጤት(100%)</td>
                                                                                    <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam + $hr->presidentGrade }}
                                                                                    </td>
                                                                                </tr>
                                                                            </tfoot>
                                                                        </table>

                                                                        <p>ከኮሚቴ ውጤት ሰጪ {{ $hr->hr->user->name }}</p>
                                                                        <p>ከበላይ አመራር ውጤት ሰጪ President Dr.
                                                                            {{ $hr->submit }}</p>

                                                                        <div class="footerpdf">
                                                                            <p>This pdf generated by President Dr.
                                                                                {{ Auth::user()->name }} ©


                                                                                <?php
                                                                                $mytime = Carbon\Carbon::now()->tz('EAT');
                                                                                echo $mytime->toDateTimeString();
                                                                                ?>

                                                                        </div>
                                                                        <p class="mt-5 text-center">@copyright <a
                                                                                href="#" class="text-dark"
                                                                                target="_blank">AASTU(YEE)
                                                                            </a> © 2023</p>
                                                                        </p>

                                                                    </div>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>



                                                                </div>

                                                            </div>
                                                        </div>

                                                    </div>
                                                </td>


                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- {!! $pres->links() !!} --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>





    </div>

    <div class="container">

        <section class="hk-sec-wrapper mt-100">
            <div class="pull-right hk-sec-title">

                {{-- <a href="{{ url('positionpres') }}" class=" btn btn-dark mr-25"> back </a> --}}
            </div>
            <h5 class="hk-sec-title">በኮሚቴና በበላይ አመራር የተሰጠ አጠቃላይ ውጤት(ከ100%) </h5>

            <div class="row">
                <div class="col-sm">
                    <div class="table-wrap">
                        <div class="table-responsive">
                            <table id="datable_3" class="table table-hover table-bordered w-100  pb-30">
                                <thead>

                                    {{-- <th colspan="7">በኮሚቴና በበላይ አመራር የተሰጠ</th> --}}

                                    <tr>

                                        <th>ተ.ቁ</th>
                                        <th> ስም</th>



                                        <th> በሰው ኃብት ውጤት (65%)</th>

                                        <th> በበላይ አመራር ለአመራርነት ክህሎት የሚሠጥ ነጥብ(35%)</th>
                                        <th>አጠቃላይ ውጤት(100%)</th>
                                        <th>Submitted by</th>
                                        {{-- <th>pdf</th> --}}
                                        <th>Remark</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($pres as $i => $hr)
                                        @if ($hr->status == 1)
                                            <tr>
                                                <td>{{ ++$i }}</td>
                                                <td>{{ $hr->hr->form->full_name }} <p>{{ $hr->hr->form->email }}</p>
                                                </td>



                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam }}
                                                </td>
                                                <td>
                                                    @if ($hr->presidentGrade == null)
                                                        N/A
                                                    @else
                                                        {{ $hr->presidentGrade }}
                                                    @endif
                                                </td>
                                                <td>{{ $hr->hr->performance + $hr->hr->experience + $hr->hr->resultbased + $hr->hr->exam + $hr->presidentGrade }}
                                                </td>
                                                <td>{{ $hr->submittedBy }}</td>

                                                <td>{{ $hr->remark }}</td>

                                            </tr>
                                        @endif
                                    @endforeach

                                </tbody>
                            </table>
                            {{-- {!! $pres->links() !!} --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"
        integrity="sha512-w3u9q/DeneCSwUDjhiMNibTRh/1i/gScBVp2imNVAMCt6cUHIw6xzhzcPFIaL3Q1EbI2l+nu17q2aLJJLo4ZYg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(".requestStat").on("click", function() {
            // var element = document.getElementById("element-to-print")
            var element = $(this).closest("tr").find("#element-to-print")[0]
            html2pdf(element, {
                margin: 15,
                filename: 'Application form.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 3,
                    logging: true,
                    dpi: 192,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'mm',
                    format: 'a4',
                    orientation: 'portrait'
                }
            });
        });


        // $(".requestStat").on("click", function() {
        //     var cat_id = $(this).val();


        //     $.ajax({
        //         url: "pdf",

        //         method: 'GET',

        //         data: {
        //             "id": $(this).val(),
        //             "hr": $(this).attr("data-target")
        //         },
        //         success: function(data) {
        //             // console.log(data.hr);
        //             if (response.id) {
        //                 alert(" changed successfully");
        //             }
        //         },
        //         error: function(response) {}
        //     });

        // });
    </script>
@endsection
