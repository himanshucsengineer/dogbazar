<style>
    .user_panel{
        width: 100%;
        height: auto;
        background-color: #ECF0F1;
        padding-top: 5rem;
        padding-bottom: 5rem;
    }
    .user_panel .box{
        width: 100%;
        height: auto;
        
    }
    .user_panel .box button{
        width: 100%;
        height: auto;
        padding-top: .8rem;
        padding-bottom: .8rem;
        padding-left: 1.5rem;
        text-align: left;
        background-color: white;
        border-bottom: 1px solid #cdcdcd;
        outline: none;
        border-top: none;
        border-right: none;
        border-left: none;
        transition:.5s
    }
    .user_panel .box button:hover{
        background-color: #d44444;
        color: white;
        border-bottom: 1px solid #d44444;
    }
    .user_panel .box .active{
        background-color: #d44444;
        color: white;
        border-bottom: 1px solid #d44444;
    }
    .user_panel .box2{
        width: 100%;
        height: auto;
        border: 1px solid #cdcdcd;

    }
    .user_panel .box2 .head{
        width: 100%;
        height: auto;
        background-color: #f9f9f9;
        color: #d44444;
        padding-top: 1rem;
        padding-bottom: 1rem;
        padding-left: 1rem;
        border-bottom: 1px solid #cdcdcd;
    }
    .user_panel .box2 .box2_body{
        width: 100%;
        height: auto;
        padding-top: 2rem;
        padding-bottom: 3rem;
        padding-left: 1rem;
        padding-right: 1rem;
        background-color: white;
    }
    .user_panel .box2 .box2_body input[type="text"], input[type="email"], input[type="number"], textarea{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline:none;
        margin-bottom: 1rem;
    }
    .user_panel .box2 .box2_body button{
        width: 15rem;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        background-color: #d44444;
        border: 1px solid #d44444;
        outline: none;
        transition: .5s;
        border-radius: 2px;
    }
    .user_panel .box2 .box2_body button:hover{
        color: black;
        background-color: transparent;
        border: 1px solid #f39933;
        border-radius: 25px;
    }
</style>
<div class="user_panel">
    <div class="container">
        <div class="row ">
            <div class="col-md-3">
                <div class="box">
                    <button class="active">Profile & Setting</button>
                    <button>Donation History</button>
                    <button>Listed Dogs</button>
                </div>    
            </div>
            <div class="col-md-9">
                <div class="box2">
                    <div class="head">
                        <h3>Profile And Settings</h3>
                    </div>
                    <div class="box2_body">
                        <div class="row">
                            <div class="col-md-2">
                                <p>Name:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="text" placeholder="enter your name">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Email:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="email" placeholder="enter your Email">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Number:</p>
                            </div>
                            <div class="col-md-7">
                                <input type="number" placeholder="enter your Number">
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <p>Address:</p>
                            </div>
                            <div class="col-md-7">
                                <textarea name="" id="" cols="30" rows="5" placeholder="enter your address"></textarea>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                
                            </div>
                            <div class="col-md-7">
                                <button>Update Profile</button>
                            </div>
                            <div class="col-md-3">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>