//Ä caracter para forçar detecção UTF8

var CKEDITOR_BASEPATH = 'includes/ckeditor/';

var janelaModal;
var janelaAberta = false;
var loadedJS = new Array();
var timeoutBusca;
var debug = false;

function contains(arr, obj) {
	i = arr.length;
	while (i--) {
		if (arr[i] === obj)
			return true;
	}
	return false;
}

function loadJS(arquivo, callback) {
	if (contains(loadedJS, arquivo)) {
		if (callback)
			callback();
	}
	else {
		$.getScript(arquivo, callback);
		loadedJS.push(arquivo);
	}
}

function CKEditorLoad(campo, w, h, callback) {
	loadJS('includes/ckeditor/ckeditor.js', function () {
		loadJS('includes/ckfinder/ckfinder.js', function () {
			try{CKEDITOR.instances[campo].destroy(true);}catch(e){}
			CKFinder.setupCKEditor(CKEDITOR.replace(campo, { filebrowserUploadUrl: 'includes/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=arquivos', width: w, height: h }), 'includes/ckfinder/', 'imagens');
			if (callback)
				callback();
		});
	});
}

function abrirCorpo(campo, str, callback) {
	str_array = str.split('&');

	str_obj = '{ ';
	z = 0;
	for (i in str_array) {
		campo_valor = str_array[i].split('=');
		if (z++)
			str_obj += ', ';

		str_obj += '"' + campo_valor[0] + '" : "' + campo_valor[1] + '"';
	}
	str_obj += ' }';

	if (debug)
		$('#log').prepend("<p style='text-align: left;'>["+(new Date()).toLocaleTimeString()+'] '+campo+' -> '+str+'</p>');

	$('#'+campo).html("<p style='text-align: center; margin-top: 25px;'><img src='imagens/loading.gif' /><br><br>Processando requisi&ccedil;&atilde;o ...</p>").load("index.php?sid="+Math.random(), eval("(" + str_obj + ")"), callback);
/*
	$.ajax({
		url: 'index.php?sid='+Math.random(),
		async: true,
		type: 'POST',
		data: eval('(' + str_obj + ')'),
		success: function(pagina) {
			$('#'+campo).html(pagina);
			if (callback)
				callback();
		}
	});
*/
}

function abrirJanela(w_size, h_size, title, str, callback) {
	h_size = h_size*1;
	w_size = w_size*1;

	if (str) {
		str_array = str.split('&');
		str_obj = '{ ';
		z = 0;
		for (i in str_array) {
			campo_valor = str_array[i].split('=');

			if (z++)
				str_obj += ', ';

			str_obj += '"' + campo_valor[0] + '" : "' + campo_valor[1] + '"';
		}
		str_obj += ' }';
	}

	if (!janelaAberta) {
		janelaModal = $.modal('',{
			opacity: 66,
			overlayId: 'bgOverlay',
			containerId: 'janelaOverlay',
			close: false
		});

		$('#bgOverlay').hide();
		$('#janelaOverlay').hide();

		$('#janelaOverlay').html("<div id='janela'></div>");
		if (title != '')
			$('#janelaOverlay').prepend("<div class='titlebar' id='titlebar'><a onclick=\"fecharJanela();\" id='botaofechar' class='closeModal' href='#'>&nbsp;</a><div id='titulojanela'>"+title+"</div></div>");
		else
			$('#janelaOverlay').css('border','4px inset #AAAAAA');

		janelaAberta = true;
		if (janelaModal.d.iframe)
			janelaModal.d.iframe.hide();
	}

	janOverlay = $('#janelaOverlay');
	jan = $('#janela');

	extra = 0;
	if (!jQuery.support.boxModel)
		extra = janOverlay.css('border-width').replace('px','')*2;

	jan.height(h_size).width(w_size);

	if (title != '')
		h_size += 21;

	janOverlay.height(h_size+extra).width(w_size+extra);

	janelaModal.setPosition();

	if (title != '') {
		$(document).bind('keydown.janelamodal', function(e) {
			if (e.keyCode == 27)
				fecharJanela();
		});

		$('#titulojanela').html(title);
	}

	if ($.browser.msie)
		document.body.style.overflow = 'hidden';

	if (janelaModal.d.iframe)
		janelaModal.d.iframe.show();

	$('#bgOverlay').show();
	janOverlay.show();

	if (str) {
		if (debug)
			$('#log').prepend("<p style='text-align: left;'>["+(new Date()).toLocaleTimeString()+'] janela -> '+str+'</p>');

		jan.html("<p style='text-align: center; margin-top: 25px;'><img src='imagens/loading.gif' /><br><br>Processando requisi&ccedil;&atilde;o ...</p>").load("index.php?sid="+Math.random(), eval("(" + str_obj + ")"), callback);
	}
}

function fecharJanela() {
	if ($.browser.msie)
		document.body.style.overflow = 'auto';

	$('#janela').html("");
	$('#bgOverlay').hide();
	$('#janelaOverlay').hide();
	if (janelaModal.d.iframe)
		janelaModal.d.iframe.hide();

	$(document).unbind('keydown.janelamodal');
}

function enviarForm(campo, formulario, str) {
	if (debug)
		$('#log').prepend("<p style='text-align: left;'>["+(new Date()).toLocaleTimeString()+'] '+campo+' -> '+str+'</p>');

	serialData = $('#'+formulario).serialize();

	$('#'+campo).html("<p style='text-align: center;'><img src='imagens/loading.gif' /><br><br>Processando requisi&ccedil;&atilde;o ...</p>");

	$.ajax({
		type: 'POST',
		url: 'index.php?sid='+Math.random(),
		data: str + '&' + serialData,
		success: function(response){
			$('#'+campo).html(response);
		}
	});
}

function enviarFormJanela(w_size, h_size, title, formulario, str) {
	abrirJanela(w_size, h_size, title, '');
	enviarForm('janela', formulario, str);
}

function checkPapel() {
	if (!$("input[@name='papelSelecionado']:checked").val()) {
		alert('Selecione um papel');
		return false;
	}
	else {
		return true;
	}
}

function checkAll(formulario) {
	retorno = true;

	vazios = 0;
	campos = '';

	obrigatorios = $('#'+formulario+' .obrig');
	for (i=0;i<obrigatorios.length;i++) {
		campoObrigatorio = $(obrigatorios[i]);
		label = $('#'+formulario+' label[for='+campoObrigatorio.attr('id')+']');

		if (campoObrigatorio.val() != '') {
			desmarcarErro(campoObrigatorio, label);
		}
		else {
			marcarErro(campoObrigatorio, label);

			if (campos != '')
				campos += ', ';
			campos += label.html();

			vazios++;
		}
	}

	if (vazios > 0) {
		if (vazios > 1)
			s = 's';
		else
			s = '';

		alert('Por favor, preencha o'+s+' campo'+s+' corretamente'+s+': ' + campos);
		retorno = false;
	}

	//se houver campo de senha, verificar se estao confirmadas corretamente
	campoSenha = $('#senha');
	campoSenhaConf = $('#senhaConf');

	if ((campoSenha.length > 0) && (campoSenha.length > 0)) {
		if (campoSenha.val() == campoSenhaConf.val()) {
			if (campoSenha.val()  != '') {
				desmarcarErro(campoSenha, $('#'+formulario+' label[for=senha]'));
				desmarcarErro(campoSenhaConf, $('#'+formulario+' label[for=senhaConf]'));
			}
		}
		else {
			marcarErro(campoSenha, $('#'+formulario+' label[for=senha]'));
			marcarErro(campoSenhaConf, $('#'+formulario+' label[for=senhaConf]'));

			if (retorno)
				alert('As senhas digitadas não conferem, por favor confirme-as novamente');
			retorno = false;
		}
	}

	//se houver algum campo email, verificar se estao corretos
	emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

	campoEmails = $('#'+formulario+' .email');
	for (i=0;i<campoEmails.length;i++) {
		campoEmail = $(campoEmails[i]);
		label = $('#'+formulario+' label[for='+campoEmail.attr('id')+']');

		if (((campoEmail.val() != '')) && (!emailPattern.test(campoEmail.val()))) {
			marcarErro(campoEmail, label);

			if (retorno)
				alert('Email inválido, digite novamente');
			retorno = false;
		}
	}

	//se houver algum campo data, verificar se estao corretas
	dataPattern = /^[0-3][0-9]-(0|1)[0-9]-(19|20)[0-9][0-9]$/;

	campoDatas = $('#'+formulario+' .data');
	for (i=0;i<campoDatas.length;i++) {
		campoData = $(campoDatas[i]);
		label = $('#'+formulario+' label[for='+campoData.attr('id')+']');

		if (campoData.val() != '') {
			erro = false;
			if (dataPattern.test(campoData.val())) {
				data_array = campoData.val().split('-');

				dia = data_array[0];
				mes = data_array[1] - 1;
				ano = data_array[2];

				dataobj = new Date(ano, mes, dia);

				if ((dia != dataobj.getDate()) || (mes != dataobj.getMonth()) || (ano != dataobj.getFullYear()))
					erro = true;
			}
			else {
				erro = true;
			}

			if (erro) {
				marcarErro(campoData, label);

				if (label.length > 0)
					nomeLabel = label.html();
				else
					nomeLabel = 'Data';

				if (retorno)
					alert(nomeLabel + ' inválida, digite novamente');
				retorno = false;
			}
			else {
				desmarcarErro(campoData, label);
			}
		}
		else {
			desmarcarErro(campoData, label);
		}
	}

	//se houver algum campo hora, verificar se estao corretas
	horaPattern = /^([0-1][0-9]|20|21|22|23):[0-5][0-9]$/;

	campoHoras = $('#'+formulario+' .hora');
	for (i=0;i<campoHoras.length;i++) {
		campoHora = $(campoHoras[i]);
		label = $('#'+formulario+' label[for='+campoHora.attr('id')+']');

		if (!horaPattern.test(campoHora.val())) {
			marcarErro(campoHora, label);

			if (retorno)
				alert(label.html() + ' inválida, digite novamente');
			retorno = false;
		}
		else {
			desmarcarErro(campoHora, label);
		}
	}

	return retorno;
}

function checkData(formulario, dataInicio, dataFim) {
	campoInicio = $('#'+dataInicio);
	campoFim = $('#'+dataFim);

	labelInicio = $('#'+formulario+' label[for='+dataInicio+']');
	labelFim = $('#'+formulario+' label[for='+dataFim+']');

	dataInicio_array = campoInicio.val().split('-');
	dataFim_array = campoFim.val().split('-');

	dataInicioObj = new Date(dataInicio_array[2], dataInicio_array[1]-1, dataInicio_array[0]);
	dataFimObj = new Date(dataFim_array[2], dataFim_array[1]-1, dataFim_array[0]);

	if (dataInicioObj > dataFimObj) {
		marcarErro(campoInicio, labelInicio);
		marcarErro(campoFim, labelFim);

		alert('A data de início não pode ser maior que a de fim, digite novamente');
		return false;
	}
	else {
		desmarcarErro(campoInicio, labelInicio);
		desmarcarErro(campoFim, labelFim);
		return true;
	}
}

function checkHora(formulario, horaInicio, horaFim) {
	campoInicio = $('#'+horaInicio);
	campoFim = $('#'+horaFim);

	labelInicio = $('#'+formulario+' label[for='+horaInicio+']');
	labelFim = $('#'+formulario+' label[for='+horaFim+']');

	horaInicio_array = campoInicio.val().split(':');
	horaFim_array = campoFim.val().split(':');

	horaInicioObj = new Date(2000, 0, 1, horaInicio_array[0], horaInicio_array[1], 0);
	horaFimObj = new Date(2000, 0, 1, horaFim_array[0], horaFim_array[1], 0);

	if (horaInicioObj >= horaFimObj) {
		marcarErro(campoInicio, labelInicio);
		marcarErro(campoFim, labelFim);

		alert('A hora de início não pode ser maior ou igual que a de fim, digite novamente');
		return false;
	}
	else {
		desmarcarErro(campoInicio, labelInicio);
		desmarcarErro(campoFim, labelFim);
		return true;
	}
}

function marcarErro(campo, label) {
	if (label.length > 0)
		label.css('color', '#AA3333');

	campo.css('backgroundColor', '#CC9999');
}

function desmarcarErro(campo, label) {
	if (label.length > 0)
		label.css('color', '#000000');

	campo.css('backgroundColor', '#FFFFFF');
}

function checkRadios(formulario, campo, msg) {
	if ($('#'+formulario+' input:radio[name='+campo+']:checked').val()) {
		return true;
	}
	else {
		alert(msg);
		return false;
	}
}

function loading() {
	$('#output').html("<div style='text-align: center; padding-top: 250px;'><img src='../imagens/loading.gif' /><br><br>Processando ...</div>");
}

function hide(idFilter,idResult) { //função ocultar/exibir filtro + redimensionar div de saída de dados
	if(document.getElementById(idFilter).style.display=="none") {
		document.getElementById(idFilter).style.display = "inline";
		document.getElementById(idResult).style.marginLeft = "290px";
		
	}
	else {
		document.getElementById(idFilter).style.display = "none";
		document.getElementById(idResult).style.marginLeft = "0px";
	}
}