<aside
    class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark"
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
           aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0"
           href="{{route('dashboards.home')}}"
            {{--           target="_blank"--}}
        >
            <img src="{{asset('img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
            <span class="ms-1 font-weight-bold text-white">My Good Doctor</span>
        </a>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item mb-2 mt-0">
                <a data-bs-toggle="collapse" href="#ProfileNav"
                   class="nav-link text-white @if(request()->is('profile/*')) active @endif"
                   aria-controls="ProfileNav"
                   role="button" aria-expanded="false">
                    @php $files = new FilesystemIterator('img/doctors'); @endphp
                    @foreach($files as $file)
                        @php $entries[]= str_replace("\\",'/',$file); @endphp
                    @endforeach
                    @php $img = array_rand($entries,1); @endphp
                    <img src="{{asset($entries[$img])}}" class="avatar">
                    <span class="nav-link-text ms-2 ps-1"
                          style="text-overflow: ellipsis;  width: 150px;
  overflow: hidden;
  white-space: nowrap;">{{auth()->user()->name}}</span>
                </a>
                <div class="collapse @if(request()->is('profile/*')) show @endif" id="ProfileNav" style="">
                    <ul class="nav ">
                        <li class="nav-item @if(request()->is('profile/*')) active @endif">
                            <a class="nav-link text-white @if(request()->is('profile/*')) active @endif"
                               href="{{route('profile.overview')}}">
                                <span class="sidenav-mini-icon"> MP </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Meu Perfil </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="../../pages/pages/account/settings.html">
                                <span class="sidenav-mini-icon"> C </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Configurações </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white " href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <span class="sidenav-mini-icon"> S </span>
                                <span class="sidenav-normal  ms-3  ps-1"> Sair </span>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <hr class="horizontal light mt-0">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples"
                   class="nav-link text-white @if(request()->is('dashboards/exams*') or request()->is('dashboards/patients*') or request()->is('dashboards/prescriptions*')) active @endif"
                   aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round opacity-10">dashboard</i>
                    <span class="nav-link-text ms-2 ps-1">Dashboards</span>
                </a>
                <div
                    class="collapse @if(request()->is('dashboards/exams*') or request()->is('dashboards/patients*') or request()->is('dashboards/prescriptions*')) show @endif"
                    id="dashboardsExamples">
                    <ul class="nav ">
                        <li class="nav-item @if(request()->is('dashboards/exams*')) active @endif">
                            <a class="nav-link text-white @if(request()->is('dashboards/exams*')) active @endif"
                               href="{{route('dashboards.exams')}}">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Exames </span>
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('dashboards/patients*')) active @endif">
                            <a class="nav-link text-white @if(request()->is('dashboards/patients*')) active @endif"
                               href="{{route('dashboards.patients')}}">
                                <span class="sidenav-mini-icon"> P </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Pacientes </span>
                            </a>
                        </li>
                        <li class="nav-item @if(request()->is('dashboards/prescriptions*')) active @endif">
                            <a class="nav-link text-white @if(request()->is('dashboards/prescriptions*')) active @endif"
                               href="{{route('dashboards.prescriptions')}}">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Receitas </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link text-white "
                   aria-controls="applicationsExamples" role="button" aria-expanded="false">
                    <i class="material-icons-round {% if page.brand == 'RTL' %}ms-2{% else %} me-2{% endif %}">apps</i>
                    <span class="nav-link-text ms-2 ps-1">Agendamento</span>
                </a>
                <div class="collapse " id="applicationsExamples">
                    <ul class="nav ">
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="#">
                                <span class="sidenav-mini-icon"> CG </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Calendário Geral </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="#">
                                <span class="sidenav-mini-icon"> E </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Exames </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="#">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Receitas </span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link text-white " href="../../pages/applications/datatables.html">
                                <span class="sidenav-mini-icon"> R </span>
                                <span class="sidenav-normal  ms-2  ps-1"> Retorno </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</aside>
