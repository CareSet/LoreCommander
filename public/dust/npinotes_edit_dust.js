(function(dust){dust.register("npinotes_edit_dust",body_0);function body_0(chk,ctx){return chk.w("<section id=\"procsSection\"><div class=\"page-header\"><h1>NPI Notes History</h1></div>").s(ctx.get(["messages"], false),ctx,{"block":body_1},{}).nx(ctx.get(["notehistory"], false),ctx,{"block":body_2},{}).x(ctx.get(["notehistory"], false),ctx,{"block":body_3},{}).w("</section>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<div class=\"alert alert-").f(ctx.get(["type"], false),ctx,"h").w("\">").f(ctx.get(["content"], false),ctx,"h").w("</div>");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w("<h3>Could not load notehistory, this should be impossible</h3>");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.p("sortedtable",ctx,{"table_id":"sorted_table"}).w("<thead style='white-space: nowrap;'><tr><th> <i class='icon-sort'></i> Title ").p("wikilink",ctx,{"wikipage":"npi-notes-history"}).w("</th><th> <i class='icon-sort'></i> Assigned To User  ").p("wikilink",ctx,{"wikipage":"npi-notes-history"}).w(" </th><th> <i class='icon-sort'></i> Modified By User ").p("wikilink",ctx,{"wikipage":"npi-notes-history"}).w(" </th><th> <i class='icon-sort'></i> Modified Date  ").p("wikilink",ctx,{"wikipage":"npi-notes-history"}).w(" </th><th> Note  ").p("wikilink",ctx,{"wikipage":"npi-notes-history"}).w(" </th></tr></thead><tbody>").s(ctx.get(["notehistory"], false),ctx,{"block":body_4},{}).w("</tbody></table>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<tr id='").f(ctx.get(["note_id"], false),ctx,"h").w("'><td>").f(ctx.get(["notetitle"], false),ctx,"h").w(" (").f(ctx.get(["notehistory_id"], false),ctx,"h").w(")</td><td>").f(ctx.get(["assign_user_name"], false),ctx,"h").w("\t</td><td>").f(ctx.get(["modify_user_name"], false),ctx,"h").w("\t</td><td>").f(ctx.get(["modify_date"], false),ctx,"h").w("\t</td><td>").f(ctx.get(["notetext"], false),ctx,"h",["s"]).w("\t</td></tr>");}body_4.__dustBody=!0;return body_0;})(dust);