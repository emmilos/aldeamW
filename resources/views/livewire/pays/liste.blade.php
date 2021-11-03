<div class="row p-3 pt-3">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-gradient-success d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fas fa-users"></i> Liste des Pays</h3>

                <div class="card-tools d-flex align-items-center ">
                <a class="btn btn-link text-white mr-4 d-block" ><i class="fas fa-user-plus"></i> Ajouter un pays</a>
                  <div class="input-group input-group-md" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0 table-striped" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th style="width:8%;">No</th>
                      <th style="width:32%;">Pays (Code pays)</th>
                      <th style="width:25%;" >Nationalité</th>
                      <th style="width:15%;" class="text-center">Ajouté</th>
                      <th style="width:20%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($Pays as $pay)
                    <tr>
                      <td>
                        ({{ $pay->id }})
                      </td>
                      <td>{{ $pay->libel_pays }} ({{ $pay->code_pays }})</td>
                      <td>{{ $pay->libel_nationalite}}</td>
                      <td class="text-center"><span class="tag tag-success">{{ $pay->created_at }}</span></td>
                      <td class="text-center">
                        <button class="btn btn-link" > <i class="far fa-edit"></i></button>
                        <button class="btn btn-link" wire:click="confirmDelete('{{ $pay->libel_pays }}', {{$pay->id}})"><i class="far fa-trash-alt"></i> </button>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                    {{ $Pays->links() }}
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>



