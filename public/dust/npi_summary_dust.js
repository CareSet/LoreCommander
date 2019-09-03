(function(dust){dust.register("npi_summary_dust",body_0);function body_0(chk,ctx){return chk.w("<section id=\"top\"><div class=\"row\"><div class=\"col-xs-12\"><div class=\"alert alert-warning\"><!--<a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>--><strong>New Report View:</strong> <a href=\"/npi/").f(ctx.get(["npi"], false),ctx,"h").w("\">").f(ctx.get(["npi"], false),ctx,"h").w("</a></div></div></div><div class=\"row\"><div class=\"col-md-8\"><div class=\"jumbotron\"><div class=\"container\"><h2>").p("cartcheckbox_big",ctx,{"button_id":ctx.get(["npi"], false)}).w(" ").f(ctx.get(["simple_name"], false),ctx,"h").w(" <small>").f(ctx.get(["npi"], false),ctx,"h").w("</small> </h2>").x(ctx.get(["provider_full_name"], false),ctx,{"block":body_1},{}).x(ctx.get(["other_full_name"], false),ctx,{"block":body_2},{}).x(ctx.get(["org_full_name"], false),ctx,{"block":body_3},{}).x(ctx.get(["authorized_full_name"], false),ctx,{"block":body_4},{}).x(ctx.get(["caresets"], false),ctx,{"block":body_5},{}).w("</div></div></div><div class=\"col-md-4\"><div class=\"panel panel-default\"><div class=\"panel-heading\"><h3>Connections Summary</div><div class=\"panel-body\"><ul class=\"list-group\"><li class='list-group-item'><span class='badge'>").f(ctx.get(["total_shared_phones"], false),ctx,"h").w("</span><a href=\"/CARESETREPORT/affiliation/").f(ctx.get(["npi"], false),ctx,"h").w("/\">Providers sharing a phone number</a></li><li class='list-group-item'><span class='badge'>").f(ctx.get(["total_shared_identifiers"], false),ctx,"h").w("</span><a href=\"/CARESETREPORT/npi_identifier/").f(ctx.get(["npi"], false),ctx,"h").w("/\">Providers sharing an identifier </a></li>").h("gte",ctx,{"block":body_7},{"key":ctx.get(["total_degree"], false),"value":1}).h("lt",ctx,{"block":body_8},{"key":ctx.get(["total_degree"], false),"value":1}).w("</ul></div></div></div></div></section><section id='names'><div class=\"page-header\"><h1>Names  ").p("wikilink",ctx,{"wikipage":"provider-name"}).w(" </h1></div><table class=\"table table-striped\"><thead><tr><th>Nametype</th><th>Name</th></tr></thead><tbody>").s(ctx.get(["names"], false),ctx,{"block":body_9},{}).w("</tbody></table></section><section id='identifiers'><div class=\"page-header\"><h1>Identifiers  ").p("wikilink",ctx,{"wikipage":"provider-identifiers"}).w(" </h1></div><table class=\"table table-striped\"><thead><tr><th>identifier</th><th>description</th><th>issuer</th><th>state</th><th>active</th></tr></thead><tbody>").s(ctx.get(["identifiers"], false),ctx,{"block":body_10},{}).w("</tbody></table></section><section id=\"taxonomies\"><div class=\"page-header\"><h1>Taxonomies  ").p("wikilink",ctx,{"wikipage":"provider-taxonomies"}).w(" </h1></div><table class=\"table table-striped\"><thead><tr><th> Taxonomy </th><th> State </th><th> License Number </th><th> Primary? </th></tr></thead><tbody>").s(ctx.get(["taxonomies"], false),ctx,{"block":body_11},{}).w("</tbody>\t</table></section><section id=\"phoneNumbers\"><div class=\"page-header\"><h1>Phone Numbers  ").p("wikilink",ctx,{"wikipage":"provider-phones"}).w(" </h1></div><table class=\"table table-striped\"><thead><tr><th> Type </th><th> Number </th></tr></thead><tbody>").s(ctx.get(["numbers"], false),ctx,{"block":body_14},{}).w("</tbody></table></section><section id=\"address\"><div class=\"page-header\"><h1>Addresses  ").p("wikilink",ctx,{"wikipage":"provider-addresses"}).w(" </h1></div><table class=\"table table-striped\"><thead><tr><th> Type </th><th> Address </th><th> Line2 </th><th> City </th><th> State </th><th> Postal </th><th> Country </th></tr></thead><tbody>").s(ctx.get(["addresses"], false),ctx,{"block":body_15},{}).w("</tbody></table></section>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.w("<h5>Full Name: ").f(ctx.get(["provider_full_name"], false),ctx,"h").w("</h5>");}body_1.__dustBody=!0;function body_2(chk,ctx){return chk.w("<h4>Other Name: ").f(ctx.get(["other_full_name"], false),ctx,"h").w("</h5>");}body_2.__dustBody=!0;function body_3(chk,ctx){return chk.w("<h5>Full Name: ").f(ctx.get(["org_full_name"], false),ctx,"h").w("</h5>");}body_3.__dustBody=!0;function body_4(chk,ctx){return chk.w("<h5>Authorized Contact: ").f(ctx.get(["authorized_full_name"], false),ctx,"h").w("</h5>");}body_4.__dustBody=!0;function body_5(chk,ctx){return chk.w("\t<br><h4> ").f(ctx.get(["simple_name"], false),ctx,"h").w(" is included the following Grouping(s) </h4><ul>").s(ctx.get(["caresets"], false),ctx,{"block":body_6},{}).w("</ul>");}body_5.__dustBody=!0;function body_6(chk,ctx){return chk.w("<li><a href='/careset/show/").f(ctx.get(["code"], false),ctx,"h").w("'>").f(ctx.get(["title"], false),ctx,"h").w("</a></li>\t");}body_6.__dustBody=!0;function body_7(chk,ctx){return chk.w("<li class='list-group-item'><span class='badge'>").f(ctx.get(["total_degree"], false),ctx,"h").w("</span> <a href='/CARESETREPORT/referral_start/").f(ctx.get(["npi"], false),ctx,"h").w("/'> Shared Patient Collaborations </a></li>");}body_7.__dustBody=!0;function body_8(chk,ctx){return chk.w("<li class='list-group-item'><a href='#'> No Collaborations for this NPI </a> </li>");}body_8.__dustBody=!0;function body_9(chk,ctx){return chk.w("<tr><td>").f(ctx.get(["nametype"], false),ctx,"h").w("</td><td>").f(ctx.get(["name"], false),ctx,"h").w("</td></tr>");}body_9.__dustBody=!0;function body_10(chk,ctx){return chk.w("<tr class=\"even\"><td><a target='_blank' href='/search/id?an_ident=").f(ctx.get(["identifier"], false),ctx,"h",["u"]).w("&auto=true'>").f(ctx.get(["identifier"], false),ctx,"h").w("</a></td><td>").f(ctx.get(["description"], false),ctx,"h").w("</td><td>").f(ctx.get(["issuer"], false),ctx,"h").w("</td><td>").f(ctx.get(["state"], false),ctx,"h").w("</td><td>").f(ctx.get(["active"], false),ctx,"h").w("</td></tr>");}body_10.__dustBody=!0;function body_11(chk,ctx){return chk.w("<tr class=\"odd\"><td>").f(ctx.get(["description"], false),ctx,"h").w(" (<a href='").f(ctx.get(["url"], false),ctx,"h").w("'> ").f(ctx.get(["code"], false),ctx,"h").w(" </a>)</td><td> ").f(ctx.get(["state"], false),ctx,"h").w(" </td><td> <a target='_blank' href='/search/id?an_ident=").f(ctx.get(["license_number"], false),ctx,"h",["u"]).w("&auto=true'>").f(ctx.get(["license_number"], false),ctx,"h").w(" </a></td><td> ").x(ctx.get(["primary"], false),ctx,{"block":body_12},{}).nx(ctx.get(["primary"], false),ctx,{"block":body_13},{}).w(" </td></tr>");}body_11.__dustBody=!0;function body_12(chk,ctx){return chk.w("Yes");}body_12.__dustBody=!0;function body_13(chk,ctx){return chk.w("No");}body_13.__dustBody=!0;function body_14(chk,ctx){return chk.w("<tr class=\"even\"><td>").f(ctx.get(["numbertype"], false),ctx,"h").w(" </td><td><a target='_blank' href='/search/phone?phone=").f(ctx.get(["number"], false),ctx,"h").w("&auto=true'>").f(ctx.get(["number"], false),ctx,"h").w("</a></td></tr>");}body_14.__dustBody=!0;function body_15(chk,ctx){return chk.w("<tr class=\"odd\"><td>").f(ctx.get(["addresstype"], false),ctx,"h").w("</td><td><a target='_blank' href='/search/address?zip=").f(ctx.get(["postal_code"], false),ctx,"h",["u"]).w("&city=").f(ctx.get(["city"], false),ctx,"h",["u"]).w("&address=").f(ctx.get(["line1"], false),ctx,"h",["u"]).w("&state=").f(ctx.get(["state"], false),ctx,"h",["u"]).w("&auto=true'>").f(ctx.get(["line1"], false),ctx,"h").w("</a></td><td>").f(ctx.get(["line2"], false),ctx,"h").w("</td><td>").f(ctx.get(["city"], false),ctx,"h").w("</td><td>").f(ctx.get(["state"], false),ctx,"h").w("</td><td>").f(ctx.get(["postal_code"], false),ctx,"h").w("</td><td>").f(ctx.get(["country"], false),ctx,"h").w("</td></tr>");}body_15.__dustBody=!0;return body_0;})(dust);
