<style>
  .con .flex{
    width: 100%;
    height: auto;
    display: flex;
    margin-bottom: 2rem;
  }
  .con .flex .left{
    width: 15%;
    height: auto;
    
  }
  .con .flex .left .fa{
    font-size: 35px;
    color: #d44444;
  }
  .con .flex .right{
    width: 85%;
    height: auto;
    margin-top: -1rem;
  }
  .con .flex .right h1{
    color: #d44444;
    font-weight: 600;
  }
</style>
<main>
  <div class="spacer_m"></div>
  <!-- Write To Us -->
  <div class="container px-5 mb-5">
    <div class="row mb-3 justify-content-center">
      <div class="col-md-4 text-center px-3">
        <h1 class="fc_underline">Contact Us</h1>
      </div>
    </div>

    <div class="row justify-content-center mt-5 py-5 ">
      <div class="col-md-12 ">
        <div class="row writetous justify-content-center">

          <div class="col-md-6 ">
            <!-- Form  -->


            <?php echo form_open(base_url('frontend/contact/insert_data'), array('id' => 'contactform', 'method' => 'POST')); ?>

            <div class="row px-4">
              <div class="col">
                <div class="mb-3">
                  <label for="" class="donate_input_lable pb-3">Name*</label>
                  <input type="text" class="form-control base_input" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Name">
                </div>
              </div>
            </div>
            <div class="row px-4">
              <div class="col">
                <div class="mb-3">
                  <label for="" class="donate_input_lable pb-3">Email*</label>
                  <input type="email" class="form-control base_input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                </div>
              </div>
            </div>
            <div class="row px-4">
              <div class="col">
                <div class="mb-3">
                  <label for="" class="donate_input_lable pb-3">Number*</label>
                  <input type="number" class="form-control base_input" name="mob" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Number">
                </div>
              </div>
            </div>
          
            <div class="row px-4 mb-3">
              <div class="col">
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="donate_input_lable pb-3">Message*</label>
                  <div class="form-floating base_input">
                    <textarea class="form-control" placeholder="Leave a comment here" name="msg" id="floatingTextarea2" style="height: 100px"></textarea>
                  </div>
                </div>
              </div>
            </div>

            <div class="row px-4">
              <div class="col">
                <button class="btn brown_btn">Submit</button>
              </div>
            </div>
            <?php echo form_close(); ?>
          </div>
          <div class="col-md-6 con">
            <div class="flex">
              <div class="left">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
              </div>
              <div class="right">
                <h1>Our Office</h1>
                <p>114, azad nagr, alwar (301001)</p>
              </div>
            </div>
            <div class="flex">
              <div class="left">
                <i class="fa fa-phone" aria-hidden="true"></i>
              </div>
              <div class="right">
                <h1>Giving Us A Call</h1>
                <p>+91 0000000000</p>
              </div>
            </div>
            <div class="flex">
              <div class="left">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </div>
              <div class="right">
                <h1>Email</h1>
                <p>info@dogbazar.com</p>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>


  </div>

  <div class="spacer_m"></div>
  <div class="spacer_m"></div>


  <!-- End Main -->

</main>
<div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
                
                  <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <span id="validation" class="form_errors"></span>
                  </div>
                </div>
              </div>
            </div>


<!--style>
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
    <?php echo form_open(base_url('frontend/contact/insert_data'), array('id' => 'contactform', 'method' => 'POST')); ?>
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

</script-->