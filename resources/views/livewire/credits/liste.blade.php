<div class="p-3 pt-3 row">
    <div class="col-12">
      <div class="card">
        <div class="card-header bg-gradient-success d-flex align-items-center">
          <h3 class="card-title flex-grow-1"><i class="fa fa-list fa-2x"></i> Liste des financements</h3>

          <div class="card-tools d-flex align-items-center ">
          <a class="mr-4 text-white btn btn-link d-block"><i class="fas fa-user-plus"></i> Nouveau financements</a>
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
                <th style="width:10%;">No Doss</th>
                <th style="width:20%;" class="text-center">client</th>
                <th style="width:20%;" class="text-center">Financement</th>
                <th style="width:8%;" class="text-center">Durée</th>
                <th style="width:12%;" class="text-center">Date dem</th>
                <th style="width:15%;" class="text-center">montant</th>
                <th style="width:15%;" class="text-center">Action</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($credits as $credit)
              <tr>
                  <td>{{ $credit->id }}</td>
                  <td class="text-center">{{ $credit->client->pp_nom}} {{ $credit->client->pp_prenom}}</td>
                  <td class="text-center">{{ $credit->produit->libel}}</td>
                  <td class="text-center">{{ $credit->duree_mois}}</td>
                  <td class="text-center">{{ $credit->date_dem }}</td>
                  <td class="text-center">{{ $credit->mnt_dem}}</td>
                  <td class="text-center">
                      <button class="btn btn-link" > <i class="far fa-edit"></i> </button>

                       <button class="btn btn-link"> <i class="fa fa-list"></i></button>


                  </td>
              </tr>
          @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <div class="float-right">
              {{ $credits->links() }}
          </div>
        </div>
      </div>
      <!-- /.card -->
    </div>
</div>
