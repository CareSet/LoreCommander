(function(dust){dust.register("vein_summary_dust",body_0);function body_0(chk,ctx){return chk.w("<section id=\"top\"><!-- Main hero unit for a primary marketing message or call to action --><div class=\"row\"><div class=\"col-md-6\"><div class=\"jumbotron\"><div class=\"container\"><h4>Virtual EIN </h4><h2>").f(ctx.get(["name"], false),ctx,"h").w("</h2></div></div></div></div></section><section id=\"npis\"><div class=\"page-header\"><h3> VEIN Affiliated Providers </h3></div>").p("sortedtable",ctx,{"table_id":"sorted_table"}).w("<thead><tr><th> Name </th><th> Address </th><th> State </th><th> City </th><th> Zip</th><th> Phone </th><th> Fax </th><th> Type </th></tr>\t </thead><tbody>").s(ctx.get(["affiliated_npis"], false),ctx,{"block":body_1},{}).w("</tbody></table></section>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<tr><td><a href='/npi/").f(ctx.get(["npi"], false),ctx,"h").w("/'>").f(ctx.get(["name"], false),ctx,"h").w("</a><td><a target='_blank' href='/search/address?zip=").f(ctx.get(["postal"], false),ctx,"h",["u"]).w("&city=").f(ctx.get(["city"], false),ctx,"h",["u"]).w("&address=").f(ctx.get(["line1"], false),ctx,"h",["u"]).w("&state=").f(ctx.get(["state"], false),ctx,"h",["u"]).w("&auto=true'>").f(ctx.get(["line1"], false),ctx,"h").w("</a></td><td>").f(ctx.get(["state"], false),ctx,"h").w("</td><td>").f(ctx.get(["city"], false),ctx,"h").w("</td><td>").f(ctx.get(["postal_code"], false),ctx,"h").w("</td><td><a target=\"_blank\" href=\"/search/phone?phone=").f(ctx.get(["phone"], false),ctx,"h").w("\">").f(ctx.get(["phone"], false),ctx,"h").w("</a></td><td><a target=\"_blank\" href=\"/search/phone?phone=").f(ctx.get(["fax"], false),ctx,"h").w("\">").f(ctx.get(["fax"], false),ctx,"h").w("</a></td><td>").f(ctx.get(["type"], false),ctx,"h").w("</td></tr>");}body_1.__dustBody=!0;return body_0;})(dust);
