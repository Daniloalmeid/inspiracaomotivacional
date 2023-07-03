<!-- Corpo do HTML -->

<!-- Laço de repetição para gerar as frases -->
<!-- Adicione esse código no local onde deseja exibir as frases -->
<!-- Certifique-se de substituir as frases e as URLs de compartilhamento adequadas -->

<!-- Início do laço de repetição -->
<?php
// Array com as frases
$frases = array(
    "Frase 1",
    "Frase 2",
    "Frase 3",
    "Frase 4",
    "Frase 5",
    // Adicione mais frases aqui
);

// Embaralhar o array de frases
shuffle($frases);

// Loop para gerar as frases
for ($i = 1; $i <= 100; $i++) {
    $fraseAleatoria = $frases[$i % count($frases)];

    echo '<!-- Frase ' . $i . ' -->';
    echo '<div id="frases">';
    echo '<img id="aspas1" src="imagens/icon/aspas1.png" alt="Fernando Pessoa, Fernando Pessoa motivação, inspiração motivacional, frases do dia, mensagem motivacional, escritor português, Autoestima, ajuda, maiores poetas da língua portuguesa">';
    echo '<p id="pfrases">' . $fraseAleatoria . '</p>';
    echo '<img id="aspas2" src="imagens/icon/aspas2.png" alt="Aspas, Frases Fernando Pessoa"><br>';
    echo '<p><a href="fernando_pessoa.html">Fernando Pessoa</a></p> <br>';
    echo '<div id="containericon">';
    echo '<h4>Compartilhar Frase</h4>';
    echo '<img id="imgcompartilhar" src="imagens/icon/compartilhar.png" alt="Compartilhar frases motivacionais, compartilhar frases de Fernando Pessoa, Citações inspiradoras, Sucesso pessoal">';
    echo '<a href="https://api.whatsapp.com/send?text=' . $fraseAleatoria . ' https://www.inspiracaomotivacional.com.br/" target="_blank"><img id="imgfrases" src="imagens/redessociais/watz.png" alt="Compartilhar frases motivacionais no WhatsApp, compartilhar frases de Fernando Pessoa, Motivação diária, Sonhos e realizações"></a>';
    echo '<a href="https://www.facebook.com/sharer/sharer.php?u=https://inspiracaomotivacional.com.br/" target="_blank"><img id="imgfrases" src="imagens/redessociais/logo-facebook.png" alt="Compartilhar frases motivacionais no Facebook, compartilhar frases de Fernando Pessoa, Transformação pessoal"></a>';
    echo '<a href="https://twitter.com/intent/tweet?url=https://www.inspiracaomotivacional.com.br&text=' . $fraseAleatoria . '" target="_blank"><img id="imgfrases" src="imagens/redessociais/logo-twitter.jpg" alt="Compartilhar frases motivacionais no Twitter, compartilhar Fernando Pessoa, Autoconfiança"></a>';
    echo '</div>';
    echo '</div>';
    echo '<!-- Final Frase ' . $i . ' -->';
}
?>
<!-- Fim do laço de repetição -->

<!-- Final HTML -->