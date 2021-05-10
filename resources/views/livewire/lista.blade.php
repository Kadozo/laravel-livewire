<div>
    <div class="container m-3">
        <div class="input-group mb-3">
            <input wire:model = "item" type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2">
            @if ($action == 'C')
                <button wire:click="add" class="btn btn-outline-primary" type="button" id="button-addon2"> Adicionar </button>
            @else
                <button wire:click="update" class="btn btn-outline-primary" type="button" id="button-addon2"> Atualizar </button>
            @endif
            <button wire:click="resetList" class="btn btn-outline-secondary" type="button" id="button-addon2"> Resetar Lista </button>

        </div>
        <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Elementos</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($lista as $key => $item)
                    <tr>
                        <td>{{$item}}</td>
                        <td>
                            <button wire:click = "remove({{$key}})" class="btn btn-outline-danger">  Remover  </button>
                            <button wire:click = "edit({{$key}})" class="btn btn-outline-warning">  Editar  </button>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>  
</div>
