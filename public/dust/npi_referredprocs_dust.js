(function(dust){dust.register("npi_referredprocs_dust",body_0);function body_0(chk,ctx){return chk.w("<section id=\"medsSection\"><div class=\"page-header\"><h1>Referred Procedures - 2010-2013</h1><p>These are procedures that were performed as the result of referrals or orders by this provider.This is a good place to look for ordered labs, etc </p></div></div>").s(ctx.get(["messages"], false),ctx,{"block":body_1},{}).nx(ctx.get(["data"], false),ctx,{"block":body_2},{}).x(ctx.get(["data"], false),ctx,{"block":body_3},{}).w("</section>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<div class=\"alert alert-").f(ctx.get(["type"], false),ctx,"h").w("\">").f(ctx.get(["content"], false),ctx,"h").w("</div>");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w("<h3>This provider has no referred procedure data</h3>");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.p("sortedtable",ctx,{"table_id":"sorted_table"}).w("<thead style='white-space: nowrap;'><tr><th class=\"filter-false\"> <i class='icon-sort'></i> HCPCS (CPT) Code ").p("wikilink",ctx,{"wikipage":"referredprocs-codes"}).w("  </th><th class=\"filter-false\"> <i class='icon-sort'></i> Code Description ").p("wikilink",ctx,{"wikipage":"referredprocs-codes"}).w("  </th><th class=\"filter-false\"> <i class='icon-sort'></i> Patient Count Traunched ").p("wikilink",ctx,{"wikipage":"referredprocs-codes"}).w("  </th><th class=\"filter-false\"> <i class='icon-sort'></i> Transaction Total Traunched ").p("wikilink",ctx,{"wikipage":"referredprocs-codes"}).w("  </th></tr></thead><tbody>").s(ctx.get(["data"], false),ctx,{"block":body_4},{}).w("</tbody></table>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<tr id='").f(ctx.get(["hcpcs_code"], false),ctx,"h").w("'><td>").f(ctx.get(["hcpcs_code"], false),ctx,"h").w("</td> <td>").f(ctx.get(["procedure_description"], false),ctx,"h").w("</td><td>").f(ctx.get(["p_count_traunched"], false),ctx,"h").w("</td><td>").f(ctx.get(["transaction_totals_traunched"], false),ctx,"h").w("</td></tr>");}body_4.__dustBody=!0;return body_0;})(dust);