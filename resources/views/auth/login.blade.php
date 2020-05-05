@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h= "center">
        <b-col cols="8">
            <b-card title="Inicio de sesion">
                <b-alert show>
                    Por favor ingresa tus datos
                </b-alert>
                   <b-form-group method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

            <b-form-group id = "input-group-1" 
                    label = "Dirección de correo electrónico :" 
                    label-for = "email" 
                    description = "Nunca compartiremos su correo electrónico con nadie más."> 
                <b-form-input type="email"
                    id = "email"
                    name="email" 
                    value="{{ old('email') }}" required autofocus
                    placeholder = "example@tucorreo.com"> 
                </b-form-input> 
            </b-form-group>

             <b-form-group 
                label = "Contraseña" 
                label-for = "password">
                <b-form-input type="password"
                   id = "password" name="password" 
                   value="{{ old('password') }}" required>                   
                 </b-form-input> 
            </b-form-group>

        <b-form-group>
            <b-form-checkbox 
                name="checkbox-1" {{ old('remember') ? 'checked ="true" ' : '' }}>
                Recordar Sesion
            </b-form-checkbox>
        </b-form-group>
                    <b-button href="submit" variant="primary">
                        Ingresar
                    </b-button>
                    <b-button href="{{route('password.request') }}" variant="link">
                        ¿Olvidaste tu contraseña?
                    </b-button>

            </b-form>
             
        </b-card>
                    
   
           
        </b-col>
     </b-row>
    
</b-container>
@endsection
