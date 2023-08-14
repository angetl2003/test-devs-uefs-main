<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lista de Postagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="antialiased">
    <div class="container">
        <h2 class="text-center mb-4">Lista de Postagens</h2>
        <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-success mb-3">Nova Postagem</a>
        <a href="<?php echo e(route('users.index')); ?>" class="btn btn-success mb-3">Lista de Usuários</a>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($post->id); ?></td>
                    <td><?php echo e($post->title); ?></td>
                    <td><?php echo e($post->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('posts.show', $post->id)); ?>" class="btn btn-primary btn-sm">Ver</a>
                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-warning btn-sm">Editar</a>
                        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" class="d-inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php /**PATH /Users/angelatrindadeluzsantos/Downloads/test-devs-uefs-main/resources/views/posts/index.blade.php ENDPATH**/ ?>