@extends('theme.layout')


@section('content')

    <div class="container-fluid">
    <div class="row">
        <div class="col-3" id="left_pad">

        </div>
        <div class="col-6" style="height:80vh;">
            <div class="card h-100" >


                <div class="card-body px-0 py-0">
                    <ul class="nav nav-tabs nav-material p-0" role="tablist">
                        <li class="nav-item  text-center" style="width:50%">
                            <a class="nav-link  active" style="font-size:20px;font-weight:bold;"  aria-selected="true">Examination</a>
                        </li>
                        <li class="nav-item text-center" style="width:50%">
                            <a class="nav-link " style="font-size:20px;font-weight:bold;" data-toggle="tab" id="therapy-tab" href="#therapy" role="tab" aria-controls="pilots" aria-selected="false">Therapy</a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="spaceships" role="tabpanel" aria-labelledby="spaceships-tab">
                            <form role="form" method="GET" action="{{ url('examination/therapy/create') }}" id="updateProfileForm">

                                <div class="py-6 px-8 pr-10" style="padding:40px !important;">

                                    {{--<div class="form-group mb-6">--}}
                                        {{--<label for="name"><h4>Patients name:</h4></label>--}}
                                        {{--<input type="text" class="form-control" name="name" style="border-color:#aaa;height:32px;border-radius:4px">--}}
                                    {{--</div>--}}
                                    {{--<div class="form-group mb-6">--}}
                                        {{--<label for="surename"><h4>Patients surename:</h4></label>--}}
                                        {{--<input type="text" class="form-control"  style="border-color:#aaa;height:32px;border-radius:4px" name="surename">--}}
                                    {{--</div>--}}
                                    <div class="form-group mb-6">
                                        <label for="select_symptoms"><h4>Symptoms:</h4></label>
                                        <div class="form-group mb-6">
                                            <select class="js-example-basic-multiple js-states form-control" style="width:100%;font-size:2em !important;height:100px;" id="select_symptoms" name="symptoms[]" multiple="multiple">
                                                @foreach($symptoms as $symptom)
                                                <option value="{{$symptom->id}}">{{$symptom->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mb-6" style="margin-top:50px !important;">
                                        <label for="select_diagnose"><h4>What is your diagnose?</h4></label>
                                        <div class="form-group mb-6">
                                            <select class="js-example-basic-single js-states form-control" style="width:100%;font-size:2em !important;height:100px;" id="select_diagnose" name="diagnose" multiple="multiple">
                                                @foreach($diagnoses as $diagnose)
                                                    <option value="{{ $diagnose->id }}">{{$diagnose->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>



                                    <div class="text-center">
                                                        <span class="">
                                                            <button type="submit"  id="dugme_symptoms" class="mt-4 mt-sm-0 btn sumbit_button px-5 py-3" style="font-size:20px;margin-top:35px !important;padding:7px 34px !important;">Diagnose</button>
                                                        </span>
                                    </div>

                                </div>


                            </form>
                        </div>

                        {{--terapija--}}
                        <div class="tab-pane fade" id="pilots" role="tabpanel" aria-labelledby="pilots-tab">
                            <div class="py-6 px-8 pr-10">

                                    <h4>Symptoms</h4>

                            </div>





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

        <div class="col-6" style="padding-top:15%;padding-left:15%; display:none;" id="loading">
            <img src="{{ asset('img/loading.gif') }}" alt="">
        </div>

        {{--Ovo je druga sekcija za dijagnoze--}}
        <div class="col-6" id="colona_za_uklanjanje" style="display:none">
            <div class="card" id="izlistaj_dijagnoze" style="display: none">
                <ul class="nav nav-tabs nav-material" style="background-color:rgb(48, 123, 187);background:linear-gradient(#508AEB,#508AEB);color:white;" role="tablist">
                    <li class="nav-item  text-center" style="width:0%">
                        <a class="nav-link" style="font-size:20px;"></a>
                    </li>
                    <li class="nav-item text-center active" style="width:100%">
                        <span class="nav-link" style="font-size:20px; ">We have seen something similar</span>
                    </li>
                    <li class="nav-item text-center" style="width:0%">
                        <a class="nav-link" style="font-size:20px;" ></a>
                    </li>

                </ul>
                <div class="card-body lista-dijagnoza">

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