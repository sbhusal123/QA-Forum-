
 <!-- <script type="text/javascript" src="jquery.js"></script> -->
 <script type="text/javascript" src="search/script.js"></script>

                    <script type="text/javascript">

                      $(document).ready(function(){

                          $('#search_btn_home').click(function () {

                          var search_text=" ";

                          search_text=$("#search_value").val();
                      $.ajax({
                          url: 'qs.php',
                          data:{search_text:search_text},
                          type: 'POST',
                          success: function (data) {
                              window.location.href = "search_home.php"; 
                             }

                          });

                          });
                      })



                    </script>

            <div id="navigation" style="margin-top: -10px">

                <ul style="display: inline">

                    <li style="margin-left: 5px"><a href="index.php">Home</a></li>

                    <li><a href="#">About Us</a></li>

                    <li><a href="#">Contact</a></li>

                    <li style="float: right"> <a href="login.php">Log In</a> </li>
                          
                      <p style="margin-top: -6px">

                        <input type="text"


                               placeholder="Search" 

                                style="font-size: 15px;
                                border-radius: 5px;
                                background: pink;
                                text-align:center;
                                height:39px;
                                border: 1px solid green;
                                color:teal;
                                width:160px"
                                id="search_value"
                                onkeyup="suggest()"
                        />

                        <button id="search_btn_home" class="btn-primary btn-sm glyphicon glyphicon-search" 
                            style="position: absolute;height:39px;width:40px;margin-left: -20px;margin-top:3px;border: none">
                        </button>

                      </p>
                  
                </ul>
                <div id="display_option" style="display: none">
                <ul>
                <li id="recommendation" style="margin-top:-16px;margin-bottom: -15px"></li>
                </ul>
</div>
            </div>
