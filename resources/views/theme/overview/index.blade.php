@extends('theme.layout')


@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-6" style="height:90vh;">
                <div class="card h-100" >


                    <div class="card-body px-0 py-0">
                        <ul class="nav nav-tabs nav-material p-0" style="background-color:#FD6E77;color:white;" role="tablist">
                            <li class="nav-item  text-center" style="width:33.3%">
                                <a class="nav-link disabled" style="font-size:20px;"  aria-selected="true">Symptoms</a>
                            </li>
                            <li class="nav-item text-center" style="width:33.3%">
                                <a class="nav-link  active" style="font-size:20px;" data-toggle="tab" id="therapy-tab" href="#therapy" role="tab" aria-controls="pilots" aria-selected="false">Therapy</a>
                            </li>
                            <li class="nav-item text-center" style="width:33.3%">
                                <a class="nav-link" style="font-size:20px;" data-toggle="tab" id="pilots-tab" href="#pilots" role="tab" aria-controls="pilots" aria-selected="false">Report</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="spaceships" role="tabpanel" aria-labelledby="therapy-tab">

                            </div>

                            {{--terapija--}}
                            <div class="tab-pane fade  active show" id="therapy" role="tabpanel" aria-labelledby="pilots-tab">
                                <form role="form" method="GET" id="updateProfileForm">
                                    @csrf

                                    <div class="py-6 px-8 pr-10">


                                        <div class="form-group mb-6">
                                            <label for="first_name"><h4>Symptoms</h4></label>
                                            <div class="form-group mb-6">
                                                <div class="row card-dijagnoza" style="padding:5px;background-color:#ededed;">
                                                    <div class="col-12 ">
                                                        <span>- symptom 1</span>

                                                    </div>
                                                </div>

                                                <div class="row card-dijagnoza" style="padding:5px;background-color:#ededed;">
                                                    <div class="col-12 ">
                                                        <span>- symptom 1</span>

                                                    </div>
                                                </div>

                                                <div class="row card-dijagnoza" style="padding:5px;background-color:#ededed;">
                                                    <div class="col-12 ">
                                                        <span>- symptom 1</span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-6">
                                            <label for="first_name"><h4>Diagnose</h4></label>
                                            <div class="form-group mb-6">
                                                <div class="row card-dijagnoza" style="padding:5px;background-color:#ededed;">
                                                    <div class="col-12 ">
                                                        <span><b>diagnose</b></span>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-6">
                                            <label for="select_therapy"><h4>Drugs</h4></label>
                                            <div class="form-group mb-6">
                                                <select class="js-example-basic-multiple js-states form-control" style="width:100%;font-size:2em !important;height:100px;" id="select_therapy" name="states[]" multiple="multiple">

                                                </select>
                                            </div>
                                        </div>



                                        <div class="text-center">
                                                        <span class="">
                                                            <button type="submit" id="dugme_therapy" class="mt-4 mt-sm-0 btn btn-danger px-5 py-3" style="font-size:20px;">Submit therapy</button>
                                                        </span>
                                        </div>

                                    </div>


                                </form>





                            </div>
                            <div class="tab-pane fade" id="sdisabled" role="tabpanel" aria-labelledby="sdisabled-tab">
                                <div class="py-3 px-4">

                                    <p>As I stand out here in the wonders of the unknown at Hadley, I sort of realize there’s a fundamental truth to our nature, Man must explore . . . </p>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>
                <div class="row">
                    <div class="col-12">

                    </div>
                </div>
            </div>
            {{--loading--}}

            {{--<div class="col-6" style="padding-top:15%;padding-left:15%; display:none;" id="loading1">--}}
            {{--<img src="{{ asset('img/loading.gif') }}" alt="">--}}
            {{--</div>--}}



            {{--Ovo je druga sekcija za dijagnoze--}}
            <div class="col-6" id="colona_za_uklanjanje1">
                <div class="card">

                    <div class="card-body lista-dijagnoza1">
                        {{--warnings--}}
                        <div class="row card-dijagnoza" style="background-color:#FCF8E3;border-color:#faebcc">
                            <div class="col-4">

                                <img src="{{asset("img/warning.svg")}}" alt="" style="width:140px;">


                            </div>
                            <div class="col-8">
                                <div class="">

                                    <div class="naslov py-2">
                                        Antikoagulant
                                    </div>
                                    <div class="procenat-uspesnosti py-2">
                                        -Ovaj lek je antidepresiv i nije ga dobro kombinovati sa lekovima za glavu
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row card-dijagnoza" style="background-color:#FCF8E3;border-color:#faebcc">
                            <div class="col-4">

                                <img src="{{asset("img/warning.svg")}}" alt="" style="width:140px;">


                            </div>
                            <div class="col-8">
                                <div class="">

                                    <div class="naslov py-2">
                                        Antikoagulant
                                    </div>
                                    <div class="procenat-uspesnosti py-2">
                                        -Ovaj lek je antidepresiv i nije ga dobro kombinovati sa lekovima za glavu
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>



                <div class="card" id="izlistaj_dijagnoze1">
                    <ul class="nav nav-tabs nav-material" style="background-color:rgb(48, 123, 187);background:linear-gradient(#508AEB,#508AEB);color:white;" role="tablist">
                        <li class="nav-item  text-center" style="width:0%">
                            <a class="nav-link" style="font-size:20px;"></a>
                        </li>
                        <li class="nav-item text-center active" style="width:100%">
                            <span class="nav-link" style="font-size:20px; ">Suggested drugs</span>
                        </li>
                        <li class="nav-item text-center" style="width:0%">
                            <a class="nav-link" style="font-size:20px;" ></a>
                        </li>

                    </ul>
                    <div class="card-body lista-dijagnoza1">

                        <div class="row card-dijagnoza">
                            <div class="col-4 ">

                                <div class="c100 p50">
                                    <span class="percent">50%</span>
                                    <div class="slice">
                                        <div class="bar"></div>
                                        <div class="fill"></div>
                                    </div>
                                </div>


                            </div>
                            <div class="col-8">
                                <div class="">

                                    <div class="naslov py-2">
                                        Naslov dijagnoze
                                    </div>
                                    <div class="procenat-uspesnosti py-2">
                                        Procenat uspesnosti
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
@endsection