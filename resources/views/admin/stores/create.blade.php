@extends('layouts.app')

@section('content')
    <h1>Cadastrar Loja</h1>
    <form action="/admin/stores/store" method="POST">
        <input type="hidden" name="_token" value="{{csrf_token()}}">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="name">Nome</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="register">CNPJ/CPF</label>
                <input type="text" name="register" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="company_name">Nome Fantasia</label>
                <input type="text" name="company_name" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="description">Descrição</label>
                <input type="text" name="description" class="form-control">
            </div>
            <div class="form-group col-md-1">
                <label for="prefix">Prefixo</label>
                <input type="text" name="prefix" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="slug">Slug</label>
                <input type="text" name="slug" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-4">
                <label for="address">Logradouro</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group col-md-1">
                <label for="number">Número</label>
                <input type="text" name="number" class="form-control">
            </div>
            <div class="form-group col-md-3">
                <label for="complement">Complemento</label>
                <input type="text" name="complement" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="district">Bairro</label>
                <input type="text" name="district" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="state">UF</label>
                <input type="text" name="state" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="contact">Contato</label>
                <input type="text" name="contact" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="phone">Telefone</label>
                <input type="text" name="phone" class="form-control">
            </div>
            <div class="form-group col-md-2">
                <label for="mobile_phone">Celular</label>
                <input type="text" name="mobile_phone" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="email">E-mail</label>
                <input type="text" name="email" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-2">
                <label for="delivery_fee">Taxa de Entrega Padrão</label>
                <input type="text" name="delivery_fee" class="form-control">
            </div>
            <div class="form-group col-md-4">
                <label for="user">Usuário</label>
                <select name="user" class="form-control">
                    @foreach ($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="row col-md-12">
            <button type="submit" class="btn btn-lg btn-success">Cadastrar</button>
        </div>
    </form>
@endsection
