<style>
    .test-class{
        width: 100%;
        height: auto;
        padding-top: 4rem;
        padding-bottom: 4rem;
    }
    .test-class input[type="email"], input[type="text"], input[type="number"], select , textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
    }
    .test-class button{
        width: 15rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        border: none;
        outline: none;
        color: white;
        background-color: green;
    }
</style>
<div class="test-class">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
            <form action="<?php echo base_url() ?>sponsor/pay" method="post">
                <input type="text" name="name" placeholder="enter your name">
                <input type="email" name="email" placeholder="enter your email">
                <input type="number" name="mob" placeholder="enter Your number">
                <input type="text" name="amount" placeholder="amount in inr">
                <textarea name="msg" id="" cols="30" rows="5" placeholder="Your message"></textarea>
                <button>Send</button>
            </form>
        </div>
    </div>
</div>