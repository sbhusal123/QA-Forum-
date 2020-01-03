$(document).ready(function () {

                    var check;


                    $('#settings').click(function () {
                    window.location.href = "settings.php";
                    });



                    $('#question').click(function () {
                    window.location.href = "question.php";
                    });





                    $('#posts').click(function () {
                    window.location.href = "posts.php";
                    });





                    $("#logout").click(function () {
                    $.ajax({
                    url: 'PHP/logout.php',
                    type: 'POST',
                    success: function () {
                    }
                    });
                    });





                    $("#login").click(function () {
                    var log_user;
                    var log_pass;
                    var data = "";
                    log_user = $("#username").val();
                    log_pass = $("#password").val();
                    $.ajax({
                    url: 'PHP/user-login.php',
                    data: {user: log_user, passwd: log_pass},
                    type: 'POST',
                    success: function (data) {
                    $("#loger").html(data);
                    }
                    });
                    });





                    $("#register").click(function () {

                    var reg_user;
                    var reg_email;
                    var reg_repwd;
                    var reg_pwd;
                    reg_user = $("#reg-user").val();
                    reg_email = $("#reg-email").val();
                    reg_repwd = $("#re-pass").val();
                    reg_pwd = $("#reg-pass").val();
                    $.ajax({
                    url: 'PHP/register-user.php',
                    data: {user: reg_user, email: reg_email, repwd: reg_repwd, pwd: reg_pwd},
                    type: 'POST',
                    success: function (data) {
                    $("#reger").html(data);
                    }
                    });
                    });





                    $("#change_pwd").click(function () {
                    var old_pwd;
                    var new_pwd;
                    var re_pwd;
                    var userid;
                    old_pwd = $("#old_pwd").val();
                    new_pwd = $("#new_pwd").val();
                    re_pwd = $("#re_pwd").val();
                    userid = $("#dk").val();
                    if (new_pwd == "" || re_pwd == "" || old_pwd == "")
                    {
                    alert("Fields Empty.");
                    } else if ((new_pwd !== re_pwd) && (new_pwd !== ""))
                    {
                    alert("Password Do not match.");
                    } else {

                    check = 1;
                    $.ajax({
                    url: 'PHP/update_db.php',
                    data: {old_pwd: old_pwd, new_pwd: new_pwd, re_pwd: re_pwd, stat: check},
                    type: 'POST',
                    success: function (data) {
                    alert(data);
                    }
                    });

                    }

                    });






                    $("#change_email").click(function () {

                    var new_email;
                    new_email = $("#chg_email").val();
                    if (new_email == "")
                    {
                    alert("Fields Empty.");
                    } else {
                    check = 2;
                    $.ajax({
                    url: 'PHP/update_db.php',
                    data: {new_email: new_email, stat: check},
                    type: 'POST',
                    success: function (data) {
                    alert(data);
                    }

                    });
                    }

                    });





                    $("#resend_pin").click(function () {
                    $.ajax({

                    beforeSend: function () {
                    $("#process").html("Please Wait..")
                    },
                    url: 'PHPMailer/email.php',
                    data: {},
                    type: 'POST',
                    success: function (data) {
                    $("#process").html("");
                    alert(data);
                    }

                    });
                    });




                    $("#submit_pin").click(function () {
                    var inp;
                    inp = $("#email_pin").val();
                    $.ajax({
                    url: 'PHP/submit-pin.php',
                    data: {input: inp},
                    type: 'POST',
                    success: function (data) {
                    alert(data);
                    }

                    });
                    });





                    $("#submit-question").click(function () {
                    var title, question;
                    title = $("#q-title").val();
                    question = $("#q").val();

                    if (title == "" || question == "")
                    {
                    alert("Empty Fields Not Allowed.");
                    } else{
                    check = 1;

                    $.ajax({
                    url: 'PHP/question.php',
                    data: {title: title , question: question, check: check},
                    type: 'POST',
                    success: function (data) {
                    alert(data);
                     
                    }

                    });
                    }
                    });

                    var edit_id;


                    $(".delete").click(function() {
                    var tr_id = this.id;
                    var post=2;
                    //alert("asdasd");
                    $.ajax({
                    url: 'PHP/question.php',
                    data: {qid:tr_id,check:post},
                    type: 'POST',

                    success: function (data) {
                    location.reload();

                    }

                    });

                    });




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




          
})