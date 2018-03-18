<script type="text/x-handlebars-template" id="bbt-editor-list">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-2">
				<ul class="bbs-field-selectors">
					{{#each comments}}
					<li data-selector="{mainSelector}">Main Container</li>
					{{/each}}
				</ul>
			</div>
			<div class="col-md-7">
				<ul class="bbs-editor-list">{groups}</ul>
			</div>
			<div class="col-md-3">
				{selectors}
			</div>
		</div>
	</div>
</script>