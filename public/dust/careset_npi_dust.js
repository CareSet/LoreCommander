(function(dust){dust.register("careset_npi_dust",body_0);function body_0(chk,ctx){return chk.s(ctx.get(["got_results"], false),ctx,{"else":body_1,"block":body_2},{}).s(ctx.get(["got_results"], false),ctx,{"block":body_3},{});}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<h1> No results for Grouping: ").f(ctx.get(["careset_code"], false),ctx,"h").w(" and Provider: ").f(ctx.get(["npi"], false),ctx,"h").w(" </h1>");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w("<h2> Members of Grouping: ").f(ctx.get(["careset_name"], false),ctx,"h").w(" </h2><h2> Relate to Provider: <a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("'>").f(ctx.get(["provider_name"], false),ctx,"h").w("</a> </h2>");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.p("sortedtable",ctx,{"table_id":"sorted_table"}).w("<thead style='white-space: nowrap;'><tr><th> <i class='icon-sort'></i> NPI </th><th> <i class='icon-sort'></i> To Flow Count </th><th> <i class='icon-sort'></i> To Patient Count </th><th> <i class='icon-sort'></i> From Flow Count </th><th> <i class='icon-sort'></i> From Patient Count </th><th> <i class='icon-sort'></i> Same Day Count </th></tr></thead><tbody>").s(ctx.get(["both_array"], false),ctx,{"block":body_4},{}).w("</tbody></table>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<tr id='").f(ctx.get(["other_npi"], false),ctx,"h").w("'><td>").p("cartcheckbox",ctx,{"button_id":ctx.get(["other_npi"], false)}).w("<a target='_blank' href='/npi/").f(ctx.get(["other_npi"], false),ctx,"h").w("/'>").f(ctx.get(["other_name"], false),ctx,"h",["h"]).w(" </a></td><td> ").f(ctx.get(["to_flow_count"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["to_patient_count"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["from_flow_count"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["from_patient_count"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["same_day_count"], false),ctx,"h").w(" </td></tr>");}body_4.__dustBody=!0;return body_0;})(dust);
