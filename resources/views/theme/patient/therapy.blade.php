@extends('theme.layout')


@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-6" style="height:90vh;">
                <div class="card h-100" >


                    <div class="card-body px-0 py-0">
                        <ul class="nav nav-tabs nav-material p-0" role="tablist">
                            <li class="nav-item  text-center" style="width:50%">
                                <a class="nav-link " style="font-size:20px;font-weight:bold;"  aria-selected="true">Examination</a>
                            </li>
                            <li class="nav-item text-center" style="width:50%">
                                <a class="nav-link  active" style="font-size:20px; font-weight:bold;" data-toggle="tab" id="therapy-tab" href="#therapy" role="tab" aria-controls="pilots" aria-selected="false">Therapy</a>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade" id="spaceships" role="tabpanel" aria-labelledby="therapy-tab">

                            </div>

                            {{--terapija--}}
                            <div class="tab-pane fade  active show" id="therapy" role="tabpanel" aria-labelledby="pilots-tab">
                                <form role="form" action="{{url('examination/submit')}}" method="GET" id="updateProfileForm">

                                    <div class="py-6 px-8 pr-10">


                                        <div class="form-group mb-6">
                                            <label for="first_name"><h4>Symptoms</h4></label>
                                            <div class="form-group mb-6">
                                                @foreach($symptoms as $symptom)
                                                    <div class="row card-dijagnoza" style="padding:5px;background-color:#ededed;">
                                                        <div class="col-12 ">
                                                            <span>{{ $symptom->name }}</span>

                                                        </div>
                                                    </div>
                                                @endforeach
                                                <select name="symptoms[]" hidden>
                                                    @foreach($symptoms as $symptom)
                                                        <option value="{{ $symptom->id }}">
                                                        </option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>

                                        <div class="form-group mb-6">
                                            <label for="first_name"><h4>Diagnose</h4></label>
                                            <div class="form-group mb-6">
                                                <div class="row card-dijagnoza" style="padding:5px;background-color:#ededed;">
                                                    <div class="col-12 ">
                                                        <span><b>{{ $diagnose->name }}</b></span>

                                                    </div>
                                                    <input hidden value="{{ $diagnose->id }}" name="diagnose">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group mb-6">
                                            <label for="select_therapy"><h4>Prescribe medicines:</h4></label>
                                            <div class="form-group mb-6">
                                                <select class="js-example-basic-multiple js-states form-control" style="width:100%;font-size:2em !important;height:100px;" id="select_drugs" name="drugs[]" multiple="multiple">
                                                    @foreach($drug as $droga)
                                                        <option value="{{$droga->id}}">{{$droga->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>



                                        <div class="text-center">
                                                        <span class="">
                                                            <button type="submit" id="dugme_therapy" class="mt-4 mt-sm-0 btn sumbit_button px-5 py-3" style="font-size:20px;margin-top:35px !important;padding:7px 34px !important;">Submit therapy</button>
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
                <div class="card kartica_upozorenja" style="display: none">

                    <div class="card-body lista-upozorenja" style="background-color:#FCF8E3;">


                    </div>
                </div>
                <div class="card" id="izlistaj_dijagnoze1">
                    <ul class="nav nav-tabs nav-material" style="background-color:rgb(48, 123, 187);background:linear-gradient(#508AEB,#508AEB);color:white;" role="tablist">
                        <li class="nav-item  text-center" style="width:0%">
                            <a class="nav-link" style="font-size:20px;"></a>
                        </li>
                        <li class="nav-item text-center active" style="width:100%">
                            <span class="nav-link" style="font-size:20px; ">Suggested by doctors</span>
                        </li>
                        <li class="nav-item text-center" style="width:0%">
                            <a class="nav-link" style="font-size:20px;" ></a>
                        </li>

                    </ul>
                    <div class="card-body lista-dijagnoza1">
                        @foreach($doctors as $doctor)

                        <div class="row card-dijagnoza">

                            <div class="col-4 ">

                                <img src="{{ asset('img/'.$doctor->slika) }}" style="border-radius:50%">
                                {{--<div class="c100 p50">--}}
                                    {{--<span class="percent">50%</span>--}}
                                    {{--<div class="slice">--}}
                                        {{--<div class="bar"></div>--}}
                                        {{--<div class="fill"></div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}


                            </div>
                            <div class="col-8">
                                <div class="">

                                    <div class="naslov py-2">

                                        {{ collect($doctor->drugs)->pluck('name')->implode(', ') }}
                                    </div>
                                    <div class="naslov py-2" style="font-size:22px;font-weight:bold">
                                        <i>{{ $doctor->user->name }}</i>
                                    </div>
                                    <div class="procenat-uspesnosti py-2">
                                        <span style="font-size:25px;">Treated patients: </span><span style="font-size:25px;">{{ $doctor->broj }}</span>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>



                </div>
            </div>
        </div>
    </div>
    </div>
@endsection