php pode ser colocado dentro do html ou ficar em arquivo separado. um arquivo php pode ter código html

include - inclui arquivo
include_once - é igual ao include, mas verifica se ele já foi incluído anteriormente, evitando duplicidade. em termpos de desempenho é pior, pq ele tem que fazer a verificação antes de importar
require - igual ao include, mas é uma inclusão obrigatória. se o arquivo nao existir, vai dar um erro fatal (diferente do include, cujo script roda normalmente mesmo assim)7
require_once - igual ao include_once, mas com inclusão obrigatória


explode(separador, string) - é o antigo split(), separa strings com base no separador
implode(caracter, conteúdo) - é o antigo join(), contrário do explode

rand() - sorteia elemento aleatório entre 2 elementos

<form class="formulario" name="teste" action="index.html" method="post">
    name - é o que o php pega como variável no formulário
    action - é quem processa as variáveis no formulário
    method - é como os dados serão enviados pelo formulário
</form>

htmlspecialchars(html) - converte qualquer texto html em texto puro (evita html injection)
