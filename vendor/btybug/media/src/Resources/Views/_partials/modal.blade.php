<div class="settingsModal">
    <button type="button" class="btn btn-info btn-md btnsettingsModal">Open Modal</button>
    <!-- Modal -->
    <div class="modal fade" id="mysettingsModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                    <p>This is a large modal.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .settingsModal .fade.in {
        opacity: 1;
        display: block;
    }

    .settingsModal .modal-content {
        color: #000;
    }

    .settingsModal .modal-dialog {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .settingsModal .modal-content {
        height: auto;
        min-height: 100%;
        border-radius: 0;
    }
</style>
<script>
    $('.settingsModal .btnsettingsModal').on('click', function () {
        $('#mysettingsModal').addClass('in');
    });
    $('.settingsModal .close').on('click', function () {
        $(this).closest('.modal').removeClass('in');
    })
</script>
{{--@include('media::_partials.drive')--}}