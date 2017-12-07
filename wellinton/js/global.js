// Wellinton Vieira
// Programação para Internet I

function mensagemErro() {
	alert("Usuário ou Senha inválidos.");
}

function mensagemCadastro(){
	alert("Cadastrado com sucesso.");
}

function mensagemErroCadastro(){
	alert("Erro ao cadastrar.");
}

function mensagemErroCadastroExistente(){
	alert("Usuário já existente.");
}

function validarSenhas(form) {

	senha = document.formNovoUsuario.senha.value;
	senhaRepetida = document.formNovoUsuario.senhaRepetida.value;

	if (senha != senhaRepetida) {
		document.formNovoUsuario.senhaRepetida.focus();
		alert("Senhas não conferem.");
		return false;
	}
}

function imageSelect(obj, imagePath){
	document.getElementById(obj).src = imagePath;
}
