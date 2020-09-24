@extends('layouts.app')

@section('content')

<div class="comments">
    @foreach($allComments as $oneComment)
        <div class="one_comment">
            <div class="detail">
                <span class="author">
                    {{$oneComment['author']}}
                    {{--            Roboto Bold 16--}}
                </span>
                <span class="date_of_create" style="">
                    {{$oneComment['created_at_new']}}
                    {{--                Roboto Light 11--}}
                </span>
            </div>
            <div class="text_one_comment">
                {{$oneComment['text']}}
                {{--            Roboto Light 14--}}
            </div>
        </div>
    @endforeach

</div>
@if($allComments)
    <hr>
@endif



<div class="div_for_new_comment">
    <div class="title_new_comment">
        Оставить комментарий
        {{--        Roboto Regula 24--}}
    </div>

    <div class="name_new_comment" style="">
        Ваше имя
        {{--            Roboto Light 14--}}
    </div>
    <input type="text" name="author" id="author" style="width: 100%;" required> <br>
    <div class="div_text_new_comment" style="">
        Ваш комментарий
        {{--            Roboto Light 14--}}
    </div>

    <textarea name="text" id="text" cols="55" rows="5" style="background-color: transparent;" required></textarea> <br>
    <div class="t_align_r">
        <button id="create" class="btn btn-outline-dark" style="font-weight: 300; font-size: 18px;">
            Отправить
            {{--            Roboto Light 18--}}
        </button>
    </div>
</div>



<script>
    $(function() {

        $('#create').on('click',function(){
            var author = $('#author').val();
            var text = $('#text').val();

            $.ajax({
                url: '{{ route("addComment") }}',
                type: "POST",
                data: { author:author, text:text },
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                success: function (data) {
                    var new_comment = ` <div class="one_comment">
                                            <div class="detail">
                                                <span class="author">
                                                    ${data['author']}
                                                </span>
                                                <span class="date_of_create" style="">
                                                ${data['created_at_new']}
                                                </span>
                                            </div>
                                            <div class="text_one_comment">
                                                ${data['text']}
                                            </div>
                                        </div>`;

                    $('.comments').prepend(new_comment);
                    $('#author').val('');
                    $('#text').val('');
                },

                error: function (msg) {
                    alert('Ошибка');
                }
            });

        });

    })

</script>
@endsection

