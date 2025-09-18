<?php
session_start();

if (!isset($_SESSION['animais'])) {
    $_SESSION['animais'] = [];
}

$tipo_mensagem = '';
$mensagem = '';

$tipo_animais = ['Cachorro', 'Gato', 'Pássaro', 'Peixe'];

if ($_SERVER["REQUEST_METHOD"] === 'POST') {
    if (isset($_POST['acao'])) {
        switch ($_POST['acao']) {
            case 'inserir':
                if (!empty($_POST['nome']) && !empty($_POST['especie']) && !empty($_POST['idade'])) {
                    if (in_array($_POST['especie'], $tipo_animais)) {
                        $novo_animal = [
                            'id' => uniqid(),
                            'nome' => $_POST['nome'],
                            'especie' => $_POST['especie'],
                            'idade' => $_POST['idade']
                        ];
                        $_SESSION['animais'][] = $novo_animal;

                        $tipo_mensagem = 'sucesso';
                        $mensagem = 'Animal cadastrado com sucesso';
                    } else {
                        $tipo_mensagem = 'erro';
                        $mensagem = 'Preencha todos os campos';
                    }
                } else {
                    $tipo_mensagem = 'erro';
                    $mensagem = 'Preencha todos os campos';
                }
                break;
            case 'excluir':
                if (!empty($_POST['id'])) {
                    foreach ($_SESSION['animais'] as $key => $animal) {
                        if ($animal['id'] === $_POST['id']) {
                            unset($_SESSION['animais'][$key]);
                            $_SESSION['animais'] = array_values($_SESSION['animais']);
                            $tipo_mensagem = 'sucesso';
                            $mensagem = 'Animal excluído com sucesso';
                            break;
                        }
                    }
                }
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de animais</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="container">
        <div class="form-container">
            <?php if ($mensagem): ?>
                <div class="mensagem <?= $tipo_mensagem ?>">
                    <?= $mensagem ?>
                </div>
            <?php endif; ?>
            <h2>Insira o animal que deseja cadastrar</h2>
            <form method="POST">
                <input type="hidden" name="acao" value="inserir">
                <div class="form-group">
                    <label for="nome">Nome do animal:</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                <div class="form-group">
                    <label for="especie">Espécie:</label>
                    <select name="especie" id="especie">
                        <option value="">Selecione uma espécie</option>
                        <?php foreach ($tipo_animais as $key => $value): ?>
                            <option value="<?= $value ?>"><?= $value ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="idade">Idade:</label>
                    <input type="number" id="idade" name="idade" min="0" max="40" required>
                </div>
                <button type="submit" class="btn btn-sucess">Cadastrar Animal</button>
            </form>
        </div>
        <h2>Lista dos animais cadastrados</h2>
        <?php if (empty($_SESSION['animais'])): ?>
            <p>Nenhum animal cadastro até o momento</p>
        <?php else: ?>
            <table>
                <thead>
                    <th>Nome</th>
                    <th>Espécie</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['animais'] as $animal): ?>
                        <tr>
                            <td><?= htmlspecialchars($animal['nome']); ?></td>
                            <td><?= htmlspecialchars($animal['especie']); ?></td>
                            <td><?= htmlspecialchars($animal['idade']); ?></td>
                            <td class="acoes">
                                <form method="POST" class="form-inline">
                                    <input type="hidden" name="acao" value="excluir">
                                    <input type="hidden" name="id" value="<?= $animal['id']; ?>">
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Tem certeza que deseja exluir ?')">Excluir</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    </div>
</body>

</html>