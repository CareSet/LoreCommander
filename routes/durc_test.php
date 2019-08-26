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
 			'/DURC/classofcreature', //from: lore.classofcreature 
 			'/DURC/classofcreature/create', //from: lore.classofcreature 
 			'/DURC/classofcreature/1', //from: lore.classofcreature 
 			'/DURC/classofcreature/1/edit', //from: lore.classofcreature 
 			'/DURC/classofcreature_cardface', //from: lore.classofcreature_cardface 
 			'/DURC/classofcreature_cardface/create', //from: lore.classofcreature_cardface 
 			'/DURC/classofcreature_cardface/1', //from: lore.classofcreature_cardface 
 			'/DURC/classofcreature_cardface/1/edit', //from: lore.classofcreature_cardface 
 			'/DURC/classofcreature_creature', //from: lore.classofcreature_creature 
 			'/DURC/classofcreature_creature/create', //from: lore.classofcreature_creature 
 			'/DURC/classofcreature_creature/1', //from: lore.classofcreature_creature 
 			'/DURC/classofcreature_creature/1/edit', //from: lore.classofcreature_creature 
 			'/DURC/creature', //from: lore.creature 
 			'/DURC/creature/create', //from: lore.creature 
 			'/DURC/creature/1', //from: lore.creature 
 			'/DURC/creature/1/edit', //from: lore.creature 
 			'/DURC/mtgset', //from: lore.mtgset 
 			'/DURC/mtgset/create', //from: lore.mtgset 
 			'/DURC/mtgset/1', //from: lore.mtgset 
 			'/DURC/mtgset/1/edit', //from: lore.mtgset 
 			'/DURC/person', //from: lore.person 
 			'/DURC/person/create', //from: lore.person 
 			'/DURC/person/1', //from: lore.person 
 			'/DURC/person/1/edit', //from: lore.person 
 			'/DURC/person_classofcreature_tag', //from: lore.person_classofcreature_tag 
 			'/DURC/person_classofcreature_tag/create', //from: lore.person_classofcreature_tag 
 			'/DURC/person_classofcreature_tag/1', //from: lore.person_classofcreature_tag 
 			'/DURC/person_classofcreature_tag/1/edit', //from: lore.person_classofcreature_tag 
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
