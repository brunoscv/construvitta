//;
$(function() {
	$("#form_clientes").validate({
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
			nome_cliente:{
				required:true
			},
			cpf:{
				required:true
			},
			data_nasc:{
				required:true
			},
			email_cliente:{
				required:true
			},
			renda_bruta:{
				required:true
			},
			compr_dependente:{
				
			},
			fgts:{
				
			},
			valor_fgts:{
				
			},
			valor_sinal:{
				required:true
			},
			loteamento_zona:{
				required:true
			},
			nome_modelo:{
				
			},
			outro_modelo:{
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