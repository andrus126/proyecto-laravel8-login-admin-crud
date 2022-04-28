<style>
    .btn-facebook{
        background : #0078ff;
        color: white;
        width: 65%;
        padding: 20px;
        text-align: ccenter;
        display: block;
        border-radius: 10px;
        margin-right: auto;
        margin-left: auto;
    }
</style>
<div class="flex items-center justify-end mt-4">
    <a class="btn btn-facebook" href="{{ url('auth/facebook') }}">Ingresar con Facebook</a>
</div>


@extends ('adminlte::auth.login')

