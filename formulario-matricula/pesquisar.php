
    

            <!-- Pesquisar Sub Categoria -->

		
		<script type="text/javascript">
		$(function(){
			$('#id_categoria').change(function(){
				if( $(this).val() ) {
					$('#id_sub_categoria').hide();
					$('.carregando').show();
					$.getJSON('sub_categorias_post.php?search=',{id_categoria: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha Subcategoria</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].nome_sub_categoria + '</option>';
						}	
						$('#id_sub_categoria').html(options).show();
						$('.carregando').hide();
					});
				} else {
					$('#id_sub_categoria').html('<option value="">– Escolha Subcategoria –</option>');
				}
			});
		});
		</script>

        <!-- pesquisar Turma -->


       
		
		<script type="text/javascript">
					$('#id_turma').hide();
                    $('.carregando_2').show();

		$(function(){
			$('#id_sub_categoria').change(function(){
				if( $(this).val() ) {
					$('#id_turma').hide();
					$.getJSON('turmas_post.php?search=',{id_sub_categoria: $(this).val(), ajax: 'true'}, function(j){
						var options = '<option value="">Escolha a Turma</option>';	
						for (var i = 0; i < j.length; i++) {
							options += '<option value="' + j[i].id + '">' + j[i].nome_horarios + '</option>';
						}	
						$('#id_turma').html(options).show();
						$('.carregando_2').hide();
					});
				} else {
					$('#id_turma').html('<option value="">– Escolha a Turma –</option>');
				}
			});
		});
		</script>

        <!-- BOTÃO CADASTRAR  -->
>
		
		<script type="text/javascript">

					$('#btn-cadastrar').hide();

		$(function(){
			$('#id_turma').change(function(){
				if( $(this).val() ) {
					$('#btn-cadastrar').hide();
					$.getJSON('um_teste_turma.php?search=',{id_turma: $(this).val(), ajax: 'true'}, function(j){
                        
                        if (j == true){
                           	alert('ESSA TURMA ESTÁ LOTADA, POR FAVOR SELECIONE OUTRA')
                            $('#alerta').html(TESTE).show();
                        }else{
                            var options = '<button type="submit" id="btn-cadastrar" class=" btn-color">Cadastrar</button>';	
                            $('#btn-cadastrar').html(options).show();
                        }

                        
					});
				} 
			});
		});
		</script>

