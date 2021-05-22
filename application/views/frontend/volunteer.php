
<div class="news_main form_top_vol">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Become A volunteer</h3>
            </div>
            <div class="col-md-6">
                <p><a href="<?php echo base_url() ?>"><span class="acc">Home</a></span> / <a href="<?php echo base_url() ?>volunteer">Volunteer</a></p>
            </div>
        </div>
    </div>
</div>

<div class="help_us_volunteer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1>Join Us</h1>
                <h4>And have a fun time while doing it!</h4>
            </div>
            <div class="col-md-8">
                <p>As it is said “Every bit helps”</p>
                <p>Abuse, Cruelty, Neglect is the reality of today’s world & biggest pain point for the animal rehabs & shelter homes like us. The increasing number of abandoned and mistreated animals compels us to make a loud appeal to one and all to come forward & join us in caring for these speechless & homeless beings. We need YOU.</p>
                <p>Our members believe that animal abuse and their ill treatment are deep rooted in the cultural and social mind-sets of the people and these require fundamental changes in how people think about their relationship with the animals as well as the environment.</p>
                <p>If you care for animals and other creatures that we share this earth with and would like to contribute your efforts that could have a multiplier effect in building a compassionate society in India, come join us as a volunteer or an intern. You would be involved in teaching school children compassion towards animals; empathy towards people and care for the nature. Get to know what & how you can contribute & this being a noble task, may even inspire you to becoming a hero to many speechless souls in need.</p>

                
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
        <div class="sing_volun">
            <a href="#volunteer"><button>Signup To Volunteer</button></a>
        </div>
    </div>
</div>

<div class="what_will_vonlunteer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>As a volunteer what you can do</h1>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Research and develop educational material for humane education programs</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Research and write material for the media, social media, blogs and newsletters</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Graphic and web design our online and textbooks material</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Build databases of animal welfare organizations and hospitals, Vets, Ambulance Operators, volunteers, etc.</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Conduct workshops for college students on animal welfare and environment sustenance</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Attend to our Animal Helpline and help in coordinating rescue work</p>
                    </div>
                </div>
                <div class="flex">
                    <div class="left">
                        <i class="fas fa-check"></i>
                    </div>
                    <div class="right">
                        <p>Fund raise by writing grant proposals and crowd funding</p>
                    </div>
                </div>

            </div>
            <div class="col-md-6">
                <img src="<?php echo base_url() ?>/assest/images/Volunteer_What.jpg" alt="what will vounteer do">
            </div>
        </div>
    </div>
</div>

<div class="list_dog_form volunteer_form_new" id="volunteer">
    <div class="container">
        <h1>Fill Below Form To Apply For Volunteering</h1>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="list_dod_form_inner" >
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