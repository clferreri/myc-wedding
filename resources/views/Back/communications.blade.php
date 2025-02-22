@extends('Back.Layout.layout')

@section('breadcrum')
<i class="fa-solid fa-chevron-right fa-lg" style="color: #ffffff;"></i> Dashboard
@endsection

@section('contenido')
<div class="row mt-4 mb-2">
    <div class="col-2">
    </div>
    <div class="col-10" style="text-align: right">
        <input style="margin-right: 5px" type="button" class="btn btn-success" value="+ Nueva Comunicacion" name="" id="" data-bs-toggle="modal" data-bs-target="#mdlCommunication">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="table-responsive">
                <table class="table align-items-center mb-0">
                <thead>
                    <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titulo</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Mensaje</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Grupo</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cantidad Envios</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estado</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($communications as $communication)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs text-secondary mb-0">{{$communication->id}}</p>
                                </td>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h5 class="mb-0 text-xs">{{$communication->title}}</h5>
                                </div>
                            </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">
                                    @if($communication->image_url)
                                    <a href="{{$communication->image_url}}" style="color: #2677ff !important">[imagen] </a>
                                    @endif
                                    {{$communication->message}}
                                </p>

                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0">
                                    Familia
                                </p>
                            </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">
                                {{$communication->communicationsSent->count()}}/{{$communication->total_to_send}}
                            </p>
                        </td>

                        <td class="align-middle text-center">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                                @if(!$communication->send_at)
                                Pendiente envio
                                @else
                                ENVIADA
                                @endif
                            </a>
                        </td>

                        <td class="align-middle text-center">
                            @if(!$communication->send_at)
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs text-success" style="margin-right: 6px;" onclick="sendCommunication({{$communication->id}})">
                                <i class="fa-solid fa-paper-plane fa-2xl img-icon"></i>
                            </a>
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs" style="margin-right: 6px;">
                                <i class="fa-solid fa-pen-to-square fa-2xl img-icon"></i>
                            </a>

                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs text-danger">
                                <i class="fa-solid fa-trash fa-2xl img-icon"></i>
                            </a>
                            @endif

                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="mdlCommunication" tabindex="-1" role="dialog" aria-labelledby="mdlCommunication" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form id="uploadForm" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alta de Comunicación</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <div class="form-group">
                <label for="txtTitle" class="form-control-label">Titulo</label>
                <input class="form-control" type="text" value="" id="txtTitle" name="title">
            </div>
            <div class="form-group">
                <label for="txtMessage">Mensaje</label>
                <textarea class="form-control" id="txtMessage" name="message" rows="4" style="resize: none;"></textarea>
            </div>
            <div class="form-group">
                <label for="txtImg" class="form-control-label">Url Imagen</label>
                <input class="form-control" type="text" value="" id="txtImg" name="title">
            </div>
            <div class="form-group">
                <label for="cmbGroup">Grupo</label>
                <select class="form-control" id="cmbGroup">
                  <option selected value="0">A todos</option>
                  @foreach ($groups as $group)
                    <option value="{{$group->id}}">{{$group->name}}</option>
                  @endforeach
                </select>
              </div>
            <div id="response"><p id="txtResponse" class="text-danger text-xs"></p></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn bg-gradient-success">Cargar</button>
        </div>
        </form>
      </div>
    </div>
  </div>
  <p hidden id="txtUrl">{{route('communication.store')}}</p>
  <p hidden id="txtUrlSend">{{route('communication.send')}}</p>
  <p hidden id="txtUrlDelete">{{route('communication.send')}}</p>
@endsection


@section('scripts')
<script>

    document.getElementById('uploadForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        const formData = new FormData();
        formData.append('title', document.getElementById('txtTitle').value);
        formData.append('message', document.getElementById('txtMessage').value);
        formData.append('imageUrl', document.getElementById('txtImg').value);
        formData.append('groupId', document.getElementById('cmbGroup').value);
        let url = document.getElementById('txtUrl').textContent;
        try {
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            });

            const result = await response.json();
            if(!response.ok){
                throw new Error(result.success);
            }
            document.getElementById('txtResponse').innerText = result.success || result.error;
            toastr.success('Se realizo el alta de la comunicación solicitada.', 'Carga Correcta!');
            setTimeout(function() {
                location.reload();
            }, 5000);
        } catch (error) {
            console.error(error);
            document.getElementById('txtResponse').innerText = 'Ocurrió un error al procesar el archivo.';
        }
    });

    async function sendCommunication(id)
    {
        let url = document.getElementById('txtUrlSend').textContent;
        document.getElementById('spinnerContainer').style.display = 'flex';
        try {
            toastr.info('El sistema empezara a procesar tu comunicación #' + id + '.');
            const formData = new FormData();
            formData.append('id', id);
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            });

            const result = await response.json();
            if(!response.ok){
                throw new Error(result.success);
            }
            document.getElementById('txtResponse').innerText = result.success || result.error;
            toastr.success('El sistema finalizo de procesar tu comunicación #' + id + '.', '¡Comunicacion Enviada!');
            document.getElementById('spinnerContainer').style.display = 'none';
            setTimeout(function() {
                location.reload();
            }, 5000);
        } catch (error) {
            console.error(error);
            document.getElementById('txtResponse').innerText = 'Ocurrió un error al procesar el archivo.';
        }
    }

    async function deleteCommunication(id)
    {
        let url = document.getElementById('txtUrlDelete').textContent;
        try {
            const formData = new FormData();
            formData.append('id', id);
            const response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: formData
            });

            const result = await response.json();
            if(!response.ok){
                throw new Error(result.success);
            }
            document.getElementById('txtResponse').innerText = result.success || result.error;
            toastr.success('Se elimino la comunicación #' + id + '.', '¡Comunicacion Eliminada!');
            setTimeout(function() {
                location.reload();
            }, 5000);
        } catch (error) {
            console.error(error);
            document.getElementById('txtResponse').innerText = 'Ocurrió un error al procesar el archivo.';
        }
    }

  </script>
@endsection

