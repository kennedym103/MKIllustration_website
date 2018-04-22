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
      $('#surf-height').html(height + '<span> ft</span>');
      $('#surf-period').html(period  + '<span> seconds</span>');
      $('#wind-direction').html(wind);

      if((height < 3) ||
         (period < 7) ||
         (wind === "SSW" || wind === "S"  || wind === "SSE" || wind === "SE" || wind === "ESE" || wind === "E" || wind === "ENE" || wind === "NE" || wind === "N" || wind === "NNW" )) {
          $('#surf-work-message').html("The surf in New Jersey isn't that great so I am probably at work.");
      }
      else {
          $('#surf-work-message').html("The surf in New Jersey is looking good I probably have paddled out.");
      }
    }
});
