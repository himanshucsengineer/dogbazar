
<!-- BreadCrumb -->
<div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p><a href="<?php echo base_url()?>" class="nodecoration bc_link">Home</a> / 
                        <a href="<?php echo base_url()?>other-ways-to-give" class=" nodecoration bc_link bc_link_active">Other Ways To Give</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- End BreadCrumb -->



    <main>

        <div class="container">
            <div class="row justify-content-between ">
                <div class="col-md-3 px-5 m_hide">
                    <div class="row">
                        <div class="col">
                            <h3>Ways To Give</h3>
                        </div>
                    </div>

                    <div class="space"></div>

                    <div class="row">
                        <div class="col">
                            <ul class="p-0 m-0">
                                <a href="<?php echo base_url()?>donate" class="nodecoration">
                                    <li class="tranning_side_links"><span><i
                                                class="fas fa-chevron-right side"></i></span>Donate Now</li>
                                </a>
                                <a href="<?php echo base_url()?>gift-giving" class="nodecoration">
                                    <li class="tranning_side_links"><span><i
                                                class="fas fa-chevron-right side"></i></span>Gift Giving</li>
                                </a>
                                <a href="<?php echo base_url()?>pet-memorial" class="nodecoration">
                                    <li class="tranning_side_links"><span><i
                                                class="fas fa-chevron-right side"></i></span>Pet Memorial
                                    </li>
                                </a>
                                <a href="<?php echo base_url()?>sponsor-an-animal" class="nodecoration">
                                    <li class="tranning_side_links"><span><i
                                                class="fas fa-chevron-right side"></i></span>Sponsor An Animal</li>
                                </a>
                                <a href="<?php echo base_url()?>other-ways-to-give" class="nodecoration">
                                    <li class="tranning_side_links"><span><i
                                                class="fas fa-chevron-right side"></i></span>Other Ways To give</li>
                                </a>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-9 px-4">
                <?php
    if ($this->session->flashdata('success')) {
        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
    } else if ($this->session->flashdata('error')) {
        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
    }


    ?> 
                    <div class="row">
                        <div class="col">
                            <div class="tranning_page_head">
                                <h1 class="h2_head col_fff">Other Ways To Give</h1>
                            </div>
                        </div>
                    </div>

                    <div class="spacer_s"></div>

                    <div class="row px-2 justify-content-center">
                        <div class="col">
                            <img src="<?php echo base_url()?>assest/images/img3.jpg" alt="" class="wtg_img">
                        </div>
                    </div>

                    <div class="spacer_s"></div>

                    <div class="row">
                        <div class="col">
                            <h2 class="h2_head">Pet Memorials: Remembering a Beloved Pet</h2>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <p>A gift in memory of a pet honors that lasting bond and is a tangible way to honor the
                                enduring love we have for our pets after they’ve passed.</p>

                            <p>looking Scarlett Johansson once. As a matter of fact, this got us thinking. About burgers
                                and the
                                ways people love eating them. Found in every part of the world and a favorite among
                                various age
                                groups from freckled teenagers to the wiser generation, </p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <h3 class="">Memorial Giving</h3>

                            When you make a memorial gift, your support not only pays tribute to a beloved pet or
                            person, it supports the work of Best Friends and helps homeless pets get the love and care
                            they need to thrive as they wait for loving families of their own.
                        </div>
                    </div>

                    <div class="spacer_m"></div>
                    <!--a href="" class="nodecoration" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        <div class="row">
                            <div class="col-md-3 py-4">
                                <img src="<?php echo base_url()?>assest/images/img1.jpg" alt="" class="w-100">
                            </div>
                            <div class="col-md-8 px-4">
                                <div>
                                    <h2 class="wtg_link">Give Your Donation Like Else</h2>
                                    <p>A gift in memory of a pet honors that lasting bond and is a tangible way to honor
                                        the
                                        enduring love we have for our pets after they’ve passed.</p>
                                </div>
                            </div>
                        </div>
                    </a-->
                </div>
            </div>
        </div>

        <!--div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
            aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Lets Bring The Smile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="<?php echo base_url() ?>sponsor/pay" method="post">
                        <div class="px-3 py-3">
                            <h2 class="modal_head">Give Your Donation Like Pro</h2>
                            <p>looking Scarlett Johansson once. As a matter of fact, this got us thinking. About burgers
                                and the. </p>
                        </div>


                        <div class="row mb-3 px-4">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                          
                                            <input type="text" class="form-control base_input donar_input_pay"
                                                name="amount" id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Enter Your Amount">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                         
                                            <input type="text" class="form-control base_input" id="exampleInputEmail1"
                                                name="name" aria-describedby="emailHelp"
                                                placeholder="Your Name">
                                        </div>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                       
                                            <input type="email" class="form-control base_input" name="email"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                          
                                            <input type="number" class="form-control base_input" name="mob"
                                                id="exampleInputEmail1" aria-describedby="emailHelp"
                                                placeholder="Phone Number">
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-4">
                                          
                                            <div class="form-floating base_input">
                                                <textarea class="form-control" placeholder="Leave a comment here"
                                                    name="msg" id="floatingTextarea2"
                                                    style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <button class=" brown_btn w-100">Lets Donate</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
        </div-->

        <div class="spacer_m"></div>

    </main>

    <script>


// Model Box Pop Up

var myModal = document.getElementById('myModal')
var myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', function () {
    myInput.focus()
})

var hb = document.querySelector('#hb');
var mobhead = document.querySelector('#mobhead');

hb.addEventListener('click', () => {
    mobhead.classList.toggle('active_header');
});

</script>