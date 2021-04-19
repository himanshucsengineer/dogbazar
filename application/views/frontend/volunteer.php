<style>
    .volunteer{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }
    .volunteer input[type="text"], input[type="email"], input[type="number"]{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: 1px solid #cdcdcd;
        outline: none;
        padding-left: 1rem;
        margin-bottom: 1rem;
    }
    .volunteer button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        background-color: green;
        color: white;
        border: none;
        outline: none;
    }
</style>
<div class="volunteer">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
            <?php echo form_open(base_url( 'frontend/volunteer/insert_data'), array('id'=>'volunteerform','method'=>'POST'));?>
                <input type="text" name="name" placeholder="Enter Your Name">
                <input type="email" name="email" placeholder="Enter Your Email">
                <input type="number" name="mob" placeholder="Enter Your Number">
                <input type="text" name="edu" placeholder="Enter Your Qualification">
                <input type="text" name="city" placeholder="Enter City/Village/Town">
                <input type="text" name="add" placeholder="Enter Your Address">
                <button>Submit</button> 
                <?php echo form_close(); ?>                
            </div>
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
    $("#volunteerform").submit(function(event){
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
        $("#volunteerform").trigger("reset");
	});
});

</script>