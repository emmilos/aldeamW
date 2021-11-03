<div class="p-4 pt-5 row">
          <div class="col-12">
            <div class="card">
              <div class="card-header bg-gradient-primary d-flex align-items-center">
                <h3 class="card-title flex-grow-1"><i class="fa fa-list fa-2x"></i> Liste des types de financements</h3>

                <div class="card-tools d-flex align-items-center ">
                <a class="mr-4 text-white btn btn-link d-block"><i class="fas fa-user-plus"></i> Nouveau type de financements</a>
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
                      <th style="width:50%;">Type de financement</th>
                      <th style="width:20%;" class="text-center">Ajouté</th>
                      <th style="width:30%;" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($typecredits as $typecredit)
                    <tr>
                        <td>{{ $typecredit->id }}</td>
                        <td class="text-center">{{ optional($typecredit->created_at)->diffForHumans() }}</td>
                        <td class="text-center">
                            <button class="btn btn-link" wire:click="editTypeArticle({{$typecredit->id}})"> <i class="far fa-edit"></i> </button>

                             <button class="btn btn-link" wire:click="showProp({{$typecredit->id}})"> <i class="fa fa-list"></i> propriétés</button>


                        </td>
                    </tr>
                @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <div class="float-right">
                    {{ $typecredits->links() }}
                </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
    </div>
