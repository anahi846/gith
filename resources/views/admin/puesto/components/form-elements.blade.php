<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Nombre'), 'has-success': fields.Nombre && fields.Nombre.valid }">
    <label for="Nombre" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.puesto.columns.Nombre') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Nombre" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Nombre'), 'form-control-success': fields.Nombre && fields.Nombre.valid}" id="Nombre" name="Nombre" placeholder="{{ trans('admin.puesto.columns.Nombre') }}">
        <div v-if="errors.has('Nombre')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Nombre') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ApellidoPaterno'), 'has-success': fields.ApellidoPaterno && fields.ApellidoPaterno.valid }">
    <label for="ApellidoPaterno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.puesto.columns.ApellidoPaterno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ApellidoPaterno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ApellidoPaterno'), 'form-control-success': fields.ApellidoPaterno && fields.ApellidoPaterno.valid}" id="ApellidoPaterno" name="ApellidoPaterno" placeholder="{{ trans('admin.puesto.columns.ApellidoPaterno') }}">
        <div v-if="errors.has('ApellidoPaterno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ApellidoPaterno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ApellidoMaterno'), 'has-success': fields.ApellidoMaterno && fields.ApellidoMaterno.valid }">
    <label for="ApellidoMaterno" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.puesto.columns.ApellidoMaterno') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.ApellidoMaterno" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('ApellidoMaterno'), 'form-control-success': fields.ApellidoMaterno && fields.ApellidoMaterno.valid}" id="ApellidoMaterno" name="ApellidoMaterno" placeholder="{{ trans('admin.puesto.columns.ApellidoMaterno') }}">
        <div v-if="errors.has('ApellidoMaterno')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ApellidoMaterno') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Edad'), 'has-success': fields.Edad && fields.Edad.valid }">
    <label for="Edad" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.puesto.columns.Edad') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Edad" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Edad'), 'form-control-success': fields.Edad && fields.Edad.valid}" id="Edad" name="Edad" placeholder="{{ trans('admin.puesto.columns.Edad') }}">
        <div v-if="errors.has('Edad')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Edad') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('FechaIngreso'), 'has-success': fields.FechaIngreso && fields.FechaIngreso.valid }">
    <label for="FechaIngreso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.puesto.columns.FechaIngreso') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.FechaIngreso" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('FechaIngreso'), 'form-control-success': fields.FechaIngreso && fields.FechaIngreso.valid}" id="FechaIngreso" name="FechaIngreso" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('FechaIngreso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('FechaIngreso') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('Puesto'), 'has-success': fields.Puesto && fields.Puesto.valid }">
    <label for="Puesto" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.puesto.columns.Puesto') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.Puesto" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('Puesto'), 'form-control-success': fields.Puesto && fields.Puesto.valid}" id="Puesto" name="Puesto" placeholder="{{ trans('admin.puesto.columns.Puesto') }}">
        <div v-if="errors.has('Puesto')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('Puesto') }}</div>
    </div>
</div>


