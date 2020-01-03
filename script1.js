var comment_submit=null;

            var comment_delete=null;

            var reload_flag=true;



            $(document).ready(function () {



                $("#btn-recent").click(function ()

                {

                    $("#user").hide();

                    $("#recent").show();

                    

                });

                

                



                $("#btn-users").click(function ()

                {

                    $("#user").show();

                    $("#recent").hide();

                    

                });





    







       







                    ///to be called by simple javascript function.

            $(function(){



                function comment(id,cmt)

                {

                    if(cmt!="")

                    {

                    check=1;

                    $.ajax({

                    url: 'PHP/comment.php',

                    data: {id:id,cmt:cmt,check:check},

                    type: 'POST',

                    success: function (data) {

                    $("#comment-text").val("");

                    alert(data);

                    }

                    });

                    }

                    else

                    {

                        alert("Empty fields not allowed.");

                    }

                }

                







                function del_comment(id){

                     check=2;

                   $.ajax({

                    url: 'PHP/comment.php',

                    data: {id:id,check:check},

                    type: 'POST',

                    success: function (data) {

                    alert(data);

                     

                    }



                    });

                }

                







                function edit_comment(id){

                   $.ajax({

                    url: 'edit_comment.php',

                    data: {id:id},

                    type: 'POST',

                    success: function (data) {

                    $(".view").html(data); ///must be html

                    $('#myModal').modal('show');

                     

                    }



                    });

                }







               



             

            

                comment_submit=comment;

                comment_delete=del_comment;

                comment_edit=edit_comment;

                textarea_click=mm;

               

            })





            })

            /// javascript function.

            function comment_sub(btn)

            {

                id=$(btn).attr("id");

                cmt=$(btn).parent().find("textarea").val();  

                comment_submit(id,cmt);

            }

            

            function comment_del(del_btn) {

               btn_id=$(del_btn).attr("id"); 

               comment_delete(btn_id);

               

            }



            

            

            function comment_edt(edit_btn) {

            edit_id=$(edit_btn).attr("id"); 

             comment_edit(edit_id);

            }



            function disable_reload()

            {

                reload_flag=false;

            }



            function enable_reload()

            {

                reload_flag=true;

            }



   

            function reload() {

                        if(reload_flag){

						var xhttp = new XMLHttpRequest();

						xhttp.onreadystatechange = function() {

                       

                        var cmt_text=$("#comment-text").val();



						if (this.readyState == 4 && this.status == 200 && cmt_text=="" ) {

						$("#recent").html(this.responseText);

						}



						};

						xhttp.open("GET", "PHP/Ajax/refresh_comment.php", true);

						xhttp.send();

                        }

						}

                



						setInterval(function(){ reload(); }, 1000);

           