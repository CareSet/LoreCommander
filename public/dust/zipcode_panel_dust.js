(function(dust){dust.register("zipcode_panel_dust",body_0);function body_0(chk,ctx){return chk.w("        <div class=\"panel panel-default\"><div class=\"panel-heading\"><h4><a target='_blank' href='/zipcode/").f(ctx.get(["zipcode"], false),ctx,"h").w("/'>").f(ctx.get(["zipcode"], false),ctx,"h").w("</a></h4><p>Population: ").f(ctx.get(["population"], false),ctx,"h").w("</p></div><div class='panel-body'>").s(ctx.get(["citys"], false),ctx,{"block":body_1},{}).w("</div></div>");}body_0.__dustBody=!0;function body_1(chk,ctx){return chk.f(ctx.get(["city"], false),ctx,"h").w(", ").f(ctx.get(["state"], false),ctx,"h").w(" <br>\t");}body_1.__dustBody=!0;return body_0;})(dust);