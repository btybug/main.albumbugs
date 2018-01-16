{!! Form::open(['class' => 'bty-form-5','style' => 'width:auto;', 'id' => 'form_id_'.$form->id]) !!}
{!! Form::hidden('form_id',$form->id) !!}
    @include('forms.'.$form->slug,['form' => $form])
{!! Form::close() !!}

@if(isset($form->settings['is_ajax']) && $form->settings['is_ajax'] == 'yes')
    <script>
        $(document).ready(function () {
            $("body").on('click', '#form_id_{!! $form->id !!} input[type="submit"], #form_id_{!! $form->id !!} button[type="submit"]', function (e) {
                e.preventDefault();
                var data = $("#form_id_{!! $form->id !!}").serialize();
                $.ajax({
                    type: "POST",
                    datatype: "JSON",
                    url: '',
                    data: data,
                    headers: {
                        'X-CSRF-TOKEN': $("input[name='_token']").val()
                    },
                    success: function (data) {
                        document.getElementById("form_id_{!! $form->id !!}").reset();
                        alert(data.message)
                    }
                });
            });
        })
    </script>
@endif