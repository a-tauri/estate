<?php 

	//DB処理
	// esc_html_e( 'Admin Page Test', 'textdomain' ); 
?>
<style type="text/css">
	.contents{
		width: 80%;
		margin: 10% auto;
	}
	.registForm{
		display: none;
		margin-top: 14px;	
	}
	.registApartment{
		display: none;
		margin: 12px;
	}
	#graph {
		width : 600px;
		height: 400px;
		margin: 20px auto;
	}
	.graph-title {
		font-size:16px;
		font-weight:bold;
		text-align:center;
		margin:50px 0 0;
	}
</style>
<div class="contents">
	<h4>賃貸物件</h4>
	<button type="button" class="btn btn-info" id="appearRegistFrom">新規に物件登録をする</button>
	<button type="button" class="btn btn-warning" id="appearRegistApartment">登録物件を確認する</button>
	<div id="graph"></div>
	<div class="registForm">
		<form action="" method="POST">
			<div class="form-group">
				<input class="form-control" type="text" placeholder="物件名" name="estate_name">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="家賃" name="house_rent">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="敷金" name="deposit">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="管理費" name="management_cost">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="礼金" name="reward">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="住所" name="adress">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="アクセス" name="access">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="築年数" name="building_age">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="間取り" name="layout">
			</div>
			<div class="form-group">
				<input class="form-control" type="text" placeholder="専有面積" name="area">
			</div>
			<div class="form-group">
			    <label for="exampleFormControlTextarea1">説明</label>
			    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
			</div>
			<button type="submit" name="registBtn" class="btn btn-primary btn-lg btn-block">登録</button>
		</form>
	</div>

	<!-- 登録した物件情報を提示 -->
	<div class="registApartment">
		<table class="table table-hover">
			<thead>
				<tr>
					<th scope="col">#</th>
					<th scope="col">物件名</th>
					<th scope="col">登録日</th>
					<th scope="col">更新日</th>
					<th scope="col">編集</th>
					<th scope="col">削除</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th scope="row">1</th>
					<td>Mark</td>
					<td>Otto</td>
					<td>@mdo</td>
					<td><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span>編集</button></td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>削除</button></td>
				</tr>
				<tr>
					<th scope="row">2</th>
					<td>Jacob</td>
					<td>Thornton</td>
					<td>@mdo</td>
					<td><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span>編集</button></td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>削除</button></td>
				</tr>
				<tr>
					<th scope="row">3</th>
					<td colspan="2">Larry the Bird</td>
					<td>@mdo</td>
					<td><button type="button" class="btn btn-warning"><span class="glyphicon glyphicon-refresh"></span>編集</button></td>
					<td><button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span>削除</button></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript" src="../wp-content/themes/clinic_001_DL/Flotr2/flotr2.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$('#appearRegistFrom').click(function() {
		$('.registForm').slideToggle();	
	})
	$('#appearRegistApartment').click(function(){
		$('.registApartment').slideToggle();
	})



	window.onload = function(){
 
			var container = document.getElementById("graph");
 
			var data1 = {
				data: [],
				label: "2018年"
			};
			data1.data.push([1, 70]);
			data1.data.push([2, 68]);
			data1.data.push([3, 65]);
			data1.data.push([4, 67]);
			data1.data.push([5, 64]);
			data1.data.push([6, 61]);
			data1.data.push([7, 60]);
			data1.data.push([8, 62]);
			data1.data.push([9, 68]);
			data1.data.push([10, 67]);
			data1.data.push([11, 70]);
			data1.data.push([12, 72]);
 
 
			var data2 = {
				data: [],
				label: "2019年"
			};
			data2.data.push([1, 70]);
			data2.data.push([2, 69]);
			data2.data.push([3, 70]);
			data2.data.push([4, 71]);
			data2.data.push([5, 69]);
			data2.data.push([6, 70]);
			data2.data.push([7, 69]);
			data2.data.push([8, 68]);
			data2.data.push([9, 69]);
			data2.data.push([10, 70]);
			data2.data.push([11, 73]);
			data2.data.push([12, 75]);
 
			// ラベルを表示する関数
		    function labelFn(label) {
		        return label;
		    }
 
			// グラフを描画
		    graph = Flotr.draw(container, 
		    		[ data1, data2 ],  {
		    	// X軸の描画
				xaxis: {
					// 横軸の項目ラベル
					tickFormatter: function (x) {
						var
							x = parseInt(x),
							months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
						return months[(x-1)%12];
					}
				}, 
				// 凡例
				legend: {
					position: "nw",
					labelFormatter: labelFn,
					backgroundColor: "#D2E8FF"
				},
				// HTML形式で文言を出力
				HtmlText: true
			});
		}


</script>