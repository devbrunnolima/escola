<?php
session_start();
require_once('teamplate/header_form.php');
$dt_today = date('d/m/Y H:i:s');

?>

<!-- Busca CEP -->
<script>
    
    function limpa_formulário_cep() {
            //Limpa valores do formulário de cep.
            document.getElementById('rua').value=("");
            document.getElementById('bairro').value=("");
            document.getElementById('cidade').value=("");
    }

    function meu_callback(conteudo) {
        if (!("erro" in conteudo)) {
            //Atualiza os campos com os valores.
            document.getElementById('rua').value=(conteudo.logradouro);
            document.getElementById('bairro').value=(conteudo.bairro);
            document.getElementById('cidade').value=(conteudo.localidade);
        } //end if.
        else {
            //CEP não Encontrado.
            limpa_formulário_cep();
            alert("CEP não encontrado.");
        }
    }
    function pesquisacep(valor) {

//Nova variável "cep" somente com dígitos.
var cep = valor.replace(/\D/g, '');

//Verifica se campo cep possui valor informado.
if (cep != "") {

    //Expressão regular para validar o CEP.
    var validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        document.getElementById('rua').value="...";
        document.getElementById('bairro').value="...";
        document.getElementById('cidade').value="...";

        //Cria um elemento javascript.
        var script = document.createElement('script');

        //Sincroniza com o callback.
        script.src = 'https://viacep.com.br/ws/'+ cep + '/json/?callback=meu_callback';

        //Insere script no documento e carrega o conteúdo.
        document.body.appendChild(script);

    } //end if.
    else {
        //cep é inválido.
        limpa_formulário_cep();
        alert("Formato de CEP inválido.");
    }
} //end if.
else {
    //cep sem valor, limpa formulário.
    limpa_formulário_cep();
}
};

</script>



<body>



    <div class="container capsula">

        <div class="row">
            <form method="POST" id="form" action="contato.php">

                <p class="text-center"><strong>Cadastro do(a) Aluno(a)</strong></p>

                <strong>
                    <div class="form-group col-sm-12">
                        <label>E-Mail:</label>
                        <input type="text" class="form-control" name="email" placeholder="E-Mail" required="required">
                    </div>
             
                    <div class="form-group col-sm-12">
                        <label>Nº telefone:</label>
                        <input type="text" class="form-control" id="telefone" name="telefone" maxlength="20" placeholder="Telefone com DDD" required="required">
                    </div>

                    <div class="form-group col-sm-12">
                        <label>Nº Celular:</label>
                        <input type="text" class="form-control form-control-sm" id="celular" name="celular" maxlength="20" placeholder="Celular com DDD" required="required">
                    </div>

                    <div class="col-sm-12" align="center">
                        <label>Possui WhatsApp?</label>
                        <br>

                      <div>
                        
                      </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="whatsapp" value="SIM" checked>
                                <label class="form-check-label color-radio">SIM</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input " type="radio" name="whatsapp" value="NÃO">
                                <label class="form-check-label color-radio" for="inlineCheckbox2">NÃO</label>
                            </div>
                        
                        <input name="status_teste" type="hidden" value="teste">

                    </div>
        

      

          

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>CEP: </label>
                        <input name="cep" type="text" id="cep" value="" class="form-control form-control-sm" placeholder="Digite o CEP" size="10" maxlength="9" onblur="pesquisacep(this.value);" required="required" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Endereço</label>
                        <input type="text" id="rua" name="endereco" class="form-control form-control-sm" size="60" placeholder="Endereço" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Número:</label>
                        <input type="text" id="numero" name="numero" class="form-control form-control-sm" size="60" placeholder="Número" />
                    </div>
                </div>
            

            
                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Bairro:</label>
                        <input name="bairro" type="text" id="bairro" class="form-control form-control-sm" size="40" placeholder="Bairro" />
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label>Cidade: </label>
                        <input type="text" id="cidade" name="cidade" class="form-control form-control-sm" size="40" placeholder="Cidade" />
                    </div>
                </div>

                </strong>
         
 
                <div class="botao">
                
                    <a type="button" href="index.php" class="btn btn-danger btn-lg">Voltar</a>
                    <button type="button submit" class="btn btn-primary btn-lg">Próximo</button>
                    
                </div>
 </div>     


                </form>



       