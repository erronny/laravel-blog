<div class="col-sm-12">

    												<div class="col-sm-8">
                                                      <input type="text" class="form-control" name="name" id="name" value="{{old('name')?old('name'):$name}}" placeholder="Enter Page Name.." />
                                                      <div class="text text-danger" id="nameErro"></div>
                                                        @if($errors->has('name'))
                                                        <div class="text text-danger">{{ $errors->first('name') }}</div>
                                                      @endif
                                                  </div>
</div>
<br>
<div class="col-sm-12">

    												<div class="col-sm-8">
                                                      <input type="text" class="form-control" name="url" id="url" value="{{old('url')?old('url'):$url}}" placeholder="Enter Page url.." />
                                                      <div class="text text-danger" id="urlErro"></div>
                                                        @if($errors->has('url'))
                                                        <div class="text text-danger">{{ $errors->first('url') }}</div>
                                                      @endif
                                                  </div>
</div>


