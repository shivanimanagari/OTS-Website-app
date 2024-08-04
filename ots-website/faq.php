<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500|Open+Sans">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
.accordion .card {
	border: none;
	margin-bottom: 2px;
}
.accordion .card-header {
	background: #21c2a2;
	padding-top: 7px;
	padding-bottom: 7px;
}
.accordion .card-header h2 {
	color: #fff;
	font-size: 1rem;
	font-family: "Roboto", sans-serif;
	font-weight: 500;
}
.accordion .card-header h2 span {
	float: left;
	margin-top: 10px;
}
.accordion .card-header button {
	color: #fff;
	font-size: 1.3rem;
	line-height: 1.3rem;
	float: right;
}
.accordion .card-header button:hover {
	color: #23384e;
}
</style>
<script>
$(document).ready(function(){
	// Add minus icon for collapse element which is open by default
	$(".collapse.show").each(function(){
		$(this).siblings(".card-header").find(".btn i").addClass("fa-minus-circle").removeClass("fa-plus-circle");
	});
	
	// Toggle plus minus icon on show hide of collapse element
	$(".collapse").on('show.bs.collapse', function(){
		$(this).parent().find(".card-header .btn i").removeClass("fa-plus-circle").addClass("fa-minus-circle");
	}).on('hide.bs.collapse', function(){
		$(this).parent().find(".card-header .btn i").removeClass("fa-minus-circle").addClass("fa-plus-circle");
	});
});
</script>
    <style>
        .suport{
            text-align: right;
            padding-right: 60px;
			margin-top:15px;
        }
    </style>
</head>
<body>


    <!-- support us-->
<div class="suport" id="support">
    <!-- Button trigger modal -->
		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
		Support Us
		</button>

	<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Support Us</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body" style="text-align:left;">
			<p> Your liberality adds to the innovation driven development we plan to serve. The materials we produce are accessible to just for a negligible charge. Yet, that doesn't mean we can oversee without cash. Through normal or coincidental gifts you can help guarantee that OTS keeps on flourishing as a free and network upheld association.
				Your help will be utilized to propel our work in all of these areas. It incorporates the day by day updating of website with over a million guests consistently, creating instructive and training materials along with our partners, carrying out research and investigation on specific issues and expanding our services all over the world.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Contribute</button>
			</div>
			</div>
		</div>
		</div>
</div>
    
    <!-- end of support us-->


	<h1 style="font-family:Times New Roman, Times, serif;text-align:center;padding-top:20px;">Frequent Questions!</h1>
<div class="container" id="faq"> 
	<div class="row">
		<div class="col-lg-8 offset-lg-2">
			<div class="accordion mt-5" id="accordionExample">
                <div class="card">
					<div class="card-header" id="headingone">
						<h2 class="mb-0">
							<span>Is it a training Institute?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseone" aria-expanded="false" aria-controls="collapseone"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseone" class="collapse" aria-labelledby="headingone" data-parent="#accordionExample">
						<div class="card-body">No. it’s not an institute. It’s an initiative taken by many people from different background to give exposures related to technical fields in a better and efficient way. For school children, OTS will help developing their minds and will help them to think beyond conventional methods.</div>
					</div>
				</div>
                
				<div class="card">
					<div class="card-header" id="headingTwo">
						<h2 class="mb-0">
							<span>Do you provide online training?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
						<div class="card-body">Yes. We provide online training with materials.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingThree">
						<h2 class="mb-0">
							<span>Do you provide offline training?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
						<div class="card-body">Yes. We do. Although it has not started in a full phase, it will be available once COVID pandemic situation is overcome.</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header" id="headingFour">
						<h2 class="mb-0">
							<span>Do you provide training to only school children?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
						<div class="card-body">Yes. We do provide training to school children.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="headingFive">
						<h2 class="mb-0">
							<span>I am a B.Tech student. Can I join any certification course?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
						<div class="card-body">Surely you can join. You can join many courses as listed in the course section in our website.
                        </div>
					</div>
				</div>
                
                <div class="card">
					<div class="card-header" id="headingSix">
						<h2 class="mb-0">
							<span>What types of courses are offered here?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
						<div class="card-body">Technical and non technical courses are offered here with experienced and dedicated training professionals.</div>
					</div>
				</div>
                
                <div class="card">
					<div class="card-header" id="headingSeven">
						<h2 class="mb-0">
							<span>Is this platform suitable for only engineering students?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
						<div class="card-body">No. Any body can join in this platform to build their skills.
                        </div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="headingeight">
						<h2 class="mb-0">
							<span>I am a faculty of a college. May I get any assistance to groom my skills?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
						<div class="card-body">Sure. You are welcome to gather more thoughts as well as you are welcome to share your thoughts also.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="headingnine">
						<h2 class="mb-0">
							<span>How do I register for a course?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapsenine" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapsenine" class="collapse" aria-labelledby="headingnine" data-parent="#accordionExample">
						<div class="card-body">Go to login portal. Select course and starting date. Give all your details and then pay it online. You are ready to join the course.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="headingten">
						<h2 class="mb-0">
							<span>Who can join courses offered by you?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseten" aria-expanded="false" aria-controls="collapseten"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapseten" class="collapse" aria-labelledby="headingten" data-parent="#accordionExample">
						<div class="card-body">School students from standard 6, B.Tech students, B.Sc students and anyone seeking technical and non technical knowledge to build their skills can join courses offered by us.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading11">
						<h2 class="mb-0">
							<span>Do you sell any product?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse11" aria-expanded="false" aria-controls="collapse11"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse11" class="collapse" aria-labelledby="heading11" data-parent="#accordionExample">
						<div class="card-body">No. We don’t sell products now. However we are working on it.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading12">
						<h2 class="mb-0">
							<span>What branches of engineering courses are available here?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse12" aria-expanded="false" aria-controls="collapse12"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse12" class="collapse" aria-labelledby="heading12" data-parent="#accordionExample">
						<div class="card-body">Any branch students can join as we offer many courses related to all engineering stream.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading13">
						<h2 class="mb-0">
							<span>What are the benefits any school student will get from you?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse13" aria-expanded="false" aria-controls="collapse13"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse13" class="collapse" aria-labelledby="heading13" data-parent="#accordionExample">
						<div class="card-body">School students can learn programming skills, can develop any products applying the concepts learn from us. It may be useful for them to carry out their school projects also.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading14">
						<h2 class="mb-0">
							<span>Is spoken English course offered here?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse14" aria-expanded="false" aria-controls="collapse14"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse14" class="collapse" aria-labelledby="heading14" data-parent="#accordionExample">
						<div class="card-body">Yes. It is offered.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading15">
						<h2 class="mb-0">
							<span>Do you guide B.Tech projects?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse15" aria-expanded="false" aria-controls="collapse15"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse15" class="collapse" aria-labelledby="heading15" data-parent="#accordionExample">
						<div class="card-body">Yes. We help students by sharing ideas as well as guiding projects.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading16">
						<h2 class="mb-0">
							<span>Do you sell readymade projects for school?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse16" aria-expanded="false" aria-controls="collapse16"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse16" class="collapse" aria-labelledby="heading16" data-parent="#accordionExample">
						<div class="card-body">AS of now we have not started it. Soon this facility will be available with us in a minimum cost.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading17">
						<h2 class="mb-0">
							<span>Which currency do you accept for payment?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse17" aria-expanded="false" aria-controls="collapse17"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse17" class="collapse" aria-labelledby="heading17" data-parent="#accordionExample">
						<div class="card-body">We accept payments in INR.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading18">
						<h2 class="mb-0">
							<span>How do you send certificates after completion of course?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse18" aria-expanded="false" aria-controls="collapse18"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse18" class="collapse" aria-labelledby="heading18" data-parent="#accordionExample">
						<div class="card-body">An E certificate gets mailed directly to individual after completion of course.However anyone can opt for hard copy of certificate by paying courier charges.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading19">
						<h2 class="mb-0">
							<span>Do you provide course completion certificate?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse19" aria-expanded="false" aria-controls="collapse19"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse19" class="collapse" aria-labelledby="heading19" data-parent="#accordionExample">
						<div class="card-body">Yes. We provide.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading20">
						<h2 class="mb-0">
							<span>What decides price of your services?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse20" aria-expanded="false" aria-controls="collapse20"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse20" class="collapse" aria-labelledby="heading20" data-parent="#accordionExample">
						<div class="card-body">It depends on type and duration of course. It also depends on instructor’s fee.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading21">
						<h2 class="mb-0">
							<span>Is there any free course?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse21" aria-expanded="false" aria-controls="collapse21"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse21" class="collapse" aria-labelledby="heading21" data-parent="#accordionExample">
						<div class="card-body">Yes. There are few free courses. But these are provided with a trial plan.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading22">
						<h2 class="mb-0">
							<span>Is it necessary to sign up to register for any course?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse22" aria-expanded="false" aria-controls="collapse22"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse22" class="collapse" aria-labelledby="heading22" data-parent="#accordionExample">
						<div class="card-body">Yes. It’s necessary.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading23">
						<h2 class="mb-0">
							<span>How do I pay for your services?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse23" aria-expanded="false" aria-controls="collapse23"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse23" class="collapse" aria-labelledby="heading23" data-parent="#accordionExample">
						<div class="card-body">Online Payment through debit card, credit card, net banking, UPI is possible. One can pay through Paytm also.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading24">
						<h2 class="mb-0">
							<span>I made my payment for one of your services but I have not received any payment acknowledgement. Is my purchase successful?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse24" aria-expanded="false" aria-controls="collapse24"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse24" class="collapse" aria-labelledby="heading24" data-parent="#accordionExample">
						<div class="card-body">Once your payment is done, within 72 hours you must receive one payment acknowledgement. Otherwise be sure that your money will be refunded in fifteen working days.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading25">
						<h2 class="mb-0">
							<span>I have made a payment. My money was also deducted from my account. But I got a message that the payment was failed. What to do?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse25" aria-expanded="false" aria-controls="collapse25"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse25" class="collapse" aria-labelledby="heading25" data-parent="#accordionExample">
						<div class="card-body">It happens when your amount is not received to us. Keep patience. Your money will safely return to your account.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading26">
						<h2 class="mb-0">
							<span>Do you conduct webinar on latest/emerging topics?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse26" aria-expanded="false" aria-controls="collapse26"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse26" class="collapse" aria-labelledby="heading26" data-parent="#accordionExample">
						<div class="card-body">Yes we conduct.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading27">
						<h2 class="mb-0">
							<span>Do you accept offline payment or card payment?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse27" aria-expanded="false" aria-controls="collapse27"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse27" class="collapse" aria-labelledby="heading27" data-parent="#accordionExample">
						<div class="card-body">Yes. But it is limited to only in few places in India as of now.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading28">
						<h2 class="mb-0">
							<span>Do you provide final year B.Tech projects along with project report?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse28" aria-expanded="false" aria-controls="collapse28"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse28" class="collapse" aria-labelledby="heading28" data-parent="#accordionExample">
						<div class="card-body">Yes. We do.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading29">
						<h2 class="mb-0">
							<span>Do I need to install any application in order to access your courses or materials?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse29" aria-expanded="false" aria-controls="collapse29"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse29" class="collapse" aria-labelledby="heading29" data-parent="#accordionExample">
						<div class="card-body">It depends on course. Once you register for any course, you will be communicated through mail or WhatsApp message if there is any requirement of installing any software or mobile application.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading30">
						<h2 class="mb-0">
							<span>Do you provide any hard copy of learning materials?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse30" aria-expanded="false" aria-controls="collapse30"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse30" class="collapse" aria-labelledby="heading30" data-parent="#accordionExample">
						<div class="card-body">As per the interest of individual, hard copy is provided with some extra charges.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading31">
						<h2 class="mb-0">
							<span>Can you install any product related to home automation in my home?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse31" aria-expanded="false" aria-controls="collapse31"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse31" class="collapse" aria-labelledby="heading31" data-parent="#accordionExample">
						<div class="card-body">Yes. It is limited to some areas as of now</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading32">
						<h2 class="mb-0">
							<span>May I get help regarding my robotics project here?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse32" aria-expanded="false" aria-controls="collapse32"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse32" class="collapse" aria-labelledby="heading32" data-parent="#accordionExample">
						<div class="card-body">Surely you may get.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading33">
						<h2 class="mb-0">
							<span>Do you release technical magazines?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse33" aria-expanded="false" aria-controls="collapse33"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse33" class="collapse" aria-labelledby="heading33" data-parent="#accordionExample">
						<div class="card-body">Yes. We release it twice in a year.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading34">
						<h2 class="mb-0">
							<span>Can I share my ideas to make a product here?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse34" aria-expanded="false" aria-controls="collapse34"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse34" class="collapse" aria-labelledby="heading34" data-parent="#accordionExample">
						<div class="card-body">You are always welcome.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading35">
						<h2 class="mb-0">
							<span>Do you provide your services all across India?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse35" aria-expanded="false" aria-controls="collapse35"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse35" class="collapse" aria-labelledby="heading35" data-parent="#accordionExample">
						<div class="card-body">Yes. We do provide.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading36">
						<h2 class="mb-0">
							<span>Is OTS a limited liability partnership company?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse36" aria-expanded="false" aria-controls="collapse36"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse36" class="collapse" aria-labelledby="heading36" data-parent="#accordionExample">
						<div class="card-body">No. It’s a partnership firm only.</div>
					</div>
				</div>
                <div class="card">
					<div class="card-header" id="heading37">
						<h2 class="mb-0">
							<span>Is OTS a private limited company?</span>
							<button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse37" aria-expanded="false" aria-controls="collapse37"><i class="fa fa-plus-circle"></i></button>
						</h2>
					</div>
					<div id="collapse37" class="collapse" aria-labelledby="heading37" data-parent="#accordionExample">
						<div class="card-body">No. It’s not a Pvt Ltd. Company.</div>
					</div>
				</div> 
                
			</div>
		</div>
	</div>
</div>
</body>
</html>