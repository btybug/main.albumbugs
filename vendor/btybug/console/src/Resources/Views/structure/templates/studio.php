<script type="text/x-handlebars-template" id="bbt-editor-list">
    <ul class="bbs-field-selectors">
        {{#selectors}}
        <li data-selector="#form-builder-rows {{nodeSelector}}" bbs-click="setActiveSelector">{{nodeSelector}}</li>
        {{/selectors}}
    </ul>
	<div class="container-fluid" style="float: left; width: calc(100% - 200px);height: 100%;">
        <ul class="bbs-editor-list">{groups}</ul>
        <div class="bb-add-class-panel">
            <div class="p-2" id="element-edit-panel">
                <div class="card mb-2">
                    <div class="card-body p-2">
                        <input type="text" class="element-classes"/>
                    </div>
                </div>

                <!-- Available Classes -->
                <div class="bb-type-panel mb-2 bb-css-add-panel">
                    <input type="text" class="form-control form-control-sm mb-2" placeholder="Search Available Classes"/>

                    <div class="class-list">
                        <div class="class-item badge badge-warning" data-class="class-1">Class 1</div>
                        <div class="class-item badge badge-warning" data-class="class-2">Class 2</div>
                        <div class="class-item badge badge-warning" data-class="class-3">Class 3</div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</script>