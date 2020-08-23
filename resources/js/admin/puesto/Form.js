import AppForm from '../app-components/Form/AppForm';

Vue.component('puesto-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                ApellidoPaterno:  '' ,
                ApellidoMaterno:  '' ,
                Edad:  '' ,
                FechaIngreso:  '' ,
                Puesto:  '' ,
                
            }
        }
    }

});