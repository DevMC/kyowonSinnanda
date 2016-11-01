<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>교원 체험삭습 EVENT 관리자</title>
	<link rel="shortcut icon" href="/image/favicon.ico">
    <!-- Bootstrap -->
    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="document.frm.adm_id.focus();">
  	<div class="container-fluid">
  		<div class="row">
  			<div class="col-md-4">&nbsp;</div>
  			<div class="col-md-4">
				<div style="margin:0 auto;width:400px;margin-top:50%"></div>
  				<div class="panel panel-default" style="margin:0 auto;width:400px;margin-top:5px">
  					<div class="panel-heading panel-title" style="background:#CCC">
  					    <img alt="Logo" src="./images/logo.png"><br><br>
  					    <strong style="font-size:25px;">EVENT 관리자2</strong>
  					</div>
  					<div class="panel-body">
  						<form data-toggle="validator" role="form" method="post" name="frm" action="login_proc.php">
  						<div class="form-group">
  							<input type="text" id="adm_id" name="adm_id" class="form-control input-lg" placeholder="ID" data-error="ID를 입력하십시오." required>
  							<div class="help-block with-errors"></div>
  						</div>
  						<div class="form-group">
  							<input type="password" id="adm_pwd" name="adm_pwd" class="form-control input-lg" placeholder="Password" data-error="Password를 입력하십시오." required>
  							<div class="help-block with-errors"></div>
  						</div>
  						<div class="form-group">
  							<button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
  						</div>
  						</form>
  					</div>
  				</div>
  			</div>
  			<div class="col-md-4">&nbsp;</div>
  		</div>
  	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./bootstrap/js/bootstrap.min.js"></script>
    <script src="./bootstrap/js/validator.js"></script>
  </body>
</html>