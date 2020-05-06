@extends('layouts.app')

@section('content')

<b-container>
    <b-row align-h= "center">
     <b-col cols="8">

        <b-card title="Registro" class="my-3">
                @if($errors->any())

                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li> {{$error}}</li>                  
                        @endforeach
                    </ul>
                </b-alert>

                @else
                <b-alert show>
                    Por favor ingresa tus datos
                </b-alert>

                @endif

                   <b-form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}
            
                    <b-form-group id = "input-group-1" 
                            label = "Nombre :" 
                            label-for = "name" 
                            description = "Ingresa tu nombre"> 
                    <b-form-input type="name"
                            id = "name"
                            name="name" 
                            value="{{ old('name') }}" required autofocus>
                    </b-form-input> 
                    </b-form-group>
        
                    <b-form-group id = "input-group-1" 
                            label = "Dirección de correo electrónico :" 
                            label-for = "email" 
                            description = "Nunca compartiremos su correo electrónico con nadie más."> 
                        <b-form-input type="email"
                            id = "email"
                            name="email" 
                            value="{{ old('email') }}" required 
                            placeholder = "example@tucorreo.com"> 
                        </b-form-input> 
                    </b-form-group>

                    <b-form-group 
                        label = "Contraseña" 
                        label-for = "password">
                        <b-form-input type="password"
                        id = "password" name="password" 
                         required>                   
                        </b-form-input> 
                    </b-form-group>

                    <b-form-group 
                        label = "Confirmar Contraseña" 
                        label-for = "password_confirmation">
                        <b-form-input type="password"
                        id = "password_confirmation" name="password_confirmation" 
                        required>                   
                        </b-form-input> 
                    </b-form-group>

                    <b-button type="submit"  variant="outline-primary">
                        
                        Confirmar Registro

                    </b-button>

                    <b-button href="{{route('login') }}" variant="link">
                        ¿Ya te has registrado? 
                    </b-button>

            </b-form>
             
        </b-card>

    </b-col>
   </b-row>
</b-container>
@endsection
