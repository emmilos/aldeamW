<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credits', function (Blueprint $table) {
            $table->id();
            $table->foreignId("client_id")->constrained();
            $table->foreignId("type_credit_id")->constrained();
            $table->integer("mode_calc_int");
            $table->integer("mode_perc_int");
            $table->date("date_dem");
            $table->double("mnt_dem");
            $table->foreignId("objets_credit_id")->constrained();
            $table->string("detail_obj_dem");
            $table->string("etat");
            $table->date("date_etat");
            $table->string("motif");
            $table->string("id_agent_gest");
            $table->integer("delai_grac");
            $table->integer("differe_jours");
            $table->boolean("prelev_auto")->default(0);
            $table->integer("duree_mois");
            $table->integer("nouv_duree_mois");
            $table->string("terme");
            $table->double("gar_num");
            $table->double("gar_tot");
            $table->double("gar_mat");
            $table->double("gar_num_encours");
            $table->integer("cpt_gar_encours");
            $table->integer("num_cre");
            $table->string("assurances_cre");
            $table->integer("cpt_liaison");
            $table->integer("cre_id_cpte");
            $table->integer("cre_etat");
            $table->dateTime("cre_date_etat");
            $table->dateTime("cre_date_approb");
            $table->dateTime("cre_date_debloc");
            $table->integer("cre_nbre_reech");
            $table->double("cre_mnt_octr");
            $table->string("details_motif");
            $table->boolean("suspension_pen")->default(0);
            $table->string("perte_capital");
            $table->integer("cre_retard_etat_max");
            $table->integer("cre_retard_etat_max_jour");
            $table->integer("differe_ech");
            $table->integer("id_dcr_grp_sol");
            $table->string("gs_cat");
            $table->string("prelev_commission");
            $table->string("cre_prelev_frais_doss");
            $table->integer("cpt_prelev_frais");
            $table->double("prov_mnt");
            $table->date("prov_date");
            $table->string("prov_is_calcul");
            $table->double("cre_mnt_deb");
            $table->string("doss_repris");
            $table->string("cre_cpt_att_deb");
            $table->double("mnt_assurance");
            $table->double("mnt_commission");
            $table->double("mnt_frais_doss");
            $table->string("detail_obj_dem_bis");
            $table->string("id_bailleur");
            $table->string("nb_jr_bloq_cre_avant_ech");
            $table->double("cre_mnt_bloq");
            $table->string("is_extended");
            $table->string("interet_remb_anticipe");
            $table->string("besoins_financements");
            $table->double("taux_marge");
            $table->double("montant_marge");
            $table->string("Benefice_estimatif");
            $table->string("periodicite");
            $table->string("typ_caution_financiere");
            $table->integer("nbr_echeance");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('credits');
    }
}
