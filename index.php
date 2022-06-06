
<!doctype html>
<html dir="ltr" lang="en">
  <head>
    <meta charset="utf-8">
    <title>Traning</title>
	<style>
	.container {
		height: 100vh;
    	display: flex;
		align-items: center;
		justify-content: center;
	}

	.card {
		width:300px;
		height:150px;
		background:rgba(255,144,10,255);
		position: relative;
		
	}
	.card::after {
		content: "";
		position: absolute;
		width: 318px;
		height: 150px;
		background: rgba(23,23,23,255);
		clip-path: polygon(0% 0%, 65% 0, 81% 50%, 65% 100%, 0% 100%);
	}
	.hexagon {
		width: 130px;
    	height: 130px;
		background:rgba(23,23,23,255);
		clip-path: polygon(25% 0%, 75% 0%, 100% 50%, 75% 100%, 25% 100%, 0% 50%);
		position: absolute;
		z-index: 9;
		left: 90%;
		top: 50%;
		transform: translate(-90%, -50%);
	}
	.hexagon-container {
		position: absolute;
		z-index: 9;
		left: 90%;
		top: 50%;
		transform: translate(-90%, -50%);
		filter: drop-shadow(-10px 0px 10px rgb(0 0 0)); 
	}
    </style>
  </head>
  <body>
	<div class="container">
		<div class="card">
			<div class="hexagon-container">
				<div class="hexagon"></div>
			</div>
		</div>
	</div>
  </body>
</html>
