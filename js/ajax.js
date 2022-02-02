$(document).ready(function () {

    //signup
    $("#signup").click(function () {
      var fname     = $("#fname").val();
      var email     = $("#email").val();
      var user      = $("#usrname").val();
      var pword     = $("#pword").val();
      var cpword    = $("#cpword").val();
  
      if (fname == "" || fname == null) {
        $("#msg").html("Kindly input your full name.");
      } else {
          if (email == "" || email == null) {
            $("#msg").html("Invalid email address");
          } else {
             if (user == "" || user == null) {
                $("#msg").html("Create a username");
              } else {
                if (pword == "" || pword == null) {
                  $("#msg").html("Create a secured password");
                } else {
                  if (cpword == "" || cpword == null) {
                    $("#msg").html("Confirm your password");
                  } else {
                    if (pword != cpword) {
                      $("#msg").html("Password does not match");
                    } else {
                      $("#msg").html("Loading...Please Wait");
  
                      $.ajax({
                        type: "post",
                        url: "functions/init.php",
                        data: {
                          fname: fname,
                          email: email,
                          user: user,
                          pword: pword,
                          cpword: cpword,
                        },
                        success: function (data) {
                          $("#msg").html(data);
                        },
                      });
                    }
                  }
                }
              }
            }
          }
    });
  
  
  
  
    //signin
    $("#lsignin").click(function () {
      var username = $("#luname").val();
      var password = $("#lpword").val();
  
      if (username == "" || username == null) {
        $("#lmsg").html("Kindly insert your username");
      } else {
        if (password == "" || password == null) {
          $("#lmsg").html("Invalid password inputted");
        } else {
          $("#lmsg").html("Loading... Please wait");
          $.ajax({
            type: "post",
            url: "functions/init.php",
            data: { username: username, password: password },
            success: function (data) {
              $("#lmsg").html(data);
            },
          });
        }
      }
    });
  
  
    //forgot
    $("#fsub").click(function () {
      var fgeml = $("#femail").val();
  
      if (fgeml == "" || fgeml == null) {
        $("#fmsg").html("Please insert your email");
      } else {
        $("#fmsg").html("Loading...Please Wait!");
  
        $.ajax({
          type: "post",
          url: "functions/init.php",
          data: { fgeml: fgeml },
          success: function (data) {
            $("#fmsg").html(data);
          },
        });
      }
    });
  
  
  
    //reset
    $("#updf").click(function () {
  
      var fgpword  = $("#pword").val();
      var fgcpword = $("#cpword").val();
  
      if (fgpword == "" || fgpword == null) {
        $("#umsg").html("Please create a new password");
      } else {
        if (fgcpword == "" || fgcpword == null) {
          $("#umsg").html("Kindly confirm Your Password");
        } else {
          if (fgpword != fgcpword) {
            $("#umsg").html("Password does not match!");
          } else {
            $("#umsg").html("Loading... Please Wait!");
  
            $.ajax({
              type: "post",
              url: "functions/init.php",
              data: { fgpword: fgpword, fgcpword: fgcpword },
              success: function (data) {
                $("#umsg").html(data);
              },
            });
          }
        }
      }
    });
  
    /******** USER PROFILE SECTION */
    $("#pst").click(function () {
  
      var title  = $("#title").val();
      var gist = $("#gist").val();
  
      if (title == "" || title == null) {
        $("#tmsg").html("Please tell us the title of your gist");
      } else {
        if (gist == "" || gist == null) {
          $("#gmsg").html("Tell us your gist");
        } else {
          $("#umsg").html("Loading... Please wait");
            $.ajax({
              type: "post",
              url: "../functions/init.php",
              data: { title: title, gist: gist },
              success: function (data) {
                $("#umsg").html(data);
              },
            });
          }
        }
    });
    


   
   //Comment Begins

    $("#comment_btn").click(function() {
      
      //adds 
      var comment = $("#content").val();
      var post = $("#post_id").val();
      var commentId = $("#responseid").val();
      var num_com = $("#comm").val();
      var num_com = parseInt(num_com);
      var num = num_com + 1;
      
      document.getElementById('comm').value = num;
      document.getElementById('com').innerHTML = num;

      if (commentId === '') {
        var commentId = '0';
      }
      if (comment == "" || comment == null ) {
        $("#msg").html("Write a comment");
      }else{

        $.ajax({
              type: "post",
              url: "../functions/init.php",
              data: { comment: comment, post: post, commentId: commentId, num: num },
              success: function (data) {
                $("#show").html(data);
              },
            });
      }
      document.getElementById('content').value = '';
      
      
    });

 //Like
         
      

  });
  