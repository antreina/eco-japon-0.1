<div class="form-group">
    <label for="" class="text-white">Residuo</label>
    <input type="text" class="form-control" wire:model='residuo'>  
    @error('residuo') <span class="text-danger">{{$message}}</span>@enderror 
</div>
<div class="form-group ">
    <label for="" class="text-white" >Descripción</label>
    <input type="text" class="form-control" wire:model='description'>
    @error('descripcion') <span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="form-group ">
    <label for="" class="text-white" >Estado</label>
    <input type="text" class="form-control" wire:model='estado'>
    @error('estado') <span class="text-danger">{{$message}}</span>@enderror
</div>
<div class="form-group ">
    <label for="" class="text-white" >Cantidad</label>
    <input type="text" class="form-control" wire:model='cantidad'>
    @error('cantidad') <span class="text-danger">{{$message}}</span>@enderror
</div>