<!DOCTYPE html>
<head>
  <title>Card Viewer</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


  <script src='/js/jquery-3.4.1.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  

  <script src="https://js.pusher.com/4.4/pusher.min.js"></script>
  <script src='/js/mustache.3.0.1.js'></script>
  <script>

    		// Enable pusher logging - don't include this in production
    		Pusher.logToConsole = true;

    		var pusher = new Pusher('4fdeafbb25f448a6b3ab', {
      			cluster: 'us3',
      			forceTLS: true
    		});

    		var channel = pusher.subscribe('{{$channel_id}}');
    		channel.bind('show_this_card', function(data) {

			var scryfall_url = 'https://api.scryfall.com/cards/multiverse/' + data['multiverse_id'];

			$.get('/templates/cardview.template.html', function(templates) {
				var tpl = $(templates).filter('#tpl-cardview').html();
				//var tpl = "<h1>@{{name}}</h1>";	
		
				fetch(scryfall_url)
					.then(function(response) {
    						return response.json();
  					})
  					.then(async function(myData) {
						//console.log('before get_illustration');
						var ill_img_list = await get_illustration_array(myData);
						var rulings_list = await get_rulings_array(myData);
						await sleep(2000); //doing this as the simplest way to ensure that my ill_img_list is really set
						myData.ill_img_list = ill_img_list;
						myData.rulings_list = rulings_list;
						//console.log('before mustache to_html');
						//console.log(myData);
						var card_html = Mustache.to_html(tpl, myData);
						console.log('before html');
						$('#cardView').html(card_html);
					});
			}); // end get template
		});  //end pusher channel bind

	//get the rulings requires another API call..
	async function get_rulings_array(card_data){

		rulings_list = [];

		fetch(card_data.rulings_uri)
			.then(function(response){
				 return response.json();
				})
			.then(function(rulings_data){
				rulings_data.data.forEach(function(this_ruling) {
					rulings_list.push(this_ruling);
				});			
			});

		return(rulings_list);

	}


	// looks inside the card for the prints_search_url, and returns the list of images 
	// from the various prints...
	async function get_illustration_array(card_data){

		img_list = [];

		fetch(card_data.prints_search_uri)
			.then(function(response){
				 return response.json();
				})
			.then(function(cards_data){
				cards_data.data.forEach(function(this_card) {
					img_list.push(this_card['image_uris']['large']);
				});			
			});

		return(img_list);

	}



function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}


  </script>
</head>
<body>
<div id='cardView' class='container-fluid' style='padding: 3% 3%;'>
<h3> Delver URL: https://lore.ft1.us/changeCard/{{$channel_id}}/$multiverse_id </h3>
<a href='/templates/cardview.template.html'>reload card view template</a>
</div>
</body>

