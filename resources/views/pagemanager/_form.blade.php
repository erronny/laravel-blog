

 

 <div class="col-sm-12">
  <textarea  class="form-control" name="detail" id="detail" rows="50" cols="" style="height:500px;" value=""  />{{old('detail')?old('detail'):$detail}}</textarea>
  <div class="text text-danger" id="detailErro"></div>
   @if($errors->has('detail'))
   <div class="text text-danger">{{ $errors->first('detail') }}</div>
  @endif
</div>





