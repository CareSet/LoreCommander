<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lore Commander</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.4.3.1.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
<main role='main'>
<div class='jumbotron'> 
	<div class='container'>
		<div class='row'>
		<div class='col-md-9'>
		<h1 > Lore Commander </h1>
<h3> Scoring the lore-compability of groups of cards using data science tools from CareSet </h3>
<div class='container'>
	<div class='row'>
		<div class='col-md-4'>
		<h4> Bespoke Tools </h4>
		<ul>
			<li> <b><a target='_blank' href='/showJustCard/fredTV'>TV Card Simple View</a></b>: 
				</li>
			<li> <b><a target='_blank' href='/showCard/fredTV'>TV Card Complex View</a></b>: 
				</li>
			<li> <b><a target='_blank' href='/showArtCard/fredTV'>TV Card Art View</a></b>: 
				</li>
			<li> <b><a target='_blank' href='https://delverlab.com/'>The Delver Lens App</a></b> is the remote control for all TV views
				</li>
			<li> <b><a target='_blank' href='/changeCard/fredTV/469857'>Show Pegasus Card</a></b> to test the TV views
				</li>
		</ul>
		</div>
		<div class='col-md-4'>
		<h4> Data Linking </h4>
			<ul>
			<li> <b><a target='_blank' href='/genericLinkerForm/person/classofc/tag'>Person to Creature Class Link Builder</a></b>:  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/classofc/classofc/vspack'>Use VS packs to model creature class relationships</a></b>:  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/person/strategy/tag'>Person to Strategy Regular Tag Linker</a></b>:  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/person/strategy/strategytag'>Person to Strategy Strategy Tag Linker</a></b>:  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/cardface/classofc/atag'>Card to Creature Class atag Linker</a></b>:  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/cardface/person/atag'>Card to Person atag Linker</a></b>:  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/person/classofc/cardface'>Person to Creature Class using Cards</a></b>: First experiment to use cards as the tag class  </li>
			<li> <b><a target='_blank' href='/genericLinkerForm/person/creature/tag'>Person to Creature Tag</a></b>: This is specific creature types, and not classes  </li>
			<li> <b><a target='_blank' href='/Zermelo/CreatureClass'>Creature Class Summary Report</a></b>: Links to both sub-types and creatures  </li>
			<li> <b><a target='_blank' href=''></a></b>:  </li>
		</ul>
		</div>
		<div class='col-md-4'>
		<h4>  Tabular Reports </h4>
		<ul>
			<li> <b><a target='_blank' href='/Zermelo/CardSearch'>Card Search</a></b>: Search Cards based on several factors </li>
			<li> <b><a target='_blank' href='/Zermelo/CardFaceSearch'>Card Face Search</a></b>: Search distinct card faces and card variations </li>
			<li> <b><a target='_blank' href='/Zermelo/PersonNoCreature'>Person without any Class Of Creature Affiliations</a></b>: Ensures that we can easily tag our planeswalkers with their partnering tribes  </li>
			<li> <b><a target='_blank' href='/Zermelo/mostReleasedArt'>Most Released Art</a></b>: What is the most commonly released art through the years </li>
		</ul>
		</div>
		<div class='col-md-4'>
		<h4>  Card layout  Reports </h4>
			<li> <b><a target='_blank' href='/ZermeloCard/CardSearchUsingCard'>Card Search Using Card Display</a></b>: This shows cards using the bootstrap 4 card layout  </li>
			<li> <b><a target='_blank' href='/ZermeloCard/CardSearchUsingImgGrid'>Card Search Using Grid Display</a></b>:  </li>
			<li> <b><a target='_blank' href='/ZermeloCard/cardMostSets'>Classic Card viewer</a></b>: Shows the cards that keep getting reprinted and updated. These are the classics.  </li>
			<li> <b><a target='_blank' href='/ZermeloCard/BinderReport'>Binder Report</a></b>: Shows which cards would go where in a binder based on options </li>
		</ul>
		</div>
		<div class='col-md-4'>
		<h4>  Graph  Reports </h4>
			<li> <b><a target='_blank' href='/ZermeloGraph/PersonCreatureGraph'>Person to Creature Graph</a></b>: This is the graph view of the Person to Creature relationship  </li>
			<li> <b><a target='_blank' href='/ZermeloGraph/PCGraphPics'>P <-> C with Pictures</a></b>: Same as above but with pictures for the nodes  </li>
			<li> <b><a target='_blank' href='/ZermeloGraph/CardRelations'>Card Relations</a></b>: Shows card relationships  </li>
			<li> <b><a target='_blank' href=''></a></b>:  </li>
		</ul>
		</div>
		<div class='col-md-4'>
		<h4> DURC-built Tabular Reports </h4>
		<ul>
			<li> <b><a target='_blank' href='/Zermelo/DURC_person'>DURC_person</a></b> auto generated report on our database of MTG characters </li>
			<li> <b><a target='_blank' href='/Zermelo/DURC_creature'>DURC_creature</a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/DURC_person_classofc_tag'>DURC_person_classofcreature_tag</a></b>: Shows how persons related to creatures  </li>
			<li> <b><a target='_blank' href='/Zermelo/DURC_classofc_classofc_vspack'>DURC classofc_classofc_vspack</a></b>: When WoTC releases a vs pack, it establishes a formal rivalry between two tribes of creatures  </li>
			<li> <b><a target='_blank' href=''></a></b>:  </li>
			<li> <b><a target='_blank' href=''></a></b>:  </li>
			<li> <b><a target='_blank' href=''></a></b>:  </li>
		</ul>
		</div>
		<div class='col-md-4'>
		<h4> Test Reports </h4>
		<ul>
			<li> <b><a target='_blank' href='/Zermelo/TEST_AutoTagsReport'>Auto Tags Report</a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_CharTest'>Character Test</a></b>  </li>
			<li> <b><a target='_blank' href='/ZermeloGraph/TEST_GraphTest'>Graph Test</a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindCustomerReport'>NorthWind Customer Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindCustomerSocketReport'> Northwind Customer Socket Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindOrderIndexReport'> Northwind Order Index Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindOrderReport'>Northwind Order Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindOrderSlowReport'> Northwind Order Slow Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindOrderYearReport'> Northwind Order Year Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_NorthwindProductReport'> Northwind Product Report </a></b>  </li>
			<li> <b><a target='_blank' href='/Zermelo/TEST_TagsReport'>Tags Report </a></b>  </li>
		</ul>
		</div>
	</div>
</div>


		</div>	
		<div class='col-md-3'>
		<h3> Cancel <small> (from Zendikar block) </small> </h3>
		<a target='_blank' href='https://scryfall.com/card/zen/44/cancel?utm_source=api'>
			<img width='400px' 
src='https://c1.scryfall.com/file/scryfall-cards/art_crop/front/9/e/9e557f54-3d9d-4610-a0d0-5874feacc76e.jpg?1562614848'>
		</a>
		</div>
		</div>
	</div>
</div>
<div class='container'>
		<div class='row'>
		<div class='col-md-12'>
<h1> Concept </h1>
<p>
The most powerful decks in MTG will always those that prioritize the power of cards and their combinations above every other aspect of game play. 
Making the most powerful deck no-matter what is interesting, but contrary to my (<a target='_blank' href='https://fredtrotter.com'>fred</a>) notion of fun. 
For me it is more fun to try and make a deck that honors the lore of the game, which now has decades of official content available. 
Not to mention a thriving fan art community making token cards, play mats and custom art to go along with the cards.
But it is also not fun to play a deck like that against any deck that was made without such constraints. 
Losing, for sure and no matter what, is not good time. Wondering if you are going to win, based on your own brewing efforts, is much more of challenge and much more interesting to me personally. 
(this is why I prefer Limited formats like Booster Draft, over other formats where professional or near-professional deck designers have already 
demonstrated the best way of designing a deck and figuring out how to play it well. 
</p>
<p>
Given that it makes sense to create a scoring system that helps to enable a kind of "par" system for decks that go to extra lengths to have lore-compatible cards.
However, this, in turn requires to think about the data about the cards in a different way. 
Thanks to Scryfalls incredible API, and the fact that Delver App can POST to urls when it identifies a card with an android cell phone...
It is pretty simple to build a set of tools to think about that data differently.
</p>
<p>
To be clear, this is a hobby project, mostly intended for me to test data tools that I work on at work, and to enable those tools to have a public dataset 
to show the underlying power of the approaches that we take. <a target='_blank' href='https://careset.com'>CareSet</a> works with patient data, so it is hard to show our
data approaches to the public with the data that we work with from day to day, which very frequently has privacy conrstraints. MTG is the perfect, already public dataset with lots of nuances to explore. For now, please to not expect any stability with this website, since its purpose is to learn and test approaches, I expect that it will break frequently. 
</p>
		<h1 > Thanks </h1>
		<p> Thanks to <a target='_blank' href='https://scryfall.com'>ScryFall</a> for all of the wonderful data 
and to <a target='_blank' href='https://company.wizards.com/'>WoTC</a> for the wonderful game. 
Also to Gamepedia for making the comprehenisve <a target='_blank' href='https://mtg.gamepedia.com/Main_Page'>MTG Wiki</a> 
where the entire knowledge-base of a whole community of enthusiasts is mainted and updated!!
</p>
<p>
This site is an experiment from <a target='_blank' href='https://fredtrotter.com'>Fred Trotter</a> to test out the <a target='_blank' href='https://github.com/CareSet/Zermelo'>Zermelo</a> and 
<a target='_blank' href='https://github.com/CareSet/DURC'>DURC</a> data processing and reporting systems 
both sponsored and released from <a target='_blank' href='https://careset.com'>CareSet</a>.
The goal is it to eventually become a fully fledged method of examining the lore-compatibility of specific decks of MTG cards. 
</p>
<p>
But even if that never happens, it is extremely useful way to teach how our specific tools, and SQL more generally functions to manage and model data.
</p>
		<p class="text-right"><small>
All cards and card art are copyright Hasbro/WoTC or respective artists. Used under the
unofficial Fan Content permitted under the Wizards of the Coast Fan Content Policy.
	</small>	</p>
		</div>
	</div>
</main>
    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/bootstrap.4.3.1.min.js"></script>

  </body>
</html>
