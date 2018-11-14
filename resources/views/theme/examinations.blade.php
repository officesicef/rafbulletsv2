@extends('theme.layout')

@section('title', trans('activities.title'))

@section('style')
    <link rel="stylesheet" href="{{ asset('dist/vendor/jquery.dataTables.min.css') }}">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="d-flex">
                        <div class="px-4 d-flex align-items-center">
                            {{--<div class="px-3 text-white  text-size-7">--}}
                                {{--<i class="material-icons">list</i>--}}
                            {{--</div>--}}
                            <img src="/img/Todor.jpg" style="margin-top: 15px; margin-bottom: 15px">

                        </div>
                        <div class="media-body">
                            <div class="text-center py-4 px-4">
                                <h1>Pera Peric</h1>
                                <p class="my-0 text-secondary">Balkanska 25 / 3</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="d-flex">
                        <div class="px-4 d-flex bg-badge-red align-items-center border-right">
                            <div class="px-3 text-white  text-size-7">
                                <i class="material-icons">playlist_add_check</i>
                            </div>

                        </div>
                        <div class="media-body">
                            <div class="text-center py-4 px-4">
                                <h2> {{ $examinations->count() + 2}} </h2>
                                <p class="my-0 text-secondary">Examinations</p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="d-flex">
                        <div class="px-4 bg-badge-blue d-flex align-items-center" style="border-right: 1px solid #eee">
                            <div class="px-3 text-white text-size-7">
                                <i class="material-icons">list</i>
                            </div>

                        </div>
                        <div class="media-body">
                            <div class="text-center py-4 px-4">
                                <h2> 1997 </h2>
                                <p class="my-0 text-secondary">Year of birth</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="card">
                    <div class="d-flex">
                        <div class="px-4 bg-badge-green d-flex align-items-center" style="border-right: 1px solid #eee">
                            <div class="px-3 text-white text-size-7">
                                <i class="material-icons">account_balance</i>
                            </div>

                        </div>
                        <div class="media-body">
                            <div class="text-center py-4 px-4">
                                <h2> AB </h2>
                                <p class="my-0 text-secondary">Blod type</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">All examinations</h5>
                    </div>
                    <div class="card-body px-5">
                        <table class="datatable row-border hover table">
                            <thead class="rt-table-hide">
                            <tr>
                                <th class="date">
                                    Patient name
                                </th>
                                <th>
                                    Diagnose
                                </th>
                                <th>
                                    Date
                                </th>
                                <th class="text-center">
                                    Status
                                </th>
                            </tr>


                            </thead>
                            <tbody>

                            @forelse($examinations as $examination)

                                <tr>
                                    <td class="rt-full">
                                        {{ $examination->patient->first_name }} {{ $examination->patient->last_name }}
                                    </td>

                                    <td class="rt-full">
                                        {{ $examination->diagnose->name }}
                                    </td>
                                    <td class="rt-full">
                                        {{ $examination->created_at->format('d.m.Y') }}
                                    </td>
                                    <td class="rt-full text-center">
                                        @if($examination->active)
                                            <button style="width: 10px; height: 10px; background-color: #5ce2b1; border-color: #5ce2b1; cursor: default" class="btn mr-4 mb-4 btn-danger btn-fab btn-lg"></button>
                                        @endif
                                    </td>
                                </tr>

                            @endforeach

                                <tr>
                                    <td class="rt-full">
                                        Pera Peric
                                    </td>

                                    <td class="rt-full">
                                        Alcoholic
                                    </td>
                                    <td class="rt-full">
                                        11.11.2018.
                                    </td>
                                    <td class="rt-full text-center">
                                        {{--<button style="width: 10px; height: 10px; background-color: #5ce2b1; border-color: #5ce2b1; cursor: default" class="btn mr-4 mb-4 btn-danger btn-fab btn-lg"></button>--}}
                                    </td>
                                </tr>
                                <tr>
                                    <td class="rt-full">
                                        Pera Peric
                                    </td>

                                    <td class="rt-full">
                                        Alcoholic
                                    </td>
                                    <td class="rt-full">
                                        11.11.2018.
                                    </td>
                                    <td class="rt-full text-center">
                                        {{--<button style="width: 10px; height: 10px; background-color: #5ce2b1; border-color: #5ce2b1; cursor: default" class="btn mr-4 mb-4 btn-danger btn-fab btn-lg"></button>--}}
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <a href="{{ url('examination/create') }}" style="position: fixed; right: 20px; bottom: 52px; background-color: #508aeb; border-color: #508aeb;" class="btn mr-4 mb-4 btn-danger btn-fab btn-lg"><i class="material-icons">add</i></a>

@endsection

@section('script')
    <script src="{{ asset('dist/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/datatables-config.min.js') }}"></script>

    <script>
        datatablesConfig.loadTable({!! trans('datatable.translation') !!});
    </script>
@endsection