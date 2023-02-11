<?php
require_once('../assets/template/head-start.php');
?>
<?php echo '<title>Epsilon Community - Memberships</title>'; ?>
<?php
require_once('../assets/template/head-end.php');
?>
<?php
require_once('../assets/template/header.php');
?>
<div class='page container text-white'>
	<br>
	<h1>
		Membership
	</h1>
	<h6>Getting more involved with Epsilon Community</h6>
	<hr>
	<div class='row row-cols-1 row-cols-md-3 mb-3 text-center'>
		<div class='col'>
			<div class='card mb-4 rounded-3 shadow-sm' style='background-color: rgb(28, 27, 27);'>
				<div class='card-header py-3'>
					<h4 class='my-0 fw-normal'>[EC] Member</h4>
				</div>
				<div class='card-body'>
					<p></p>
					<button type='button' class='w-100 btn btn-lg' style='background-color: rgb(58 114 138);'>Apply
						<small>on discord</small></button>
				</div>
			</div>
		</div>
		<div class='col'>
			<div class='card mb-4 rounded-3 shadow-sm' style='background-color: rgb(28, 27, 27);'>
				<div class='card-header py-3'>
					<h4 class='my-0 fw-normal'>[EC] Veteran Member</h4>
				</div>
				<div class='card-body'>
					<p></p>
					<button type='button' class='w-100 btn btn-lg' style='background-color: rgb(58 114 138);'>Earn
						<small>by participation</small></button>
				</div>
			</div>
		</div>
		<div class='col'>
			<div class='card mb-4 rounded-3 shadow-sm' style='background-color: rgb(28, 27, 27);'>
				<div class='card-header py-3'>
					<h4 class='my-0 fw-normal'>[EC] Premium Member</h4>
				</div>
				<div class='card-body'>
					<p></p>
					<button type='button' class='w-100 btn btn-lg'
						style='background-color: rgb(255, 136, 0);'>Purchase</button>
				</div>
			</div>
		</div>
	</div>

	<h2 class='display-6 text-center mb-4'>Compare memberships</h2>

	<div class='table-responsive'>
		<table class='table text-center text-white' aria-describedby="pricing table">
			<thead>
				<tr>
					<th id="empty" style='width: 34%;'></th>
					<th id="member" style='width: 22%;'>[EC] Member</th>
					<th id="veteran" style='width: 22%;'>[EC] Veteran Member</th>
					<th id="premium" style='width: 22%;'>[EC] Premium Member</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope='row' class='fw-normal text-start'>Priority access above Community and Game.</th>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>Early access to give suggestions on decisions and
						provide feedback.</th>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>Behind the scenes access in Discord.</th>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>Access and whitelisting for all servers.</th>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>1.5x Boost in Giveaways.</th>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>2.0x Boost in Giveaways.</th>
					<td>
						<i class='bi bi-x' style='background-color: rgb(121, 50, 50);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>Priority access to Events.</th>
					<td>
						<i class='bi bi-x' style='background-color: rgb(121, 50, 50);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
				<tr>
					<th scope='row' class='fw-normal text-start'>Early viewing for Epsilon YouTube content.</th>
					<td>
						<i class='bi bi-x' style='background-color: rgb(121, 50, 50);'></i>
					</td>
					<td>
						<i class='bi bi-x' style='background-color: rgb(121, 50, 50);'></i>
					</td>
					<td>
						<i class='bi bi-check' style='background-color: rgb(53, 124, 53);'></i>
					</td>
				</tr>
			</tbody>
		</table>
		<br>
	</div>

	<div class='row mb-3 text-center'>
		<div class='col'>
			<div class='card mb-4 rounded-3 shadow-sm' style='background-color: rgb(28, 27, 27);'>
				<div class='card-header py-3'>
					<h4 class='my-0 fw-normal'>We require that you are an [EC] Member, before applying for Staff.</h4>
				</div>
			</div>
		</div>
	</div>

	<script async src="https://js.stripe.com/v3/pricing-table.js"></script>
	<stripe-pricing-table pricing-table-id="prctbl_1MO5MDH2SSsUZfnx5f7gUMP5"
		publishable-key="pk_live_51LfsMnH2SSsUZfnxeGGeigPjJEsgIfgAOYQ0eYC0ZDcHXGmbr0fqMfuLnKcXPNyEAUWv9Lkl972Re573JJpcomvv00F5t26w6B">
	</stripe-pricing-table>

	<lightning-widget name="Epsilon Community" accent="#376376" to="epsiloncommunity@getalby.com"
		image="https://imgproxy.snort.social/mW072oNJ8Cm4Q4wqDCRzmqSzoi26JOnmbioj_k5CVGM/rs:fit:120:120/aHR0cHM6Ly92b2lkLmNhdC9kLzdkMmVKYUZoVlE0dFY2RUJpc3VUMkQud2VicA"
		amounts="1,5,10,100,1000,10000" />
	<script src="https://embed.twentyuno.net/js/app.js"></script>

	<br>
	<br>
	<?php
	require_once('../assets/template/footer.php');
	?>