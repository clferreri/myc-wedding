@extends('Back.Layout.layout')

@section('breadcrum')
<i class="fa-solid fa-chevron-right fa-lg" style="color: #ffffff;"></i> Dashboard
@endsection

@section('contenido')
<div class="row mt-4 mb-2">
    <div class="col-1">
    </div>
    <div class="col-10" style="text-align: right">
        <input style="margin-right: 3px" type="button" class="btn btn-success" value="+ Nuevo grupo" name="" id="">
    </div>
</div>
<div class="row">
    <div class="col-1">
    </div>
    <div class="col-10">
        <div class="card">
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
            <thead>
                <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Grupo</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Descripción</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad Invitados</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Creado</th>
                <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($groups as $group)
                    <tr>
                        <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                            <img src="https://img.freepik.com/fotos-premium/grupo-personas-diversas-pie-juntas-ilustracion-vectorial-al-estilo-dibujos-animados_941097-36289.jpg" class="avatar avatar-sm me-3">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                            <h5 class="mb-0 text-xs">{{$group->name}}</h5>
                            {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                            </div>
                        </div>
                        </td>
                        <td>
                        <p class="text-xs text-secondary mb-0">{{$group->description}}</p>
                        </td>
                        <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm badge-success">Online</span>
                        </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{$group->created_at}}</span>
                        </td>
                        <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
                        </td>
                    </tr>
                @endforeach


                {{-- <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">Alexa Liras</h6>
                        <p class="text-xs text-secondary mb-0">alexa@creative-tim.com</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-secondary">Offline</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">11/01/19</span>
                </td>
                <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                    </a>
                </td>
                </tr>

                <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">Laurent Perrier</h6>
                        <p class="text-xs text-secondary mb-0">laurent@creative-tim.com</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Executive</p>
                    <p class="text-xs text-secondary mb-0">Projects</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-success">Online</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">19/09/17</span>
                </td>
                <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                    </a>
                </td>
                </tr>

                <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-3.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">Michael Levi</h6>
                        <p class="text-xs text-secondary mb-0">michael@creative-tim.com</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Programator</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-success">Online</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">24/12/08</span>
                </td>
                <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                    </a>
                </td>
                </tr>

                <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-2.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">Richard Gran</h6>
                        <p class="text-xs text-secondary mb-0">richard@creative-tim.com</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Manager</p>
                    <p class="text-xs text-secondary mb-0">Executive</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-secondary">Offline</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">04/10/21</span>
                </td>
                <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                    </a>
                </td>
                </tr>

                <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                    <div>
                        <img src="https://demos.creative-tim.com/soft-ui-design-system-pro/assets/img/team-4.jpg" class="avatar avatar-sm me-3">
                    </div>
                    <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-xs">Miriam Eric</h6>
                        <p class="text-xs text-secondary mb-0">miriam@creative-tim.com</p>
                    </div>
                    </div>
                </td>
                <td>
                    <p class="text-xs font-weight-bold mb-0">Programtor</p>
                    <p class="text-xs text-secondary mb-0">Developer</p>
                </td>
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm badge-secondary">Offline</span>
                </td>
                <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold">14/09/20</span>
                </td>
                <td class="align-middle">
                    <a href="#!" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                    Edit
                    </a>
                </td>
                </tr> --}}
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
@endsection
