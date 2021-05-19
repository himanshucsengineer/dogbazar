<div class="form_top_new form_top_vol">
    <div class="">
        <div class="container">
            <h1>Become A volunteer</h1>
            <p>Helping an animal for a good life </p>
        </div>
    </div>
</div>


<div class="help_us_volunteer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Help Us Help Them</h1>
                <h4>And have a fun time while doing it!</h4>
            </div>
            <div class="col-md-8">
                <p>Our volunteers keep animals safe, healthy, and happy as they get ready for their new lifetime homes.</p>
                <p>There are so many ways to volunteer your time to the shelter. Whether you want to visit with the animals or offer other services like marketing expertise, event engagement, construction services, or any of the examples below, we could most certainly utilize your time.</p>
            </div>
        </div>
    </div>

</div>
<div class="utilize">
    <div class="container">
        <h1>We Could Utilize Your Services!</h1>
        <p>We couldn’t save the lives of these animals without you. We appreciate any time or donations you can offer us.</p>
        <div class="row">
            <div class="col-md-4 ">

                <center><i class="fas fa-calendar-alt"></i></center>
                <h2>When?</h2>
                <p>We need volunteers seven days a week from 11:00-7:00. If you even have an hour, stop by. There’s always a pet in need.</p>
            </div>
            <div class="col-md-4">
                <center><i class="fas fa-users"></i></center>
                <h2>Who?</h2>
                <p>Anyone can volunteer! You just have to love animals and be ready to work.</p>
            </div>
            <div class="col-md-4">
                <center><i class="fas fa-question-circle"></i></center>
                <h2>Why?</h2>
                <p>We rescue thousands of abused and neglected dogs and cats every year. They all need care, help, and your love.</p>
            </div>
        </div>
    </div>
</div>

<div class="what_will_vonlunteer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>What will I do as a volunteer at Animal House?</h1>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Walk and socialize with the dogs</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Bathe and groom dogs</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Spend quality 1-on-1 time with the animals to help socialize them and teach them tricks! (puppies, kittens & cats too)</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Spend time in the ‘Free Roam’ cat room to socialize, groom or otherwise, help make their lives more comfortable</p>
                    </div>
                </div>


            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url() ?>/assest/images/Volunteer_What.jpg" alt="what will vounteer do">
            </div>
        </div>
    </div>
</div>

<div class="list_dog_form volunteer_form_new">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="list_dod_form_inner">
                    <?php
                    if ($this->session->flashdata('success')) {
                        echo '<div class="alert alert-success">' . $this->session->flashdata('success') . '</div>';
                    } else if ($this->session->flashdata('error')) {
                        echo '<div class="alert alert-danger">' . $this->session->flashdata('error') . '</div>';
                    }


                    ?>
                    <form action="<?php echo base_url() ?>frontend/volunteer/insert_data" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Name</label>
                                <input type="text" name="name" placeholder="Enter your Name">
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" name="email" placeholder="Enter your Email">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Number</label>
                                <input type="number" name="mob" placeholder="Enter your No.">
                            </div>
                            <div class="col-md-6">
                                <label for="">Address</label>
                                <input type="text" name="add" placeholder="Enter your Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">City</label>
                                <input type="text" name="city" placeholder="Enter your City">
                            </div>
                            <div class="col-md-6">
                                <label for="">State</label>
                                <input type="text" name="state" placeholder="Enter your State">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Zip Code</label>
                                <input type="number" name="zip" placeholder="Enter your Zip code">
                            </div>
                            <div class="col-md-6">
                                <label for="">Age</label>
                                <input type="text" name="age" placeholder="Enter your Age">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label for="">Type Of Volunteer Work You Are Interested In Doing: </label>

                                <select name="work" id="">
                                    <option value="Walk Dogs">Walk Dogs</option>
                                    <option value="Cat Attendant">Cat Attendant</option>
                                    <option value="Events">Events</option>
                                    <option value="Shelter Care">Shelter Care</option>
                                    <option value="Grant Writing (Experience Preferred)">Grant Writing (Experience Preferred)</option>
                                    <option value="Data Entry">Data Entry</option>
                                    <option value="Greeting">Greeting</option>
                                    <option value="Volunteer Specialist">Volunteer Specialist</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label for="">Do You Have Any Questions We Can Prepare To Answer For You?</label>
                                <textarea name="msg" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-5">
                                <button>Submit</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>