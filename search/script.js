var run_httprequest=true;

/*
run_httprequest prevents 
the running of http_request module while
pressing the arrow keys.
Similar to module in angular.
*/ 
 
var child_selector=0;

///jquery code .
  $(document).ready(function () {
 	replace_search_by="";
      $('#search-text').keyup(function (e) {


 		 if (e.which == 40) { // down arrow
 		 	run_httprequest=false;
 		 	 $("#ans:nth-child("+child_selector+")").css("background-color", "#CFC6C6");
 		 	child_selector++;
           $("#ans:nth-child("+child_selector+")").css("background-color", "#757474");
           replace_search_by= $("#ans:nth-child("+child_selector+")").text();
           replace_search_by=$.trim(replace_search_by);
            $("#search-text").val("");
           $("#search-text").val(replace_search_by);


        } else if (e.which == 38) { // up arrow
        	 $("#ans:nth-child("+child_selector+")").css("background-color", "#CFC6C6");
        	child_selector--;
        	run_httprequest=false;
            $("#ans:nth-child("+child_selector+")").css("background-color", "#757474");
             replace_search_by= $("#ans:nth-child("+child_selector+")").text();
             $("#search-text").val("");
              replace_search_by=$.trim(replace_search_by);
           $("#search-text").val(replace_search_by);

        }else {
        	run_httprequest=true;
        }
      });
    });




///javascript
	function display()
	{

		///prevent the viewing of default text on option field.

			msg=  document.getElementById("search-text").value;
			if(msg!=" ")
			{
			document.getElementById("display_option").style.display="block";
			}
			if(msg==""){
				 document.getElementById("display_option").style.display="none";
			}
	}



	function suggest() {
		/// This function is executed when any key is pressed on input field
		/// runs sync http request to the php file.
			msg=   document.getElementById("search-text").value;

			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200 && run_httprequest) {
				child_selector=0;
			document.getElementById("recommendation").innerHTML =
			this.responseText;
			display();
			}
			};
			xhttp.open("POST", "recom.php?que="+msg, true); 
			xhttp.send();
	}
