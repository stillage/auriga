<div class="row">
    <div class="col-xl-6">
        <div class="form-group">
            <label class="form-control-label">{{ __('Business Unit') }}</label>
            <div class="input-group input-group-merge">
                <div class="input-group input-group-merge">
                    <select class="form-control" data-toggle="select" name="business_unit_id" required>
                        <option value="{{ $product->business_unit_id }}" selected>{{ $product->bu->business_unit }}</option>
                        @foreach ($bu as $k)
                            <option value="{{ $k->id }}">{{ $k->business_unit }}</option>
                        @endforeach
                    </select>
                </div>
                @error('business_unit_id')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group">
            <label class="form-control-label">{{ __('Item Number') }}</label>
            <div class="input-group input-group-merge">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-font"></i></span>
                    </div>
                    <input class="form-control" value="{{ $product->item_number }}" placeholder="Item Number" type="text" name="item_number"
                        required>
                </div>
                @error('item_number')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-xl-6">
        <div class="form-group">
            <label class="form-control-label">{{ __('Brand Name') }}</label>
            <div class="input-group input-group-merge">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-font"></i></span>
                    </div>
                    <input class="form-control" value="{{ $bu->brand_name }}" placeholder="Brand Name" type="text" name="brand_name"
                        required>
                </div>
                @error('brand_name')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="form-group">
            <label class="form-control-label">{{ __('Company') }}</label>
            <div class="input-group input-group-merge">
                <div class="input-group input-group-merge">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-font"></i></span>
                    </div>
                    <input class="form-control" value="{{ $bu->company }}" placeholder="Company" type="text" name="company"
                        required>
                </div>
                @error('company')
                    <small class="text-danger" role="alert">
                        {{ $message }}
                    </small>
                @enderror
            </div>
        </div>
    </div>
</div>

<a href="{{ route('business-unit.index') }}" class="btn btn-default" type="submit">{{ __('Back') }}</a>
<button class="btn btn-primary" type="submit">{{ __('Submit') }}</button>
