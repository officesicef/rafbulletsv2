<div class="topbar-container">
    <nav class="navbar bg-white text-dark navbar-expand navbar-expand-sm py-0 topbar fixed">
        <button class="btn btn-flat-secondary btn-sm btn-icon mr-2 no-shadow d-none d-xl-block sidebar-toggle">
            <i class="material-icons">menu</i>
        </button>
        <button class="btn btn-flat-secondary btn-sm btn-icon mr-5 d-xl-none no-shadow sidebar-hide" id="step4">
            <i class="material-icons">menu</i>
        </button>

        {{--<div class="navbar-text navbar-margin-logo text-center  d-block w-100">--}}
            {{--<span class="m-0 d-inline text-dark">--}}
                {{--<img src="#" alt="logoDigi" style="height:45px;">--}}
            {{--</span>--}}
        {{--</div>--}}

        <div class="ml-auto d-sm-flex">
            <div class="d-none d-sm-flex align-items-center">
                <input class="form-control collapsed topbar-search border-top-0 border-left-0 border-right-0 "
                       type="search" placeholder="Search" aria-label="Search">
            </div>
            <ul class="navbar-nav">
                <li class="nav-item dropdown no-caret mr-1">
                    <a class="dropdown-toggle nav-link text-center" role="button" data-toggle="dropdown"
                       aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons">notifications</i>

                    </a>
                    <div class="dropdown-menu dropdown-menu-right py-0" style="width:20rem"
                         aria-labelledby="navbarDropdown">
                        <ul class="list-group list-group-linked border-top-0 border-left-0 border-right-0 list-group-linked">
                            <li class="list-group-item">
                                <div class="px-3 py-3">
                                    <h6 class="m-0">asdasdas (<a href="#" class="text-warning">asd asd</a>)</h6>
                                </div>
                            </li>




                        </ul>
                    </div>
                </li>
                <li class="nav-item dropdown no-caret ml-xl-3">
                    <a class="text-xs nav-link dropdown-toggle" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="material-icons profile-icon">account_circle</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdown">
                        <!-- TODO: Get ime i rezime -->
                        <div class="dropdown-profile-name">

                        </div>
                        <a href="#" class="dropdown-item empty-link">ime prezime</a>


                    </div>
                </li>


            </ul>
        </div>

    </nav>


</div>