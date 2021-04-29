
<div class="row">
	<div id="sidebar" class="column">
		<h5>Navigation</h5>
		<ul>
			<li><a href="#"><em class="fa fa-home"></em> Trang chủ</a></li>
			<li><a href="#charts"><em class="fa fa-bar-chart"></em> Báo cáo thông kê</a></li>
			<li><a href="#widgets"><em class="fa fa fa-clone"></em> Quản lý nhân sự</a></li>
			<li><a href="#forms"><em class="fa fa-columns"></em> Quản lý danh mục</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> Quản lý phòng ban</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> Quản lý chức vụ</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> QL trình độ chuyên</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> Quản lý hợp đồng</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> Quản lý khen thưởng</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> Quản lý kỷ lụật</a></li>
			<li><a href="#forms"><em class="fa fa-pencil-square-o submenu"></em> Quản lý công tác</a></li>
			<li><a href="#alerts"><em class="fa fa-table"></em> Quản lý lương</a></li>
			{{-- <li><a href="#buttons"><em class="fa fa-hand-o-up"></em> Buttons</a></li>
			<li><a href="#tables"><em class="fa fa-table"></em> Tables</a></li>
			<li><a href="#grid"><em class="fa fa-columns"></em> Grid</a></li> --}}
		</ul>
	</div>
	<section id="main-content" class="column column-offset-20">

		
		<!--Charts-->
		<h5>Charts</h5><a class="anchor" name="charts"></a>
		<div class="row grid-responsive">
			<div class="column column-50">
				<div class="card">
					<div class="card-title">
						<h2>Line Chart</h2>
					</div>
					<div class="card-block">
						<div class="canvas-wrapper">
							<canvas class="chart" id="line-chart" height="auto" width="auto"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="column column-50">
				<div class="card">
					<div class="card-title">
						<h2>Bar Chart</h2>
					</div>
					<div class="card-block">
						<div class="canvas-wrapper">
							<canvas class="chart" id="bar-chart" height="auto" width="auto"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row grid-responsive">
			<div class="column column-33">
				<div class="card">
					<div class="card-title">
						<h2>Pie Chart</h2>
					</div>
					<div class="card-block">
						<div class="canvas-wrapper">
							<canvas class="chart" id="pie-chart" height="auto" width="auto"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="column column-33">
				<div class="card">
					<div class="card-title">
						<h2>Radar Chart</h2>
					</div>
					<div class="card-block">
						<div class="canvas-wrapper">
							<canvas class="chart" id="radar-chart" height="auto" width="auto"></canvas>
						</div>
					</div>
				</div>
			</div>
			<div class="column column-33">
				<div class="card">
					<div class="card-title">
						<h2>Polar Chart</h2>
					</div>
					<div class="card-block">
						<div class="canvas-wrapper">
							<canvas class="chart" id="polar-area-chart" height="auto" width="auto"></canvas>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Widgets-->
		<h5 class="mt-2">Widgets</h5><a class="anchor" name="widgets"></a>
		<div class="row grid-responsive mt-1">
			
			<div class="column">
				<div class="card">
					<div class="card-title">
						<h2 class="float-left">Projects</h2>
						<div class="badge float-right">3 In Progress</div>
						<!--<div class="badge background-success float-right mr-1">5 Complete</div>-->
						<div class="clearfix"></div>
					</div>
					<div class="card-block progress-bars">
						<h5 class="float-left mt-1">Project Title</h5>
						<p class="float-right text-small text-muted mt-1">25%</p>
						<div class="clearfix"></div>
						<div class="progress-bar">
							<div class="progress background-primary" style="width: 25%;"></div>
						</div>
						<h5 class="float-left mt-1">Project Title</h5>
						<p class="float-right text-small text-muted mt-1">50%</p>
						<div class="clearfix"></div>
						<div class="progress-bar">
							<div class="progress background-primary" style="width: 50%;"></div>
						</div>
						<h5 class="float-left mt-1">Project Title</h5>
						<p class="float-right text-small text-muted mt-1">75%</p>
						<div class="clearfix"></div>
						<div class="progress-bar">
							<div class="progress background-primary" style="width: 75%;"></div>
						</div>
						<h5 class="float-left mt-1">Project Title</h5>
						<p class="float-right text-small text-muted mt-1">100%</p>
						<div class="clearfix"></div>
						<div class="progress-bar">
							<div class="progress background-primary" style="width: 100%;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--Forms-->
		<h5 class="mt-2">Forms</h5><a class="anchor" name="forms"></a>
		<div class="row grid-responsive">
			<div class="column ">
				<div class="card">
					<div class="card-title">
						<h3>Sample Form</h3>
					</div>
					<div class="card-block">
						<form>
							<fieldset>
								<label for="nameField">Name</label>
								<input type="text" placeholder="Jane Donovan" id="nameField">
								<label for="ageRangeField">Age Range</label>
								<select id="ageRangeField">
									<option value="0-13">0-13</option>
									<option value="14-17">14-17</option>
									<option value="18-23">18-23</option>
									<option value="24+">24+</option>
								</select>
								<label for="commentField">Comment</label>
								<textarea placeholder="Hi Jane…" id="commentField"></textarea>
								<div class="float-right">
									<input type="checkbox" id="confirmField">
									<label class="label-inline" for="confirmField">Send a copy to yourself</label>
								</div>
								<input class="button-primary" type="submit" value="Send">
							</fieldset>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!--Alerts-->
		<h5 class="mt-2">Alerts</h5><a class="anchor" name="alerts"></a>
		<div class="row grid-responsive">
			<div class="column">
				<div class="alert background-success"><em class="fa fa-thumbs-up"></em> Yay! Everything looks good</div>
				<div class="alert background-warning"><em class="fa fa-warning"></em> Are you sure you want to do that?</div>
				<div class="alert background-danger"><em class="fa fa-times-circle"></em> Oops, something went really wrong</div>
				<div class="alert"><em class="fa fa-bullhorn"></em> This is a generic alert without any defined background color</div>
			</div>
		</div>
		
		<!--Buttons-->
		<h5 class="mt-2">Buttons</h5><a class="anchor" name="buttons"></a>
		<div class="row grid-responsive">
			<div class="column">
				<!-- Default Button -->
				<a class="button" href="#">Default Button</a>
				
				<!-- Outlined Button -->
				<button class="button button-outline">Outlined Button</button>
				
				<!-- Clear Button -->
				<input class="button button-clear" type="submit" value="Clear Button">
			</div>
		</div>
		
		<!--Tables-->
		<h5 class="mt-2">Tables</h5><a class="anchor" name="tables"></a>
		<div class="row grid-responsive">
			<div class="column ">
				<div class="card">
					<div class="card-title">
						<h3>Current Members</h3>
					</div>
					<div class="card-block">
						<table>
							<thead>
								<tr>
									<th>Name</th>
									<th>Role</th>
									<th>Age</th>
									<th>Location</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Jane Donovan</td>
									<td>UI Developer</td>
									<td>23</td>
									<td>Philadelphia, PA</td>
								</tr>
								<tr>
									<td>Jonathan Smith</td>
									<td>Designer</td>
									<td>30</td>
									<td>London, UK</td>
								</tr>
								<tr>
									<td>Kelly Johnson</td>
									<td>UX Developer</td>
									<td>25</td>
									<td>Los Angeles, CA</td>
								</tr>
								<tr>
									<td>Sam Davidson</td>
									<td>Programmer</td>
									<td>28</td>
									<td>Philadelphia, PA</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		
		<!--Grid-->
		<h5 class="mt-2">Grid</h5><a class="anchor" name="grid"></a>
		<div class="grid-example mt-2">
			<div class="row">
				<div class="column column-10">10%</div>
			</div>
			<div class="row">
				<div class="column column-20">20%</div>
			</div>
			<div class="row">
				<div class="column column-25">25%</div>
			</div>
			<div class="row">
				<!-- .column-33 or .column-34 both work for 1/3 column width -->
				<div class="column column-33">33%</div>
			</div>
			<div class="row">
				<div class="column column-40">40%</div>
			</div>
			<div class="row">
				<div class="column column-50">50%</div>
			</div>
			<div class="row">
				<div class="column column-60">60%</div>
			</div>
			<div class="row">
				<!-- .column-66 or .column-67 both work for 2/3 column width -->
				<div class="column column-67">67%</div>
			</div>
			<div class="row">
				<div class="column column-75">75%</div>
			</div>
			<div class="row">
				<div class="column column-80">80%</div>
			</div>
			<div class="row">
				<div class="column column-90">90%</div>
			</div>
			<div class="row">
				<div class="column">100%</div>
			</div>
		</div>
	</section>
</div>

@section('script')
	<script src={{ asset('asset/js/chart.min.js') }}></script>
	<script src={{ asset('asset/js/chart-data.js') }}></script>
	<script>
		window.onload = function () {
			var chart1 = document.getElementById("line-chart").getContext("2d");
			window.myLine = new Chart(chart1).Line(lineChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
			var chart2 = document.getElementById("bar-chart").getContext("2d");
			window.myBar = new Chart(chart2).Bar(barChartData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			scaleGridLineColor: "rgba(0,0,0,.05)",
			scaleFontColor: "#c5c7cc"
			});
			var chart4 = document.getElementById("pie-chart").getContext("2d");
			window.myPie = new Chart(chart4).Pie(pieData, {
			responsive: true,
			segmentShowStroke: false
			});
			var chart5 = document.getElementById("radar-chart").getContext("2d");
			window.myRadarChart = new Chart(chart5).Radar(radarData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.05)",
			angleLineColor: "rgba(0,0,0,.2)"
			});
			var chart6 = document.getElementById("polar-area-chart").getContext("2d");
			window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
			responsive: true,
			scaleLineColor: "rgba(0,0,0,.2)",
			segmentShowStroke: false
			});
		};
	</script>	

@stop