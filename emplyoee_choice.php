<html>
	<head>
		<title>
			REGISTRATION FORM
		</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="registration.css">
		<script>
			function func1()
			{
				
				location.href="leaveform.php";
		
			}
            function func2()
			{
				
				location.href="employee_leave_statistics.php";
		
			}
		</script>
	</head>
    <body>
            <center><h4>WELCOME TO E-LEAVEFORM</h4></center>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-4">
                    </div>
                    <div class="col-sm-4" style="padding-top:3.5%">
                        <button name="leaveform" class="btn btn-primary" onclick="func1()">
                            LEAVE APPLICATION
                        </button>
                        <button name="leave_statistics" class="btn btn-primary"  onclick="func2()"> 
                            LEAVE STATISTICS
                        </button>
                    </div>
                </div>
            </div>>

    </body>
</html>