<div>

    @can('denominations.create')
        <x-button-create href="{{route('denominations.create')}}"/>
    @endcan
    
    <x-search-component placeholder="{{$placeholder='Ingrese un texto para buscar una denominacion'}}"/>  
<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-dark">
            
          <tr>
            <th scope="col">Tipo</th>
            <th scope="col">Valor</th>
            <th scope="col">Imagen</th>
            <th scope="col"></th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
            @forelse ($denominations as $denomination)            
            <tr>
                
                <div >
                        <td>{{$denomination->type}}</td>
                        <td>{{"$".number_format($denomination->value,2)}}</td>
                        <td><img src="{{$denomination->image}}" alt="70" width="70"></td> 
                </div>

                @can('denominations.edit')
                     <x-options-edit href="{{route('denominations.edit',$denomination)}}"/>
                @endcan
               
                @can('denominations.destroy')
                      <x-options-destoy action="{{route('denominations.destroy',$denomination)}}"/>
                @endcan
              
            </tr>
                
                @empty
                    <p class=" text-danger">No se encontraron resultados en su busqueda</p>
            @endforelse 
        </tbody>
      </table>
  </div>
        <div class="container offset-lg-9">
            {{$denominations->links()}}
        </div>
</div>
