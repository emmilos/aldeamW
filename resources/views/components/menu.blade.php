<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ setMenuActive('home') }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Accueil
              </p>
            </a>
          </li>

        @can("manager")
        <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Tableau de bord
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="nav-icon fas fa-chart-line"></i>
                  <p>Vue globale</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-swatchbook"></i>
                  <p>Locations</p>
                </a>
              </li>
            </ul>
        </li>
        @endcan

        @can("admin")
        <li class="nav-item {{ setMenuClass('admin.habilitations.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.', 'active') }}">
              <i class=" nav-icon fas fa-user-shield"></i>
              <p>
                Habilitations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a
                href="{{ route('admin.habilitations.users.index') }}"
                class="nav-link {{ setMenuActive('admin.habilitations.users.index') }}"
                >
                  <i class=" nav-icon fas fa-users-cog"></i>
                  <p>Utilisateurs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-fingerprint"></i>
                  <p>Roles et permissions</p>
                </a>
              </li>
            </ul>
        </li>

        <li class="nav-item {{ setMenuClass('admin.gestarticles.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.gestarticles.', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion articles
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.gestarticles.typearticles') }}"
                        class="nav-link {{ setMenuActive('admin.gestarticles.typearticles') }}">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Type darticles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Articles</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Tarifications</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ setMenuClass('admin.Parametres.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Parametres.', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Paramètres
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.Parametres.pays.index') }}"
                       class="nav-link {{ setMenuActive('admin.Parametres.pays.index') }}">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Pays</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.Parametres.localisations.index') }}"
                    class="nav-link {{ setMenuActive('admin.Parametres.localisations.index') }}">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Localisation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Secteurs d'activités</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Type de marges</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Objets de crédits</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Type de pièces d'identité</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Mode de financements</p>
                    </a>
                </li>
            </ul>
        </li>

        <li class="nav-item {{ setMenuClass('admin.Financements.', 'menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.Financements.', 'active') }}">
                <i class="nav-icon fas fa-cogs"></i>
                <p>
                Gestion des credits
                <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.Financements.credits.index') }}"
                        class="nav-link {{ setMenuActive('admin.Financements.credits.index') }}">
                    <i class="nav-icon far fa-circle"></i>
                    <p>Mise en place credit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('admin.Financements.credits.index') }}" class="nav-link {{ setMenuActive('admin.Financements.credits.index') }}">
                    <i class="nav-icon fas fa-list-ul"></i>
                    <p>Credit</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-sliders-h"></i>
                    <p>Tarifications</p>
                    </a>
                </li>
            </ul>
        </li>


        @endcan

        @can("employe")
        <li class="nav-header">LOCATION</li>
        <li class="nav-item">
            <a href="" class="nav-link ">
                <i class="nav-icon fas fa-users"></i>
                <p>
                Gestion des clients
                </p>
            </a>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-exchange-alt"></i>
                <p>
                Gestion des locations
                </p>
            </a>
        </li>

        <li class="nav-header">CAISSE</li>
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-coins"></i>
                <p>
                Gestion des paiements
                </p>
            </a>
        </li>
        @endcan


        </ul>
      </nav>
