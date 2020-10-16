$(function(){

  // code goes here
	$(".class").click(function(){
	  $(this).children('.class-details').show();
	  $(this).css('margin-bottom', '2em');
	});

    // put all images into array
    var colors = ["AliceBlue", "AntiqueWhite", "Azure", "Beige", "Bisque", "BlanchedAlmond", "Cornsilk", "FloralWhite", "GhostWhite", "HoneyDew", "Ivory", "LavenderBlush", "LemonChiffon", "LightCyan", "LightGoldenRodYellow", "LightYellow", "Linen", "MintCream", "MistyRose", "OldLace", "PapayaWhip", "SeaShell", "Snow", "White", "WhiteSmoke" ]
    // var colors = [ "YellowGreen", "PaleGreen", "LimeGreen", "LawnGreen", "chartreuse", "GreenYellow", "MediumSpringGreen"];
    var colorsLength = colors.length -1 ;

	var pickAcolor = function () {
		var random = Math.floor(Math.random() * colorsLength);
		var todaysColor = colors[random];
		return todaysColor;
	};

	var color = pickAcolor();

	$('.background').css('background-color', color);


// Randomizer 2.0

    // Create an empty array for us to populate
    var participants = [];

    // Parses the DOM for every "#roster li a" element
    $("#roster p a").each(function() {
      // Get that item's text and it's href attribute
      var names = $(this).html();
      var href = $(this).attr('href');
      // Pushes the name and href into the array as one string
      participants.push(names + ", " + href);
    });

    // Log our now populated array to the console to check
    console.log(participants);


    // Click the Randomizer button!
    $("#randomizer").click(function(){

        // Remove any classes
        $("#chosenOne span").attr('class' , '');

        // Choose a random whole number based on the roster.
        var chosenOne = Math.floor(Math.random() * participants.length);

            // We could do something more exciting/suspenseful here... maybe play an animation for 2-3 seconds?

        // If there are participants...
        if (participants.length >= 1 ) {
            // Split our custom string into a name and an href
            var chosenName = participants[chosenOne].split(", ")[0];
            var chosenLink = participants[chosenOne].split(", ")[1];

            // Show their name in the console.
            console.log(participants.length + ": " + participants[chosenOne]);

            // Get first name
            var firstName = chosenName.split(" ")[0];

            console.log(chosenName);

            // Display the "Chosen One" inside our <h1> element, and wrap it with a link.
            // $("#chosenOne span").show();
            $("#chosenOne span").html(firstName);
            $("#chosenOne span").addClass(firstName);

            // Fade out our current "Chosen One"
             $("#roster a:contains(" + chosenName + ")").addClass('selected');

            // Splice is an array method that removes our "Chosen One" from the list of Participants
            participants.splice(chosenOne, 1);
        }

        // Once everyone has presented
        else {
            $("#chosenOne span").addClass('done');
            $("#chosenOne span").html("That's Everyone");
            setTimeout(function(){
            $("#chosenOne span").fadeOut('fast');
            }, 900);
        }
    });

    // Click the Randomizer button!
    $("#chosenOne span.done").click(function(){
      $(this).hide();
    });


});
