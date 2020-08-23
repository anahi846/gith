@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.puesto.actions.edit', ['name' => $puesto->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <puesto-form
                :action="'{{ $puesto->resource_url }}'"
                :data="{{ $puesto->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.puesto.actions.edit', ['name' => $puesto->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.puesto.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </puesto-form>

        </div>
    
</div>

@endsection