<div class="p-3 pt-3 row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-gradient-success d-flex align-items-center">
          <h3 class="card-title flex-grow-1"><i class="fas fa-users"></i> Liste des localités</h3>

          <div class="card-tools d-flex align-items-center ">
          <a class="mr-4 text-white btn btn-link d-block" ><i class="fas fa-user-plus"></i> Ajouter une localité</a>
            <div class="input-group input-group-md" style="width: 250px;">
              <input type="text" name="table_search" class="float-right form-control" placeholder="Search">

              <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="p-0 card-body table-responsive table-striped" style="height: 300px;">
          <table class="table table-head-fixed">
            <thead>
              <tr>
                <th style="width:10%;">No</th>
                <th style="width:45%;">Nom localité</th>
                <th style="width:20%;" class="text-center">Ajouté</th>
                <th style="width:25%;" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($localisations as $localisation)
              <tr>
                <td>
                  ({{ $localisation->id }})
                </td>
                <td>{{ $localisation->libel }}</td>
                <td class="text-center"><span class="tag tag-success">{{ $localisation->created_at }}</span></td>
                <td class="text-center">
                  <button class="btn btn-link" > <i class="far fa-edit"></i></button>
                  <button class="btn btn-link" wire:click="confirmDelete('{{ $localisation->libel }}', {{$localisation->id}})"><i class="far fa-trash-alt"></i> </button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
              {{ $localisations->links() }}
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
  </div>



