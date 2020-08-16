<?php if(isset($_POST["submit"])){
if($_POST["name"]=="" || $_POST["email"]=="" || $_POST["sub"]=="" || $_POST["msg"]=="" ){

 }else{
 	$email=$_POST['email'];
	if (!filter_var($email, FILTER_SANITIZE_EMAIL)){
		echo "Invalid Sender's Email";
	}else{
		$subject = $_POST['sub'];
			$message = $_POST['msg'];
			$headers = 'From:'. $email . "rn";
			$headers .= 'Cc:'. $email . "rn";
			$message = wordwrap($message, 70);
				if(mail("ashfas05@gmail.com", $subject, $message, $headers))	{
					header("location:https://www.google.com/");
				}else{
					echo "<script>alert('Sorry!');</script>";
				}
	}
 }

 } 
 ?>
<html>
<head>
<title></title>
<link href="css/elements.css" rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Comfortaa|IBM+Plex+Sans|Varela+Round|Tajawal&display=swap" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
 <script>
        $(window).load(function(){
            $(".loader").hide();
        });
    </script>
    <style type="text/css">
  .loader{
          position: fixed;
          left:0;
          top:0;
          width: 100%;
          height:100%;
          z-index: 9999;
          background: url("images/loading.gif") center no-repeat;
       }
   </style>
</head>
<body>
	<div class="loader">
  		 	</div>
	<div class="bg">
	<div class="container">
	<header>
      <div class="col-md-12 menu">
	      	<div class="col-md-6 logo">
	      	  <img src="images/logo.png">
	      	</div>
	      	 
	      	<div class="col-md-6 text-right">
	          <h2>Mail Form</h2>
	      </div>
     </div>
  </header>
  <div class="col-md-12 container-fluid">
			    <div class="col-md-6">
  	<form action="#" id="mail-form" method="post">
			  	<div class="form__group">
				  <input type="text" name="name" class="form__input" placeholder="Full name" required="" />
				  <label for="name" class="form__label">Full Name</label>
			    </div>
			    <div class="form__group">
				  <input type="text" name="email" class="form__input" placeholder="Email" required="" />
				  <label for="name" class="form__label">Email</label>
			    </div>
			    <div class="form__group">
				  <input type="text" name="sub" class="form__input" placeholder="Subject" required="" />
				  <label for="name" class="form__label">Subject</label>
			    </div>
			    <div class="form__group">
				  <input type="text" name="msg" class="form__input" placeholder="Suggestion" required="" />
				  <label for="name" class="form__label">Suggestion</label>
			    </div>
			     <div class="form__group">
				  <input type="submit" id="send" value="submit" name="submit">
				</div>
			</form>
      </div>
	    <div class="col-md-6 text__right">
			  	<h1>Sample Form</h1>
						<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
			  </div>
          </div>
     </div>
</div>
     
    <!-- 	<div class="col-md-12 about">
              <img class="about-image" src="images/bg_left.png">
     	         <div class="col-md-6 about-content">
			           <h2>About <span>Sample</span></h2>
			           <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
			      </div>
              <img class="about-image" src="images/bg_right.png">
          </div>
     <div class="container">
	 <div class="col-md-12 circle__head">
	    <h2>ERP Software of eSmart...</h2>
	 </div>	
		<div class="col-md-12 services">
		  <div class="col-md-3 services-content">
		  <img class="serives-img" src="images/document.png">
		  <h4>Document</h4>
		       <p>There are many variations of passages of Lorem Ipsum available,
			   but the majority have suffered alteration in some form, by injected humour,
			   or randomised words which don't look even slightly believable.</p>
		  </div>  
          <div class="col-md-3 services-content">		  
		  <img class="serives-img" src="images/chart.png">
		  <h4>Analysis</h4>
			   <p> All the Lorem Ipsum generators on
			   the Internet tend to repeat predefined chunks as necessary, making this the first true 
			   generator on the Internet.</p>
		  </div>
		     <div class="col-md-3 services-content">		  
		  <img class="serives-img" src="images/coin.png">
		  <h4>Purchasing</h4>
			   <p> All the Lorem Ipsum generators on
			   the Internet tend to repeat predefined chunks as necessary, making this the first true 
			   generator on the Internet.</p>
		  </div>
		     <div class="col-md-3 services-content">		  
		  <img class="serives-img" src="images/sales.png">
		  <h4>Sales</h4>
			   <p>There are many variations of passages of Lorem Ipsum available,
			   but the majority have suffered alteration in some form, by injected humour,
			   or randomised words which don't look even slightly believable.</p>
		  </div>
		</div>
		<div class="col-md-12 services">
		  <div class="col-md-3 services-content">
		  <img class="serives-img" src="images/target.png">
		  <h4>Client Relation Management</h4>
		       <p> All the Lorem Ipsum generators on
			   the Internet tend to repeat predefined chunks as necessary, making this the first true 
			   generator on the Internet.</p>
		  </div> 
         <div class="col-md-3 services-content">
		  <img class="serives-img" src="images/manufacture.png">
		  <h4>Manufacture</h4>
		       <p>There are many variations of passages of Lorem Ipsum available,
			   but the majority have suffered alteration in some form, by injected humour,
			   or randomised words which don't look even slightly believable.</p>
		  </div> 
          <div class="col-md-3 services-content">
		  <img class="serives-img" src="images/document.png">
		  <h4>Report</h4>
		       <p>There are many variations of passages of Lorem Ipsum available,
			   but the majority have suffered alteration in some form, by injected humour,
			   or randomised words which don't look even slightly believable.</p>
		  </div> 
           <div class="col-md-3 services-content">
		  <img class="serives-img" src="images/financial.png">
		  <h4>Financial</h4>
		       <p>There are many variations of passages of Lorem Ipsum available,
			   but the majority have suffered alteration in some form, by injected humour,
			   or randomised words which don't look even slightly believable.</p>
		  </div> 		  
	   </div>
	</div>
     <div class="container growth-area">
	 <div class="col-md-12 circle__head">
	 <h2>Our Growth Area</h2>
	 </div>
	 <div class="col-md-12 circle">
			  <div class="circle__area">
			  	<img class="circle__image" src="images/school_icon.png">
			  	<div class="circle__content">
			  <h4>Schools</h4>
			</div>
			</div>
			<div class="circle__area">
			  	<img class="circle__image" src="images/college_icon.png">
			  	<div class="circle__content">
			  <h4>Colleges</h4>
			</div>
			</div>
			<div class="circle__area">
			  	<img class="circle__image" src="images/university_icon.png">
			  	<div class="circle__content">
			  <h4>Universities</h4>
			</div>
			</div>
		</div>
     </div>
	 
	        <div class="container">
				    <div class="col-md-12 circle__head">
				    <h2>Why Choose Us</h2>
				 </div>	
				<div class="col-md-12 services">
					 <div class="col-md-3 services__panel">
					 	<img src="images/services.png">
						<h4>Our Services</h4>
						<p>Our goal is to provide software and services that help our clients meet their goals by simplifying and reducing repetitive tasks and improve efficiency.</p>
					</div>
					<div class="col-md-3 services__panel">
					 	<img src="images/product.png">
						<h4>Our Productivity</h4>
						<p>Powerful integrated tools, help administrators evaluate teacher’s performance and track their professional development. simply and effectively.</p>
					</div>
					<div class="col-md-3 services__panel">
					 	<img src="images/customize1.png">
						<h4>Customization</h4>
						<p>We don’t believe in one-size- fits-all approach, because each district, school and teacher is unique. Our solutions are tailor made for your requirements.</p>
					</div>
					<div class="col-md-3 services__panel">
					 	<img src="images/mission.png">
						<h4>Our Mission</h4>
						<p>Our mission is to provide a quality product through effective solutions to make happy customers. We are unique & hard working! We work for better product.</p>
					</div>
			  </div>	 
        </div>
        <div class="container">
        	<div class="col-md-12 circle__head">
				    <h2>Our Trusted Clients</h2>
				 </div>	
				<div class="col-md-12 services clients">
					<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/rkgit.png">
				</div>
				<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/mmu_logo.png">
				</div>
				<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/smvdu.png">
				</div>
				<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/lnct-logo.png">
				</div>
                    
               </div>
               <div class="col-md-12 services clients">
					<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/pdpm.png">
				</div>
				<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/rgc.png">
				</div>
				<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/rayat.png">
				</div>
				<div class="col-md-3 clients__panel">
					<img class="clients__logo" src="images/kawa.png">
				</div>
                    
               </div>
    </div>
    <footer>
    	<div id="footer">@Copyright 2020 | eSmart Software Solutions Pvt. Ltd.</div>
    </footer>-->
</body>
</html>