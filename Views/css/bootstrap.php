<!DOCTYPE html>
<html>

<head>
	<title>All bootstrap</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<style>
		body {
			background: #e97dff;
		}

		.top-text {
			position: absolute;
			top: 10px;
			left: 15px;
			color: white;
			background: #000;
			border-radius: 15px;
			font-weight: bold;
		}

		.container {
			background: #ffdefc;
		}

		.absolute {
			position: absolute;
			bottom: 10px;
		}

		.left {
			position: absolute;
			left: 270px;
		}

		i{
			position: relative;
			top: 5px;
		}

		.responsive {
			width: 100%;
			height: auto;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1 class="my-3 mx-5">Bootstrap 5</h1>
		<h2 class="text-secondary mx-5">Workshop : Anime Blog</h2>
		<hr>
		<ul class="breadcrumb mx-5">
			<li><a href="#">Home</a></li>&nbsp;/&nbsp;
			<li><a href="#">News</a></li>&nbsp;/&nbsp;
			<li>Anime</li>
		</ul>
		<h3 class="mx-5">Featured</h2>
			<div class="row mx-4">
				<div class="col-12 col-sm-12 col-md-12 col-lg-6">
					<!--Card 1 -->
					<div class="card my-1 " style="max-width: 600px; max-height: 700px">
						<img src="https://thematter.co/wp-content/uploads/2021/12/album-Anime2022-03.png" class="card-img-top" width=500" height="500">
						<div class="top-text">&nbsp;1 min ago&nbsp;</div>
						<div class="card-body">
							<h5 class="card-title">Attack On Titan Final</h5>
							<p style="font-size:15px" class="text-secondary">10 April 2022</p>
							<p class="card-text">สิ้นสุดการรอคอย เมื่อวันที่ 9 มกราคม ที่กำลังจะถึงนี้ หนึ่งในอนิเมะขึ้นหิ้งของใครหลายๆ คนอย่าง Attack on titan ก็ดำเนินมาถึงบทสรุปของเรื่องแล้ว</p>
							<a href="#" class="btn btn-primary">Read</a>
							&nbsp;<i class="bi bi-heart" style="font-size: 20px"></i>
						</div>
					</div>
				</div>
				<div class="col-12 col-sm-12 col-md-12 col-lg-6">
					<!--Card 2 -->
					<div class="card my-1" style="max-width: 600px; max-height: 700px">
						<img src="data:image/jpeg;base64,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" class="card-img-top" width="500" height="500">
						<div class="top-text">&nbsp;1 day ago&nbsp;</div>
						<div class="card-body">
							<h5 class="card-title">Top anime 2022
							</h5>
							<p style="font-size:15px" class="text-secondary">9 April 2022</p>
							<p class="card-text">รวม Anime สุดยอดในปี 2022</p>
							<a href="#" class="btn btn-primary">Read</a>
							&nbsp;<i class="bi bi-heart" style="font-size: 20px;"></i>
						</div>
					</div>
				</div>
			</div>
			<h3 class="mx-5">Lastest</h2>
				<div class="card mb-3 mx-5" style="">
					<div class="row g-0">
						<div class="col-2">
							<img src="https://i0.wp.com/akibatan.com/wp-content/uploads/2021/07/suspense-anime-summer-time-rendering-unveils-2022-airing-new-visual-02.jpg?ssl=1" class="img-fluid rounded-start" style="width:100%; height:100%;">
							<div class="top-text" style="font-size: 13px">&nbsp;1 day ago&nbsp;</div>
						</div>
						<div class="col-8">
							<div class="card-body">
								<h5 class="card-title">Akibatan</h5>
								<p class="card-text"><small class="text-muted">11 April 2022</small></p><br><br> <a href="#" class="btn btn-primary">Read</a>
								&nbsp;<i class="bi bi-heart" style="font-size: 20px;"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3 mx-5" style="">
					<div class="row g-0">
						<div class="col-2">
							<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRqSSt5ktaz9SnENAt8Rth9PHak5Hb5dwN9lg&usqp=CAU" class="img-fluid rounded-start" style="width:100%; height:100%;">
							<div class="top-text" style="font-size: 13px">&nbsp;1 day ago&nbsp;</div>
						</div>
						<div class="col-8">
							<div class="card-body">
								<h5 class="card-title">Spy X fam</h5>
								<p class="card-text"><small class="text-muted">11 April 2022</small></p><br><br> <a href="#" class="btn btn-primary">Read</a>
								&nbsp;<i class="bi bi-heart" style="font-size: 20px;"></i>
							</div>
						</div>
					</div>
				</div>
				<div class="card mb-3 mx-5" style="">
					<div class="row g-0">
						<div class="col-2">
							<img src="https://www.diswow89.com/wp-content/uploads/2022/01/Isekai-Winter-2022.jpg" class="img-fluid rounded-start" style="width:100%; height:100%;">
							<div class="top-text" style="font-size: 13px">&nbsp;1 day ago&nbsp;</div>
						</div>
						<div class="col-8">
							<div class="card-body">
								<h5 class="card-title">TOP TOP</h5>
								<p class="card-text"><small class="text-muted">11 April 2022</small></p><br><br> <a href="#" class="btn btn-primary">Read</a>
								&nbsp;<i class="bi bi-heart" style="font-size: 20px;"></i>
							</div>
						</div>
					</div>
				</div>
				<h4 style="font-weight: bold" class="mx-5">Give your feed back</h4>
				<h6 class="mx-5">Comment:</h6>
				<form><textarea class="mx-5" style="width: 500px; height:100px"></textarea></form><br>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-primary mb-4 mx-5" data-bs-toggle="modal" data-bs-target="#exampleModal">
					Submit
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Thanks for commenting</h5>
								<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
							</div>
							<div class="modal-body">
								<img src="https://alpinewater.co.th/wp-content/uploads/2020/03/thankyou.png" class="responsive">
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
				<div id="fav" class="alert alert-success" role="alert" style="position:fixed; top: 10px; right: 10px; font-weight: bold">
					<i class="bi bi-bookmark-check-fill" style="top: 0px"></i> Added to favorites
				</div>
	</div>

	<script>
		$('#fav').hide();
		$('.bi-heart').click(function() {
			$(this).attr("class", `bi-heart-fill`);
			$(this).css("color", "red");
			$('#fav').show();
			setTimeout(function(){
				$('#fav').hide();
			},1500)
		})
		$('#feedback').click(function() {

		})
	</script>










	</div>
</body>

</html>