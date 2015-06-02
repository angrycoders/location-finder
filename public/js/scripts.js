
function initialize() {
  var mapOptions = {
    center: new google.maps.LatLng(-1.0926469,37.0131339),
    zoom: 15
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
    mapOptions);

  var input =(document.getElementById('pac-input'));
  var location = '-1.0926469,37.0131339';
  var radius = 1000;

  var types = document.getElementById('type-selector');
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(types);

  var autocomplete = new google.maps.places.Autocomplete(input);
  autocomplete.bindTo('bounds', map);

  var infowindow = new google.maps.InfoWindow();
  var marker = new google.maps.Marker({
    map: map,
    anchorPoint: new google.maps.Point(0, -29)
  });

  google.maps.event.addListener(autocomplete, 'place_changed', function() {
    infowindow.close();
    marker.setVisible(false);
    var place = autocomplete.getPlace();
    if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
    }

    // If the place has a geometry, then present it on a map.
    if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
    } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);  // Why 17? Because it looks good.
    }
    marker.setIcon(/** @type {google.maps.Icon} */({
      url: place.icon,
      size: new google.maps.Size(71, 71),
      origin: new google.maps.Point(0, 0),
      anchor: new google.maps.Point(17, 34),
      scaledSize: new google.maps.Size(35, 35)
    }));
    marker.setPosition(place.geometry.location);
    marker.setVisible(true);

    var address = '';
    if (place.address_components) {
      address = [
        (place.address_components[0] && place.address_components[0].short_name || ''),
        (place.address_components[1] && place.address_components[1].short_name || ''),
        (place.address_components[2] && place.address_components[2].short_name || '')
      ].join(' ');
    }

    infowindow.setContent('<div><strong>' + place.name + '</strong><br>' + address);
    infowindow.open(map, marker);
  });
	
	var center = new google.maps.LatLng(-1.0926469,37.0131339);
        var circle = new google.maps.Circle({
            center: center,
            radius: 5000
    });
	
	autocomplete.setBounds(circle.getBounds());

  // Sets a listener on a radio button to change the filter type on Places
  // Autocomplete.
  function setupClickListener(id, types) {
    var radioButton = document.getElementById(id);
    google.maps.event.addDomListener(radioButton, 'click', function() {
      autocomplete.setTypes(types);
    });
  }

  setupClickListener('changetype-all', []);
  setupClickListener('changetype-address', ['address']);
  setupClickListener('changetype-establishment', ['establishment']);
  setupClickListener('changetype-geocode', ['geocode']);
}

google.maps.event.addDomListener(window, 'load', initialize);

$(document).on("click", '#general_settings', function(){
	$('#error, #notices, #noticeboards,  #loading').fadeOut(1500);
	$('#about_us, #upload_avatar, #avatar_upload, .drop_down_sort, #notice_upload, #contact_us_form').addClass('hidden');
	html="";
	html+="<form><div class='general_settings_inner'>";
	html+="<div id='general_settings_message text-center'></div> "
	html+="<p class='change_username'>Userame: </p><hr>";
	html+="<p class='change_password'>Password: <a href='#modal-container-625299' class='preview_details' role='button' id='modal-625299' data-toggle='modal'>Click to change</a> <span class='ui-icon hidden pull-right ui-icon-pencil'></span></p><hr>";
	html+="<p data-toggle='tooltip' title='Click to change values' class='change_email'>Email: <span class='ui-icon hidden pull-right ui-icon-pencil'></span></p><input type='text' id='new_email' class='hidden text-info form-control general_settings_input'><hr>";	
	html+="<p data-toggle='tooltip' title='Click to change values' class='change_name'>Full Name: <span class=' hidden ui-icon pull-right ui-icon-pencil'></span></p><input type='text' id='full_name' class='hidden text-info form-control general_settings_input'><hr>";	
	html+="<p data-toggle='tooltip' title='Click to change values' class='change_phone'>Phone: <span class='ui-icon hidden pull-right ui-icon-pencil'></span></p><input type='text' placeholder='+[code][number]i.e +254 71098183' id='new_phone' class='hidden text-info form-control general_settings_input'><hr>";
	html+="<input type='submit' class='btn btn-block btn-info disabled' value='Submit' id='change_info_btn'><hr>";
	html+="</form>";
	$('.add_content').html(html).fadeIn(1500);

	//to add tooltip
	$('.change_name, .change_email, .change_phone').on('mouseover, mouseout').tooltip();
});

$(document).ready(function(){

	$('#inner_settings, #inner_notifications, #inner_messages').hide();
	$('#notifications').on("click", function(){
		$('#inner_notifications').html("here is some crap").slideToggle(500);
	});
	$('#messages').on("click", function(){
		
		$('#inner_messages').slideToggle(500);

	});	
	$('#settings').on("click", function(){
		var html="";
		html+="<div class='account_settings'><br>";
		html+="<p class='one'><a href='#' class='text-info' id='general_settings'>General settings</a></p>";
		html+="<p><a href='#' class='text-info' id='security_settings'>Security settings</a></p>";
		html+="<p><a href='#' class='text-info' id='privacy_settings'>Privacy</a><br><br>";
		html+="</div>";
		$('#inner_settings').html(html);
		$('#inner_settings').slideToggle(500);

		
	});

});
