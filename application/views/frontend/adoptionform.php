<style>
    input[type="text"],input[type="email"],input[type="number"]{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        padding-left: 1rem;
        border: 1px solid #cdcdcd;
        outline: none;
        margin-bottom: 1rem;
        
    }
    button{
        width: 100%;
        height: auto;
        padding-top: .5rem;
        padding-bottom: .5rem;
        color: white;
        background-color: green;
        outline: none;
    }
</style>
<?php
                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
                    $url = "https://";
                else
                    $url = "http://";
                // Append the host(domain name, ip) to the URL.   
                $url .= $_SERVER['HTTP_HOST'];
                // Append the requested resource location to the URL   
                $url .= $_SERVER['REQUEST_URI'];
                $uniqid= basename($url);
                ?>
<div class="row justify-content-center">
    <div class="col-md-6">
    
        <form action="<?php echo base_url() ?>frontend/adoptionform/insert_data" method="post">
        <input type="text" name="uniq_id" value="<?php echo $uniqid?>">
            <input type="text" name="name" placeholder="Enter Your Name">
            <input type="email" name="email" placeholder="Enter Your Email">
            <input type="number" name="mob" placeholder="Enter Your Number">
            <input type="text" name="city" placeholder="Enter Your City">
            <button>Submit Request</button>
        </form>
    </div>
</div>