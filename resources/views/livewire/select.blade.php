<div>
<div class="row">
        <div class="form-group col-md-3">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" wire:model="dokter" name="speciality" id="exampleFormControlSelect1">
            <option selected disabled>Choose a Speciality</option>
            @foreach($dokters as $dokter)
            <option value="{{$dokter->speciality_id}}">{{$dokter->speciality->speciality}}</option>
            @endforeach
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" wire:model="dokter" name="hari" id="exampleFormControlSelect1">
        <option selected disabled>Choose a Hari</option>
        </select>
        </div>
        <div class="form-group col-md-3">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" name="name" id="exampleFormControlSelect1">
            <option>1</option>
        </select>
        </div>
        <div class="justify-content-center">
        <a href="#" class="btn btn-primary d-flex" type="button">Cek</a>
        </div>
        </div>
</div>
