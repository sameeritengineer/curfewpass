<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Home</title>
      <!-- Bootstrap -->
      <link rel="icon" href="images/moblogo.png" type="image/png" sizes="16x16">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Poppins:400,500,700&display=swap" rel="stylesheet">
      <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
    	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
   </head>
   <body>
	<div class="carfuewrapper">
		<div class="container">
			<div class="row top-rowlogo">
				<div class="col-md-6">
					<div class="float-left">
						<a class="logo-top" href="#"><img class="" src="images/pp.png" alt="logo"></a>
					</div>
        		</div>
				<div class="col-md-6">
					<div class="float-left w-100 text-right">
						<a class="logo-top" href="#"><img class="" src="images/pg.png" alt="logo"></a>
					</div>
        		</div>
        	</div>
			<div class="row">
				<div class="col-md-12">
		 			<h2 class="dtls">Curfew Permission/ਕਰਫਿ  ਆਗਿਆ</h2>
					<div class="text-top">
						<p>The Indian government has issued curfew passes for 21 days down the people.If anyone has to go out for a commute, he or she must pass the curfew.The daughter of this problem may have to go out.Hospital, ration water may be required.Moving out of the house must be a curfew pass.If reprimanded by the police, keep your voice open and curfew.<br>ਭਾਰਤ ਸਰਕਾਰ ਨੇ 21 ਦਿਨ ਦੇ ਲੋਕ ਡਾਉਨ ਹੇਠਾਂ ਕਰਫਿਓ ਪਾਸ ਜਾਰੀ ਕਿਤੇ ਹਨ। ਜੇਕਰ ਕਿਸੇ ਨੂੰ ਵੀ ਜਰੂਰੀ ਕਮ ਲਈ ਬਾਹਰ ਜਾਣਾ ਪੈ ਜਾਵੇ ਤਾਂ ਉਸ ਕੋਲ ਕਰਫਿਓ ਪਾਸ ਹੋਣਾ ਲਾਜ਼ਮੀ ਹੈ। ਇਸ ਮੁਸਕਲ ਦੀ ਘੜੀ ਵਿੱਚ ਕਿਸੇ ਨੂੰ ਵੀ ਬਾਹਰ ਜਾਣਾ ਪੈ ਸਕਦਾ ਹੈ । ਹਸਪਤਾਲ, ਰਾਸ਼ਨ-ਪਾਣੀ ਦੀ ਲੋੜ ਪੈ ਸਕਦੀ ਹੈ।ਘਰੋਂ ਬਾਹਰ ਨਿਕਲਣ ਵਲਿਅਾ ਕੋਲ ਕਰਫਿਊ ਪਾਸ ਹੋਣਾ ਬੋਹੋਤ ਜਰੂਰੀ ਹੈ। ਜੇਕਰ ਪੁਲਿਸ ਵਲੋ ਪੂਛ-ਤਾਛ ਕੀਤੀ ਜਾਵੇ ਤਾ ਆਪਣੀ ਗਲ ਪੂਰੀ ਰਖੋ ਨਾਲੇ ਕਰਫਿਊ-ਪਾਸ ਦਖਓ।
						</p><br>
					</div>
        		</div>
			</div>
			<form method="post" action="{{route('curfewpass')}}">
				@csrf
				<div class="row">
					<div class="col-md-12"><h2 class="dtls">Please Add Your Details/ਕਿਰਪਾ ਕਰਕੇ ਆਪਣੇ ਵੇਰਵੇ ਸ਼ਾਮਲ ਕਰੋ</h2></div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Name/ਨਾਮ</label>
							<input type="text" name="name" placeholder="Name/ਨਾਮ" class="form-control" required>
						</div>
			        </div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Email/ਈ - ਮੇਲ</label>
							<input type="email" name="email" placeholder="Email/ਈ - ਮੇਲ" class="form-control" required>
						</div>
			        </div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Start Date/ਤਾਰੀਖ ਸ਼ੁਰੂ</label>
							<input  id="datepicker" name="start_date" placeholder="Start Date/ਤਾਰੀਖ ਸ਼ੁਰੂ" class="form-control" required>
						</div>
			        </div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">End Date/ਅੰਤ ਦੀ ਮਿਤੀ</label>
							<input id='datepicker1' placeholder="End Date/ਅੰਤ ਦੀ ਮਿਤੀ" name="end date" class="form-control" required>
						</div>
			        </div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Occupation/ਕਿੱਤਾ</label>
							<input type="text" name="occupation" placeholder="Occupation/ਕਿੱਤਾ" class="form-control" required>
						</div>
			        </div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Phone Number/ਫੋਨ ਨੰਬਰ</label>
							<input type="Number" name="mobile_no" placeholder="Phone Number/ਫੋਨ ਨੰਬਰ" class="form-control" required>
						</div>
			        </div>
					<div class="col-md-6">
						<div class="form-group">
							<label class="">Curfew Pass Justification/ਕਰਫਿ ਪਾਸ ਜਸਟਿਫਿਕੇਸ਼ਨ</label>
							<textarea type="text" name="message" placeholder="Curfew Pass Justification/ਕਰਫਿ ਪਾਸ ਜਸਟਿਫਿਕੇਸ਼ਨ" class="form-control" required></textarea>
						</div>
			        </div>
					<div class="col-md-12">
						<div class="form-group">
							<button type="submit" class="btn btn-success btn-apply">Apply/ਲਾਗੂ ਕਰੋ</button>
						</div>
			        </div>
				</div>
			</form>
		</div>
	</div>
    <script src="js/jquery.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
	<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
	<script>
        $('#datepicker').datepicker({uiLibrary: 'bootstrap4'});
		$('#datepicker1').datepicker({uiLibrary: 'bootstrap4'});
    </script>
   </body>
</html>