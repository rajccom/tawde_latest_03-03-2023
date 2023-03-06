<div class="card">
    <div class="card-header">
        <h5 class="mb-0 h6">{{translate('Family Information')}}</h5>
    </div>
    <div class="card-body">
        <form action="{{ route('families.update', $member->id) }}" method="POST">
            <input name="_method" type="hidden" value="PATCH">
            @csrf
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="father">{{translate('Father')}}</label>
                    @php $user_father = !empty($member->families->father) ? $member->families->father : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="father" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_father ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_father ==  'no') selected @endif >{{translate('No')}}</option>
                        @error('father')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="mother">{{translate('Mother')}}</label>
                    @php $user_mother = !empty($member->families->mother) ? $member->families->mother : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="mother" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_mother ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_mother ==  'no') selected @endif >{{translate('No')}}</option>
                        @error('mother')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="father">{{translate('Father Occupation')}}</label>
                    @php $user_father_occupation = !empty($member->families->father_occupation) ? $member->families->father_occupation : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="father_occupation" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="service" @if($user_father_occupation ==  'service') selected @endif >{{translate('Service')}}</option>
                        <option value="business" @if($user_father_occupation ==  'business') selected @endif  >{{translate('Business')}}</option>
                        <option value="retired" @if($user_father_occupation ==  'retired') selected @endif>{{translate('Retired')}}</option>
                        <option value="other" @if($user_father_occupation ==  'other') selected @endif>{{translate('Other')}}</option>
                        @error('father_occupation')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="mother">{{translate('Mother Occupation')}}</label>
                    @php $user_mother_occupation = !empty($member->families->mother_occupation) ? $member->families->mother_occupation : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="mother_occupation" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="housewife" @if($user_mother_occupation ==  'housewife') selected @endif >{{translate('Housewife')}}</option>
                        <option value="service" @if($user_mother_occupation ==  'service') selected @endif >{{translate('Service')}}</option>
                        <option value="business" @if($user_mother_occupation ==  'business') selected @endif >{{translate('Business')}}</option>
                        <option value="retired" @if($user_mother_occupation ==  'retired') selected @endif >{{translate('Retired')}}</option>
                        @error('mother_occupation')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="brother">{{translate('No of Brothers')}}</label>
                    <input type="text" name="brother" value="{{ !empty($member->families->brother) ? $member->families->brother : "" }}" class="form-control" placeholder="{{translate('No of Brothers')}}" required>
                    @error('brother')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="brother">{{translate('No of Sisters')}}</label>
                    <input type="text" name="sister" value="{{ !empty($member->families->sister) ? $member->families->sister : "" }}" class="form-control" placeholder="{{translate('No of Sisters')}}" required>
                    @error('sister')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="brother">{{translate('Brother Married')}}</label>
                    @php $user_brother_married = !empty($member->families->brother_married) ? $member->families->brother_married : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="brother_married" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_brother_married ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_brother_married ==  'no') selected @endif >{{translate('No')}}</option>
                        @error('brother_married')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="brother">{{translate('Sister Married')}}</label>
                    @php $user_sister_married = !empty($member->families->sister_married) ? $member->families->sister_married : ""; @endphp
                    <select class="form-control aiz-selectpicker" name="sister_married" required>
                        <option value="">{{translate('Select')}}</option>
                        <option value="yes" @if($user_sister_married ==  'yes') selected @endif >{{translate('Yes')}}</option>
                        <option value="no" @if($user_sister_married ==  'no') selected @endif >{{translate('No')}}</option>
                        @error('sister_married')
                            <small class="form-text text-danger">{{ $message }}</small>
                        @enderror
                    </select>
                </div>
            </div>
            <!--<div class="form-group row">
                <div class="col-md-6">
                    <label for="father">{{translate('Father')}}</label>
                    <input type="text" name="father" value="{{ !empty($member->families->father) ? $member->families->father : "" }}" class="form-control" placeholder="{{translate('Father')}}" required>
                    @error('father')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="col-md-6">
                    <label for="mother">{{translate('Mother')}}</label>
                    <input type="text" name="mother" value="{{ !empty($member->families->mother) ? $member->families->mother : "" }}" placeholder="{{ translate('Mother') }}" class="form-control" required>
                    @error('mother')
                        <small class="form-text text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <div class="col-md-6">
                    <label for="sibling">{{translate('Sibling')}}</label>
                    <input type="text" name="sibling" value="{{ !empty($member->families->sibling) ? $member->families->sibling : "" }}" class="form-control" placeholder="{{translate('Sibling')}}" required>
                    @error('sibling')
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
