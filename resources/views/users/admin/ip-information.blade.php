<div class="modal fade" id="ipInformation" tabindex="-1" role="dialog" aria-labelledby="ipInformationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content popup">
        <div class="modal-header">
            <h5 class="modal-title popuptitle" id="ipInformationLabel">INFORMACIÓN DE DIRECCIÓN IP</h5>
        </div>
        <div class="modal-body popupcontent">
            @if ($position)
                <p>Dirección IP: {{$letter->ip_address}}</p>
                <p>País: {{$position->countryName}}</p>
                <p>Región: {{$position->regionName}}</p>
                <p>Ciudad: {{$position->cityName}}</p>
                <p>Latitud: {{$position->latitude}}</p>
                <p>Longitud: {{$position->longitude}}</p>
            @else
                <p>Información de dirección IP no disponible.</p>
            @endif
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light border border-dark" data-dismiss="modal"><i class="fas fa-times"></i> CERRAR</button>
        </div>
        </div>
    </div>
</div>