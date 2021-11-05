<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeCreditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_credits', function (Blueprint $table) {
            $table->id();
            $table->string("libel")->unique();
            $table->double("tx_marge_min")->nullable();
	        $table->double("tx_marge_max")->nullable();
	        $table->double("mnt_min")->nullable();
	        $table->double("mnt_max")->nullable();
	        $table->integer("duree_min_mois")->nullable();
	        $table->integer("duree_max_mois")->nullable();
	        $table->integer("periodicite")->nullable();
	        $table->double("mnt_frais_min")->nullable();
	        $table->double("mnt_frais_max")->nullable();
	        $table->double("mnt_commission")->nullable();
	        $table->double("prc_assurance")->nullable();
	        $table->double("prc_gar_num")->nullable();
            $table->double("prc_gar_mat")->nullable();
            $table->double("prc_gar_tot")->nullable();
            $table->double("prc_gar_encours")->nullable();
            $table->double("mnt_penalite_jour")->nullable();
            $table->double("prc_penalite_retard")->nullable();
            $table->integer("delai_grace_jour")->default(0);
            $table->integer("differe_jours_max")->nullable();
            $table->integer("nbre_reechelon_auth")->nullable();
            $table->double("prc_commission")->nullable();
            $table->integer("type_duree_credit")->nullable();
            $table->boolean("approbation_obli")->default(0);
            $table->integer("typ_pen_pourc_dcr")->nullable();
            $table->integer("cpte_cpta_prod_cr_int")->nullable();
            $table->integer("cpte_cpta_prod_cr_gar")->nullable();
            $table->integer("cpte_cpta_prod_cr_pen")->nullable();
            $table->char("devise",3)->nullable();
            $table->integer("differe_ech_max")->nullable();
            $table->integer("freq_paiement_cap")->nullable();
            $table->integer("max_jours_compt_penalite")->nullable();
            $table->String("gs_cat")->nullable();
            $table->boolean("prelev_frais_doss")->default(0);
            $table->boolean("percep_frais_com_ass")->default(0);
            $table->boolean("differe_epargne_nantie")->nullable();
            $table->integer("report_arrondi")->nullable();
            $table->integer("calcul_interet_differe")->nullable();
            $table->integer("ordre_remb")->nullable();
            $table->integer("remb_cpt_gar")->nullable();
            $table->double("mnt_assurance")->nullable();
            $table->boolean("is_produit_decouvert")->default(0);
            $table->integer("prc_frais")->nullable();
            $table->integer("cpte_cpta_att_deb")->nullable();
            $table->boolean("is_produit_actif")->default(1);
            $table->integer("duree_nettoyage")->nullable();
            $table->integer("cpte_cpta_prod_cr_frais")->nullable();
            $table->integer("nb_jr_bloq_cre_avant_ech_max")->nullable();
            $table->boolean("is_flexible")->nullable();
            $table->integer("mode_perc_int")->nullable();
            $table->integer("typ_caution_financiere")->nullable();
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
        Schema::dropIfExists('type_credits');
    }
}
