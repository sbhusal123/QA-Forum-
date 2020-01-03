            <div id="navigation" class="navbar-fixed-top"  style="margin-top: -10px" >
                <ul>
                    <li style="margin-left:-30px"><a href="logpage.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact</a></li>
                    <li style="float: right" id="logout"> <a href="login.php">Log Out</a> </li>

                    <div>

                        <script type="text/javascript" src="jquery.js"></script>
                    <script type="text/javascript">
                      $(document).ready(function(){


                          $('#search_btn_login').click(function () {
                          var search_text=" ";
                          search_text=$("#search_value").val();
                          

                          $.ajax({
                          url: 'qs.php',
                          data:{search_text:search_text},
                          type: 'POST',
                          success: function (data) {
                            window.location.href = "search_login.php"; 
                            //alert(data);
                          }
                          });
                          });


                      })

                    </script>
                    <div>

                    

                        <input type="text"
                               placeholder="Search" 
                               style="margin-top: 15px;
                               font-size: 15px;
                               border-radius: 10px;
                               text-align:center;
                               height:40px;
                               margin-left:5px;
                               background:black;
                               border: 2px solid green;
                               color:teal;
                               "
                                id="search_value"
                               />
                        <button id="search_btn_login" class="btn-success glyphicon glyphicon-search" style="height:40px;margin-left:-16px;
                                border:2px solid green;
                                "></button>
                    </div>
                </ul>
            </div>