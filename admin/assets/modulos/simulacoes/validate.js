//;
$(function() {
	$("#form_simulacoes").validate({
		ignore : [],
		errorElement : "em",
		onfocusout : function(element) {
			if ((!this.check(element) || !this.checkable(element) ) && (element.name in this.submitted || !this.optional(element))) {
				var currentObj = this;
				var currentElement = element;
				var delay = function() {
					currentObj.element(currentElement);
				};
				setTimeout(delay, 0);
			}
		},
		invalidHandler : function(form, validator) {
			var errors = validator.numberOfInvalids();
			if (errors) {
				validator.errorList[0].element.focus();
				var aba = $(validator.errorList[0].element).parents('div.tab-pane').attr('id');
				$("[href='#" + aba + "']").click();
			}
			return false;
		},
		rules : {
			id:{
					
			},
			corretores_id:{
				required:true
			},
			clientes_id:{
				required:true
			},
			data_nascimento:{
				required:true
			},
			imovel:{
				required:true
			},
			compr_dependente:{
				required:true
			},
			renda_bruta:{
				required:true
			},
			fgts:{
				required:true
			},
			valor_fgts:{
				required:true
			},
			loteamento_zona:{
				required:true
			},
			telefone:{
				required:true
			},
			email:{
				required:true
			},
			observacoes:{

			},
			status:{
					
			},
			createdAt:{
					
			},
			updatedAt:{
					
			}
		}
	});
}); 