<div>
    <form method="POST" action="{{route('marks.store')}}" enctype="multipart/form-data">
        @method('POST')
        @csrf
        <div class="form-group">
          <label for="">Nombre de la marca</label>
            <input type="text" name="name" id="" class="form-control" required placeholder="Nombre de la marca">
          @error('name')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
          <label for="">Proveedor</label>
          <input type="text" class="form-control" id=""placeholder="Proveedor del producto" required name="provider">
          @error('provider')
            <br>
                <small class="text-danger">*{{$message}}</small>
            <br>
          @enderror
        </div>

        <div class="form-group">
            <label for="">Teléfono</label>
            <input type="tel" class="form-control" id=""placeholder="Telefono del proveedor" required name="telephone">
            @error('telephone')
              <br>
                  <small class="text-danger">*{{$message}}</small>
              <br>
            @enderror
          </div>
          
          <x-buttonsave/>
      </form>
</div>