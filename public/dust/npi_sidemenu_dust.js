(function(dust){dust.register("npi_sidemenu_dust",body_0);function body_0(chk,ctx){return chk.w("<!-- generated from npi_sidemenu_dust.tpl --><a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/' class=\"list-group-item\">Summary</a><!-- we can create notes even when there are zero now... ---><a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/notes/' class=\"list-group-item \">Custom Notes <span class='badge'>").f(ctx.get(["npinote_count"], false),ctx,"h").w("</span></a><!-- perhaps someone else has MU data --><a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/meaningful/' class=\"list-group-item\">EHR <span class='badge'>").x(ctx.get(["ehr_has_data"], false),ctx,{"else":body_1,"block":body_2},{}).w(" </span> </a>").nx(ctx.get(["nppes_affiliation_has_data"], false),ctx,{"else":body_3,"block":body_4},{}).nx(ctx.get(["npihistory_has_data"], false),ctx,{"else":body_5,"block":body_6},{}).nx(ctx.get(["team_has_data"], false),ctx,{"else":body_7,"block":body_8},{}).w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/team2015/' class=\"list-group-item \">Team Data (2015)  </a>").nx(ctx.get(["outproc_has_data"], false),ctx,{"else":body_9,"block":body_10},{}).nx(ctx.get(["referredproc_has_data"], false),ctx,{"else":body_11,"block":body_12},{}).nx(ctx.get(["outmed_has_data"], false),ctx,{"else":body_13,"block":body_14},{}).nx(ctx.get(["host_DGDRG_has_data"], false),ctx,{"else":body_15,"block":body_16},{}).nx(ctx.get(["pecos_specialty_has_data"], false),ctx,{"else":body_19,"block":body_20},{}).nx(ctx.get(["zipcode_has_data"], false),ctx,{"else":body_21,"block":body_22},{}).nx(ctx.get(["doccompare_has_data"], false),ctx,{"else":body_23,"block":body_24},{}).w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/codegroup/' class=\"list-group-item\">Inpatient CPT Procedures </a>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w(" no attestation ");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w(" ").f(ctx.get(["ehr_vendor"], false),ctx,"h").w(" ");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/shared/' class=\"list-group-item\">Affiliation Data  <span class=\"badge\">").f(ctx.get(["nppes_affiliation_total"], false),ctx,"h").w("</span></a>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/shared/' class=\"list-group-item\"> Affiliation Data <span class='badge'>none</span> </a>");}body_4.__dustBody=!0;function body_5(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/history/' class=\"list-group-item \">Historical Data <span class='badge'>").f(ctx.get(["npihistory_revision_count"], false),ctx,"h").w("</span> </a>");}body_5.__dustBody=!0;function body_6(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/history/' class=\"list-group-item   \">Historical Data <span class='badge'>none</span> </a>");}body_6.__dustBody=!0;function body_7(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/team/' class=\"list-group-item \">Team Data (2014) <span class='badge'>").f(ctx.get(["team_degree"], false),ctx,"h").w("</span>  </a><a href='/FORCE/dandelion_simple/").f(ctx.get(["npi"], false),ctx,"h").w("' class=\"list-group-item\">Dandelion Report</a>");}body_7.__dustBody=!0;function body_8(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/team/' class=\"list-group-item  \">Team Data (2014) <span class='badge'>none</span>  </a>");}body_8.__dustBody=!0;function body_9(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/procs/' class=\"list-group-item \">Procedure Data <span class='badge'>").f(ctx.get(["outproc_hcpcs_count"], false),ctx,"h").w("</span> </a>");}body_9.__dustBody=!0;function body_10(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/procs/' class=\"list-group-item   \">Procedure Data <span class='badge'>none</span> </a>");}body_10.__dustBody=!0;function body_11(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/referredprocs/' class=\"list-group-item \">Referred Proc Data <span class='badge'>").f(ctx.get(["referredproc_hcpcs_count"], false),ctx,"h").w("</span> </a>");}body_11.__dustBody=!0;function body_12(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/referredprocs/' class=\"list-group-item   \">Referred Proc Data <span class='badge'>none</span> </a>");}body_12.__dustBody=!0;function body_13(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/meds/' class=\"list-group-item \">Prescription Data <span class='badge'>").f(ctx.get(["outmed_count"], false),ctx,"h").w("</span> </a>");}body_13.__dustBody=!0;function body_14(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/meds/' class=\"list-group-item   \">Prescription Data <span class='badge'>none</span> </a>");}body_14.__dustBody=!0;function body_15(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/drgs/' class=\"list-group-item \">Host DRG Data <span class='badge'>").f(ctx.get(["host_DGDRG_count"], false),ctx,"h").w("</span> </a>");}body_15.__dustBody=!0;function body_16(chk,ctx){return chk.nx(ctx.get(["attending_DGDRG_has_data"], false),ctx,{"else":body_17,"block":body_18},{});}body_16.__dustBody=!0;function body_17(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/drgs/' class=\"list-group-item \">Attending DRG Data <span class='badge'>").f(ctx.get(["attending_DGDRG_count"], false),ctx,"h").w("</span> </a>");}body_17.__dustBody=!0;function body_18(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/drgs/' class=\"list-group-item   \">DRG Data <span class='badge'>none</span> </a>");}body_18.__dustBody=!0;function body_19(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/specialty/' class=\"list-group-item \">PECOS Speciality <span class='badge'>").f(ctx.get(["pecos_specialty_count"], false),ctx,"h").w("</span> </a>");}body_19.__dustBody=!0;function body_20(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/specialty/' class=\"list-group-item   \">PECOS Speciality <span class='badge'>none</span> </a>");}body_20.__dustBody=!0;function body_21(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/zipcode/' class=\"list-group-item \"> Zipcode Data <span class='badge'>").f(ctx.get(["zipcode_total_count"], false),ctx,"h").w("</span> </a>");}body_21.__dustBody=!0;function body_22(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/zipcode/' class=\"list-group-item   \"> Zipcode Data <span class='badge'>none</span> </a>");}body_22.__dustBody=!0;function body_23(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/doccompare/' class=\"list-group-item\">Physician Compare <span class='badge'>has data</span></a>");}body_23.__dustBody=!0;function body_24(chk,ctx){return chk.w("<a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/doccompare/' class=\"list-group-item\">Physician Compare <span class='badge'>none</span></a>");}body_24.__dustBody=!0;return body_0;})(dust);