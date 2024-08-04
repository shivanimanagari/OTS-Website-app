<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <style>
            .sunday{
                padding-top: 60px;
                padding-bottom: 30px;
                background-color: antiquewhite;
            }
           .pricingTable{
    font-family: 'Ubuntu', sans-serif;
    text-align: center;
    position: relative;
    z-index: 1;
}
.pricingTable:before,
.pricingTable:after{
    content: '';
    background: linear-gradient(to right, #FE6D94, #F7BA81);
    height: calc(100% - 45px);
    width: 80%;
    border-radius: 0 0 200px 200px;
    transform: translateX(-50%);
    position: absolute;
    left: 50%;
    top: 10px;
    z-index: -1;
}
.pricingTable:after{
    background: #fff;
    width: calc(80% - 10px);
    height: calc(100% - 51px);
}
.pricingTable .pricingTable-header{
    color: #222;
    margin: 0 0 35px 0;
}
.pricingTable .title{
    color: #fff;
    background: linear-gradient(to right, #FE6D94, #F7BA81);
    font-size: 33px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    text-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
    padding: 17px 10px;
    margin: 0 0 25px;
    border-radius: 50px;
}
.pricingTable .price-value .amount{
    font-size: 50px;
    font-weight: 700;
    display: block;
}
.pricingTable .price-value .duration{
    font-size: 16px;
    display: block;
}
.pricingTable .pricing-content{
    text-align: left;
    padding: 0;
    margin: 0 0 30px;
    list-style: none;
    display: inline-block;
}
.pricingTable .pricing-content li{
    color: #333;
    font-size: 16px;
    font-weight: 500;
    padding: 0 0 0 28px;
    margin: 0 0 15px;
    position: relative;
}
.pricingTable .pricing-content li:last-child{ margin: 0; }
.pricingTable .pricing-content li:before{
    content: "\f00c";
    color: #fff;
    background: #5dbb54;
    font-family: "Font Awesome 5 Free";
    font-size: 12px;
    font-weight: 900;
    text-align: center;
    line-height: 21px;
    width: 20px;
    height: 20px;
    border-radius: 50px;
    position: absolute;
    top: 1px;
    left: 0;
}
.pricingTable .pricing-content li.disable:before{
    content: "\f00d";
    background: #ed4444;
    padding-right: 1px;
}
.pricingTable .pricingTable-signup a{
    color: #fff;
    background: linear-gradient(-135deg, #FE6D94, #F7BA81);
    font-size: 22px;
    font-weight: 600;
    text-transform: capitalize;
    letter-spacing: 1px;
    width: 90px;
    height: 90px;
    padding: 20px 15px;
    margin: 0 auto;
    border-radius: 50px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    display: block;
    transition: all 0.5s;
}
.pricingTable .pricingTable-signup a:hover{
    text-shadow: 5px 5px 0px rgba(0, 0, 0, 0.15);
    box-shadow: 0 0 0 5px rgba(0, 0, 0, 0.15);
}
.pricingTable.blue:before,
.pricingTable.blue .title{
    background: linear-gradient(to right, #896BEF, #60CEE7);
}
.pricingTable.blue .pricingTable-signup a{
background: linear-gradient(-135deg, #896BEF, #60CEE7);
}
.pricingTable.green:before,
.pricingTable.green .title{
    background: linear-gradient(to right, #30CEBF, #47AA40);
}
.pricingTable.green .pricingTable-signup a{
background: linear-gradient(-135deg, #30CEBF, #47AA40);
}
@media only screen and (max-width: 990px){
    .pricingTable{ margin-bottom: 40px; }
}
        </style>
    </head>
    <body>
        <h2 align="center" style="padding-top:30px;">Courses Offered by our OTS</h2>
        <h5 align="center" style="opacity:0.5;">OTS offers many technical and non technical courses from variety of domains.</h5>
        <div class="sunday">
        
        <div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h5 class="title">Sunday Special</h5>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn Coding to make<br> Dora cross the river<br>&nbsp;<br>&nbsp;</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
            
            
            
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h5 class="title">Sunday Special</h5>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn to virtually <br>scroll your name in <br>LCD connected to the<br> microcontroller</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
            
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h5 class="title">Sunday Special</h5>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn to make virtual<br> calculator<br>&nbsp;<br>&nbsp;</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
            <div>&nbsp;</div>
            
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <h3 class="title">Sunday Special</h3>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn to automatically<br> switch on light when<br> you enter a room</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <h3 class="title">Sunday Special</h3>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn to get notification<br> in your mobile if there <br>is rain at your locality</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable blue">
                    <div class="pricingTable-header">
                        <h3 class="title">Sunday Special</h3>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn Artificial Intelligence,<br> Make your own CHATBOT</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
            <div>&nbsp;</div>
            
            <div class="col-md-4 col-sm-6">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h5 class="title">Sunday Special</h5>
                        <div class="price-value">
                            <span class="amount">Rs.199/-</span>
                            <span class="duration">Per Hour</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Learn Artificial Intelligence,<br> Make your own PONG game</li>
                    </ul>
                    <div class="pricingTable-signup">
                        <a href="#">Sign Up</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
        </div>  
    </body>
</html>