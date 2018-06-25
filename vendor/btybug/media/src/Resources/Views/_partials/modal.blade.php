<div class="settingsModal">
    <!-- Modal -->
    <div class="modal fade" id="mysettingsModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close media-modal-close">&times;</button>
                    <h4 class="modal-title">Modal Header</h4>
                </div>
                <div class="modal-body">
                   @include('media::_partials.drive')
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
    $('body').on('click','.media-modal-open', function () {
        $('#mysettingsModal').addClass('in');
    });
    $('body').on('click','.media-modal-close', function () {
        $(this).closest('.modal').removeClass('in');
    })
</script>
{{--@include('media::_partials.drive')--}}