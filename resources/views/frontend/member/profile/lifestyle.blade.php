<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Lifestyle')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('lifestyles.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="diet">{{translate('Diet')}}</label>
                    @php $user_diet = !empty($member->lifestyles->diet) ? $member->lifestyles->diet : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="diet" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="vegetarian" @if($user_diet ==  'vegetarian') selected @endif >{{translate('Vegetarian')}}</option>
                        <option value="eggetarian" @if($user_diet ==  'eggetarian') selected @endif >{{translate('Eggetarian')}}</option>
                        <option value="occasionally-non-veg" @if($user_diet ==  'occasionally-non-veg') selected @endif >{{translate('Occasionally Non Veg')}}</option>
                        <option value="non-vegetarian" @if($user_diet ==  'non-vegetarian') selected @endif >{{translate('Non-Vegetarian')}}</option>
                       </select>
                        @error('diet')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    
                </div>
                <div class="col-md-6">
                    <label for="spectcals">{{translate('Spectcals')}}</label>
                    @php $user_spectcals = !empty($member->lifestyles->spectcals) ? $member->lifestyles->spectcals : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="spectcals" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_spectcals ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_spectcals ==  'no') selected @endif >{{translate('No')}}</option>
                        </select>
                        @error('spectcals')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    
                </div>
            </div>
           <!-- <div class="form-group row">
                <div class="col-md-6">
                    <label for="smoke">{{translate('Smoke')}}</label>
                    @php $user_smoke = !empty($member->lifestyles->smoke) ? $member->lifestyles->smoke : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="smoke" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_smoke ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_smoke ==  'no') selected @endif >{{translate('No')}}</option>
                        @error('smoke')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="spectcals">{{translate('Spectcals')}}</label>
                    @php $user_spectcals = !empty($member->lifestyles->spectcals) ? $member->lifestyles->spectcals : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="spectcals" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_spectcals ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_spectcals ==  'no') selected @endif >{{translate('No')}}</option>
                        @error('spectcals')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="living_with">{{translate('Living With')}}</label>
                    <input type="text" name="living_with" value="{{ !empty($member->lifestyles->living_with) ? $member->lifestyles->living_with : "" }}" placeholder="{{ translate('Living With') }}" class="form-control" required>
                    @error('living_with')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>-->
            <div class="text-right">
                <button type="submit" class="btn btn-primary btn-sm">{{translate('Update')}}</button>
            </div>
        </form>
    </div>
</div>
