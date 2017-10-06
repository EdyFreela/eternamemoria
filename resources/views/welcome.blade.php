@extends('layouts.welcome')

@section('style')
@endsection

@section('content')
<div class="section-one">
    <div class="container"></div>
</div>
<div class="section-two">
    <a id="comprar"></a>
    <div class="container">
        <div class="col-md-12">
            <h2>FAÇA SEU PEDIDO AGORA</h2>
        </div>
        {!! Form::open(array('route' => 'pedido.store','method'=>'POST', 'id'=>'formPedido')) !!}
        <div class="col-md-12">
            <div class="panel panel-default panel-produto">
              <div class="panel-body">
                <div class="col-md-12">
                    <div class="col-xs-12 col-sm-3 col-md-1 text-center">
                        <div class="form-group quantidade">
                            <strong>Quantidade</strong>
                            <div class="validator">
                            {!! Form::text('quantidade', '1', array('class' => 'form-control quantidade text-center')) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <h3 class="total">Tag: R$ 39,99</h3>
                    </div>                                        
                    <div class="col-xs-12 col-sm-3 col-md-1 text-center">
                        <h3>+</h3>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <h3>Frete: R$ 5,50</h3>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-1 text-center">
                        <h3>=</h3>
                    </div>
                    <div class="col-xs-12 col-sm-3 col-md-3 text-center">
                        <h3 class="total-geral">Total: R$ 45,49</h3>
                    </div>                                                                                       
                </div>
              </div>
            </div>
        </div>        
        <div class="col-md-6">
            <h2>DADOS PESSOAIS</h2>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>*Nome</strong>
                    <div class="validator">
                    {!! Form::text('nome', null, array('class' => 'form-control', 'id' => 'nome')) !!}
                    </div>
                </div>
            </div>            
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>*Sobrenome</strong>
                    <div class="validator">
                    {!! Form::text('sobrenome', null, array('class' => 'form-control', 'id' => 'sobrenome')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>*Seu melhor e-mail</strong>
                    <div class="validator">
                    {!! Form::text('email', null, array('class' => 'form-control', 'id' => 'email')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>*CPF</strong>
                    <div class="validator">
                    {!! Form::text('cpf', null, array('class' => 'form-control cpf')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>*Celular</strong>
                    <div class="validator">
                    {!! Form::text('celular', null, array('class' => 'form-control celular')) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <h2>ENDEREÇO DE ENTREGA</h2>
            <div class="col-xs-12 col-sm-6 col-md-6">
                <div class="form-group">
                    <strong>*Informe seu CEP</strong>
                    <div class="input-group">
                        <div class="validator">
                            <input type="text" name="cep" class="form-control cep">
                        </div>
                        <span class="input-group-btn">
                            <button class="btn btn-default btn-warning" type="button" onclick="buscaCep();">Procurar</button>
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 col-md-6 cep-error"></div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>*Endereço</strong>
                    <div class="validator">
                    {!! Form::text('endereco', null, array('class' => 'form-control endereco')) !!}
                    </div>
                </div>
            </div>             
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="form-group">
                    <strong>*Numero</strong>
                    <div class="validator">
                    {!! Form::text('numero', null, array('class' => 'form-control numero')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="form-group">
                    <strong>*Bairro</strong>
                    <div class="validator">
                    {!! Form::text('bairro', null, array('class' => 'form-control bairro')) !!}
                    </div>
                </div>
            </div>             
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Complemento</strong>
                    <div class="validator">
                    {!! Form::text('complemento', null, array('class' => 'form-control complemento')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-2">
                <div class="form-group">
                    <strong>*UF</strong>
                    <div class="validator">
                    {!! Form::text('uf', null, array('class' => 'form-control uf')) !!}
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-10">
                <div class="form-group">
                    <strong>*Cidade</strong>
                    <div class="validator">
                    {!! Form::text('cidade', null, array('class' => 'form-control cidade')) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 text-left">
                Ao clickar no botão <strong>"finalizar compra"</strong> você será redirecionado para o UOL PagSeguro para finalizar a compra.
            </div>
        </div>
        <div class="col-md-6">
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button class="btn btn-warning btn-finalizar-compra" style="width:100%;">Finalizar Compra</button>
            </div>
        </div>                                            
        {!! Form::close() !!}
    </div>
</div>
<div class="section-tree">
    <div class="container">
        <h1 class="text-center">COMO FUNCIONA?</h1>
        <p>Semelhante a uma página do facebook, o site <strong>Eterna Memória&copy;</strong> contém informações que você e amigos adicionam sobre seu ente querido, tais como: uma biográfia e histórias, fotos, comentários de amigos e parentes e até links para compartilhar conteúdo em sites sociais como Facebook e Twitter.</p>
        <p>O <strong>Eterna Memória&copy;</strong> combina memorialização tecnológica com as lápides de Granito Trádicionais, adicionando um Qr-Code a lápide de granito que permite aos usuários de telefones inteligentes se conectem ao seu site personalizado. Pode ser visualizado no telefone á medida que os visitantes atravessam o cemitério ou no seu computador digitando o endereço web exclusivo no seu navegador de internet.</p>
        <div class="col-md-5">
            <div class="frase">
                <h1><i class="fa fa-quote-left" aria-hidden="true"></i> VELHOS MOMENTOS, GRANDES SAUDADES E ETERNAS MEMÓRIAS <i class="fa fa-quote-right" aria-hidden="true"></i></h1>
                <p>Heloisa Burlet.</p>
            </div>
        </div>
        <div class="col-md-6"></div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(window).scroll(function() {
      if ($(document).scrollTop() > 50) {
        $('nav').addClass('shrink');
        $('#brand-img').addClass('shrink-img');
        $('.navbar-brand').addClass('shrink-navbar');
      } else {
        $('nav').removeClass('shrink');
        $('#brand-img').removeClass('shrink-img');
        $('.navbar-brand').removeClass('shrink-navbar');
      }
    });    
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
<script>
$(document).ready(function () {
    $(".cpf").mask('000.000.000-00', {reverse: true});
    $(".celular").mask('(00) 0 0000.0000', {reverse: true});
    $(".cep").mask('00 000-000', {reverse: true});
});    
</script>
<script>
    $(".quantidade").blur(function() {
        var qtd = $(this).val();
        var total = 39.99 * qtd;
        $( ".total" ).html('Tag: R$ ' + total);        
        var totalGeral = 39.99 * qtd + 5.50;
        $( ".total-geral" ).html('Total: R$ ' + totalGeral);
    });
</script>
<script>
    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $(".endereco").val("");
        $(".bairro").val("");
        $(".uf").val("");
        $(".cidade").val("");
    }    
    function buscaCep(){
        var cep = $(".cep").val().replace(/\D/g, '');

        if (cep != "") {

            var validacep = /^[0-9]{8}$/;

            if(validacep.test(cep)) {

                $(".endereco").val("...");
                $(".bairro").val("...");
                $(".uf").val("...");
                $(".cidade").val("...");

                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        $(".endereco").val(dados.logradouro);
                        $(".bairro").val(dados.bairro);
                        $(".uf").val(dados.uf);
                        $(".cidade").val(dados.localidade);
                    } else {
                        limpa_formulário_cep();
                        $(".cep-error").html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> CEP não encontrado.');
                    }
                });
            } else {
                limpa_formulário_cep();
                $(".cep-error").html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Formato de CEP inválido.');
            }
        } else {
            limpa_formulário_cep();
        }
    }
</script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/additional-methods.min.js"></script>
<script type="text/javascript">
    $.validator.setDefaults( {
        submitHandler: function () {
            $( "#formPedido" ).submit();
        }
    } );

    $( document ).ready( function () {
        $( "#formPedido" ).validate( {
            rules: {
                quantidade: "required",
                nome: "required",
                sobrenome: "required",
                email: "required",
                cpf: "required",
                celular: "required",
                cep: "required",
                endereco: "required",
                numero: "required",
                bairro: "required",
                uf: "required",
                cidade: "required"
            },
            messages: {
                quantidade: "Você deve informar a quantidade",
                nome: "Informe seu Nome",
                sobrenome: "Informe seu Sobrenome",
                email: "Informe seu E-Mail",
                cpf: "Informe seu CPF",
                celular: "Informe seu Celular",
                cep: "Informe o CEP para entrega",
                endereco: "Informe o Endereço para entrega",
                numero: "Informe o Numero para entrega",
                bairro: "Informe o Bairro para entrega",
                uf: "Informe a UF para entrega",
                cidade: "Informe a Cidade para entrega"
            },
            errorElement: "em",
            errorPlacement: function ( error, element ) {
                // Add the `help-block` class to the error element
                
                /*
                error.addClass( "help-block" );

                if ( element.prop( "type" ) === "checkbox" ) {
                    error.insertAfter( element.parent( "label" ) );
                } else {
                    error.insertAfter( element );
                }
                */
            },
            highlight: function ( element, errorClass, validClass ) {
                $( element ).parents( ".validator" ).addClass( "has-error" ).removeClass( "has-success" );
            },
            unhighlight: function (element, errorClass, validClass) {
                $( element ).parents( ".validator" ).addClass( "has-success" ).removeClass( "has-error" );
            }
        });
    });
</script>
@endsection