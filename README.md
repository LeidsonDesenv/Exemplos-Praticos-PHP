# Exemplos-Praticos-PHP

<h2>Voxus - Teste de Programação</h2>

<h2>Repositório criado para praticar PHP</h2>

<h3>Pasta Models</h3>
<p>Na Pasta models temos a Classe Queue com os métodos pushQueue, popQueue, min e minWithSession.</p>

<p>O <strong>pushQueue</strong> é o método responsável por adicionar novos itens ao array público list esse método recebe um parametro chamado item  que é submetido do formulário, o valor é validado como inteiro antes de fazer parte da lista. </p>

<p>O <strong>popQueue</strong> é o método responsável por remover os ultimos itens da lista, primeiro é verificado se o array list tem itens e caso tenha o último item é removido</p>

<p>O <strong>min</strong> é o método responsável por retornar o menor valor inteiro do array list, primeiro é criado o maior número inteiro em PHP com a constante PHP_INT_MAX, depois é verificado quantos itens tem no array list depois é criado um loop "for" que interage com todos itens da lista e compara os valores com a variável que recebeu o maior valor inteiro, a variável  $smaller_num e sempre que é incontrado um valor menor que o que está armazenado na variável há uma nova atribuição a  $smaller_num chegando no final do array com o menor valor. </p>

<p>O <strong>minWithSession</strong> é um método que funciona igual ao método min, porem recebe o parametro $session_array que é uma Session do PHP que será usada para armazenar os dados da variável pública list e apresentada ao usuário na view.</p>

<h3>Arquivo index</h3>
<p>
    É o arquivo de apresentação do repositório, tem  os CDN do Jquery, CDN do Javascript do BootStrap, tem o link para a pasta style que tem o bootstrap.css e que terá outros arquivos de estilo no futuro.<br/>
    Além do Header para uma apresentação amigavél tem um formulário com os botões e links para testar a classe Queue.<br/>
    Um input type="number" para incluir o número, o botão de submit que envia o valor do input para o arquivo setQueueItem.php que recebe o valor inicia uma session chamada "num_list" se os valores foram submetidos corretamente, instancia a classe Queue, verifica se o campo está vazio e retira os espaços no começo e fim do campo, chama o método pushQueue, passa o valor do post fazend casting para inteiro e cria um loop foreach para passar todos dados de list da classe Queue para a Session ListaDeInts.
</p>

<h3>Exibição e Interação</h3>

<p>Após incluir um item na lista é possível ver o resultado na view, tem um método de array chamado var_dump e um loop foreach "comentado" para que se possa ver todos itens adicionados na  Session ListaDeInts, para remover o ultimo item da lista é só clicar no botão em vermelho que aparece logo depois de incluir o primeiro item, também tem o botão azul que torna o menor numero da lista no campo a baixo dele e o botão amarelo que a lista.</p>

<h4>Deletar Último Item, Retornar Menor Número e Deletar Lista</h4>

<p> Esses três links viram botões graças as classes do bootstrap e cada um linka a uma arquivo diferente que vai modificar a página para o usuário, todos arquivos estão na pasta QueueController para melhor organizar a aplicação, o <strong>Deletar Último Item</strong> linka ao arquivo delLastItem.php que remove o último item da session e apaga esse item para o usuário, no arquivo primeiro é iniciado a Session verifica se a Session ListaDeInts existe e se a quantidade de itens é maior que zero e depois usa o método array_pop para remover o último item.<br/>

    O <strong>Retornar Menor Número</strong> chama o arquivo getMinSession.php que inicia a Session, declara o uso da classe Queue, instancia um objeto de Queue, verifica se a Session ListaDeInts existe e se tem mais itens que zero, depois acessa o método minWithSession já explicado da classe Queue que retorna o menor item da Session, esse valor retornado é usado para mostrar o menor número da lista para o usuário e ele fica armazenado na Session small_num que é mostrado no campo a baixo do botão no formulário<br/>
    
O <strong>Deletar Lista</strong>  chama o arquivo delList.php que inicia a Session, execulta o comando para deletar a session e retorna para página index.php .
</p>