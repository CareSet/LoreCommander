<?php
/*
	This test route is automatically added.
	IF you would like to quickly see and test all of the index routes that are generated by DURC
	to use: http://[baseUrl]/durctest
	
	To remove routes from production, remove the require for this file from the register() method
	of the DURCServiceProvider.

*/

//This closure lists all of the index routes that DURC knows about...
Route::get('durctest', function () {
    $route_list = [ 




 			'/DURC/artist', //from: lore.artist 
 			'/DURC/artist/create', //from: lore.artist 
 			'/DURC/artist/1', //from: lore.artist 
 			'/DURC/artist/1/edit', //from: lore.artist 
 			'/DURC/artistcredit', //from: lore.artistcredit 
 			'/DURC/artistcredit/create', //from: lore.artistcredit 
 			'/DURC/artistcredit/1', //from: lore.artistcredit 
 			'/DURC/artistcredit/1/edit', //from: lore.artistcredit 
 			'/DURC/atag', //from: lore.atag 
 			'/DURC/atag/create', //from: lore.atag 
 			'/DURC/atag/1', //from: lore.atag 
 			'/DURC/atag/1/edit', //from: lore.atag 
 			'/DURC/card', //from: lore.card 
 			'/DURC/card/create', //from: lore.card 
 			'/DURC/card/1', //from: lore.card 
 			'/DURC/card/1/edit', //from: lore.card 
 			'/DURC/cardface', //from: lore.cardface 
 			'/DURC/cardface/create', //from: lore.cardface 
 			'/DURC/cardface/1', //from: lore.cardface 
 			'/DURC/cardface/1/edit', //from: lore.cardface 
 			'/DURC/cardface_classofc_atag', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_classofc_atag/create', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_classofc_atag/1', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_classofc_atag/1/edit', //from: lore.cardface_classofc_atag 
 			'/DURC/cardface_person_atag', //from: lore.cardface_person_atag 
 			'/DURC/cardface_person_atag/create', //from: lore.cardface_person_atag 
 			'/DURC/cardface_person_atag/1', //from: lore.cardface_person_atag 
 			'/DURC/cardface_person_atag/1/edit', //from: lore.cardface_person_atag 
 			'/DURC/cardprice', //from: lore.cardprice 
 			'/DURC/cardprice/create', //from: lore.cardprice 
 			'/DURC/cardprice/1', //from: lore.cardprice 
 			'/DURC/cardprice/1/edit', //from: lore.cardprice 
 			'/DURC/classofc', //from: lore.classofc 
 			'/DURC/classofc/create', //from: lore.classofc 
 			'/DURC/classofc/1', //from: lore.classofc 
 			'/DURC/classofc/1/edit', //from: lore.classofc 
 			'/DURC/classofc_cardface', //from: lore.classofc_cardface 
 			'/DURC/classofc_cardface/create', //from: lore.classofc_cardface 
 			'/DURC/classofc_cardface/1', //from: lore.classofc_cardface 
 			'/DURC/classofc_cardface/1/edit', //from: lore.classofc_cardface 
 			'/DURC/classofc_classofc_vspack', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_classofc_vspack/create', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_classofc_vspack/1', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_classofc_vspack/1/edit', //from: lore.classofc_classofc_vspack 
 			'/DURC/classofc_creature', //from: lore.classofc_creature 
 			'/DURC/classofc_creature/create', //from: lore.classofc_creature 
 			'/DURC/classofc_creature/1', //from: lore.classofc_creature 
 			'/DURC/classofc_creature/1/edit', //from: lore.classofc_creature 
 			'/DURC/creature', //from: lore.creature 
 			'/DURC/creature/create', //from: lore.creature 
 			'/DURC/creature/1', //from: lore.creature 
 			'/DURC/creature/1/edit', //from: lore.creature 
 			'/DURC/creature_cardface', //from: lore.creature_cardface 
 			'/DURC/creature_cardface/create', //from: lore.creature_cardface 
 			'/DURC/creature_cardface/1', //from: lore.creature_cardface 
 			'/DURC/creature_cardface/1/edit', //from: lore.creature_cardface 
 			'/DURC/mtgset', //from: lore.mtgset 
 			'/DURC/mtgset/create', //from: lore.mtgset 
 			'/DURC/mtgset/1', //from: lore.mtgset 
 			'/DURC/mtgset/1/edit', //from: lore.mtgset 
 			'/DURC/pack', //from: lore.pack 
 			'/DURC/pack/create', //from: lore.pack 
 			'/DURC/pack/1', //from: lore.pack 
 			'/DURC/pack/1/edit', //from: lore.pack 
 			'/DURC/person', //from: lore.person 
 			'/DURC/person/create', //from: lore.person 
 			'/DURC/person/1', //from: lore.person 
 			'/DURC/person/1/edit', //from: lore.person 
 			'/DURC/person_classofc_cardface', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_cardface/create', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_cardface/1', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_cardface/1/edit', //from: lore.person_classofc_cardface 
 			'/DURC/person_classofc_tag', //from: lore.person_classofc_tag 
 			'/DURC/person_classofc_tag/create', //from: lore.person_classofc_tag 
 			'/DURC/person_classofc_tag/1', //from: lore.person_classofc_tag 
 			'/DURC/person_classofc_tag/1/edit', //from: lore.person_classofc_tag 
 			'/DURC/person_creature_tag', //from: lore.person_creature_tag 
 			'/DURC/person_creature_tag/create', //from: lore.person_creature_tag 
 			'/DURC/person_creature_tag/1', //from: lore.person_creature_tag 
 			'/DURC/person_creature_tag/1/edit', //from: lore.person_creature_tag 
 			'/DURC/person_strategy_strategytag', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_strategytag/create', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_strategytag/1', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_strategytag/1/edit', //from: lore.person_strategy_strategytag 
 			'/DURC/person_strategy_tag', //from: lore.person_strategy_tag 
 			'/DURC/person_strategy_tag/create', //from: lore.person_strategy_tag 
 			'/DURC/person_strategy_tag/1', //from: lore.person_strategy_tag 
 			'/DURC/person_strategy_tag/1/edit', //from: lore.person_strategy_tag 
 			'/DURC/pricetype', //from: lore.pricetype 
 			'/DURC/pricetype/create', //from: lore.pricetype 
 			'/DURC/pricetype/1', //from: lore.pricetype 
 			'/DURC/pricetype/1/edit', //from: lore.pricetype 
 			'/DURC/scanhistory', //from: lore.scanhistory 
 			'/DURC/scanhistory/create', //from: lore.scanhistory 
 			'/DURC/scanhistory/1', //from: lore.scanhistory 
 			'/DURC/scanhistory/1/edit', //from: lore.scanhistory 
 			'/DURC/strategy', //from: lore.strategy 
 			'/DURC/strategy/create', //from: lore.strategy 
 			'/DURC/strategy/1', //from: lore.strategy 
 			'/DURC/strategy/1/edit', //from: lore.strategy 
 			'/DURC/strategytag', //from: lore.strategytag 
 			'/DURC/strategytag/create', //from: lore.strategytag 
 			'/DURC/strategytag/1', //from: lore.strategytag 
 			'/DURC/strategytag/1/edit', //from: lore.strategytag 
 			'/DURC/tag', //from: lore.tag 
 			'/DURC/tag/create', //from: lore.tag 
 			'/DURC/tag/1', //from: lore.tag 
 			'/DURC/tag/1/edit', //from: lore.tag 
 			'/DURC/theme', //from: lore.theme 
 			'/DURC/theme/create', //from: lore.theme 
 			'/DURC/theme/1', //from: lore.theme 
 			'/DURC/theme/1/edit', //from: lore.theme 
 			'/DURC/vspack', //from: lore.vspack 
 			'/DURC/vspack/create', //from: lore.vspack 
 			'/DURC/vspack/1', //from: lore.vspack 
 			'/DURC/vspack/1/edit', //from: lore.vspack 


	]; //end route_list

	$html = '<html><head><title>DURC Test Page</title><body><h1>DURC Test Page</h1><h3>DO NOT USE IN PRODUCTION!!!</h3>';

	$html .= '<ul>';

	foreach($route_list as $this_relative_link){
		$html  .= "<li><a href='$this_relative_link'>$this_relative_link </a> </li> ";
	}

	$html .= '</ul></body></html>';
	return $html;
}); //end DURC test route closure

Route::get('/',function () {
	$test_data = ['content' => '<h1>This is test content</h1>'];
	return view('DURC.durc_html',$test_data);
});
