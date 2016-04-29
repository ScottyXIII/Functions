  // An awsome function to returns URL varaiable from query string.
  function _GET(variable)
  {
      var query = window.location.search.substring(1);
      var vars = query.split("&");
      for (var i=0;i<vars.length;i++) {
          var pair = vars[i].split("=");
          if(pair[0] == variable){return pair[1];}
      }
      return(false);
  }

  // Adds a prev/next function to Array prototype. Allows you to itterate an array.
	Array.prototype.next = function() {
		return this[++this.current];
	};
	Array.prototype.prev = function() {
		return this[--this.current];
	};
	Array.prototype.current = 0;
