





      <textarea name="body" id="body" rows="25" style="height:500, ">{{old('body')?old('body'):$body}}</textarea> 
    <div class="text text-danger" id="bodyErro"></div>
    @if($errors->has('body'))
     <div class="text text-danger">{{ $errors->first('body') }}</div>
    @endif
     












