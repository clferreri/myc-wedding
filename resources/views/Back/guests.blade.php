@extends('Back.Layout.layout')

@section('breadcrum')
<i class="fa-solid fa-chevron-right fa-lg" style="color: #ffffff;"></i> Dashboard
@endsection

@section('contenido')
<div class="row mt-4 mb-2">
    <div class="col-2">
    </div>
    <div class="col-10" style="text-align: right">
        <input style="margin-right: 5px" type="button" class="btn btn-success" value="+ Nuevo invitado" name="" id="">
        <input style="margin-right: 5px" type="button" class="btn btn-success" value="⬆️ Importar masivo" name="" id="" data-bs-toggle="modal" data-bs-target="#mdlFile">
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
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Invitado</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Telefono</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Cant. Invitaciones</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Confirmado</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                    <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guests as $guest)
                        <tr>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs text-secondary mb-0">{{$guest->id}}</p>
                                </td>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center">
                                <h5 class="mb-0 text-xs">{{$guest->name . " " . $guest->surname}}</h5>
                                {{-- <p class="text-xs text-secondary mb-0">john@creative-tim.com</p> --}}
                                </div>
                            </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">
                                    {{$guest->email . " "}}
                                        <a href="mailto:{{$guest->email}}" style="margin-left: 3px;"><i class="fa-solid fa-envelope fa-xl"></i></a>
                                </p>

                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0">
                                    {{$guest->phone . " "}}
                                    <a href="https://wa.me/{{$guest->phone}}" style="margin-left: 3px;"><i class="fa-brands fa-whatsapp fa-xl"></i></a>
                            </p>
                        </td>
                        <td class="align-middle text-center text-sm">
                            <p class="text-xs font-weight-bold mb-0">
                                1
                            </p>
                        </td>
                        <td class="align-middle text-center">
                                @if ($guest->confirmed_at)
                                    <span class="badge bg-gradient-success">CONFIRMADO</span>
                                @else
                                    <span class="badge bg-gradient-warning">PENDIENTE</span>
                                @endif


                        </td>
                        <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">-</span>
                        </td>
                        <td class="align-middle">
                        <a href="javascript:;" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                            Edit
                        </a>
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
<div class="modal fade" id="mdlFile" tabindex="-1" role="dialog" aria-labelledby="mdlFile" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <form id="uploadForm" enctype="multipart/form-data">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alta Masiva</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Archivo:</label>
                    <input class="form-control" type="file" id="inputFile" accept=".xlsx,.xls">
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
  <p hidden id="txtUrlUpload">{{route('guest.upload')}}</p>
@endsection


@section('scripts')
<script>

    document.getElementById('uploadForm').addEventListener('submit', async function (e) {
        e.preventDefault();

        const fileInput = document.getElementById('inputFile');
        if (!fileInput.files.length) {
            document.getElementById('txtResponse').textContent = "Debes cargar un archivo..."
            return;
        }

        const formData = new FormData();
        formData.append('file', fileInput.files[0]);
        let url = document.getElementById('txtUrlUpload').textContent;
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
            toastr.success('Se importo el archivo y se dio de alta los invitados.', '¡Importacion Correcta!');
            setTimeout(function() {
                location.reload();
            }, 5000);
        } catch (error) {
            console.error(error);
            document.getElementById('txtResponse').innerText = 'Ocurrió un error al procesar el archivo.';
        }
    });
  </script>
@endsection

