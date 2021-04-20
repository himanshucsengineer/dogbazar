


<main>


        <!-- Title Strip  -->
        <!-- <div class="title_strip_yellow">
            <div class="container">
                <div class="row py-4">
                    <div class="col">
                        <h1 class="title_strip_yellow_h1">Adopt a pet</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="">
            <div class="container">
                <div class="row">
                    <div class="col-2 title_strip_yellow_ul"></div>
                </div>
            </div>
        </div> -->
        <!-- End Title Strip -->

        <div class="spacer_m"></div>

        <!-- Main Content -->

        <!-- Franchies Heading -->
        <div class="container px-4 mb-5">

            <!-- Heading -->
            <div class="row mb-3 justify-content-center">
                <div class="col-md-4 text-center px-3">
                    <h1 class="fc_underline">VOLENTEER</h1>
                </div>
            </div>
            <!-- Top para -->
            <div class="row mb-3 justify-content-center">
                <div class="col-md-8  text-center px-3">
                    <p>This list contains plants that have been reported as having systemic effects on animals and/or
                        intense effects on the gastrointestinal tract.
                    </p>
                </div>
            </div>

            <!-- Options -->
            <div class="row justify-content-around px-2 py-2">
                <div class="col-md-5  px-3">
                    <div class="fc_options">
                        <h3 class="fc_options_h1">A Unique Concept</h3>
                        <p>This list contains plants that have been reported as having systemic effects on animals
                            and/or
                            intense effects on the gastrointestinal tract..</p>
                    </div>
                    <div class="fc_options">
                        <h3 class="fc_options_h1">Growth Opportunities</h3>
                        <p>This list contains plants that have been reported as having systemic effects on animals
                            and/or
                            intense effects on the gastrointestinal tract..</p>
                    </div>
                </div>
                <div class="col-md-5  px-3">
                    <div class="fc_options">
                        <h3 class="fc_options_h1">Creating Ecosystem for Pet Lovers</h3>
                        <p>This list contains plants that have been reported as having systemic effects on animals
                            and/or
                            intense effects on the gastrointestinal tract..</p>
                    </div>
                    <div class="fc_options">
                        <h3 class="fc_options_h1">Training Programs</h3>
                        <p>This list contains plants that have been reported as having systemic effects on animals
                            and/or
                            intense effects on the gastrointestinal tract..</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="spacer_s"></div>

        <!-- Banner -->
        <div class="container mb-4">
            <div class="fc_banner px-2 py-2">
                <div class="row py-4">
                    <div class="col-md-12">
                        <div class="row justify-content-center">
                            <div class="col-md-9 text-center px-3">
                                <h3 class="fc_banner_color">JOIN YOUR HANDS AND BECOME PARTNERS IN
                                    COMPLIANCE WITH MAD:</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-9 text-center px-3">
                                <p class=" fc_banner_color">This list contains plants that have been reported as having
                                    systemic effects on animals and/or intense effects on the gastrointestinal tract..
                                </p>
                            </div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
        <!-- end Banner -->

        <div class="spacer_s"></div>

        <!-- Write To Us -->
        <div class="container px-5 mb-5">
            <div class="row mb-3 justify-content-center">
                <div class="col-md-4 text-center px-3">
                    <h1 class="fc_underline">Apply For Volunteering</h1>
                </div>
            </div>

            <div class="row justify-content-center mt-5 py-5 ">
                <div class="col-md-12 ">
                    <div class="row justify-content-center">
                        <div class="col-md-9 ">
                            <!-- Form  -->

                            <div class="writetous">
                                <?php echo form_open(base_url( 'frontend/volunteer/insert_data'), array('id'=>'volunteerform','method'=>'POST'));?>

                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Name*</label>
                                            <input type="text" class="form-control base_input" name="name"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Your Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Email*</label>
                                            <input type="email" class="form-control base_input" name="email"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Your Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Number*</label>
                                            <input type="number" class="form-control base_input" name="mob"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Your Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">Qualification*</label>
                                            <input type="text" class="form-control base_input" name="edu"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Your Qualification">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="" class="donate_input_lable pb-3">City/Town/village*</label>
                                            <input type="text" class="form-control base_input" name="city"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Your City">
                                        </div>
                                    </div>
                                </div>
                                <div class="row px-4 mb-3">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="donate_input_lable pb-3">Address*</label>
                                            <div class="form-floating base_input">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    name="add" id="floatingTextarea2"
                                                    style="height: 100px"></textarea>
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