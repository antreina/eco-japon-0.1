<div class="card-body bg-secondary shadow p-3 mb-3">
    <h3 class="text-white">Editar Residuo</h3>
    @include('livewire.residuos.form')
    {{-- @include('livewire.products.form') --}}
    <br>
    <div class="form-group">
        <button class="btn btn-primary text-white" wire:click='update'>Guardar</button>
        <button class="btn btn-warning text-white" wire:click='resetear'>Cancelar</button>
    </div>
</div>