    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<?php 
include "config.php";
session_start();
?>
<div class="modal fade" id="botmodal" tabindex="-1" role="dialog" aria-labelledby="botmodal" aria-hidden="true">
  <div class="modal-dialog modal-full" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color:red;">X</div>
  <div class="wrapperr">
        <div class="title">Discuter avec  Parkili</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                <i class="fas fa-robot"></i>
                </div>
                <div class="msg-header">
                    <p>Bonjour, Comment Puis-Je Vous Aider ?</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Tapez quelque chose ici.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function(){
            $("#send-btn").on("click", function(){
                $value = $("#data").val();
                $msg = '<div class="user-inbox inbox"><div class="msg-header"><p>'+ $value +'</p></div></div>';
                $(".form").append($msg);
                $("#data").val('');
                // start ajax code
                $.ajax({
                    url: 'botmsg.php',
                    type: 'POST',
                    data: 'text='+$value,
                    success: function(result){
                        $replay = '<div class="bot-inbox inbox"><div class="icon"><i class="fas fa-robot"></i></div><div class="msg-header"><p>'+ result +'</p></div></div>';
                        $(".form").append($replay);
                        // when chat goes down the scroll bar automatically comes to the bottom
                        $(".form").scrollTop($(".form")[0].scrollHeight);
                        $('#botmodal').animate({ scrollTop: $('#botmodal .modal-dialog').height() }, 500);
                        
                    }
                });
            });
        });
    </script>

    </div></div></div>
<!--Back to top-->
<div id="back-top" class="back-top"> <a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a> </div>
<!--/Back to top--> 
<button name="bot" id="bot" style="background-color:transparent; border-color:transparent;"><a href="#botmodal" data-toggle="modal" data-dismiss="modal"> <img src="assets/images/bot.png" height="50"/> </a> </button>
<button id="find_btn" class="find_btn" ><i class="fa fa-random"></i> DIRECTION</button>
<style>
.modal-full {
    min-width: 100%;
    margin-left: 0;
}

.modal-full .modal-content {
    min-height: 100vh;
}
    .modal-backdrop.in {
	opacity: 0.9;
}
    #botmodal {
  align-items: center;
  justify-content: center;
}
  #back-top{
    right: 15px;
  }
  #bot{
  bottom: 85px;
  position: fixed;
  right: 12px;
  z-index: 1;}
  .find_btn{
  position: fixed; /* Fixed/sticky position */
  bottom: 35px; /* Place the button at the bottom of the page */
  left: 23px; /* Place the button 30px from the right */
  z-index: 99; /* Make sure it does not overlap */
  border: none; /* Remove borders */
  outline: none; /* Remove outline */
  background-color: #fa2837;
  color: white; /* Text color */
  cursor: pointer; /* Add a mouse pointer on hover */
  padding: 15px; /* Some padding */
  border-radius: 10px; /* Rounded corners */
  font-size: 12px; /* Increase font size */}
  .find_btn:hover {
    background-color: red; /* Add a dark-grey background on hover */

}
</style>





<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery.js"></script>
<script type = "text/javascript">
  $(document).ready(function(){
  $("#bot").click(function () {
    $("iframe").toggle();
  });
});
$("#find_btn").click(function () { //user clicks button
	if ("geolocation" in navigator){ //check geolocation available 
		//try to get user current location using getCurrentPosition() method

		navigator.geolocation.getCurrentPosition(function(position){ 
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
        $(location).prop('href','https://djerba-park.com/geo.php?lat='+latitude+'&long='+longitude);
			});
	}else{
		alert("Browser doesn't support geolocation!");
	}
   maximumAge:10000
   timeout:60000
   enableHighAccuracy: true
   
});
</script>