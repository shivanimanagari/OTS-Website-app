
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <style>
.nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #45b649;
    background: #fff;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}
body {
    min-height: 100vh;
    background: linear-gradient(to left, #dce35b, #45b649);
}
    </style>
</head>

<body>
    <!-- Demo header-->
<section class="py-5 header">
    <div class="container-fluid py-4">
        <header class="text-center mb-5 pb-5 text-white">
            <h1 class="display-4">All Courses</h1>
            <p class="font-italic mb-2"><h4><a href="courses.php">Back to courses</a> / <a href="category-courses.php">Categories</h4></a></p>
        </header>


        <div class="row">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                        <span class="font-weight-bold small text-uppercase">Technical Courses</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">Non-Technical Courses</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">Competitive Exam</span></a>

                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                        <span class="font-weight-bold small text-uppercase">Online Tutions</span></a>
                    
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-hello-tab" data-toggle="pill" href="#v-pills-hello" role="tab" aria-controls="v-pills-hello" aria-selected="true">
                        <span class="font-weight-bold small text-uppercase">Non Academic courses</span></a>
                    
                    <a class="nav-link mb-3 p-3 shadow" id="v-pills-free-tab" data-toggle="pill" href="#v-pills-free" role="tab" aria-controls="v-pills-free" aria-selected="true">
                        <span class="font-weight-bold small text-uppercase">Free Services</span></a>
                    </div>
            </div>


            
            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h3 class="font-italic mb-4">Technical Courses</h3>
                                      
                        
                        <div class="card-deck">
    <div class="card">
        <img src="images/python.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Python</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            
        <a href="all-courses-list/python.php" target="blank"><button type="button" class="btn btn-success">More</button></a>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/java.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Core Java</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
        <a href="all-courses-list/java.php" target="blank"><button type="button" class="btn btn-success">More</button></a>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/website.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Web Development</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
        <a href="all-courses-list/web-development.php" target="blank"><button type="button" class="btn btn-success">More</button></a>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>
                        
                 
                 
                        
                        
    <div class="card-deck">
    <div class="card">
        <img src="images/iot.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Internet of Things(IOT)</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>19999/-</del> 9999/-</p>
        </div>
        <div class="card-footer">
            
        <a href="all-courses-list/iot.php" target="blank"><button type="button" class="btn btn-success">More</button></a>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/3d-design.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">3D Design</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>12999/-</del> 3999/-</p>
        </div>
        <div class="card-footer">
        <a href="all-courses-list/3d-design.php" target="blank"><button type="button" class="btn btn-success">More</button></a>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/application.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Application Development</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
        <a href="all-courses-list/app-dev.php" target="blank"><button type="button" class="btn btn-success">More</button></a>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>
                        
    
                        
          <div class="card-deck">
    <div class="card">
        <img src="images/ansys.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ANSYS</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>17999/-</del> 6999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/solidworks.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Solid Works</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>17999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/proe.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">ProE</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>17999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>                 
       
                        
                        
                    <div class="card-deck">
    <div class="card">
        <img src="images/catia.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Catia</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>17999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button"  class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/autocad.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Auto Cad(2D &amp; 3D)</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>15999/-</del> 6999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/3dprinting.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">3D Printing</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>15999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>
                        
                        
                                                        <div class="card-deck">
    <div class="card">
        <img src="images/robotics.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Robotics</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>19999/-</del> 7999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/machinelearning.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Machine Learning</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>15999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/ai.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Artificial Intelligence</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>15999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>
            
                        
                                                                        <div class="card-deck">
    <div class="card">
        <img src="images/datascience.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Data Science</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>39999/-</del> 19999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/devops.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Devops</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>24999/-</del> 9999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/azure.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Azure</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>24999/-</del> 9999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>

                        
                        
                        
<div class="card-deck">
    <div class="card">
        <img src="images/c.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">C Programming</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>12999/-</del> 3999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/r.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">R Programming</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>15999/-</del> 5999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/java.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Advanced Java</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>16999/-</del> 6999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>
    
                        
                        
<div class="card-deck">
    <div class="card">
        <img src="images/matlab.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">MATLAB</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>16999/-</del> 6999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/vedicmath.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Vedic Math(for beginners)</h5>
            <p class="card-text">7 Days</p>
            <p class="card-text">Rs.<del>9999/-</del> 2999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/tinkercad.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">TinkerCAD-3D DESIGN</h5>
            <p class="card-text">2 Weeks</p>
            <p class="card-text">Rs.<del>16999/-</del> 6999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div> 
                        
                        
                        
                        <div class="card-deck">
    <div class="card">
        <img src="images/ansys.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Ansys Workbench</h5>
            <p class="card-text">2 Weeks</p>
            <p class="card-text">Rs.<del>17999/-</del> 7999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/programming.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Coding(Scratch +Tinkercad + circuit design</h5>
            <p class="card-text">2 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
                            <div class="card"><br>
        
        <div class="card-body"><br><br>
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <p class="card-text"></p>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
</div>
                    </div>              
                    
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <h4 class="font-italic mb-4">Non Technical Courses</h4>
                        <div class="card-deck">
    <div class="card">
        <img src="images/english.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Spoken English</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>5999/-</del> 2999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/french.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">French Language</h5>
            <p class="card-text">4 Months</p>
            <p class="card-text">Rs.<del>9999/-</del> 5000/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/german.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">German Language</h5>
            <p class="card-text">4 Months</p>
            <p class="card-text">Rs.<del>9999/-</del> 5000/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>   
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h4 class="font-italic mb-4">Competitive Exam</h4>
                        
                        <div class="card-deck">
    <div class="card">
        <img src="images/gate.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Gate</h5>
            <p class="card-text">9 Months</p>
            <p class="card-text">Rs.<del>44999/-</del> 24999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/gre.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">GRE</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>24999/-</del> 14999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/ielts.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">IELTS</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div> 
                        <div class="card-deck">
    <div class="card">
        <img src="images/tofel.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">TOFEL</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/upsc.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">UPSC Exams (Full package)</h5>
            <p class="card-text">6 Months</p>
            <p class="card-text">Rs.<del>24999/-</del> 14999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/banking.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Banking PO &amp; Clerk</h5>
            <p class="card-text">4 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div> 
                 
                        
<div class="card-deck">
    <div class="card">
        <img src="images/banking.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Banking Clerk</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>10999/-</del> 3999/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/rrb.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">RRB</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/ssc.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">SSC</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>14999/-</del> 4999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
</div>    
                    </div>
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <h4 class="font-italic mb-4">Updating...</h4>
                    </div>
                    
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-hello" role="tabpanel" aria-labelledby="v-pills-hello-tab">
                        <h4 class="font-italic mb-4">Non-Academic Courses</h4>
                        
                        <div class="card-deck">
    <div class="card">
        <img src="images/yoga.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">YOGA and Asanas</h5>
            <p class="card-text">Monthly charge</p>
            <p class="card-text">Rs.<del>4999/-</del> 1499/-</p>
        </div>
        <div class="card-footer">
            
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <img src="images/music.png" style="height: 180px;" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Music/Guiter</h5>
            <p class="card-text">3 Months</p>
            <p class="card-text">Rs.<del>9999/-</del> 1999/-</p>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">More</button>
<button type="button" class="btn btn-danger">Register</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"></h5>
            <p class="card-text"></p>
            <p class="card-text"></p>
        </div>
        <div class="card-footer">
            
        </div>
    </div>
</div>   
                    </div>
                    
                    
                    
                    <div class="tab-pane fade shadow rounded bg-white p-5" id="v-pills-free" role="tabpanel" aria-labelledby="v-pills-free-tab">
                        <h4 class="font-italic mb-4">Free Services</h4>
                        
                        
                        <div class="card-deck">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Software Installation</h5>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">Contact Us</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">E-books</h5>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">Contact Us</button>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Activation of Windows/Office</h5>
        </div>
        <div class="card-footer">
            <button type="button" class="btn btn-success">Contact Us</button>
        </div>
    </div>
</div>   
                    </div>
                    
                    
                    
                </div>
            </div>
    
    </div>
</section>
</body>