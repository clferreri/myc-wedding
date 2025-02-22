@extends('Back.Layout.layout')

@section('breadcrum')
<i class="fa-solid fa-chevron-right fa-lg" style="color: #ffffff;"></i> Dashboard
@endsection

@section('contenido')
    <div class="row">
        @include('Back.components.card_data_primary', ['title' => 'Dias restantes para el evento', 'value' => '88', 'icon' => '<i class="fa-solid fa-calendar-days fa-2xl" style="color: #ffffff;"></i>', 'footer' => '<span class="text-secondary text-sm font-weight-bolder">Fecha del evento: </span> <span class="text-sm">11/05/2025</span>'])
        @include('Back.components.card_data_danger', ['title' => 'Invitados Confirmados', 'value' => '50/200', 'icon' => '<i class="fa-solid fa-champagne-glasses fa-2xl" style="color: #ffffff;"></i>', 'footer' => '<span class="text-secondary text-sm font-weight-bolder">Porcentaje de Asistencia: </span> <span class="text-sm">25%</span>'])
        @include('Back.components.card_data_success', ['title' => 'Ultimo envio de invitaciones', 'value' => 'Hace 15 dias', 'icon' => '<i class="fa-solid fa-envelope-open-text fa-2xl" style="color: #ffffff;"></i>', 'footer' => '<span class="text-secondary text-sm font-weight-bolder">Ultimo envio: </span> <span class="text-sm">12/10/2024</span>'])
        @include('Back.components.card_data_primary', ['title' => 'Tareas Pendientes', 'value' => '50/200', 'icon' => '<i class="fa-solid fa-check-double fa-2xl" style="color: #ffffff;"></i>', 'footer' => '<span class="text-secondary text-sm font-weight-bolder">Porcentaje de Asistencia: </span> <span class="text-sm">25%</span>'])
    </div>
@endsection