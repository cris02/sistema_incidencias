<div class="card">
    <div class="card-header p-2">
        <ul class="nav nav-pills">
            {{-- aqui va el emcabezado --}}
            {!! $tabs !!}
        </ul>
    </div>
    <div class="card-body">
        {{-- aqui va el contenido --}}
        <div class="tab-content">
            {{ $slot }}
        </div>

    </div>
</div>
