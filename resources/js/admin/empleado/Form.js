import AppForm from '../app-components/Form/AppForm';

Vue.component('empleado-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                Nombre:  '' ,
                ApellidoPaterno:  '' ,
                ApellidoMaterno:  '' ,
                Telefono:  '' ,
                Edad:  '' ,
                FechaNacimiento:  '' ,
                LugarNacimiento:  '' ,
                
            }
        }
    }

});