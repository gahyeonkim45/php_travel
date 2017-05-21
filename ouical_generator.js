document.getElementById('calendar-generator').onsubmit = function() {

	// Get values for the calendar
	var title = document.getElementById('event-title').value;
	var startString = document.getElementById('start-time').value;
	var start = new Date(startString.replace(/-/g, ",").replace(/T/, " "));
	var endString = document.getElementById('end-time').value;
	var end = new Date(endString.replace(/-/g, ",").replace(/T/, " "));
	var address = document.getElementById('event-address').value;
	var description = document.getElementById('event-description').value;


	// Make sure basic info is passed in
	if (!(title && start && end)) {
		console.log('Add some details');
		return false;
	}

	// Create the calendar
	var myCalendar = createCalendar({

		data : {
			title : title,
			start : start,
			end : end,
			address : address,
			description : description
		}
	});

	// Add the calendar result and an example
	document.getElementById('live-example').appendChild(myCalendar);

	var embedTextArea = document.createElement('textarea');
	embedTextArea.setAttribute('rows', 10);
	embedTextArea.setAttribute('cols', 80);
	
	return false;
};
