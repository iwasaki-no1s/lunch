<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
		<?=$this->Html->link("昼飯兄さん",["controller"=>"Users"]
	,["class"=>"navbar-brand"]);?>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="dropdown">
					<?=$this->Html->link("ランチ","#",["data-toggle"=>"dropdown"]);?>
					<ul class="dropdown-menu">
						<li><?=$this->Html->link("みんなのランチ","admin/lunch/index");?></li>
					</ul>
				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<p class="navbar-text">ようこそ、<?=$auth["name"]; ?></p>
				<p class="navbar-text"><?$this->Html->link("ログアウト","/admin/users/logout")?></p>
			</ul>
		</div>
	</div>
</div>