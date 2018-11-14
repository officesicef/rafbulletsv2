<div class="sidebar-container">
    <aside class="sidebar sidebar-left sidebar-fixed sidebar-dark" >

        <div class="scroll">

            <div class="sidebar-header text-white ">
                <div class="sidebar-brand d-flex justify-content-between align-items-center">
                    <div class="title text-truncate">
                        BulletsClinic
                    </div>
                    <div class="logo align-items-center justify-content-around">
                        <i class="material-icons" style="color:#508AEB;">library_add</i>
                    </div>
                </div>
            </div>

            <div class="sidebar-nav-container" >
                <ul class="list-nav sidebar-nav list-nav-dark list-nav-dark-cyan">


                    <li class="list-nav-group-title">
                        <span class="text-uppercase">
                            {{--{{ trans('header.dashboard') }}--}}
                        </span>
                    </li>


                    {{--<li class="list-nav-item">--}}

                        {{--<a href="#" class="list-nav-link">--}}
                            {{--<span class="list-nav-icon">--}}
                                {{--<i class="material-icons">home</i>--}}
                            {{--</span>--}}
                            {{--<span class="list-nav-label">{{ trans('header.overview') }}</span>--}}
                        {{--</a>--}}

                    {{--</li>--}}

                    {{--<li class="list-nav-item">--}}

                        {{--<a href="#" class="list-nav-link">--}}
                            {{--<span class="list-nav-icon">--}}
                                {{--<i class="material-icons">developer_board</i>--}}
                            {{--</span>--}}
                            {{--<span class="list-nav-label">{{ trans('surveys.title') }}</span>--}}
                        {{--</a>--}}

                    {{--</li>--}}

                    {{--<li class="list-nav-item">--}}

                        {{--<a href="#" class="list-nav-link">--}}
                            {{--<span class="list-nav-icon">--}}
                                {{--<i class="material-icons">local_activity</i>--}}
                            {{--</span>--}}
                            {{--<span class="list-nav-label">{{ trans('header.activities') }}</span>--}}
                        {{--</a>--}}

                    {{--</li>--}}

                    <li class="list-nav-item">

                        <a href="{{url("/overview")}}" class="list-nav-link">
                            <span class="list-nav-icon">
                                <i class="material-icons" style="background-color:#508AEB">developer_board</i>
                            </span>
                            <span class="list-nav-label">Overview</span>
                        </a>

                    </li>
                    <li class="list-nav-item">

                        <a href="{{url("/")}}" class="list-nav-link">
                            <span class="list-nav-icon" style="background-color:#508AEB">
                                <i class="material-icons">widgets</i>
                            </span>
                            <span class="list-nav-label">Examination</span>
                        </a>

                    </li>

                    <li class="list-nav-item">

                        <a href="{{url("/examination/create")}}" class="list-nav-link">
                            <span class="list-nav-icon" style="background-color:#508AEB">
                                <i class="material-icons">person</i>
                            </span>
                            <span class="list-nav-label">Patient</span>
                        </a>

                    </li>

                </ul>
            </div>
        </div>
    </aside>

</div>