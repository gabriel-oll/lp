 objective:
create a landing page with CMS features.

 methods:
HTML5,CSS3,JQUERY,PHP

objetivo da aplicação back-end

//O principal intuito do back-end da aplicação é primeiramente popular os campos das tabelas e incluir os identificadores, setados com id. O id será necessario para especificar a qual campo aquele dado pertence, ou seja será aplicada a condição utilizando-o. Ao alimentar as tabelas devemos então criar uma função que irá alimentar a LP com os dados do db, no caso as fotos com href ou path em si, para que toda vez que houver alteração a função seja rodada e as alterações sejam feitas. Após isso teremos um dashboard que terá campos de modificação por tipo, como imagens e textos, no caso. Ao entrar no dashboard, haverao seções referentes ao tipo de arquivo e um formulário com checkbox de multipla escolha que definirá qual identificador você esta selecionando, ou seja, haverão 3 opções de escolha e cada uma corresponde a uma foto ou um texto diferente, todos identificados na plataforma e após a seleção sera feita sua substituição alimentando o formulário com o conteudo desejado, seja ele texto ou imagem. A requisição é então realizada e o db faz o update dos dados, daí toda alteração feita podera ser refletida na LP quando no sistema de relação cliente-servidor for deifinido (PHP precisa de LIB ou API para rodar websockets, podendo ser feito também um long-polling, mas WS é mais adequado para esta aplicação)//