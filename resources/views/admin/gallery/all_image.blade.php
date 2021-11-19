
@foreach($gallery as $key => $img)

        <div class="col-3 p-3 " id="pro" >
            <a href="javascript:void(0);" onclick="selectBox('{{$key+1}}')">
            <div class="product_{{$key+1}}" id="product" >

                <img src="{{asset($img->path.''.$img->image)}}" class="gal-img" >
                <input type="radio" class="form-check-input imgCheck_{{$key+1}}" name="img[]" id="imgunCheck" value="{{$img->id}}" style="display: none;">
            </div>
            </a>
        </div>

@endforeach

<script>
    function selectBox(eve){
        $( 'div').removeClass( "selected" );
        $( '.product_'+eve).addClass( "selected" );
        $('input:radio').prop('checked', false);
        $('.imgCheck_'+eve).prop('checked', true);
    }
</script>
