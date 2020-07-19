var inputLocation = document.getElementById('address');

if(inputLocation){
	var form 		= getParentByTagName(inputLocation, 'form');
	var latInputs 	= form.querySelectorAll('[name="lat"]');
	var lngInputs 	= form.querySelectorAll('[name="lng"]');

	inputLocation.addEventListener('keydown', function(){
		latInputs[0].value = '';
    	lngInputs[0].value = '';
	});

	var autocomplete = new google.maps.places.Autocomplete(inputLocation, {
		types: 					['geocode', 'establishment'],
        componentRestrictions: 	{country: 'UA'}
    });

    google.maps.event.addListener(autocomplete, 'place_changed', function(){
    	var geocoder = new google.maps.Geocoder;

    	latInputs[0].value 	= autocomplete.getPlace().geometry.location.lat();
    	lngInputs[0].value 	= autocomplete.getPlace().geometry.location.lng();
    	inputLocation.value = autocomplete.getPlace().name;
    });
}

function getParentByTagName(node, tagname) {
	var parent;
	if (node === null || tagname === '') return;
	parent  = node.parentNode;
	tagname = tagname.toUpperCase();

	while (parent.tagName !== "HTML") {
		if (parent.tagName === tagname) {
			return parent;
		}

		parent = parent.parentNode;
	}

	return parent;
}