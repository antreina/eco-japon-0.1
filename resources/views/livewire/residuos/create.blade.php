<div class="card-body bg-secondary shadow p-3 mb-3">
    <h3 class="text-white">Agregar residuo</h3>
    @include('livewire.residuos.form')
    <br>
    <div class="form-group">
        <button class="btn btn-primary text-white " wire:click='save'>Guardar</button>
        <button class="btn btn-warning text-white" wire:click='resetear'>Cancelar</button>
    </div>
</div>