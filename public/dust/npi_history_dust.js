(function(dust){dust.register("npi_history_dust",body_0);function body_0(chk,ctx){return chk.w("<section id=\"historySection\"><div class=\"page-header\"><h1>NPI History</h1></div>").s(ctx.get(["messages"], false),ctx,{"block":body_1},{}).nx(ctx.get(["data"], false),ctx,{"block":body_2},{}).x(ctx.get(["data"], false),ctx,{"block":body_3},{}).w("</section>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<div class=\"alert alert-").f(ctx.get(["type"], false),ctx,"h").w("\">").f(ctx.get(["content"], false),ctx,"h").w("</div>");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w("<h3>This provider has no history data</h3>");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.p("sortedtable",ctx,{"table_id":"sorted_table"}).w("<thead style='white-space: nowrap;'><tr><th> <i class='icon-sort'></i> File Number ").p("wikilink",ctx,{"wikipage":"npi-history"}).w(" </th><th> <i class='icon-sort'></i> Column ").p("wikilink",ctx,{"wikipage":"npi-history"}).w("  </th><th> <i class='icon-sort'></i> Old Value ").p("wikilink",ctx,{"wikipage":"npi-history"}).w("   </th><th> <i class='icon-sort'></i> New Value ").p("wikilink",ctx,{"wikipage":"npi-history"}).w("   </th></tr></thead><tbody>").s(ctx.get(["data"], false),ctx,{"block":body_4},{}).w("</tbody></table>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<tr id='").f(ctx.get(["npi"], false),ctx,"h").w("_").f(ctx.get(["program_year"], false),ctx,"h").w("'><td> <a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/historydrill/").f(ctx.get(["filenumber"], false),ctx,"h").w("'>").f(ctx.get(["filenumber"], false),ctx,"h").w("</a>  </td><td> ").f(ctx.get(["column"], false),ctx,"h").w(" </td><td> ").f(ctx.get(["old_value"], false),ctx,"h").w("</td><td> ").f(ctx.get(["new_value"], false),ctx,"h").w("</td>\t\t</tr>");}body_4.__dustBody=!0;return body_0;})(dust);