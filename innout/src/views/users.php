<!DOCTYPE html>
<html>
<meta charset="utf-8" />

<main class="content">
    <?php

    header('Content-Type: text/html; charset=utf-8', true);

        renderTitle(
            'Cadastro de Usuários',
            'Mantenha os dados dos usuários atualizados',
            'icofont-users'
        );

        include(TEMPLATE_PATH . "/messages.php");
    ?>

    <a class="btn btn-lg btn-primary mb-3"
        href="save_user.php">Novo Usuário</a>

    <table class="table table-bordered table-striped table-hover">
        <thead>
            <th>Nome</th>
            <th>Email</th>
            <th>Administrador ( 1=Sim | 0=Não)</th>
            <th>Data de Admissão</th>
            <th>Data de Desligamento</th>
            <th>Ações</th>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= utf8_encode($user->name) ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->is_admin ?></th>
                    <td><?= $user->start_date ?></td>
                    <td><?= $user->end_date ?></td>
                    <td>
                        <a href="save_user.php?update=<?= $user->id ?>" 
                            class="btn btn-warning rounded-circle mr-2">
                            <i class="icofont-edit"></i>
                        </a>
                        <a href="?delete=<?= $user->id ?>"
                            class="btn btn-danger rounded-circle">
                            <i class="icofont-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach?>
        </tbody>
    </table>
</main>
</html>