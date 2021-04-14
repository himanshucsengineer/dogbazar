<style>
    .contact{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .contact input[type="text"], input[type="email"], input[type="number"],textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
        padding-left: 1rem;
    }
    .contact button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        background-color: red;
        outline: none;
        border: none;
    }
</style>
<div class="contact">

<div class="row justify-content-center">
    <div class="col-md-6">
    <?php echo form_open(base_url( 'frontend/contact/insert_data'), array('id'=>'contactform','method'=>'POST'));?>
        <input type="text" name="name" placeholder="enter Your Name">
        <input type="email" name="email" placeholder="Enter Your Email">
        <input type="number" name="mob" placeholder="Enter Your Number">
        <textarea name="msg"  cols="30" rows="10" placeholder="Type Your Message"></textarea>
        <button>Submit</button>
        <?php echo form_close(); ?> 
    </div>
</div>

</div>

<div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                  <!-- Modal Header -->
                  <!-- Modal body -->
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>

    <script>
    $("#contactform").submit(function(event){
	event.preventDefault();
	var post_url = $(this).attr("action"); 
	var request_method = $(this).attr("method"); 
	var form_data = $(this).serialize(); 
	
	$.ajax({
		url : post_url,
		type: request_method,
		data : form_data,
	}).done(function(response){ //
        console.log(response);
        $('#validation').html(response);
        $('#myModal').modal('show').fadeIn('slow');
        $("#contactform").trigger("reset");
	});
});

</script>
