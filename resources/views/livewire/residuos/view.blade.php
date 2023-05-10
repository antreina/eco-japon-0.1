<div class="row border-warnig">
    <div class=" card col-md-8 border-warning">
        <div class="mt-2 table-responsive">
            <input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar"><br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>N.º</th>
                        <th>Residuo</th>
                        <th>Descripción</th>
                        <th>Estado</th>
                        <th>Cant.</th>
                        @if(Auth::user()->cedula=='1722352695')
                        <th><a class="text-danger" href="reporte" >PDF</a></th>
                        @endif
                    </tr>
                </thead>
                <tbody >
                    @foreach ($residuos as $res)
                    {{-- @if($res->cedula == Auth::user()->cedula ) --}}
                    <tr >
                        <td>{{$res->id}}</td>
                        <td>{{$res->residuo}}</td>
                        <td>{{$res->description}}</td>
                        <td>{{$res->estado}}</td>
                        <td>{{$res->cantidad}}</td>
                        <td >
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-warning text-white dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                </button>
                                <ul class="dropdown-menu">
                                  <a class="text-secondary"wire:click='edit({{$res->id}})'>EDITAR</a>
                                  @if(Auth::user()->cedula=='1722352695')
                                  <a type="button" class="text-danger" wire:click='destroy({{$res->id}})'>  BORRAR</a>
                                  @endif
                                </ul>
                            </div>
                        </td>
                    </tr>
                    {{-- @endif --}}
                    @endforeach
                </tbody>
            </table>
            {{$residuos->links('pagination::Bootstrap-5')}}
        </div>
    </div>
    <div class="col-md-4">
        <div class="container ">
            @include("livewire.residuos.$view")
        </div>
    </div>
</div>