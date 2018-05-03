<news-list>
	<style>
		.news-header{
			font-weight: 200;
			font-size: 50px;
		}
		.news-link{
			font-weight: 200;
			font-size: 30px;
		}
	</style>
	<div class="row">
		<div class="col-md-12">
			<div each={opts.items}>
				<h3 class="news-header">{title}</h3>
				<div each={links}>
					<a href={url} class="news-link">
						{name}
					</a>
				</div>
			</div>
		</div>
	</div>
</news-list>