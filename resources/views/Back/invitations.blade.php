@extends('Back.Layout.layout')

@section('breadcrum')
<i class="fa-solid fa-chevron-right fa-lg" style="color: #ffffff;"></i> Dashboard
@endsection

@section('contenido')
<div class="row mt-4 mb-2">
    <div class="col-2">
    </div>
    <div class="col-10" style="text-align: right">
        <input style="margin-right: 5px" type="button" class="btn btn-success" value="+ Nueva Invitacion" name="" id="" data-bs-toggle="modal" data-bs-target="#mdlCommunication">
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            @isset($invitation)
                <h3 class="col-12 text-center mt-3">INVITACION ACTUAL</h3>
                <div class="col-11 col-sm-10 col-md-9 text-center p-3 m-auto" style="background: url('https://img.freepik.com/fotos-premium/modelo-tarjeta-invitacion-boda_776894-200812.jpg?w=1380') no-repeat center center/cover; box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.274); border-radius: 6px;">
                    <div class="row justify-content-center">
                        <img class="col-10 col-sm-6 col-md-4 p-0" src="{{$invitation->image_url}}" alt="imagen" style="box-shadow: 10px 10px 20px rgba(0, 0, 0, 0.637); border-radius: 10px;">
                    </div>
                    <br/>

                    @if (!empty($invitation->message))
                        <div class="row justify-content-center">
                            <div class="col-11 col-sm-6 col-md-4 text-center p-2" style="background-color: rgba(202, 202, 202, 0.562); border-radius: 10px;">
                                <p style="color: #272727">{{$invitation->message}}</p>
                            </div>

                        </div>
                    @endif


                </div>

                <table>

                </table>
            @endisset

        </div>
    </div>
</div>


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

