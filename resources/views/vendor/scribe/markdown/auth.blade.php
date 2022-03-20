# Solicitudes de autenticación

@if(!$isAuthed)
This API is not authenticated.
@else
{!! $authDescription !!}

{!! $extraAuthInfo !!}
@endif
