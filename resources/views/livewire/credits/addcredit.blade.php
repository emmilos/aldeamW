<div class="p-4 pt-3 row">
            <div class="col-md-8">
            <!-- general form elements -->
            <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus fa-2x"></i> Mise en place dossier de credit</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" wire:submit.prevent="addUser()">
                <div class="card-body">

                    <div class="d-flex">


                        <div class="form-group flex-grow-1">
                            <label >Client </label>
                            <select  class="form-control" wire:model="newsUser.nom">
                                <option value=""></option>
                                @foreach ($Clients as $Client)
                                    <option value="{{$Client->id}}">{{ $Client->pp_nom }} {{ $Client->pp_prenom }} {{ $Client->pm_raison_sociale }}</option>
                                @endforeach
                            </select>
                            @error("newUser.prenom")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                        <div class="mr-2 form-group flex-grow-1">
                            <label >No Client</label>
                            <input type="text" wire:model="newUser.nom" class="form-control @error('newUser.nom') is-invalid @enderror">

                            @error("newUser.nom")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group flex-grow-1">
                            <label >Mode de financement</label>
                            <select  class="form-control" wire:model="newsUser.nom">
                                <option value=""></option>
                                @foreach ($typecredits as $typecredit)
                                    <option value="{{$typecredit->id}}">{{ $typecredit->libel }}</option>
                                @endforeach
                            </select>
                            @error("newUser.prenom")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>




                  <div class="form-group">
                    <label >Mode de perception de la marge</label>
                    <select class="form-control @error('newUser.sexe') is-invalid @enderror" wire:model="newUser.sexe">
                        <option value="">---------</option>
                        <option value="1">Au debut</option>
                        <option value="2">Dans les remboursements</option>
                        <option value="3"> A la fin</option>
                    </select>
                    @error("newUser.sexe")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>

                  <div class="form-group">
                    <label >Périodicité</label>
                    <select class="form-control @error('newUser.sexe') is-invalid @enderror" wire:model="newUser.sexe">
                        <option value="">Mensuelle</option>
                        <option value="1">Trimestrielle</option>
                        <option value="2">Semestrielle</option>
                        <option value="3">Annuelle</option>
                        <option value="4">En une selle fois</option>
                    </select>
                    @error("newUser.sexe")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>


                  <div class="form-group">
                    <label >Type de caution fin.</label>
                    <select class="form-control @error('newUser.sexe') is-invalid @enderror" wire:model="newUser.sexe">
                        <option value="">...............</option>
                        <option value="1">Caution financière progressive</option>
                        <option value="2">Caution financière préalable</option>
                    </select>
                    @error("newUser.sexe")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>

                  <div class="form-group flex-grow-1">
                    <label >Mode de calcul de la marge</label>
                    <select  class="form-control" wire:model="newsUser.nom">
                        <option value=""></option>
                        @foreach ($typemarges as $typemarge)
                            <option value="{{$typemarge->id}}">{{ $typemarge->libel }}</option>
                        @endforeach
                    </select>
                    @error("newUser.prenom")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>



                  <div class="form-group">
                    <label >Adresse e-mail</label>
                    <input type="text" class="form-control @error('newUser.email') is-invalid @enderror" wire:model="newUser.email">
                    @error("newUser.email")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                  </div>

                  <div class="d-flex">
                        <div class="mr-2 form-group flex-grow-1">
                            <label >Telephone 1</label>
                            <input type="text" class="form-control @error('newUser.telephone1') is-invalid @enderror" wire:model="newUser.telephone1">
                            @error("newUser.telephone1")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group flex-grow-1">
                            <label >Telephone 2</label>
                            <input type="text" class="form-control" wire:model="newUser.telephone2">
                        </div>
                    </div>

                <div class="form-group">
                    <label >Piece d'identité</label>
                    <select class="form-control @error('newUser.pieceIdentite') is-invalid @enderror" wire:model="newUser.pieceIdentite">
                        <option value="">---------</option>
                        <option value="CNI">CNI</option>
                        <option value="PASSPORT">PASSPORT</option>
                        <option value="PERMIS DE CONDUIRE">PERMIS DE CONDUIRE</option>
                    </select>
                    @error("newUser.pieceIdentite")
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                            <label >Numero de piece d'identité</label>
                            <input type="text" class="form-control @error('newUser.numeroPieceIdentite') is-invalid @enderror" wire:model="newUser.numeroPieceIdentite">
                            @error("newUser.numeroPieceIdentite")
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Mot de passe</label>
                    <input type="text" class="form-control" disabled placeholder="Password" >
                  </div>


                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Enregistrer</button>
                  <button type="button" wire:click="goToListUser()" class="btn btn-danger">Retouner à la liste des utilisateurs</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

          </div>
        </div>

