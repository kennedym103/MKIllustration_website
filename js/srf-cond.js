$.ajax({
    url: "http://magicseaweed.com/api/76b9f172c5acb310986adca80941a8bb/forecast/?spot_id=4050",

    // The name of the callback parameter, as specified by the YQL service
    jsonp: "callback",

    // Tell jQuery we're expecting JSONP
    dataType: "jsonp",

    // Tell YQL what we want and that we want JSON
    data: {
        format: "json"
    },

    // Work with the response
    success: function( data ) {
      if(data.length < 6) {
         console.log('data returned is not the right length!');
         return;
      }

      var height = data[5].swell.maxBreakingHeight ;
      var period = data[5].swell.components.combined.period;
      var wind = data[5].wind.compassDirection;
      $('#surf-height').html(height + '<span> FT</span>');
      $('#surf-period').html(period  + '<span> SECONDS</span>');
      $('#wind-direction').html(wind);

      if((height < 3) ||
         (period < 7) ||
         (wind === "SSW" || wind === "S"  || wind === "SSE" || wind === "SE" || wind === "ESE" || wind === "E" || wind === "ENE" || wind === "NE" || wind === "N" || wind === "NNW" )) {
          $('#surf-work-message').html("THE SURF IN NEW JERSEY ISN'T THAT GREAT SO MARTIN IS PROBABLY AT WORK.");
      }
      else {
          $('#surf-work-message').html("THE SURF IN NEW JERSEY IS LOOKING GOOD MARTIN HAS PADDLED OUT.");

      }
    }
});
