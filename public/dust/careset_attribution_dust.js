(function(dust){dust.register("careset_attribution_dust",body_0);function body_0(chk,ctx){return chk.s(ctx.get(["got_results"], false),ctx,{"else":body_1,"block":body_2},{}).s(ctx.get(["got_results"], false),ctx,{"block":body_3},{});}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<h1> No results for Grouping: ").f(ctx.get(["careset_code"], false),ctx,"h").w(" </h1>");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w("<h2> Grouping ").f(ctx.get(["careset_name"], false),ctx,"h").w("</h2><h3> List of outside referrals who are performing attribution procedures total: ").f(ctx.get(["result_count"], false),ctx,"h").w(" results</h3>");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.p("sortedtable",ctx,{"table_id":"sorted_table"}).w("<thead style='white-space: nowrap;'><tr><th> <i class='icon-sort'></i> Outside <br> Provider </th><th> <i class='icon-sort'></i> Outside <br> Provider Type </th><th> <i class='icon-sort'></i> Grouping Providers<br> Referring </th><th> <i class='icon-sort'></i> Shared Patient <br> Transactions </th><th> <i class='icon-sort'></i> Shared Patient <br> Count </th><th> <i class='icon-sort'></i> Total Outside <br>Patient Transactions </th><th> <i class='icon-sort'></i> Total Outside <br>Patient Count </th><th> <i class='icon-sort'></i> Procedure Codes Used </th></tr></thead><tbody>").s(ctx.get(["result_array"], false),ctx,{"block":body_4},{}).w("</tbody></table>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<tr id='").f(ctx.get(["to_npi"], false),ctx,"h").w("'><td><a target='_blank' href='/npi/").f(ctx.get(["to_npi"], false),ctx,"h").w("/'>").f(ctx.get(["nppes_provider_last_org_name"], false),ctx,"h").w(" </a></td><td> ").f(ctx.get(["provider_type"], false),ctx,"h").w(" </td><td> <a target='_blank' href='/careset/npi/").f(ctx.get(["careset_code"], false),ctx,"h").w("/").f(ctx.get(["to_npi"], false),ctx,"h").w("/'>").f(ctx.get(["referring_npi_count"], false),ctx,"h").w("</td><td>\t").f(ctx.get(["shared_patient_transactions"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["shared_patient_count"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["total_patient_transactions"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["total_patient_count"], false),ctx,"h").w(" </td><td><div style='font-size: 70%'> ").f(ctx.get(["hcpcs_code"], false),ctx,"h").w(" </div> </td></tr>");}body_4.__dustBody=!0;return body_0;})(dust);
