<html>
    <head>
        <style>
            .workshop{
                background-color: #bdcbe5;
            }
            div {
  box-sizing: border-box;
  transition: all ease-in-out 0.5s;
  -moz-transition: all ease-in-out 0.5s;
  -webkit-transition: all ease-in-out 0.5s;
}
.icetab {
  border: 3px solid #7CFC00;
  display: inline-block;
  border-bottom: 0px;
  margin: 0px;
  color: #fff;
  cursor: pointer;
  border-right: 0px;
}
.icetab:last-child {
  border-right: 2px solid #7CFC00;
}

#icetab-content {
  overflow: hidden;
  position: relative;
  border-top: 2px solid #7CFC00;
}

.tabcontent {
  position: absolute;
  left: 0px;
  top: 0px;
  background: #fff;
  width: 100%;
  border-top: 0px;
  border: 2px solid #7CFC00;
  border-top: 0px;
  transform: translateY(-100%);
  -moz-transform: translateY(-100%);
  -webkit-transform: translateY(-100%);
}

.tabcontent:first-child {
  position: relative;
}
.tabcontent.tab-active {
  border-top: 0px;
  display: block;
  transform: translateY(0%);
  -moz-transform: translateY(0%);
  -webkit-transform: translateY(0%);
}

/* A tiny wee bit of visual formating */

.codepen-container {
  margin: 40px;
}
.tabcontent {
  padding: 20px;
}
.icetab {
  padding: 20px;
  letter-spacing: 2px;
}
.current-tab {
  background: #7CFC00;
}

        </style>
    </head>
    <body>
        <div class="workshop">
        <p style="text-color:black;font-size:30px;text-align:left;padding-left:30px;padding-top:20px;">Workshops</p>
<div class="codepen-container">
<div id="icetab-container">
    	<div class="icetab current-tab">Past Workshops</div><div class="icetab">Ongoing Workshops</div><div class="icetab">Upcoming Workshops</div>       
    </div>
    
    <div id="icetab-content">
    	<div class="tabcontent tab-active"><div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                <button type="button" class="btn btn-info">Event Completed</button>
            </div>
        </div> 
        
        <div class="tabcontent"><div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                <button type="button" class="btn btn-success">Registations closed</button>
            </div>
        
        </div>
         <div class="tabcontent"><div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                <button type="button" class="btn btn-danger"> Register here</button>
            </div>
        </div>
        
    </div> 
        </div>
        </div>
    </body>
      <script>var tabs = document.getElementById("icetab-container").children;
var tabcontents = document.getElementById("icetab-content").children;

var myFunction = function () {
  var tabchange = this.mynum;
  for (var int = 0; int < tabcontents.length; int++) {
    tabcontents[int].className = " tabcontent";
    tabs[int].className = " icetab";
  }
  tabcontents[tabchange].classList.add("tab-active");
  this.classList.add("current-tab");
};

for (var index = 0; index < tabs.length; index++) {
  tabs[index].mynum = index;
  tabs[index].addEventListener("click", myFunction, false);
}
</script>
</html>