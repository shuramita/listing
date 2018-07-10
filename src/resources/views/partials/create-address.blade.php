<div class="address">
    <div class="form-group ">
        <label for="title" class="block-title">Địa chỉ BĐS</label>
        <div class="provinces">
            <label for="">Tỉnh / Thành phố</label>
            <select class="form-control">
                @foreach($provinces as $province)
                    @if($province->t == 'p')
                        <option class="province" value="{{$province->i}}" data-province="{{json_encode($province)}}">{{$province->n}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="district">
            <label for="">Quận / Huyện</label>
            <select class="form-control">
                @foreach($provinces as $province)
                    @if($province->t == 'd')
                        <option class="district province-{{$province->p}}" class="" value="{{$province->i}}" data-province="{{json_encode($province)}}">{{$province->n}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="ward">
            <label for="">Xã / Phường</label>
            <select class="form-control">
                @foreach($provinces as $province)
                    @if($province->t == 'w')
                        <option class="ward district-{{$province->d}}" value="{{$province->i}}" data-province="{{json_encode($province)}}">{{$province->n}}</option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="street">
            <label for="">Tên Đường</label>
            <input class="form-control" name="street" placeholder="Tên Đường"/>
        </div>
        <div class="number">
            <label for="">Số Nhà / Lô</label>
            <input class="form-control" name="number" placeholder="Số Nhà / Lô"/>
        </div>
        <div class="unitNumber">
            <label for="">Tầng</label>
            <input class="form-control" name="unitNumber" placeholder="Tầng - Số phòng / số căn hộ"/>
        </div>
    </div>
</div>