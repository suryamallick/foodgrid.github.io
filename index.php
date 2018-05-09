<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css"></link>
	<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css"></link>
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
    
 
    
</head>
<body>

  <!--================================================== foods grid ================================================== -->
      <section id="food-grid">
      <div class="container">
    	<div class="row" id="food-container">
    	  
         </div>
    </div>
      	   
      </section>
 

<script type="text/javascript" src="js/jquery-2.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script>

$(document).ready(function(){
var food_item_grid ="";
$.ajax({
    url: 'http://texpertise.in/data.php',
    method: 'GET',
    headers: {
	    'Access-Control-Allow-Origin': '*'
             },
     crossDomain:true,
    // The type of data we expect back
    contentType: "application/json; charset=utf-8",
    dataType: "json",
    success: function(data) {
		 console.log(data);
        $.each(data,function(i,item){	
		
		if(item.nonVeg == true){
		foodtype_class="non-veg";
		foodtype_value="Non Veg";
		}else{
		foodtype_class="veg";
		foodtype_value="Veg";
		}
		
		if(item.spicy == true){
		spicy_class="show-spicy";
		spicy_value="Spicy";
		}else{
		spicy_class="hide-spicy"
		
		}
		
		food_item_grid +='<div class="col-sm-6 col-md-4 col-xs-12"><div class="card">';

			food_item_grid +='<div class="card-img zoomin">'
			+'<img class="img-fluid" src="'+item.image+'" alt=""></div> <div class="card-body"><div class="news-title"><h2 class=" title-small">'
			+'<a href="#">'+item.name+'</a></h2></div>'
			+'<p class="card-text"><i class="fa fa-circle '+foodtype_class+'" aria-hidden="true"></i><small class="text-time"><em>'+foodtype_value+'</em></small></p>'
			+'<p class="card-text '+spicy_class+'"><img class="img-fluid" src="img/chilli.png"><small class="text-time"><em>'+spicy_value+'</em></small></p>'
			+'<a href="viewdetail.html?name='+item.name+'" target="_blank" class="btn btn-orange btn-right">View Details</a></div></div></div>'
			});

		$("#food-container").append(food_item_grid);
    }
	
  });
});


	
</script>
</body>
</html>
