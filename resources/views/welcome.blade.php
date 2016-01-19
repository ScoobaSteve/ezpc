<html>
	<head>
		<title>Laravel</title>
		
		<link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

		<style>
			body {
				margin: 0;
				padding: 0;
				width: 100%;
				height: 100%;
				background-color: black;
				display: table;
				font-weight: 100;
				font-family: 'Lato';
			}

			.container {
				text-align: center;
				display: table-cell;
				vertical-align: top;

			}

			.content {
				text-align: center;
				display: inline-block;
			}

			.title {
				font-size: 96px;
				margin-bottom: 40px;
			}

			.quote {
				font-size: 24px;
				color: red;
				margin-top: 25%;
			}
			.contact {
                font-size: 24px;
                color: red;
                position: absolute;
                bottom: 0;
                left: 0;
            }
		</style>
	</head>
	<body>
		<div class="container">
			<div class="content">
				<div class="title"><img src="{{ URL::asset('/img/logo.jpg') }}"></img></div>
				<div class="quote">{{ Inspiring::quote() }}</div>
				<div class="contact"><img src="{{ URL::asset('/img/contact.jpg') }}"></img></div>
			</div>
		</div>
	</body>
</html>
